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
