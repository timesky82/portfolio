$(document).ready(function() {
    // 브라우저확인
    function getBrowserType() {
        var _ua = navigator.userAgent;
        var rv = -1;
        //IE 11,10,9,8
        var trident = _ua.match(/Trident\/(\d.\d)/i);
        if (trident != null) {
            if (trident[1] == "7.0") return rv = "IE" + 11;
            if (trident[1] == "6.0") return rv = "IE" + 10;
            if (trident[1] == "5.0") return rv = "IE" + 9;
            if (trident[1] == "4.0") return rv = "IE" + 8;
        }
        //IE 7...
        if (navigator.appName == 'Microsoft Internet Explorer') return rv = "IE" + 7;
        /*
        var re = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");
        if(re.exec(_ua) != null) rv = parseFloat(RegExp.$1);
        if( rv == 7 ) return rv = "IE" + 7;
        */
        //other
        var agt = _ua.toLowerCase();
        if (agt.indexOf("chrome") != -1) return 'Chrome';
        if (agt.indexOf("opera") != -1) return 'Opera';
        if (agt.indexOf("staroffice") != -1) return 'Star Office';
        if (agt.indexOf("webtv") != -1) return 'WebTV';
        if (agt.indexOf("beonex") != -1) return 'Beonex';
        if (agt.indexOf("chimera") != -1) return 'Chimera';
        if (agt.indexOf("netpositive") != -1) return 'NetPositive';
        if (agt.indexOf("phoenix") != -1) return 'Phoenix';
        if (agt.indexOf("firefox") != -1) return 'Firefox';
        if (agt.indexOf("safari") != -1) return 'Safari';
        if (agt.indexOf("skipstone") != -1) return 'SkipStone';
        if (agt.indexOf("netscape") != -1) return 'Netscape';
        if (agt.indexOf("mozilla/5.0") != -1) return 'Mozilla';
    }
    $('html').addClass(getBrowserType());
    // Lazyload
    var myLazyLoad = new LazyLoad({
        elements_selector: ".lazyload",
        load_delay: 100
    });
    myLazyLoad.update();

    // interaction
    var wow = new WOW({
        boxClass: 'ani',
        animateClass: 'animated',
        offset: 0,
        mobile: true,
        live: true,
        callback: function(box) {},
        scrollContainer: null,
        resetAnimation: true,
    });
    wow.init();

    // smooth scroll
    $('.gnb_list_more a').click(function() {
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 300);
        return false;
    });

    // search
    $('.btn_search').click(function(event) {
        var search_point = $(this).parents('.wrap_search');
        search_point.toggleClass('on');
        $('#search').focus();
    });

    //gnb_m
    $('.btn_gnb_m, .gnb .dim').click(function(event) {
        $(this).parents('.gnb').toggleClass('on');
    });
    /*pop_up*/
    function pop_up_area() {
        document.getElementsByClassName('wrap_pop_area')[0].classList.add('on');
        document.getElementsByClassName('wrap')[0].classList.add('fix');
    }

    function pop_up_img(pop_img_data) {

        var val_img = pop_img_data[0];
        var val_tit = pop_img_data[1];
        var val_tit_sub = pop_img_data[2];
        var val_txt = pop_img_data[3];
        var _pop_area = document.getElementsByClassName('pop_area' && 'v01')[0];
        _pop_area.getElementsByTagName('img')[0].setAttribute('src', val_img);
        _pop_area.getElementsByClassName('tit')[0].innerHTML = val_tit;
        _pop_area.getElementsByClassName('sub_tit')[0].innerHTML = val_tit_sub;
        _pop_area.getElementsByClassName('txt')[0].innerHTML = val_txt;
        pop_up_area();


        $('.wrap_pop_area .pop_area.v01').show()
        $('.wrap_pop_area .pop_area.v01').animateCSS('zoomIn', {
            delay: 0,
            duration: 300,
            complete: function() {
                document.getElementsByClassName('btn_pop_cl')[0].focus();

            }
        });
    };



    function pop_cl() {
        stopVideo()
        // debugger
        document.getElementsByClassName('wrap')[0].classList.remove('fix');
        document.getElementsByClassName('ac')[0].focus();
        $('.wrap_pop_area').animateCSS('fadeOut', {
            delay: 10,
            duration: 300,
            complete: function() {
                document.getElementsByClassName('wrap_pop_area')[0].classList.remove('on');
                // debugger
                document.getElementsByClassName('ac')[0].classList.remove('ac');
                $('.wrap_pop_area .pop_area').hide()
            }
        });
    };
    // youtube
    var avi_img_input = document.querySelectorAll('.avi_bottom .pic_area');
    var avi_img = document.querySelectorAll('.avi_bottom .pic_area img');
    for (var i = 0; i < avi_img.length; i++) {
        var addr = avi_img_input[i].dataset.avi;
        var val_src = "https://img.youtube.com/vi/" + addr +
            "/maxresdefault.jpg"
        avi_img[i].src = val_src;

    }

    function playVideo() {
        var div = document.getElementById("video");
        var iframe = div.getElementsByTagName("iframe")[0].contentWindow;
        iframe.postMessage('{"event":"command","func":"playVideo","args":""}', '*');
    }

    function stopVideo() {
        var div = document.getElementById("video");
        var iframe = div.getElementsByTagName("iframe")[0].contentWindow;
        iframe.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
    }

    function pop_up_avi(val_avi) {
        $('.wrap_pop_area .pop_area.v02').show();
        $('#video_').css('opacity', '0');
        var val_avi = val_avi;
        var val_src = "https://www.youtube.com/embed/" + val_avi + "?enablejsapi=1&autoplay=1";
        document.getElementById('video_').src = val_src;

        pop_up_area();
        $('.wrap_pop_area .pop_area.v02').animateCSS('lightSpeedIn', {
            delay: 0,
            duration: 600,
            complete: function() {
                $('#video_').css('opacity', '1');
                document.getElementsByClassName('btn_pop_cl')[1].focus();
                playVideo();
            }
        });
    };
    $('.avi_bottom').click(function() {
        var this_j = this;
        // debugger
        var val_avi = this_j.getElementsByClassName('pic_area')[0].dataset.avi;
        this_j.classList.add('ac')
        pop_up_avi(val_avi);
        return false;
    });

    $('.btn_pop_cl, .pop_dim ').click(function(event) {

        pop_cl();

        return false;
    });

    var isEmpty = function(value) {
        if (
            value == "" || value == null || value == undefined || (
                value != null && typeof value == "object" && !Object.keys(value).length
            )
        ) { return "__" } else { return value }
    };
    $('.list_pop_up a').click(function() {
        var this_j = this;
        var val_img = isEmpty(this_j.getElementsByTagName('img')[0].getAttribute('src'));
        var val_tit = isEmpty(this_j.getElementsByClassName('tit')[0].textContent);
        var val_tit_sub = isEmpty(this_j.getElementsByClassName('tit_sub')[0].textContent);
        var val_txt = isEmpty(this_j.getElementsByClassName('txt')[0].textContent);
        var pop_img_data = new Array(val_img, val_tit, val_tit_sub, val_txt);
        this_j.classList.add('ac')
        pop_up_img(pop_img_data);
        return false;
    });



    //main_slide
    $('.main_slide').slick({

        dots: true,
        autoplay: true,
        infinite: true,
        vertical: true,
        speed: 300,
        focusOnSelect: true,
        cssEase: 'linear',
        verticalSwiping: true,
        lazyLoad: 'progressive',
        nextArrow: $('.wrap_main_slide .control .btn_next'),
        prevArrow: $('.wrap_main_slide .control .btn_pre'),

        responsive: [{
            breakpoint: 1079,
            settings: {
                dots: true,
                autoplay: false,
                infinite: true,
                vertical: false,
                verticalSwiping: false,
                speed: 300,
                cssEase: 'linear',
                nextArrow: $('.wrap_main_slide .control .btn_next'),
                prevArrow: $('.wrap_main_slide .control .btn_pre'),
            }

        }, ]
    });

    $('.main_slide').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
        $('.snb .nav').text("0" + (nextSlide + 1));

    });

    $('.wrap_main_slide .btn_play').click(function(event) {
        $(this).addClass('off');
        $(this).siblings().removeClass('off');
        $('.main_slide').slick('slickPlay');


    });

    $('.wrap_main_slide .btn_pause').click(function(event) {
        $(this).addClass('off');
        $(this).siblings().removeClass('off');
        $('.main_slide').slick('slickPause');
    });

    // wrap_tab_area
    $('.wrap_tab_area .tab_area a').click(function(event) {

        var _this = $(this);
        var eq_tab = _this.index();
        var next_tab = _this.parents('.wrap_list_box').find('.tab_content').eq(eq_tab);
        _this.addClass('on');
        _this.siblings().removeClass('on');

        next_tab.addClass('on');
        next_tab.siblings().removeClass('on');
        next_tab.focus();
        next_tab.animateCSS('fadeIn', {
            delay: 10,
            duration: 800,
            complete: function() {

            }
        });
        var wow = new WOW({
            boxClass: 'ani',
            animateClass: 'animated',
            offset: 10,
            mobile: true,
            live: true,
            callback: function(box) {},
            scrollContainer: null,
            resetAnimation: true,
        });
        wow.init();
        return false;
    });


    console.log("Timesky82@gmail.com");


});