<?php
class PhanhModel extends DB
{
    // Lấy ra tất cả câu trả lời cho từng câu hỏi hệ thống Động cơ
    public function GetCauTraLoiPhanh()
    {
        $qr = "SELECT * FROM `cautraloi` WHERE cautraloi.idcauhoi>3 AND idcauhoi<=7";
        $query = mysqli_query($this->con, $qr);
        return $query;
    }
    //Đếm số câu hỏi của 1 case Phanh
    public function CountCauHoiPhanh()
    {
        $qr = "SELECT COUNT(motacase.idcautraloi)AS'socauhoi' FROM motacase WHERE motacase.idcase='1';";
        $query = mysqli_query($this->con, $qr);
        $rs = mysqli_fetch_assoc($query);
        return $rs;
    }
    // Đếm số case của hệ thống Phanh
    public function CountCasePhanh()
    {
        $qr = "SELECT COUNT(ketluan.id) FROM ketluan WHERE ketluan.hethong='Phanh';";
        $query = mysqli_query($this->con, $qr);
        $rs = mysqli_fetch_assoc($query);
        return $rs;
    }
    // Lấy ra case hệ thống Phanh by idcase
    public function GetCasePhanh($idcase)
    {
        $qr = "SELECT motacase.*,cautraloi.cautraloi,cauhoi.id AS 'idcauhoi', cauhoi.cauhoi, cauhoi.trongso 
        FROM motacase JOIN cautraloi JOIN cauhoi
        ON motacase.idcautraloi=cautraloi.id AND cautraloi.idcauhoi=cauhoi.id AND motacase.idcase='$idcase';";

        $query = mysqli_query($this->con, $qr);
        return $query;
    }
    // lấy ra danh sách các id của kết luận để lặp so sánh đầu vào với case
    public function GetListIdCasePhanh()
    {
        $qr = "SELECT DISTINCT motacase.idcase FROM `ketluan`, motacase WHERE ketluan.hethong='Phanh' AND ketluan.id=motacase.idcase;";

        $query = mysqli_query($this->con, $qr);
        return $query;
    }
    // Lấy ra Kết luận by idcase
    public function GetResultByIdCase($idcase)
    {
        $qr = "SELECT ketluan.* FROM `ketluan` WHERE ketluan.hethong='Phanh' AND ketluan.id='$idcase';";
        $query = mysqli_query($this->con, $qr);
        $rs = mysqli_fetch_assoc($query);
        return $rs;
    }
    // Lưu dữ liệu người dùng vào csdl log table
    public function SaveNewCase() {

    }
    // So sánh đầu vào với các case và đưa ra kết luận.
    public function ResultPhanh($mangTxt, $mangPhanh)
    {
        $listIdCase = $this->GetListIdCasePhanh();
        $countcauhoi = $this->CountCauHoiPhanh()['socauhoi'];
        $thuTuCauHoiUser = array(1, 2, 3, 4, 5, 6, 7);

        $resultIdCase = 0;
        $dotuongdongTest = 0;
        foreach ($listIdCase as $k => $val) {
            $dotuongdong = 0;
            $casedata = $this->GetCasePhanh($val['idcase']);

            // lặp qua hết các case.
            foreach ($listIdCase as $k => $val) {
                // $val['idcase'] =24
                $dotuongdong = 0;
                $casedata = $this->GetCasePhanh($val['idcase']);

                foreach ($casedata as $key => $value) {
                    for ($i = 0; $i < $countcauhoi; $i++) {
                        if ($value['idcauhoi'] == $thuTuCauHoiUser[$i] && $i < 3) {// 3 câu đầu idcauhoi =1 2 3
                            if ($value['cautraloi'] === $mangTxt[$i]) {
                                $dotuongdong = $dotuongdong + (int)$value['trongso'];
                            }
                        }
                        if ($value['idcauhoi'] ==  $thuTuCauHoiUser[$i] && $i >= 3) {// Các câu sau
                            if ($value['cautraloi'] === $mangPhanh[$i - 3]) {
                                $dotuongdong = $dotuongdong + (int)$value['trongso'];
                            }
                        }
                    }
                }
                if ($dotuongdongTest <= $dotuongdong) {//So sánh độ tương đồng các case 
                    $resultIdCase = $val['idcase'];
                    $dotuongdongTest = $dotuongdong;
                }
            }
        }
        if ($dotuongdongTest/24 < 0.5) {
            return false;
        }
        $result = $this->GetResultByIdCase($resultIdCase);
        $result['dontuongdong']= round($dotuongdongTest/24, 3);
        $result['idcase']= $resultIdCase;
        return $result;
    }
}
