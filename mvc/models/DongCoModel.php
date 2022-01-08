<?php
class DongCoModel extends DB{

    public function GetCauTraLoiDongCo(){
        $qr = "SELECT * FROM `cautraloi` WHERE cautraloi.idcauhoi>=8 AND idcauhoi<=11 OR idcauhoi=19";
        $query = mysqli_query($this->con, $qr);
        return $query;
    }
    public function ResultDongCo($mangTxt, $mangDongCo) {
        
    }

}
?>