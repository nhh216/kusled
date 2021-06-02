$(document).ready(function () {
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

        if ($("#content-detail").length != 0) {
            $("#content-detail img").css("height", "auto");
            $("#content-detail img").css("width", "100%");
        }
        if ($(".blog-listitem").length != 0) {
            $(".blog-listitem .blog-item .blog-item-inner .blog-content .article-title").dotdotdot({
                height: 60,
                callback: dotdotdotCallback
            });
        }
    });

    $(".active_change_home_service").click(function () {
        if ($('.active_change_home_service').hasClass('active')) {
            $('.active_change_home_service').removeClass('active');
            $('.active_change_home_product').addClass('active');
            $('.customer_home_main .right').css('display', "block");
            $('.customer_home_main .left').css('display', "none");
            if ($(".loading_ajax_content_service").length > 0) {
                loading_content_ajax_service_home();
            }
        }
        else {
            $('.active_change_home_service').addClass('active');
            $('.active_change_home_product').removeClass('active');
            $('.customer_home_main .right').css('display', "none");
            $('.customer_home_main .left').css('display', "block");
        }
    });
    $(".active_change_home_product").click(function () {
        if ($('.active_change_home_product').hasClass('active')) {
            $('.active_change_home_product').removeClass('active');
            $('.active_change_home_service').addClass('active');
            $('.customer_home_main .right').css('display', "none");
            $('.customer_home_main .left').css('display', "block");
        }
        else {
            $('.active_change_home_product').addClass('active');
            $('.active_change_home_service').removeClass('active');
            $('.customer_home_main .right').css('display', "block");
            $('.customer_home_main .left').css('display', "none");
        }
    });

    $(".bg_opacity_50").on("click", function () {
        notificationWarning("Cần chọn phân loại 1 trước khi chọn loại 2.")
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

        if (rc != "" && rc != "Nhập mã khuyến mãi...") {
            $.ajax({
                url: site_folder + '/index_ajax.php?module_name=cart&action=check_coupon_code',
                data: {cc: rc},
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (data) {
                    if (data.ok) {
                        location.reload();
                        $("#redeem_msg").html("Mã giảm giá hợp lệ, bạn được giảm " + data.value + " " + data.type);
                    } else {
                        $("#redeem_msg").html("<span class='text-danger'>Mã giảm giá không hợp lệ hoặc đã được sử dụng.</span>");
                    }
                    return true;
                }
            });
        } else {
            alert("Vui lòng nhập mã khuyến mãi.");
        }
        return false;
    });

    $(".remove_redeem").click(function () {
        var conf = window.confirm("Bạn muốn xóa mã giảm giá?");
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
        var conf = window.confirm("Bạn muốn xóa sản phẩm này?");
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
            $.post(site_folder + '/index_ajax.php?module_name=footer&action=newsletter', {"email": email},
                function (data) {
                    notificationSuccess("Đăng ký nhận bản tin thành công!");
                    return true;
                });
            // ga('send', {
            //     'hitType': 'event',
            //     'eventCategory': 'NEWLETTER',
            //     'eventAction': 'Add',
            //     'eventLabel': email,
            //     'eventValue': '1',
            //     'nonInteraction': true
            // });
        } else {
            notificationError("Vui lòng nhập địa chỉ email!")
        }
    });


    $(".btnDh").click(function (e) {
        // ga('send', {
        //     'hitType': 'event',
        //     'eventCategory': 'DONHANG',
        //     'eventAction': 'Submit',
        //     'eventLabel': 'Order',
        //     'eventValue': '1',
        //     'nonInteraction': true
        // });
        var data = new Object();
        // var payment = getRadioVal(document.getElementById('frmDatHang'), 'payment');
        // data.payment = payment;
        data.note = $("#note").val();

        if ($("#address_required").length > 0) {
            notificationError("Bạn Vui lòng thêm địa chỉ nhận hàng!");
            return false;
        }

        // if (typeof payment == "undefined") {
        //     notificationError("Bạn Vui lòng chọn 1 phương thức thanh toán!");
        //     return false;
        // } else {
        // $("#frmDatHang").submit();
        $(".btnDh").text("Đang xử lý...");
        $(".btnDh").css("pointer-events", "none");
        var url = site_folder + "/index_ajax.php?module_name=check_out&action=xac-nhan";
        $.ajax({
            url: url,
            data: data,
            type: "POST",
            success: function (result) {
                window.location.href = site_folder + "/don-hang/chi-tiet/" + result;
                $(".btnDh").text("Đặt hàng");
                $(".btnDh").css("pointer-events", "inherit");
            }
        });
        // }
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


    $(".btnContact").on("click", function (e) {
        // ga('send', {
        //     'hitType': 'event',
        //     'eventCategory': 'Contact Form',
        //     'eventAction': 'Submit',
        //     'eventLabel': 'Email',
        //     'eventValue': '1',
        //     'nonInteraction': true
        // });
    });

    $(".btnCheckout").on("click", function (e) {
        // ga('send', {
        //     'hitType': 'event',
        //     'eventCategory': 'DONHANG',
        //     'eventAction': 'Checkout',
        //     'eventLabel': 'Order',
        //     'eventValue': '1',
        //     'nonInteraction': true
        // });
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
            notificationWarning("Quý khách cần nhập số tiền yêu cầu rút!");
            return false;
        } else if (parseInt(data.number_withdraw) > parseInt(max_withdraw)) {
            notificationError("Quý khách chỉ được yêu cầu rút tối đa số dư hiện tại!");
            return false;
        } else {
            $("#btnWithraw").text("Đang xử lý...");
            document.getElementById("btnWithraw").disabled = true;
            var url = site_folder + "/index_ajax.php?module_name=wallet&action=ActionWithdraw";
            $.ajax({
                url: url,
                data: data,
                type: "POST",
                success: function (result) {
                    notificationSuccess("Gửi yêu cầu rút tiền thành công! Vui lòng chờ chúng tôi xác nhận chuyển tiền!");
                    $("#btnWithraw").text("Xác nhận yêu cầu");
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
    // $(".rate2").rate(options);
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
    // END DOCUMENT
});

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
            $(this).html("Thu gọn <i class='fa fa-caret-up'></i>");
            ellipsis_detail.trigger("destroy");
            ellipsis_detail.dotdotdot({
                height: null,
                callback: dotdotdotCallback
            });
        });
    } else {
        $(".button_ellipsis_detail").on('click', function () {
            $(this).html("Xem thêm <i class='fa fa-caret-down'></i>");
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
                notificationSuccess("Thêm thành công sản phẩm yêu thích!");
            } else {
                var c = window.confirm("Hệ thống yêu cầu đăng nhập để thích sản phẩm, bạn có đồng ý chuyển qua trang đăng nhập?");
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
                message: 'Vui lòng chọn loại sản phẩm'
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
            message: 'Số lượng hàng tại kho không đủ cung cấp.'
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
                    message: 'Thêm vào giỏ hàng thành công! Click xem giỏ hàng',
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
                message: 'Thêm hình ảnh thành công!'
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
                message: 'Xóa hình ảnh thành công!'
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
                    message: 'Cập nhật ghi chú thành công!'
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
                message: 'Vui lòng chọn loại sản phẩm'
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
            message: 'Số lượng hàng tại kho không đủ cung cấp.'
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
            txt += "Chọn 1 hoặc nhiều files.";
        } else {
            txt += "Trình duyệt không hỗ trợ!";
            txt += "<br>The path of the selected file: " + x.value; // If the browser does not support the files property, it will return the path of the selected file instead.
        }
    }
    $("#fileuploadHieuchuan").append(txt);
}

function appendboxComment(comment_id) {
    $("#boxCMT" + comment_id).html(" <div class=\"form-group\">\n" +
        "                    <input type=\"text\" name=\"fullname\" id=\"fullname" + comment_id + "\" class=\"form-control form-control-nopd\"\n" +
        "                           placeholder=\"Họ tên\" required/>\n" +
        "                </div>\n" +
        "                <div class=\"form-group\">\n" +
        "                    <textarea name=\"comment\" class=\"form-control form-control-nopd\" id=\"comment" + comment_id + "\" cols=\"30\" rows=\"3\"\n" +
        "                              placeholder=\"Mời bạn để lại bình luận (Vui lòng gõ tiếng việt có dấu)\"\n" +
        "                              required></textarea>\n" +
        "                </div>\n" +
        "                <div class=\"form-group text-right\">\n" +
        "                    <button type=\"button\" onclick='RepCommentPro(" + comment_id + ")'  class=\"btn btn-orange\">GỬI CÂU HỎI</button>\n" +
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
                $("#add_comment").html("<p class='alert alert-success'>Gửi câu hỏi thành công!</p>");
                $("#fullname").val("");
                $("#comment").val("");
                return true;
            });
    } else {
        alert("Vui lòng nhập nội dung đánh giá.");
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
                $("#boxCMT" + comment_id).html("<p class='alert alert-success'>Gửi câu hỏi thành công!</p>");
                return true;
            });
    } else {
        alert("Vui lòng nhập nội dung đánh giá.");
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
        notificationError("Vui lòng nhập các trường bắt buộc!");
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
            notificationError("Số tiền trong tài khoản ví không đủ đặt hàng!");
        } else {
            notificationError("Tài khoản ví đang nợ HNSHIP, Vui lòng liên hệ quản trị để được hỗ trợ!");
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
                notificationError("Số tiền trong tài khoản ví không đủ đặt hàng!");
            } else if (result === '4') {
                document.getElementById("radio_button_3").checked = false;
                notificationError("Tài khoản ví đang nợ HNSHIP, Vui lòng liên hệ quản trị để được hỗ trợ!");
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
        notificationWarning("Vui lòng nhập số tiền muốn thu thêm.");
        return;
    }
    if (data.send_name == "" || data.send_name == 'undefined') {
        notificationWarning("Vui lòng nhập tên người gửi hàng.");
        return;
    }
    if (data.send_info == "" || data.send_info == 'undefined') {
        notificationWarning("Vui lòng nhập thông tin người gửi hàng.");
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
                notificationWarning("Thông tin người gửi và người nhận hàng không được trùng.");
                return;
            } else {
                // location.reload();
                window.location.href = site_folder + "/dat-hang";
            }
            // notificationSuccess("Lưu địa thành công!");

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
    $("#countpro_whouse").html(quantity + " sản phẩm tại kho");
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
    $("#countpro_whouse").html(quantity + " sản phẩm tại kho");
    $("#countQuantity").val(quantity);
    $("#pricePro").html(numberFormat(price) + "đ");
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
        notificationWarning("Vui lòng nhập Tên đăng nhập!");
        return;
    }
    if (username.indexOf(" ") >= 0) {
        notificationWarning("Tên đăng nhập viết liền, không dấu.");
        return;
    }
    if ($('input[name="register[phone]"]').val() == "") {
        notificationWarning("Vui lòng nhập Số điện thoại!");
        return;
    }
    if ($('input[name="register[zalo_phone]"]').val() == "") {
        notificationWarning("Vui lòng nhập Số Điện thoại Zalo!");
        return;
    }
    if ($('input[name="register[zalo_name]"]').val() == "") {
        notificationWarning("Vui lòng nhập Số tên Zalo!");
        return;
    }
    if ($('input[name="register[password]"]').val() == "") {
        notificationWarning("Vui lòng nhập Số Mật khẩu!");
        return;
    }
    if ($('input[name="register[repassword]"]').val() == "") {
        notificationWarning("Vui lòng nhập Số Xác nhận mật khẩu!");
        return;
    }
    if ($('input[name="register[repassword]"]').val() != $('input[name="register[password]"]').val()) {
        notificationWarning("Mật khẩu và Mật khẩu xác nhận không giống nhau!");
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
    if (confirm("Xác nhận xóa địa chỉ?")) {
        window.location.href = site_folder + "/thong-tin-ca-nhan/dia-chi/" + id + "?ac=del";
    }
    return;
}

function thanhToanCart() {
    if ($("#required_upload").val() == "" || $("#required_upload").val() == "undefined") {
        notificationWarning("Vui lòng tải lên hình ảnh mẫu cho sản phẩm muốn đặt hàng.");
        return;
    }
    if ($("#quote_note").length > 0) {
        if ($("#quote_note").val() != "") {
            $("#btn_pendding").text("Đang xử lý...");
            $("#btn_pendding").css("pointer-events", "none");
            window.location.href = site_folder + "/dat-hang?from=cart";
        } else {
            notificationWarning("Vui lòng nhập mô tả về sản phẩm muốn đặt hàng.");
        }
    } else {
        $("#btn_pendding").text("Đang xử lý...");
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

function showcollapse() {
    $('.collapse').collapse()

}

function Clickshowhide(el) {
    $("#" + el).on("click");
    $(".menufixed_mobile").css("display", "block");
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
                $("#detail_store .modal-content").html(result);
            }
        })
    }
}

$(function () {
    if ($('.viewmore_static_content').length != 0) {

        var height = $('.viewmore_static_content').data("height");
        if (height > 0) {
            $(".viewmore_static_content").css("height", height);
            $(".viewmore_static_content").css("overflow", "hidden");

            $(this).on('click', 'a.readmore', function () {
                $(".viewmore_static_content").css("height", "100%");
                $(".viewmore_static_content").css("transision", "0.3s");
                $(".readmore").css("display", "none");
                $(".ovlarticle").css("display", "none");
            });
        }
    }

    $("div.readmore").on('click', function () {
        $(".viewmore_content_more").css("height", "100%");
        $(".viewmore_content_more").css("transision", "0.3s");
        $(".readmore").css("display", "none");
        $(".ovlarticle").css("display", "none");
    });

});

function loading_content_ajax_service_home() {
    $.ajax({
        url: site_folder + '/index_ajax.php?module_name=about_home&action=ajax_home',
        dataType: 'html',
        success: function (res) {
            $(".customer_home_main .left .list").html(res);
            $(".active_change_home_service").removeClass("loading_ajax_content_service");
            return true;
        }
    });
}
