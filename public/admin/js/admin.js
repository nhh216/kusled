function confirmDelete() {
    return confirm("Bạn có muốn xóa không ?")
}

$("#add-img").click(function() {
    var num = $('.image-wrapper').length;
    const idImg = "'img-" + num + "'";
    var html = '                             <div class="image-wrapper" id="image-wrapper-'+ num +'">' +
        '                                        <img id="img-'+ num +'" class="img-preview" alt="image" />' +
        '                                        <input' +
        '                                            name="images[]"' +
        '                                            type="file"' +
        '                                            onchange="document.getElementById('+ idImg +').src = window.URL.createObjectURL(this.files[0])"' +
        '                                        >\n' +
        '                                    </div>';

    if (num < 5) {
        $(".show-image").append(html);
    }
});

$("#delete-img").click(function() {
    var num = $('.image-wrapper').length;
    console.log(num)
    if (num > 1) {
        $('#image-wrapper-' + (num - 1)).remove();
    }
});

$("#add-product-attribute").click(function () {
    const num = $('.attribute-wrapper').length;
    const baseInput = "myInput-" + num;
    const htmlTemplate = `<div class="row">
                            <div class="col-md-5 ">
                                <div class="form-group">
                                    <label>Tên thuộc tính sản phẩm<code>*</code></label>
                                    <div class="autocomplete" style="width:300px;">
                                        <input id="${baseInput}" type="text" name="myCountry" placeholder="Country">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Thuộc tính sản phẩm <code>*</code></label>
                                    <input name="name" type="text" class="form-control rounded-0"
                                           required>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="form-group">
                                    <label>Xóa</label>
                                    <a class="btn btn-danger btn-circle"
                                       id="delete-product-attribute"
                                       onclick="removeProductAttribute('product-attribute-0')"
                                       title="Xóa thuộc tính">
                                        <i class="white-text fas fa-minus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
`

    $("#row-product-attribute").append(htmlTemplate);
});

function removeProductAttribute(className) {
    $("#"+className).remove();
}
