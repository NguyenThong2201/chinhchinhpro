var page = 1;
var token ='{{csrf_token()}}';
jQuery(document).ready(function ($) {
    $("#xem-them").click(function(){
        page++;
        $.ajax({
          type: "POST",
          url: "{{route('trang-chu')}}",
          data: { page: page, _token: token }
        }).done(function(data) {
          $("#noidung").append(data);
        });
    });
    var nav = $('.heder-bottom');
    var nha = $('.cd-header-buttons');
    var taa = $('.cd-search');
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            nav.addClass("addthong");
            nha.addClass("bnt-seach-thong");
            taa.addClass("cd-search-thong");
        } else {
            nav.removeClass("addthong");
            nha.removeClass("bnt-seach-thong");
            taa.removeClass("cd-search-thong");
        }
    });
});