<?php
$resultPhanhArray = (!empty($resultPhanh)) ? $resultPhanh : [];
$resultDongCoArray = (!empty($resultDongCo)) ? $resultDongCo : [];
$resultDienArray = (!empty($resultDien)) ? $resultDien : [];
$resultKhiThaiArray = (!empty($resultKhiThai)) ? $resultKhiThai : [];
$resultTruyenLucArray = (!empty($resultTruyenLuc)) ? $resultTruyenLuc : [];
$resultChuyenDongArray = (!empty($resultChuyenDong)) ? $resultChuyenDong : [];

?>
<?php if (!empty($resultPhanh)) { ?>
    <div class="result-phanh-container">
        <h4 class="text-result-header">Hệ Thống Phanh</h4>
        <p class="text-result">Nguyên Nhân hỏng: <?php echo $resultPhanhArray['nguyenhan'] ?></p>
        <p class="text-result">Cách sửa chữa: <?php echo $resultPhanhArray['suachua'] ?></p>
    </div>
<?php } ?>

<?php if (!empty($resultDongCo)) { ?>
    <div class="result-dongco-container">
        <h4 class="text-result-header">Hệ Thống Động cơ</h4>
        <p class="text-result">Nguyên Nhân hỏng: <?php echo $resultDongCoArray['nguyenhan'] ?></p>
        <p class="text-result">Cách sửa chữa: <?php echo $resultDongCoArray['suachua'] ?></p>
    </div>
<?php } ?>

<?php if (!empty($resultDien)) { ?>
    <div class="result-dien-container">
        <h4 class="text-result-header">Hệ Thống Điện</h4>
        <p class="text-result">Nguyên Nhân hỏng: <?php echo $resultDienArray['nguyenhan'] ?> </p>
        <p class="text-result">Cách sửa chữa: <?php echo $resultDienArray['suachua'] ?></p>
    </div>
<?php } ?>

<?php if (!empty($resultKhiThai)) { ?>
    <div class="result-khithai-container">
        <h4 class="text-result-header">Hệ Thống Khí Thải</h4>
        <p class="text-result">Nguyên Nhân hỏng: <?php echo $resultKhiThaiArray['nguyenhan'] ?> </p>
        <p class="text-result">Cách sửa chữa: <?php echo $resultKhiThaiArray['suachua'] ?> </p>
    </div>
<?php } ?>

<?php if (!empty($resultTruyenLuc)) { ?>
    <div class="result-truyenluc-container">
        <h4 class="text-result-header">Hệ Thống Truyền Lực</h4>
        <p class="text-result">Nguyên Nhân hỏng: <?php echo $resultTruyenLucArray['nguyenhan'] ?> </p>
        <p class="text-result">Cách sửa chữa: <?php echo $resultTruyenLucArray['suachua'] ?></p>
    </div>
<?php } ?>

<?php if (!empty($resultChuyenDong)) { ?>
    <div class="result-chuyendong-container">
        <h4 class="text-result-header">Hệ Thống Chuyển Động</h4>
        <p class="text-result">Nguyên Nhân hỏng: <?php echo $resultChuyenDongArray['nguyenhan'] ?></p>
        <p class="text-result">Cách sửa chữa: <?php echo $resultChuyenDongArray['suachua'] ?></p>
    </div>
<?php } ?>
<?php if ($resultKhac) { ?>
    <div class="result-chuyendong-container">
        <h4 class="text-result-header">Trường hợp khác</h4>
        <p class="text-result">Lỗi của bạn hiện sẽ được lưu vào hệ thống. Quay lại vào 1, 2 ngày tới (sau khi chuyên gia cập nhật lỗi đó vào hệ thống) để kiểm tra lại.</p>
    </div>
<?php } ?>