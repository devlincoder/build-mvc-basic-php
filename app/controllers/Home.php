<?php
class Home extends Controller
{
    public $model_home;

    public function __construct(){
        $this->model_home = $this->model("HomeModel");
        var_dump($this->model_home);
    }

    public function index()
    {
        $data = $this->model_home->getList();

        print_r($data);
    }
}
