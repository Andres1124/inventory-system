<?php

class Product
{
    private $db;

    public function __construct()
    {
        $this->db = new Base;
    }

    public function getProduct($idProduct)
    {
        $this->db->query('SELECT * FROM products WHERE id = :id');
        $this->db->bind(':id', $idProduct);
        return $this->db->registers();
    }

    public function getProducts()
    {
        $this->db->query('SELECT id, name, reference, price, weight, category, stock, created_at FROM products');
        return $this->db->registers();
    }

    public function register($product)
    {
        $this->db->query('INSERT INTO products (name, reference, price, weight, category, stock, created_at) VALUES (:name, :reference, :price, :weight, :category, :stock, :created_at)');
        $this->db->bind(':name', $product['name']);
        $this->db->bind(':reference', $product['reference']);
        $this->db->bind(':price', $product['price']);
        $this->db->bind(':weight', $product['weight']);
        $this->db->bind(':category', $product['category']);
        $this->db->bind(':stock', $product['stock']);
        $this->db->bind(':created_at', $product['created_at']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function update($product)
    {
        $this->db->query('UPDATE products SET name = :name, reference = :reference, price = :price, weight = :weight,
         category = :category, stock = :stock, created_at = :created_at WHERE id = :id');
        $this->db->bind(':name', $product['name']);
        $this->db->bind(':reference', $product['reference']);
        $this->db->bind(':price', $product['price']);
        $this->db->bind(':weight', $product['weight']);
        $this->db->bind(':category', $product['category']);
        $this->db->bind(':stock', $product['stock']);
        $this->db->bind(':created_at', $product['created_at']);
        $this->db->bind(':id', $product['id']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($idProduct)
    {
        $this->db->query('DELETE FROM products WHERE id = :id');
        $this->db->bind(':id', $idProduct);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
