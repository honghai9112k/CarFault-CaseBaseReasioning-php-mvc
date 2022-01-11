<?php
class LogModel extends DB
{
    public function SaveLog($mangText, $mangPhanh, $mangDongCo, $mangDien, $mangKhiThai, $mangTruyenLuc, $mangChuyenDong, $resultKhac)
    {
        $mota = 'Hãng xe: ' . $mangText[0] . '. Mẫu xe: ' . $mangText[1] . '. Đời xe: ' . $mangText[2];
        if ( $mangPhanh[0] != 0) {
            // (1, 2, 3, 4, 5, 6, 7)
            $mota = $mota .'.Lỗi liên quan đến hệ thống Phanh : ' . $mangPhanh[0] .
            '. Tuổi thọ má phanh: '. $mangPhanh[1] .'. Xe bị cản khi thả phanh: '. $mangPhanh[2] .
            '. Mức dầu phanh: '. $mangPhanh[3];
        }
        if ( $mangDongCo[0] != 0) {
            // (1, 2, 3, 19, 8, 9, 10, 11)
            $mota = $mota .'. Lỗi liên quan đến hệ thống Động Cơ : ' . $mangDongCo[0] .
            '. Tuổi thọ acquy: '. $mangDongCo[1] .'. Tuổi thọ bugi: '. $mangDongCo[2] .
            '. Tiếng động lạ trong khoang máy: '. $mangDongCo[3]. 
            '. Mức xăng của bầu phao: '. $mangDongCo[4];
        }
        if ( $mangDien[0] != 0) {
            // (1, 2, 3, 20, 8, 12, 13, 14, 15, , )
            $mota = $mota .
            '. Lỗi liên quan đến hệ thống Điện : ' . $mangDien[0] .
            '. Tuổi thọ acquy: '. $mangDien[1] .
            '. Tuổi thọ máy phát điện: '. $mangDien[2] .
            '. Đèn pha ô tô: '. $mangDien[3]. '(lỗi khác tại câu hỏi này: '.$mangDien[6].')'.
            '. Ổ cắm cấp điện không : '. $mangDien[4] .
            '. Tiếng kêu lạ lúc đề của ô tô : '. $mangDien[5] . '(lỗi khác tại câu hỏi này: '.$mangDien[7].')';
        }
        if ( $mangKhiThai[0] != 0) {
            // (1, 2, 3, 21)
            $mota = $mota .
            '. Lỗi liên quan đến hệ thống Khí Thải : ' . $mangKhiThai[0];

        }
        if ( $mangTruyenLuc[0] != 0) {
            // (1, 2, 3, 22)
            $mota = $mota .
            '. Lỗi liên quan đến hệ thống Truyền Lực : ' . $mangTruyenLuc[0];
        }
        if ( $mangChuyenDong[0] != 0) {
            // (1, 2, 3, 23, 16, 17, 18)
            $mota = $mota .
            '. Lỗi liên quan đến hệ thống Chuyển Động : ' . $mangChuyenDong[0] .
            '. Ô tô khi đi đường phẳng: '. $mangChuyenDong[1] .
            '. Khung xe khi qua đường nhấp nhô: '. $mangChuyenDong[2] .
            '. Tình trạng lốp: '. $mangChuyenDong[3].'(lỗi khác tại câu hỏi này: '.$mangDien[4].')';
        }
        if ($resultKhac) {
            $mota = $mota .
            '. Triệu chứng khác: '. $resultKhac;
        }
        $qr = "INSERT INTO `log` (`id`, `mota`,`thoigian`) VALUES (NULL, '$mota',now());";
        $query = mysqli_query($this->con, $qr);
        return $query;
    }
}
