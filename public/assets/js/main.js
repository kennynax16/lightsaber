jQuery(function ($) {


    $("body").on("click", ".mobileMenuBtn", function () {
      // $(".Trener_Slider_main_item.openid").removeClass("openid");
      $('body').toggleClass("openidMenu");


    });

    $(window).on("load", function () {
        $(".preloader").fadeOut(2000); // Скрытие с анимацией за 500 мс
    });





    $('.marquee').marquee({
          duration: 40000,
          startVisible: true,
          duplicated: true
        });



        $(this).find(".SliderGameContainer1").slick({
          infinite: true,
          swipe: true,
          focusOnSelect:true,
          centerMode: true,
          slidesToShow: 3,
          slidesToScroll: 1,
          arrows: true,
          prevArrow: $(this).find(".SliderGameItemBtnPrev1"),
          nextArrow: $(this).find(".SliderGameItemBtnNext1"),
          dots: false,
          responsive: [
            {
              breakpoint: 800,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
        //   appendDots: $(this).find(".Two_Floors_Slider_dots"),
        });

        $(this).find(".SliderGameContainer2").slick({
          infinite: true,
          swipe: true,
          focusOnSelect:true,
          centerMode: true,
          slidesToShow: 3,
          slidesToScroll: 1,
          arrows: true,
          prevArrow: $(this).find(".SliderGameItemBtnPrev2"),
          nextArrow: $(this).find(".SliderGameItemBtnNext2"),
          dots: false,
          responsive: [
            {
              breakpoint: 800,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
        //   appendDots: $(this).find(".Two_Floors_Slider_dots"),
        });

        setTimeout(function() {
          $('body').addClass('uploadOk')
        }, 3000);

    $("body").on("click", ".mobile_btn_menu", function () {
      $(".mobile_btn_menu_block").toggleClass("active");
      $('body').toggleClass('activeMenuMobile')
    });

    // $("body").on("click", ".Trener_Slider_main_prev", function () {
    //   $(this).closest(".Trener_Slider_main_item").removeClass("openid");
    // });

    // // ОТЗЫВЫ
    // $("body").on("click", ".item_otziv_btn button", function () {
    //   idOtziv = '.otziv-' + $(this).attr('data-id');
    //   $(idOtziv).addClass('active');
    //   $('body').addClass('activPopupOtzivi');
    // });

    // $("body").on("click", ".Otzivi_popup_bg", function () {
    //   $('.Otzivi_popup_item').removeClass('active');
    //   $('body').removeClass('activPopupOtzivi');
    // });

    // $("body").on("click", ".Otzivi_popup_item_close", function () {
    //   $('.Otzivi_popup_item').removeClass('active');
    //   $('body').removeClass('activPopupOtzivi');
    // });



  });
