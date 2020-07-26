function header() {
    $.ajax({
        url: "include/header.html", // 読み込むHTMLファイル
        cache: false,
        success: function (html) {
            document.write(html);
        }
    });
}