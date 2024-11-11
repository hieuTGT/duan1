<?php
    class brands {
        public $id;
        public $name;
    }

    class categories {
        public $id;
        public $name;
        public $description;
    }

    class customers {
        public $id;
        public $name;
        public $email;
        public $password;
        public $address;
        public $phone;
    }

    class feedback{
        public $id;
        public $product_id;
        public $customer_id;
        public $rating;
        public $comment;
        public $feedback_date;
    }

    class orders{
        public $id;
        public $customers_id;
        public $order_date;
        public $status;
    }

    class orders_items{
        public $id;
        public $order_id;
        public $product_id;
        public $quantity;
        public $price;
    }

    class product {
        public $id;
        public $name;
        public $description;
        public $price;
        public $quantity;
        public $image;
        public $brand_id;
        public $category_id;
        public $status;
    }

    class product_variants {
        public $id;
        public $product_id;
        public $color;
        public $image;
        public $quantity;
    }
    

    class users{
        public $id;
        public $customer_id;
        public $email;
        public $password;
        public $name;
    }

    class promotions {
        public $id;
        public $name;
        public $discount;
        public $start_date;
        public $end_date;
        public $promotion_id;
        public $description;
    }
?>