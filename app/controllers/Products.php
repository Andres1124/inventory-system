<?php

class Products extends Controller
{
    public function __construct()
    {
        $this->product = $this->model('Product');
        $this->order = $this->model('Order');
    }

    public function index()
    {

        $products = $this->product->getProducts();

        $params = [
            'products' => $products
        ];

        $this->view("pages/products/products", $params);
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $product = [
                'name' => trim($_POST['name']),
                'reference' => trim($_POST['reference']),
                'price' => trim($_POST['price']),
                'weight' => trim($_POST['weight']),
                'category' => trim($_POST['category']),
                'stock' => trim($_POST['stock']),
                'created_at' => date("Y") . '/' . date("m") . '/' . date("d")
            ];

            if ($this->product->register($product)) {
                redirect('/products/index');
            }
        } else {
            $this->view('pages/products/create-product');
        }
    }

    public function update($idProduct)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $product = [
                'name' => trim($_POST['name']),
                'reference' => trim($_POST['reference']),
                'price' => trim($_POST['price']),
                'weight' => trim($_POST['weight']),
                'category' => trim($_POST['category']),
                'stock' => trim($_POST['stock']),
                'created_at' => date("Y") . '/' . date("m") . '/' . date("d"),
                'id' => $idProduct
            ];

            if ($this->product->update($product)) {
                redirect('/products/index');
            }
        } else {
            $product = $this->product->getProduct($idProduct);
            $params = [
                'product_id' => $product[0]->id,
                'name' => $product[0]->name,
                'reference' => $product[0]->reference,
                'price' => $product[0]->price,
                'weight' => $product[0]->weight,
                'category' => $product[0]->category,
                'stock' => $product[0]->stock,
            ];

            $this->view('pages/products/update-product', $params);
        }
    }

    public function delete($idProduct)
    {
        if ($this->order->deleteOrder($idProduct) && $this->product->delete($idProduct)) {
            redirect('/products/index');
        }
    }

    public function order($idProduct = null)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $product = $this->product->getProduct($idProduct);

            if ($product[0]->stock < trim($_POST['quantity'])) {
                echo '<script language="javascript"> alert("No puedes vender una cantidad mayor del stock del producto");
                window.location.href="http://localhost/inventory-system/products/order/";
            </script>';
            } else {
                $order = [
                    'quantity' => trim($_POST['quantity']),
                    'order_date' => date("Y") . '/' . date("m") . '/' . date("d"),
                    'product_id' => $idProduct
                ];

                if ($this->order->saveOrder($order) && $this->order->discountStockForProduct($order)) {
                    echo '<script language="javascript"> alert("Producto vendido");
                window.location.href="http://localhost/inventory-system/products/index";
            </script>';
                }
            }
        } else {
            if ($idProduct == null) {
                redirect('/products/index');
            } else {
                $product = $this->product->getProduct($idProduct);
                $params = [
                    'product_id' => $product[0]->id,
                    'stock' => $product[0]->stock,
                ];
            }

            $this->view('pages/products/create-order', $params);
        }
    }
}
