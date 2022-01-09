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
        // foreach($mangPhanh as $key => $value) {
        //     echo $value;
        // }

        require_once "./mvc/views/pages/result.php";
    }
    public function GetError()
    {
        echo"Vui lòng điền đẩy đủ các trường gắn dấu *.!!!";
    }
}
