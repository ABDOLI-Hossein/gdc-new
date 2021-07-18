var RW_ConfigDefault = {
    host: 'https://s1.revenuewell.com',
    id: '',
    rv_page_size: 5,
    rv_iframe_hight: 1000
};

var load_jquery_callback = function () {
    (function ($) {
        $(document).ready(function () {
            if (typeof window.RW_Config != "undefined") $.extend(RW_ConfigDefault, window.RW_Config);
            window.RW_Config = RW_ConfigDefault;

            initRequestAppointmentWidgets();
            initReviewsWidgets();
        });

        function initRequestAppointmentWidgets() {
            var isInitializedString = "isinitialized";
            var appRequestElements = $("#RwRequestAppointment, #RwRequestApppointment, .rw-request-appointment");
            for (var i = 0; i < appRequestElements.length; i++) {
                var appRequest = appRequestElements.eq(i);
                if (!appRequest.data(isInitializedString) && appRequest.find("iframe").length == 0) {
                    appRequest.data(isInitializedString, true);
                    var idData = appRequest.data("secondid");
                    var config = getConfig(idData, false);
                    var configString = configToString(config);

                    $('<iframe frameborder=0 id="RW_Iframe_RequestAppointment_ehsan" name="RW_Iframe_RequestAppointment" width="410px" height="950px" src="' +
                        config.host + '/OldComponents/Widget/RequestAppointment?id=' + config.id + "&healthgrades=" + config.healthgrades + configString + '"/>').appendTo(appRequest);
                }
            }
        }

        function initReviewsWidgets() {
            var isInitializedString = "isinitialized";
            var $reviewsElements = $("#RwReview, .rw-review");
            for (var i = 0; i < $reviewsElements.length; i++) {
                var $review = $reviewsElements.eq(i);
                if (!$review.data(isInitializedString) && $review.find("iframe").length == 0) {
                    var idData = $review.data("secondid");
                    var config = getConfig(idData, true);
                    var configString = configToString(config);

                    $('<iframe frameborder=0 id="RW_Iframe_Review" name="RW_Iframe_Review" width="100%" height="' +
                        config.rv_iframe_hight + 'px" src="' +
                        config.host + '/Widget/Review?id=' + config.id + '&limit=' + config.rv_page_size + configString + '"/>').appendTo($review);
                }
            }
        }

        function configToString(config) {
            var data = "";
            $.each(config, function (i, n) {
                data = data + "&" + i + "=" + n.toString().replace("#", "~");
            });
            return data;
        }

        function getConfig(id, isReviewWidget) {
            if (id === undefined || typeof RW_Config_List === 'undefined' || RW_Config_List == null || !Array.isArray(RW_Config_List)) {
                return window.RW_Config;
            }

            var data = RW_Config_List.filter(function (element) {
                return element.id == id && (isReviewWidget ? (typeof element.rv_header_color !== 'undefined') : (typeof element.ra_header_color !== 'undefined'));
            })[0];

            return data === undefined ? window.RW_Config : data;
        }
    })(jQuery);
};


if (typeof jQuery != 'undefined') {
    load_jquery_callback();
    _addLoadEventRW(load_jquery_callback);
} else {
    var head = document.getElementsByTagName('head')[0];
    var script = document.createElement('script');
    script.type = 'text/javascript';
    var host = typeof window.RW_Config.host == 'undefined' ? window.RW_ConfigDefault.host : window.RW_Config.host;
    script.src = host + '/Scripts/jquery-1.9.1.js';

    //calling a function after the js is loaded (IE)
    var loadFunction = function () {
        if (this.readyState == 'complete' || this.readyState == 'loaded') {
            script.onload = script.onreadystatechange = null;
            load_jquery_callback();
        }
    };
    script.onreadystatechange = loadFunction;

    //calling a function after the js is loaded (Firefox)
    script.onload = load_jquery_callback;
    head.appendChild(script);
}

function _addLoadEventRW(_function) {
    var _onload = window.onload;
    if (typeof window.onload != 'function') {
        if (window.onload) {
            window.onload = _function;
        } else {
            var _addEventListener = window.addEventListener || document.addEventListener;
            var _attachEvent = window.attachEvent || document.attachEvent;
            if (_addEventListener) {
                _addEventListener('load', _function, true);
                return true;
            } else if (_attachEvent) {
                var _result = _attachEvent('onload', _function);
                return _result;
            } else {
                //todo: preloading fix for ie5.2 on mac os
                return false;
            }
        }
    } else {
        window.onload = function () {
            _onload();
            _function();
        }
    }
}





var RW_Config = {
    id: 'bbf744d0-9c18-47af-9fe0-2514fae80ede',
    host: 'https://s1.revenuewell.com',
    rv_header_color: '#000',
    rv_text_color: '#4c4c4c',
    rv_testimonials_color: '#910100',
    rv_page_size: 5,
    rv_iframe_hight: 1000
};

if(typeof RW_Config_List === 'undefined' || RW_Config_List == null || !Array.isArray(RW_Config_List))
{
    RW_Config_List = new Array();
}
RW_Config_List.push(RW_Config);





var RW_Config = {
    id: 'bbf744d0-9c18-47af-9fe0-2514fae80ede',
    healthgrades: 'false',
    host: 'https://s1.revenuewell.com',
    ra_header_color: '#000',
    ra_header_off: 0,
    ra_bold_text_color: '#5c5c5c',
    ra_text_color: '#5c5c5c',
    ra_font_family: 'Poppins-Medium',
    ra_bg: 'transparent'
};

if(typeof RW_Config_List === 'undefined' || RW_Config_List == null || !Array.isArray(RW_Config_List))
{
    RW_Config_List = new Array();
}
RW_Config_List.push(RW_Config);























if($("#menu-item-16,#menu-item-17,#menu-item-18").hasClass("current-menu-item")){
    $("#menu-item-16,#menu-item-17,#menu-item-18").removeClass("current-menu-item")
}else {

};



/*
$("#card").hover(function(){
    alert($(document).scrollTop() );
});
*/
$(".gotop").click(function() {

    $('html,body').animate({
            scrollTop: $("header").offset().top},
        'fast');
});


// var url = "http://gdcnew.wpengine.com/";
var url = window.location.origin + "/";
function hoverFunction(){

    var img = this.getElementsByClassName("img");
    var urlpath = url+"wordpress/wp-content/themes/gdc-main/images/";
    var hoverimg = img[0].dataset.imghover;
    var srctoset = urlpath + hoverimg;
    img[0].setAttribute("src",srctoset)
}

function nonhoverFunction() {

    var img = this.getElementsByClassName("img");
    var urlpath = url+"wordpress/wp-content/themes/gdc-main/images/";
    var hoverimg = img[0].dataset.imgnonhover;
    var srctoset = urlpath + hoverimg;
    img[0].setAttribute("src",srctoset)
}

var  imgdiv = document.querySelectorAll(".patient")
for (var i=0;i<imgdiv.length;i++){
    imgdiv[i].addEventListener("mouseover",hoverFunction,false)
    imgdiv[i].addEventListener("mouseout",nonhoverFunction,false)
}











$(window).on("scroll", function() {

    /*    if($(window).scrollTop() > 1350) {
            $(".right").addClass("animate__animated animate__lightSpeedInRight");
            $(".left").addClass("animate__animated animate__lightSpeedInLeft");
            $("#show-more").addClass("animate__animated animate__rotateIn");


        }
    */
    if($(window).scrollTop() > 2000) {
        /*        $(".zoom").addClass("animate__animated animate__zoomInUp animate__fast");*/
    }

    /*    if($(window).scrollTop() > 3700) {
            $(".down").addClass("animate__animated animate__backInUp");
        }
    */


});





// $("#top-menu li").hover(function () {
//     $(this).addClass("hvr-hang");
// })





$(document).ready(function(){
    $("#carousel1").owlCarousel();
});
$('#carousel1').owlCarousel({
    loop:true,
    nav:true,
    dots: false,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,

        },
        600:{
            items:1
        },
        1000:{
            items:3,
            nav:true,
        }
    }
});


$(document).ready(function(){
    $("#carousel2").owlCarousel();
});
$('#carousel2').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots: true,
    responsiveClass:true,
    responsive:{
        0:{
            items:2,
            margin: 5
        },
        600:{
            items:4,
            margin:20,
            nav:false,
            dot:true
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
    }
})



var btns = document.getElementsByClassName("read_more");
for(var i=0;i<btns.length;i++){
    btns[i].addEventListener( 'click' , changeClass);
}
function changeClass() {
    var content = this.previousSibling.previousSibling.childNodes;

    for (var i = 0; i < content.length; i++) {
        if(content[i].className!= undefined){
            if (content[i].className.includes("extra_content") ) {
                content = content[i];
                break;
            }
        }
    }
    var btn =this;
    content.classList.toggle('show');

    if (content.classList.contains("show")) {
        btn.innerHTML = "Show Less";
    } else {
        btn.innerHTML = "Show More";
    }
}

var c = document.querySelector("#carousel1");
if (c){
    window.onload = function () {
        if ($(window).width() > 900 ) {

            setInterval(function(){
                var owlCarouselActive = document.getElementsByClassName("owl-item active");
                var first = owlCarouselActive[0]; //get first item
                var last = owlCarouselActive[owlCarouselActive.length - 1]; //get last item
                var middle = owlCarouselActive[owlCarouselActive.length - 2];

                first.style.opacity = 0.2;
                last.style.opacity = 0.2;
                middle.style.opacity = 1;
            }, 1);


        }
    }
}
setInterval(function(){

    if($("header .navbar-collapse").hasClass("show")){
        $(".nav-box-shadow").addClass("collapse-radius");
        $(".navbar-light hr").addClass("m-3");
        $(".navbar-toggler img").attr("src","../wp-content/themes/gdc-main/images/collapseclose.svg");
    }else if($("header .navbar-collapse").hasClass("collapsing")){
        $(".nav-box-shadow").addClass("collapse-radius");
        $(".navbar-light hr").addClass("m-3");
        $(".navbar-toggler img").attr("src","../wp-content/themes/gdc-main/images/collapseclose.svg");
    }

    else{
        $(".nav-box-shadow").removeClass("collapse-radius")
        $(".navbar-light hr").removeClass("m-3");
        $(".navbar-light hr").addClass("m-0")
        $(".navbar-toggler img").attr("src","../wp-content/themes/gdc-main/images/collapseicon.svg");
    }

}, 1);

$(".serviceslist").click(function() {
    $('html,body').animate({
            scrollTop: $("#Our-services").offset().top - "100"},
        "fast");

});



$("#menu-item-10").click(function() {
    $('html,body').animate({
            scrollTop: $("#about-us").offset().top - "100"},
        800);

});







$("#menu-item-11").click(function() {
    $('html,body').animate({
            scrollTop: $("#office-information").offset().top - "100"},
        800);
});

if ($(window).width() > 900 ) {

    $("#menu-item-12").click(function() {
        $('html,body').animate({
                scrollTop: $("#patient").offset().top - "100"},
            800);
    });


}else{

    $("#menu-item-12").click(function() {
        $('html,body').animate({
                scrollTop: $("#patient").offset().top},
            800);
    });

}

window.onload = function(){


    $(".loaded").removeClass("d-none")


}




