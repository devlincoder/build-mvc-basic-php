<?php

class Product extends Controller
{
    public $data = [] ;

    public function index()
    {
        echo "Product Page";
    }

    public function list_product()
    {
        $product = $this->model("ProductModel");
        $dataProduct = $product->getProductList();

        $title = "Danh sach san pham";

        $this->data["product_list"] = $dataProduct;
        $this->data["page_title"] = $title;
        //Render views
        $this->render("products/list", $this->data);
    }

    public function detail($id=0)
    {
        $product = $this->model("ProductModel");
        $this->data["info"] = $product->getDetail($id);
        $this->render("products/detail",$this->data);
    }
}
