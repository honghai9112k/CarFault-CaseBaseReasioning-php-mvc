$(document).ready(function () {
    $("#submitBtn").click(function () {
        
        var hangxeTxt = $("#hangxeTxt").val().trim();
        var tenxeTxt = $("#tenxeTxt").val().trim();
        var doixeTxt = $("#doixeTxt").val().trim();

        var mangText = [hangxeTxt, tenxeTxt , doixeTxt ];

        var trieuchungphanh = $("#trieuchungphanh").val();
        var tuoithophanh = $("#tuoithophanh").val();
        var khithaphanh = $("#khithaphanh").val();
        var mucdauphanh = $("#mucdauphanh").val();
        var mangPhanh = [trieuchungphanh,tuoithophanh,khithaphanh,mucdauphanh];

        $.post("./Ajax/GetResult", { mangText: mangText, mangPhanh: mangPhanh }, function (data) {
            $("#result-txt").html(data);
        })
    });
});