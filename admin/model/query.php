<?php
    class Query {
        public $pdo;

        public function __construct() {
            $this->pdo = connectDB();
        }

        public function __destruct() {
            $this->pdo = NULL;
        }

        public function listProduct() {
            try{
                $sql = "SELECT * FROM `products`";
                $result = $this->pdo->query($sql)->fetchAll();
                $array_listProduct = [];
                foreach ($result as $rs) {
                    $product = new product;
                    $product->name = $rs['name'];
                    $product->description = $rs['description'];
                    $product->price = $rs['price'];
                    $product->quantity = $rs['quantity'];
                    $product->image = $rs['image'];
                    $product->brand_id = $rs['brand_id'];
                    $product->category_id = $rs['category_id'];
                    $product->status = $rs['status'];
                    $array_listProduct[] = $product;
                }
                return $array_listProduct;
            }

            catch(Exception $e) {
                $e->getMessgae();
            }
        }

    }
?>