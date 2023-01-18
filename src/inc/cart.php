<?php 
    class Cart{
        private $products = [];
        private $total_items = 0;
        private $total_price = 0;

        public function addProduct($new_product){
            foreach ($this->$products as $product){
                if ($product["id"] == $new_product["id"]){
                    $product["qty"]++;
                    $this->$total_items++;
                    $this->$total_price += $product["price"];
                    return;
                }
            }
            array_push($this->$products, $product);
            $this->$total_items++;
            $this->$total_price += $product["price"];
        }

        public function removeProduct($productID) {
            foreach ($this->$products as $product){
                if ($product["id"] == $productID){
                    if ($product["qty"] > 1) {
                        $product["qty"]--;
                        $this->$total_items--;
                        $this->$total_price -= $product["price"];
                        return;
                    }

                    unset($products);
                    $this->$total_items--;
                    $this->$total_price -= $product["price"];
                    return;
                }
            }
        }


        public function get_products() {
            return $this->products;
        }
    }
?>