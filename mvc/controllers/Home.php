<?php

// http://localhost/carFailed_CaseBaseReasioning-php-mvc/Home
class Home extends Controller{

    // Must have SayHi()
    function SayHi(){
        $phanh = $this->model("PhanhModel");
        $dongco = $this->model("DongCoModel");
        $dien = $this->model("DienModel");
        $khithai = $this->model("KhiThaiModel");
        $truyenluc = $this->model("TruyenLucModel");
        $chuyendong = $this->model("ChuyenDongModel");

        $cauTraLoiPhanh = $phanh->GetCauTraLoiPhanh();
        $cauTraLoiDongCo = $dongco->GetCauTraLoiDongCo();
        $cauTraLoiDien = $dien->GetCauTraLoiDien();
        $cauTraLoiKhiThai = $khithai->GetCauTraLoiKhiThai();
        $cauTraLoiTruyenLuc = $truyenluc->GetCauTraLoiTruyenLuc();
        $cauTraLoiChuyenDong = $chuyendong->GetCauTraLoiChuyenDong();
        $cauTraLoiAll = $chuyendong->GetCauTraLoiAll();

        // Call Views
        $this->view("main", [
            "Page"=>"form",
            "CauTraLoiPhanh"=>$cauTraLoiPhanh,
            "CauTraLoiDongCo"=>$cauTraLoiDongCo,
            "CauTraLoiDien"=>$cauTraLoiDien,
            "CauTraLoiKhiThai"=>$cauTraLoiKhiThai,
            "CauTraLoiTruyenLuc"=>$cauTraLoiTruyenLuc,
            "CauTraLoiChuyenDong"=>$cauTraLoiChuyenDong,
            "CauTraLoiAll"=>$cauTraLoiAll,
        ]);
    }

}
?>