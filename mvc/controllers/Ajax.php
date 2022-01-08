<?php
class Ajax extends Controller
{
    public $phanhmodel;

    public function __construct()
    {
        $this->phanhmodel = $this->model("PhanhModel");
    }
    public function GetResult()
    {
        $mangPhanh = $_POST['mangPhanh'];
        $mangText = $_POST['mangText'];

        $resultPhanh = $this->phanhmodel->ResultPhanh($mangText, $mangPhanh);
        echo "Lỗi tại hệ thống Phanh: ";
        // foreach($mangPhanh as $key => $value) {
        //     echo $value;
        // }
        echo ($resultPhanh['nguyenhan']);
        echo 'và cách sửa chữa';
        echo ($resultPhanh['suachua']);
    }
}
