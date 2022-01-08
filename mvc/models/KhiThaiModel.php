<?php
class KhiThaiModel extends DB{

    public function GetCauTraLoiKhiThai(){
        $qr = "SELECT * FROM `cautraloi` WHERE cautraloi.idcauhoi=8 OR idcauhoi=21";
        $query = mysqli_query($this->con, $qr);
        return $query;
    }
    public function ResultKhiThai($mangTxt, $mangKhiThai) {
        
    }

}
?>