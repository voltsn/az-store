<?php 
    class Cart{
        private $products = [];
        private $total_items = 0;
        private $total_price = 0;


        public function addProduct($new_product){
            for ($i = 0; $i < count($this->products); $i++){
                if ($this->products[$i]["id"] == $new_product["id"]){
                    $this->products[$i]["qty"]++;
                    
                    $this->total_items++;
                    $this->total_price += $this->products[$i]["price"];
                    return;
                }
            }

            $new_product["qty"] = 1;
            array_push($this->products, $new_product);
            $this->total_items++;
            $this->total_price += $new_product["price"];
        }

        public function get_total_price(){
            return $this->total_price;
        }

        public function removeProduct($productID) {
            foreach ($this->products as $product){
                if ($product["id"] == $productID){
                    if ($product["qty"] > 1) {
                        $product["qty"]--;
                        $this->total_items--;
                        $this->total_price -= $product["price"];
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

        public function get_total_items(){
            return $this->total_items;
        }
    }

?>