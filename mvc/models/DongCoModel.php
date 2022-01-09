<?php
class DongCoModel extends DB
{

    public function GetCauTraLoiDongCo()
    {
        $qr = "SELECT * FROM `cautraloi` WHERE cautraloi.idcauhoi>=8 AND idcauhoi<=11 OR idcauhoi=19";
        $query = mysqli_query($this->con, $qr);
        return $query;
    }

    public function GetResultByIdCase($idcase)
    {
        $qr = "SELECT ketluan.* FROM `ketluan` WHERE ketluan.hethong='Động cơ' AND ketluan.id='$idcase';";
        $query = mysqli_query($this->con, $qr);
        $rs = mysqli_fetch_assoc($query);
        return $rs;
    }
    public function CountCaseDongCo()
    {
        $qr = "SELECT COUNT(ketluan.id) FROM ketluan WHERE ketluan.hethong='Động cơ';";
        $query = mysqli_query($this->con, $qr);
        $rs = mysqli_fetch_assoc($query);
        return $rs;
    }
    public function GetCaseDongCo($idcase)
    {
        $qr = "SELECT motacase.*,cautraloi.cautraloi,cauhoi.id AS 'idcauhoi', cauhoi.cauhoi, cauhoi.trongso 
        FROM motacase JOIN cautraloi JOIN cauhoi
        ON motacase.idcautraloi=cautraloi.id AND cautraloi.idcauhoi=cauhoi.id AND motacase.idcase='$idcase';";

        $query = mysqli_query($this->con, $qr);
        return $query;
    }
    public function GetListIdCaseDongCo()
    {
        $qr = "SELECT DISTINCT motacase.idcase FROM `ketluan`, motacase WHERE ketluan.hethong='Động Cơ' AND ketluan.id=motacase.idcase;";

        $query = mysqli_query($this->con, $qr);
        return $query;
    }
    public function CountCauHoiPhanh()
    {
        $qr = "SELECT COUNT(motacase.idcautraloi)AS'socauhoi' FROM motacase WHERE motacase.idcase='24';";
        $query = mysqli_query($this->con, $qr);
        $rs = mysqli_fetch_assoc($query);
        return $rs;
    }
    // 1 2 3 19 8 9 10 11
    public function ResultDongCo($mangTxt, $mangDongCo)
    {
        $listIdCase = $this->GetListIdCaseDongCo(); //24 25 26... 27
        $countcauhoi = $this->CountCauHoiPhanh()['socauhoi']; //8
        $thuTuCauHoiUser = array(1, 2, 3, 19, 8, 9, 10, 11);

        $resultIdCase = 0;
        $dotuongdongText = 0;
        foreach ($listIdCase as $k => $val) {
            // $val['idcase'] =24
            $dotuongdong = 0;
            $casedata = $this->GetCaseDongCo($val['idcase']);

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
                        if ($value['cautraloi'] === $mangDongCo[$i-3]) {
                            $dotuongdong = $dotuongdong + (int)$value['trongso'];
                        }
                    }
                }
            }

            if ($dotuongdongText <= $dotuongdong) {
                $resultIdCase = $val['idcase'];
                $dotuongdongText = $dotuongdong;
            }
        }
        if ($dotuongdongText < 8) {
            return false;
        }
        $result = $this->GetResultByIdCase($resultIdCase);
        return $result;
    }
}
