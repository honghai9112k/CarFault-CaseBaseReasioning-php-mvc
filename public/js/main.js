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
        // check validate
        var checkPhanh = (trieuchungphanh !== "0" && tuoithophanh !== "0" && khithaphanh !== "0" && mucdauphanh !== "0");
        var check = true;
        // Xử lý dữ liệu
        if (hangxeTxt && tenxeTxt && doixeTxt && (
            (trieuchungphanh !== "0" && tuoithophanh !== "0" && khithaphanh !== "0" && mucdauphanh !== "0") ||
            (trieuchungdongco !== "0" && tuoithoacquy !== "0" && tuoithobugi !== "0" && tiengdongco !== "0" && mucxang !== "0") ||
            (trieuchungkhithai !== "0" && mangKhiThai !== "0") ||
            (trieuchungtruyenluc !== "0" && mangTruyenLuc !== "0") ||
            (trieuchungchuyendong !== "0" && diduongthang !== "0" && khungxe !== "0" && tinhtranglop !== "0") ||
            (trieuchungdien !== "0" && tuoithoacquydien !== "0" && tuoithomayphat !== "0" && trieuchungdenpha !== "0" && ocapdien !== "0" && tiengkeulucde !== "0")
        )) {
            
            if ((trieuchungphanh !== "0" && (tuoithophanh === "0" || khithaphanh === "0" || mucdauphanh === "0")) ||
             (trieuchungdongco !== "0" && (tuoithoacquy === "0" || tuoithobugi === "0" || tiengdongco === "0" || mucxang === "0"))) {
                check = false;
            }
            alert(check);
            if (check===true) {
                $.post("./Ajax/GetResult",
                    {
                        mangText: mangText, mangPhanh: mangPhanh, mangDongCo: mangDongCo,
                        mangDien: mangDien, mangKhiThai: mangKhiThai, mangTruyenLuc: mangTruyenLuc, mangChuyenDong: mangChuyenDong
                    },
                    function (data) {
                        $("#result-txt").html(data);
                    })
            }

        } else {
            if (!hangxeTxt) ($(".error1").html('Vui lòng điền đầy đủ trường này.'));
            if (!tenxeTxt) ($(".error2").html('Vui lòng điền đầy đủ trường này.'));
            if (!doixeTxt) ($(".error3").html('Vui lòng điền đầy đủ trường này.'));
            $.post("./Ajax/GetError", {}, function (data) {
                $("#result-txt").html(data);
            })
        }
    });
});

$(document).ready(function () {
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

    $("#trieuchungkhithai").change(function () {
        loadCauHoiKhiThai();
    });
    $("#trieuchungkhithai").keyup(function () {
        loadCauHoiKhiThai();
    });

    $("#trieuchungtruyenluc").change(function () {
        loadCauHoiTruyenLuc();
    });
    $("#trieuchungtruyenluc").keyup(function () {
        loadCauHoiTruyenLuc();
    });

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
}

function loadCauHoiDongCo() {
    $(".form-disable-dongco>div>select").addClass("undisable");
}
function loadCauHoiDien() {
    $(".form-disable-dien>div>select").addClass("undisable");
    $(".input-dien-container").removeClass("disable");
}
function loadCauHoiChuyenDong() {
    $(".form-disable-chuyendong>div>select").addClass("undisable");
    $(".input-chuyendong-container").removeClass("disable");
}



function reload() {
    location.reload();
}