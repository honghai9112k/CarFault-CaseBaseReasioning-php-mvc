<?php
class Ajax extends Controller
{
    public $phanhmodel;

    public function __construct()
    {
        $this->phanhmodel = $this->model("PhanhModel");
        $this->dongcomodel = $this->model("DongCoModel");
        $this->dienmodel = $this->model("DienModel");
        $this->khithaimodel = $this->model("KhiThaiModel");
        $this->truyenlucmodel = $this->model("TruyenLucModel");
        $this->chuyendongmodel = $this->model("ChuyenDongModel");
    }
    public function GetResult()
    {
        $mangText = $_POST['mangText'];
        $mangPhanh = $_POST['mangPhanh'];
        $mangDongCo = $_POST['mangDongCo'];
        $mangDien = $_POST['mangDien'];
        $mangKhiThai = $_POST['mangKhiThai'];
        $mangTruyenLuc = $_POST['mangTruyenLuc'];
        $mangChuyenDong = $_POST['mangChuyenDong'];

        $resultPhanh = $this->phanhmodel->ResultPhanh($mangText, $mangPhanh);
        $resultDongCo = $this->dongcomodel->ResultDongCo($mangText, $mangDongCo);
        $resultDien = $this->dienmodel->ResultDien($mangText, $mangDien);
        $resultKhiThai = $this->khithaimodel->ResultKhiThai($mangText, $mangKhiThai);
        $resultTruyenLuc = $this->truyenlucmodel->ResultTruyenLuc($mangText, $mangTruyenLuc);
        $resultChuyenDong = $this->chuyendongmodel->ResultChuyenDong($mangText, $mangChuyenDong);

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
