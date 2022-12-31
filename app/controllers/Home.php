<?php
class Home
{
    public function index()
    {
        echo "Home Page";
    }

    public function detail($id = "", $slug = "")
    {
        echo "Id san pham" . $id;
        echo "Slug san pham" . $slug;
    }

    public function search()
    {
        $keyword = $_GET["keyword"];
        echo "Ket qua tim kiem" . $keyword;
    }
}
