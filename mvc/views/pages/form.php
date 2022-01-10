<?php
$cauTraLoiPhanh = (!empty($data['CauTraLoiPhanh'])) ? $data['CauTraLoiPhanh'] : [];
$cauTraLoiDien = (!empty($data['CauTraLoiDien'])) ? $data['CauTraLoiDien'] : [];
$cauTraLoiDongCo = (!empty($data['CauTraLoiDongCo'])) ? $data['CauTraLoiDongCo'] : [];
$cauTraLoiTruyenLuc = (!empty($data['CauTraLoiTruyenLuc'])) ? $data['CauTraLoiTruyenLuc'] : [];
$cauTraLoiKhiThai = (!empty($data['CauTraLoiKhiThai'])) ? $data['CauTraLoiKhiThai'] : [];
$cauTraLoiChuyenDong = (!empty($data['CauTraLoiChuyenDong'])) ? $data['CauTraLoiChuyenDong'] : [];

// foreach($cauTraLoiKhiThai as $key => $value) {
//     echo $value['cautraloi'];
// }
?>
<div class="form-container">
    <form method="POST" id="form" class="form" enctype="multipart/form-data" role="form" action="">
        <div class=" cauhoi-container">

            <div class="thongtin">
                <div class="header-text">
                    <h2 class="thongtin-header-text">Thông tin</h2>
                    <span class="ghichuTxt">Vui lòng điền đẩy đủ thông tin.*</span>
                </div>

                <div class="inputTxt input-group mb-5">
                    <span class="input-group-text bg-light" id="inputGroup-sizing-default">Hãng Xe<span class="bg-light text-danger">*</span></span>
                    <input id="hangxeTxt" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class=" error1 text-danger"></div>
                <div class="inputTxt input-group mb-5">
                    <span class="input-group-text bg-light" id="inputGroup-sizing-default">Tên Xe<span class="bg-light text-danger">*</span></span>
                    <input id="tenxeTxt" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="error2 text-danger"></div>

                <div class="inputTxt input-group mb-5">
                    <span class="input-group-text bg-light" id="inputGroup-sizing-default">Đời Xe<span class="bg-light text-danger">*</span></span>
                    <input id="doixeTxt" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="error3 text-danger"></div>
            </div>

            <div class="hethong">
                <div class="header-text">
                    <h2 class="thongtin-header-text">Hệ thống</h2>
                    <span class="ghichuTxt">Vui lòng điền đẩy đủ thông tin.*</span>
                </div>
                <nav>
                    <div class="nav nav-tabs flex" id="nav-tab" role="tablist">
                        <button class="nav-link active" style="flex-grow: 1;" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#tabPhanh" type="button" role="tab" aria-controls="tabPhanh" aria-selected="true">Phanh<span class=" text-danger f-12">(4)</span></button>
                        <button class="nav-link" style="flex-grow: 1;" id="dongco-tab" data-bs-toggle="tab" data-bs-target="#tabDongCo" type="button" role="tab" aria-controls="tabDongCo" aria-selected="false">Động Cơ<span class=" text-danger f-12">(5)</span></button>
                        <button class="nav-link" style="flex-grow: 1;" id="dien-tab" data-bs-toggle="tab" data-bs-target="#tabdien" type="button" role="tab" aria-controls="tabdien" aria-selected="false">Điện<span class=" text-danger f-12">(6)</span></button>
                        <button class="nav-link" style="flex-grow: 1;" id="khiThai-tab" data-bs-toggle="tab" data-bs-target="#tabkhiThai" type="button" role="tab" aria-controls="tabkhiThai" aria-selected="false">Khí Thải<span class=" text-danger f-12">(1)</span></button>
                        <button class="nav-link" style="flex-grow: 1;" id="truyenLuc-tab" data-bs-toggle="tab" data-bs-target="#tabtruyenLuc" type="button" role="tab" aria-controls="tabtruyenLuc" aria-selected="false">Truyền Lực<span class=" text-danger f-12">(1)</span></button>
                        <button class="nav-link" style="flex-grow: 1;" id="chuyenDong-tab" data-bs-toggle="tab" data-bs-target="#tabchuyenDong" type="button" role="tab" aria-controls="tabchuyenDong" aria-selected="false">Chuyển Động<span class=" text-danger f-12">(4)</span></button>
                        <button class="nav-link" style="flex-grow: 1;" id="khac-tab" data-bs-toggle="tab" data-bs-target="#tabkhacbig" type="button" role="tab" aria-controls="tabkhac" aria-selected="false">Khác</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <!-- Tab Phanh -->
                    <div class="tab-pane  show active" id="tabPhanh" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="tab__content">
                            <div class="input-group d-flex w-64">
                                <select class="form-select" aria-label="Default select example" id="trieuchungphanh" name="trieuchungphanh">
                                    <option value="0">- Triệu chứng ô tô liên quan đến hệ thống Phanh -</option>
                                    <?php
                                    foreach ($cauTraLoiPhanh as $key => $value) {
                                        if ($value['idcauhoi'] == 4) { ?>
                                            <option value="<?php echo $value['cautraloi']; ?>">
                                                <?php echo $value['cautraloi']; ?>
                                            </option>
                                    <?php }
                                    } ?>
                                </select>
                                <!-- <div class="inputTxt input-group khac-container">
                                    <span class="input-group-text bg-light" id="inputGroup-sizing-default">Khác</span>
                                    <input id="trieuchungphanhkhac" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div> -->
                            </div>
                            <div class="form-disable-phanh">
                                <div class="input-group d-flex w-64">
                                    <select class="form-select disable w-64" aria-label="Default select example" id="tuoithophanh" name="tuoithophanh">
                                        <option value="0">- Tuổi thọ má phanh<span class=" text-danger ">*</span></option>
                                        <?php
                                        $check = [];
                                        foreach ($cauTraLoiPhanh as $key => $value) {
                                            if ($value['idcauhoi'] == 5) {
                                                array_unshift($check, $value['cautraloi']);
                                            }
                                        }
                                        $check = array_unique($check);
                                        foreach ($check as $key => $value) {
                                        ?>
                                            <option value="<?php echo $value; ?>">
                                                <?php echo $value; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="input-group d-flex w-64">
                                    <select class="form-select disable w-64" aria-label="Default select example" id="khithaphanh" name="khithaphanh">
                                        <option value="0">- Xe bị cản khi thả phanh<span class=" text-danger ">*</span></option>
                                        <?php
                                        foreach ($cauTraLoiPhanh as $key => $value) {
                                            if ($value['idcauhoi'] == 6) { ?>
                                                <option value="<?php echo $value['cautraloi']; ?>">
                                                    <?php echo $value['cautraloi']; ?>
                                                </option>
                                        <?php }
                                        } ?>
                                    </select>
                                </div>
                                <div class="input-group d-flex w-64">
                                    <select class="form-select disable w-64" aria-label="Default select example" id="mucdauphanh" name="mucdauphanh">
                                        <option value="0">- Mức dầu phanh<span class=" text-danger ">*</span></option>
                                        <?php
                                        foreach ($cauTraLoiPhanh as $key => $value) {
                                            if ($value['idcauhoi'] == 7) { ?>
                                                <option value="<?php echo $value['cautraloi']; ?>">
                                                    <?php echo $value['cautraloi']; ?>
                                                </option>
                                        <?php }
                                        } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tab Động Cơ -->
                    <div class="tab-pane " id="tabDongCo" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="tab__content">
                            <div class="input-group d-flex w-64">
                                <select class="form-select" aria-label="Default select example" id="trieuchungdongco" name="trieuchungdongco">
                                    <option value="0">- Triệu chứng của ô tô liên quan đến hệ thống Động Cơ -</option>
                                    <?php
                                    foreach ($cauTraLoiDongCo as $key => $value) {
                                        if ($value['idcauhoi'] == 19) { ?>
                                            <option value="<?php echo $value['cautraloi']; ?>">
                                                <?php echo $value['cautraloi']; ?>
                                            </option>
                                    <?php }
                                    } ?>
                                </select>
                                <!-- <div class="inputTxt input-group khac-container">
                                    <span class="input-group-text bg-light" id="inputGroup-sizing-default">Khác</span>
                                    <input id="trieuchungdongcokhac" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div> -->
                            </div>
                            <div class="form-disable-dongco">
                                <div class="input-group d-flex w-64">
                                    <select class="form-select disable" aria-label="Default select example" id="tuoithoacquy" name="tuoithoacquy">
                                        <option value="0">- Tuổi thọ acquy<span class=" text-danger ">*</span></option>
                                        <?php
                                        $check = [];
                                        foreach ($cauTraLoiDongCo as $key => $value) {
                                            if ($value['idcauhoi'] == 8) {
                                                array_unshift($check, $value['cautraloi']);
                                            }
                                        }
                                        $check = array_unique($check);
                                        foreach ($check as $key => $value) {
                                        ?>
                                            <option value="<?php echo $value; ?>">
                                                <?php echo $value; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="input-group d-flex w-64">
                                    <select class="form-select disable" aria-label="Default select example" id="tuoithobugi" name="tuoithobugi">
                                        <option value="0">- Tuổi thọ bugi<span class=" text-danger ">*</span></option>
                                        <?php
                                        $check = [];
                                        foreach ($cauTraLoiDongCo as $key => $value) {
                                            if ($value['idcauhoi'] == 9) {
                                                array_unshift($check, $value['cautraloi']);
                                            }
                                        }
                                        $check = array_unique($check);
                                        foreach ($check as $key => $value) {
                                        ?>
                                            <option value="<?php echo $value; ?>">
                                                <?php echo $value; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="input-group d-flex w-64">
                                    <select class="form-select disable" aria-label="Default select example" id="tiengdongco" name="tiengdongco">
                                        <option value="0">- Tiếng động lạ trong khoang máy<span class=" text-danger ">*</span></option>
                                        <?php
                                        $check = [];
                                        foreach ($cauTraLoiDongCo as $key => $value) {
                                            if ($value['idcauhoi'] == 10) {
                                                array_unshift($check, $value['cautraloi']);
                                            }
                                        }
                                        $check = array_unique($check);
                                        foreach ($check as $key => $value) {
                                        ?>
                                            <option value="<?php echo $value; ?>">
                                                <?php echo $value; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="input-group d-flex w-64">
                                    <select class="form-select disable" aria-label="Default select example" id="mucxang" name="mucxang">
                                        <option value="0">- Mức xăng của bầu phao<span class=" text-danger ">*</span></option>
                                        <?php
                                        $check = [];
                                        foreach ($cauTraLoiDongCo as $key => $value) {
                                            if ($value['idcauhoi'] == 11) {
                                                array_unshift($check, $value['cautraloi']);
                                            }
                                        }
                                        $check = array_unique($check);
                                        foreach ($check as $key => $value) {
                                        ?>
                                            <option value="<?php echo $value; ?>">
                                                <?php echo $value; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tab Điện -->
                    <div class="tab-pane " id="tabdien" role="tabpanel" aria-labelledby="dien-tab">
                        <div class="tab__content">
                            <div class="input-group d-flex w-64">
                                <select class="form-select" aria-label="Default select example" id="trieuchungdien" name="trieuchungdien">
                                    <option value="0">- Triệu chứng của ô tô liên quan tới Hệ thống Điện -</option>
                                    <?php
                                    $check = [];
                                    foreach ($cauTraLoiDien as $key => $value) {
                                        if ($value['idcauhoi'] == 20) {
                                            array_unshift($check, $value['cautraloi']);
                                        }
                                    }
                                    $check = array_unique($check);
                                    foreach ($check as $key => $value) {
                                    ?>
                                        <option value="<?php echo $value; ?>">
                                            <?php echo $value; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                                <!-- <div class="inputTxt input-group khac-container">
                                    <span class="input-group-text bg-light" id="inputGroup-sizing-default">Khác</span>
                                    <input id="trieuchungdienkhac1" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div> -->
                            </div>
                            <div class="form-disable-dien">
                            <div class="input-group d-flex w-64">
                                    <select class="form-select disable" aria-label="Default select example" id="tuoithoacquydien" name="tuoithoacquydien">
                                        <option value="0">- Tuổi thọ acquy<span class=" text-danger ">*</span></option>
                                        <?php
                                        $check = [];
                                        foreach ($cauTraLoiDongCo as $key => $value) {
                                            if ($value['idcauhoi'] == 8) {
                                                array_unshift($check, $value['cautraloi']);
                                            }
                                        }
                                        $check = array_unique($check);
                                        foreach ($check as $key => $value) {
                                        ?>
                                            <option value="<?php echo $value; ?>">
                                                <?php echo $value; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="input-group d-flex w-64">
                                    <select class="form-select disable" aria-label="Default select example" id="tuoithomayphat" name="tuoithomayphat">
                                        <option value="0">- Tuổi thọ máy phát điện<span class=" text-danger ">*</span></option>
                                        <?php
                                        $check = [];
                                        foreach ($cauTraLoiDien as $key => $value) {
                                            if ($value['idcauhoi'] == 12) {
                                                array_unshift($check, $value['cautraloi']);
                                            }
                                        }
                                        $check = array_unique($check);
                                        foreach ($check as $key => $value) {
                                        ?>
                                            <option value="<?php echo $value; ?>">
                                                <?php echo $value; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="disable input-dien-container">
                                    <div class="input-group d-flex">
                                        <select class="form-select w-64" aria-label="Default select example" id="trieuchungdenpha" name="trieuchungdenpha">
                                            <option value="0">- Triệu chứng của Đèn pha ô tô<span class=" text-danger ">*</span></option>
                                            <?php
                                            $check = [];
                                            foreach ($cauTraLoiDien as $key => $value) {
                                                if ($value['idcauhoi'] == 13) {
                                                    array_unshift($check, $value['cautraloi']);
                                                }
                                            }
                                            $check = array_unique($check);
                                            foreach ($check as $key => $value) {
                                            ?>
                                                <option value="<?php echo $value; ?>">
                                                    <?php echo $value; ?>
                                                </option>
                                            <?php } ?>
                                            <option value="Khác">-Khác-</option>
                                        </select>
                                        <div class="inputTxt input-group khac-container">
                                            <span class="input-group-text bg-light" id="inputGroup-sizing-default">Khác</span>
                                            <input id="trieuchungdienkhac4" disabled type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group d-flex w-64">
                                    <select class="form-select disable" aria-label="Default select example" id="ocapdien" name="ocapdien">
                                        <option value="0">- Ổ cắm cấp điện không<span class=" text-danger ">*</span></option>
                                        <?php
                                        $check = [];
                                        foreach ($cauTraLoiDien as $key => $value) {
                                            if ($value['idcauhoi'] == 14) {
                                                array_unshift($check, $value['cautraloi']);
                                            }
                                        }
                                        $check = array_unique($check);
                                        foreach ($check as $key => $value) {
                                        ?>
                                            <option value="<?php echo $value; ?>">
                                                <?php echo $value; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="disable input-dien-container">
                                    <div class="input-group d-flex">
                                        <select class="form-select w-64" aria-label="Default select example" id="tiengkeulucde" name="tiengkeulucde">
                                            <option value="0">- Tiếng kêu lạ lúc đề của ô tô<span class=" text-danger ">*</span></option>
                                            <?php
                                            $check = [];
                                            foreach ($cauTraLoiDien as $key => $value) {
                                                if ($value['idcauhoi'] == 15) {
                                                    array_unshift($check, $value['cautraloi']);
                                                }
                                            }
                                            $check = array_unique($check);
                                            foreach ($check as $key => $value) {
                                            ?>
                                                <option value="<?php echo $value; ?>">
                                                    <?php echo $value; ?>
                                                </option>
                                            <?php } ?>
                                            <option value="Khác">-Khác-</option>
                                        </select>
                                        <div class="inputTxt input-group khac-container">
                                            <span class="input-group-text bg-light" id="inputGroup-sizing-default">Khác</span>
                                            <input id="trieuchungdienkhac6" disabled type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tab Khí Thải -->
                    <div class="tab-pane " id="tabkhiThai" role="tabpanel" aria-labelledby="khiThai-tab">
                        <div class="tab__content">
                            <div class="input-group d-flex w-64">
                                <select class="form-select" aria-label="Default select example" id="trieuchungkhithai" name="trieuchungkhithai">
                                    <option value="0">- Triệu chứng của ô tô liên quan tới hệ thống Khí Thải -</option>
                                    <?php
                                    $check = [];
                                    foreach ($cauTraLoiKhiThai as $key => $value) {
                                        if ($value['idcauhoi'] == 21) {
                                            array_unshift($check, $value['cautraloi']);
                                        }
                                    }
                                    $check = array_unique($check);
                                    foreach ($check as $key => $value) {
                                    ?>
                                        <option value="<?php echo $value; ?>">
                                            <?php echo $value; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                                <!-- <div class="inputTxt input-group khac-container">
                                    <span class="input-group-text bg-light" id="inputGroup-sizing-default">Khác</span>
                                    <input id="trieuchungkhithaikhac" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- Tab Truyền lực -->
                    <div class="tab-pane " id="tabtruyenLuc" role="tabpanel" aria-labelledby="truyenLuc-tab">
                        <div class="tab__content">
                            <div class="input-group d-flex w-64">
                                <select class="form-select" aria-label="Default select example" id="trieuchungtruyenluc" name="trieuchungototruyenluc">
                                    <option value="0">- Triệu chứng của ô tô liên quan đến hệ thống Truyền Lực-</option>
                                    <?php
                                    $check = [];
                                    foreach ($cauTraLoiTruyenLuc as $key => $value) {
                                        if ($value['idcauhoi'] == 22) {
                                            array_unshift($check, $value['cautraloi']);
                                        }
                                    }
                                    $check = array_unique($check);
                                    foreach ($check as $key => $value) {
                                    ?>
                                        <option value="<?php echo $value; ?>">
                                            <?php echo $value; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                                <!-- <div class="inputTxt input-group khac-container">
                                    <span class="input-group-text bg-light" id="inputGroup-sizing-default">Khác</span>
                                    <input id="trieuchungtruyenluckhac" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- Tab Chuyển động -->
                    <div class="tab-pane" id="tabchuyenDong" role="tabpanel" aria-labelledby="chuyenDong-tab">
                        <div class="tab__content">
                            <div class="input-group d-flex w-64">
                                <select class="form-select " aria-label="Default select example" id="trieuchungchuyendong" name="trieuchungchuyendong">
                                    <option value="0">- Triệu chứng của ô tô liên quan tới hệ thống Chuyển Động -</option>
                                    <?php
                                    $check = [];
                                    foreach ($cauTraLoiChuyenDong as $key => $value) {
                                        if ($value['idcauhoi'] == 23) {
                                            array_unshift($check, $value['cautraloi']);
                                        }
                                    }
                                    $check = array_unique($check);
                                    foreach ($check as $key => $value) {
                                    ?>
                                        <option value="<?php echo $value; ?>">
                                            <?php echo $value; ?>
                                        </option>
                                    <?php } ?>

                                </select>
                                <!-- <div class="inputTxt input-group khac-container">
                                    <span class="input-group-text bg-light" id="inputGroup-sizing-default">Khác</span>
                                    <input id="trieuchungchuyendongkhac1" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div> -->
                            </div>
                            <div class="form-disable-chuyendong">
                                <div class=" input-group d-flex w-64">
                                    <select class="form-select disable" aria-label="Default select example" id="diduongthang" name="diduongthang">
                                        <option value="0">- Ô tô khi đi đường phẳng -</option>
                                        <?php
                                        $check = [];
                                        foreach ($cauTraLoiChuyenDong as $key => $value) {
                                            if ($value['idcauhoi'] == 16) {
                                                array_unshift($check, $value['cautraloi']);
                                            }
                                        }
                                        $check = array_unique($check);
                                        foreach ($check as $key => $value) {
                                        ?>
                                            <option value="<?php echo $value; ?>">
                                                <?php echo $value; ?>
                                            </option>
                                        <?php } ?>

                                    </select>
                                </div>
                                <div class="disable input-group d-flex w-64">
                                    <select class="form-select disable" aria-label="Default select example" id="khungxe" name="khungxe">
                                        <option value="0">- Khung xe khi qua đường nhấp nhô -</option>
                                        <?php
                                        $check = [];
                                        foreach ($cauTraLoiChuyenDong as $key => $value) {
                                            if ($value['idcauhoi'] == 17) {
                                                array_unshift($check, $value['cautraloi']);
                                            }
                                        }
                                        $check = array_unique($check);
                                        foreach ($check as $key => $value) {
                                        ?>
                                            <option value="<?php echo $value; ?>">
                                                <?php echo $value; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="disable input-chuyendong-container">
                                    <div class="input-group d-flex">
                                        <select class="form-select w-64" aria-label="Default select example" id="tinhtranglop" name="tinhtranglop">
                                            <option value="0">- Tình trạng lốp -</option>
                                            <?php
                                            $check = [];
                                            foreach ($cauTraLoiChuyenDong as $key => $value) {
                                                if ($value['idcauhoi'] == 18) {
                                                    array_unshift($check, $value['cautraloi']);
                                                }
                                            }
                                            $check = array_unique($check);
                                            foreach ($check as $key => $value) {
                                            ?>
                                                <option value="<?php echo $value; ?>">
                                                    <?php echo $value; ?>
                                                </option>
                                            <?php } ?>
                                            <option value="Khác">-Khác-</option>
                                        </select>
                                        <div class="inputTxt input-group khac-container">
                                            <span class="input-group-text bg-light" id="inputGroup-sizing-default">Khác</span>
                                            <input disabled id="trieuchungchuyendongkhac4" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tab khác -->
                    <div class="tab-pane " id="tabkhacbig" role="tabpanel" aria-labelledby="khac-tab">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Các triệu chứng khác.(Nếu có)" id="khacBig" style="min-height: 200px;"></textarea>
                            <label for="khacBig">Các triệu chứng khác.</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="khac-error-container"><span class=" text-danger f-12">*Nếu xe của bạn gặp những lỗi khác, vui lòng điền vào mục khác để hệ thống cải thiện trong thời gian tới..</span></div>
        <div class="d-grid gap-2 col-6 mx-auto btn-container">
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#ketluanmodal" id="submitBtn">Kết Luận</button>
        </div>
    </form>

</div>
<!-- Modal -->
<div class="modal fade" id="ketluanmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel">Nguyên Nhân và Giải Pháp.</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="result-txt">
                123
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="reload()">Thử Lại</button>
            </div>
        </div>
    </div>
</div>