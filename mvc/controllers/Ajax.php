<?php
class Ajax extends Controller
{
    public $phanhmodel;
    public $dongcomodel;
    public $dienmodel;
    public $khithaimodel;
    public $truyenlucmodel;
    public $chuyendongmodel;

    public function __construct()
    {
        $this->phanhmodel = $this->model("PhanhModel");
        $this->dongcomodel = $this->model("DongCoModel");
        $this->dienmodel = $this->model("DienModel");
        $this->khithaimodel = $this->model("KhiThaiModel");
        $this->truyenlucmodel = $this->model("TruyenLucModel");
        $this->chuyendongmodel = $this->model("ChuyenDongModel");

        $this->logmodel = $this->model("LogModel");
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
        $resultKhac = $_POST['khacBigTxt'];

        $resultPhanh = $this->phanhmodel->ResultPhanh($mangText, $mangPhanh);
        $resultDongCo = $this->dongcomodel->ResultDongCo($mangText, $mangDongCo);
        $resultDien = $this->dienmodel->ResultDien($mangText, $mangDien);
        $resultKhiThai = $this->khithaimodel->ResultKhiThai($mangText, $mangKhiThai);
        $resultTruyenLuc = $this->truyenlucmodel->ResultTruyenLuc($mangText, $mangTruyenLuc);
        $resultChuyenDong = $this->chuyendongmodel->ResultChuyenDong($mangText, $mangChuyenDong);

        // Lưu vào csdl
        $checklogmodel = $this->logmodel->SaveLog($mangText, $mangPhanh, $mangDongCo, $mangDien, $mangKhiThai, $mangTruyenLuc, $mangChuyenDong, $resultKhac);
        // In kết quả
        require_once "./mvc/views/pages/result.php";
    }
    public function GetError()
    {
        echo "Vui lòng điền đẩy đủ các trường gắn dấu *.!!!";
    }
    public function GetHeThong()
    {
        $idCauTraLoi = $_POST['idCauTraLoi'];
        $tenHeThong = $this->chuyendongmodel->GetHeThongByIdCauTraLoi($idCauTraLoi);
        if ($tenHeThong == 'Phanh') {
            echo "phanh";
        }
        if ($tenHeThong == 'Động cơ') {
            echo ("dongco");
        }
        if ($tenHeThong == 'Điện') {
            echo ("dien");
        }
        if ($tenHeThong == 'Chuyển động') {
            echo ("chuyendong");
        }
        if ($tenHeThong == 'Truyền lực') {
            echo ("truyenluc");
        }
        if ($tenHeThong == 'Khí thải') {
            echo ("khithai");
        }
    }
    public function GatCauTraLoi()
    {
        $idCauTraLoi = $_POST['idCauTraLoi'];
        $cautraloi = $this->chuyendongmodel->GetCauTraLoiByIdCauTraLoi($idCauTraLoi);
        echo ($cautraloi);
    }
}
