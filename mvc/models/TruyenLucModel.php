<?php
class TruyenLucModel extends DB{

    public function GetCauTraLoiTruyenLuc(){
        $qr = "SELECT * FROM `cautraloi` WHERE idcauhoi=22";
        $query = mysqli_query($this->con, $qr);
        return $query;
    }
    public function ResultTruyenLuc($mangTxt, $mangTruyenLuc) {
        
    }

}
?>