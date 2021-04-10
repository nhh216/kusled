function loadMultipleSelect (arrAttr) {
    var valueSelected = []
    valueSelected = $('#multi-select').val()
    showAttributes(arrAttr, valueSelected)

    $('#attributes').change(() => {
        valueSelected = $('#multi-select').val()
        showAttributes(arrAttr, valueSelected)
    })
}

function showAttributes(arrAttr, valueSelected) {
    $('#attributes').children().each(function() {
        var $currentElement = $(this);
        if ($currentElement.attr('id') !== 'row-select' && !valueSelected.includes($currentElement.attr('id'))) {
            $currentElement.remove();
        }
    })

    valueSelected.forEach(item => {
        var $elItem = $('#' + item);
        if ($elItem.length === 0) {
            var html = '<div class="row" id="'+ item +'">\n' +
                '           <div class="col-md-12">\n' +
                '               <div class="form-group">\n' +
                '                   <label>'+ arrAttr[item] +' <code>*</code></label>\n' +
                '                   <input name="product_attributes['+ item +']" class="form-control rounded-0" maxlength="255" required>\n' +
                '               </div>\n' +
                '           </div>\n' +
                '       </div>';

            $("#attributes").append(html);
        }
    })
}
