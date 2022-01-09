$(document).ready(function () {
    $("#submitBtn").click(function () {

        var hangxeTxt = $("#hangxeTxt").val().trim();
        var tenxeTxt = $("#tenxeTxt").val().trim();
        var doixeTxt = $("#doixeTxt").val().trim();

        var mangText = [hangxeTxt, tenxeTxt, doixeTxt];

        var trieuchungphanh = $("#trieuchungphanh").val();
        var trieuchungphanhkhac = $('#trieuchungphanhkhac').val().trim();
        var tuoithophanh = $("#tuoithophanh").val();
        var khithaphanh = $("#khithaphanh").val();
        var mucdauphanh = $("#mucdauphanh").val();
        var mangPhanh = [trieuchungphanh, tuoithophanh, khithaphanh, mucdauphanh];

        if (hangxeTxt && tenxeTxt && doixeTxt && (trieuchungphanh !== "0" || trieuchungphanhkhac )&& tuoithophanh !== "0" && khithaphanh !== "0" && mucdauphanh !== "0") {
            $.post("./Ajax/GetResult", { mangText: mangText, mangPhanh: mangPhanh }, function (data) {
                $("#result-txt").html(data);
            })
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
        $("#tuoithophanh").removeAttr('disabled');
        $("#khithaphanh").removeAttr('disabled');
        $("#mucdauphanh").removeAttr('disabled');

        $("#tuoithophanh").addClass("undisable");
        $("#khithaphanh").addClass("undisable");
        $("#mucdauphanh").addClass("undisable");
    });
    $("#trieuchungphanhkhac").keyup(function () {
        $("#tuoithophanh").removeAttr('disabled');
        $("#khithaphanh").removeAttr('disabled');
        $("#mucdauphanh").removeAttr('disabled');

        $("#tuoithophanh").addClass("undisable");
        $("#khithaphanh").addClass("undisable");
        $("#mucdauphanh").addClass("undisable");
    });
});

function reload() {
    location.reload();
}