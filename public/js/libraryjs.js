function numberFormat(x) {
    if (x !== "") {
        var parts = x.toString().split(",");
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        return parts.join(",");
    }
}

function notificationSuccess(message = "Cáº­p nháº­t thÃ nh cÃ´ng!") {
    $.notify({
        message: message
    }, {
        type: 'success',
        placement: {
            from: "bottom",
            align: "right"
        }
    });
}

function notificationWarning(message = "ThÃ´ng tin khÃ´ng chÃ­nh xÃ¡c!") {
    $.notify({
        message: message
    }, {
        type: 'warming',
        placement: {
            from: "bottom",
            align: "right"
        }
    });
}

function getRadioVal(form, name) {
    var val;
    var radios = form.elements[name];
    if (radios !== undefined && radios.length > 0) {
        for (var i = 0, len = radios.length; i < len; i++) {
            if (radios[i].checked) {
                val = radios[i].value;
                break;
            }
        }
        return val;
    }
}

function notificationError(message = "Cáº­p nháº­t Lá»—i!") {
    $.notify({
        message: message
    }, {
        type: 'danger',
        placement: {
            from: "bottom",
            align: "right"
        }
    });
}

function formatCurrency(input, blur) {
    var input_val = input.val();
    if (input_val === "") {
        return;
    }
    var original_len = input_val.length;
    var caret_pos = input.prop("selectionStart");
    if (input_val.indexOf(".") >= 0) {
        var decimal_pos = input_val.indexOf(".");
        var left_side = input_val.substring(0, decimal_pos);
        left_side = formatNumber(left_side);
        input_val = left_side;

    } else {
        input_val = formatNumber(input_val);
    }
    input.val(input_val);
    var updated_len = input_val.length;
    caret_pos = updated_len - original_len + caret_pos;
    input[0].setSelectionRange(caret_pos, caret_pos);
}

function getSelectedText(elementId) {
    var elt = document.getElementById(elementId);

    if (elt.selectedIndex == -1)
        return null;

    return elt.options[elt.selectedIndex].text;
}

function formatNumber(n) {
    // format number 1000000 to 1,234,567
    return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
}

function overlaybg() {
    $(function () {
        var docHeight = $(document).height();

        $("body").append("<div id='overlay_loading'></div>");

        $("#overlay_loading")
            .height(docHeight)
    });
}

function unoverlaybg() {
    $(function () {
        $("#overlay_loading").remove();
    });
}
