<?php

class Order
{
    private $db;

    public function __construct()
    {
        $this->db = new Base;
    }

    public function saveOrder($order)
    {
        $this->db->query("INSERT INTO orders (order_date, products_id, quantity) VALUES (:order_date, :products_id, :quantity)");
        $this->db->bind(':order_date', $order['order_date']);
        $this->db->bind(':quantity', $order['quantity']);
        $this->db->bind(':products_id', $order['product_id']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function discountStockForProduct($order)
    {
        $this->db->query('UPDATE products SET stock = stock - :quantity WHERE id = :id');
        $this->db->bind(':quantity', $order['quantity']);
        $this->db->bind(':id', $order['product_id']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteOrder($idProduct)
    {
        $this->db->query('DELETE FROM orders WHERE products_id = :id');
        $this->db->bind(':id', $idProduct);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
