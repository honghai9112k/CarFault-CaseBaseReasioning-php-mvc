$(document).ready(function () {
    $("#submitBtn").click(function () {
        // 3 câu hỏi ban đầu
        var hangxeTxt = $("#hangxeTxt").val().trim();
        var tenxeTxt = $("#tenxeTxt").val().trim();
        var doixeTxt = $("#doixeTxt").val().trim();

        var mangText = [hangxeTxt, tenxeTxt, doixeTxt];
        // Hệ thống Phanh
        var trieuchungphanh = $("#trieuchungphanh").val();
        var tuoithophanh = $("#tuoithophanh").val();
        var khithaphanh = $("#khithaphanh").val();
        var mucdauphanh = $("#mucdauphanh").val();

        var mangPhanh = [trieuchungphanh, tuoithophanh, khithaphanh, mucdauphanh];

        // Hệ Thống Động cơ
        var trieuchungdongco = $("#trieuchungdongco").val();
        var tuoithoacquy = $('#tuoithoacquy').val();
        var tuoithobugi = $("#tuoithobugi").val();
        var tiengdongco = $("#tiengdongco").val();
        var mucxang = $("#mucxang").val();

        var mangDongCo = [trieuchungdongco, tuoithoacquy, tuoithobugi, tiengdongco, mucxang];

        // Hệ Thống Điện
        var trieuchungdien = $("#trieuchungdien").val();
        var tuoithoacquydien = $('#tuoithoacquydien').val();
        var tuoithomayphat = $("#tuoithomayphat").val();
        var trieuchungdenpha = $("#trieuchungdenpha").val();
        var ocapdien = $("#ocapdien").val();
        var tiengkeulucde = $("#tiengkeulucde").val();
        var trieuchungdienkhac4 = $("#trieuchungdienkhac4").val().trim();
        var trieuchungdienkhac6 = $("#trieuchungdienkhac6").val().trim();

        var mangDien = [trieuchungdien, tuoithoacquydien, tuoithomayphat, trieuchungdenpha, ocapdien, tiengkeulucde, trieuchungdienkhac4, trieuchungdienkhac6];
        // Hệ Thống Khí Thải
        var trieuchungkhithai = $("#trieuchungkhithai").val();

        var mangKhiThai = [trieuchungkhithai];

        // Hệ Thống Truyền lực
        var trieuchungtruyenluc = $("#trieuchungtruyenluc").val();

        var mangTruyenLuc = [trieuchungtruyenluc];

        // Hệ Thống Chuyển động
        var trieuchungchuyendong = $("#trieuchungchuyendong").val();
        var diduongthang = $("#diduongthang").val();
        var khungxe = $("#khungxe").val();
        var tinhtranglop = $("#tinhtranglop").val();
        var trieuchungchuyendongkhac4 = $("#trieuchungchuyendongkhac4").val().trim();

        var mangChuyenDong = [trieuchungchuyendong, diduongthang, khungxe, tinhtranglop, trieuchungchuyendongkhac4];
        // Tab Khác 
        var khacBigTxt = $("#khacBigTxt").val().trim();

        // check validate
        var check = true;

        // Xử lý dữ liệu
        if (hangxeTxt && tenxeTxt && doixeTxt) {// validate 3 câu hỏi 1 2 3

            if (trieuchungphanh !== "0" || trieuchungdongco !== "0" || trieuchungkhithai !== "0"
                || trieuchungtruyenluc !== "0" || trieuchungchuyendong !== "0" || trieuchungdien !== "0" || khacBigTxt !== ""
            ) {
                if ((trieuchungphanh !== "0" && (tuoithophanh === "0" || khithaphanh === "0" || mucdauphanh === "0")) ||
                    (trieuchungdongco !== "0" && (tuoithoacquy === "0" || tuoithobugi === "0" || tiengdongco === "0" || mucxang === "0")) ||
                    // (trieuchungkhithai !== "0") ||
                    // (trieuchungtruyenluc !== "0") ||
                    (trieuchungchuyendong !== "0" && (diduongthang === "0" && khungxe === "0" && tinhtranglop === "0")) ||
                    (trieuchungdien !== "0" && (tuoithoacquydien === "0" && tuoithomayphat === "0" && trieuchungdenpha === "0" && ocapdien === "0" && tiengkeulucde === "0"))
                ) {
                    check = false;
                }
                if (check) {
                    $.post("./Ajax/GetResult",
                        {
                            mangText: mangText, mangPhanh: mangPhanh, mangDongCo: mangDongCo,
                            mangDien: mangDien, mangKhiThai: mangKhiThai, mangTruyenLuc: mangTruyenLuc,
                            mangChuyenDong: mangChuyenDong, khacBigTxt: khacBigTxt
                        },
                        function (data) {
                            $("#result-txt").html(data);
                        })
                } else {
                    $("#result-txt").html('Vui lòng điền đẩy đủ các trường gắn dấu *.!!!');
                }

            } else {
                $("#result-txt").html('Vui lòng điền đẩy đủ các trường gắn dấu *.!!!');
            }
        }
        else {
            if (!hangxeTxt) ($(".error1").html('Vui lòng điền đầy đủ trường này.'));
            if (!tenxeTxt) ($(".error2").html('Vui lòng điền đầy đủ trường này.'));
            if (!doixeTxt) ($(".error3").html('Vui lòng điền đầy đủ trường này.'));
            $("#result-txt").html('Vui lòng điền đẩy đủ các trường gắn dấu *.!!!');
        }
    });
});

$(document).ready(function () {
    $("#trieuchunghethong").change(function () {
        var idCauTraLoi = Number($('#trieuchunghethong').val().trim());
        console.log(idCauTraLoi);

        if (idCauTraLoi == 0) {
            $("#khac-tab").click();
        } else {
            $.post("./Ajax/GetHeThong", { idCauTraLoi: idCauTraLoi }, function (data) {
                // $('.nav-link').removeClass('active');
                // $(data).attr('aria-selected',false);
                var idBtn = "#" + data + "-tab";
                $(idBtn).click();

                $.post("./Ajax/GatCauTraLoi", { idCauTraLoi: idCauTraLoi }, function (dt) {
                    $(`option[value='${dt}']`).prop('selected', true);

                    setTimeout(function () {
                        var classhethong = ".form-disable-" + data + ">div>select";
                        $(classhethong).addClass("undisable");
                        $(".input-"+data+"-container").removeClass("disable");
                    }, 500);
                });
            })
        }

    });

    $("#trieuchungphanh").change(function () {
        loadCauHoiPhanh();
    });
    $("#trieuchungphanhkhac").keyup(function () {
        loadCauHoiPhanh();
    });

    $("#trieuchungdongco").change(function () {
        loadCauHoiDongCo();
    });
    $("#trieuchungdongcokhac").keyup(function () {
        loadCauHoiDongCo();
    });

    $("#trieuchungdien").change(function () {
        loadCauHoiDien();
    });
    $("#trieuchungdienkhac1").keyup(function () {
        loadCauHoiDien();
    });

    // $("#trieuchungkhithai").change(function () {
    //     loadCauHoiKhiThai();
    // });
    // $("#trieuchungkhithai").keyup(function () {
    //     loadCauHoiKhiThai();
    // });

    // $("#trieuchungtruyenluc").change(function () {
    //     loadCauHoiTruyenLuc();
    // });
    // $("#trieuchungtruyenluc").keyup(function () {
    //     loadCauHoiTruyenLuc();
    // });

    $("#trieuchungchuyendong").change(function () {
        loadCauHoiChuyenDong();
    });
    $("#trieuchungchuyendong").keyup(function () {
        loadCauHoiChuyenDong();
    });

    // input disable khi click Khác
    $("#tinhtranglop").change(function () {
        if ($("#tinhtranglop").val() == "Khác") {
            $("#trieuchungchuyendongkhac4").removeAttr('disabled');
        }
    });
    $("#tiengkeulucde").change(function () {
        if ($("#tiengkeulucde").val() == "Khác") {
            $("#trieuchungdienkhac6").removeAttr('disabled');
        }
    });
    $("#trieuchungdenpha").change(function () {
        if ($("#trieuchungdenpha").val() == "Khác") {
            $("#trieuchungdienkhac4").removeAttr('disabled');
        }
    });
});

function loadCauHoiPhanh() {
    // $("#tuoithophanh").removeAttr('disabled');
    // $("#mucdauphanh").addClass("undisable");
    $(".form-disable-phanh>div>select").addClass("undisable");
    if ($("#trieuchungphanh").val() == "0") {
        $(".form-disable-phanh>div>select").removeClass("undisable");
    }
}

function loadCauHoiDongCo() {
    $(".form-disable-dongco>div>select").addClass("undisable");
    if ($("#trieuchungdongco").val() == "0") {
        $(".form-disable-dongco>div>select").removeClass("undisable");
    }
}
function loadCauHoiDien() {
    $(".form-disable-dien>div>select").addClass("undisable");
    $(".input-dien-container").removeClass("disable");
    if ($("#trieuchungdien").val() == "0") {
        $(".form-disable-dien>div>select").removeClass("undisable");
        $(".input-dien-container").addClass("disable");
    }
}
function loadCauHoiChuyenDong() {
    $(".form-disable-chuyendong>div>select").addClass("undisable");
    $(".input-chuyendong-container").removeClass("disable");
    if ($("#trieuchungchuyendong").val() == "0") {
        $(".form-disable-chuyendong>div>select").removeClass("undisable");
        $(".input-chuyendong-container").addClass("disable");
    }
}



function reload() {
    location.reload();
}

