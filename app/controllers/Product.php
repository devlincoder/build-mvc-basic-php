<?php

class Product extends Controller
{
    public function index()
    {
        echo "Product Page";
    }

    public function list_product()
    {
        $product = $this->model("ProductModel");
        $data = $product->getProductList();
        print_r($data);
    }
}
