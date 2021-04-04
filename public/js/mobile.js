jQuery(document).ready(function () {
    sendFormRequest();
    window.addEventListener('load', function () {
        var allimages = document.getElementsByTagName('img');
        for (var i = 0; i < allimages.length; i++) {
            if (allimages[i].getAttribute('data-src')) {
                allimages[i].setAttribute('src', allimages[i].getAttribute('data-src'));
            }
        }
    }, false);
    jQuery(function ($) {
        setTimeout(function(){
            $("#greetingsText").css("font-family","Roboto Condensed, serif !important");
            $("#shortMessage").css("font-family","Roboto Condensed, serif !important");
        }, 3000);
    });

});

function showTabMB(index) {
    jQuery(function ($) {
        $(".btn-ground").removeClass("active");
        $(".info-ground").removeClass("active");
        $(".btn-ground-" + index).addClass("active");
        $(".info-ground-" + index).addClass("active");
    });
}
function showPayment(index) {
    jQuery(function ($) {
        $(".btn-payment").removeClass("active");
        $(".info-payment").removeClass("active");
        $(".btn-payment-" + index).addClass("active");
        $(".info-payment-" + index).addClass("active");
    });
}

function sendFormRequest() {
    jQuery(function ($) {
    $("#submitformRequest").on("click", function () {
        var data = new Object();
        data.name = $("#formRequest #name").val();
        data.phone = $("#formRequest #phone").val();
        data.request = $("#formRequest #message").val();
        if (data.name !== "" && data.phone !== "" && data.request !== "") {
            var url = site_folder + "/index_ajax.php?module_name=ajax&action=call_request";
            $.ajax({
                url: url,
                type: "POST",
                data: data,
                success: function (result) {
                    $("#MSGContact").html("Gửi Yêu cầu thành công!");
                }
            })
        }
    });
    });
}
