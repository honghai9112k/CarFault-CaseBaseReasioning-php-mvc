<?php
class DienModel extends DB{

    public function GetCauTraLoiDien(){
        $qr = "SELECT * FROM `cautraloi` WHERE cautraloi.idcauhoi>=12 AND idcauhoi<=15 OR idcauhoi=8 OR idcauhoi=20";
        $query = mysqli_query($this->con, $qr);
        return $query;
    }
    public function ResultDien($mangTxt, $mangDien) {
        
    }

}
?>