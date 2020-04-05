$(document).ready(function () {
    var url = new URL(window.location.href);
    var company = url.searchParams.get("company");
    var fString = 'donate.php?company=' + company;
    $.ajax({
        url: fString,
        type: "post",
        success: function (response) {
            $("#fillable").html(replaceNbsps(response));
                     
        },
    });
});

function replaceNbsps(str) {
    var re = new RegExp(String.fromCharCode(160), "g");
    return str.replace(re, " ");
  }