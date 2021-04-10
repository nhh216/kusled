$( document ).ready(function() {
    updateListSrcImage();
});

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
        '                                            class="input-img"' +
        '                                            type="file"' +
        '                                            onchange="document.getElementById('+ idImg +').src = window.URL.createObjectURL(this.files[0])"' +
        '                                        >\n' +
        '                                    </div>';

    if (num < 5) {
        $(".show-image").append(html);
    }
    updateListSrcImage()
});

$("#delete-img").click(function() {
    var num = $('.image-wrapper').length;
    if (num > 1) {
        $('#image-wrapper-' + (num - 1)).remove();
    }
    updateListSrcImage()
});

function updateListSrcImage() {
    var num = $('.image-wrapper').length;
    var arrSrcImg = []
    for(let i = 0; i < num; i++) {
        var idImg = 'img-' + i
        var url = $('#' + idImg).attr('src');
        if (url) {
            arrSrcImg.push(url)
        }
    }
    arrSrcImg = arrSrcImg.join(',');
    $('#arrSrcImg').val(arrSrcImg)
}

$('.input-img').change(function() {
    updateListSrcImage()
})
