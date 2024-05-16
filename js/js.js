$(window).on('load', function () {
    $("#status").delay(900).fadeOut(900); //delay --> 延遲幾秒才fadeOut
    $("#preloader").delay(900).fadeOut(900);
});

$(window).scroll(function(){
    var scrollTop=$(window).scrollTop();
    if(scrollTop>250){
        $('.toTop').css('display', 'block');
        
    }
})

$(function () {
    // for (let i = 1; i < 4; i++) {
    //     $('#list').addInputArea();
    // }
    $('#airlist').addInputArea();
});

$(function () {
    // for (let i = 1; i < 4; i++) {
    //     $('#list').addInputArea();
    // }
    $('#sealist').addInputArea();
});



$(document).ready(function () {
    // 至頂頁面、畫面跳轉
    $('.toTop').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({ 
            scrollTop: 0,
        }, 0, 'swing')
    });
    // $('#gosystem').on('click', function (e) {
    //     e.preventDefault();
    //     const anchor = $(this).attr('href');
    //     const linkScroll = $(anchor).offset().top;
    //     $('html,body').stop().animate({
    //         scrollTop: linkScroll - 20
    //     }, 0)
    // });

    // ---------------------------------------
    // 預約系統一次只折疊一個下拉選單
    // $('.collapsingle').click(function () {
    //     console.log($('.collapse'));
    //     $('.collapse').collapse('hide');
    // });

    // $('.collapsingle_2').click(function () {
    //     console.log($('.collapse'));
    //     $('.collapse').collapse('hide');
    // });

    // ---------------------------------------
    // 散貨增加筆數
    //  $(".add-more").click(function () {
    //      var html = $(".copy").html();
    //      $(".after-add-more").after(html);
    //  });
    // ---------------------------------------
    // 散貨減少筆數
    //  $("body").on("click", ".remove", function () {
    //      console.log($(this));
    //      $(this).parents(".cbm").remove();
    //  });
    // ---------------------------------------

    // 選擇海運or空運，radio點選時其他隱藏
    $('.portradio[type="radio"]').click(function () {
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".port").not(targetBox).hide();
        $(targetBox).show();
    });
    // 空運散貨radio
    $('.airloadradio[type="radio"]').click(function () {
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(targetBox).show();
    });
    // 海運散貨、整櫃radio
    $('.sealoadradio[type="radio"]').click(function () {
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".seaLoad").not(targetBox).hide();
        $(targetBox).show();
    });

    // $(".member_list").addClass("active");
    
});