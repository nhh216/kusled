$(document).ready(function () {
    $(function () {
        if ($(".ellipsis_title").length != 0) {
            $(".ellipsis_title").dotdotdot({
                height: 48,
                callback: dotdotdotCallback
            });
        }
    });
    //  serviceHover();
    window.addEventListener('load', function () {
        if ($(".js_removedisplay_class").length > 0) {
            $(".js_removedisplay_class").css("display", "block");
        }
        if ($("#overlay_loading").length > 0) {
            $("#overlay_loading").css("z-index", "-1");
        }
        if ($("#box_type_list").length > 0) {
            if ($("#product_id").val() > 0) {
                boxType($("#product_id").val());
            }
        }

        if ($("#ratings").length > 0) {
            var rate_value = $("#rate_value").val();
            var options = {
                max_value: 5,
                step_size: 1,
                initial_value: rate_value,
            }
            $("#ratings").rate(options);

            $("#ratings").on("change", function (ev, data) {
                $("#ratings").css("width", "100%");
                $("#ratings").html("<p style='font-size: 14px;'>Cáº£m Æ¡n báº¡n Ä‘Ã£ Ä‘Ã¡nh giÃ¡ " + data.to + " sao!</p>");
                data.product_id = $("#product_id").val();
                $.ajax({
                    url: site_folder + '/index_ajax.php?module_name=product&action=update_rating',
                    type: "POST",
                    data: data,
                    success: function (data) {
                        return true;
                    }
                });

            });
        }

        if ($(".collapse_link").length > 0) {
            $(".collapse_link a").attr("data-toggle", "collapse");
        }

        myCore.init();
        $("#my-menu").css("display", "block");
        $(".slider-cates5.so-categories .cat-wrap .content-box .image-cat").on("hover", function () {
            $(".slider-cates5.so-categories .cat-wrap .content-box .image-cat").removeClass("active");
            $(this).addClass("active");
        });
        if ($(".click_item_product").length > 0) {
            $(".click_item_product").on("click", function () {
                var href = $(this).data("href");
                window.location.href = href;
            })
        }
    });


    $(".check_brand_search").on("click", function () {
        var data = new Object();
        var id = $(this).data("id");
        data.brand_id = id;
        data.check_brand = document.getElementById("brand_" + id).checked;
        $.ajax({
            url: site_folder + '/index_ajax.php?module_name=product&action=load_ajax',
            data: data,
            contentType: 'html',
            success: function (data) {
                $("#contentload_api").html(data);
                return true;
            }
        });
    });
    $(".check_model_search").on("click", function () {
        var data = new Object();
        var id = $(this).data("id");
        var value = $(this).data("value");
        data.model_id = id;
        data.models = value;
        data.check_model = document.getElementById("manufacturer_" + id).checked;
        $.ajax({
            url: site_folder + '/index_ajax.php?module_name=product&action=load_ajax',
            data: data,
            contentType: 'html',
            success: function (data) {
                $("#contentload_api").html(data);
                return true;
            }
        });
    });
    $(".check_years_search").on("click", function () {
        var data = new Object(), id = $(this).data("id"), value = $(this).data("value");
        data.year_id = id;
        data.years = value;
        data.check_year = document.getElementById("years_" + id).checked;
        $.ajax({
            url: site_folder + '/index_ajax.php?module_name=product&action=load_ajax',
            data: data,
            contentType: 'html',
            success: function (data) {
                $("#contentload_api").html(data);
                return true;
            }
        });
    });
    $(".min_max_value").on("click", function () {
        var data = new Object();
        data.min_price = $(".min_value").val();
        data.max_price = $(".max_value").val();
        $.ajax({
            url: site_folder + '/index_ajax.php?module_name=product&action=load_ajax',
            data: data,
            contentType: 'html',
            success: function (data) {
                $("#contentload_api").html(data);
                return true;
            }
        });
    });
    $(".change_sort").on("change", function () {
        var data = new Object();
        data.sort = $(this).val();
        $.ajax({
            url: site_folder + '/index_ajax.php?module_name=product&action=load_ajax',
            data: data,
            contentType: 'html',
            success: function (data) {
                $("#contentload_api").html(data);
                return true;
            }
        });
    });
    $(".change_view").on("change", function () {
        var data = new Object();
        data.limit = $(this).val();
        $.ajax({
            url: site_folder + '/index_ajax.php?module_name=product&action=load_ajax',
            data: data,
            contentType: 'html',
            success: function (data) {
                $("#contentload_api").html(data);
                return true;
            }
        });
    });
    $(".bg_opacity_50").on("click", function () {
        notificationWarning("Cáº§n chá»n phÃ¢n loáº¡i 1 trÆ°á»›c khi chá»n loáº¡i 2.")
    });
    $('.leftmenutrigger').on('click', function (e) {
        $('.side-nav').toggleClass("open");
        e.preventDefault();
    });
    $('ul#menudroptop li.dropdown').hover(function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    });


    $("#formSearchHeader .input-group-append").on("click", function () {
        $("#formSearchHeader").submit();
    });
    $("#Redeem").click(function () {
        var rc = $("#coupon").val();

        if (rc != "" && rc != "Nháº­p mÃ£ khuyáº¿n mÃ£i...") {
            $.ajax({
                url: site_folder + '/index_ajax.php?module_name=cart&action=check_coupon_code',
                data: {cc: rc},
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (data) {
                    if (data.ok) {
                        location.reload();
                        $("#redeem_msg").html("MÃ£ giáº£m giÃ¡ há»£p lá»‡, báº¡n Ä‘Æ°á»£c giáº£m " + data.value + " " + data.type);
                    } else {
                        $("#redeem_msg").html("<span class='text-danger'>MÃ£ giáº£m giÃ¡ khÃ´ng há»£p lá»‡ hoáº·c Ä‘Ã£ Ä‘Æ°á»£c sá»­ dá»¥ng.</span>");
                    }
                    return true;
                }
            });
        } else {
            alert("Vui lÃ²ng nháº­p mÃ£ khuyáº¿n mÃ£i.");
        }
        return false;
    });

    $(".remove_redeem").click(function () {
        var conf = window.confirm("Báº¡n muá»‘n xÃ³a mÃ£ giáº£m giÃ¡?");
        if (conf) {
            $.ajax({
                url: site_folder + '/index_ajax.php?module_name=cart&action=remove_coupon_code',
                data: {},
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (data) {
                    if (data.ok) {
                        $("#redeem_msg").html("");
                    }
                    return true;
                }
            });
        }
        return false;
    });

    $(".remove_itemcart").click(function () {
        var conf = window.confirm("Báº¡n muá»‘n xÃ³a sáº£n pháº©m nÃ y?");
        if (conf) {
            var productid = $(this).attr("rel-id");
            $.ajax({
                url: site_folder + '/index_ajax.php?module_name=cart&action=remove',
                data: {id: productid},
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (data) {
                    location.reload();
                    return true;
                }
            });
        }
        return false;
    });
    $("#changesort").on("change", function () {
        var value = $(this).val();
        var newurl = "";
        var url = window.location.href;
        // window.location.href=url+"&sort="+value;
        if (url.indexOf('sort') > -1) {
            newurl = replaceUrlParam(url, "sort", value);
        } else {
            newurl = url + "?sort=" + value;
        }

        window.location.href = newurl;
    });

    $(".btnNewletter").click(function (e) {
        var email = $("#newsletter").val();
        if (email != "") {
            $.post(site_folder + '/index_ajax.php?module_name=footer&action=newsletter',
                {email: email},
                function (data) {
                    notificationSuccess("ÄÄƒng kÃ½ nháº­n báº£n tin thÃ nh cÃ´ng!");
                    return true;
                });
        } else {
            notificationError("Vui lÃ²ng nháº­p Ä‘á»‹a chá»‰ email!")
        }
    });


    $(".btnDh").click(function (e) {
        var data = new Object();
        data.note = $("#note").val();
        if ($("#address_required").length > 0) {
            notificationError("Báº¡n Vui lÃ²ng thÃªm Ä‘á»‹a chá»‰ nháº­n hÃ ng!");
            return false;
        }
        $(".btnDh").text("Äang xá»­ lÃ½...");
        $(".btnDh").css("pointer-events", "none");
        var url = site_folder + "/index_ajax.php?module_name=check_out&action=xac-nhan";
        $.ajax({
            url: url,
            data: data,
            type: "POST",
            success: function (result) {

                if (result === "2") {
                    notificationWarning("KhÃ´ng tá»“n táº¡i sáº£n pháº©m nÃ o trong giá» hÃ ng.");
                } else if (result === "3") {
                    notificationWarning("Äáº·t hÃ ng lá»—i, xin vui lÃ²ng thá»­ láº¡i hoáº·c liÃªn há»‡ chÃºng tÃ´i.");
                } else if (result === "4") {
                    notificationWarning("Vui lÃ²ng chá»n Ä‘Æ¡n vá»‹ váº­n chuyá»ƒn.");
                } else if (result === "5") {
                    notificationWarning("TÃ i khoáº£n Ä‘ang ná»£ AUTO365, Vui lÃ²ng liÃªn há»‡ Ä‘á»ƒ Ä‘Æ°á»£c há»— trá»£!");
                } else if (result === "6") {
                    notificationWarning("PhÆ°Æ¡ng thá»©c thanh toÃ¡n khÃ´ng phÃ¹ há»£p. Vui lÃ²ng thá»­ láº¡i vá»›i phÆ°Æ¡ng thá»©c khÃ¡c.");
                } else if (result === "7") {
                    notificationWarning("Vui lÃ²ng nháº­p sá»‘ tiá»n thu thÃªm, thÃ´ng tin ngÆ°á»i gá»­i vÃ  lÆ°u láº¡i trÆ°á»›c khi hoÃ n thÃ nh Ä‘áº·t hÃ ng.");
                } else {
                    window.location.href = site_folder + "/don-hang/chi-tiet/" + result;
                }
                $(".btnDh").text("Äáº·t hÃ ng");
                $(".btnDh").css("pointer-events", "inherit");
            }
        });
    });
    $("#btn_checkout").on("click", function () {
        var data = new Object();
        data.fullname = $("#cart_fullname").val();
        data.phone = $("#cart_phone").val();
        data.address = $("#cart_address").val();
        data.email = $("#cart_email").val();
        data.note = $("#cart_note").val();
        if (data.fullname !== "" && data.phone !== "" && data.address !== "") {
            $("#btn_checkout").text("ÄANG Xá»¬ LÃ...");
            var url = site_folder + "/index_ajax.php?module_name=check_out_nologin&action=dathang";
            $.post(url, {
                data
            }, function (result) {
                if (result !== '') {
                    window.location.href = result;
                } else {
                    alert("QuÃ½ khÃ¡ch vui lÃ²ng kiá»ƒm tra thÃ´ng tin Ä‘áº·t hÃ ng! Nháº­p thÃ´ng tin theo mÃ´ táº£.");
                    $("#btn_checkout").text("Äáº¶T HÃ€NG");
                }
            });
        } else {
            alert("QuÃ½ khÃ¡ch vui lÃ²ng kiá»ƒm tra thÃ´ng tin Ä‘áº·t hÃ ng! Nháº­p Ä‘áº§y Ä‘á»§ Ã´ báº¯t buá»™c nháº­p.");
        }
    });
    $(".btn_useabove").click(function () {
        $("#shipping_fullname").val($("#customer_fullname").val());
        $("#shipping_phone").val($("#customer_phone").val());
        $("#shipping_email").val($("#customer_email").val());
        $("#shipping_address").val($("#customer_address").val());
        $("#shipping_provinces").val($("#customer_provinces").val());
    });
    $('.add').click(function () {
        if ($(this).prev().val() < 50) {
            $(this).prev().val(+$(this).prev().val() + 1);
        }
    });
    $('.sub').click(function () {
        if ($(this).next().val() > 1) {
            if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
        }
    });
    $(function () {
        if ($("div.ellipsis_detail").length != 0) {
            $("div.ellipsis_detail").dotdotdot({
                height: 1472,
                callback: dotdotdotCallback
            });
        }
    });


    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
    //end documen ready

    // withdraw
    $("#btnWithraw").click(function (e) {
        var data = new Object();
        data.number_withdraw = $("#number_withdraw").val();
        var max_withdraw = $("#number_withdraw").attr("max");

        if (
            data.number_withdraw === "" ||
            typeof data.number_withdraw === "undefined"
        ) {
            notificationWarning("QuÃ½ khÃ¡ch cáº§n nháº­p sá»‘ tiá»n yÃªu cáº§u rÃºt!");
            return false;
        } else if (parseInt(data.number_withdraw) > parseInt(max_withdraw)) {
            notificationError("QuÃ½ khÃ¡ch chá»‰ Ä‘Æ°á»£c yÃªu cáº§u rÃºt tá»‘i Ä‘a sá»‘ dÆ° hiá»‡n táº¡i!");
            return false;
        } else {
            $("#btnWithraw").text("Äang xá»­ lÃ½...");
            document.getElementById("btnWithraw").disabled = true;
            var url = site_folder + "/index_ajax.php?module_name=wallet&action=ActionWithdraw";
            $.ajax({
                url: url,
                data: data,
                type: "POST",
                success: function (result) {
                    notificationSuccess("Gá»­i yÃªu cáº§u rÃºt tiá»n thÃ nh cÃ´ng! Vui lÃ²ng chá» chÃºng tÃ´i xÃ¡c nháº­n chuyá»ƒn tiá»n!");
                    $("#btnWithraw").text("XÃ¡c nháº­n yÃªu cáº§u");
                    document.getElementById("btnWithraw").disabled = false;
                }
            });
        }
    });

    var valuerate = $(".rate2").data("rating");
    var options = {
        max_value: 5,
        step_size: 1,
        initial_value: valuerate,
    };
    $(".rate2").rate(options);
    $(".rate2").on("change", function (ev, data) {
        data.product_id = $("#product_id").val();
        console.log(data.from, data.to);
        $.post(site_folder + '/index_ajax.php?module_name=product&action=updaterating', {
                "from": data.from,
                "to": data.to,
                "product_id": data.product_id
            },
            function (data) {
                return true;
            });
    });


// active tab register
    var url = window.location.href;
    var activeTab = url.substring(url.indexOf("#") + 1);
    $('a[href="#' + activeTab + '"]').tab('show')

    //end documen ready

    $("#codamount").on({
        keyup: function () {
            formatCurrency($(this));
        },
        blur: function () {
            formatCurrency($(this), "blur");
        }
    });


    jQuery(function ($) {
        $(".sidebar-dropdown > a").click(function () {
            $(".sidebar-submenu").slideUp(200);
            if (
                $(this)
                    .parent()
                    .hasClass("active")
            ) {
                $(".sidebar-dropdown").removeClass("active");
                $(this)
                    .parent()
                    .removeClass("active");
            } else {
                $(".sidebar-dropdown").removeClass("active");
                $(this)
                    .next(".sidebar-submenu")
                    .slideDown(200);
                $(this)
                    .parent()
                    .addClass("active");
            }
        });

        $("#close-sidebar").click(function () {
            $(".page-wrapper").removeClass("toggled");
        });
        $("#show-sidebar").click(function () {
            $(".page-wrapper").addClass("toggled");
        });
    });


    // END DOCUMENT #enddocument
});
//start 28.2.2020 #start

//end 28.2.2020 #end
function replaceUrlParam(url, paramName, paramValue) {
    if (paramValue == null) {
        paramValue = '';
    }
    var pattern = new RegExp('\\b(' + paramName + '=).*?(&|#|$)');
    if (url.search(pattern) >= 0) {
        return url.replace(pattern, '$1' + paramValue + '$2');
    }
    url = url.replace(/[?#]$/, '');
    return url + (url.indexOf('?') > 0 ? '&' : '?') + paramName + '=' + paramValue;
};

function dotdotdotCallback(isTruncated) {
    var elementExists = document.getElementsByClassName("ddd-truncated");
    var ellipsis_detail = $("div.ellipsis_detail");
    if (elementExists.length > 0) {
        $(".button_ellipsis_detail").on('click', function () {
            $(this).html("Thu gá»n <i class='fa fa-caret-up'></i>");
            ellipsis_detail.trigger("destroy");
            ellipsis_detail.dotdotdot({
                height: null,
                callback: dotdotdotCallback
            });
        });
    } else {
        $(".button_ellipsis_detail").on('click', function () {
            $(this).html("Xem thÃªm <i class='fa fa-caret-down'></i>");
            ellipsis_detail.trigger("destroy");
            ellipsis_detail.dotdotdot({
                height: 1472,
                callback: dotdotdotCallback
            });
        });
    }
}

function addWishlist(id) {
    var url = site_folder + "/index_ajax.php?module_name=product&action=wishlist&id=" + id;
    $.ajax({
        url: url,
        type: "POST",
        success: function (res) {
            if (parseInt(res) >= 0) {
                $("#addWishlist").addClass("active");
                notificationSuccess("ThÃªm thÃ nh cÃ´ng sáº£n pháº©m yÃªu thÃ­ch!");
            } else {
                var c = window.confirm("Há»‡ thá»‘ng yÃªu cáº§u Ä‘Äƒng nháº­p Ä‘á»ƒ thÃ­ch sáº£n pháº©m, báº¡n cÃ³ Ä‘á»“ng Ã½ chuyá»ƒn qua trang Ä‘Äƒng nháº­p?");
                if (c) {
                    window.location.href = site_folder + "/dang-nhap";
                }
                return true;
            }
        }
    });
    // ga('send', {
    //     'hitType': 'event',
    //     'eventCategory': 'WISHLIST',
    //     'eventAction': 'Add',
    //     'eventLabel': id,
    //     'eventValue': '1',
    //     'nonInteraction': true
    // });
};

function addTocard(id) {
    var data = new Object();
    // data = $("#formProductItem").serialize();
    data.id = id;
    data.quantity = $("#formProductItem input[name='quantity']").val();

    if (typeof $("#formProductItem input[name='product_type']").val() !== "undefined"
    ) {
        var product_type_parent = getRadioVal(document.getElementById('formProductItem'), 'product_type_parent');
        var product_type = getRadioVal(document.getElementById('formProductItem'), 'product_type');
        console.log(product_type);
        if (typeof product_type === "undefined" || product_type === "") {
            $.notify({
                message: 'Vui lÃ²ng chá»n loáº¡i sáº£n pháº©m'
            }, {
                type: 'warning',
                placement: {
                    from: "bottom",
                    align: "right"
                }
            });
            return false;
        }
    }
    data.product_detail_id = product_type;
    data.quantity_detail = $("#countQuantity").val();
    if (parseInt(data.quantity) > parseInt(data.quantity_detail)) {
        $.notify({
            message: 'Sá»‘ lÆ°á»£ng hÃ ng táº¡i kho khÃ´ng Ä‘á»§ cung cáº¥p.'
        }, {
            type: 'warning',
            placement: {
                from: "bottom",
                align: "right"
            }
        });
        return false;
    }

    var url = site_folder + "/index_ajax.php?module_name=cart&action=add_ajax&id=" + id;
    $.ajax({
        url: url,
        type: "POST",
        data: data,
        success: function (res) {
            if (parseInt(res) >= 0) {
                $("#addCart").addClass("active");
                var numcart = $("#cardNum").attr("mydata-quantity");
                $("#cardNum").attr("mydata-quantity", parseInt(numcart) + parseInt(1));
                $.notify({
                    message: 'ThÃªm vÃ o giá» hÃ ng thÃ nh cÃ´ng! Click xem giá» hÃ ng',
                    url: site_folder + "/gio-hang"
                }, {
                    type: 'success',
                    placement: {
                        from: "bottom",
                        align: "right"
                    }
                });
            } else if (parseInt(res) >= -1) {
                $("#signin").modal("show");
                return true;
            }
        }
    });
    // ga('send', {
    //     'hitType': 'event',
    //     'eventCategory': 'CART',
    //     'eventAction': 'Add',
    //     'eventLabel': id,
    //     'eventValue': '1',
    //     'nonInteraction': true
    // });
};


function addTocardNologin(id) {
    var data = new Object();
    data.id = id;
    data.quantity = $("#formProductItem input[name='quantity']").val();
    if (typeof $("#formProductItem input[name='product_type']").val() !== "undefined"
    ) {
        var product_type_parent = getRadioVal(document.getElementById('formProductItem'), 'product_type_parent');
        var product_type = getRadioVal(document.getElementById('formProductItem'), 'product_type');
        if (typeof product_type === "undefined" || product_type === "") {
            $.notify({
                message: 'Vui lÃ²ng chá»n loáº¡i sáº£n pháº©m'
            }, {
                type: 'warning',
                placement: {
                    from: "bottom",
                    align: "right"
                }
            });
            return false;
        }
        data.product_detail_id = product_type;
    }

    var url = site_folder + "/index_ajax.php?module_name=cart_nologin&action=add_ajax&id=" + id;
    $.ajax({
        url: url,
        type: "POST",
        data: data,
        success: function (res) {
            window.location.href = site_folder + "/dat-hang-nhanh";
        }
    });
};

function updateImageCart(id, input) {
    var data = new FormData();
    data.append("id", id);

    for ($i = 0; $i < input.files.length; $i++) {
        if (input.files && input.files[$i]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $("#created_img" + id).append(' <div style="padding: 10px;display: inline-block;float: left;width: 100px;">' +
                    '<a href="javscript:;" onclick="removeImageAfter()" class="removeImage"><i class="fa fa-trash"></i></a>' +
                    '<img id="blah' + $i + '" src="' + e.target.result + '" alt="your image"  width="100%"/></div>');
            };
            reader.readAsDataURL(input.files[$i]);
            data.append("file[]", input.files[$i]);
        }
    }
    //Post form
    var xmlhttp;
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.open("POST", site_folder + "/index_ajax.php?module_name=cart&action=updateImageCart", true);
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            // location.reload();
            $("#required_upload").val(1);
            $("#img_uploaded_" + id).html(xmlhttp.responseText);
            $.notify({
                message: 'ThÃªm hÃ¬nh áº£nh thÃ nh cÃ´ng!'
            }, {
                type: 'success',
                placement: {
                    from: "bottom",
                    align: "right"
                }
            });
        }
    }
    xmlhttp.send(data);
}

function removeImage(id, value) {
    $("#parents_image_" + id).remove();
    var url = site_folder + "/index_ajax.php?module_name=cart&action=removeImage";
    $.ajax({
        url: url,
        type: "POST",
        data: {value: value, id: id},
        success: function (data, textStatus, jqXHR) {
            $.notify({
                message: 'XÃ³a hÃ¬nh áº£nh thÃ nh cÃ´ng!'
            }, {
                type: 'success',
                placement: {
                    from: "bottom",
                    align: "right"
                }
            });
            if (document.querySelectorAll('.removeImage').length <= 0) {
                $("#required_upload").val("");
            }
            return;
        }
    });
}

function updateNoteCart(id) {
    var note = $("textarea[name='notes[" + id + "]']").val();
    if (note != "") {
        var url = site_folder + "/index_ajax.php?module_name=cart&action=updateNoteCart";
        $.ajax({
            url: url,
            type: "POST",
            data: {note: note, id: id},
            success: function (data, textStatus, jqXHR) {
                $.notify({
                    message: 'Cáº­p nháº­t ghi chÃº thÃ nh cÃ´ng!'
                }, {
                    type: 'success',
                    placement: {
                        from: "bottom",
                        align: "right"
                    }
                });
                return;
            }
        });
    }
}


function buyNow(id) {
    var data = new Object();
    // data = $("#formProductItem").serialize();
    data.id = id;
    data.quantity = $("#formProductItem input[name='quantity']").val();

    if (typeof $("#formProductItem input[name='product_type']").val() !== "undefined"
    ) {
        var product_type_parent = getRadioVal(document.getElementById('formProductItem'), 'product_type_parent');
        var product_type = getRadioVal(document.getElementById('formProductItem'), 'product_type');
        console.log(product_type);
        if (typeof product_type === "undefined" || product_type === "") {
            $.notify({
                message: 'Vui lÃ²ng chá»n loáº¡i sáº£n pháº©m'
            }, {
                type: 'warning',
                placement: {
                    from: "bottom",
                    align: "right"
                }
            });
            return false;
        }
    }
    data.product_detail_id = product_type;
    data.quantity_detail = $("#countQuantity").val();
    if (parseInt(data.quantity) > parseInt(data.quantity_detail)) {
        $.notify({
            message: 'Sá»‘ lÆ°á»£ng hÃ ng táº¡i kho khÃ´ng Ä‘á»§ cung cáº¥p.'
        }, {
            type: 'warning',
            placement: {
                from: "bottom",
                align: "right"
            }
        });
        return false;
    }

    var url = site_folder + "/index_ajax.php?module_name=cart&action=add_ajax&id=" + id;
    $.ajax({
        url: url,
        type: "POST",
        data: data,
        success: function (res) {
            if (parseInt(res) >= 0) {
                window.location.href = site_folder + "/gio-hang";
            } else {
                $("#signin").modal("show");
                return true;
            }
        }
    });
    // ga('send', {
    //     'hitType': 'event',
    //     'eventCategory': 'CART',
    //     'eventAction': 'Add',
    //     'eventLabel': id,
    //     'eventValue': '1',
    //     'nonInteraction': true
    // });

    $('.iframe-link-ajax').magnificPopup({
        type: 'ajax',
        fixedContentPos: true,
        fixedBgPos: true,
        overflowY: 'auto',
        closeBtnInside: true,
        closeOnContentClick: true,
        preloader: false,
        midClick: true,
        modal: "closeOnContentClick",
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in',
        //gallery: {  enabled: true }
    });
};


function ChangeUploadFile() {
    var x = document.getElementById("uploadFilehieuchuan");
    var txt = "";
    if ('files' in x) {
        if (x.files.length == 0) {
            txt = "Select one or more files.";
        } else {
            for (var i = 0; i < x.files.length; i++) {
                var file = x.files[i];
                if ('name' in file) {
                    txt += "name: " + file.name + "<br>";
                }
                if ('size' in file) {
                    txt += "size: " + file.size + " bytes <br>";
                }
            }
        }
    }
    else {
        if (x.value == "") {
            txt += "Chá»n 1 hoáº·c nhiá»u files.";
        } else {
            txt += "TrÃ¬nh duyá»‡t khÃ´ng há»— trá»£!";
            txt += "<br>The path of the selected file: " + x.value; // If the browser does not support the files property, it will return the path of the selected file instead.
        }
    }
    $("#fileuploadHieuchuan").append(txt);
}

function appendboxComment(comment_id) {
    $("#boxCMT" + comment_id).html(" <div class=\"form-group\">\n" +
        "                    <input type=\"text\" name=\"fullname\" id=\"fullname" + comment_id + "\" class=\"form-control form-control-nopd\"\n" +
        "                           placeholder=\"Há» tÃªn\" required/>\n" +
        "                </div>\n" +
        "                <div class=\"form-group\">\n" +
        "                    <textarea name=\"comment\" class=\"form-control form-control-nopd\" id=\"comment" + comment_id + "\" cols=\"30\" rows=\"3\"\n" +
        "                              placeholder=\"Má»i báº¡n Ä‘á»ƒ láº¡i bÃ¬nh luáº­n (Vui lÃ²ng gÃµ tiáº¿ng viá»‡t cÃ³ dáº¥u)\"\n" +
        "                              required></textarea>\n" +
        "                </div>\n" +
        "                <div class=\"form-group text-right\">\n" +
        "                    <button type=\"button\" onclick='RepCommentPro(" + comment_id + ")'  class=\"btn btn-orange\">Gá»¬I CÃ‚U Há»ŽI</button>\n" +
        "                </div>");
}

function addCommentPro() {
    var comment = $("#comment").val();
    var product_id = $("#product_id").val();
    var fullname = $("#fullname").val();
    if (comment !== "" && fullname !== "") {
        $.post(site_folder + '/index_ajax.php?module_name=product&action=submitcomment', {
                "comment": comment,
                "fullname": fullname,
                "product_id": product_id
            },
            function (data) {
                $("#add_comment").html("<p class='alert alert-success'>Gá»­i cÃ¢u há»i thÃ nh cÃ´ng!</p>");
                $("#fullname").val("");
                $("#comment").val("");
                return true;
            });
    } else {
        alert("Vui lÃ²ng nháº­p ná»™i dung Ä‘Ã¡nh giÃ¡.");
    }
}

function RepCommentPro(comment_id = 0) {
    var comment = $("#comment" + comment_id).val();
    var product_id = $("#product_id").val();
    var fullname = $("#fullname" + comment_id).val();
    if (comment !== "" && fullname !== "") {
        $.post(site_folder + '/index_ajax.php?module_name=product&action=submitcomment', {
                "comment": comment,
                "fullname": fullname,
                "comment_id": comment_id,
                "product_id": product_id
            },
            function (data) {
                $("#boxCMT" + comment_id).html("<p class='alert alert-success'>Gá»­i cÃ¢u há»i thÃ nh cÃ´ng!</p>");
                return true;
            });
    } else {
        alert("Vui lÃ²ng nháº­p ná»™i dung Ä‘Ã¡nh giÃ¡.");
    }
}

function updateCartItem(id) {
    var $this = $("#qty-" + id), qty = $this.val();
    var url = site_folder + "/index_ajax.php?module_name=cart&action=updateCartItem&quantity=" + qty + "&id=" + id;
    $.ajax({
        url: url,
        success: function (result) {
            window.location.reload();
        }
    });
}

function addQty(id) {
    var $this = $("#qty-" + id), qty = $this.val();
    $this.val(parseInt(qty) + parseInt(1));
    var url = site_folder + "/index_ajax.php?module_name=cart&action=update_add_cart&qty=add&id=" + id;
    $.ajax({
        url: url,
        success: function (result) {
            window.location.reload();
        }
    });
}

function subQty(id) {
    var $this = $("#qty-" + id), qty = $this.val();
    if (qty > 1) {
        if (qty > 1) $this.val(parseInt(qty) - parseInt(1));
        var url = site_folder + "/index_ajax.php?module_name=cart&action=update_add_cart&qty=sub&id=" + id;
        $.ajax({
            url: url,
            success: function (result) {
                window.location.reload();
            }
        });
    }
}

//NOLOGIN

function updateCartItemNologin(id) {
    var $this = $("#qty-" + id), qty = $this.val();
    var url = site_folder + "/index_ajax.php?module_name=cart_nologin&action=updateCartItem&quantity=" + qty + "&id=" + id;
    $.ajax({
        url: url,
        success: function (result) {
            window.location.reload();
        }
    });
}

function addQtyNologin(id) {
    var $this = $("#qty-" + id), qty = $this.val();
    $this.val(parseInt(qty) + parseInt(1));
    var url = site_folder + "/index_ajax.php?module_name=cart_nologin&action=update_add_cart&qty=add&id=" + id;
    $.ajax({
        url: url,
        success: function (result) {
            window.location.reload();
        }
    });
}

function subQtyNologin(id) {
    var $this = $("#qty-" + id), qty = $this.val();
    if (qty > 1) {
        if (qty > 1) $this.val(parseInt(qty) - parseInt(1));
        var url = site_folder + "/index_ajax.php?module_name=cart_nologin&action=update_add_cart&qty=sub&id=" + id;
        $.ajax({
            url: url,
            success: function (result) {
                window.location.reload();
            }
        });
    }
}

//NOLOGIN

function getDistrict(sel) {
    $("#input_ship_province").val(sel.options[sel.selectedIndex].text);
    var url = site_folder + "/index_ajax.php?module_name=profile&action=getDistrict&province_id=" + $("#province_id").val();
    $.ajax({
        url: url,
        success: function (result) {
            $("#district_id").html(result);
        }
    });
}

function getWard(sel) {
    $("#input_ship_district").val(sel.options[sel.selectedIndex].text);
    var url = site_folder + "/index_ajax.php?module_name=profile&action=getWard&district_id=" + $("#district_id").val();
    $.ajax({
        url: url,
        success: function (result) {
            $("#ward_id").html(result);
        }
    });
}

function ChangeWard(sel) {
    $("#input_ship_ward").val(sel.options[sel.selectedIndex].text);
}

function saveAddressShip() {

    var data = new Object();
    data.ship_name = $("#addressForm input[name='ship_name']").val();
    data.ship_phone = $("#addressForm input[name='ship_phone']").val();
    data.ship_email = $("#addressForm input[name='ship_email']").val();
    data.ship_address = $("#addressForm input[name='ship_address']").val();

    data.province_id = $("#addressForm select[name='ship_province']").val();
    data.district_id = $("#addressForm select[name='ship_district']").val();
    data.ward_id = $("#addressForm select[name='ship_ward']").val();

    data.ship_province = $("#addressForm #input_ship_province").val();
    data.ship_district = $("#addressForm #input_ship_district").val();
    data.ship_ward = $("#addressForm #input_ship_ward").val();
    data.note = $("#addressForm textarea[name='note']").val();
    if (data.ship_name != "" && data.ship_phone != "" && data.ship_address != ""
        && data.province_id != "" && data.district_id != "" && data.ward_id != "") {
        overlaybg();
        var url = site_folder + "/index_ajax.php?module_name=check_out&action=saveAddressShip";
        $.ajax({
            url: url,
            data: data,
            type: "POST",
            success: function (result) {
                unoverlaybg();
                if (result.length == 1) {
                    location.reload();
                } else {
                    alert(result);
                }
                return false;
            }
        });
    } else {
        notificationError("Vui lÃ²ng nháº­p cÃ¡c trÆ°á»ng báº¯t buá»™c!");
        unoverlaybg();
    }
}

function changeAddress(_id) {
    $("#address_id_change").val(_id);
}

function changeAddressShip(_id) {
    overlaybg();
    $(".divinputcheck").removeClass("checked");
    // data.ship_member_id = $("#address_id_change").val();
    $(".divinputcheck_" + _id).addClass("checked");
    var data = new Object();
    data.ship_member_id = _id;
    var url = site_folder + "/index_ajax.php?module_name=check_out&action=changeAddressShip";
    $.ajax({
        url: url,
        data: data,
        type: "POST",
        success: function (result) {
            location.reload();
        }
    });
}

function savePayment(value, payment_method) {
    if (document.getElementById("radio_button_" + value).disabled == true) {
        if (value == 3) {
            notificationError("Sá»‘ tiá»n trong tÃ i khoáº£n vÃ­ khÃ´ng Ä‘á»§ Ä‘áº·t hÃ ng!");
        } else {
            notificationError("TÃ i khoáº£n vÃ­ Ä‘ang ná»£ AUTO365, Vui lÃ²ng liÃªn há»‡ quáº£n trá»‹ Ä‘á»ƒ Ä‘Æ°á»£c há»— trá»£!");
        }
        return;
    }

    $("form#changePaymentForm .my-checkbox").removeClass("checked");
    $(".btn_check_payment_default").removeClass("checked");
    $("#my_checkbox_" + value).addClass("checked");

    $("#optioncod_1").removeClass("active");
    if (value === 1) {
        $("#optioncod").addClass("active");
        $("#shipCarBus").removeClass("active");
    } else {
        $("#optioncod").removeClass("active");
        $("#shipCarBus").addClass("active");
    }
    var data = new Object();
    data.payment = value;
    data.payment_method = payment_method;
    var url = site_folder + "/index_ajax.php?module_name=check_out&action=savePayment";
    $.ajax({
        url: url,
        data: data,
        type: "POST",
        success: function (result) {
            if (result === '3') {
                document.getElementById("radio_button_3").checked = false;
                $("#my_checkbox_3").removeClass("checked");
                notificationError("Sá»‘ tiá»n trong tÃ i khoáº£n vÃ­ khÃ´ng Ä‘á»§ Ä‘áº·t hÃ ng!");
            } else if (result === '4') {
                document.getElementById("radio_button_3").checked = false;
                notificationError("TÃ i khoáº£n vÃ­ Ä‘ang ná»£ AUTO365, Vui lÃ²ng liÃªn há»‡ quáº£n trá»‹ Ä‘á»ƒ Ä‘Æ°á»£c há»— trá»£!");
            } else {
                if (value > 1) {
                    // location.reload();
                    window.location.href = site_folder + "/dat-hang";
                }
            }
            return false;
        }
    });

}


function savePaymentCod(value) {
    $("form#changePaymentForm #optioncod .my-checkbox").removeClass("checked");
    $(".check_thu_ho_css").removeClass("checked");
    $("#optioncod #my_checkbox_c_" + value).addClass("checked");
    if (value == 1) {
        $("#optioncod_1").addClass("active");
    } else {
        $("#optioncod_1").removeClass("active");
    }
    var data = new Object();
    data.thu_ho = value;
    var url = site_folder + "/index_ajax.php?module_name=check_out&action=savePaymentCOD";
    $.ajax({
        url: url,
        data: data,
        type: "POST",
        success: function (result) {
            // location.reload();
            window.location.href = site_folder + "/dat-hang";
            return false;
        }
    });
}

function saveInfoSend() {
    var data = new Object();
    data.send_info = $("#infoSend").val();
    data.codamount = $("#codamount").val();
    data.send_name = $("#send_name").val();
    if (data.codamount == "" || data.codamount == 'undefined') {
        notificationWarning("Vui lÃ²ng nháº­p sá»‘ tiá»n muá»‘n thu thÃªm.");
        return;
    }
    if (data.send_name == "" || data.send_name == 'undefined') {
        notificationWarning("Vui lÃ²ng nháº­p tÃªn ngÆ°á»i gá»­i hÃ ng.");
        return;
    }
    if (data.send_info == "" || data.send_info == 'undefined') {
        notificationWarning("Vui lÃ²ng nháº­p thÃ´ng tin ngÆ°á»i gá»­i hÃ ng.");
        return;
    }

    var url = site_folder + "/index_ajax.php?module_name=check_out&action=savePaymentCOD";
    $.ajax({
        url: url,
        data: data,
        type: "POST",
        success: function (result) {
            console.log(result);
            if (result === "8") {
                notificationWarning("ThÃ´ng tin ngÆ°á»i gá»­i vÃ  ngÆ°á»i nháº­n hÃ ng khÃ´ng Ä‘Æ°á»£c trÃ¹ng.");
                return;
            } else {
                // location.reload();
                window.location.href = site_folder + "/dat-hang";
            }
            // notificationSuccess("LÆ°u Ä‘á»‹a thÃ nh cÃ´ng!");

            return false;
        }
    });
}


function saveDelivery(value, _index) {
    overlaybg();
    $(".label_shipchagne_modal").removeClass("checked");
    var data = new Object();
    data.ship_id = value;
    data.ship_index = _index;
    var url = site_folder + "/index_ajax.php?module_name=check_out&action=saveDelivery";
    $.ajax({
        url: url,
        data: data,
        type: "POST",
        success: function (result) {
            $(".shipchagne_" + _index).addClass("checked");
            // location.reload();
            window.location.href = site_folder + "/dat-hang";
            return;
        }
    });
    unoverlaybg();
    return;
}


function changeValueTypeParent(_id, id_type, quantity) {

    $(".checkParent .product-variation").removeClass("checked");
    $(".checkParent .check_" + _id).addClass("checked");
    $(".checkSubType .product-variation").removeClass("checked");
    $("#countpro_whouse").html(quantity + " sáº£n pháº©m táº¡i kho");
    $("#countQuantity").val(quantity);
    $(".spLock").removeClass("bg_opacity_50");
    // getTypeS(id_type);
    ChangeConvert(_id);
}

function ChangeConvert(id_type) {
    $(".c_all_sublist").css("display", "none");
    $(".listSub_" + id_type).css("display", "block");
}


function changeValueType(_id, id_type, quantity, price, sku) {
    var data = new Object();
    data.quantity = $("#formProductItem input[name='quantity']").val();
    $(".checkSubType .product-variation").removeClass("checked");
    $(".checkSubType .check_sub" + _id).addClass("checked");
    document.getElementById("typesSub_" + _id).checked = true;
    $("#countpro_whouse").html(quantity + " sáº£n pháº©m táº¡i kho");
    $("#countQuantity").val(quantity);
    $("#pricePro").html(numberFormat(price) + "Ä‘");
    $("#sku_sp").html(sku);
}

function getTypeS(id_type) {
    var data = new Object();
    data.id = $("#product_id").val();
    data.type_c_id = id_type;
    var url = site_folder + "/index_ajax.php?module_name=product&action=getTypeS";
    $.ajax({
        url: url,
        data: data,
        type: "POST",
        success: function (result) {
            $("#SSubType").html(result);
            return false;
        }
    });
}

function loginPage() {
    var data = new Object();
    data.phone = $("form#loginForm #phone").val();
    data.pass = $("form#loginForm #pass").val();
    var url = site_folder + "/index_ajax.php?module_name=login&action=loginajax";
    $.ajax({
        url: url,
        data: data,
        type: "POST",
        success: function (result) {
            if (result.length == 1) {
                location.reload();
            } else {
                alert(result);
            }
            return false;
        }
    });
}

function hasWhiteSpace(s) {
    return s.indexOf(' ') >= 0;
}

function registerPage() {
    var username = $('input[name="register[username]"]').val();
    if (username == "") {
        notificationWarning("Vui lÃ²ng nháº­p TÃªn Ä‘Äƒng nháº­p!");
        return;
    }
    if (username.indexOf(" ") >= 0) {
        notificationWarning("TÃªn Ä‘Äƒng nháº­p viáº¿t liá»n, khÃ´ng dáº¥u.");
        return;
    }
    if ($('input[name="register[phone]"]').val() == "") {
        notificationWarning("Vui lÃ²ng nháº­p Sá»‘ Ä‘iá»‡n thoáº¡i!");
        return;
    }
    if ($('input[name="register[zalo_phone]"]').val() == "") {
        notificationWarning("Vui lÃ²ng nháº­p Sá»‘ Äiá»‡n thoáº¡i Zalo!");
        return;
    }
    if ($('input[name="register[zalo_name]"]').val() == "") {
        notificationWarning("Vui lÃ²ng nháº­p Sá»‘ tÃªn Zalo!");
        return;
    }
    if ($('input[name="register[password]"]').val() == "") {
        notificationWarning("Vui lÃ²ng nháº­p Sá»‘ Máº­t kháº©u!");
        return;
    }
    if ($('input[name="register[repassword]"]').val() == "") {
        notificationWarning("Vui lÃ²ng nháº­p Sá»‘ XÃ¡c nháº­n máº­t kháº©u!");
        return;
    }
    if ($('input[name="register[repassword]"]').val() != $('input[name="register[password]"]').val()) {
        notificationWarning("Máº­t kháº©u vÃ  Máº­t kháº©u xÃ¡c nháº­n khÃ´ng giá»‘ng nhau!");
        return;
    }


    var form = document.forms.namedItem("registerForm");
    var xmlhttp;
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    var data = new FormData(form);
    var url = site_folder + "/index_ajax.php?module_name=login&action=registerajax";
    xmlhttp.open("POST", url, true);
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            if (xmlhttp.responseText != "") {
                alert(xmlhttp.responseText);
            } else {
                location.reload();
            }
        }
    }
    xmlhttp.send(data);
}

function changeDefaultAddress(id) {
    var data = new Object();
    data.id = id;
    var url = site_folder + "/index_ajax.php?module_name=profile&action=changeAddressDefault";
    $.ajax({
        url: url,
        data: data,
        type: "POST",
        success: function (result) {
            location.reload();
            return false;
        }
    });
}

function removeAddress(id) {
    if (confirm("XÃ¡c nháº­n xÃ³a Ä‘á»‹a chá»‰?")) {
        window.location.href = site_folder + "/thong-tin-ca-nhan/dia-chi/" + id + "?ac=del";
    }
    return;
}

function thanhToanCart() {
    if ($("#required_upload").val() == "" || $("#required_upload").val() == "undefined") {
        notificationWarning("Vui lÃ²ng táº£i lÃªn hÃ¬nh áº£nh máº«u cho sáº£n pháº©m muá»‘n Ä‘áº·t hÃ ng.");
        return;
    }
    if ($("#quote_note").length > 0) {
        if ($("#quote_note").val() != "") {
            $("#btn_pendding").text("Äang xá»­ lÃ½...");
            $("#btn_pendding").css("pointer-events", "none");
            window.location.href = site_folder + "/dat-hang?from=cart";
        } else {
            notificationWarning("Vui lÃ²ng nháº­p mÃ´ táº£ vá» sáº£n pháº©m muá»‘n Ä‘áº·t hÃ ng.");
        }
    } else {
        $("#btn_pendding").text("Äang xá»­ lÃ½...");
        $("#btn_pendding").css("pointer-events", "none");
        window.location.href = site_folder + "/dat-hang?from=cart";
    }
}

function readURL(input) {
    var data = new FormData();
    data.append("avatar", input.files[0]);
    var xmlhttp;
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.open("POST", site_folder + "/index_ajax.php?module_name=profile&action=updateavatar", true);
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            location.reload();
        }
    }
    xmlhttp.send(data);
}


function showhidemodal(el) {
    $(".modal").modal("hide");
    $("#" + el).modal("show");
}

function showMenu() {
    $("#menuListLeft").addClass("active");
}

function loadingOpen() {
    $("#loader").removeClass("loader");
    $("#loader").removeClass("loader-fade");
}

function loadingClose() {
    $("#loader").addClass("loader");
    $("#loader").addClass("loader-fade");
}

function boxType(product_id) {
    var data = new Object();
    data.product_id = product_id;
    var url = site_folder + "/index_ajax.php?module_name=ajax&action=box_type";
    $.ajax({
        url: url,
        type: "POST",
        data: data,
        dataType: "html",
        cache: false,
        success: function (res) {
            if (res !== "") {
                $("#box_type_list").html(res);
            } else {
                return true;
            }
        }
    });
}

function showModalStore(code) {
    if (code !== '') {
        var data = new Object();
        data.code = code;
        var url = site_folder + "/index_ajax.php?module_name=contact&action=detail";
        $.ajax({
            url: url,
            type: "POST",
            data: data,
            success: function (result) {
                $("#detail_store").modal();
                console.log(result);
                $("#detail_store .modal-content").html(result);
            }
        })
    }
}

/*$(".hover_width_resize").hover(function(){
    // $(this).css("background-color", "yellow");
    // $(this).removeClass();
    $(this).css("transition", "1s all");
    $(this).css("width", "100%");
    // $(this).addClass("col-md-12");
}, function(){
    // $(this).removeClass("col-md-12");
    // $(this).addClass("col-md-6");
    // $(this).css("background-color", "pink");
    $(this).css("width", "50%");
});*/
function bigBox(x) {
    $(this).removeClass("col-md-12");
    $(this).addClass("col-md-12");
}

function normalBox(x) {
    x.style.height = "32px";
    x.style.width = "32px";
}

function saveCacheChangeCate(category_id) {
    var data = new Object();
    data.category_id = category_id;
    var url = site_folder + "/index_ajax.php?module_name=product&action=saveCacheChangeCate";
    $.ajax({
        url: url,
        type: "POST",
        data: data,
        success: function (result) {
            return;
        }
    })
}


// serviceHover = () => {
// let left = $(".product-home-main .w-product .left");
// let right = $(".product-home-main .w-product .right");
// if (left.length > 0 && right.length > 0) {
//     left.mouseenter(function () {
//         $(this).addClass("left-hover").removeClass("right-hover");
//         right.addClass("left-hover").removeClass("right-hover");
//
//     });
//
//     left.mouseleave(function (e) {
//         $(this).removeClass("left-hover");
//         right.removeClass("left-hover");
//     });
//
//     right.mouseenter(function () {
//         $(this).addClass("right-hover").removeClass("left-hover");
//         left.addClass("right-hover").removeClass("left-hover");
//     });
//
//     right.mouseleave(function (e) {
//         $(this).removeClass("right-hover");
//         left.removeClass("right-hover");
//     });
//
// }
// }


var myCore = {
    init: function () {
        this.Basic.init();
    },

    Basic: {

        init: function () {

            this.preloader();
            this.dotdotdot();
            this.menuHover();
            // this.menuClick();
            this.checkMobile();
            this.categorySlider();
            this.productImageZoom();
            this.showContentProd();
            this.productGalleryV1();
        },
        currentWidth: function () {
            return $(window).innerWidth();
        },

        preloader: function () {
            jQuery(window).on('load', function () {
                jQuery('#preloader').fadeOut('slow', function () {
                    jQuery(this).remove();
                });
            });
        },
        dotdotdot: function () {
            if ($('.threedot').length != 0) {
                $('.threedot').dotdotdot({
                    ellipsis: '...',
                    watch: true,
                    wrap: 'word',
                    after: "a.readmore"
                });
            }
        },

        menuHover: function () {
            $('.nav-menu .ul-main .li-main').hover(function () {
                $(this).find('.a-main').toggleClass('active');
            })
        },
        menuClick: function () {
            $('.menu-toogle').click(function () {

                $('.ul-main').addClass("show");


            });

            $('.close-menu').click(function () {
                $('.ul-main').removeClass("show");
            });

            // $('.nav-menu .ul-main .li-main .a-main').click(function (e) {
            //     e.preventDefault();
            //     var self = $(this);
            //     if ($(".nav-menu .ul-main").hasClass("menu-mobile")) {
            //         self.next().addClass("show");
            //
            //     } else {
            //         $(".sub-box").removeClass("show");
            //     }
            //
            // });
            $(".sub-menu-close").click(function (e) {
                e.preventDefault();
                $(".sub-box").removeClass("show");
            })
        },
        checkMobile: function () {
            if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) ||
                /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) {
                $("body").addClass('isMobile');
                $(".ul-main").addClass("menu-mobile");
            } else {
                $("body").removeClass('isMobile');
                $(".ul-main").removeClass("menu-mobile");
            }
        },
        categorySlider: function () {
            $('.banner-cate').not('.slick-initialized').slick({
                centerMode: true,
                centerPadding: '60px',
                slidesToShow: 1
            });
        },
        productImageZoom: function () {

            if ($(".isMobile").length <= 0) {


                var zoomWidth = $(".product-block .wrap .right").innerWidth();
                var zoomHeight = $(".product-block .wrap .right").innerHeight();

                $("#zoom_01").elevateZoom({
                    gallery: 'gallery_01',
                    cursor: 'pointer',
                    galleryActiveClass: 'active',
                    imageCrossfade: false,
                    borderSize: 1,
                    zoomWindowWidth: zoomWidth,
                    zoomWindowHeight: zoomHeight,
                    zoomWindowOffetx: 15,
                    zoomWindowOffety: -15
                });

                $("#zoom_01").bind("click", function (e) {
                    var ez = $('#zoom_01').data('elevateZoom');
                    $.fancybox(ez.getGalleryList());
                    return false;
                });

            } else {
                $("#gallery_01 a").click(function (e) {
                    e.preventDefault();
                    var imgLink = $(this).attr("data-image");

                    $("#zoom_01").attr("src", imgLink);
                });
            }
        },
        productGalleryV1: function () {
            var _productGallery = $('#imageGallery');
            if (_productGallery.length > 0) {
                _productGallery.lightSlider({
                    gallery: true,
                    item: 1,
                    loop: true,
                    thumbItem: 4,
                    slideMargin: 0,
                    enableDrag: false,
                    currentPagerPosition: 'left',
                    onSliderLoad: function (el) {
                        $("body").on("click", ".lslide.active .slide_img_play", function () {
                            el.lightGallery({
                                selector: '#imageGallery .lslide'
                            });
                            $("body .lslide.active").trigger("click");
                        })

                        if (_productGallery.hasClass("has-video")) {
                            if ($(".lslide.active").find("iframe").length == 0) {

                                var iframe = '<iframe width="100%"  src="' + $("#imageGallery").attr('data-iframe') + '"' +
                                    ' frameborder="0"  ' +
                                    'allowfullscreen></iframe>';

                                $(".lslide.active").addClass("contain-iframe").append(iframe);
                                $('.lslide img').removeClass("slide_img_play");
                            }
                            $("body").on("click", ".lslide.active .play_video", function () {
                                $('.lslide img').removeClass("slide_img_play");
                                if ($(".lslide.active").find("iframe").length == 0) {

                                    var iframe = '<iframe width="100%"  src="' + $("#imageGallery").attr('data-iframe') + '" ' +
                                        'frameborder="0"  ' +
                                        'allowfullscreen></iframe>';

                                    $(".lslide.active").addClass("contain-iframe").append(iframe);

                                }
                            })
                        } else {
                            el.lightGallery({
                                selector: '#imageGallery .lslide'
                            });
                        }

                    },
                    onAfterSlide: function () {
                        $('.lslide').removeClass("contain-iframe").find("iframe").remove();
                        $('.lslide img').addClass("slide_img_play");

                    }
                });
            }

        },
        showContentProd: function () {
            var self = $(".prod-information-block .prod-desc .content");
            var height = self.innerHeight();
            if (height >= 500) {
                self.addClass("isReadMore");
            }

            $(".prod-information-block .prod-desc .readmore-block a").click(function () {
                self.toggleClass("isExpand");
                if ($(".isExpand").length > 0) {
                    $(this).html("Thu Gá»n Ná»™i Dung");
                } else {
                    $(this).html("Xem ThÃªm Ná»™i Dung");
                }
            });

        }


    }
};


function openListAgency(code) {
    $("#agencyModal").modal('show');
    var data = new Object();
    data.code = code;
    var url = site_folder + "/index_ajax.php?module_name=agency&action=agency&code="+code;
    $.ajax({
        url: url,
        type: "POST",
        data: data,
        success: function (result) {
            $("#contentAgency").html(result);
        }
    })
}
