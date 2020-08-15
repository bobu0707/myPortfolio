// メニューバー固定
$(function(){
    $(window).scroll(function () {
        if ($(this).scrollTop() > 360) {
            $("#nav").addClass("fixed");
            $("#main").addClass("margin-top");
        } else {
            $("#nav").removeClass("fixed");
            $("#main").removeClass("margin-top");
        }
    });
});
// 左からスライド
$(function(){
    $(window).scroll(function () {
        $(".slide-left").each(function () {
            let elemPos = $(this).offset().top;
            let scroll = $(window).scrollTop();
            let windowHeight = $(window).height();
            if (scroll > elemPos - windowHeight + 100) {
                $(this).addClass("slide-left-on");
            }
        });
    });
});
// 右からスライド
$(function(){
    $(window).scroll(function () {
        $(".slide-right").each(function () {
            let elemPos = $(this).offset().top;
            let scroll = $(window).scrollTop();
            let windowHeight = $(window).height();
            if (scroll > elemPos - windowHeight + 150) {
                $(this).addClass("slide-right-on");
            }
        });
    });
});
// フェードイン
$(function(){
    $(window).scroll(function () {
        $(".fadeIn").each(function () {
            let elemPos = $(this).offset().top;
            let scroll = $(window).scrollTop();
            let windowHeight = $(window).height();
            if (scroll > elemPos - windowHeight + 150) {
                $(this).addClass("fadeIn-on");
            }
        });
    });
});
// 入力チェック
$(function(){
    $('#n_error,#m_error,#t_error').hide();
    $('#in_name').blur(function(){
        if($(this).val() == ""){
            $('#n_error').show();
        }else{
            $('#n_error').hide();
        }
    });
    $('#in_mail').blur(function(){
        if(!$(this).val().match(/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/)){
            $('#m_error').show();
        }else{
            $('#m_error').hide();
        }
    });
    $('#in_text').blur(function(){
        if($(this).val() == ""){
            $('#t_error').show();
        }else{
            $('#t_error').hide();
        }
    });
})
// 入力フォーム切り替え
$(function(){
    $('#confirm,#thxMessage').hide();
    $('#check').on('click',()=>{
        $('#contact-form').hide();
        $('#confirm').show();
        $('#out_name').text($('#in_name').val());
        $('#out_mail').text($('#in_mail').val());
        $('#out_text').text($('#in_text').val());
    });
    $('#submit').on('click',()=>{
        $('#confirm').hide();
        $('#thxMessage').show();
    });
})
