<?php
class ProductModel{
    public function getProductList(){
        return [
            "San pham 1",
            "San pham 2"
        ];
    }

    public function getDetail($id){
        $data = [
            "San pham 1",
            "San pham 2",
            "San pham 3",
            "San pham 4",
            "San pham 5",
            "San pham 6",
        ];

        return $data[$id];
    }
}