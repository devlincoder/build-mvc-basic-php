<?php
class HomeModel{
    public $_table = "products";

    public function getList(){
        $data = [
            "Item 1",
            "Item 2",
            "Item 3",
        ];

        return $data;
    }
}