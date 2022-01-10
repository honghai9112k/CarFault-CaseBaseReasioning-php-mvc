<?php
class DienModel extends DB
{

    public function GetCauTraLoiDien()
    {
        $qr = "SELECT * FROM `cautraloi` WHERE cautraloi.idcauhoi>=12 AND idcauhoi<=15 OR idcauhoi=20";
        $query = mysqli_query($this->con, $qr);
        return $query;
    }

    public function GetResultByIdCase($idcase)
    {
        $qr = "SELECT ketluan.* FROM `ketluan` WHERE ketluan.hethong='Điện' AND ketluan.id='$idcase';";
        $query = mysqli_query($this->con, $qr);
        $rs = mysqli_fetch_assoc($query);
        return $rs;
    }
    public function CountCaseDien()
    {
        $qr = "SELECT COUNT(ketluan.id) FROM ketluan WHERE ketluan.hethong='Điện';";
        $query = mysqli_query($this->con, $qr);
        $rs = mysqli_fetch_assoc($query);
        return $rs;
    }
    public function GetCaseDien($idcase)
    {
        $qr = "SELECT motacase.*,cautraloi.cautraloi,cauhoi.id AS 'idcauhoi', cauhoi.cauhoi, cauhoi.trongso 
        FROM motacase JOIN cautraloi JOIN cauhoi
        ON motacase.idcautraloi=cautraloi.id AND cautraloi.idcauhoi=cauhoi.id AND motacase.idcase='$idcase';";

        $query = mysqli_query($this->con, $qr);
        return $query;
    }
    public function GetListIdCaseDien()
    {
        $qr = "SELECT DISTINCT motacase.idcase FROM `ketluan`, motacase WHERE ketluan.hethong='Điện' AND ketluan.id=motacase.idcase;";

        $query = mysqli_query($this->con, $qr);
        return $query;
    }
    public function CountCauHoiDien()
    {
        $qr = "SELECT COUNT(motacase.idcautraloi)AS'socauhoi' FROM motacase WHERE motacase.idcase='32';";
        $query = mysqli_query($this->con, $qr);
        $rs = mysqli_fetch_assoc($query);
        return $rs;
    }
    // 1 2 3 20 8 12 13 14 15
    public function ResultDien($mangTxt, $mangDien)
    {
        $listIdCase = $this->GetListIdCaseDien(); 
        $countcauhoi = $this->CountCauHoiDien()['socauhoi']; 
        $thuTuCauHoiUser = array(1, 2, 3, 20, 8, 12, 13, 14, 15);

        $resultIdCase = 0;
        $dotuongdongText = 0;
        foreach ($listIdCase as $k => $val) {
            // $val['idcase'] =32
            $dotuongdong = 0;
            $casedata = $this->GetCaseDien($val['idcase']);

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
                        if ($value['cautraloi'] === $mangDien[$i - 3]) {
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
        if ($dotuongdongText/34 < 0.5) {
            return false;
        }
        $result = $this->GetResultByIdCase($resultIdCase);
        return $result;
    }
}
