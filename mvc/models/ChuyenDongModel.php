<?php
class ChuyenDongModel extends DB{

    public function GetCauTraLoiChuyenDong(){
        $qr = "SELECT * FROM `cautraloi` WHERE cautraloi.idcauhoi>=16 AND idcauhoi<=18 OR idcauhoi=23";
        $query = mysqli_query($this->con, $qr);
        return $query;
    }
    public function ResultChuyenDong($mangTxt, $mangChuyenDong) {
        
    }

}
?>