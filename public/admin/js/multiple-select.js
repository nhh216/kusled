function loadMultipleSelect (arrAttr, valueAttrsSelected = []) {
    var valueSelected = []
    valueSelected = $('#multi-select').val()
    showAttributes(arrAttr, valueSelected, valueAttrsSelected)

    $('#attributes').change(() => {
        valueSelected = $('#multi-select').val()
        showAttributes(arrAttr, valueSelected, valueAttrsSelected)
    })
}

function showAttributes(arrAttr, valueSelected, valueAttrsSelected = []) {
    $('#attributes').children().each(function() {
        var $currentElement = $(this);
        if ($currentElement.attr('id') !== 'row-select' && !valueSelected.includes($currentElement.attr('id'))) {
            $currentElement.remove();
        }
    })

    valueSelected.forEach(item => {
        var elItem = $('#' + item);
        var valueInput = valueAttrsSelected[item] || ''
        if (elItem.length === 0) {
            var html = '<div class="row" id="'+ item +'">\n' +
                '           <div class="col-md-12">\n' +
                '               <div class="form-group">\n' +
                '                   <label>'+ arrAttr[item] +' <code>*</code></label>\n' +
                '                   <input name="product_attributes['+ item +']" value="'+ valueInput +'" class="form-control rounded-0" maxlength="255" required>\n' +
                '               </div>\n' +
                '           </div>\n' +
                '       </div>';

            $("#attributes").append(html);
        }
    })
}
