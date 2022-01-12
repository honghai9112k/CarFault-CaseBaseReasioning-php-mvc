<?php
require_once './mvc/models/PhanhModel.php';
require_once './mvc/models/ChuyenDongModel.php';
require_once './mvc/models/KhiThaiModel.php';
require_once './mvc/models/DienModel.php';
require_once './mvc/models/DongCoModel.php';
require_once './mvc/models/TruyenLucModel.php';
class LogModel extends DB
{
    public function SaveLog($mangText, $mangPhanh, $mangDongCo, $mangDien, $mangKhiThai, $mangTruyenLuc, $mangChuyenDong, $resultKhac)
    {

        $mota = 'Hãng xe: ' . $mangText[0] . '. Mẫu xe: ' . $mangText[1] . '. Đời xe: ' . $mangText[2];
        if ($mangPhanh[0] != 0) {
            // (1, 2, 3, 4, 5, 6, 7)
            $PhanhModel = new PhanhModel;
            $resultPhanh = $PhanhModel->ResultPhanh($mangText, $mangPhanh);
            
            $mota = $mota . '.[Lỗi liên quan đến hệ thống PHANH : ' . $mangPhanh[0] .
                '. Tuổi thọ má phanh: ' . $mangPhanh[1] . 
                '. Xe bị cản khi thả phanh: ' . $mangPhanh[2] .
                '. Mức dầu phanh: ' . $mangPhanh[3] .
                '. Kết luận nguyên nhân lỗi tại hệ thống PHANH: ' . (($resultPhanh)? $resultPhanh['nguyenhan'] :'Chưa tìm ra') .
                '. Kết Luận cách xử lý: ' . (($resultPhanh)? $resultPhanh['suachua'] :'Chưa tìm ra') .
                '. Độ tương đồng gần nhất với case: ' . (($resultPhanh)? $resultPhanh['idcase'] :'Null') .
                '. Độ tương đồng: ' . (($resultPhanh)? $resultPhanh['dontuongdong'] :'Null') .']';
        }
        if ($mangDongCo[0] != 0) {
            // (1, 2, 3, 19, 8, 9, 10, 11)
            $DongCoModel = new DongCoModel;
            $resultDongCo = $DongCoModel->ResultDongCo($mangText, $mangDongCo);

            $mota = $mota . '.[Lỗi liên quan đến hệ thống ĐỘNG CƠ : ' . $mangDongCo[0] .
                '. Tuổi thọ acquy: ' . $mangDongCo[1] . '. Tuổi thọ bugi: ' . $mangDongCo[2] .
                '. Tiếng động lạ trong khoang máy: ' . $mangDongCo[3] .
                '. Mức xăng của bầu phao: ' . $mangDongCo[4].
                '. Kết luận nguyên nhân lỗi tại hệ thống ĐỘNG CƠ: ' . (($resultDongCo)? $resultDongCo['nguyenhan'] :'Chưa tìm ra') .
                '. Kết Luận cách xử lý: ' . (($resultDongCo)? $resultDongCo['suachua'] :'Chưa tìm ra') .
                '. Độ tương đồng gần nhất với case: ' . (($resultDongCo)? $resultDongCo['idcase'] :'Null') .
                '. Độ tương đồng: ' . (($resultDongCo)? $resultDongCo['dontuongdong'] :'Null') .']';
        }
        if ($mangDien[0] != 0) {
            // (1, 2, 3, 20, 8, 12, 13, 14, 15, , )
            $DienModel = new DienModel;
            $resultDien = $DienModel->ResultDien($mangText, $mangDien); //false nếu ko thỏa mãn đk độ tương đồng.

            $mota = $mota .
                '.[Lỗi liên quan đến hệ thống ĐIỆN : ' . $mangDien[0] .
                '. Tuổi thọ acquy: ' . $mangDien[1] .
                '. Tuổi thọ máy phát điện: ' . $mangDien[2] .
                '. Đèn pha ô tô: ' . $mangDien[3] . (($mangDien[3]=='Khác')? ('( lỗi khác tại câu hỏi này: ' . $mangDien[6] . ')') :'') .
                '. Ổ cắm cấp điện không : ' . $mangDien[4] .
                '. Tiếng kêu lạ lúc đề của ô tô : ' . $mangDien[5] . (($mangDien[5]=='Khác') ? ('(lỗi khác tại câu hỏi này: ' . $mangDien[7] . ')') :'').
                '. Kết luận nguyên nhân lỗi tại hệ thống ĐIỆN: ' . (($resultDien)? $resultDien['nguyenhan'] :'Chưa tìm ra') .
                '. Kết Luận cách xử lý: ' . (($resultDien)? $resultDien['suachua'] :'Chưa tìm ra').
                '. Độ tương đồng gần nhất với case: ' . (($resultDien)? $resultDien['idcase'] :'Null') .
                '. Độ tương đồng: ' . (($resultDien)? $resultDien['dontuongdong'] :'Null') .']';
        }
        if ($mangKhiThai[0] != 0) {
            // (1, 2, 3, 21)
            $KhiThaiModel = new KhiThaiModel;
            $resultKhiThai = $KhiThaiModel->ResultKhiThai($mangText, $mangKhiThai);

            $mota = $mota .
                '.[Lỗi liên quan đến hệ thống KHÍ THẢI : ' . $mangKhiThai[0].
                '. Kết luận nguyên nhân lỗi tại hệ thống KHÍ THẢI: ' . (($resultKhiThai)? $resultKhiThai['nguyenhan'] :'Chưa tìm ra') .
                '. Kết Luận cách xử lý: ' . (($resultKhiThai)? $resultKhiThai['suachua'] :'Chưa tìm ra') .
                '. Độ tương đồng gần nhất với case: ' . (($resultKhiThai)? $resultKhiThai['idcase'] :'Null') .
                '. Độ tương đồng: ' . (($resultKhiThai)? $resultKhiThai['dontuongdong'] :'Null') .']';
        }
        if ($mangTruyenLuc[0] != 0) {
            // (1, 2, 3, 22)
            $TruyenLucModel = new TruyenLucModel;
            $resultTruyenLuc = $TruyenLucModel->ResultTruyenLuc($mangText, $mangTruyenLuc);

            $mota = $mota .
                '.[Lỗi liên quan đến hệ thống TRUYỀN LỰC : ' . $mangTruyenLuc[0].
                '. Kết luận nguyên nhân lỗi tại hệ thống TRUYỀN LỰC: ' . (($resultTruyenLuc)? $resultTruyenLuc['nguyenhan'] :'Chưa tìm ra') .
                '. Kết Luận cách xử lý: ' . (($resultTruyenLuc)? $resultTruyenLuc['suachua'] :'Chưa tìm ra') .
                '. Độ tương đồng gần nhất với case: ' . (($resultTruyenLuc)? $resultTruyenLuc['idcase'] :'Null') .
                '. Độ tương đồng: ' . (($resultTruyenLuc)? $resultTruyenLuc['dontuongdong'] :'Null') .']';
        }
        if ($mangChuyenDong[0] != 0) {
            // (1, 2, 3, 23, 16, 17, 18)
            $ChuyenDongModel = new ChuyenDongModel;
            $resultChuyenDong = $ChuyenDongModel->ResultChuyenDong($mangText, $mangChuyenDong);

            $mota = $mota .
                '.[Lỗi liên quan đến hệ thống CHUYỂN ĐỘNG : ' . $mangChuyenDong[0] .
                '. Ô tô khi đi đường phẳng: ' . $mangChuyenDong[1] .
                '. Khung xe khi qua đường nhấp nhô: ' . $mangChuyenDong[2] .
                '. Tình trạng lốp: ' . $mangChuyenDong[3] . (($mangChuyenDong[3]=='Khác')? ('( lỗi khác tại câu hỏi này: ' . $mangChuyenDong[4] . ')') :'') .
                '. Kết luận nguyên nhân lỗi tại hệ thống CHUYỂN ĐỘNG: ' . (($resultChuyenDong)? $resultChuyenDong['nguyenhan'] :'Chưa tìm ra') .
                '. Kết Luận cách xử lý: ' . (($resultChuyenDong)? $resultChuyenDong['suachua'] :'Chưa tìm ra') .
                '. Độ tương đồng gần nhất với case: ' . (($resultChuyenDong)? $resultChuyenDong['idcase'] :'Null') .
                '. Độ tương đồng: ' . (($resultChuyenDong)? $resultChuyenDong['dontuongdong'] :'Null') .']';
        }
        if ($resultKhac) {
            $mota = $mota .
                '. Triệu chứng KHÁC: ' . $resultKhac;
        }
        $qr = "INSERT INTO `log` (`id`, `mota`,`thoigian`) VALUES (NULL, '$mota',now());";
        $query = mysqli_query($this->con, $qr);
        return $query;
    }
}
