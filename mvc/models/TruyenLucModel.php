<?php
class TruyenLucModel extends DB{

    public function GetCauTraLoiTruyenLuc()
    {
        $qr = "SELECT * FROM `cautraloi` WHERE cautraloi.idcauhoi=22";
        $query = mysqli_query($this->con, $qr);
        return $query;
    }

    public function GetResultByIdCase($idcase)
    {
        $qr = "SELECT ketluan.* FROM `ketluan` WHERE ketluan.hethong='Truyền Lực' AND ketluan.id='$idcase';";
        $query = mysqli_query($this->con, $qr);
        $rs = mysqli_fetch_assoc($query);
        return $rs;
    }
    public function CountCaseTruyenLuc()
    {
        $qr = "SELECT COUNT(ketluan.id) FROM ketluan WHERE ketluan.hethong='Truyền Lực';";
        $query = mysqli_query($this->con, $qr);
        $rs = mysqli_fetch_assoc($query);
        return $rs;
    }
    public function GetCaseTruyenLuc($idcase)
    {
        $qr = "SELECT motacase.*,cautraloi.cautraloi,cauhoi.id AS 'idcauhoi', cauhoi.cauhoi, cauhoi.trongso 
        FROM motacase JOIN cautraloi JOIN cauhoi
        ON motacase.idcautraloi=cautraloi.id AND cautraloi.idcauhoi=cauhoi.id AND motacase.idcase='$idcase';";

        $query = mysqli_query($this->con, $qr);
        return $query;
    }
    public function GetListIdCaseTruyenLuc()
    {
        $qr = "SELECT DISTINCT motacase.idcase FROM `ketluan`, motacase WHERE ketluan.hethong='Truyền Lực' AND ketluan.id=motacase.idcase;";

        $query = mysqli_query($this->con, $qr);
        return $query;
    }
    public function CountCauHoiTruyenLuc()
    {
        $qr = "SELECT COUNT(motacase.idcautraloi)AS'socauhoi' FROM motacase WHERE motacase.idcase='40';";
        $query = mysqli_query($this->con, $qr);
        $rs = mysqli_fetch_assoc($query);
        return $rs;
    }
    // 1 2 3 22
    public function ResultTruyenLuc($mangTxt, $mangTruyenLuc)
    {
        $listIdCase = $this->GetListIdCaseTruyenLuc(); 
        $countcauhoi = $this->CountCauHoiTruyenLuc()['socauhoi']; 
        $thuTuCauHoiUser = array(1, 2, 3, 22);

        $resultIdCase = 0;
        $dotuongdongTest = 0;
        foreach ($listIdCase as $k => $val) {
            // $val['idcase'] =45
            $dotuongdong = 0;
            $casedata = $this->GetCaseTruyenLuc($val['idcase']);

            foreach ($casedata as $key => $value) {
                for ($i = 0; $i < $countcauhoi; $i++) {
                    // 3 câu đầu idcauhoi =1 2 3
                    if ($value['idcauhoi'] == $thuTuCauHoiUser[$i] && $i < 3) {
                        if ($value['cautraloi'] === $mangTxt[$key]) {
                            $dotuongdong = $dotuongdong + (int)$value['trongso'];
                        }
                    }
                    // Các câu sau
                    if ($value['idcauhoi'] == $thuTuCauHoiUser[$i] && $i >= 3) {
                        if ($value['cautraloi'] === $mangTruyenLuc[$i - 3]) {
                            $dotuongdong = $dotuongdong + (int)$value['trongso'];
                        }
                    }
                }
            }

            if ($dotuongdongTest <= $dotuongdong) {
                $resultIdCase = $val['idcase'];
                $dotuongdongTest = $dotuongdong;
            }
        }
        if ($dotuongdongTest/9 < 0.5) {
            return false;
        }
        $result = $this->GetResultByIdCase($resultIdCase);
        $result['dontuongdong']= round($dotuongdongTest/9, 3);
        $result['idcase']= $resultIdCase;
        return $result;
    }

}
?>