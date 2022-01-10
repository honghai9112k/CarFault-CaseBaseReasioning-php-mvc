<?php
class ChuyenDongModel extends DB
{

    public function GetCauTraLoiChuyenDong()
    {
        $qr = "SELECT * FROM `cautraloi` WHERE cautraloi.idcauhoi>=16 AND idcauhoi<=18 OR idcauhoi=23";
        $query = mysqli_query($this->con, $qr);
        return $query;
    }

    public function GetResultByIdCase($idcase)
    {
        $qr = "SELECT ketluan.* FROM `ketluan` WHERE ketluan.hethong='Chuyển Động' AND ketluan.id='$idcase';";
        $query = mysqli_query($this->con, $qr);
        $rs = mysqli_fetch_assoc($query);
        return $rs;
    }
    public function CountCaseChuyenDong()
    {
        $qr = "SELECT COUNT(ketluan.id) FROM ketluan WHERE ketluan.hethong='Chuyển Động';";
        $query = mysqli_query($this->con, $qr);
        $rs = mysqli_fetch_assoc($query);
        return $rs;
    }
    public function GetCaseChuyenDong($idcase)
    {
        $qr = "SELECT motacase.*,cautraloi.cautraloi,cauhoi.id AS 'idcauhoi', cauhoi.cauhoi, cauhoi.trongso 
        FROM motacase JOIN cautraloi JOIN cauhoi
        ON motacase.idcautraloi=cautraloi.id AND cautraloi.idcauhoi=cauhoi.id AND motacase.idcase='$idcase';";

        $query = mysqli_query($this->con, $qr);
        return $query;
    }
    public function GetListIdCaseChuyenDong()
    {
        $qr = "SELECT DISTINCT motacase.idcase FROM `ketluan`, motacase WHERE ketluan.hethong='Chuyển Động' AND ketluan.id=motacase.idcase;";

        $query = mysqli_query($this->con, $qr);
        return $query;
    }
    public function CountCauHoiChuyenDong()
    {
        $qr = "SELECT COUNT(motacase.idcautraloi)AS'socauhoi' FROM motacase WHERE motacase.idcase='50';";
        $query = mysqli_query($this->con, $qr);
        $rs = mysqli_fetch_assoc($query);
        return $rs;
    }
    // 1 2 3 23 16 17 18
    public function ResultChuyenDong($mangTxt, $mangChuyenDong)
    {
        $listIdCase = $this->GetListIdCaseChuyenDong();
        $countcauhoi = $this->CountCauHoiChuyenDong()['socauhoi'];
        $thuTuCauHoiUser = array(1, 2, 3, 23, 16, 17, 18);

        $resultIdCase = 0;
        $dotuongdongText = 0;
        foreach ($listIdCase as $k => $val) {
            // $val['idcase'] =50
            $dotuongdong = 0;
            $casedata = $this->GetCaseChuyenDong($val['idcase']);

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
                        if ($value['cautraloi'] === $mangChuyenDong[$i - 3]) {
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
        if ($dotuongdongText/24 < 0.5) {
            return false;
        }
        $result = $this->GetResultByIdCase($resultIdCase);
        return $result;
    }
}
