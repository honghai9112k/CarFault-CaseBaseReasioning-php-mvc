<?php
class PhanhModel extends DB
{

    public function GetCauTraLoiPhanh()
    {
        $qr = "SELECT * FROM `cautraloi` WHERE cautraloi.idcauhoi>3 AND idcauhoi<=7";
        $query = mysqli_query($this->con, $qr);
        return $query;
    }
    public function GetResultByIdCase($idcase)
    {
        $qr = "SELECT ketluan.* FROM `ketluan` WHERE ketluan.id='$idcase';";
        $query = mysqli_query($this->con, $qr);
        $rs = mysqli_fetch_assoc($query);
        return $rs;
    }
    public function CountCasePhanh()
    {
        $qr = "SELECT COUNT(ketluan.id) FROM ketluan WHERE ketluan.hethong='Phanh';";
        $query = mysqli_query($this->con, $qr);
        $rs = mysqli_fetch_assoc($query);
        return $rs;
    }
    public function GetCasePhanh($idcase)
    {
        $qr = "SELECT motacase.*,cautraloi.cautraloi,cauhoi.id AS 'idcauhoi', cauhoi.cauhoi, cauhoi.trongso 
        FROM motacase JOIN cautraloi JOIN cauhoi
        ON motacase.idcautraloi=cautraloi.id AND cautraloi.idcauhoi=cauhoi.id AND motacase.idcase='$idcase';";

        $query = mysqli_query($this->con, $qr);
        return $query;
    }
    public function GetListIdCasePhanh()
    {
        $qr = "SELECT ketluan.id FROM `ketluan` WHERE ketluan.hethong='Phanh';";

        $query = mysqli_query($this->con, $qr);
        return $query;
    }
    public function GetKetQuaByIdCase($idcase){
        $qr = "SELECT * FROM `ketluan` WHERE ketluan.hethong='Phanh' AND ketluan.id='$idcase' ;";
        $query = mysqli_query($this->con, $qr);
        $rs = mysqli_fetch_assoc($query);
        return $rs;
    }
    public function ResultPhanh($mangTxt, $mangPhanh)
    {  
        $listIdCase = $this->GetListIdCasePhanh();
        $resultIdCase= 0;
        $dotuongdongText = 0;
        foreach ($listIdCase as $k => $vl) {
            $dotuongdong = 0;
            $casedata = $this->GetCasePhanh($vl['id']);
            foreach ($casedata as $key => $value) {
                for ($i = 1; $i < 8; $i++) {
                    if ($value['idcauhoi'] == $i && $i <= 3) {
                        if ($value['cautraloi'] === $mangTxt[$key]) {
                            $dotuongdong = $dotuongdong + (int)$value['trongso'];
                        }
                    }
                    if ($value['idcauhoi'] == $i && $i > 3) {
                        if ($value['cautraloi'] === $mangPhanh[$i - 4]) {
                            $dotuongdong = $dotuongdong + (int)$value['trongso'];
                        }
                    }
                }
            }
            if($dotuongdongText <= $dotuongdong) {
                $resultIdCase = $vl['id'];
                $dotuongdongText =$dotuongdong;
            }
        }
        $result = $this->GetResultByIdCase($resultIdCase);
        return $result;
    }
}
