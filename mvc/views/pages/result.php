
<?php 
$resultPhanhArray = (!empty($resultPhanh)) ? $resultPhanh : [];



?>
<?php 
if(!empty($resultPhanh)){ ?>
<div class="result-phanh-container">
    <h4 class="text-result-header">Hệ Thống Phanh</h4>
    <p class="text-result">Nguyên Nhân hỏng: <?php echo $resultPhanhArray['nguyenhan'] ?></p>
    <p class="text-result">Cách sửa chữa: <?php echo $resultPhanhArray['suachua'] ?></p>
</div>
<?php } ?>
<div class="result-dongco-container">
    <h4 class="text-result-header">Hệ Thống Động cơ</h4>
    <p class="text-result">Nguyên Nhân hỏng: </p>
    <p class="text-result">Cách sửa chữa: </p>
</div>
<div class="result-dien-container">
    <h4 class="text-result-header">Hệ Thống Điện</h4>
    <p class="text-result">Nguyên Nhân hỏng: </p>
    <p class="text-result">Cách sửa chữa: </p>
</div>
<div class="result-khithai-container">
    <h4 class="text-result-header">Hệ Thống Khí Thải</h4>
    <p class="text-result">Nguyên Nhân hỏng: </p>
    <p class="text-result">Cách sửa chữa: </p>
</div>
<div class="result-truyenluc-container">
    <h4 class="text-result-header">Hệ Thống Truyền Lực</h4>
    <p class="text-result">Nguyên Nhân hỏng: </p>
    <p class="text-result">Cách sửa chữa: </p>
</div>
<div class="result-chuyendong-container">
    <h4 class="text-result-header">Hệ Thống Chuyển Động</h4>
    <p class="text-result">Nguyên Nhân hỏng: </p>
    <p class="text-result">Cách sửa chữa: </p>
</div>
