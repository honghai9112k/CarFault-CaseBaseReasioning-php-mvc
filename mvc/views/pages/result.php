<?php
$resultPhanhArray = (!empty($resultPhanh)) ? $resultPhanh : [];
$resultDongCoArray = (!empty($resultDongCo)) ? $resultDongCo : [];
$resultDienArray = (!empty($resultDien)) ? $resultDien : [];
$resultKhiThaiArray = (!empty($resultKhiThai)) ? $resultKhiThai : [];
$resultTruyenLucArray = (!empty($resultTruyenLuc)) ? $resultTruyenLuc : [];
$resultChuyenDongArray = (!empty($resultChuyenDong)) ? $resultChuyenDong : [];

?>
<?php if (!empty($resultPhanh) && $mangPhanh[0]!="0") { ?>
    <div class="result-phanh-container">
        <h4 class="text-result-header">Hệ Thống Phanh</h4>
        <p class="text-result">Nguyên Nhân hỏng: <?php echo $resultPhanhArray['nguyenhan'] ?></p>
        <p class="text-result">Cách sửa chữa: <?php echo $resultPhanhArray['suachua'] ?></p>
        <p class="text-result">Độ chính xác: <?php echo $resultPhanhArray['dontuongdong']*100 ?>%</p>
    </div>
<?php }  ?>

<?php if (!empty($resultDongCo)&& $mangDongCo[0]!="0") { ?>
    <div class="result-dongco-container">
        <h4 class="text-result-header">Hệ Thống Động cơ</h4>
        <p class="text-result">Nguyên Nhân hỏng: <?php echo $resultDongCoArray['nguyenhan'] ?></p>
        <p class="text-result">Cách sửa chữa: <?php echo $resultDongCoArray['suachua'] ?></p>
        <p class="text-result">Độ chính xác: <?php echo $resultDongCoArray['dontuongdong']*100 ?>%</p>

    </div>
<?php } ?>

<!-- Điện -->
<?php if ($resultDien && $mangDien[0]!="0") { ?>
    <div class="result-dien-container">
        <h4 class="text-result-header">Hệ Thống Điện</h4>
        <p class="text-result">Nguyên Nhân hỏng: <?php echo $resultDienArray['nguyenhan'] ?> </p>
        <p class="text-result">Cách sửa chữa: <?php echo $resultDienArray['suachua'] ?></p>
        <p class="text-result">Độ chính xác: <?php echo $resultDienArray['dontuongdong']*100 ?>%</p>
    </div>
<?php } ?>

<!-- Khí Thải -->
<?php if (!empty($resultKhiThai) && $mangKhiThai[0]!="0") { ?>
    <div class="result-khithai-container">
        <h4 class="text-result-header">Hệ Thống Khí Thải</h4>
        <p class="text-result">Nguyên Nhân hỏng: <?php echo $resultKhiThaiArray['nguyenhan'] ?> </p>
        <p class="text-result">Cách sửa chữa: <?php echo $resultKhiThaiArray['suachua'] ?> </p>
        <p class="text-result">Độ chính xác: <?php echo $resultKhiThaiArray['dontuongdong']*100 ?>%</p>
    </div>
<?php } ?>

<!-- Truyền Lực -->
<?php if (!empty($resultTruyenLuc) && $mangTruyenLuc[0]!="0") { ?>
    <div class="result-truyenluc-container">
        <h4 class="text-result-header">Hệ Thống Truyền Lực</h4>
        <p class="text-result">Nguyên Nhân hỏng: <?php echo $resultTruyenLucArray['nguyenhan'] ?> </p>
        <p class="text-result">Cách sửa chữa: <?php echo $resultTruyenLucArray['suachua'] ?></p>
        <p class="text-result">Độ chính xác: <?php echo $resultTruyenLucArray['dontuongdong']*100 ?>%</p>

    </div>
<?php } ?>

<!-- Chuyển ĐỘng -->
<?php if (!empty($resultChuyenDong) && $mangChuyenDong[0]!="0" ) { ?>
    <div class="result-chuyendong-container">
        <h4 class="text-result-header">Hệ Thống Chuyển Động</h4>
        <p class="text-result">Nguyên Nhân hỏng: <?php echo $resultChuyenDongArray['nguyenhan'] ?></p>
        <p class="text-result">Cách sửa chữa: <?php echo $resultChuyenDongArray['suachua'] ?></p>
        <p class="text-result">Độ chính xác: <?php echo $resultChuyenDongArray['dontuongdong']*100?>%</p>

    </div>
<?php } ?>

<?php if ($resultKhac) { ?>
    <div class="result-chuyendong-container">
        <h4 class="text-result-header">Trường hợp khác</h4>
        <p class="text-result">Lỗi của bạn hiện sẽ được lưu vào hệ thống. Quay lại vào 1, 2 ngày tới (sau khi chuyên gia cập nhật lỗi đó vào hệ thống) để kiểm tra lại.</p>
    </div>
<?php } ?>