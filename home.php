<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
} else {
   $user_id = '';
};

include 'components/add_cart.php';
include './convert_currency.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Trang chủ</title>
   <link rel="shortcut icon" href="./imgs/icon.png" type="image/x-icon">

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   <link rel="canonical" data-id="abc" href="https://www.thegioididong.com/laptop" />
   <link href="/favicon_TGDD.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="/favicon_TGDD.ico" rel="apple-touch-icon" />
    <link href="/favicon_TGDD.ico" rel="apple-touch-icon-precomposed" />
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
  <style>
  
.owl-carousel{
    display:none;
    width:100%;
    -webkit-tap-highlight-color:transparent;
    position:relative;z-index:1 }

.owl-carousel .owl-stage{position:relative;
         -ms-touch-action:pan-Y;
         touch-action:manipulation;
         -moz-backface-visibility:hidden }

.owl-carousel .owl-stage:after{content:".";
     display:block;
     clear:both;
     visibility:hidden;
     line-height:0;
     height:0 }

.owl-carousel .owl-stage-outer{position:relative;
         overflow:hidden;
         -webkit-transform:translate3d(0,0,0)}

.owl-carousel .owl-wrapper,.owl-carousel .owl-item{
         -webkit-backface-visibility:hidden;
         -moz-backface-visibility:hidden;
         -ms-backface-visibility:hidden;
         -webkit-transform:translate3d(0,0,0);
         -moz-transform:translate3d(0,0,0);
         -ms-transform:translate3d(0,0,0)}

.owl-carousel .owl-item{position:relative;
         min-height:1px;
         float:left;
         -webkit-backface-visibility:hidden;
         -webkit-tap-highlight-color:transparent;
         -webkit-touch-callout:none}
.owl-carousel .owl-item img{display:block;
         width:100%}
.owl-carousel .owl-nav.disabled,.owl-carousel .owl-dots.disabled{display:none}
.owl-carousel .owl-nav .owl-prev,.owl-carousel .owl-nav .owl-next,.owl-carousel .owl-dot{cursor:pointer;
         -webkit-user-select:none;
         -khtml-user-select:none;
         -moz-user-select:none;
         -ms-user-select:none;
         user-select:none}
.owl-carousel .owl-nav button.owl-prev,.owl-carousel .owl-nav button.owl-next,.owl-carousel button.owl-dot{background:none;
         color:inherit;
         border:none;
         padding:0 !important;
         font:inherit}
.owl-carousel.owl-loaded{display:block}
.owl-carousel.owl-loading{opacity:0;
         display:block}
.owl-carousel.owl-hidden{opacity:0}
.owl-carousel.owl-refresh .owl-item{visibility:hidden}
.owl-carousel.owl-drag .owl-item{-ms-touch-action:pan-y;
         touch-action:pan-y;
         -webkit-user-select:none;
         -moz-user-select:none;
         -ms-user-select:none;
         user-select:none}
.owl-carousel.owl-grab{cursor:move;
         cursor:grab}
.owl-carousel.owl-rtl{direction:rtl}
.owl-carousel.owl-rtl .owl-item{float:right}
.no-js .owl-carousel{display:block}
.owl-carousel .animated{animation-duration:1000ms;
         animation-fill-mode:both}
.owl-carousel .owl-animated-in{z-index:0}
.owl-carousel .owl-animated-out{z-index:1}
.owl-carousel .fadeOut{animation-name:fadeOut}

@keyframes fadeOut{
    0%
    {opacity:1 }
    100%{opacity:0}
}

 .owl-height{transition:height 500ms ease-in-out}
 .owl-carousel .owl-item .owl-lazy{opacity:0;
         transition:opacity 400ms ease}
 .owl-carousel .owl-item .owl-lazy[src^=""],.owl-carousel .owl-item .owl-lazy:not([src]){max-height:0}
 .owl-carousel .owl-item img.owl-lazy{transform-style:preserve-3d}
 .owl-carousel .owl-video-wrapper{position:relative;
         height:100%;
         background:#000}
 .owl-carousel .owl-video-play-icon{position:absolute;
         height:80px;
         width:80px;
         left:50%;
         top:50%;
         margin-left:-40px;
         margin-top:-40px;
         background:url("../../lib/owlCarousel/assets/owl.video.play.png") no-repeat;
      cursor:pointer;
      z-index:1;
      -webkit-backface-visibility:hidden;
      transition:transform 100ms ease}
 .owl-carousel .owl-video-play-icon:hover{-ms-transform:scale(1.3,1.3);
         transform:scale(1.3,1.3)}
 .owl-carousel .owl-video-playing .owl-video-tn,.owl-carousel .owl-video-playing .owl-video-play-icon{display:none}
 .owl-carousel .owl-video-tn{opacity:0;
         height:100%;
         background-position:center center;
         background-repeat:no-repeat;
         background-size:contain;
         transition:opacity 400ms ease}
 .owl-carousel .owl-video-frame{position:relative;
         z-index:1;
         height:100%;
         width:100%}
 .owl-theme .owl-nav{margin-top:10px;
         text-align:center;
         -webkit-tap-highlight-color:transparent}
 .owl-theme .owl-nav [class*='owl-']{color:#fff;
         font-size:14px;
         margin:5px;
         padding:4px 7px;
         background:#d6d6d6;
         display:inline-block;
         cursor:pointer;
         border-radius:3px}
 .owl-theme .owl-nav [class*='owl-']:hover{background:#869791;
         color:#fff;
         text-decoration:none}
 .owl-theme .owl-nav .disabled{opacity:.5;
         cursor:default}
 .owl-theme .owl-nav.disabled+.owl-dots{margin-bottom:10px;
         background:#fff}
 .owl-theme .owl-dots{text-align:center;
         -webkit-tap-highlight-color:transparent}
 .owl-theme .owl-dots .owl-dot{
         display:inline-block;
         zoom:1;
         display:inline}
 .owl-theme .owl-dots .owl-dot span{width:10px;
         height:10px;
         margin:5px 7px;
         background:#d6d6d6;
         display:block;
         -webkit-backface-visibility:visible;
         transition:opacity 200ms ease;
         border-radius:30px}
 .owl-theme .owl-dots .owl-dot.active span,.owl-theme .owl-dots .owl-dot:hover span{background:#869791}
 .owl-theme .owl-nav{margin-top:10px;
         text-align:center;
         -webkit-tap-highlight-color:transparent}
 .owl-theme .owl-nav [class*='owl-']{color:#fff;
         font-size:14px;
         margin:5px;
         padding:4px 7px;
         background:#d6d6d6;
         display:inline-block;
         cursor:pointer;
         border-radius:3px}
 .owl-theme .owl-nav [class*='owl-']:hover{background:#869791;
         color:#fff;
         text-decoration:none}
 .owl-theme .owl-nav .disabled{opacity:.5;
         cursor:default}
 .owl-theme .owl-nav.disabled+.owl-dots{margin-top:10px}
 .owl-theme .owl-dots{text-align:center;
         -webkit-tap-highlight-color:transparent}
 .owl-theme .owl-dots .owl-dot{display:inline-block;
         zoom:1;
     }
 .owl-theme .owl-dots .owl-dot span{width:10px;
         height:10px;
         margin:5px 7px;
         background:#d6d6d6;
         display:block;
         -webkit-backface-visibility:visible;
         transition:opacity 200ms ease;
         border-radius:30px}
 .owl-theme .owl-dots .owl-dot.active span,.owl-theme .owl-dots .owl-dot:hover span{background:#869791}
 .owl-customDots.owl-theme .owl-nav.disabled+.owl-dots{position:absolute;
         bottom:3px;
         left:0;
         right:0}
 .owl-customDots.owl-theme .owl-dots .owl-dot span{height:2px;
         border-radius:0;
         opacity:.5;
         background:#fff;
         margin:0 2px}
 .owl-customDots.owl-theme .owl-dots .owl-dot.active span,.owl-customDots.owl-theme .owl-dots .owl-dot:hover span{opacity:1}
 #colorbox,#cboxOverlay,#cboxWrapper{position:absolute;
         top:0;
         left:0;
         z-index:99999;
         overflow:hidden;
         -webkit-transform:translate3d(0,0,0)}
 #cboxWrapper{max-width:none}
 #cboxOverlay{position:fixed;
         width:100%;
         height:100%}
 #cboxMiddleLeft,#cboxBottomLeft{clear:left}
 #cboxContent{position:relative}
 #cboxLoadedContent{overflow:auto;
         -webkit-overflow-scrolling:touch}
 #cboxTitle{margin:0}
 #cboxLoadingOverlay,#cboxLoadingGraphic{position:absolute;
         top:0;
         left:0;
         width:100%;
         height:100%}
 #cboxPrevious,#cboxNext,#cboxClose,#cboxSlideshow{cursor:pointer}
 .cboxPhoto{float:left;
         margin:auto;
         border:0;
         display:block;
         max-width:none;
         -ms-interpolation-mode:bicubic}
 .cboxIframe{width:100%;
         height:100%;
         display:block;
         border:0;
         padding:0;
         margin:0}
 #colorbox,#cboxContent,#cboxLoadedContent{box-sizing:content-box;
         -moz-box-sizing:content-box;
         -webkit-box-sizing:content-box}
 #cboxOverlay{background:#000;
         opacity:.9;
         filter:alpha(opacity=90)}
 #colorbox{outline:0}
 #cboxContent{overflow:visible;
         background:#fff}
 .cboxIframe{background:#fff}
 #cboxError{padding:50px;
         border:1px solid #ccc}
 #cboxLoadedContent{background:#fff}
 #cboxLoadingGraphic{background:url(../images/colorbox/loading.gif) no-repeat center center}
 #cboxLoadingOverlay{background:#fff}
 #cboxTitle{position:absolute;
         top:-22px;
         left:0;
         color:#000}
 #cboxCurrent{position:absolute;
         top:-22px;
         right:205px;
         text-indent:-9999px}
 #cboxPrevious,#cboxNext,#cboxSlideshow,#cboxClose{border:0;
         padding:0;
         margin:0;
         overflow:visible;
         text-indent:-9999px;
         width:20px;
         height:20px;
         position:absolute;
         top:-20px;
         background:url(../images/colorbox/controls.png) no-repeat 0 0}
 #cboxPrevious:active,#cboxNext:active,#cboxSlideshow:active,#cboxClose:active{outline:0}
 #cboxPrevious{background-position:0 0;
         right:44px}
 #cboxPrevious:hover{background-position:0 -25px}
 #cboxNext{background-position:-25px 0;
         right:22px}
 #cboxNext:hover{background-position:-25px -25px}
 #cboxClose{background-position:-50px 0;
         right:0}
 #cboxClose:hover{background-position:-50px -25px}
 .cboxSlideshow_on #cboxPrevious,.cboxSlideshow_off #cboxPrevious{right:66px}
 .cboxSlideshow_on #cboxSlideshow{background-position:-75px -25px;
         right:44px}
 .cboxSlideshow_on #cboxSlideshow:hover{background-position:-100px -25px}
 .cboxSlideshow_off #cboxSlideshow{background-position:-100px 0;
         right:44px}
 .cboxSlideshow_off #cboxSlideshow:hover{background-position:-75px -25px}
 .cls{position:absolute;
         right:10px;
         top:11px;
         width:20px;
         height:20px;
         cursor:pointer;
         z-index:999}
 .cls:before{content:"×";
      font-size:32px;
      color:#fff;
      line-height:20px;
      text-align:center;
      width:100%;
      height:100%;
      font-family:Tahoma;
      display:block}
 #popupbox{width:800px;
         position:relative;
         background-color:#fff}
 #popupbox *{box-sizing:inherit}
 #popupbox>b{text-align:center;
         font-size:20px;
         padding:15px 0 12px 0;
         display:block;
         background-color:#333;
         margin-bottom:15px;
         color:#fff}
 #popupbox>label{padding:15px 0;
         display:block;
         text-align:center}
 #popupbox.login{width:500px}
 #popupbox.login>div{padding:0 15px;
         text-align:center}
 #popupbox.login>div>*{display:block}
 #popupbox.login>div>span{margin-bottom:10px;
         line-height:1.4}
 #popupbox.login>div>button{display:inline-block;
         vertical-align:top}
 #popupbox.verify{width:500px;
         text-align:center}
 #popupbox.verify>p{padding:0 10px;
         text-align:center;
         line-height:1.4}
 #popupbox.verify>div.info{padding:10px 15px;
         background-color:#f1f1f1;
         text-align:center;
         margin:10px 0}
 #popupbox.verify>div.info>*{display:inline-block;
         vertical-align:middle}
 #popupbox.verify>div.info>img{width:50px;
         height:50px;
         border-radius:50%;
         margin-right:7px}
 #popupbox.verify>div.info>span{text-align:left;
         line-height:1.4}
 #popupbox.verify>form{padding:0 10px;
         text-align:center}
 #popupbox.verify>form>*{display:block}
 #popupbox.verify>form>b{text-align:center;
         font-weight:normal;
         font-size:16px}
 #popupbox.verify>form>input{height:30px;
         line-height:30px;
         border:1px solid #ccc;
         width:68%;
         padding:0 2%;
         border-radius:4px;
         margin:5px auto}
 #popupbox.verify>form>button{display:inline-block}
 #popupbox.verify>form>a{padding-top:10px;
         color:#0521ff}
 #popupbox.verify>form>p{padding:0 10px;
         line-height:1.5}
 #popupbox.user-list>form{text-align:center}
 #popupbox.user-list>form>*{display:inline-block;
         vertical-align:middle}
 #popupbox.user-list>form>span{text-align:right;
         width:180px}
 #popupbox.user-list>form>span>b{display:block;
         font-size:16px}
 #popupbox.user-list>form>div>*{display:inline-block;
         vertical-align:middle}
 #popupbox.user-list>form>div.ul-key{margin:0 10px;
         position:relative}
 #popupbox.user-list>form>div.ul-key>input{width:200px;
         height:30px;
         line-height:30px;
         border:1px solid #ccc;
         border-radius:4px;
         padding:0 30px 0 10px;
         display:block}
 #popupbox.user-list>form>div.ul-key>button{position:absolute;
         width:16px;
         height:16px;
         background:transparent url(/ContentMwg/images/campaigns/icon/btn-search.png) no-repeat center top;
         right:9px;
         top:8px;
         border:none;
         cursor:pointer}
 #popupbox.user-list>div{padding:0 10px;
         position:relative;
         max-height:295px;
         overflow:hidden;
         margin:15px 0;
         overflow-y:auto}
 #popupbox.user-list>div>table{width:100%}
 #popupbox.user-list>div>table th{padding:7px 10px;
         background-color:#f1f1f1;
         font-size:13px;
         text-align:left}
 #popupbox.user-list>div>table th.tc{text-align:center}
 #popupbox.user-list>div>table td{padding:10px;
         border-bottom:1px solid #ccc}
 #popupbox.user-list>div>table td>a{color:#0091fb}
 #popupbox.user-list>div>table td>a>b{font-weight:normal}
 #popupbox.user-list>div>table td.check>b{color:#63bb02;
         background:transparent url(../images/general/iconcheckout@2x.png) no-repeat left center;
         background-size:260px 50px;
         background-position:-165px -25px;
         display:inline-block;
         padding-left:20px;
         height:16px;
         line-height:16px;
         font-weight:normal;
         font-size:13px}
 #popupbox.user-list>div>table td.tc{text-align:center}
 #popupbox.user-list>a.showmore{width:150px;
         display:block;
         margin:0 auto 15px auto;
         background-color:#333;
         color:#fff;
         text-align:center;
         height:30px;
         line-height:32px;
         font-size:13px}
 #popupbox.user-list>div>p{padding:15px 0 35px 0;
         font-size:17px;
         text-align:center}
 #popupbox.history{width:500px}
 #popupbox.history .his-profile{margin:-5px 0 10px 0}
 #popupbox.history .his-profile>*{display:inline-block;
         vertical-align:middle}
 #popupbox.history .his-profile>img{width:50px;
         height:50px;
         border:1px solid #ccc;
         margin-right:5px;
         border-radius:50%}
 #popupbox.history .his-profile>span>*{display:block}
 #popupbox.history .his-profile>span>a{color:#09f;
         font-size:16px}
 #popupbox.history .his-profile>span>a>i{font-size:13px;
         font-style:normal}
 #popupbox.history .his-profile>span>span{padding-top:3px}
 #popupbox .content{position:relative;
         overflow:hidden;
         padding:5px 15px;
         max-height:350px}
 #popupbox .content.scrollbar{overflow-y:auto}
 #popupbox .content>*{font-size:15px;
         line-height:1.5 !important;
         margin-bottom:10px}
 #popupbox .content a{color:#09f}
 .croll{overflow:hidden;
         overflow-y:scroll !important;
         -webkit-overflow-scrolling:touch;
         -ms-scroll-chaining:chained}
 @media screen and (max-width:640px){#popupbox{width:460px !important}
 #popupbox.user-list>form>*{display:block;
         margin-bottom:5px}
 #popupbox.user-list>form>span{text-align:center;
         width:auto}
 #popupbox.user-list>form>span>b{display:inline-block;
         margin-right:5px}
 #popupbox.user-list>form>div.ul-key{width:262px;
         margin:0 auto 5px auto}
 #popupbox.user-list>form>div.ul-key>input{width:220px}
 #popupbox.user-list>div>table th:first-child,#popupbox.user-list>div>table td:first-child{text-align:left}
 #popupbox.user-list>div>table th:last-child{width:110px}
 #popupbox.user-list>div{padding:0 5px}
}
 @media screen and (max-width:480px){#popupbox>b{font-size:16px;
         font-weight:normal}
}
 @media screen and (max-width:414px){#popupbox{width:394px !important}
}
 @media screen and (max-width:384px){#popupbox{width:364px !important}
}
 @media screen and (max-width:375px){#popupbox{width:355px !important}
}
 @media screen and (max-width:360px){#popupbox{width:340px !important}
}
 @media screen and (max-width:320px){#popupbox{width:300px !important}
}
 .stKCp{max-width:1200px}
 .promote{background-color:#ed1164;
         margin-bottom:30px;
         padding:10px}
 .promote-top{display:flex;
         justify-content:space-between;
         position:relative;
         padding-left:30px}
 .promote__title{align-items:center;
         display:flex;
         justify-content:center}
 .promote__title p{color:#fff;
         font-size:12px;
         margin-left:10px}
 .promote__title p span{color:#fbe77e;
         font-size:15px;
         font-weight:bold}
 .promote__title p em{font-style:normal}
 .promote-main{display:flex;
         margin-top:15px}
 .promote__form{background-color:#fefcec;
         border-radius:8px;
         padding:15px 10px;
         width:190px}
 .promote__banner{column-gap:8px;
         display:grid;
         grid-auto-rows:minmax(min-content,max-content);
         grid-template-columns:repeat(5,minmax(0,1fr));
         padding-left:10px;
         width:calc(100% - 190px)}
 .promote__banner img{border-radius:8px;
         display:block;
         max-width:100%;
         width:100%}
 .promote .form-noti{color:#ed1164;
         font-size:12px;
         font-weight:bold;
         line-height:18px}
 .couponform .item-input{margin-top:10px}
 .couponform .item-input input{border:1px solid #d6d6d6;
         border-radius:8px;
         height:38px;
         padding:10px;
         width:100%}
 .couponform .item-input input:focus{border-color:#ed1164}
 .couponform button{background-color:#bdbdbd;
         border-radius:8px;
         border:unset;
         color:#fff;
         margin-top:10px;
         padding:10px;
         width:100%;
         position:relative}
 .couponform button.hasvalue{background-color:#ed1164}
 .form-note{color:#555;
         font-size:11px;
         line-height:17px;
         margin-top:15px}
 .promote .required{color:#f00;
         font-size:11px;
         margin:10px 0 0}
 .promote__more{color:#fff;
         font-size:12px;
         line-height:15px}
 .promote__more span{border:2px solid #fff;
         border-radius:50%;
         height:24px;
         display:inline-block;
         position:relative;
         width:24px}
 .promote__more span::before,.promote__more span::after{content:'';
      position:absolute}
 .promote__more span::before{background-color:#fff;
         height:2px;
         left:50%;
         top:50%;
         transform:translate(-50%,-50%);
         width:10px}
 .promote__more span::after{border-top:2px solid #fff;
         border-right:2px solid #fff;
         border-radius:2px;
         height:6px;
         right:5px;
         top:calc(50% - 3.5px);
         transform:rotate(45deg);
         width:6px}
 .promote__more p{display:inline-block;
         margin-right:5px}
 .promote-animation{height:10px;
         left:8px;
         position:absolute;
         top:10px;
         width:10px}
 .promote-animation::before{content:"";
        position:relative;
        display:block;
        width:300%;
        height:300%;
        box-sizing:border-box;
        margin-left:-100%;
        margin-top:-100%;
        border-radius:45px;
        background-color:#fbeda3;
        -webkit-animation:pulse-ring 1.25s cubic-bezier(.215,.61,.355,1) infinite;
        animation:pulse-ring 1.25s cubic-bezier(.215,.61,.355,1) infinite}
 .promote-animation::after{content:"";
        position:absolute;
        left:0;
        top:0;
        display:block;
        width:100%;
        height:100%;
        background-color:#fbe77e;
        border-radius:15px;
        box-shadow:0 0 8px rgba(0,0,0,.3);
        -webkit-animation:pulse-dot 1.25s cubic-bezier(.455,.03,.515,.955) -.4s infinite;
        animation:pulse-dot 1.25s cubic-bezier(.455,.03,.515,.955) -.4s infinite}
 .promote-done{margin-top:10px;
         text-align:center}
 .promote-done img{max-width:44px}
 .promote-done b{color:#ed1164;
         display:block;
         font-weight:bold;
         margin-top:10px}
 .promote-done p{color:#333;
         margin-top:10px;
         position:relative;
         padding-left:15px;
         text-align:left;
         font-size:13px}
 .promote-done p::before{background-color:#333;
         border-radius:50%;
         content:'';
        height:4px;
        left:2px;
        position:absolute;
        top:6px;
        width:4px}
 .stage-twoKids{background-color:#ed1164;
         display:flex;
         justify-content:center;
         align-items:center;
         position:absolute;
         top:0;
         bottom:0;
         left:0;
         right:0;
         margin:0 auto;
         border-radius:4px;
         display:none}
 .loadK{display:block;
         width:20px;
         height:20px;
         border:5px solid #fff;
         border-top:5px solid transparent;
         -webkit-animation:load-animate infinite linear 1s;
         animation:load-animate infinite linear 1s;
         border-radius:100%}
 .showLding{display:flex}
 @keyframes pulse-ring{
        0%{
        transform:scale(.33)}
          80%,100%
        {opacity:0}
}
 @keyframes pulse-dot
        {0%{transform:scale(.8)}
        50%{transform:scale(1)}
        100%{transform:scale(.8)}
}
 .hide{display:none}
 *{box-sizing:border-box}
 body.not-found{background-color:#fff}
 .owl-carousel.listproduct .item{
        width:auto}
 .owl-carousel.listproduct .item:first-child{
        border:none}
 .owl-carousel.listproduct .owl-wrapper{
        display:flex !important}
 .owl-carousel.listproduct .owl-item{
        display:flex}
 .owl-carousel.listproduct .item{
        width:100%}
 .owl-carousel.listproduct .owl-item:first-child{
        border-left:1px solid #f1f1f1}
 .owl-carousel.listproduct .owl-item{
        border-bottom:1px solid #f1f1f1;
        border-top:1px solid #f1f1f1;
        border-right:1px solid #f1f1f1}
 .owl-carousel .owl-buttons div{
        background:rgba(255,255,255,.9) !important;
        height:60px;
        width:30px;
        position:absolute;
        top:50%;
        transform:translateY(-50%);
        z-index:2}
 .owl-carousel .owl-buttons div::before{border-top:3px solid #666;
         border-right:3px solid #666;
         content:'';
      height:22px;
      position:absolute;
      top:18px;
      width:22px}
 .owl-carousel .owl-prev{box-shadow:6px 0 4px rgba(0,0,0,.05),4px 0 4px rgba(0,0,0,.09);
         border-radius:0 4px 4px 0;
         left:0}
 .owl-carousel .owl-next{box-shadow:-6px 0 4px rgba(0,0,0,.05),-4px 0 4px rgba(0,0,0,.09);
         border-radius:4px 0 0 4px;
         right:0}
 .owl-carousel .owl-prev::before{left:10px;
         transform:rotate(-135deg)}
 .owl-carousel .owl-next::before{transform:rotate(45deg);
         right:8px}
 *{margin:0;
         padding:0}
 img{border:0}
 a{text-decoration:none;
         transition:.2s;
         color:#288ad6}
 ul,ol{list-style:none}
 .clr{clear:both}
 .clearfix{display:block}
 .clearfix:after{content:"";
      display:block;
      clear:both}
 body,input,button,option,textarea,label,select,legend,h1,h2,h3,h4,h5,h6,h1 a,h2 a,h3 a,h4 a,h5 a,h6 a{font:14px/18px Arial,Helvetica,sans-serif;
         color:#333;
         outline:none}
 body{min-width:1024px}
 p{-webkit-margin-before:0;
         -webkit-margin-after:0;
         -webkit-margin-start:0;
         -webkit-margin-end:0;
         text-rendering:geometricPrecision}
 input[type=text],input[type=tel],textarea{-webkit-appearance:none}
 [class^="iconfeed-"],[class*="iconfeed-"]{background-image:url(//cdn.tgdd.vn/mwgcart/mwgcore/ContentMwg/images/icon_global.webp);
         background-repeat:no-repeat;
         display:inline-block;
         width:75px;
         height:108px;
         vertical-align:middle;
         background-size:100px 145px}
 .iconfeed-dmx{background-position:-2px -57px;
         width:53px;
         height:53px}
 .iconfeed-tgdd{background-position:0 -2px;
         width:53px;
         height:53px}
 .iconfeed-radio{background-position:-57px -32px;
         width:19px;
         height:19px}
 .iconfeed-radio.active{background-position:-57px -57px;
         width:19px;
         height:19px}
 [class^="iconratingnew-"],[class*="iconratingnew-"]{background-image:url(//cdn.tgdd.vn/mwgcart/mwgcore/ContentMwg/images/icon-comment.webp);
         background-repeat:no-repeat;
         display:inline-block;
         height:30px;
         width:30px;
         line-height:30px;
         vertical-align:middle;
         background-size:152px 58px}
 .iconratingnew-redstar{background-position:-72px 0;
         width:20px;
         height:19px}
 .iconratingnew-redstar--big{background-position:-124px -30px;
         width:28px;
         height:27px}
 .iconratingnew-circlestar{background-position:-100px 0;
         width:16px;
         height:16px}
 .iconratingnew-circlestar--big{background-position:-5px -32px;
         width:18px;
         height:18px}
 .iconratingnew-star--big{background-position:-125px -1px;
         width:27px;
         height:27px}
 .iconratingnew-star--big.active{background-position:-1px -1px;
         width:27px;
         height:27px}
 .iconratingnew-star--medium{background-position:-38px 0;
         width:23px;
         height:23px}
 .iconratingnew-star--medium.active{background-position:-38px -27px;
         width:23px;
         height:23px}
 .iconratingnew-star--small{background-position:-72px -32px;
         width:16px;
         height:16px}
 .iconratingnew-star--small.active{background-position:-93px -32px;
         width:16px;
         height:16px}
 [class^="iconlogo-"],[class*="iconlogo-"]{background-repeat:no-repeat;
         display:inline-block;
         height:24px;
         width:80px;
         line-height:30px;
         vertical-align:middle;
         background-size:250px 200px}
 [class^="iconlogo-"].visible,[class*="iconlogo-"].visible{background-image:url(//cdn.tgdd.vn/mwgcart/mwgcore/ContentMwg/images/DMX/Global/Desktop/Logo-webmoi.webp)}
 .iconlogo-fashion{background-position:-85px -29px}
 .iconlogo-ji{background-position:-170px -58px}
 .iconlogo-bachhoaxanh{background-position:-170px 0}
 .iconlogo-cycle{background-position:-85px -58px}
 .iconlogo-thegioididong{background-position:0 0}
 .iconlogo-dienmayxanh{background-position:-85px 0}
 .iconlogo-kids{background-position:-85px -120px}
 .iconlogo-topzone{background-position:0 -58px}
 .iconlogo-sport{background-position:0 -29px}
 .iconlogo-tantam{background-position:-170px -90px}
 .iconlogo-ankhang{background-position:-85px -90px}
 .iconlogo-4kfarm{background-position:0 -90px}
 .iconlogo-vieclam{background-position:0 -120px}
 section{width:100%;
         max-width:1200px;
         margin:auto}
 #gb-top-page{bottom:15px;
         position:fixed;
         right:15px;
         display:none;
         background:rgba(0,0,0,.6);
         color:#fff;
         font-size:18px;
         -ms-border-radius:50%;
         border-radius:50%;
         width:30px;
         height:30px;
         line-height:29px;
         text-align:center;
         cursor:pointer;
         z-index:99}
 .over-flow{overflow:hidden !important}
 .relative{position:relative !important}
 .hide{display:none !important}
 .disabled{pointer-events:none !important}
 .preloader.preall{position:fixed}
 #dldingtext{background:rgba(0,0,0,.9);
         border-radius:5px 5px 0 0;
         bottom:0;
         color:#fff;
         display:none;
         padding:10px 15px;
         position:fixed;
         right:0;
         z-index:99999}
 .locationbox__overlay{position:fixed;
         top:0;
         left:0;
         right:0;
         bottom:0;
         z-index:12;
         background:rgba(0,0,0,.75);
         display:none;
         margin:auto}
 .locationbox{background:#fff;
         position:fixed;
         z-index:13;
         max-width:476px;
         align-items:center;
         margin:auto;
         display:none;
         width:100%;
         top:50%;
         transform:translateY(-50%);
         left:0;
         right:0;
         border-radius:8px}
 .locationbox__item{display:inline-block;
         color:#fff;
         text-overflow:ellipsis;
         white-space:nowrap;
         overflow:hidden;
         width:calc(100% - 45px)}
 .locationbox__item span{text-transform:capitalize}
 .locationbox__item.locationbox__item--right{width:100%;
         border-bottom:1px solid #e0e0e0;
         padding:17px 10px;
         position:relative;
         text-align:center;
         color:#333}
 .locationbox__item.locationbox__item--right p{text-align:center;
         font-weight:bold}
 .locationbox__item.locationbox__item--right>a:not(.cls-location){position:absolute;
         top:10px;
         right:10px;
         background-color:#fff;
         border:1px solid #e0e0e0;
         border-radius:4px;
         color:#333;
         cursor:pointer;
         line-height:21px;
         padding:7px;
         text-align:right;
         width:67px}
 .locationbox__item.locationbox__item--right>a:not(.cls-location):before,.locationbox__item.locationbox__item--right>a:not(.cls-location):after{background-color:#333;
         content:'';
      left:13px;
      height:14px;
      position:absolute;
      top:10px;
      width:1px}
 .locationbox__item.locationbox__item--right>a:not(.cls-location):before{transform:rotate(45deg)}
 .locationbox__item.locationbox__item--right>a:not(.cls-location):after{transform:rotate(-45deg)}
 .locationbox__popup.new-popup{position:relative;
         top:0;
         width:100%}
 .locationbox__popup .locationbox__popup--cnt{position:relative;
         overflow:visible;
         background-color:#fff;
         padding:15px 45px;
         line-height:25px;
         border-radius:4px}
 .locationbox__popup .locationbox__popup--cnt.locationbox__popup--suggestion{padding:10px 5px;
         max-width:330px;
         margin:0 auto;
         position:absolute;
         left:-150%;
         right:0;
         top:-30px}
 .locationbox__popup .locationbox__popup--cnt.locationbox__popup--suggestion:before,.locationbox__popup .locationbox__popup--cnt.locationbox__popup--suggestion:after{content:'';
      width:0;
      height:0;
      border-style:solid;
      border-width:0 8px 9px 8px;
      position:absolute;
      top:-8px;
      border-color:transparent transparent #4a90e2 transparent;
      left:46%}
 .locationbox__popup .locationbox__popup--cnt.locationbox__popup--suggestion>div p{padding-left:0}
 .locationbox__popup .locationbox__popup--cnt.locationbox__popup--suggestion .btn-block{display:block;
         overflow:hidden;
         line-height:normal;
         margin:6px auto 2px;
         text-align:center}
 .locationbox__popup .locationbox__popup--cnt.locationbox__popup--suggestion .btn-block .btn-location{background:#f97e0f;
         border-radius:4px;
         padding:10px;
         color:#fff;
         display:inline-block;
         width:112px;
         text-align:center}
 .locationbox__popup .locationbox__popup--cnt.locationbox__popup--suggestion .btn-block .btn-location.gray{background:#999}
 .locationbox__popup .accept{position:relative;
         display:block;
         padding:12px 0 7px;
         text-align:center}
 .locationbox__popup .accept .btnConfirm{display:inline-block;
         overflow:hidden;
         padding:13px 10px;
         border-radius:4px;
         font-size:14px;
         width:90%;
         line-height:normal;
         text-transform:uppercase;
         color:#fff;
         text-align:center;
         background:#fd6e1d;
         background:-webkit-gradient(linear,0% 0,0% 100%,from(#fd6e1d),to(#f59000));
         background:-webkit-linear-gradient(top,#f59000,#fd6e1d);
         background:-moz-linear-gradient(top,#f59000,#fd6e1d);
         background:-ms-linear-gradient(top,#f59000,#fd6e1d);
         background:-o-linear-gradient(top,#f59000,#fd6e1d)}
 .locationbox__popup .accept .btnConfirm.disabled{background:#ddd;
         color:#333}
 .locationbox__showfull{display:block;
         color:#000;
         padding-bottom:10px}
 .locationbox__btnchangeLC{color:#4b90e0;
         margin:5px 0;
         padding:5px 0;
         display:block}
 #lc_detail-dis strong,#lc_detail-ward strong{text-transform:capitalize}
 .locationbox__popup_notify{top:-40px;
         z-index:9;
         max-width:500px;
         margin:auto;
         position:relative;
         display:none}
 .locationbox__popup_notify .locationbox__popup--cnt.locationbox__popup--suggestion{top:-1px;
         background-color:#f1f1f1;
         padding-right:25px;
         padding-left:10px;
         box-shadow:inset 0 0 1px #333}
 .locationbox__popup_notify .locationbox__popup--cnt.locationbox__popup--suggestion:before,.locationbox__popup_notify .locationbox__popup--cnt.locationbox__popup--suggestion:after{border-color:transparent transparent #f1f1f1 transparent !important}
 .locationbox__popup_notify .close-notify{position:absolute;
         right:5px;
         top:5px;
         width:18px;
         height:18px;
         cursor:pointer;
         z-index:2;
         background:#666;
         border-radius:50%;
         opacity:.7;
         line-height:18px}
 .locationbox__popup_notify .close-notify:before{content:"×";
      font-size:15px;
      color:#fff;
      text-align:center;
      width:18px;
      display:block}
 .form-group h3{color:#000;
         font-weight:600;
         padding:0 0 5px;
         font-size:14px}
 .form-group .boxprov{display:block;
         width:100%;
         margin-bottom:10px}
 .form-group .boxprov>input{display:block;
         padding:7px 0;
         border:1px solid #d9d9d9;
         border-radius:4px;
         text-indent:10px;
         width:calc(100% - 2px);
         height:45px}
 .form-group .boxprov__listTT{background:#fff;
         border:1px solid #ccc;
         border-radius:4px;
         display:block;
         position:relative;
         margin:0;
         flex:1}
 .form-group .boxprov__listTT span{color:#000;
         display:block;
         padding:10px;
         cursor:pointer}
 .form-group .boxprov__listTT span:after{content:"";
      width:0;
      right:0;
      border-top:6px solid #999;
      border-left:6px solid transparent;
      border-right:6px solid transparent;
      display:inline-block;
      vertical-align:middle;
      margin:8px 5px 0 0;
      float:right}
 .form-group .boxprov__listTT span.disabled{pointer-events:none;
         color:#999}
 .form-group .boxprov__listTT>div{display:none;
         position:absolute;
         background:#fff;
         padding:0 0 5px;
         left:0;
         right:0;
         top:45px;
         border-radius:4px;
         border:1px solid #ccc;
         z-index:9;
         margin:0 -1px}
 .form-group .boxprov__listTT>div:before,.form-group .boxprov__listTT>div:after{content:'';
      width:0;
      height:0;
      border-style:solid;
      border-width:0 10px 8px;
      border-color:transparent transparent #6b6b6b transparent;
      position:absolute;
      top:-7px;
      left:5vh}
 .form-group .boxprov__listTT>div:after{border-color:transparent transparent #fff transparent}
 .form-group .boxprov__listTT>div .scroll-box{overflow-x:hidden;
         max-height:220px}
 .form-group .boxprov__listTT .province-box{position:absolute;
         background:#fff;
         padding:0 0 5px;
         left:0;
         right:0;
         top:45px;
         overflow-x:hidden;
         overflow-y:auto;
         max-height:220px;
         border-radius:4px;
         border:1px solid #ccc;
         z-index:9}
 .form-group .boxprov__listTT .boxprov__listTT--bordertop{position:sticky;
         top:0;
         left:0;
         right:0;
         height:5px;
         background-color:#fff}
 .form-group .boxprov__listTT .scroll-box .search-container{position:sticky;
         top:5px;
         left:0;
         right:0}
 .form-group .boxprov__listTT .scroll-box input{display:block;
         padding:7px 20px;
         border:1px solid #d9d9d9;
         border-radius:3px;
         text-indent:10px;
         width:calc(100% - 15px);
         margin:0 10px}
 .form-group .boxprov__listTT .scroll-box .btn-search-location{top:0}
 .form-group .boxprov__listTT .scroll-box>ul{column-count:2;
         column-fill:balance;
         overflow:hidden;
         display:block;
         column-gap:0}
 .form-group .boxprov__listTT .scroll-box>ul li{display:inline-block;
         width:100%;
         flex:1 0 50%}
 .form-group .boxprov__listTT .scroll-box>ul li a{text-overflow:ellipsis;
         padding:10px 10px 0;
         font-size:14px;
         color:#288ad6;
         overflow:hidden;
         line-height:normal;
         display:-webkit-box;
         -webkit-box-orient:vertical;
         -webkit-line-clamp:2}
 .form-group .boxprov__listTT .scroll-box>ul li a.active{font-weight:bold}
 .boxprov__listTT--scroll .warning-text{display:none;
         padding:10px;
         background:rgba(45,156,219,.1);
         border-radius:4px;
         font-size:10px;
         border-left:2.35px solid #2d9cdb;
         margin:10px;
         line-height:15px}
 #search-result{position:absolute;
         top:33px;
         z-index:11;
         width:400px;
         left:0;
         display:none}
 #search-result .suggest_search{background:#fff;
         border:1px solid #eee;
         top:-24px;
         z-index:100000;
         left:2px;
         right:2px;
         border-radius:6px;
         box-shadow:0 1px 8px rgba(0,0,0,.3)}
 #search-result .suggest_search li{display:block;
         overflow:hidden;
         padding:10px;
         border-bottom:1px solid #eee}
 #search-result .suggest_search li.keyword-history{color:#333;
         transition:.3s;
         line-height:20px;
         padding:4px 8px;
         background-color:#f1f3f9;
         border-radius:14px;
         margin-left:8px;
         margin-top:6px;
         display:inline-block}
 #search-result .suggest_search li.keyword-history a{color:#333}
 #search-result .suggest_search li.keyword-history a:hover{color:#288ad6}
 #search-result .suggest_search li.ttitle{position:relative}
 #search-result .suggest_search li.ttitle .btnClosePop{width:20px;
         height:20px;
         border-radius:50%;
         border:1px solid #c2c2c2;
         position:absolute;
         right:5px;
         top:0;
         bottom:0;
         z-index:10;
         color:#c2c2c2;
         line-height:19px;
         text-align:center;
         font-size:18px;
         margin:auto;
         float:unset;
         padding:unset}
 #search-result .suggest_search li a{color:#3b7adb;
         font-size:12px;
         margin:0 5px 0;
         display:block}
 #search-result .suggest_search li .viewed{background:#f5f5f5;
         font-size:13px;
         color:#666;
         font-weight:400;
         padding:10px;
         margin:-15px -10px}
 #search-result .suggest_search li.product_suggest a .item-img{float:left;
         width:60px;
         height:auto;
         margin:0 6px 0 0}
 #search-result .suggest_search li.product_suggest a .item-img img{width:100%}
 #search-result .suggest_search li.product_suggest a .item-info{float:left;
         width:calc(100% - 66px)}
 #search-result .suggest_search li.product_suggest a .item-info .item-txt-online{line-height:25px}
 #search-result .suggest_search li.product_suggest a h3{display:-webkit-box;
         -webkit-box-orient:vertical;
         -webkit-line-clamp:2;
         color:#333;
         font-size:14px;
         overflow:hidden}
 #search-result .suggest_search li.product_suggest a .price{font-size:14px;
         color:#e83a45;
         float:none;
         font-weight:bold;
         display:inline-block;
         vertical-align:middle}
 #search-result .suggest_search li.product_suggest a .price.twoprice{display:block;
         font-weight:normal;
         font-size:13px;
         padding-top:3px;
         color:#222}
 #search-result .suggest_search li.product_suggest .b_flex{display:flex;
         gap:10px}
 #search-result .suggest_search li.product_suggest .b_flex strong.multiprice{font-size:12px;
         font-style:normal;
         font-weight:700;
         line-height:18px;
         color:#10984b}
 #search-result .suggest_search li.product_suggest .b_flex p.per_twoprice{font-size:10px;
         font-weight:400;
         line-height:16px;
         color:#10984b;
         background-color:#f2fcf5;
         padding:2px 5px}
 #search-result .suggest_search li.product_suggest a .price.twoprice:before{content:'';
      width:15px;
      height:15px;
      background:transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAMAAAAM7l6QAAADIWlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS41LWMwMTQgNzkuMTUxNDgxLCAyMDEzLzAzLzEzLTEyOjA5OjE1ICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ0MgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjQwRDA1QTlFQzc2NTExRUI5RUFEQUQ5QzM0RTRFREY5IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjQwRDA1QTlGQzc2NTExRUI5RUFEQUQ5QzM0RTRFREY5Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NDBEMDVBOUNDNzY1MTFFQjlFQURBRDlDMzRFNEVERjkiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NDBEMDVBOURDNzY1MTFFQjlFQURBRDlDMzRFNEVERjkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz6rTY90AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAFRQTFRFR3BM0QAczwIc0AId0AEc0AEc0AEczwEc0AEc0AEb0AEbzwAgzwAQ0AEc0QIczwEa0QEc0QIe0AId1gAh0QEb0QIdzwAg0AIbzwAbzwUb0gAd0AIcLM/rQgAAABt0Uk5TAH+A31+/QCDv388QEK9/UG9vnx+PjzCfMDBPXpRnnQAAASVJREFUKM+Nk8uWgzAMQ0VJiAOkPPqcuf//n7OABGhZTFb4WPKRZSHtXxdCp/PXTSkCWHLhu3kxwOKCeHwAmhr8eJOkp/NQD/vuBXyzlaGFy6FbHadVu/4A7lOLg3VcqDduXW/8upck3WkLCcqn5ypJwchrPA3qLLHBekkOnwUbbcRCoY+SUtF15SW9lpmSJpIk473WM05y3PMw4kHNRBuk3z7XRi8Ri+8RbN7sjtz2bYWXkdctbSvsQQot42ZCv2IkSY9F2pxdwCSlAr8yS3NZzJEkTXtb6nZvi5PUGcXHCPYuay/Aa6EfTtKu/nRxO32MW0RiyLc5jcNwFp2zeFXQ7rLb+I/wDRG8+5GkMHmIzXFaeBhAjAZY1X/9J8GlBZHGXv98fzV0E9m7ufBbAAAAAElFTkSuQmCC) no-repeat left center;
      background-size:15px 15px;
      margin:1px 5px 0 0;
      display:inline-block;
      vertical-align:top}
 #search-result .suggest_search li.product_suggest a .price.fightprice:before,#search-result .suggest_search li.product_suggest a .price.fightpricesetup:before{background:transparent url('data:image/png; base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAANESURBVHgBzVfNUhNBEO7ZRF3Ew/gEhiqVo7wB6w0JKG9AOAEnwtET4cYtcAqcCE8gh4TSk+PNm3Cj1CryBq5VUG6EZOz5WTY7O9mQjSJf1Sa76e3+enr6ZwLwn0EgI+i+R+H3mAdd7uNjy19934IMcCAD6O7cGgTjZ8Cdd0ByH/E6o3uzG5ABORgSmmgLY+fiN8OrhVcBg+m5888gaHz7BEMgdQtkmAN3Sj44hOLHNHAoy2dONv3VRkU5VSzj71WtVgfeOegxk7o9pC9x+yEaJKU+Wuv+cnM7plObLQEh+2BHHR5crPtLzDcFeevr7XGxmhKuykey40jAT3DfD/2VBjNV/NWjOq3NMCAORoi86BF50lZ7XNwvQWItBtBIQSSV4utMZM3umD3IfUEmilF4bEbBVgUF/c1GJReQNsIoBo+mTHmmMvybuF0HeIfCQAdIblG/fWKKsNyqdLfIZcabMtxrlJ2JC5LMypaDZZzmgG4yJaXT3U7Y6WoZIdMmueyIUf4Y/M6hviubHdOJkXNSUQqiyVgSkBNRRqLRbPYhb6HspamGDYuJ3qFtVOjeq3Iok2VIqwsUxi5/ROSqww2CjTytcmhtrgKEbyCrD/cvJkRJqgi4QVge7F+RC2jbDBschV84SSHcAp6nMASykCdAcn7kQDvPZNvFtjlorI5Crm176ulK6shxHHw4DdzXz9t4O6PG6tOfQeP752HIhcydn6yiLkHdUyt5LMmPDqMIIOR0Q4F6waliwniJJaSuXBovocl9q+Mx8ijPYn1ACciOstddADv6hJ0wRcAPEhpyQkrUzSRPjuMuZqkDa8ZIVQ6uNCegD8Q4FgR2qbbFScI5Syu+8uEWcQenYeCq2U1gSh0mRoO24aknVXq9sJ8Ja8U6SvRUlCffCJhker9tZB44uTfYU6KDh7gXpyGRgCvNxJHMfiYM7pXBvQTthBeTESKa1RN/+WgzRr5XXEQyHFSGLSKdOAD3Yt1GlX4sl+HLF3p+8uQwkZq8EjpxTS7Bd6DrMDlwBNzzY9tp+EYO2J3SE02BXTsmuW8+SUMM/c8oaH5lbnGSoOseqK5YkHPEgbe4x1swJLL/OQ23R4zWsXOWFuY7jT+8rHcsxxjMYAAAAABJRU5ErkJggg==') no-repeat left center;
      background-size:16px 16px}
 #search-result .suggest_search li.product_suggest a .box-p{display:inline-block;
         vertical-align:middle}
 #search-result .suggest_search li.product_suggest a .box-p .price-old{display:inline-block;
         text-decoration:line-through;
         color:#333}
 #search-result .suggest_search li.product_suggest a .box-p .percent{color:#333}
 #search-result .suggest_search li.product_suggest a .item-gift{color:#333}
 #search-result .suggest_search:before,#search-result .suggest_search:after{content:'';
      width:0;
      height:0;
      position:absolute;
      bottom:100%;
      left:30%;
      border-bottom:10px solid #eee;
      border-left:10px solid transparent;
      border-right:10px solid transparent}
 #search-result .suggest_search:after{border-width:8px;
         border-bottom-color:#f5f5f5;
         margin-left:2px}
 .title-layout{font-size:18px;
         line-height:16px;
         margin-bottom:20px}
 .layout-col3{display:flex;
         margin:0 -5px}
 .layout-col3 li{padding:0 5px;
         width:33.333%}
 .layout-col3 li img{width:100%;
         border-radius:4px}
 .trademark,.product-news{margin:40px 0 30px}
 .trademark-slider,.product-news-slider{margin:0 -5px;
         width:calc(100% + 10px)}
 .trademark-slider a,.product-news-slider a{display:block}
 .trademark-slider a img,.product-news-slider a img{width:100%;
         border-radius:4px}
 .application{display:flex;
         margin-top:40px}
 .application a{color:#333}
 .application img{border-radius:4px;
         width:100%;
         height:100%;
         object-fit:cover}
 .application .col1{padding-right:15px;
         width:67%}
 .application .col1__ct{display:flex}
 .application .col1-big{width:61%}
 .application .col1-big-img{position:relative;
         height:270px}
 .application .col1-simple{margin-left:10px;
         width:calc(39% - 10px)}
 .application .col1-title{font-size:18px;
         font-weight:bold;
         line-height:27px;
         margin-top:10px}
 .application .col1-hour{color:#999;
         line-height:21px;
         margin-top:5px}
 .application .spl-item{align-items:center;
         display:flex;
         margin-bottom:10px}
 .application .spl-item__img{position:relative;
         width:120px;
         height:70px}
 .application .spl-item-title{font-size:12px;
         line-height:17px;
         overflow:hidden;
         -webkit-line-clamp:3;
         text-overflow:ellipsis;
         display:-webkit-box;
         -webkit-box-orient:vertical}
 .application .spl-item-hour{color:#999;
         font-size:10px;
         line-height:15px}
 .application .spl-item__content{padding-left:10px;
         width:calc(100% - 120px)}
 .application .ytbclick{left:50%;
         position:absolute;
         top:50%;
         transform:translate(-50%,-50%)}
 .application .ttl-main{margin-bottom:10px}
 .application .title-layout,.application .readmore-txt{display:inline-block;
         vertical-align:middle}
 .application .title-layout{font-weight:bold;
         margin-right:20px;
         margin-bottom:0}
 .application .col2{width:33%}
 .game__item img{width:100%}
 .game-box-wrap{display:flex;
         margin-top:10px}
 .game-box-main{padding-left:10px;
         width:calc(100% - 60px)}
 .game-box-img{width:60px}
 .game-title{font-weight:bold;
         line-height:21px}
 .game-label span,.game-label p{display:inline-block;
         vertical-align:middle}
 .game-label span{background-color:#07a358;
         border-radius:4px;
         color:#fff;
         font-size:12px;
         font-weight:bold;
         line-height:16px;
         padding:0 4px}
 .game-label p{font-size:13px;
         line-height:16px}
 .game-box-list a{color:#2f80ed;
         display:block;
         font-size:12px;
         line-height:18px;
         margin-top:10px;
         padding-left:15px;
         position:relative}
 .game-box-list a::before{background-color:#2f80ed;
         border-radius:50%;
         content:'';
      height:5px;
      left:0;
      position:absolute;
      top:6px;
      width:5px}
 .game-slider .owl-nav button{top:32%}
 .col2__ct .cook-title{font-size:14px;
         font-weight:500;
         line-height:20px;
         margin:5px 0;
         overflow:hidden;
         -webkit-line-clamp:3;
         text-overflow:ellipsis;
         display:-webkit-box;
         -webkit-box-orient:vertical}
 .col2__ct .cook-time{color:#666;
         font-size:13px}
 .col2__ct a:first-child .cook-img{width:294px;
         height:260px}
 .col2__ct a:last-child .cook-img{width:80px;
         height:80px}
 .col2__ct a:last-child .cook-main{padding-left:10px;
         width:calc(100% - 110px)}
 .item-txt-online{color:#333;
         font-size:12px;
         line-height:16px;
         margin-top:5px}
 .item-txt-online>i{width:15px;
         height:15px;
         background:transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAMAAAAM7l6QAAADIWlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS41LWMwMTQgNzkuMTUxNDgxLCAyMDEzLzAzLzEzLTEyOjA5OjE1ICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ0MgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjQwRDA1QTlFQzc2NTExRUI5RUFEQUQ5QzM0RTRFREY5IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjQwRDA1QTlGQzc2NTExRUI5RUFEQUQ5QzM0RTRFREY5Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NDBEMDVBOUNDNzY1MTFFQjlFQURBRDlDMzRFNEVERjkiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NDBEMDVBOURDNzY1MTFFQjlFQURBRDlDMzRFNEVERjkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz6rTY90AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAFRQTFRFR3BM0QAczwIc0AId0AEc0AEc0AEczwEc0AEc0AEb0AEbzwAgzwAQ0AEc0QIczwEa0QEc0QIe0AId1gAh0QEb0QIdzwAg0AIbzwAbzwUb0gAd0AIcLM/rQgAAABt0Uk5TAH+A31+/QCDv388QEK9/UG9vnx+PjzCfMDBPXpRnnQAAASVJREFUKM+Nk8uWgzAMQ0VJiAOkPPqcuf//n7OABGhZTFb4WPKRZSHtXxdCp/PXTSkCWHLhu3kxwOKCeHwAmhr8eJOkp/NQD/vuBXyzlaGFy6FbHadVu/4A7lOLg3VcqDduXW/8upck3WkLCcqn5ypJwchrPA3qLLHBekkOnwUbbcRCoY+SUtF15SW9lpmSJpIk473WM05y3PMw4kHNRBuk3z7XRi8Ri+8RbN7sjtz2bYWXkdctbSvsQQot42ZCv2IkSY9F2pxdwCSlAr8yS3NZzJEkTXtb6nZvi5PUGcXHCPYuay/Aa6EfTtKu/nRxO32MW0RiyLc5jcNwFp2zeFXQ7rLb+I/wDRG8+5GkMHmIzXFaeBhAjAZY1X/9J8GlBZHGXv98fzV0E9m7ufBbAAAAAElFTkSuQmCC) no-repeat left center;
         background-size:15px 15px;
         margin:-2px 5px 0 0;
         display:inline-block;
         vertical-align:middle}
 .zone-bhx{margin:auto;
         max-width:1200px;
         position:relative;
         z-index:1;
         left:0;
         right:0;
         top:0;
         clear:both}
 .zone-bhx span.note{font-style:italic;
         font-size:12px;
         color:#fff;
         display:inline-block;
         vertical-align:middle}
 .zone-new-bhx{margin:auto;
         max-width:1200px;
         position:relative;
         z-index:1;
         left:0;
         right:0;
         top:0;
         clear:both}
 .zone-new-bhx span.note{font-style:italic;
         font-size:12px;
         color:#fff;
         display:inline-block;
         vertical-align:middle}
 .productbox-bhx{background-color:#f1f1f1;
         border:6px solid #008847;
         border-top:0}
 .productbox-bhx div.title{display:block;
         color:#fff;
         position:relative;
         font-size:16px;
         background:#008847;
         padding:10px 0}
 .productbox-bhx div.title a{margin-left:2px;
         padding-left:30px}
 .productbox-bhx div.title img{display:inline-block;
         vertical-align:middle;
         width:auto}
 .productbox-bhx div.title span:first-child{color:#fff200}
 .productbox-bhx div.title span.close{position:absolute;
         margin:auto;
         right:5px;
         cursor:pointer;
         top:50%;
         -ms-transform:translate(-50%,-50%);
         transform:translate(0,-50%);
         font-size:12px;
         color:#fff;
         font-weight:normal}
 .productbox-bhx div._product{display:flex}
 .productbox-bhx div._product .productbox-bhx-item{padding-bottom:45px;
         position:relative;
         background-color:#fff;
         width:calc(100%/10);
         text-align:center}
 .productbox-bhx div._product .productbox-bhx-item a:first-child{padding:5px;
         position:relative;
         display:block}
 .productbox-bhx div._product .productbox-bhx-item:not(:last-child){border-right:1px solid #eee}
 .productbox-bhx div>a>span{position:relative;
         display:-webkit-box;
         -webkit-box-orient:vertical;
         -webkit-line-clamp:2;
         height:36px;
         margin:0;
         width:100%;
         font-size:12px;
         text-overflow:ellipsis;
         overflow:hidden;
         color:#333;
         line-height:18px}
 .productbox-bhx div>a .productbox-bhx-item-img{height:auto;
         width:100px;
         margin:auto}
 .productbox-bhx div>a .productbox-bhx-item-img img{width:100%;
         height:auto;
         margin:10px auto}
 .productbox-bhx div>a .zone-price{font-size:14px}
 .productbox-bhx div>a .zone-price .after-price{color:#d12c1f;
         display:block;
         font-size:16px}
 .productbox-bhx div>a .zone-price .before-price{color:#666;
         display:inline-block;
         text-decoration:line-through;
         font-weight:normal}
 .productbox-bhx div>a .zone-price .percent-price{color:#dd1c1a;
         display:inline-block}
 .productbox-bhx div .zone-buy{position:absolute;
         color:#007e3c;
         padding:4px 19px;
         border:1px solid #008847;
         border-radius:4px;
         margin:5px;
         left:0;
         right:0;
         bottom:5px;
         text-align:center}
 .owl-carousel .owl-item img.lbliconimg,.lbliconimg{width:auto !important;
         height:40px;
         position:absolute;
         top:unset;
         left:0;
         bottom:0}
 .owl-carousel .owl-item img.lbliconimg.lbliconimg_44,.lbliconimg.lbliconimg_44{left:unset;
         bottom:unset;
         right:0;
         top:0}
 .owl-carousel .owl-item img.lbliconimg.tgdd,.lbliconimg.tgdd{height:45px !important}
 .feedback_global>*{display:block;
         position:fixed;
         bottom:50px;
         z-index:2}
 .feedback_global #global_form{display:none;
         left:0;
         right:0;
         margin:auto;
         max-width:465px;
         top:50%;
         z-index:13;
         padding:20px 30px;
         background:#fff;
         border-radius:8px;
         transform:translateY(-50%);
         bottom:initial}
 .feedback_global #global_form.form_success{max-width:280px;
         padding:75px 55px 45px}
 .feedback_global #global_form.form_success a{position:absolute;
         top:10px;
         right:10px;
         background-color:#fff;
         border:1px solid #e0e0e0;
         border-radius:4px;
         color:#333;
         cursor:pointer;
         float:right;
         line-height:21px;
         padding:7px;
         text-align:right;
         width:67px}
 .feedback_global #global_form.form_success a:before,.feedback_global #global_form.form_success a:after{background-color:#333;
         content:'';
      left:13px;
      height:14px;
      position:absolute;
      top:10px;
      width:1px}
 .feedback_global #global_form.form_success a:before{transform:rotate(45deg)}
 .feedback_global #global_form.form_success a:after{transform:rotate(-45deg)}
 .feedback_global #global_form>*{display:block}
 .feedback_global #global_form h3{font-size:16px;
         line-height:20px;
         text-align:center;
         font-weight:bold;
         margin-bottom:10px}
 .feedback_global #global_form>span{font-size:14px;
         line-height:1.4;
         text-align:center;
         display:block;
         color:#666}
 .feedback_global #global_form>span.form_more{color:#333;
         text-align:left;
         padding-bottom:20px;
         cursor:pointer;
         position:relative;
         width:max-content;
         cursor:pointer}
 .feedback_global #global_form>span.form_more:after{border-left:5px solid transparent;
         border-right:5px solid transparent;
         border-top:5px solid #333;
         content:'';
      position:absolute;
      top:8px;
      right:-15px}
 .feedback_global #global_form textarea,.feedback_global #global_form input{resize:none;
         width:410px;
         background:#fff;
         border:1px solid #e0e0e0;
         box-sizing:border-box;
         border-radius:4px;
         margin-bottom:10px;
         padding:15px 10px;
         line-height:15px;
         height:48px}
 .feedback_global #global_form #Description{margin-top:20px;
         height:74px;
         margin-bottom:20px}
 .feedback_global #global_form .check-option{margin-bottom:10px}
 .feedback_global #global_form .check-option>div{display:inline-block;
         margin-right:20px}
 .feedback_global #global_form .check-option>div i{cursor:pointer}
 .feedback_global #global_form .zone-button{text-align:center}
 .feedback_global #global_form .zone-button .close-feed{padding:12px 40px;
         border-radius:4px;
         font-weight:600;
         font-size:16px;
         line-height:20px;
         color:#2f80ed;
         border:0;
         margin-right:2%;
         border:1px solid #2f80ed}
 .feedback_global #global_form .zone-button>*{display:inline-block;
         max-width:46%;
         width:46%}
 .feedback_global #global_form button{padding:13px 40px;
         background:#2f80ed;
         border-radius:4px;
         font-weight:600;
         font-size:16px;
         line-height:20px;
         color:#fff;
         border:0;
         width:100%;
         cursor:pointer}
 .feedback_global>div img{display:block;
         transform:scale(.5);
         cursor:pointer}
 #notifychatmsg .notifyChat2{width:93px !important;
         height:37px !important}
 .banner-texttop._offtemp{background-color:#ffd103}
 .banner-texttop._offtemp ._left{width:100%;
         text-align:center}
 .banner-texttop._offtemp ._right,.banner-texttop._offtemp ._left:after{display:none}
 .banner-texttop._offtemp:before,.banner-texttop._offtemp:after{background-color:#2d67c4}
 .banner-texttop{overflow-y:hidden;
         width:1200px;
         max-height:44px;
         margin:auto;
         background-color:#2d67c4}
 .banner-texttop *{box-sizing:border-box}
 .banner-texttop:before,.banner-texttop:after{content:'';
      position:absolute;
      width:360px;
      height:44px}
 .banner-texttop:before{left:calc((100% - 1200px)/2 - 359px);
         background-color:#2d67c4}
 .banner-texttop:after{right:0;
         width:calc((100% - 1200px)/2 + 10px);
         background-color:#ffd103}
 .banner-texttop>div{display:inline-block;
         padding:10px 0;
         position:relative}
 .banner-texttop ._left{width:63%;
         text-align:right;
         background-color:#2d67c4;
         color:#fff}
 .banner-texttop ._left:after{content:'';
      position:absolute;
      top:-27px;
      right:-20px;
      border-top:77px solid #2d67c4;
      border-right:54px solid #ffd103;
      width:9px}
 .banner-texttop ._left a{font-size:20px;
         line-height:24px;
         text-transform:uppercase;
         font-style:italic;
         font-weight:bold;
         color:#fff;
         z-index:1;
         position:relative;
         padding-right:90px}
 .banner-texttop ._left a:after{content:'';
      padding:6px;
      box-shadow:3px -3px 0 0 #fff inset;
      transform:rotate(225deg);
      right:70px;
      display:inline-block;
      top:2px;
      position:absolute}
 .banner-texttop ._left a:not(:first-child){display:none}
 .banner-texttop ._left a span b{color:#ffd400;
         font-size:26px;
         line-height:20px}
 .banner-texttop ._right{width:calc(37% - 4px);
         text-align:left;
         background-color:#ffd103}
 .banner-texttop ._right span{font-size:16px;
         line-height:19px;
         color:#222}
 .banner-texttop ._right span a{color:#222}
 .banner-texttop ._right span a b{font-size:20px;
         line-height:24px}
 @media screen and (max-width:1300px){.feedback_global>*{bottom:110px;
         z-index:10}
}
 .sticky-sidebar a{position:fixed;
         top:195px;
         width:89px;
         z-index:999}
 .sticky-sidebar a img{display:block;
         max-width:100%;
         height:auto}
 .sticky-sidebar .banner-left{left:calc(((100vw - 1200px)/2) - 105px)}
 .sticky-sidebar .banner-right{right:calc(((100vw - 1200px)/2) - 105px)}
 @media screen and (max-width:1366px){.sticky-sidebar a{width:69px}
 .sticky-sidebar .banner-left{left:calc(((100vw - 1200px)/2) - 80px)}
 .sticky-sidebar .banner-right{right:calc(((100vw - 1200px)/2) - 80px)}
}
 .banner-media img{display:block;
         margin:auto}
 .banner-media img.lazyload{height:0}
 .banner-media .owl-carousel .owl-item .owl-lazy{opacity:1}
 .media-slider{width:1200px !important;
         margin:0 auto}
 .media-slider .owl-nav button{height:44px;
         background:none !important}
 .media-slider .owl-nav button span::before{top:13px;
         height:16px;
         width:16px;
         border-top:3px solid #fff;
         border-right:3px solid #fff}
 .media-slider .owl-next,.media-slider .owl-prev{box-shadow:none}
 .media-slider{height:44px;
         position:relative}
 .media-slider{display:block}
 .media-slider .item{position:absolute;
         top:0;
         left:0;
         display:none}
 .media-slider .item.visible{display:block}
 .media-slider .nav .prev,.media-slider .nav .next{position:absolute;
         z-index:2;
         top:0;
         width:40px;
         height:100%;
         cursor:pointer}
 .media-slider .nav .prev{left:0}
 .media-slider .nav .next{right:0}
 .media-slider .nav .prev .arrow-left,.media-slider .nav .next .arrow-right{height:20px;
         width:20px;
         border-top:3px solid #666;
         border-right:3px solid #666;
         position:absolute;
         top:50%;
         left:50%}
 .media-slider .nav .prev:hover .arrow-left,.media-slider .nav .next:hover .arrow-right{border-top:3px solid #fff;
         border-right:3px solid #fff}
 .media-slider .nav .prev .arrow-left,.media-slider .nav .next .arrow-right{height:20px;
         width:20px;
         border-top:3px solid #666;
         border-right:3px solid #666;
         position:absolute;
         top:50%;
         left:50%}
 .media-slider .nav .prev .arrow-left{-webkit-transform:translate(-20%,-50%) rotate(225deg);
         -ms-transform:translate(-20%,-50%) rotate(225deg);
         -o-transform:translate(-20%,-50%) rotate(225deg);
         transform:translate(-20%,-50%) rotate(225deg)}
 .media-slider .nav .next .arrow-right{-webkit-transform:translate(-70%,-50%) rotate(45deg);
         -ms-transform:translate(-70%,-50%) rotate(45deg);
         -o-transform:translate(-70%,-50%) rotate(45deg);
         transform:translate(-70%,-50%) rotate(45deg)}
 section.prmotebannerbhx{display:contents}
 .prmotebanner-bhx{max-width:1200px;
         display:block;
         margin:5px auto}
 .popup{display:none}
 .popup__background,.popup__container{position:fixed;
         top:0;
         width:100%;
         height:100%;
         z-index:1000}
 .popup__background{background:rgba(0,0,0,.45)}
 .popup__container img{position:absolute;
         left:50%;
         top:50%;
         transform:translate(-50%,-50%);
         width:400px;
         height:auto}
 .popup__close{border-radius:50%;
         padding:.5em;
         border:2px solid #fff;
         color:#fff;
         position:absolute;
         right:calc(50% - 242px);
         top:calc(50% - 214px);
         transform:translate(-50%,-50%);
         width:28px;
         height:28px;
         cursor:pointer}
 .popup__close::before{content:" ";
      position:absolute;
      display:block;
      background-color:#fff;
      width:2px;
      left:12px;
      top:5px;
      bottom:5px;
      transform:rotate(45deg)}
 .popup__close::after{content:" ";
      position:absolute;
      display:block;
      background-color:#fff;
      height:2px;
      top:12px;
      left:5px;
      right:5px;
      transform:rotate(45deg)}
 .fastdeli i.thunder-icon{width:10px;
         height:auto}
 .fastdeli i.thunder-icon img{width:10px;
         display:inline-block;
         height:auto;
         vertical-align:text-top}
 .locationbox-v2{background:#fff;
         position:fixed;
         z-index:13;
         max-width:476px;
         max-height:80vh;
         align-items:center;
         margin:auto;
         display:none;
         width:100%;
         top:50%;
         transform:translateY(-50%);
         left:0;
         right:0;
         border-radius:8px;
         overflow:hidden}
 .locationbox-v2 p{font-weight:normal !important;
         max-width:380px;
         color:#fff}
 .locationbox-v2 .locationbox__item{background:#2f80ed;
         white-space:normal;
         padding:10px;
         box-sizing:border-box;
         border:0}
 .locationbox-v2 .top-location p{font-size:13px;
         text-align:left}
 .location-search{position:relative;
         margin-top:10px}
 .location-search>i{position:absolute;
         left:7px;
         top:9px}
 .location-search input{width:100%;
         padding:8px 28px 8px 28px;
         border:1px solid #fff;
         box-sizing:border-box;
         border-radius:8px}
 .clear-searchbox{right:8px;
         top:27%;
         background:#000;
         position:absolute;
         border-radius:50%;
         background:#d9d9d9;
         padding:8px;
         cursor:pointer;
         display:none}
 .clear-searchbox span.box-relative{position:relative}
 .clear-searchbox .close-symbol{top:-5px;
         left:0}
 .listing-location{padding:10px;
         max-height:40vh;
         margin-bottom:10px;
         overflow:hidden}
 .listing-locale ul{display:grid;
         grid-auto-rows:minmax(min-content,max-content);
         grid-template-columns:repeat(2,minmax(0,1fr));
         max-height:39vh;
         overflow:auto}
 .listing-locale ul li a{padding:10px;
         display:block;
         color:#333;
         width:80%;
         border-bottom:1px solid #f1f1f1}
 .listing-locale ul li a.active,.listing-locale ul li a:hover{background:#e9f4fb;
         border-bottom:1px solid #e9f4fb}
 .locationbox-v2 .locationbox__item.locationbox__item--right a.cls-location{background-color:#2f80ed;
         border:1px solid #e9f4fb;
         color:#fff;
         position:relative;
         top:0;
         left:0}
 .locationbox-v2 .locationbox__item span{text-transform:none}
 .top-location{background:#2f80ed;
         padding:0 0 10px;
         display:flex;
         overflow:hidden;
         align-items:center;
         justify-content:space-between}
 .locationbox-v2 a.cls-location{color:#fff;
         padding:7px 10px 7px 20px;
         border:1px solid #fff;
         border-radius:4px;
         position:relative;
         line-height:1.3}
 .close-symbol{background-color:#fff;
         left:10px;
         height:10px;
         position:absolute;
         top:11px;
         width:1px;
         transform:rotate(-45deg)}
 .close-symbol::before{content:"";
      background-color:#fff;
      left:0;
      height:10px;
      position:absolute;
      top:0;
      width:1px;
      transform:rotate(90deg)}
 .locationbox__item.locationbox__item--right p.default-title{max-width:380px;
         text-align:left}
 .locationbox__item.locationbox__item--right p.location-title{text-align:center;
         max-width:65%;
         margin:6px auto 15px;
         line-height:1.5}
 a.back-ic{cursor:pointer;
         height:10px;
         width:10px;
         border-top:2px solid #fff;
         border-right:2px solid #fff;
         position:relative;
         top:6px;
         left:6px;
         -webkit-transform:translate(-20%,-50%) rotate(225deg);
         -ms-transform:translate(-20%,-50%) rotate(225deg);
         -o-transform:translate(-20%,-50%) rotate(225deg);
         transform:translate(-20%,-50%) rotate(225deg)}
 div#suggest-location{height:39vh;
         overflow:hidden;
         display:none}
 ul.suggest-location{display:flex;
         flex-flow:column;
         overflow:hidden;
         overflow-y:auto;
         max-height:100%}
 ul.suggest-location li{position:relative;
         padding-right:30px}
 ul.suggest-location li::before{border-top:1px solid #000;
         border-right:1px solid #000;
         content:'';
      height:6px;
      position:absolute;
      top:calc(50% - 3px);
      transform:rotate(45deg);
      right:15px;
      width:6px}
 ul.suggest-location li a{display:block;
         padding:15px 0;
         overflow:hidden;
         color:#000}
 ul.suggest-location li a::after{content:"";
      border-bottom:1px solid #e0e0e0;
      position:absolute;
      bottom:0;
      width:calc(100% + 20px);
      left:-10px}
 ul.suggest-location li a span{margin-right:10px}
 strong.choose-province{display:block;
         margin:5px auto;
         color:#000;
         text-align:center;
         font-size:14px}
 .location-title{color:#fff;
         padding:0 0 10px;
         margin:0 auto;
         line-height:1.5;
         display:flex;
         overflow:hidden;
         align-items:center;
         justify-content:space-between}
 .location-title-text{max-width:50%;
         margin:0 auto;
         text-align:center}
 .footer__logo{background-color:#fff}
 .footer__logo-hd{color:#222;
         font-size:14px;
         line-height:21px}
 .footer__logo-list{font-size:0;
         margin-top:15px}
 .footer__logo-list li{float:left;
         width:80px;
         margin:0 8px 8px 0}
 .footer__logo-list li:nth-child(4n+4){margin-right:0}
 .footer__logo-list li a{display:block}
 .imgzalo img{max-width:18px;
         margin-top:-5px;
         vertical-align:middle}
 *{margin:0;
         padding:0}
 img{border:0}
 img.lazyload-after{opacity:0}
 a{text-decoration:none;
         transition:.2s;
         color:#288ad6}
 ul,ol{list-style:none}
 .clr{clear:both}
 .clearfix{display:block}
 .clearfix:after{content:"";
      display:block;
      clear:both}
 body,input,button,option,textarea,label,select,legend,h1,h2,h3,h4,h5,h6,h1 a,h2 a,h3 a,h4 a,h5 a,h6 a{font:14px/18px Arial,Helvetica,sans-serif;
         color:#333;
         outline:none}
 body{min-width:1024px}
 p{-webkit-margin-before:0;
         -webkit-margin-after:0;
         -webkit-margin-start:0;
         -webkit-margin-end:0;
         text-rendering:geometricPrecision}
 input[type=text],input[type=tel],textarea{-webkit-appearance:none}
 .main-menu .navmwg{display:none;
         position:absolute;
         background:#fff;
         top:43px;
         width:770px;
         border-radius:4px;
         padding:10px;
         z-index:10;
         border:1px solid #eee;
         left:0;
         grid-auto-rows:minmax(min-content,max-content);
         grid-template-columns:repeat(4,auto)}
 .main-menu .navmwg .item-child:first-child{grid-row:1/4}
 .main-menu li.has-list:hover .navmwg{display:grid}
 .main-menu .navmwg.limit-width{width:160px}
 .main-menu .has-list.show-left .navmwg:not(.limit-width){left:unset;
         right:0}
 .main-menu li.has-list:hover .navmwg.limit-width{display:block}
 .main-menu .navmwg::before,.navmwg::after{content:'';
      width:0;
      height:0;
      position:absolute;
      bottom:100%;
      left:40px;
      border-bottom:10px solid #d9d9d9;
      border-left:10px solid transparent;
      border-right:10px solid transparent;
      border-bottom-color:#fff}
 .main-menu .has-list.show-left .navmwg:not(.limit-width)::before,.main-menu .has-list.show-left .navmwg:not(.limit-width)::after{left:unset;
         right:40px}
 .main-menu a span.has-child:after{content:'';
      width:0;
      height:0;
      border-top:6px solid #333;
      border-left:6px solid transparent;
      border-right:6px solid transparent;
      display:inline-block;
      vertical-align:middle;
      margin-left:5px}
 .main-menu .navmwg div{width:100%;
         margin-bottom:10px}
 .main-menu .navmwg .no-child-final{margin:0;
         width:auto;
         float:none}
 .main-menu .navmwg .no-child-final a{display:block}
 .main-menu .navmwg strong{text-transform:uppercase;
         border-bottom:1px solid #eee;
         font-size:13px;
         padding-bottom:5px;
         color:#333}
 .main-menu .navmwg div a:hover h3{font-weight:bold}
 .main-menu .navmwg a{display:block;
         padding:10px 5px 0 0;
         color:#000;
         font-size:11px;
         position:relative}
 .main-menu .navmwg div a{display:block;
         padding:10px 5px 0 0;
         color:#000;
         font-size:11px;
         position:relative}
 .main-menu .navmwg strong a{display:initial;
         text-transform:initial;
         color:#4a90e2}
 .main-menu .navmwg strong a::after{content:'';
      width:0;
      height:0;
      border-left:5px solid #4a90e2;
      border-top:4px solid transparent;
      border-bottom:4px solid transparent;
      display:inline-block;
      margin-left:5px}
 .hc-samsungsis img{width:100%;
         height:auto}
 .sticky-sidebar{display:none}
 .sticky-sidebar.active{display:block}
 .livestream-header-container{background-color:#ffebaf;
         height:44px}
 .livestream-header{width:100%;
         height:100%;
         max-width:1200px;
         margin:auto;
         display:flex;
         align-items:center;
         justify-content:center}
 .livestream-header .status{background-color:#ef233c;
         border-radius:40px;
         padding:1px 8px;
         font-weight:bold;
         font-size:14px;
         line-height:21px;
         color:#f4f4f5}
 .livestream-header .status::after{display:inline-block;
         content:"";
      width:8px;
      height:8px;
      margin:0 0 1px 4px;
      background-color:#fff;
      border-radius:50%}
 .livestream-header .title{color:#ef233c;
         font-weight:bold;
         font-size:14px;
         line-height:17px;
         margin-left:15px}
 .livestream-header .see-now{color:#2f80ed;
         font-size:14px;
         line-height:17px;
         margin-left:15px;
         position:relative;
         padding-right:10px}
 .livestream-header .see-now::after{content:"";
      width:0;
      height:0;
      border-bottom:5px solid transparent;
      border-left:5px solid #2f80ed;
      border-top:5px solid transparent;
      position:absolute;
      top:4px;
      right:0}
 .imgzalo img{max-width:18px;
         margin-top:-5px;
         vertical-align:middle}
 [class^="icon-"],[class*="icon-"]{background-image:url(//cdn.tgdd.vn/mwgcart/mwgcore/ContentMwg/images/homev2/desk/icon_common@2x.webp);
         background-repeat:no-repeat;
         display:inline-block;
         height:30px;
         width:30px;
         line-height:30px;
         vertical-align:middle;
         background-size:300px 200px}
 .icon-logo{background-position:0 0;
         height:24px;
         width:141px}
 .icon-search{background-position:-150px 0;
         height:17px;
         width:17px}
 .icon-cart{background-position:-175px 0;
         height:18px;
         width:20px}
 .icon-facebook{background-position:-225px 0;
         height:18px;
         width:18px}
 .icon-youtube{background-position:-200px 0;
         height:18px;
         width:18px}
 .icon-dmx{background-position:0 -30px;
         height:18px;
         width:103px}
 .icon-bhx{background-position:-110px -30px;
         height:18px;
         width:81px}
 .icon-maiam{background-position:0 -60px;
         height:18px;
         width:71px}
 .icon-congthuong{background-position:-200px -30px;
         height:24px;
         width:79px}
 .icon-khieunai{background-position:-250px 0;
         height:25px;
         width:25px}
 .icon-protected{background-position:-80px -60px;
         height:24px;
         width:122px}
 .icon-star{background-position:-205px -60px;
         height:12px;
         width:13px}
 .icon-star-dark{background-position:-225px -60px;
         height:12px;
         width:13px}
 .icon-star-half{background-position:-215px -130px;
         height:13px;
         width:14px}
 .icon-ytb-big{background-position:0 -90px;
         height:31px;
         width:43px}
 .icon-ytb-simple{background-position:-45px -90px;
         height:22px;
         width:30px}
 .icon-dienthoai{background-position:-85px -90px;
         height:20px;
         width:13px}
 .icon-laptop{background-position:-105px -90px;
         height:20px;
         width:25px}
 .icon-tablet{background-position:-140px -90px;
         height:20px;
         width:16px}
 .icon-phukien{background-position:-165px -90px;
         height:18px;
         width:22px}
 .icon-dhthongminh{background-position:-195px -90px;
         height:22px;
         width:17px}
 .icon-dhthoitrang{background-position:-220px -90px;
         height:23px;
         width:15px}
 .icon-pcmayin{background-position:-240px -90px;
         height:16px;
         width:23px}
 .icon-filter{background-position:-285px 0;
         height:14px;
         width:11px}
 .icon-check{background-position:-245px -60px;
         height:7px;
         width:10px}
 .icon-info{background-position:-265px -60px;
         height:16px;
         width:16px}
 .icon-sticky-search{background-position:0 -125px;
         height:15px;
         width:15px}
 .icon-sticky-chat{background-position:-25px -125px;
         height:20px;
         width:24px}
 .icon-sticky-cart{background-position:-55px -125px;
         height:21px;
         width:23px}
 .icon-sticky-ss{background-position:-85px -125px;
         height:20px;
         width:22px}
 .icon-deletess{background-position:-165px -125px;
         height:16px;
         width:16px}
 .icon-tickbox{background-position:-115px -125px;
         height:18px;
         width:18px}
 .icon-findcp{background-position:-190px -125px;
         height:19px;
         width:19px}
 .icon-position{background-position:-275px -88px;
         width:16px;
         height:21px}
 [class^="iconnewglobal-"],[class*="iconnewglobal-"]{background-image:url(//cdn.tgdd.vn/mwgcart/mwgcore/ContentMwg/images/homev2/desk/iconnew.webp);
         background-repeat:no-repeat;
         display:inline-block;
         height:30px;
         width:30px;
         line-height:30px;
         vertical-align:middle;
         background-size:310px 257px}
 .iconnewglobal-logo{background-position:0 -176px;
         width:228px;
         height:40px}
 .iconnewglobal-location{background-position:-35px 0;
         width:8px;
         height:10px}
 .iconnewglobal-cart{background-position:-48px 0;
         width:25px;
         height:24px}
 .iconnewglobal-menu{background-position:-77px 0;
         width:26px;
         height:26px}
 .iconnewglobal-search{background-position:-107px 0;
         width:18px;
         height:18px}
 .iconnewglobal-vote{background-position:-129px 0;
         width:12px;
         height:12px}
 .iconnewglobal-service{background-position:-273px -133px;
         width:38px;
         height:38px}
 .iconnewglobal-game{background-position:-272px -175px;
         width:38px;
         height:38px}
 .iconnewglobal-ticket{background-position:-273px -219px;
         width:38px;
         height:38px}
 .iconnewglobal-card{background-position:-273px -89px;
         width:38px;
         height:38px}
 .iconnewglobal-logodmx{background-position:0 -35px;
         width:74px;
         height:22px}
 .iconnewglobal-logotopzone{background-position:-78px -35px;
         width:74px;
         height:22px}
 .iconnewglobal-logobhx{background-position:-158px -35px;
         width:74px;
         height:22px}
 .iconnewglobal-avakids{background-position:0 -62px;
         width:74px;
         height:22px}
 .iconnewglobal-avasport{background-position:-78px -62px;
         width:74px;
         height:22px}
 .iconnewglobal-avafashion{background-position:-158px -62px;
         width:74px;
         height:22px}
 .iconnewglobal-avaji{background-position:-236px -62px;
         width:74px;
         height:22px}
 .iconnewglobal-boxarrow{background-position:-206px 0;
         width:18px;
         height:18px}
 .iconnewglobal-menusubdmx{background-position:-252px 0;
         width:18px;
         height:18px}
 .iconnewglobal-whitecart{background-position:-275px 0;
         width:24px;
         height:24px}
 .iconnewglobal-whitemenu{background-position:-236px -33px;
         width:24px;
         height:24px}
 .iconnewglobal-logodmx{background-position:-41px -89px;
         width:91px;
         height:30px}
 .taC{text-align:center}
 @-webkit-keyframes sonar{0%{opacity:1;
         -webkit-transform:scale(1);
         transform:scale(1)}
 100%{-webkit-transform:scale(4);
         transform:scale(4);
         opacity:0}
}
 @keyframes sonar{0%{opacity:1;
         -webkit-transform:scale(1);
         transform:scale(1)}
 100%{-webkit-transform:scale(4);
         transform:scale(4);
         opacity:0}
}
 .bordercol{background-color:#ffe56c;
         height:32px;
         width:1px}
 .btn-readmore{border:1px solid #e0e0e0;
         background-color:#fff;
         border-radius:4px;
         color:#333;
         display:block;
         font-size:14px;
         line-height:18px;
         max-width:340px;
         margin:0 auto;
         padding:8px 5px;
         text-align:center;
         width:100%}
 .btn-readmore.blue{border:1px solid #288ad6;
    color:#288ad6}
 .btn-readmore span{position:relative;
    padding-right:15px}
 .btn-readmore span::before{border-left:5px solid transparent;
    border-right:5px solid transparent;
    border-top:5px solid #333;
    content:'';
 position:absolute;
 right:-3px;
 top:5px}
 .btn-readmore.blue span::before{border-top:5px solid #288ad6}
 .header__top>div,.header__main>div{width:100%;
    max-width:1220px;
    margin:auto;
    padding:0 10px}
 .header__top{background-color:#ffd400;
    padding:10px 0 0}
 .header__top>div{align-items:center;
    display:flex;
    justify-content:space-between}
 .header__main{background-color:#ffd400;
    padding:0 0 10px}
 .header__logo{padding-right:15px}
 .header__address{color:#333;
    font-size:11px;
    line-height:15px;
    margin-right:21px;
    width:15%;
    padding-left:15px;
    background:rgba(255,172,10,.6);
    padding:4px 6px 4px 10px;
    border-radius:4px;
    position:relative}
 .header__address span{color:#333;
    font-weight:bold;
    width:max-content;
    display:-webkit-box;
    -webkit-box-orient:vertical;
    -webkit-line-clamp:1;
    overflow:hidden;
    max-width:117px;
    text-transform:capitalize;
    padding-right:15px}
 .header__address span::before{border-left:5px solid transparent;
    border-right:5px solid transparent;
    border-top:5px solid #000;
    content:'';
 position:absolute;
 top:43%;
 right:7px}
 .header__search{position:relative;
    width:34%;
    border-radius:4px;
    background-color:#fff}
 .header__search input{background-color:#fff;
    border:none;
    border-radius:4px;
    font-size:12px;
    line-height:14px;
    height:40px;
    padding:8px 8px 8px 13px;
    width:calc(100% - 35px)}
 .header__search button{background-color:transparent;
    border:none;
    position:absolute;
    top:10px;
    right:10px}
 .header__search .dropdownsearch{float:left;
    overflow:hidden;
    width:90px}
 .header__search .dropdownsearch a#type{display:block;
    overflow:hidden;
    padding:6px 4px 6px 6px;
    box-sizing:border-box;
    background:#fed700;
    margin:5px;
    border-radius:4px;
    color:#333;
    font-size:12px;
    line-height:18px;
    text-align:center}
 .header__search .dropdownsearch a#type:after{content:"";
 border-top:5px solid #333;
 border-left:5px solid transparent;
 border-right:5px solid transparent;
 display:inline-block;
 vertical-align:middle;
 margin:0 0 0 3px}
 .header__search .dropdownsearch ul{display:none;
    background:#fff;
    overflow:hidden;
    position:absolute;
    left:0;
    width:90px;
    top:36px;
    -webkit-box-shadow:3px 6px 23px -6px rgba(0,0,0,.87);
    box-shadow:3px 6px 23px -6px rgba(0,0,0,.87);
    z-index:99999}
 .header__search .dropdownsearch ul li{display:block;
    overflow:hidden;
    padding:5px 7px;
    font-size:12px;
    cursor:pointer}
 .header__search .dropdownsearch ul li.active{font-weight:bold}
 header.header.manusearch .header__search input{width:calc(100% - 90px - 35px);
    padding:8px 8px 8px 3px}
 .header__cart{border-radius:4px;
    color:#333;
    font-size:12px;
    line-height:14px;
    padding:8px 10px;
    width:12%;
    background:rgba(255,172,10,.6)}
 .header__cart .box-cart{position:relative;
    display:inline-block;
    vertical-align:middle}
 .header__cart i,.header__cart span{display:inline-block;
    vertical-align:middle;
    font-weight:700}
 .header__cart i{margin-right:8px}
 .header__history{color:#333;
    font-size:12px;
    line-height:14px;
    margin:0 12px 0 18px;
    text-align:center;
    width:55px}
 .header__hot{color:#333;
    font-size:12px;
    line-height:14px;
    padding:3px 4px 3px 30px;
    position:relative;
    width:16%}
 .header__hot .dot{background-color:#ffe66b;
    border-radius:100%;
    display:block;
    left:10px;
    height:8px;
    margin-top:-5px;
    position:absolute;
    top:50%;
    width:8px}
 .header__listtop{align-items:center;
    display:flex;
    width:28%}
 .header__listtop .divitem{padding:0 12px;
    text-align:center}
 .header__listtop .divitem:last-child{padding-right:0}
 .header__listtop .divitem a{color:#333;
    font-size:14px;
    line-height:16px}
 .name-order{color:#333;
    font-size:12px;
    line-height:14px;
    padding:6px 14px;
    width:10%;
    border-radius:4px;
    text-align:center;
    float:left;
    margin:0 21px;
    background:rgba(255,172,10,.6)}
 .cart-number{border-radius:50%;
    color:#fff;
    display:inline-block;
    font-size:10px;
    line-height:12px;
    left:8px;
    height:12px;
    position:absolute;
    text-align:center;
    top:0;
    width:12px}
 .cart-number.has-cart{background-color:#dd1c1a;
    line-height:inherit}
 .main-menu{display:flex;
    justify-content:space-between;
    margin:0 -10px 0;
    padding-top:10px}
 .main-menu a{color:#000;
    font-size:0;
    line-height:16px}
 .main-menu li{cursor:pointer;
    padding:10px;
    position:relative}
 .main-menu li.current{background-color:#fff}
 .main-menu li:last-child{margin-right:0}
 .main-menu li i,.main-menu li span{display:inline-block;
    font-size:14px;
    vertical-align:middle}
 .main-menu li i{margin-right:5px}
 .main-menu li i img{height:20px;
    width:auto;
    object-fit:cover;
    vertical-align:middle}
 #search-result .suggest_search .hc-samsungsis{padding:5px}
 .hc-samsungsis a img{display:block;
    width:275px;
    height:30px}
 .footer{clear:both;
    border-top:1px solid #e2e2e2;
    margin-top:35px;
    background:#fff;
    position:relative}
 .footer__top{padding:15px 0 5px}
 .footer__col{float:left;
    width:24%}
 .footer__col:nth-child(2){width:19%}
 .footer__col:nth-child(3){width:28%}
 .footer__col:nth-child(4){width:29%}
 .f-listmenu li{margin-bottom:10px}
 .f-listmenu li.hidden{display:none}
 .f-listmenu li a{color:#333;
    line-height:21px}
 .f-listmenu li a:hover{color:#2f80ed}
 .f-listmenu .arrow{position:relative}
 .f-listmenu .arrow::before{border-left:5px solid transparent;
    border-right:5px solid transparent;
    border-top:5px solid #333;
    content:'';
 position:absolute;
 top:7px;
 right:-15px}
 .f-listtel__content{line-height:21px;
    margin-top:10px}
 .f-listtel__content a{color:#2f80ed;
    font-weight:bold}
 .f-listtel__content>span{width:65px;
    display:inline-block}
 .f-social{margin-bottom:20px}
 .f-social a{color:#2f80ed;
    margin-right:10px}
 .f-social a i{margin-right:5px}
 .f-certify{margin-bottom:20px}
 .f-certify a{margin-right:5px;
    display:inline-block;
    vertical-align:top}
 .f-certify a._ncsc img{width:85px}
 .f-website-title{margin-bottom:10px}
 .f-website a{margin-right:10px}
 .copyright{background-color:#f1f1f1;
    padding:15px 0}
 .copyright p{color:#666;
    font-size:12px}
 .top-banner{background-color:#fff;
    display:flex;
    margin-top:10px}
 .top-banner section{display:flex}
 .slider-bannertop{position:relative;
    width:66.67%}
 .slider-bannertop.fullwidth{width:100%}
 .slider-bannertop .item{display:none}
 .slider-bannertop .item img{width:100%}
 .slider-bannertop .item:first-child{display:block}
 .slider-bannertop.owl-theme .owl-page span{height:6px;
    width:6px}
 .slider-bannertop.owl-theme .owl-page.active span{background-color:#fe7705}
 .slider-bannertop .owl-pagination{bottom:5px;
    left:50%;
    position:absolute;
    transform:translateX(-50%)}
 .promote-banner{padding-left:10px;
    width:33.33%;
    display:grid;
    align-content:space-between;
    align-self:stretch;
    padding-top:5px}
 .promote-item{display:block;
    margin-bottom:5px}
 .promote-item:last-child{margin-bottom:0}
 .promote-item img{width:100%}
 .c-checkitem{cursor:pointer;
    display:inline-block;
    margin-right:15px;
    vertical-align:middle}
 .c-checkitem:last-child{margin-right:0}
 .c-checkitem .tick-checkbox{border:1px solid #a6a6a6;
    border-radius:3px;
    margin-right:2px;
    height:16px;
    width:16px}
 .c-checkitem .tick-checkbox,.c-checkitem p{display:inline-block;
    vertical-align:middle}
 .c-checkitem.act-check{position:relative}
 .c-checkitem.act-check::before,.c-checkitem.act-check::after{background-color:#fff;
    bottom:3px;
    border-radius:20px;
    content:'';
 position:absolute;
 width:2px}
 .c-checkitem.act-check::before{height:8px;
    left:4px;
    transform:rotate(-35deg)}
 .c-checkitem.act-check::after{height:12px;
    left:9px;
    transform:rotate(35deg)}
 .c-checkitem.act-check .tick-checkbox{background-color:#4a90e2;
    border:none}
 .nav-list{display:flex;
    flex-wrap:wrap}
 .nav-list a{align-items:center;
    border:1px solid #e0e0e0;
    border-radius:4px;
    box-shadow:0 2px 5px rgba(0,0,0,.1);
    color:#333;
    display:flex;
    justify-content:center;
    font-size:12px;
    line-height:16px;
    min-height:40px;
    margin:0 0 6px 6px;
    padding:5px 0;
    text-align:center;
    width:calc(20% - 5px)}
 .nav-list a:nth-child(5n+1){margin-left:0}
 .show-menu{background-color:#fff;
    height:100%;
    overflow:scroll;
    max-width:640px;
    padding:60px 10px 100px;
    position:fixed;
    top:0;
    transition:.3s;
    right:-100%;
    width:100%;
    z-index:99}
 .show-menu.active{left:0;
    margin:auto;
    right:0}
 .box-fixed{background-color:#fff;
    display:none;
    left:0;
    max-width:640px;
    margin:auto;
    position:fixed;
    padding:10px 10px;
    top:0;
    right:0;
    width:100%;
    z-index:1}
 .box-fixed.active{display:block}
 .btn-closemenu{border:1px solid #e0e0e0;
    border-radius:4px;
    color:#333;
    float:right;
    line-height:21px;
    padding:7px 5px 7px 0;
    position:relative;
    text-align:right;
    width:65px}
 .btn-closemenu::before,.btn-closemenu::after{background-color:#333;
    content:'';
 left:15px;
 height:10px;
 position:absolute;
 top:12px;
 width:1px}
 .btn-closemenu::before{transform:rotate(45deg)}
 .btn-closemenu::after{transform:rotate(-45deg)}
 .show-menu__link{margin:10px 0 5px}
 .show-menu__link .link-item{float:left;
    width:calc(50% - 5px)}
 .show-menu__link .link-item:first-child{margin-right:10px}
 .show-menu__link ul li:last-child{border-bottom:none}
 .show-menu__link .link-item p{font-weight:bold;
    line-height:16px;
    margin-bottom:5px}
 .show-menu__link .link-item li{border-bottom:1px solid #e0e0e0;
    padding:6px 0}
 .show-menu__link .link-item a{color:#333;
    font-size:12px;
    line-height:16px}
 .show-menu .nav-list a{box-shadow:none}
 .txt-history{color:#2f80ed;
    display:inline-block;
    margin:15px 0}
 .txt-tel{margin-bottom:15px}
 .txt-tel a{color:#2f80ed}
 .btn-readmore{border:1px solid #e0e0e0;
    border-radius:4px;
    color:#333;
    display:block;
    line-height:18px;
    margin:0 auto;
    padding:10px;
    text-align:center;
    width:calc(100% - 20px)}
 .btn-readmore span{padding-right:15px;
    position:relative}
 .btn-readmore span::before{content:'';
 height:0;
 position:absolute;
 right:0;
 width:0}
 .btn-readmore.arrowUp span::before{border-left:5px solid transparent;
    border-right:5px solid transparent;
    border-top:5px solid #333;
    top:6px}
 .btn-readmore.arrowRight span::before{border-top:5px solid transparent;
    border-bottom:5px solid transparent;
    border-left:5px solid #333;
    top:4px}
 .txt-readmore{color:#2f80ed;
    font-size:12px;
    line-height:16px;
    position:relative;
    padding-right:8px}
 .txt-readmore.alright{position:absolute;
    top:0;
    right:0}
 .txt-readmore::before{border-top:1px solid #2f80ed;
    border-right:1px solid #2f80ed;
    content:'';
 height:4px;
 position:absolute;
 transform:rotate(45deg);
 top:6px;
 right:0;
 width:4px}
 .breadcrumb{background-color:#fff;
    overflow-x:scroll}
 .breadcrumb li{display:inline-block;
    font-size:12px;
    line-height:17px;
    padding-right:10px;
    position:relative}
 .breadcrumb li::before{border-top:1px solid #666;
    border-right:1px solid #666;
    content:'';
 height:4px;
 position:absolute;
 right:1px;
 transform:rotate(45deg);
 top:6px;
 width:4px}
 .breadcrumb li:last-child::before{display:none}
 .breadcrumb li a{color:#4a90e2}
 .box-scroll{overflow-y:hidden;
    overflow-x:auto;
    -ms-overflow-style:none;
    -ms-scroll-snap-type:mandatory;
    -webkit-overflow-scrolling:touch}
 .c-btnclose{background-color:#fff;
    border:1px solid #e0e0e0;
    border-radius:4px;
    line-height:21px;
    padding:4px 7px;
    position:absolute;
    text-align:right;
    width:66px}
 .c-btnclose::before,.c-btnclose::after{background-color:#333;
    content:'';
 left:14px;
 height:10px;
 position:absolute;
 top:9px;
 width:1px}
 .c-btnclose::before{transform:rotate(45deg)}
 .c-btnclose::after{transform:rotate(-45deg)}
 .c-checkitem{display:inline-block;
    margin-right:15px;
    vertical-align:middle}
 .c-checkitem:last-child{margin-right:0}
 .c-checkitem .tick-checkbox{border:1px solid #a6a6a6;
    border-radius:3px;
    margin-right:2px;
    height:16px;
    width:16px}
 .c-checkitem .tick-checkbox,.c-checkitem p{display:inline-block;
    vertical-align:middle}
 .c-checkitem.act-check{position:relative}
 .c-checkitem.act-check::before,.c-checkitem.act-check::after{background-color:#fff;
    bottom:3px;
    border-radius:20px;
    content:'';
 position:absolute;
 width:2px}
 .c-checkitem.act-check::before{height:8px;
    left:4px;
    transform:rotate(-35deg)}
 .c-checkitem.act-check::after{height:12px;
    left:9px;
    transform:rotate(35deg)}
 .c-checkitem.act-check .tick-checkbox{background-color:#4a90e2;
    border:none}
 .scrolling_inner{position:relative}
 .scrolling_inner.scroll-left::before{background:linear-gradient(to left,rgba(255 255 255/0),rgba(255 255 255/1));
    content:'';
 left:0;
 height:100%;
 position:absolute;
 top:0;
 width:40px;
 z-index:1}
 .scrolling_inner.scroll-right::after{background:linear-gradient(to right,rgba(255 255 255/0),rgba(255 255 255/1));
    content:'';
 height:100%;
 position:absolute;
 top:0;
 right:0;
 width:40px}
 @media only screen and (max-width:412px){.nav-home{max-width:95%}
}
 @media only screen and (max-width:390px){.nav-home{max-width:100%}
}
 .zone-new-bhx .productbox-bhxapi{background-color:#f1f1f1;
    border:6px solid #008847;
    border-top:0;
    background:#008847}
 .zone-new-bhx .productbox-bhxapi *{box-sizing:border-box}
 .zone-new-bhx .productbox-bhxapi .hidden{display:none !important}
 .zone-new-bhx .productbox-bhxapi div.title{display:block;
    color:#fff;
    position:relative;
    font-size:16px;
    background:#008847;
    padding:10px 170px 10px 35px}
 .zone-new-bhx .productbox-bhxapi div.title span.text{color:#fff200}
 .zone-new-bhx .productbox-bhxapi div.title span.text span::before{content:"•";
 margin:0 5px}
 .zone-new-bhx .productbox-bhxapi div.title span.note{display:inline-block}
 .zone-new-bhx .productbox-bhxapi .dotnew{background-color:#ffe66b;
    border-radius:100%;
    display:block;
    left:10px;
    height:8px;
    margin-top:-5px;
    position:absolute;
    top:50%;
    width:8px}
 .zone-new-bhx .productbox-bhxapi .dotnew .animation{border:1px solid #ffe66b;
    background-color:rgba(255,230,107,.2);
    border-radius:100%;
    display:block;
    height:8px;
    opacity:1;
    -moz-animation:sonar 1.25s linear infinite;
    -o-animation:sonar 1.25s linear infinite;
    -webkit-animation:sonar 1.25s linear infinite;
    animation:sonar 1.25s linear infinite;
    width:8px}
 .zone-new-bhx .productbox-bhxapi div.title a{margin-left:2px}
 .zone-new-bhx .productbox-bhxapi div.title img{display:inline-block;
    vertical-align:middle;
    width:auto}
 .zone-new-bhx .productbox-bhxapi div.title span.close{position:absolute;
    margin:auto;
    right:5px;
    cursor:pointer;
    top:50%;
    -ms-transform:translate(-50%,-50%);
    transform:translate(0,-50%);
    font-size:12px;
    color:#fff;
    font-weight:normal}
 .zone-new-bhx .productbox-bhxapi div.title span.close a{color:#fff;
    display:flex;
    align-items:center}
 .zone-new-bhx .productbox-bhxapi div.title span.close a .showtext{margin-right:5px;
    text-align:center}
 .zone-new-bhx .productbox-bhxapi div.title img{display:inline-block;
    vertical-align:middle;
    width:auto}
 .zone-new-bhx .productbox-bhxapi .zone-bhx span.note{font-style:italic;
    font-size:12px;
    color:#fff;
    display:inline-block;
    vertical-align:middle}
 .zone-new-bhx .productbox-bhxapi .zone-new-bhx span.note{font-style:italic;
    font-size:12px;
    color:#fff;
    display:inline-block;
    vertical-align:middle}
 .zone-new-bhx .productbox-bhxapi div.voucherproduct-bhx{display:flex;
    background-color:#008847}
 .zone-new-bhx .productbox-bhxapi div._voucher{background:#fefcea;
    padding:5px 5px 38px 10px;
    max-width:190px;
    position:relative;
    margin:5px 0 5px 5px;
    border-radius:3px}
 .zone-new-bhx .productbox-bhxapi div._voucher .voucher-title{color:#3b864d;
    font-weight:600;
    width:170px}
 .zone-new-bhx .productbox-bhxapi div._voucher .voucher-content{margin-bottom:5px}
 .zone-new-bhx .productbox-bhxapi div._voucher .voucher-error{color:#f00;
    font-size:13px}
 .zone-new-bhx .productbox-bhxapi div._voucher .voucher-note{color:#afafaf;
    font-size:12px;
    line-height:14px;
    text-align:justify;
    position:absolute;
    left:10px;
    right:10px;
    bottom:5px}
 .zone-new-bhx .productbox-bhxapi div._voucher input{padding:7px 20px;
    border-radius:4px;
    border:1px solid #008848;
    width:100%;
    margin-top:9px;
    clear:both;
    box-sizing:border-box;
    height:34px;
    text-indent:initial;
    padding-left:15px}
 .zone-new-bhx .productbox-bhxapi div._voucher input.input-warning{border:1px solid #f00}
 .zone-new-bhx .productbox-bhxapi div._voucher button{width:100%;
    height:34px;
    border:1px solid #bdbdbd;
    border-radius:5px;
    background:#bdbdbd;
    color:#fff;
    margin-top:9px;
    cursor:pointer}
 .zone-new-bhx .productbox-bhxapi div._voucher button:not([disabled]){background:#008848;
    border:#008848}
 .zone-new-bhx .productbox-bhxapi div.voucher-success{position:absolute;
    top:0;
    left:0;
    right:0;
    bottom:0;
    background:#fff}
 .zone-new-bhx .productbox-bhxapi div.voucher-success .s-img{text-align:center;
    margin-top:50px;
    margin-bottom:10px}
 .zone-new-bhx .productbox-bhxapi div.voucher-success .s-img img{display:inline-block}
 .zone-new-bhx .productbox-bhxapi div.voucher-success .s-title{text-align:center;
    margin-bottom:10px}
 .zone-new-bhx .productbox-bhxapi div.voucher-success .s-pm{position:relative;
    padding-left:20px;
    margin-bottom:10px;
    word-wrap:break-word}
 .zone-new-bhx .productbox-bhxapi div.voucher-success .s-pm:before{content:"";
 width:3px;
 height:3px;
 border-radius:50%;
 position:absolute;
 left:10px;
 top:7px;
 background:#000}
 .zone-new-bhx .productbox-bhxapi div._product{display:flex;
    width:calc(100% - 195px);
    padding:0 5px}
 .zone-new-bhx .productbox-bhxapi div._product .productbox-bhxapi-item{position:relative;
    text-align:center;
    width:195px;
    height:316px}
 .zone-new-bhx .productbox-bhxapi div._product .productbox-bhxapi-item a:first-child{padding:5px;
    position:relative;
    display:block;
    height:100%}
 .zone-new-bhx .productbox-bhxapi div._product,.zone-new-bhx .productbox-bhxapi-item a img{width:100%;
    height:100%;
    border-radius:3px}
 .zone-new-bhx .productbox-bhxapi div>a>span{position:relative;
    display:-webkit-box;
    -webkit-box-orient:vertical;
    -webkit-line-clamp:2;
    height:36px;
    margin:0;
    width:100%;
    font-size:12px;
    text-overflow:ellipsis;
    overflow:hidden;
    color:#333;
    line-height:18px}
 .zone-new-bhx .productbox-bhxapi div._product .productbox-bhxapi-item.viewmore-bhx a>span{font-size:13px}
 .zone-new-bhx .productbox-bhxapi div>a .productbox-bhxapi-item-img{height:auto;
    width:100px;
    margin:auto}
 .zone-new-bhx .productbox-bhxapi div>a .productbox-bhxapi-item-img img{width:100%;
    height:auto;
    margin:10px auto}
 .zone-new-bhx .productbox-bhxapi div>a .zone-price{font-size:14px;
    margin-top:5px}
 .zone-new-bhx .productbox-bhxapi div>a .zone-price .after-price{color:#d12c1f;
    display:block;
    font-size:16px}
 .zone-new-bhx .productbox-bhxapi div>a .zone-price .before-price{color:#666;
    display:inline-block;
    text-decoration:line-through;
    font-weight:normal}
 .zone-new-bhx .productbox-bhxapi div>a .zone-price .percent-price{color:#dd1c1a;
    display:inline-block}
 .zone-new-bhx .productbox-bhxapi div .zone-buy{position:absolute;
    color:#007e3c;
    padding:4px 19px;
    border:1px solid #008847;
    border-radius:4px;
    margin:5px;
    left:0;
    right:0;
    bottom:5px;
    text-align:center}
 .owl-carousel .owl-item .owl-lazy.lazyloaded{opacity:1}
 .imgzalo img{max-width:18px;
    margin-top:-5px;
    vertical-align:middle}
 a.imgzalo{margin-right:0}
 #status-icon:before,.lhc-icon-online:before{background-image:url(https://cdn.tgdd.vn/mwgcart/mwgcore/ContentMwg/images/homev2/desk/chat.webp);
    background-size:38px 38px;
    background-repeat:no-repeat;
    content:'';
 height:48px;
 position:absolute;
 width:48px}
 .survey-wrap{max-width:480px;
    margin:40px auto 0}
 .survey-wrap .question-name{white-space:normal}
 .survey-wrap .surver-text-hasIcon.svelte-13ainzo.svelte-13ainzo{white-space:normal}
 .survey-wrap .survey-system-question-form-AVAKids .crmsurvey-btnanswer-icon span{font-weight:normal}
 .zalo-chat-widget{bottom:36px !important;
    right:16px !important;
    z-index:1 !important}
 .theme-xmas .iconnewglobal-logo{background-image:url('https://cdn.tgdd.vn/2023/12/campaign/DesktopTGDD2023-486x108.png');
 height:52px;
 width:229px;
 background-repeat:no-repeat;
 background-size:229px 52px;
 background-position:unset}
 @media screen and (min-width:1440px){.theme-xmas.header:before{content:'';
 background-size:100%;
 width:355px;
 height:120px;
 position:absolute;
 z-index:2;
 background-image:url('https://cdn.tgdd.vn/2023/12/campaign/header-rope-left-23-371x150.png');
 right:calc((100% - 1200px)/2 + 1200px);
 top:0;
 background-repeat:no-repeat}
 .theme-xmas.header:after{content:'';
 height:120px;
 position:absolute;
 z-index:2;
 background-image:url('https://cdn.tgdd.vn/2023/12/campaign/header-rope-right-23-355x120.png');
 top:0;
 left:calc((100% - 1200px)/2 + 1196px);
 background-repeat:no-repeat;
 width:calc((100% - 1200px)/2);
 background-size:auto 100%}
 .theme-xmas.header{position:relative}
}
 .suggestSearchUsed{background:#fff;
    border-radius:6px;
    box-shadow:0 1px 8px rgba(0,0,0,.3);
    position:relative;
    overflow:hidden}
 .suggestSearchUsed::before{content:'';
 width:0;
 height:0;
 position:absolute;
 bottom:100%;
 left:30%;
 border-bottom:10px solid #eee;
 border-left:10px solid transparent;
 border-right:10px solid transparent}
 .suggestSearchUsed .title{background:#f5f5f5;
    font-size:13px;
    color:#666;
    font-weight:400;
    padding:10px}
 .suggestSearchUsed li{padding:10px;
    border-bottom:1px solid #eee}
 .suggestSearchUsed li a{display:flex;
    color:#333}
 .suggestSearchUsed li .thumb{margin:0 20px 0 0}
 .suggestSearchUsed li .thumb img{width:60px;
    height:60px;
    object-fit:contain}
 .suggestSearchUsed li .info .name{display:-webkit-box;
    -webkit-box-orient:vertical;
    -webkit-line-clamp:2;
    color:#333;
    font-size:14px;
    overflow:hidden}
 .suggestSearchUsed li .info .price-percent,.suggestSearchUsed li .info .new-price{margin-top:4px}
 .suggestSearchUsed li .info .price-percent .price strong{color:#e83a45}
 .suggestSearchUsed li .info .price-percent .discount-percent{margin-left:18px;
    padding:2px 6px;
    background:#fff0e9;
    font-size:12px;
    color:#eb5757;
    display:inline-block;
    position:relative}
 .suggestSearchUsed li .info .price-percent .discount-percent:before{border-color:transparent transparent #fff0e9;
    border-style:solid;
    border-width:0 10px 9px 11px;
    content:"";
 height:0;
 position:absolute;
 width:0;
 transform:rotate(270deg);
 top:6px;
 left:-15px}
 .dot-stretching{position:relative;
    width:10px;
    height:10px;
    border-radius:5px;
    background-color:#288ad6;
    color:#288ad6;
    transform:scale(1.25,1.25);
    animation:dotStretching 2s infinite ease-in;
    text-align:left}
 .dot-stretching::before{width:10px;
    height:10px;
    border-radius:5px;
    background-color:#288ad6;
    color:#288ad6;
    animation:dotStretchingBefore 2s infinite ease-in}.dot-stretching::after{width:10px;
    height:10px;
    border-radius:5px;
    background-color:#288ad6;
    color:#288ad6;
    animation:dotStretchingAfter 2s infinite ease-in}.dot-stretching::before,.dot-stretching::after{content:'';
 display:inline-block;
 position:absolute;
 top:0}#preloader{position:absolute;
    top:0;
    left:0;
    right:0;
    margin:0 auto;
    width:100%;
    height:100%;
    display:none;
    z-index:1;
    background:rgba(255,255,255,.75)}.preloader{position:absolute;
    top:0;
    left:0;
    right:0;
    margin:0 auto;
    width:100%;
    height:100%;
    display:none;
    z-index:999;
    background:rgba(255,255,255,.75)}.load{display:block;
    width:20px;
    height:20px;
    border:5px solid #fff;
    border-top:5px solid transparent;
    -webkit-animation:load-animate infinite linear 1s;
    animation:load-animate infinite linear 1s;
    border-radius:100%}.overlay{position:fixed;
    top:0;
    left:0;
    right:0;
    margin:0 auto;
    width:100%;
    height:100%;
    display:none;
    z-index:99;
    background:rgba(255,255,255,.75)}#loader{display:block;
    position:relative;
    left:0;
    right:0;
    margin:0 auto;
    width:80px;
    height:80px}#loader:after{content:"";
 position:absolute;
 top:0;
 left:0;
 right:0;
 bottom:0;
 margin:0 auto;
 background:url(https://cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/logo.png) no-repeat center;
 background-size:45%;
 border-radius:50%;
 margin:0;
 background-color:#f8c5468c}#loader:before{content:"";
 display:block;
 position:absolute;
 left:-3px;
 top:-3px;
 width:100%;
 height:100%;
 margin:0 auto;
 border-radius:50%;
 border:3px solid transparent;
 border-top-color:#f8c546;
 -webkit-animation:spin 1s linear infinite;
 animation:spin 1s linear infinite;
 z-index:1}body.dmx-site #loader:after{background-color:#288ad68f}body.dmx-site #loader:before{border-top-color:#288ad6}.desktop #loader{top:15%}.loaderweb{display:block;
    position:relative;
    left:50%;
    top:50%;
    width:80px;
    height:80px;
    margin:-75px 0 0 -50px;
    border-radius:50%;
    border:3px solid transparent;
    border-top-color:#000;
    -webkit-animation:spin 2s linear infinite;
    animation:spin 2s linear infinite}.loaderweb:before{content:"";
 position:absolute;
 top:5px;
 left:5px;
 right:5px;
 bottom:5px;
 border-radius:50%;
 border:3px solid transparent;
 border-top-color:#8e8e8e;
 -webkit-animation:spin 3s linear infinite;
 animation:spin 3s linear infinite}.loaderweb:after{content:"";
 position:absolute;
 top:15px;
 left:15px;
 right:15px;
 bottom:15px;
 border-radius:50%;
 border:3px solid transparent;
 border-top-color:#000;
 -webkit-animation:spin 1.5s linear infinite;
 animation:spin 1.5s linear infinite}.desktop .loaderweb{top:15%}#progressTop{position:fixed;
    z-index:99;
    top:0;
    left:-6px;
    width:1%;
    height:5px;
    background-color:#288ad6;
    -moz-border-radius:1px;
    -webkit-border-radius:1px;
    border-radius:1px;
    -moz-transition:width 3000ms ease-out,opacity 500ms linear;
    -ms-transition:width 3000ms ease-out,opacity 500ms linear;
    -o-transition:width 3000ms ease-out,opacity 500ms linear;
    -webkit-transition:width 600ms ease-out,opacity 500ms linear;
    transition:width 5000ms ease-out,opacity 500ms linear}#progressTop b,#progressTop i{position:absolute;
    top:0;
    height:3px;
    -moz-box-shadow:#777 1px 0 6px 1px;
    -ms-box-shadow:#777 1px 0 6px 1px;
    -webkit-box-shadow:#777 1px 0 6px 1px;
    box-shadow:#777 1px 0 6px 1px;
    -moz-border-radius:100%;
    -webkit-border-radius:100%;
    border-radius:100%}.bubblingG{text-align:center;
    width:99%;
    height:40px;
    margin:auto;
    position:absolute;
    top:0;
    left:0;
    right:0;
    background-color:rgba(255,255,255,.75);
    z-index:1}.bubblingG span{display:inline-block;
    vertical-align:middle;
    width:7px;
    height:7px;
    margin:25px 3px;
    background:#fff;
    border-radius:49px;
    -o-border-radius:49px;
    -ms-border-radius:49px;
    -webkit-border-radius:49px;
    -moz-border-radius:49px;
    animation:bubblingG 1.5s infinite alternate;
    -o-animation:bubblingG 1.5s infinite alternate;
    -ms-animation:bubblingG 1.5s infinite alternate;
    -webkit-animation:bubblingG 1.5s infinite alternate;
    -moz-animation:bubblingG 1.5s infinite alternate}.view-more .bubblingG span{animation:bubblingG-black 1.5s infinite alternate;
    -o-animation:bubblingG-black 1.5s infinite alternate;
    -ms-animation:bubblingG-black 1.5s infinite alternate;
    -webkit-animation:bubblingG-black 1.5s infinite alternate;
    -moz-animation:bubblingG-black 1.5s infinite alternate}#bubblingG_1{animation-delay:0s;
    -o-animation-delay:0s;
    -ms-animation-delay:0s;
    -webkit-animation-delay:0s;
    -moz-animation-delay:0s}#bubblingG_2{animation-delay:.45s;
    -o-animation-delay:.45s;
    -ms-animation-delay:.45s;
    -webkit-animation-delay:.45s;
    -moz-animation-delay:.45s}#bubblingG_3{animation-delay:.9s;
    -o-animation-delay:.9s;
    -ms-animation-delay:.9s;
    -webkit-animation-delay:.9s;
    -moz-animation-delay:.9s}.loaderLocation{border:2px solid #f3f3f3;
    border-radius:50%;
    border-top:2px solid #222;
    width:20px;
    height:20px;
    -webkit-animation:spin 2s linear infinite;
    animation:spin 2s linear infinite;
    position:absolute;
    top:3px;
    left:20%}.lds-ellipsis{display:block;
    position:relative;
    width:80px;
    height:80px;
    margin:auto}.lds-ellipsis div{position:absolute;
    top:33px;
    width:13px;
    height:13px;
    border-radius:50%;
    background:#1aa1db;
    animation-timing-function:cubic-bezier(0,1,1,0)}.lds-ellipsis div:nth-child(1){left:8px;
    animation:lds-ellipsis1 .6s infinite}.lds-ellipsis div:nth-child(2){left:8px;
    animation:lds-ellipsis2 .6s infinite}.lds-ellipsis div:nth-child(3){left:32px;
    animation:lds-ellipsis2 .6s infinite}.lds-ellipsis div:nth-child(4){left:56px;
    animation:lds-ellipsis3 .6s infinite}@keyframes lds-ellipsis1{0%{transform:scale(0)}100%{transform:scale(1)}}@keyframes lds-ellipsis3{0%{transform:scale(1)}100%{transform:scale(0)}}@keyframes lds-ellipsis2{0%{transform:translate(0,0)}100%{transform:translate(24px,0)}}@-webkit-keyframes spin{0%{-webkit-transform:rotate(0deg)}100%{-webkit-transform:rotate(360deg)}}@keyframes spin{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}@keyframes bubblingG{0%{width:7px;
    height:7px;
    background-color:#fff;
    transform:translateY(0)}100%{width:17px;
    height:17px;
    background-color:#288ad6;
    transform:translateY(-20px)}}@-o-keyframes bubblingG{0%{width:7px;
    height:7px;
    background-color:#fff;
    -o-transform:translateY(0);
}100%{width:17px;
    height:17px;
    background-color:#288ad6;
    -o-transform:translateY(-20px);
}}@-ms-keyframes bubblingG{0%{width:7px;
    height:7px;
    background-color:#fff;
    -ms-transform:translateY(0)}100%{width:17px;
    height:17px;
    background-color:#288ad6;
    -ms-transform:translateY(-20px)}}@-webkit-keyframes bubblingG{0%{width:7px;
    height:7px;
    background-color:#fff;
    -webkit-transform:translateY(0)}100%{width:17px;
    height:17px;
    background-color:#288ad6;
    -webkit-transform:translateY(-20px)}}@-moz-keyframes bubblingG{0%{width:7px;
    height:7px;
    background-color:#fff;
    -moz-transform:translateY(0)}100%{width:17px;
    height:17px;
    background-color:#288ad6;
    -moz-transform:translateY(-20px)}}@keyframes bubblingG-black{0%{width:7px;
    height:7px;
    background-color:#fff;
    transform:translateY(0)}100%{width:17px;
    height:17px;
    background-color:#333;
    transform:translateY(-20px)}}@-o-keyframes bubblingG-black{0%{width:7px;
    height:7px;
    background-color:#fff;
    -o-transform:translateY(0);
}100%{width:17px;
    height:17px;
    background-color:#333;
    -o-transform:translateY(-20px);
}}@-ms-keyframes bubblingG-black{0%{width:7px;
    height:7px;
    background-color:#fff;
    -ms-transform:translateY(0)}100%{width:17px;
    height:17px;
    background-color:#333;
    -ms-transform:translateY(-20px)}}@-webkit-keyframes bubblingG-black{0%{width:7px;
    height:7px;
    background-color:#fff;
    -webkit-transform:translateY(0)}100%{width:17px;
    height:17px;
    background-color:#333;
    -webkit-transform:translateY(-20px)}}@-moz-keyframes bubblingG-black{0%{width:7px;
    height:7px;
    background-color:#fff;
    -moz-transform:translateY(0)}100%{width:17px;
    height:17px;
    background-color:#333;
    -moz-transform:translateY(-20px)}}@-webkit-keyframes bounce{0%{transform:scale(0)}14%{transform:scale(1.15)}28%{transform:scale(1)}42%{transform:scale(1.15)}70%{transform:scale(1)}100%{transform:scale(1)}}@keyframes bounce{0%{transform:scale(0)}14%{transform:scale(1.15)}28%{transform:scale(1)}42%{transform:scale(1.15)}70%{transform:scale(1)}100%{transform:scale(1)}}@keyframes load-animate{0%{transform:rotate(0deg)}50%{transform:rotate(180deg);
    opacity:.35}100%{transform:rotate(360deg)}}@keyframes dotStretching{0%{transform:scale(1.25,1.25)}50%,60%{transform:scale(.8,.8)}100%{transform:scale(1.25,1.25)}}@keyframes dotStretchingBefore{0%{transform:translate(0) scale(.7,.7)}50%,60%{transform:translate(-20px) scale(1,1)}100%{transform:translate(0) scale(.7,.7)}}@keyframes dotStretchingAfter{0%{transform:translate(0) scale(.7,.7)}50%,60%{transform:translate(20px) scale(1,1)}100%{transform:translate(0) scale(.7,.7)}}@-webkit-keyframes spin{0%{-webkit-transform:rotate(0deg);
    -ms-transform:rotate(0deg);
    transform:rotate(0deg)}100%{-webkit-transform:rotate(360deg);
    -ms-transform:rotate(360deg);
    transform:rotate(360deg)}}@keyframes spin{0%{-webkit-transform:rotate(0deg);
    -ms-transform:rotate(0deg);
    transform:rotate(0deg)}100%{-webkit-transform:rotate(360deg);
    -ms-transform:rotate(360deg);
    transform:rotate(360deg)}}@-webkit-keyframes sonar{0%{opacity:1;
    -webkit-transform:scale(1);
    transform:scale(1)}100%{-webkit-transform:scale(4);
    transform:scale(4);
    opacity:0}}@keyframes sonar{0%{opacity:1;
    -webkit-transform:scale(1);
    transform:scale(1)}100%{-webkit-transform:scale(4);
    transform:scale(4);
    opacity:0}}@keyframes load-effect{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}@keyframes shutdown{8%,46%{transform:scale(1,1);
    opacity:1}50%{transform:scale(1,.02);
    opacity:.8}55%,100%{transform:scale(0,0);
    opacity:.3}}.falling-container{display:block}.falling-item{color:#fff;
    font-size:1em;
    font-family:Arial}.falling-item{position:fixed;
    top:-10%;
    z-index:9999;
    -webkit-user-select:none;
    -moz-user-select:none;
    -ms-user-select:none;
    user-select:none;
    cursor:default;
    -webkit-animation-name:snowflakes-fall,snowflakes-shake;
    -webkit-animation-duration:10s,3s;
    -webkit-animation-timing-function:linear,ease-in-out;
    -webkit-animation-iteration-count:infinite,infinite;
    -webkit-animation-play-state:running,running;
    animation-name:snowflakes-fall,snowflakes-shake;
    animation-duration:10s,3s;
    animation-timing-function:linear,ease-in-out;
    animation-iteration-count:infinite,infinite;
    animation-play-state:running,running}.falling-item:nth-of-type(0){left:1%;
    -webkit-animation-delay:0s,0s;
    animation-delay:0s,0s}.falling-item:nth-of-type(1){left:10%;
    -webkit-animation-delay:1s,1s;
    animation-delay:1s,1s}.falling-item:nth-of-type(2){left:20%;
    -webkit-animation-delay:6s,.5s;
    animation-delay:6s,.5s}.falling-item:nth-of-type(3){left:30%;
    -webkit-animation-delay:4s,2s;
    animation-delay:4s,2s}.falling-item:nth-of-type(4){left:40%;
    -webkit-animation-delay:2s,2s;
    animation-delay:2s,2s}.falling-item:nth-of-type(5){left:50%;
    -webkit-animation-delay:8s,3s;
    animation-delay:8s,3s}.falling-item:nth-of-type(6){left:60%;
    -webkit-animation-delay:6s,2s;
    animation-delay:6s,2s}.falling-item:nth-of-type(7){left:70%;
    -webkit-animation-delay:2.5s,1s;
    animation-delay:2.5s,1s}.falling-item:nth-of-type(8){left:80%;
    -webkit-animation-delay:1s,0s;
    animation-delay:1s,0s}.falling-item:nth-of-type(9){left:90%;
    -webkit-animation-delay:3s,1.5s;
    animation-delay:3s,1.5s}@-webkit-keyframes snowflakes-fall{0%{top:-10%}100%{top:100%}}@-webkit-keyframes snowflakes-shake{0%{-webkit-transform:translateX(0);
    transform:translateX(0)}50%{-webkit-transform:translateX(80px);
    transform:translateX(80px)}100%{-webkit-transform:translateX(0);
    transform:translateX(0)}}@keyframes snowflakes-fall{0%{top:-10%}100%{top:100%}}@keyframes snowflakes-shake{0%{transform:translateX(0)}50%{transform:translateX(80px)}100%{transform:translateX(0)}}.falling-item{background-size:100%;
    background-repeat:no-repeat}.falling-item:nth-of-type(1){left:10%;
    -webkit-animation-delay:6s,.5s;
    animation-delay:6s,.5s;
    font-size:2.5em}.falling-item:nth-of-type(2){left:20%;
    -webkit-animation-delay:5s,5.5s;
    animation-delay:5s,5.5s;
    font-size:1.9em}.falling-item:nth-of-type(3){left:40%;
    -webkit-animation-delay:4s,2s;
    animation-delay:4s,2s;
    font-size:2.4em}.falling-item:nth-of-type(4){left:50%;
    -webkit-animation-delay:3s,1.5s;
    animation-delay:3s,1.5s;
    font-size:2.1em}.falling-item:nth-of-type(5){left:80%;
    -webkit-animation-delay:2s,2s;
    animation-delay:2s,2s;
    font-size:2.3em}.falling-item:nth-of-type(6){left:90%;
    -webkit-animation-delay:1s,0s;
    animation-delay:1s,0s;
    font-size:2.2em}@keyframes flickerAnimation{0%{opacity:1}50%{opacity:0}100%{opacity:1}}@-o-keyframes flickerAnimation{0%{opacity:1;
}50%{opacity:0;
}100%{opacity:1;
}}@-moz-keyframes flickerAnimation{0%{opacity:1}50%{opacity:0}100%{opacity:1}}@-webkit-keyframes flickerAnimation{0%{opacity:1}50%{opacity:0}100%{opacity:1}}.animate-flicker{-webkit-animation:flickerAnimation .5s infinite;
    -moz-animation:flickerAnimation .5s infinite;
    -o-animation:flickerAnimation .5s infinite;
    animation:flickerAnimation .5s infinite}@keyframes lighting{0%{content:url(//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/noel/light-pine-tree.png)}100%{content:url(//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/noel/pine-tree.png)}}.theme-xmas .pine-tree img{width:10%;
    position:fixed;
    z-index:-1}.theme-xmas .pine-tree-left{bottom:0;
    cursor:pointer;
    z-index:-1;
    animation:lighting 1s infinite;
    transform:matrix(-.99,-.14,-.14,.99,0,0);
    right:93.5vw}.theme-xmas .pine-tree-right{bottom:0;
    left:93.5vw;
    cursor:pointer;
    z-index:-1;
    animation:lighting 1s infinite;
    transform:rotate(-8.21deg)}.theme-xmas .pine-tree .santa-left{bottom:0;
    left:1vw;
    cursor:pointer;
    z-index:-1;
    width:6vw}.theme-xmas .pine-tree .santa-right{bottom:0;
    right:0;
    cursor:pointer;
    z-index:-1;
    width:3vw}.theme-xmas .snowfall{position:fixed;
    pointer-events:none;
    z-index:2}
 .owl-carousel{display:none;
    width:100%;
    -webkit-tap-highlight-color:transparent;
    position:relative;
    z-index:1}
 .owl-carousel .owl-stage{position:relative;
    -ms-touch-action:pan-Y;
    touch-action:manipulation;
    -moz-backface-visibility:hidden}
 .owl-carousel .owl-stage:after{content:".";
 display:block;
 clear:both;
 visibility:hidden;
 line-height:0;
 height:0}
 .owl-carousel .owl-stage-outer{position:relative;
    overflow:hidden;
    -webkit-transform:translate3d(0,0,0)}
 .owl-carousel .owl-wrapper,.owl-carousel .owl-item{-webkit-backface-visibility:hidden;
    -moz-backface-visibility:hidden;
    -ms-backface-visibility:hidden;
    -webkit-transform:translate3d(0,0,0);
    -moz-transform:translate3d(0,0,0);
    -ms-transform:translate3d(0,0,0)}
 .owl-carousel .owl-item{position:relative;
    min-height:1px;
    float:left;
    -webkit-backface-visibility:hidden;
    -webkit-tap-highlight-color:transparent;
    -webkit-touch-callout:none}
 .owl-carousel .owl-item img{display:block;
    width:100%}
 .owl-carousel .owl-nav.disabled,.owl-carousel .owl-dots.disabled{display:none}
 .owl-carousel .owl-nav .owl-prev,.owl-carousel .owl-nav .owl-next,.owl-carousel .owl-dot{cursor:pointer;
    -webkit-user-select:none;
    -khtml-user-select:none;
    -moz-user-select:none;
    -ms-user-select:none;
    user-select:none}
 .owl-carousel .owl-nav button.owl-prev,.owl-carousel .owl-nav button.owl-next,.owl-carousel button.owl-dot{background:none;
    color:inherit;
    border:none;
    padding:0 !important;
    font:inherit}
 .owl-carousel.owl-loaded{display:block}
 .owl-carousel.owl-loading{opacity:0;
    display:block}
 .owl-carousel.owl-hidden{opacity:0}
 .owl-carousel.owl-refresh .owl-item{visibility:hidden}
 .owl-carousel.owl-drag .owl-item{-ms-touch-action:pan-y;
    touch-action:pan-y;
    -webkit-user-select:none;
    -moz-user-select:none;
    -ms-user-select:none;
    user-select:none}
 .owl-carousel.owl-grab{cursor:move;
    cursor:grab}
 .owl-carousel.owl-rtl{direction:rtl}
 .owl-carousel.owl-rtl .owl-item{float:right}
 .no-js .owl-carousel{display:block}
 .owl-carousel .animated{animation-duration:1000ms;
    animation-fill-mode:both}
 .owl-carousel .owl-animated-in{z-index:0}
 .owl-carousel .owl-animated-out{z-index:1}
 .owl-carousel .fadeOut{animation-name:fadeOut}
 @keyframes fadeOut{0%{opacity:1}
 100%{opacity:0}
}
 .owl-height{transition:height 500ms ease-in-out}
 .owl-carousel .owl-item .owl-lazy{opacity:0;
    transition:opacity 400ms ease}
 .owl-carousel .owl-item .owl-lazy[src^=""],.owl-carousel .owl-item .owl-lazy:not([src]){max-height:0}
 .owl-carousel .owl-item img.owl-lazy{transform-style:preserve-3d}
 .owl-carousel .owl-video-wrapper{position:relative;
    height:100%;
    background:#000}
 .owl-carousel .owl-video-play-icon{position:absolute;
    height:80px;
    width:80px;
    left:50%;
    top:50%;
    margin-left:-40px;
    margin-top:-40px;
    background:url("../Category/owl.video.play.png") no-repeat;
 cursor:pointer;
 z-index:1;
 -webkit-backface-visibility:hidden;
 transition:transform 100ms ease}
 .owl-carousel .owl-video-play-icon:hover{-ms-transform:scale(1.3,1.3);
    transform:scale(1.3,1.3)}
 .owl-carousel .owl-video-playing .owl-video-tn,.owl-carousel .owl-video-playing .owl-video-play-icon{display:none}
 .owl-carousel .owl-video-tn{opacity:0;
    height:100%;
    background-position:center center;
    background-repeat:no-repeat;
    background-size:contain;
    transition:opacity 400ms ease}
 .owl-carousel .owl-video-frame{position:relative;
    z-index:1;
    height:100%;
    width:100%}
 .owl-theme .owl-nav{margin-top:10px;
    text-align:center;
    -webkit-tap-highlight-color:transparent}
 .owl-theme .owl-nav [class*='owl-']{color:#fff;
    font-size:14px;
    margin:5px;
    padding:4px 7px;
    background:#d6d6d6;
    display:inline-block;
    cursor:pointer;
    border-radius:3px}
 .owl-theme .owl-nav [class*='owl-']:hover{background:#869791;
    color:#fff;
    text-decoration:none}
 .owl-theme .owl-nav .disabled{
     opacity:.5;
     cursor:default}
 .owl-theme .owl-nav.disabled+.owl-dots{
    margin-bottom:10px;
    background:#fff}
 .owl-theme .owl-dots{ 
    text-align:center;
    -webkit-tap-highlight-color:transparent}
 .owl-theme .owl-dots .owl-dot{
    display:inline-block;
    zoom:1;*display: inline}
 .owl-theme .owl-dots .owl-dot span{width:10px;
    height:10px;
    margin:5px 7px;
    background:#d6d6d6;
    display:block;
    webkit-backface-visibility:visible;
    transition:opacity 200ms ease;
    border-radius:30px}
 .owl-theme .owl-dots .owl-dot.active span,.owl-theme .owl-dots .owl-dot:hover span{background:#869791}
 .stickcompare{display:none;
    width:100%;
    max-width:400px;
    margin:auto;
    position:fixed;
    left:0;
    right:0;
    border-radius:10px;
    top:10%;
    z-index:100;
    background:#fff;
    box-shadow:0 -2px 10px rgba(0,0,0,.12)}
 .bg-black .stickcompare{z-index:1}
 .stickcompare .cp-top{padding:16px 10px 9px;
    text-align:center;
    position:relative}
 .cp-top a.clearall{position:absolute;
    right:10px;
    top:10px;
    padding:5px 5px 5px 25px;
    border:1px solid #d1d1d1;
    border-radius:5px;
    color:#000}
 .cp-top a.clearall i{position:absolute;
    left:7px;
    top:8px}
 .cp-top h3{font-weight:bold;
    color:#000}
 ul.listcompare{display:grid;
    grid-auto-rows:minmax(min-content,max-content);
    grid-template-columns:repeat(1,minmax(0,1fr));
    overflow:hidden;
    width:100%;
    border-top:1px solid #e5e5e5;
    border-bottom:1px solid #e5e5e5}
 .listcompare li{overflow:visible;
    position:relative;
    padding-top:7px;
    width:80%;
    display:block;
    margin:0 auto}
 .listcompare li img{width:70px;
    height:auto;
    max-height:80px;
    margin:5px;
    object-fit:contain}
 .listcompare h3{overflow:hidden;
    line-height:1.6em;
    color:#333;
    font-weight:normal;
    font-size:13px;
    height:33px;
    margin:5px 0 5px 10px;
    display:-webkit-box;
    -webkit-line-clamp:2;
    -webkit-box-orient:vertical;
    text-overflow:ellipsis;
    line-height:1.3em;
    text-align:center}
 .listcompare a{display:flex;
    overflow:hidden;
    padding:10px 0 5px;
    align-content:center}
 .listcompare li.formsg{margin:10px 40px;
    border:dashed 2px #bdbdbd;
    border-radius:10px;
    padding:5px 0}
 .listcompare span{position:absolute;
    top:20px;
    right:-20px;
    width:14px;
    height:20px;
    cursor:pointer}
 .listcompare .cp-plus{display:block;
    width:55px;
    height:auto;
    padding:10px;
    text-align:center;
    font-size:30px;
    color:#666;
    background:#fff;
    border-radius:5px;
    cursor:default;
    margin:0 auto}
 .listcompare .cp-plus>i{display:block;
    margin:0 auto;
    background:url(https://cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/ic-image.png) no-repeat;
    background-size:100% auto;
    width:100%;
    height:26px}
 .overlay.v2{background:rgba(0,0,0,.75)}
 .listcompare li.formsg>label{display:block;
    padding:5px;
    text-align:center;
    color:#666}
 .closecompare{overflow:hidden;
    position:relative}
 .closecompare a{display:block;
    text-align:center;
    margin:10px auto;
    width:50%;
    padding:12px 0;
    border-radius:10px;
    font-size:14px;
    color:#2f80ed}
 .closecompare a.onlyone{width:100%}
 .closecompare a.doss{background:#2f80ed;
    color:#fff;
    font-size:14px}
 .closecompare a.doss.prevent{color:#ddd;
    opacity:.3;
    -moz-opacity:.3;
    -khtml-opacity:.3}
 #suggestss{position:relative}
 #suggestss .addcompare{position:fixed;
    width:90%;
    height:230px;
    display:block;
    bottom:0;
    top:0;
    margin:auto;
    left:0;
    right:0;
    background:#fff;
    border-radius:4px;
    z-index:21000;
    overflow:hidden;
    -webkit-overflow-scrolling:touch}
 label.error{color:#d0021c;
    font-size:13px;
    line-height:21px;
    display:block;
    margin:10px 12px 0;
    opacity:.1;
    text-align:center}
 .addcompare #kcc{display:block;
    margin:10px auto;
    width:95%;
    background:rgba(142,142,147,.12);
    border:0;
    border-radius:8px;
    padding:10px 27px 10px 32px}
 input[type=text],input[type=tel],textarea{-webkit-appearance:none}
 .addcompare .closeacp{position:absolute;
    top:5px;
    right:5px;
    font-size:20px;
    color:#666}
 .addcompare .autocomplete{padding:10px;
    height:152px;
    overflow:auto;
    width:100% !important;
    background:#fff;
    position:absolute;
    z-index:100}
 .addcompare .autocomplete li{font-size:14px;
    margin-bottom:5px;
    cursor:pointer}
 .addcompare .autocomplete li span{display:block;
    overflow:hidden;
    color:#333;
    text-overflow:ellipsis;
    white-space:nowrap;
    line-height:1.5}
 .addcompare .autocomplete li p{color:#d0021b;
    display:inline-block;
    vertical-align:middle}
 .addcompare .autocomplete li .oldprice{text-decoration:line-through}
 .close-comppare{position:absolute;
    right:7px;
    top:-30px}
 .close-comppare span{background:#fff;
    border:1px solid #e0e0e0;
    box-sizing:border-box;
    border-radius:4px;
    padding:5px 15px}
 .input-text{position:relative}
 .input-text i{position:absolute}
 .input-text i.iconcate-closess{right:17px;
    top:13px;
    display:none;
    cursor:pointer}
 .input-text i.iconcate-search{left:20px;
    top:11px;
    display:block}
 .iconcate-closess{background-position:-40px -75px;
    height:12px !important;
    width:12px !important}
 .iconcate-search{background-position:-145px 0;
    width:16px !important;
    height:16px !important;
    vertical-align:text-bottom;
    margin-right:2px}
 .popup-button{position:fixed;
    bottom:25px;
    left:15px;
    z-index:2}
 .bg-black .popup-button{z-index:0}
 a#ss-now{padding:10px 10px;
    background:#fff;
    border-radius:30px;
    box-shadow:0 0 15px #999;
    display:none}
 #ss-now .stage{width:90%}
 a#ss-now span label{color:#288ad6}
 #loading-compare{position:absolute;
    display:block;
    top:0;
    left:0;
    right:0;
    bottom:0;
    background-color:rgba(255,255,255,.75);
    z-index:1000}
 #loading-compare .csslder{top:23%}
 .stickcompare .iconcate-closess{background-position:-40px -75px;
    height:12px !important;
    width:12px !important}
 .stickcompare .iconcate-search{background-position:-145px 0;
    width:16px !important;
    height:16px !important;
    vertical-align:text-bottom;
    margin-right:2px}
 #ss-now{color:#288ad6}
 .popup-button .iconcate-ss{background-position:-242px -97px;
    width:16px !important;
    height:15px !important;
    vertical-align:text-bottom !important;
    margin-right:2px}
 .stage{display:flex;
    justify-content:center;
    align-items:center;
    position:absolute;
    top:0;
    bottom:0;
    left:0;
    right:0;
    margin:0 auto;
    background-color:rgba(255,255,255,.75)}
 @keyframes fx{50%{-webkit-transform:scale(1);
    transform:scale(1);
    opacity:1}
 100%{opacity:0}
}
 .stickcompare.stickcompare_new{max-width:1178px;
    top:unset;
    bottom:0;
    border-radius:0;
    border-top:1px solid #e5e5e5}
 .stickcompare.stickcompare_new a.clearall{position:absolute;
    right:0;
    top:-39px;
    padding:10px 30px 10px 10px;
    border-radius:8px 8px 0 0;
    color:#000;
    background:#fff;
    box-shadow:0 -2px 10px #0000001f}
 .stickcompare.stickcompare_new a.clearall i{background:unset;
    left:unset;
    right:25px;
    top:19px;
    bottom:0;
    margin:auto;
    width:unset !important;
    height:unset !important;
    position:absolute}
 .stickcompare.stickcompare_new a.clearall i:after,.stickcompare.stickcompare_new a.clearall i:before{content:"";
 width:10px;
 height:1px;
 background:#333;
 margin-right:5px;
 transform:rotate(45deg);
 position:absolute}
 .stickcompare.stickcompare_new a.clearall i:after{transform:rotate(-45deg);
    left:7px}
 .stickcompare.stickcompare_new ul.listcompare{display:inline-flex;
    width:calc(100% - 25%);
    border:unset}
 .stickcompare.stickcompare_new .listcompare li{width:100%;
    border-right:1px solid #e0e0e0;
    padding-top:0}
 .stickcompare.stickcompare_new .listcompare li img{width:60px}
 .stickcompare.stickcompare_new .listcompare a{justify-content:center;
    flex-flow:column;
    align-items:center;
    width:unset;
    cursor:pointer}
 .stickcompare.stickcompare_new .listcompare span{right:10px;
    top:10px}
 .stickcompare.stickcompare_new .listcompare h3{margin:5px;
    text-align:center}
 .stickcompare.stickcompare_new .closecompare{display:inline-block;
    vertical-align:middle;
    width:25%;
    margin-top:21px}
 .stickcompare.stickcompare_new .closecompare a.txtremoveall{margin:auto;
    width:unset;
    padding:0}
 .stickcompare.stickcompare_new .closecompare a.doss{border-radius:0;
    margin:0 auto 10px}
 .stickcompare.stickcompare_new .closecompare a.doss.prevent{background:#bdbdbd;
    color:#fff;
    opacity:1}
 .stickcompare.stickcompare_new .listcompare li.formsg{margin:initial;
    border-left:unset;
    border-top:unset;
    border-bottom:unset;
    border-right:1px solid #e0e0e0;
    border-radius:0;
    padding:0;
    display:inline-flex;
    justify-content:center;
    align-items:center}
 .stickcompare.stickcompare_new .listcompare li.formsg p{display:block;
    font-size:12px;
    text-align:center;
    margin:7px auto 0}
 .stickcompare.stickcompare_new .listcompare .cp-plus>i.icImageCompareNew{background:url('//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/iconcompare/icon_add_desktop.png') no-repeat top center;
 background-size:45px 45px;
 width:45px;
 height:45px}
 .stickcompare.stickcompare_new label.error{top:0;
    z-index:9;
    background:#000000e3;
    color:#fff !important;
    padding:10px;
    width:90%;
    height:max-content;
    margin:0 5%;
    text-align:center;
    border-radius:4px;
    position:fixed;
    left:0;
    right:0;
    bottom:0;
    max-width:400px;
    display:none;
    margin:auto}
 .popup-addsp{display:none}
 .popup-addsp.active{display:block}
 .popup-addsp .bg-popup{position:fixed;
    top:0;
    bottom:0;
      left:0;
      right:0;
      background:#000;
      opacity:.75;
      z-index:999}
 .popup-addsp .close-popup{position:fixed;
      top:5vh;
      right:50px;
      z-index:999;
      cursor:pointer;
      width:640px;
      left:50px;
      margin:auto}
 .popup-addsp .close-popup aside{background:#fff;
      padding:7px 8px;
      border-radius:4px;
      width:max-content;
      float:right}
 .popup-addsp .close-popup i{position:relative;
      display:inline-block;
      vertical-align:middle;
      margin-right:10px;
      padding:0}
 .popup-addsp .close-popup i:after,.popup-addsp .close-popup i:before{content:"";
   width:12px;
   height:1px;
   background:#333;
   margin-right:5px;
   transform:rotate(45deg) !important;
   position:absolute;
   border-radius:unset;
   top:unset;
   left:unset;
   right:unset;
   margin:unset}
 .popup-addsp .close-popup i:after{transform:rotate(-45deg) !important}
 .popup-addsp .close-popup span{display:inline-block;
      vertical-align:middle}
 .compare-popup{background:#fff;
      position:fixed;
      top:10vh;
      left:10px;
      right:10px;
      border-radius:5px;
      padding:15px 10px 50px;
      z-index:999;
      max-width:640px;
      margin:auto;
      height:calc(100vh - 20vh);
      overflow-y:scroll}
 .compare-popup h4{display:block;
      overflow:hidden;
      text-align:center;
      padding:10px}
 .compare-popup .pro-compare{display:flex;
      overflow:hidden;
      border:unset;
      justify-content:center}
 .compare-popup .pro-compare li{float:left;
      width:33.33%;
      border:1px solid #e5e5e5;
      border-right:0;
      text-align:center;
      padding:15px 4px 20px 4px;
      margin:0 0 20px;
      position:relative}
 .compare-popup .pro-compare li h3{overflow:hidden;
      font-size:14px;
      padding:0 0 3px 15px;
      display:-webkit-box;
      -webkit-line-clamp:2;
      -webkit-box-orient:vertical;
      text-overflow:ellipsis}
 .compare-popup .pro-compare li:last-child{border-right:1px solid #e5e5e5}
 .compare-popup .pro-compare li img{display:block;
      width:100% !important;
      max-width:86px;
      margin:0 auto 5px;
      height:auto;
      position:relative}
 .compare-popup .pro-compare li .box-p{display:flex;
      justify-content:left;
      align-items:center;
      padding:0 0 3px 15px}
 .compare-popup .pro-compare.pro-compare_viewed li .box-p{justify-content:center}
 .compare-popup .pro-compare li .box-p p.price-old{text-decoration:line-through;
      color:#999}
 .compare-popup .pro-compare li .box-p p,.compare-popup .pro-compare li .box-p span{display:block;
      overflow:hidden;
      font-size:14px;
      margin-right:5px;
      color:#333}
 .compare-popup .pro-compare li .item-gift{font-size:12px;
      display:block;
      width:100%;
      padding:0 10px 3px 15px;
      color:#333}
 .compare-popup .pro-compare li .item-gift b{font-weight:normal}
 .compare-popup .pro-compare li .item-img{position:relative}
 .compare-popup .pro-compare li .item-img img.lbliconimg{width:36px !important;
      margin:unset;
      max-width:unset;
      left:10px;
      bottom:0;
      position:absolute}
 .compare-popup .pro-compare li .item-img img.lbliconimg.lbliconimg_44{left:150px;
      bottom:0;
      top:0}
 .compare-popup .pro-compare li .item-img img.lbliconimg.lbliconimg_2002{height:30px;
      bottom:0}
 .compare-popup .pro-compare li strong.price{font-size:12px;
      color:#000;
      padding:0 0 4px 0}
 .compare-popup .pro-compare li strong.price.twoprice{background:none;
      display:block}
 .compare-popup .pro-compare li strong.multiprice{font-size:12px;
      font-style:normal;
      font-weight:700;
      line-height:18px;
      color:#000;
      display:inline-block;
      margin-right:5px;
      vertical-align:middle}
 .compare-popup .pro-compare li .per_twoprice{font-size:9px;
      font-weight:400;
      line-height:16px;
      color:#000;
      display:inline-block;
      padding:2px 5px;
      margin-left:-2px;
      vertical-align:middle}
 .compare-popup .pro-compare li p.item-txt-online,.compare-popup .pro-compare li p.item-txt-online{padding:0 0 3px 0}
 .compare-popup .pro-compare .pro-nrview{display:block;
      overflow:hidden;
      font-size:12px;
      color:#2f80ed;
      position:absolute;
      left:0;
      right:0;
      bottom:6px;
      margin:auto}
 .compare-popup #searchproductcompare{display:block}
 .compare-popup #searchproductcompare .find-sp{display:block;
      position:relative;
      overflow:hidden}
 .compare-popup #searchproductcompare .find-sp input{display:block;
      overflow:hidden;
      width:100%;
      border:1px solid #d0d0d0;
      border-radius:4px;
      padding:10px 0 10px 30px;
      box-sizing:border-box}
 .compare-popup #searchproductcompare .find-sp i{position:absolute;
      top:12px;
      left:8px}
 .compare-popup #searchproductcompare ul li{float:unset;
      display:block;
      width:100%;
      margin:auto;
      text-align:left;
      border-left:unset;
      border-right:unset}
 .compare-popup #searchproductcompare ul li:last-child{border-bottom:0}
 .compare-popup #searchproductcompare ul li .pro-nrview{left:unset;
      right:10px;
      bottom:12px}
 .compare-popup #searchproductcompare .pro-compare li strong.price{display:inline-flex;
      vertical-align:middle;
      padding:0 0 3px 15px}
 .compare-popup #searchproductcompare li img{float:left;
      width:100%;
      max-width:45px;
      margin-right:10px}
 .compare-popup #searchproductcompare ul{display:none;
      overflow:hidden;
      border:1px solid #d0d0d0;
      border-radius:4px;
      margin:2px 0}
 .compare-popup #searchproductcompare ul li{display:block;
      overflow:hidden;
      border-top:0;
      padding:10px;
      border-top:1px solid #d0d0d0;
      border-bottom:unset;
      max-width:unset;
      box-sizing:border-box}
 .compare-popup #searchproductcompare ul li:first-child{border-top:0}
 .compare-popup #searchproductcompare ul li .item-img{height:50px;
      float:left;
      width:60px}
 .compare-popup #searchproductcompare ul li .item-img img{float:left;
      width:80%;
      margin-right:10px;
      height:auto}
 .compare-popup #searchproductcompare ul li img{float:left;
      width:100%;
      max-width:45px;
      margin-right:10px}
 .compare-popup #searchproductcompare ul li .text-sr{display:block;
      overflow:hidden}
 .compare-popup #searchproductcompare li .text-sr span{display:block;
      overflow:hidden;
      font-size:12px}
 .compare-popup #searchproductcompare li .text-sr p{display:block;
      overflow:hidden;
      padding:3px 0 0}
 .compare-popup #searchproductcompare .text-sr p strong{float:left;
      color:#d0021c}
 .compare-popup #searchproductcompare .text-sr p a{float:right;
      font-size:12px;
      color:#2f80ed}
 .compare-popup .pro-compare li .item-rating,.compare-popup .pro-compare li .item-label,.compare-popup .pro-compare li .item-txt-online,.compare-popup .pro-compare li .item-compare,.compare-popup .pro-compare li .result-label,.compare-popup .pro-compare li .item-bottom,.compare-popup #searchproductcompare .pro-compare li strong.price.twoprice,.compare-popup #searchproductcompare .pro-compare li strong.multiprice,.compare-popup #searchproductcompare .pro-compare li .per_twoprice,.compare-popup #searchproductcompare .pro-compare li .box-p,.compare-popup #searchproductcompare .pro-compare li .item-gift{display:none}
 .errorcompare{overflow:hidden;
      position:fixed;
      top:0;
      z-index:9;
      background:#000000e3;
      color:#fff;
      padding:10px;
      height:max-content;
      width:90%;
      margin:auto;
      text-align:center;
      border-radius:4px;
      left:0;
      right:0;
      bottom:0;
      display:none;
      max-width:400px;
      font-size:13px}
 body{background-color:#f1f1f1}
 .top-banner{background-color:#f1f1f1}
 .listproduct{display:grid;
      grid-auto-rows:minmax(min-content,max-content);
      grid-template-columns:repeat(5,minmax(0,1fr))}
 .owl-carousel.listproduct .owl-item{border:none !important}
 .listproduct img{max-width:100%}
 .listproduct .item{background-color:#fff;
      border-bottom:1px solid #f1f1f1;
      border-left:1px solid #f1f1f1;
      display:block;
      padding:10px 15px 20px;
      width:20%;
      box-shadow:2px 8px 12px rgba(0,0,0,.06)}
 .listproduct .item:nth-child(1),.listproduct .item:nth-child(2),.listproduct .item:nth-child(3),.listproduct .item:nth-child(4),.listproduct .item:nth-child(5){border-top:1px solid #f1f1f1}
 .listproduct .item:nth-child(5n){border-right:1px solid #f1f1f1}
 .listproduct h3{display:-webkit-box;
      -webkit-box-orient:vertical;
      -webkit-line-clamp:2;
      font-size:14px;
      line-height:16px;
      margin-top:10px;
      max-height:38px;
      overflow:hidden;
      text-overflow:ellipsis}
 .listproduct h3 span{color:#fc773b}
 .listproduct .price{color:#e83a45;
      display:inline-block;
      font-size:16px;
      font-weight:bold;
      line-height:16px;
      margin-bottom:5px}
 .listproduct .price.twoprice{color:#222}
 .listproduct .price.twopriceV2{font-weight:normal;
      font-size:14px;
      margin-bottom:5px;
      color:#222}
 .listproduct .price.red{color:#d0021c}
 .listproduct .price.twopriceV2:before{content:'';
   width:15px;
   height:15px;
   background:transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAMAAAAM7l6QAAADIWlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS41LWMwMTQgNzkuMTUxNDgxLCAyMDEzLzAzLzEzLTEyOjA5OjE1ICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ0MgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjQwRDA1QTlFQzc2NTExRUI5RUFEQUQ5QzM0RTRFREY5IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjQwRDA1QTlGQzc2NTExRUI5RUFEQUQ5QzM0RTRFREY5Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NDBEMDVBOUNDNzY1MTFFQjlFQURBRDlDMzRFNEVERjkiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NDBEMDVBOURDNzY1MTFFQjlFQURBRDlDMzRFNEVERjkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz6rTY90AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAFRQTFRFR3BM0QAczwIc0AId0AEc0AEc0AEczwEc0AEc0AEb0AEbzwAgzwAQ0AEc0QIczwEa0QEc0QIe0AId1gAh0QEb0QIdzwAg0AIbzwAbzwUb0gAd0AIcLM/rQgAAABt0Uk5TAH+A31+/QCDv388QEK9/UG9vnx+PjzCfMDBPXpRnnQAAASVJREFUKM+Nk8uWgzAMQ0VJiAOkPPqcuf//n7OABGhZTFb4WPKRZSHtXxdCp/PXTSkCWHLhu3kxwOKCeHwAmhr8eJOkp/NQD/vuBXyzlaGFy6FbHadVu/4A7lOLg3VcqDduXW/8upck3WkLCcqn5ypJwchrPA3qLLHBekkOnwUbbcRCoY+SUtF15SW9lpmSJpIk473WM05y3PMw4kHNRBuk3z7XRi8Ri+8RbN7sjtz2bYWXkdctbSvsQQot42ZCv2IkSY9F2pxdwCSlAr8yS3NZzJEkTXtb6nZvi5PUGcXHCPYuay/Aa6EfTtKu/nRxO32MW0RiyLc5jcNwFp2zeFXQ7rLb+I/wDRG8+5GkMHmIzXFaeBhAjAZY1X/9J8GlBZHGXv98fzV0E9m7ufBbAAAAAElFTkSuQmCC) no-repeat left center;
   background-size:15px 15px;
   margin:2px 5px 0 0;
   display:inline-block;
   vertical-align:top}
 .listproduct .box-p{margin-bottom:5px}
 .listproduct .price-old{color:#666;
      display:inline-block;
      font-size:14px;
      line-height:16px;
      text-decoration-line:line-through}
 .listproduct .price-old.black{color:#333}
 .listproduct .percent{color:#333;
      display:inline-block;
      font-size:14px;
      line-height:16px}
 .listproduct .percent.red{color:#d0021c}
 .listproduct .item-compare{font-size:0;
      margin-top:5px}
 .listproduct .item-compare span{border:1px solid #e0e0e0;
      border-radius:2px;
      color:#333;
      display:inline-block;
      font-size:12px;
      line-height:12px;
      margin-right:5px;
      padding:4px 5px;
      margin-bottom:5px}
 .listproduct .item-rating p{display:inline-block}
 .listproduct .item-rating-total{color:#333;
      font-size:11px;
      line-height:15px}
 .listproduct .shiping{color:#333;
      font-size:12px;
      line-height:16px;
      margin-top:7px}
 .listproduct .item-img{position:relative}
 .listproduct .lb-img{bottom:0;
      position:absolute;
      right:5px}
 .result-label{border-radius:20px;
      display:inline-block;
      font-size:0;
      overflow:hidden;
      max-width:100%;
      padding-right:8px}
 .result-label span{color:#fff;
      display:-webkit-box;
      -webkit-box-orient:vertical;
      font-size:10px;
      line-height:13px;
      margin-left:3px;
      overflow:hidden;
      padding:4px 0 0 3px;
      text-overflow:ellipsis;
      white-space:nowrap;
      -webkit-line-clamp:2;
      text-transform:uppercase}
 .result-label img{float:left;
      max-width:18px}
 .result-label.temp1{background:linear-gradient(to right,#ef3006,#c60004)}
 .result-label.temp2{background:linear-gradient(to right,#0358d6,#054bab)}
 .result-label.temp3{background:linear-gradient(to right,#e91f63,#db2663)}
 .result-label.temp4{background:linear-gradient(to right,#3bacf0,#1b6dc1)}
 .result-label.temp5{background:linear-gradient(to right,#faab08,#d42611)}
 .result-label.temp6{background:linear-gradient(to right,#af63cf,#3327a7)}
 .item-label{font-size:0}
 .item-label span{border-radius:2px;
      font-size:11px;
      line-height:12px;
      display:inline-block;
      margin-right:4px;
      padding:3px}
 .lb-tragop{background-color:#f1f1f1;
      color:#333}
 .ln-banchay{background-color:#fbdddd;
      color:#eb5757}
 .item-txt-online{color:#333;
      font-size:13px;
      line-height:16px;
      margin-top:5px}
 .item-txt-online>i{width:15px;
      height:15px;
      background:transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAMAAAAM7l6QAAADIWlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS41LWMwMTQgNzkuMTUxNDgxLCAyMDEzLzAzLzEzLTEyOjA5OjE1ICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ0MgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjQwRDA1QTlFQzc2NTExRUI5RUFEQUQ5QzM0RTRFREY5IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjQwRDA1QTlGQzc2NTExRUI5RUFEQUQ5QzM0RTRFREY5Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NDBEMDVBOUNDNzY1MTFFQjlFQURBRDlDMzRFNEVERjkiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NDBEMDVBOURDNzY1MTFFQjlFQURBRDlDMzRFNEVERjkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz6rTY90AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAFRQTFRFR3BM0QAczwIc0AId0AEc0AEc0AEczwEc0AEc0AEb0AEbzwAgzwAQ0AEc0QIczwEa0QEc0QIe0AId1gAh0QEb0QIdzwAg0AIbzwAbzwUb0gAd0AIcLM/rQgAAABt0Uk5TAH+A31+/QCDv388QEK9/UG9vnx+PjzCfMDBPXpRnnQAAASVJREFUKM+Nk8uWgzAMQ0VJiAOkPPqcuf//n7OABGhZTFb4WPKRZSHtXxdCp/PXTSkCWHLhu3kxwOKCeHwAmhr8eJOkp/NQD/vuBXyzlaGFy6FbHadVu/4A7lOLg3VcqDduXW/8upck3WkLCcqn5ypJwchrPA3qLLHBekkOnwUbbcRCoY+SUtF15SW9lpmSJpIk473WM05y3PMw4kHNRBuk3z7XRi8Ri+8RbN7sjtz2bYWXkdctbSvsQQot42ZCv2IkSY9F2pxdwCSlAr8yS3NZzJEkTXtb6nZvi5PUGcXHCPYuay/Aa6EfTtKu/nRxO32MW0RiyLc5jcNwFp2zeFXQ7rLb+I/wDRG8+5GkMHmIzXFaeBhAjAZY1X/9J8GlBZHGXv98fzV0E9m7ufBbAAAAAElFTkSuQmCC) no-repeat left center;
      background-size:15px 15px;
      margin:-2px 5px 0 0;
      display:inline-block;
      vertical-align:middle}
 .listproduct .item-gift{color:#333;
      font-size:12px}
 .utility{margin-top:7px}
 .utility p{color:#222;
      font-size:12px;
      line-height:22px;
      display:flex;
      column-count:2;
      column-fill:balance}
 .utility p span:first-child{display:inline-block;
      min-width:50px;
      vertical-align:top;
      text-transform:uppercase}
 .item-ss{color:#2f80ed;
      font-size:12px;
      line-height:16px;
      margin-top:7px;
      display:block}
 .item-ss i{background:url('//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/iconcompare/icon_plus.png') no-repeat center;
   background-size:100%;
   height:16px;
   width:16px;
   display:inline-block;
   vertical-align:text-bottom}
 .item-ss.active i{background:url('//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/iconcompare/icon_checked.png') no-repeat center;
   background-size:100%}
 .btn-buyslt{border:1px solid #fb6e2e;
      border-radius:3px;
      color:#fb6e2e;
      display:block;
      font-size:12px;
      line-height:16px;
      margin-top:10px;
      padding:8px 5px;
      text-align:center}
 .preorder{background-color:#e91e63;
      border-radius:4px;
      color:#fff;
      display:inline-block;
      font-size:11px;
      margin-right:4px;
      padding:0 5px}
 .title-layout{font-size:18px;
      line-height:16px;
      margin-bottom:20px;
      font-weight:600}
 .layout-col3{display:flex;
      margin:0 -5px}
 .layout-col3 li{padding:0 5px;
      width:33.333%}
 .layout-col3 li img{width:100%}
 .application{display:flex;
      margin-top:40px}
 .application a{color:#333}
 .application img{border-radius:4px;
      width:100%}
 .application .col1{padding-right:15px;
      width:67%}
 .application .col1__ct{display:flex}
 .application .col1-big{width:61%}
 .application .col1-big-img{position:relative}
 .application .col1-simple{margin-left:10px;
      width:calc(39% - 10px)}
 .application .col1-title{font-size:18px;
      font-weight:bold;
      line-height:27px;
      margin-top:10px}
 .application .col1-hour{color:#999;
      line-height:21px;
      margin-top:5px}
 .application .spl-item{align-items:center;
      display:flex;
      margin-bottom:10px}
 .application .spl-item__img{position:relative;
      width:120px}
 .application .spl-item-title{font-size:12px;
      line-height:17px;
      overflow:hidden;
      -webkit-line-clamp:3;
      text-overflow:ellipsis;
      display:-webkit-box;
      -webkit-box-orient:vertical}
 .application .spl-item-hour{color:#999;
      font-size:10px;
      line-height:15px}
 .application .spl-item__content{padding-left:10px;
      width:calc(100% - 120px)}
 .application .ytbclick{left:50%;
      position:absolute;
      top:50%;
      transform:translate(-50%,-50%)}
 .application .ttl-main{margin-bottom:10px}
 .application .title-layout,.application .readmore-txt{display:inline-block;
      vertical-align:middle}
 .application .title-layout{font-weight:bold;
      margin-right:20px;
      margin-bottom:0}
 .application .col2{width:33%}
 .game__item img{width:100%}
 .game-box-wrap{display:flex;
      margin-top:10px}
 .game-box-main{padding-left:10px;
      width:calc(100% - 60px)}
 .game-box-img{width:60px}
 .game-title{font-weight:bold;
      line-height:21px}
 .game-label span,.game-label p{display:inline-block;
      vertical-align:middle}
 .game-label span{background-color:#07a358;
      border-radius:4px;
      color:#fff;
      font-size:12px;
      font-weight:bold;
      line-height:16px;
      padding:0 4px}
 .game-label p{font-size:13px;
      line-height:16px}
 .game-box-list a{color:#2f80ed;
      display:block;
      font-size:12px;
      line-height:18px;
      margin-top:10px;
      padding-left:15px;
      position:relative}
 .game-box-list a::before{background-color:#2f80ed;
      border-radius:50%;
      content:'';
   height:5px;
   left:0;
   position:absolute;
   top:6px;
   width:5px}
 .game.owl-carousel .owl-buttons div{top:30%}
 [class^="iconlt-"],[class*="iconlt-"]{background-image:url(//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/laptop/iconlaptop@2xv3.png?v=2);
      background-repeat:no-repeat;
      display:inline-block;
      width:34px;
      height:43px;
      line-height:30px;
      vertical-align:middle;
      background-size:885px 43px}
 .iconlt-dealsoc{background-position:0 0;
      width:34px;
      height:43px}
 .iconlt-gaming{background-position:-127px -11px;
      width:33px;
      height:22px}
 .iconlt-macbook{background-position:-258px -7px;
      width:24px;
      height:29px}
 .iconlt-hoc-tap-van-phong{background-position:-381px -4px;
      width:30px;
      height:35px}
 .iconlt-do-hoa-ky-thuat{background-position:-507px -6px;
      width:34px;
      height:34px}
 .iconlt-mong-nhe{background-position:-631px -6px;
      width:32px;
      height:33px}
 .iconlt-cao-cap-sang-trong{background-position:-760px -14px;
      width:27px;
      height:24px}
 .iconlt-phan-mem{background-position:-850px -10px;
      width:26px;
      height:26px}
 .icondhtm-sosanh{background-position:1px -39px;
      height:15px;
      width:16px}
 .banner{
        position:relative}
 .banner img{display:block;
      max-width:100%;
      object-fit:none;
      margin:auto}
 .owl-carousel .owl-nav{left:0;
      position:absolute;
      top:50%;
      transform:translateY(-50%);
      width:100%}
 .owl-carousel .owl-nav button{backdrop-filter:blur(1px);
      background-size:15px 28px;
      box-shadow:none;
      height:48px;
      position:absolute;
      top:calc(50% - 24px);
      width:24px}
 .owl-carousel .owl-nav button.owl-prev{background:rgba(216,216,216,.7) url(//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/smartwatch/icon_prev.svg) center center no-repeat !important;
      left:0}
 .owl-carousel .owl-nav button.owl-next{background:rgba(216,216,216,.7) url(//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/smartwatch/icon_next.svg) center center no-repeat !important;
      right:0}
 .owl-carousel .owl-nav button span{opacity:0}
 .quick-link{
       background-color:#e0e0e0;
      display:flex;
      justify-content:center;
      padding:15px 0;
      max-width:1200px;
      margin:auto;
      margin-top:15px;
      border-radius:12px}
 .quick-link>div{display:grid;
      grid-auto-rows:minmax(min-content,max-content);
      grid-template-columns:repeat(8,minmax(0,1fr));
      max-width:1160px;
      margin:auto;
      gap:20px}
 .quick-link a{align-items:center;
      border-radius:34px;
      background-color:#fff;
      justify-content:center;
      display:flex;
      height:34px;
      padding:0 14px;
      border:2px solid #fff}
 .quick-link a:hover{
border:2px solid #2f80ed}
 .menu-top{background-color:#f1f1f1;
      max-width:1920px;
      padding:15px 0;
      margin:auto}
 .menu-top>div{display:grid;
      grid-auto-rows:minmax(min-content,max-content);
      grid-template-columns:repeat(8,minmax(0,1fr));
      max-width:1200px;
      margin:auto;
      text-align:center}
 .menu-top.fixed{left:0;
      position:fixed;
      top:0;
      width:100%;
      z-index:9;
      right:0;
      background-color:#222}
 .menu-top .nav-item:hover .box-icon{background-color:#ffe500}
 .menu-top .nav-item{color:#000;
      font-size:16px;
      line-height:17px}
 .menu-top.fixed .nav-item{color:#fff}
 .menu-top .nav-item.active .box-icon{background-color:#ffe500}
 .menu-top .nav-item .box-icon{align-items:center;
      border-radius:50%;
      display:flex;
      justify-content:center;
      height:56px;
      margin:0 auto 6px;
      width:56px;
      background-color:#fff}
 .menu-top .nav-item p{font-size:14px;
      line-height:120%;
      white-space:nowrap}
 .deal{padding-bottom:20px}
 .deal-main{background-color:#ffd400}
 .deal-main .listproduct{padding:10px}
 .deal__title{text-align:center;
      position:relative}
 .deal__title img{width:100%;
      height:auto;
      display:block}
 .deal__title a{font-size:42px;
      line-height:50px;
      text-transform:uppercase;
      padding:30px 0 20px 0;
      display:block}
 .deal__title .txtDs{color:#ff0020;
      font-weight:600}
 .deal__title .txtGd{color:#222;
      font-weight:600}
 .deal-banner{margin-top:50px}
 .content{background-color:#eaeaea}
 .block{padding-bottom:60px}
 .block__banner{position:relative}
 .block__banner .owl-nav{display:none}
 .block__banner img{display:block;
      width:100%;
      margin:auto}
 .block__banner ._criteria{position:absolute;
      z-index:2;
      cursor:pointer;
      top:8% !important;
      left:unset !important;
      right:-30px !important}
 .block__banner .question{display:flex;
      background-color:#fff;
      position:absolute;
      top:7%;
      right:1%;
      border-radius:20px;
      cursor:pointer;
      height:24px;
      align-items:center;
      z-index:5}
 .block__banner .question .text-hover{display:none;
      color:#2f80ed;
      font-weight:400;
      font-size:16px;
      line-height:18px;
      align-items:center;
      padding:0 10px 0 20px}
 .block__banner .question .banner-icon{width:30px;
      margin-right:-4px;
      margin-left:-4px}
 .block__banner ._criteria>div{position:relative;
      color:#333;
      width:350px;
      height:auto;
      background-color:#fff;
      padding:15px 10px;
      border-radius:10px;
      margin-top:15%;
      box-shadow:0 4px 4px rgba(0 0 0/.25);
      margin-top:12%;
      right:13%;
      display:none}
 .block__banner ._criteria>div:before{content:'';
   width:0;
   height:0;
   border-style:solid;
   border-width:0 15px 12px 15px;
   position:absolute;
   top:-10px;
   left:84%;
   border-color:transparent transparent #fff transparent}
 .block__banner ._criteria>div img{width:auto;
      display:inline-block;
      vertical-align:middle;
      margin-right:10px;
      padding:5px 0;
      max-width:17px}
 .block__banner ._criteria>div>span:before,.block__banner ._criteria>div>span:after{background-color:#333;
      content:'';
   right:13px;
   height:14px;
   position:absolute;
   top:7px;
   width:1px}
 .block__banner ._criteria>div>span:before{transform:rotate(45deg)}
 .block__banner ._criteria>div>span:after{transform:rotate(-45deg)}
 #hoc-tap-van-phong .block__banner ._criteria{top:58%;
      left:27%}
 #do-hoa-ky-thuat .block__banner ._criteria{top:58%;
      left:26%}
 #mong-nhe .block__banner ._criteria{top:61%;
      left:29%}
 #cao-cap-sang-trong .block__banner ._criteria{top:61%;
      left:30%}
 #gaming{background-color:#25304b}
 #gaming .block-btn-more,#gaming .block-btn{background:linear-gradient(92.4deg,#ffd400 0%,#febf00 100%);
      box-shadow:0 0 20px #b88a00}
 .block__tab{display:flex;
      justify-content:center;
      padding:20px 0 12px}
 .block__tab li{margin:0 6px}
 .block__tab li.active a{background-color:#ffe500;
      font-weight:bold}
 .block__tab li a{background-color:#fff;
      border-radius:20px;
      color:#333;
      display:block;
      font-size:16px;
      line-height:18px;
      padding:10px 10px}
 .block-btn{background-color:#fff;
      border-radius:4px;
      color:#333;
      display:block;
      font-size:14px;
      line-height:18px;
      margin:10px auto 0;
      max-width:350px;
      padding:10px 10px;
      text-align:center;
      width:100%;
      text-transform:uppercase}
 .block-btn span{position:relative;
      padding-right:15px}
 .block-btn span::before{border-bottom:5px solid transparent;
      border-top:5px solid transparent;
      border-left:5px solid #333;
      content:'';
   position:absolute;
   right:0;
   top:calc(50% - 5px)}
 .listproduct .item:hover h3{color:#2f80ed}
 .listproduct .item:hover .item-img{overflow:unset}
 .listproduct .item:hover .item-img img{top:-5px}
 .listproduct .item-label{margin-bottom:10px;
      height:20px}
 .listproduct .sosanh{color:#2f80ed;
      display:inline-block;
      font-size:12px;
      line-height:14px;
      margin-top:10px}
 .listproduct .sosanh i{margin-right:5px}
 .listproduct .price-old,.listproduct .percent{color:#444;
      font-size:13px;
      line-height:17px}
 .listproduct .item-img{align-items:center;
      display:flex;
      justify-content:center;
      margin-bottom:20px;
      overflow:hidden}
 .listproduct .item-img img{max-height:100%;
      height:auto;
      position:relative;
      top:0;
      transition:.3s;
      max-width:100%;
      width:auto}
 .listproduct-deal .owl-stage{display:flex}
 .deal-banner .owl-item img{width:auto;
      height:auto;
      max-width:100%}
 .listproduct-block{column-gap:8px;
      display:grid;
      grid-auto-rows:minmax(min-content,max-content);
      grid-template-columns:repeat(5,minmax(0,1fr));
      margin-top:8px;
      row-gap:8px}
 .listproduct-block .item{width:auto}
 img.lbliconimg,.lbliconimg{width:auto !important;
      height:40px !important;
      position:absolute !important;
      left:0;
      bottom:0}
 .ln-banchay{background-color:#fbdddd;
      color:#eb5757}
 .block-orther-cate{margin:30px 0}
 .block-orther-cate h3{font-size:18px;
      line-height:16px;
      margin-bottom:20px;
      font-weight:600}
 .block-orther-cate div{display:grid;
      grid-auto-rows:minmax(min-content,max-content);
      grid-template-columns:repeat(10,minmax(0,1fr))}
 .block-orther-cate div a{display:block;
      font-size:14px;
      line-height:17px;
      text-align:center;
      color:#333}
 .block-orther-cate div a img{display:block;
      width:50%;
      height:auto;
      margin:auto}
 .slider-bannertop{max-width:800px;
      max-height:205px;
      padding-top:5px;
      overflow:hidden}
 .slider-bannertop .owl-dots{bottom:2px;
      left:50%;
      position:absolute;
      transform:translateX(-50%)}
 .slider-bannertop .owl-dots button span{height:5px !important;
      width:5px !important;
      margin:2px 0 0 7px !important;
      background:#fff}
 .slider-bannertop .owl-dots button.active span{background-color:#fe7705 !important;
      width:5px;
      height:5px;
      margin:2px}
 .slider-bannertop .owl-item img{object-fit:cover}
 .slider-bannertop .owl-nav button{opacity:.4}
 .slider-bannertop:hover .owl-nav button{opacity:1}
 .slider-bannertop .item:first-child{display:flex;
      height:100%}
 .slider-bannertop .item a{display:flex;
      height:100%;
      width:100%}
 .laptopnew .slider-bannertop{max-width:unset;
      max-height:unset;
      padding-top:5px;
      overflow:hidden;
      width:100%}
 .listproduct-deal>.item:nth-child(n+6){display:none}
 .deal-main.lunar{background-color:#ffd400;
      padding-bottom:25px}
 .lunar .deal__title a{line-height:2;
      padding:0}
 .lunar .deal__title img{position:absolute;
      display:none}
 .lunar .deal__title a span{position:relative;
      top:0}
 .lunar span.txtDs{color:#ff0020}
 .lunar span.txtGd{color:#fff}
 .owl-carousel .owl-item img{height:auto}
 .slide-imgstore{background:#121a2d;
      padding-top:20px}
 .slide-imgstore img{max-width:100%;
      height:auto;
      cursor:pointer;
      border-radius:4px}
 .slide-imgstore .owl-nav{position:absolute;
      top:40%;
      width:100%}
 .slide-imgstore .owl-dots{margin:20px auto 0}
 .slide-imgstore .owl-dots .owl-dot span{background:#c7c7c7;
      border:1px solid #fff}
 .slide-imgstore .owl-dots .owl-dot.active span,.slide-imgstore .owl-dots .owl-dot:hover span{background:#fff;
      border:2px solid #2997ff}
 .list-sieuthi{display:block;
      background:#121a2d;
      padding:40px 0 30px}
 .list-sieuthi .center-page{padding:40px 60px;
      border:1px solid #2c4581;
      border-radius:24px;
      text-align:center;
      background:#151f38;
      max-width:1180px;
      min-width:1024px;
      margin:auto}
 .list-sieuthi .store-province{padding-bottom:40px;
      border-bottom:1px solid #2c4581;
      margin-bottom:20px;
      text-align:center}
 .list-sieuthi .store-province>*{display:inline-block;
      vertical-align:middle}
 .list-sieuthi .store-province b{font-size:18px;
      color:#fff;
      margin-right:20px}
 .list-sieuthi .store-province div{position:relative;
      width:250px}
 .list-sieuthi .store-province div span{border:1px solid #757575;
      border-radius:12px;
      background-color:#fff;
      display:block;
      height:50px;
      line-height:50px;
      position:relative;
      color:#323232;
      text-align:left;
      padding:0 30px 0 20px;
      cursor:pointer}
 .list-sieuthi .store-province div span:before{content:'';
   border-top:1px solid #323232;
   border-right:1px solid #323232;
   width:8px;
   height:8px;
   transform:rotate(135deg);
   position:absolute;
   right:20px;
   bottom:0;
   top:-4px;
   margin:auto}
 .list-sieuthi .store-province div ul{position:absolute;
      left:0;
      top:55px;
      padding:0 20px 20px;
      background-color:#fff;
      width:100%;
      text-align:left;
      border-radius:12px;
      display:none;
      z-index:2;
      height:350px;
      overflow-y:scroll}
 .list-sieuthi .store-province div ul:before{content:"";
   position:absolute;
   width:27px;
   height:27px;
   background:#fff;
   transform:rotate(45deg);
   top:-4px;
   left:30px;
   box-shadow:-2px -2px 5px -4px}
 .list-sieuthi .store-province div ul li{cursor:pointer}
 .list-sieuthi .store-province div ul li.active{font-weight:600}
 .list-sieuthi .store-province div ul li:not(:last-child){padding-bottom:15px}
 .list-sieuthi .store-province div ul li:first-child{padding-top:20px;
      position:relative;
      z-index:1;
      background-color:#fff}
 .list-sieuthi .store-list{display:grid;
      grid-auto-rows:minmax(min-content,max-content);
      grid-template-columns:repeat(2,minmax(0,1fr));
      text-align:left}
 .list-sieuthi .store-list .store-title{font-weight:600}
 .list-sieuthi .store-list p{display:block;
      overflow:hidden;
      padding:15px 0;
      font-size:15px;
      line-height:20px;
      color:#fff;
      padding-right:20px}
 .list-sieuthi .store-list p a{color:#fff}
 .list-sieuthi .store-list p:last-child{border-bottom:0}
 .list-sieuthi .store-list p.hide{display:none}
 .list-sieuthi .center-page a.viewmore{color:#2997ff;
      display:inline-block;
      vertical-align:top;
      margin-top:30px;
      position:relative}
 .list-sieuthi .center-page a.viewmore:after{content:'';
   border-top:1px solid #2997ff;
   border-right:1px solid #2997ff;
   width:8px;
   height:8px;
   transform:rotate(135deg);
   display:inline-block;
   vertical-align:middle;
   margin:-4px 0 2px 10px}
 .list-sieuthi .store-list p a>span{display:block;
      overflow:hidden;
      padding:0 0 7px}
 .list-sieuthi .store-list p span span{color:#2997ff;
      padding:0 10px}
 .list-sieuthi .store-list p span span:after{content:'';
   border-top:1px solid #2997ff;
   border-right:1px solid #2997ff;
   width:8px;
   height:8px;
   transform:rotate(45deg);
   display:inline-block;
   vertical-align:middle;
   margin:0 0 2px 3px}
 .list-sieuthi .store-list p a>span:last-child{padding:0}
 .list-sieuthi .store-list.one{grid-template-columns:repeat(1,minmax(0,1fr));
      text-align:center}
 .list-sieuthi aside{float:left;
      width:48%}
 .list-sieuthi aside p{display:block;
      overflow:hidden;
      border-bottom:1px solid #171717;
      padding:15px 0;
      font-size:15px;
      line-height:20px;
      color:#fff}
 .list-sieuthi aside p:last-child{border-bottom:0}
 .list-sieuthi aside p a{color:#fff}
 .list-sieuthi aside p a>span{display:block;
      overflow:hidden;
      padding:0 0 7px}
 .list-sieuthi aside p a>span:last-child{padding:0}
 .list-sieuthi aside p span span{color:#2997ff;
      padding:0 10px}
 .list-sieuthi aside p span span:after{content:'';
   border-top:1px solid #2997ff;
   border-right:1px solid #2997ff;
   width:8px;
   height:8px;
   transform:rotate(45deg);
   display:inline-block;
   vertical-align:middle;
   margin:0 0 2px 3px}
 .slide-popup{display:none}
 .slide-popup.active{display:block}
 .slide-store-pu{position:fixed;
      max-width:1180px;
      min-width:1024px;
      width:73%;
      margin:auto;
      left:50%;
      top:50%;
      transform:translateX(-50%) translateY(-50%);
      z-index:15}
 .slide-store-pu>a{position:absolute;
      width:35px;
      height:35px;
      top:-6%;
      right:0;
      z-index:9}
 .slide-store-pu:before,.slide-store-pu:after{position:absolute;
      content:"";
   top:-6%;
   background-color:#fff;
   right:15px;
   height:35px;
   border-radius:10px;
   width:5px}
 .slide-store-pu:before{transform:rotate(-45deg)}
 .slide-store-pu:after{transform:rotate(45deg)}
 .slide-store-pu img{width:100%;
      display:block;
      margin:auto}
 .slide-store-pu .owl-dots{margin:20px auto 0}
 .slide-store-pu .owl-dots .owl-dot span{background:#c7c7c7;
      border:1px solid #fff}
 .slide-store-pu .owl-dots .owl-dot.active span,.slide-store-pu .owl-dots .owl-dot:hover span{background:#fff;
      border:2px solid #2997ff}
 .slide-store-pu .owl-nav button.owl-prev{left:-70px}
 .slide-store-pu .owl-nav button.owl-next{right:-70px}
 @media screen and (max-width:1024px){.slide-cate .item a span{font-size:16px}
 .slide-cate .item .img-slide{width:unset}
 .slide-imgstore .owl-nav{top:26%}
 .menu{width:50%}
 .owl-carousel .owl-nav{width:80%;
      margin:auto;
      left:0;
      right:0}
 }
 .slide-imgstore:not(.owl-loaded){display:block}
 .bg-popup{position:fixed;
      top:0;
      left:0;
      right:0;
      bottom:0;
      background:#000;
      opacity:.8;
      z-index:10}
 .slide-imgstore.owl-carousel .owl-nav button{width:50px;
      height:50px;
      background-size:100% 100% !important;
      background-color:transparent !important}
 .slide-imgstore.owl-carousel .owl-nav button.owl-prev{background-image:url(//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/laptop/left.svg) !important}
 .slide-imgstore.owl-carousel .owl-nav button.owl-next{background-image:url(//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/laptop/right.svg) !important}
 .slide-imgstore .owl-nav .owl-prev{left:50px !important}
 .slide-imgstore .owl-nav .owl-next{right:50px !important}
 .slide-store-pu.owl-carousel .owl-nav button{width:50px;
      height:50px;
      background-size:100% 100% !important;
      background-color:transparent !important}
 .layer-sold-out{position:absolute;
      top:0;
      left:0;
      width:100%;
      height:100%;
      background-color:rgba(255,255,255,.3);
      z-index:1}
 .slide-store-pu.owl-carousel .owl-nav button.owl-prev{background-image:url(//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/laptop/left.svg) !important}
 .slide-store-pu.owl-carousel .owl-nav button.owl-next{background-image:url(//cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/laptop/right.svg) !important}
 .trigger{bottom:20px;
      left:0;
      position:absolute;
      right:0;
      z-index:1}
 .trigger-box{background-color:rgba(0,0,0,.5);
      border-radius:20px;
      float:right;
      height:40px;
      position:relative;
      transition:.3s;
      text-align:center;
      width:120px;
      margin-right:10px}
 .trigger-box:hover{background-color:rgba(0,0,0,.8)}
 .trigger .btnowl,.trigger .counter{display:inline-block;
      vertical-align:middle}
 .trigger .btnowl{cursor:pointer;
      height:40px;
      position:absolute;
      transition:.3s;
      width:40px}
 .trigger .btnowl:hover{background-color:rgba(0,0,0,.9)}
 .trigger .btnowl::before{border-top:1px solid #fff;
      border-left:1px solid #fff;
      content:'';
   height:12px;
   position:absolute;
   top:calc(50% - 7px);
   width:12px}
 .trigger .btnowl-prev{border-radius:20px 0 0 20px;
      left:0}
 .trigger .btnowl-prev::before{transform:rotate(-45deg)}
 .trigger .btnowl-next{border-radius:0 20px 20px 0;
      right:0}
 .trigger .btnowl-next::before{right:19px;
      transform:rotate(135deg)}
 .counter{color:#fff;
      font-size:18px;
      font-weight:300;
      line-height:40px}
 .counter .nb-current{font-weight:bold;
      position:relative}
 .counter .nb-current::before{background-color:#fff;
      content:'';height:18px;position:absolute;right:-8px;top:3px;width:1px}
 .counter span{margin:0 5px}
 .fs-contain{position:absolute;
         bottom:10px;
         left:0;
         right:0;
         width:90%;
         margin:0 auto}
 .fs-contain>img{position:absolute;
         left:0;
         top:8px;
         width:21px !important;
         height:auto;
         z-index:1}
 .listproduct .rq_count{min-height:20px;
         padding-left:21px;
         background-color:#ddd;
         border-radius:25px;
         line-height:20px;
         text-align:center;
         width:100%;
         bottom:0;
         left:0;
         position:relative;
         color:#000;
         overflow:hidden;
         margin-top:15px;
         display:block}
 .listproduct .rq_count i{display:block;
         height:100%;
         background:#f7c913 url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAUCAYAAABiS3YzAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFFmlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNi4wLWMwMDMgNzkuMTY0NTI3LCAyMDIwLzEwLzE1LTE3OjQ4OjMyICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1sbnM6cGhvdG9zaG9wPSJodHRwOi8vbnMuYWRvYmUuY29tL3Bob3Rvc2hvcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgMjIuMSAoV2luZG93cykiIHhtcDpDcmVhdGVEYXRlPSIyMDIxLTA0LTI4VDExOjI0OjUyKzA3OjAwIiB4bXA6TW9kaWZ5RGF0ZT0iMjAyMS0wNC0yOFQxNDo1OTo1MCswNzowMCIgeG1wOk1ldGFkYXRhRGF0ZT0iMjAyMS0wNC0yOFQxNDo1OTo1MCswNzowMCIgZGM6Zm9ybWF0PSJpbWFnZS9wbmciIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo5NmUwOTRjNi1jODk2LWRiNGMtOGQ3OS1jYjEyZTY4NGY1MmMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OTZlMDk0YzYtYzg5Ni1kYjRjLThkNzktY2IxMmU2ODRmNTJjIiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6OTZlMDk0YzYtYzg5Ni1kYjRjLThkNzktY2IxMmU2ODRmNTJjIj4gPHhtcE1NOkhpc3Rvcnk+IDxyZGY6U2VxPiA8cmRmOmxpIHN0RXZ0OmFjdGlvbj0iY3JlYXRlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDo5NmUwOTRjNi1jODk2LWRiNGMtOGQ3OS1jYjEyZTY4NGY1MmMiIHN0RXZ0OndoZW49IjIwMjEtMDQtMjhUMTE6MjQ6NTIrMDc6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCAyMi4xIChXaW5kb3dzKSIvPiA8L3JkZjpTZXE+IDwveG1wTU06SGlzdG9yeT4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz57d7QYAAADDklEQVQ4jX2UXYhVVRTHf2udfe69M6PNOOoQMyET9DWkD441cB9yTEaCQCRrtCAfJApiQLAU7CmyDwgUopeGwvQpGicfyifxITDCyigUS1A0MBHUGJ3m6945Z+/lw3GcuXPPde2HA2ut/Vv/vVhnid2+RWYCgAFhsBdAZdVjTzI1URbvV1o620mxdJnlD/+iHx855wd7K9HoHxj1JraxHYCEFgA8ntjFKw02KbwE0mewAigCCdhlgdNJmh6JI3d+1ifj9dD+1hpokPC8i9xBkLU5IhZdtuNJSA+Y2ala/4a2eajIdo30G0AbksxAZAGB8TRNBs3s5JxLsy4aIvK6RvrtA4HTkzBbXVSEVucKP4jIgJAdRWJM4qfU6eGGsOBhfAy6n0DLm/LUl+IoPhxr3O60gHrXgrkl+81wucA0gWoFKQ+g+w/B+hfzuwKPmNi7YrNIMtDVphLdMKNQlzkzBS5Gt76BvPkeNLXgt/fB2I0GT7LrUXK7y4FuzQVO3IHObnTbW8irQ1kXRobh4lkolqBQyr41Jp2mzU87kDX1Cqdh3Xr07feR1c/M+/86A+ueg0IJmZnErv1Td9VrU58zY/nCCQGQtWXknU+RR3tg8n9Y8lDmf20I6eiCO2PYwT35DbBQcAj/1UWqVWxkGJtrwdAHGbSnF8ZuEo4OY5fO50JF7ZZDws+Y7q6pduFP+P0UTFXQz0fmA2d+JHzxIXb2NCxbAVI/0iHoRedS/S0oc/sks1ITxDH0l5EXtmXJX30CJ0azPrZ35KoEu+q9u+TE9F+T8J3AKzXPWNqG7voIqjOEA3uxk8cgTWFpawMgYHwdq68qQOR1n8BMTcLGLVCZJuzbgZ0YBVVoam4MxK5gfKYSENvQDUAqvCwajiL3/v1Vj8P0BFy7ks2kNl4JGONpkM0YPwHz0CQLb4mi8KUJHQQPSQKFYu1WqgfeTL0OGtxff4vLf5943RyMUUQDxdKDgMEkHIq89i8E5inFA1EUmvH6LFHYGQk9Bj33VE0g9rchv6apHnNxesElrlJZVO0uWQIx2gF9TMkAAAAASUVORK5CYII=) 
         no-repeat left top;
         position:absolute;
         left:0;
         top:0;
         min-width:21px}
 .listproduct .rq_count i.fs-iconfire{background:linear-gradient(64.85deg,#fcb500 23.67%,#ffd41d 106.12%);
         min-width:15px}
 .listproduct .rq_count b{display:block;
         position:relative;
         z-index:1;
         font-weight:normal}
 .listproduct-deal.owl-carousel .fs-contain{display:none}
 .listproduct-deal.owl-carousel.owl-loaded .fs-contain{display:block}
 .listproduct-deal .item{padding-bottom:40px}
 .box-common__tab{display:flex;
         justify-content:center;
         padding:0}
 .box-common__tab li{margin:10px 6px 0;
         background-color:#fff;
         border-radius:20px;
         color:#333;
         display:block;
         font-size:16px;
         line-height:18px;
         padding:10px 10px;
         cursor:pointer}
 .box-common__tab li.active{background-color:#ffe500;
         font-weight:bold}
 #preloader{position:fixed;
         top:0;
         left:0;
         right:0;
         margin:0 auto;
         width:100%;
         height:100%;
         display:none;
         z-index:25;
         background:rgba(255,255,255,.75)}
 #loader{display:block;
         position:absolute;
         left:0;
         right:0;
         top:40%;
         margin:0 auto;
         width:80px;
         height:80px}
 .banner-cushion section .bannercushion .cushion-slider .slider-banner{display:block;
         width:1200px}
 .banner-cushion{
        padding-bottom:20.5px}

 .bannercushion .cushion-slider a{
        display:inline-block
 } 

  </style>
<body>

   <?php include 'components/user_header.php'; ?>

        <div class="banner">
                     <div class="top-banner laptopnew">
                         <section>
                            <div class="slider-bannertop owl-carousel owl-theme owl-loaded owl-drag ">
                              <div class="owl-stage-outer">
                                <!--  -->
                                  <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px);
                                                                transition: all 0s ease 0s;
                                                                width: 10800px;" >
                                        <div class="owl-item active" style=" width : 1200px;">
                                                <div class="item">
                                                    <a aria-label="slide" data-cate="44" data-place="1554" rel="nofollow" href="https://www.thegioididong.com/laptop-msi" onclick="jQuery.ajax({ url: '/bannertracking?bid=88854&amp;r='+ (new Date).getTime(), async: true, cache: false });">
                                                    <img width="800" height="200" src="//cdn.tgdd.vn/2024/03/banner/MSI-KX-1200-300-1200x300.png" alt="Laptop"></a>

                                                </div>

                                        </div>

                                        <div class="owl-item" style=" width : 1200px;">
                                                <div class="item">
                                                <a aria-label="slide" data-cate="44" data-place="1554" rel="nofollow" href="https://www.thegioididong.com/khuyen-mai-laptop-gia-soc " onclick="jQuery.ajax({ url: '/bannertracking?bid=87480&amp;r='+ (new Date).getTime(), async: true, cache: false });">
                                                <img width="800" height="200" loading="lazy" class="owl-lazy ls-is-cached lazyloaded" data-src="//cdn.tgdd.vn/2024/02/banner/Lap-Khai-Xun-1200-300-1200x300.png" alt="Laptop" src="//cdn.tgdd.vn/2024/02/banner/Lap-Khai-Xun-1200-300-1200x300.png"></a>
                                                </div>
                                        </div>

                                       
                                        <div class="owl-item" style=" width : 1200px;" >
                                                <div class="item">
                                                <a aria-label="slide" data-cate="44" data-place="1554" rel="nofollow" href="https://www.thegioididong.com/laptop-asus#c=44&amp;m=128&amp;p=40439,235061&amp;o=17&amp;pi=0" onclick="jQuery.ajax({ url: '/bannertracking?bid=87698&amp;r='+ (new Date).getTime(), async: true, cache: false });">
                                                <img width="800" height="200" loading="lazy" class="lazyload owl-lazy" data-src="//cdn.tgdd.vn/2024/03/banner/ASUS-KX-1200-300-1200x300-1.png" alt="Laptop"></a>
                                                </div>

                                        </div>

                                        <div class="owl-item" style=" width : 1200px;" >
                                                <div class="item">
                                                <a aria-label="slide" data-cate="44" data-place="1554" rel="nofollow" href="https://www.thegioididong.com/laptop/apple-macbook-air-2020-mgn63saa?utm_flashsale=1" onclick="jQuery.ajax({ url: '/bannertracking?bid=87334&amp;r='+ (new Date).getTime(), async: true, cache: false });">
                                                <img width="800" height="200" loading="lazy" class="lazyload owl-lazy" data-src="//cdn.tgdd.vn/2024/02/banner/Macbook-M1-1200-300-1200x300-1.png" alt="MacBook iMac"></a>                                                
                                              </div>
                                          </div>

                                        
                                        <div class="owl-item" style=" width : 1200px;" >
                                                <div class="item">
                                                <a aria-label="slide" data-cate="44" data-place="1554" rel="nofollow" href="https://www.thegioididong.com/laptop-acer" onclick="jQuery.ajax({ url: '/bannertracking?bid=87521&amp;r='+ (new Date).getTime(), async: true, cache: false });">
                                                <img width="800" height="200" loading="lazy" class="lazyload owl-lazy" data-src="//cdn.tgdd.vn/2024/02/banner/acer-1200-300-1200x300.png" alt="Laptop ACER"></a>                                             
                                           </div>
                                        </div>
                  
                                        <div class="owl-item" style=" width : 1200px;" >
                                                <div class="item">
                                                <a aria-label="slide" data-cate="44" data-place="1554" rel="nofollow" href="https://www.thegioididong.com/laptop-acer" onclick="jQuery.ajax({ url: '/bannertracking?bid=87521&amp;r='+ (new Date).getTime(), async: true, cache: false });">
                                                <img width="800" height="200" loading="lazy" class="lazyload owl-lazy" data-src="//cdn.tgdd.vn/2024/02/banner/acer-1200-300-1200x300.png" alt="Laptop ACER"></a>                                             
                                           </div>
                                        </div>
                                        
                                        

                                      
                                        <div class="owl-item" style=" width : 1200px;" >
                                                <div class="item">
                                                <a aria-label="slide" data-cate="44" data-place="1554" rel="nofollow" href="https://www.thegioididong.com/laptop-dell" onclick="jQuery.ajax({ url: '/bannertracking?bid=87498&amp;r='+ (new Date).getTime(), async: true, cache: false });">
                                                <img width="800" height="200" loading="lazy" class="lazyload owl-lazy" data-src="//cdn.tgdd.vn/2024/02/banner/Dell-1200-300-1200x300.png" alt="Laptop"></a>
                                                </div>
                                        </div>

                                        <div class="owl-item" style=" width : 1200px;" >
                                                <div class="item">
                                                <a aria-label="slide" data-cate="44" data-place="1554" rel="nofollow" href="https://www.thegioididong.com/laptop-dell" onclick="jQuery.ajax({ url: '/bannertracking?bid=87498&amp;r='+ (new Date).getTime(), async: true, cache: false });">
                                                <img width="800" height="200" loading="lazy" class="lazyload owl-lazy" data-src="//cdn.tgdd.vn/2024/02/banner/Dell-1200-300-1200x300.png" alt="Laptop"></a>
                                                </div>        
                                        </div>

                                        <div class="owl-item" style=" width : 1200px;" >
                                                <div class="item">
                                                <a aria-label="slide" data-cate="44" data-place="1554" rel="nofollow" href="https://www.thegioididong.com/windows-ban-quyen" onclick="jQuery.ajax({ url: '/bannertracking?bid=84176&amp;r='+ (new Date).getTime(), async: true, cache: false });">
                                                <img width="800" height="200" loading="lazy" class="owl-lazy lazyloaded" data-src="//cdn.tgdd.vn/2023/11/banner/intel-365-1200-300-1200x300.png" alt="Laptop Gaming" src="//cdn.tgdd.vn/2023/11/banner/intel-365-1200-300-1200x300.png" style="opacity: 1;"></a>                                                </div>
                                              </div>  
                                        </div>
                                        <!--  -->
                                        
                                  </div>
                                  <div class="owl-nav">
                                                <button type="button" role="presentation" class="owl-prev">
                                                        <span aria-label="Previous">‹</span></button>
                                                <button type="button" role="presentation" class="owl-next">
                                                        <span aria-label="Next">›</span></button>
                                 </div>
                                        <!--  -->
                              
                              <div class="owl-dots">
                                <button role="button" class="owl-dot">
                                        <span></span></button>
                                <button role="button" class="owl-dot">
                                        <span></span></button>
                                <button role="button" class="owl-dot active">
                                        <span></span></button>
                                <button role="button" class="owl-dot ">
                                        <span></span></button>
                                <button role="button" class="owl-dot">
                                        <span></span></button>
                                <button role="button" class="owl-dot">
                                        <span></span></button>
                                <button role="button" class="owl-dot">
                                        <span></span></button>
                                <button role="button" class="owl-dot">
                                        <span></span></button>
                                <button role="button" class="owl-dot">
                                        <span></span></button>
                               
                           </div>
                          </div>
                    
                            
                              </div>  
                           
                         </section>
                     </div>
                     <div class="promote-bannner hide">

                     </div>
        </div>

<!--  -->
   <div class="quick-link">
            <div>
                        <a href="laptop-hp-compaq" data-href="laptop-hp-compaq" data-index="0" class="box-quicklink__item bd-radius quicklink-logo">
                                <img src="//cdn.tgdd.vn/Brand/1/logo-hp-149x40-1.png" height="25" class="no-text">
                            
                        </a>
                        <a href="laptop-asus" data-href="laptop-asus" data-index="0" class="box-quicklink__item bd-radius quicklink-logo">
                                <img src="//cdn.tgdd.vn/Brand/1/logo-asus-149x40.png" height="25" class="no-text">
                            
                        </a>
                        <a href="laptop-acer" data-href="laptop-acer" data-index="0" class="box-quicklink__item bd-radius quicklink-logo">
                                <img src="//cdn.tgdd.vn/Brand/1/logo-acer-149x40.png" height="25" class="no-text">
                            
                        </a>
                        <a href="laptop-lenovo" data-href="laptop-lenovo" data-index="0" class="box-quicklink__item bd-radius quicklink-logo">
                                <img src="//cdn.tgdd.vn/Brand/1/logo-lenovo-149x40.png" height="25" class="no-text">
                            
                        </a>
                        <a href="laptop-dell" data-href="laptop-dell" data-index="0" class="box-quicklink__item bd-radius quicklink-logo">
                                <img src="//cdn.tgdd.vn/Brand/1/logo-dell-149x40.png" height="25" class="no-text">
                            
                        </a>
                        <a href="laptop-msi" data-href="laptop-msi" data-index="0" class="box-quicklink__item bd-radius quicklink-logo">
                                <img src="//cdn.tgdd.vn/Brand/1/logo-msi-149x40.png" height="25" class="no-text">
                            
                        </a>
                        <a href="laptop-apple-macbook" data-href="laptop-apple-macbook" data-index="0" class="box-quicklink__item bd-radius quicklink-logo">
                                <img src="//cdn.tgdd.vn/Brand/1/logo-macbook-149x40.png" height="25" class="no-text">
                            
                        </a>
                        <a href="laptop-itel" data-href="laptop-itel" data-index="0" class="box-quicklink__item bd-radius quicklink-logo">
                                <img src="//cdn.tgdd.vn/Brand/1/logo-itel-149x40.png" height="25" class="no-text">
                            
                        </a>
                        <a href="laptop-gigabyte" data-href="laptop-gigabyte" data-index="0" class="box-quicklink__item bd-radius quicklink-logo">
                                <img src="//cdn.tgdd.vn/Brand/1/logo-gigabyte-149x40.png" height="25" class="no-text">
                            
                        </a>
                        <a href="laptop-surface" data-href="laptop-surface" data-index="0" class="box-quicklink__item bd-radius quicklink-logo">
                                <img src="//cdn.tgdd.vn/Brand/1/logo-surface-149x40-1.png" height="25" class="no-text">
                            
                        </a>
                        <a href="laptop-masstel" data-href="laptop-masstel" data-index="0" class="box-quicklink__item bd-radius quicklink-logo">
                                <img src="//cdn.tgdd.vn/Brand/1/Masstel42-b0-200x48-1.png" height="25" class="no-text">
                            
                        </a>
                        <a href="laptop-lg" data-href="laptop-lg" data-index="0" class="box-quicklink__item bd-radius quicklink-logo">
                                <img src="//cdn.tgdd.vn/Brand/1/logo-lg-149x40.png" height="25" class="no-text">
                            
                        </a>
            </div>

        </div>


    

            <div class="deal" id="dealsoc">
                <section>
                        <div class="deal-main lunar" style="background-color: #D00C12 !important; " >
                                <h2 class="deal__title">
                                   <a href="#" style="background:url(https://cdn.tgdd.vn/2024/03/banner/frame-deal-soc-desk-1920x144.png);background-size:cover;">
                                   <img style="cursor:pointer" src="https://cdn.tgdd.vn/mwgcart/mwg-site/ContentMwg/images/laptop/bg_tet_desk.png" alt="Hotdeal" width="1200" height="90">
                                   <span class="txtDs">Deal sốc</span>
                                   <span class="txtGd">GIẢM TỚI 8.800.000₫</span>
                                      </a>
                                  </h2>
                                <div class="listproduct listproduct-deal owl-carousel owl-loaded owl-drag">
                                        <div class="owl-stage-outer">

                                           <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 3564px;">
                                                
                                                <div class="owl-item active" style=" width: 220px ; margin-right: 8px;">
                                                        <div class="item" data-productid="304539" data-pos="1" data-id="304539">
                                                                <a href="/laptop/msi-modern-14-c11m-i3-011vn" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop MSI Modern 14 C11M i3 1115G4/8GB/512GB/Win11 (011VN)" data-id="304539" data-price="8490000.0" data-brand="MSI" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
                                                        <div class="item-label">
                                                                <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>
                                                        </div>

                                                        <div class="item-img item-img_44">
                                                                <img class=" ls-is-cached lazyloaded" data-src="https://cdn.tgdd.vn/Products/Images/44/304539/TimerThumb/msi-modern-14-c11m-i3-011vn-(4).jpg" alt="MSI Modern 14 C11M i3 1115G4 (011VN)" src="https://cdn.tgdd.vn/Products/Images/44/304539/TimerThumb/msi-modern-14-c11m-i3-011vn-(4).jpg">
                                                                <img src="https://cdn.tgdd.vn/ValueIcons/Label_01-01.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
                                                        </div>

                                                                <p class="result-label temp3"><img width="20" height="20" class=" ls-is-cached lazyloaded" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png" src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
                                                                <h3 title="Laptop MSI Modern 14 C11M i3 1115G4/8GB/512GB/Win11 (011VN)">
                                                                MSI Modern 14 C11M i3 1115G4 (011VN)
                                                                </h3>

                                                        <div class="item-compare">
                                                                <span>RAM 8 GB</span>
                                                                <span>SSD 512 GB</span>
                                                        </div>

                                                        <div class="box-p">
                                                                <p class="price-old black">11.990.000₫</p>
                                                                <span class="percent">-29%</span>
                                                        </div>
                                                                <strong class="price">8.490.000₫</strong>
                                                                <p class="item-gift">Quà <b>100.000₫</b></p>
                                                                </a>
                                                        <div class="item-rating">
                                                                <p>
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star-half"></i>
                                                                </p>
                                                                <p class="item-rating-total">27</p>
                                                        </div>
                                                        <div class="item-bottom">
                                                                <a href="#" class="shiping"></a>
                                                        </div>
                                                        <div class="utility">
                                                                <p>Màn hình: 15.6", Full HD, 144Hz</p>
                                                                <p>CPU: i5, 11400H, 2.7GHz</p>
                                                                <p>Card: RTX 2050 4GB</p>
                                                                <p>Pin: 3-cell, 48Wh</p>
                                                                <p>Khối lượng: 2.3 kg</p>
                                                        </div>
                                                                                        
                                                                <a href="javascript:void(0)" class="item-ss">
                                                                        <i></i>
                                                                        So sánh
                                                                </a>
                                                        </div>
                                                </div>
                                                <div class="owl-item active" style="width: 220px; margin-right: 8px;">
                                                        <div class="item" data-productid="316940" data-pos="2" data-id="316940">
                                                                <a href="/laptop/msi-gaming-gf63-thin-12ucx-i5-873vn" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop MSI Gaming GF63 Thin 12UCX i5 12450H/16GB/512GB/4GB RTX2050/144Hz/Win11 (873VN)" data-id="316940" data-price="15990000.0" data-brand="MSI" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
                                                        <div class="item-label">
                                                                <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>

                                                         </div>

                                                        <div class="item-img item-img_44">
                                                                <img class=" ls-is-cached lazyloaded" data-src="https://cdn.tgdd.vn/Products/Images/44/316940/TimerThumb/msi-gaming-gf63-thin-12ucx-i5-873vn-thumb.jpg" alt="MSI Gaming GF63 Thin 12UCX i5 12450H (873VN)" src="https://cdn.tgdd.vn/Products/Images/44/316940/TimerThumb/msi-gaming-gf63-thin-12ucx-i5-873vn-thumb.jpg">
                                                                <img src="https://cdn.tgdd.vn/ValueIcons/i5-gen-12-13.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
                                                        </div>
                                                                <p class="result-label temp3"><img width="20" height="20" class=" ls-is-cached lazyloaded" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png" src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
                                                                <h3 title="Laptop MSI Gaming GF63 Thin 12UCX i5 12450H/16GB/512GB/4GB RTX2050/144Hz/Win11 (873VN)">
                                                                MSI Gaming GF63 Thin 12UCX i5 12450H (873VN)
                                                                </h3>
                                                        <div class="item-compare">
                                                                <span>RAM 16 GB</span>
                                                                <span>SSD 512 GB</span>
                                                        </div>
                                                        <div class="box-p">
                                                                <p class="price-old black">18.990.000₫</p>
                                                                <span class="percent">-15%</span>
                                                        </div>
                                                                <strong class="price">15.990.000₫</strong>
                                                                <p class="item-gift">Quà <b>900.000₫</b></p>
                                                                </a>
                                                        <div class="item-bottom">
                                                                <a href="#" class="shiping"></a>
                                                        </div>
                                                        <div class="utility">
                                                                <p>Màn hình: 15.6", Full HD, 144Hz</p>
                                                                <p>CPU: i5, 12450H, 2GHz</p>
                                                                <p>Card: RTX 2050 4GB</p>
                                                                <p>Pin: 3-cell Li-ion, 52.4 Wh</p>
                                                                <p>Khối lượng: 1.86 kg</p>
                                                        </div>
                                                                <a href="javascript:void(0)" class="item-ss">
                                                                <i></i>
                                                                So sánh
                                                                </a>


                                                        </div>
                                                </div> 
                                                <div class="owl-item active" style="width: 220px; margin-right: 8px;">
                                                        <div class="item" data-productid="316940" data-pos="2" data-id="316940">
                                                                <a href="/laptop/msi-gaming-gf63-thin-12ucx-i5-873vn" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop MSI Gaming GF63 Thin 12UCX i5 12450H/16GB/512GB/4GB RTX2050/144Hz/Win11 (873VN)" data-id="316940" data-price="15990000.0" data-brand="MSI" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
                                                        <div class="item-label">
                                                                <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>
                                                        </div>

                                                        <div class="item-img item-img_44">
                                                                <img class=" ls-is-cached lazyloaded" data-src="https://cdn.tgdd.vn/Products/Images/44/316940/TimerThumb/msi-gaming-gf63-thin-12ucx-i5-873vn-thumb.jpg" alt="MSI Gaming GF63 Thin 12UCX i5 12450H (873VN)" src="https://cdn.tgdd.vn/Products/Images/44/316940/TimerThumb/msi-gaming-gf63-thin-12ucx-i5-873vn-thumb.jpg">
                                                                <img src="https://cdn.tgdd.vn/ValueIcons/i5-gen-12-13.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
                                                        </div>
                                                                <p class="result-label temp3"><img width="20" height="20" class=" ls-is-cached lazyloaded" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png" src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
                                                                <h3 title="Laptop MSI Gaming GF63 Thin 12UCX i5 12450H/16GB/512GB/4GB RTX2050/144Hz/Win11 (873VN)">
                                                                MSI Gaming GF63 Thin 12UCX i5 12450H (873VN)
                                                                </h3>
                                                        <div class="item-compare">
                                                                <span>RAM 16 GB</span>
                                                                <span>SSD 512 GB</span>
                                                        </div>
                                                        <div class="box-p">
                                                                <p class="price-old black">18.990.000₫</p>
                                                                <span class="percent">-15%</span>
                                                                </div>
                                                                <strong class="price">15.990.000₫</strong>
                                                                <p class="item-gift">Quà <b>900.000₫</b></p>
                                                                </a>
                                                        <div class="item-bottom">
                                                                <a href="#" class="shiping"></a>
                                                        </div>
                                                        <div class="utility">
                                                        <p>Màn hình: 15.6", Full HD, 144Hz</p>
                                                                <p>CPU: i5, 12450H, 2GHz</p>
                                                                <p>Card: RTX 2050 4GB</p>
                                                                <p>Pin: 3-cell Li-ion, 52.4 Wh</p>
                                                                <p>Khối lượng: 1.86 kg</p>                      
                                                        </div>
                                                                <a href="javascript:void(0)" class="item-ss">
                                                                <i></i>
                                                                So sánh
                                                                </a>

                                                        </div>
                                                </div>
                                                <div class="owl-item active" style="width: 220px; margin-right: 8px;">
                                                        <div class="item" data-productid="316940" data-pos="2" data-id="316940">
                                                        <a href="/laptop/msi-gaming-gf63-thin-12ucx-i5-873vn" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop MSI Gaming GF63 Thin 12UCX i5 12450H/16GB/512GB/4GB RTX2050/144Hz/Win11 (873VN)" data-id="316940" data-price="15990000.0" data-brand="MSI" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
                                                                <div class="item-label">
                                                                <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>

                                                        </div>

                                                        <div class="item-img item-img_44">
                                                                <img class=" ls-is-cached lazyloaded" data-src="https://cdn.tgdd.vn/Products/Images/44/316940/TimerThumb/msi-gaming-gf63-thin-12ucx-i5-873vn-thumb.jpg" alt="MSI Gaming GF63 Thin 12UCX i5 12450H (873VN)" src="https://cdn.tgdd.vn/Products/Images/44/316940/TimerThumb/msi-gaming-gf63-thin-12ucx-i5-873vn-thumb.jpg">
                                                                <img src="https://cdn.tgdd.vn/ValueIcons/i5-gen-12-13.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
                                                        </div>
                                                                <p class="result-label temp3"><img width="20" height="20" class=" ls-is-cached lazyloaded" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png" src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
                                                                <h3 title="Laptop MSI Gaming GF63 Thin 12UCX i5 12450H/16GB/512GB/4GB RTX2050/144Hz/Win11 (873VN)">
                                                                MSI Gaming GF63 Thin 12UCX i5 12450H (873VN)
                                                                </h3>
                                                        <div class="item-compare">
                                                                <span>RAM 16 GB</span>
                                                                <span>SSD 512 GB</span>
                                                        </div>
                                                        <div class="box-p">
                                                                <p class="price-old black">18.990.000₫</p>
                                                                <span class="percent">-15%</span>
                                                        </div>
                                                                <strong class="price">15.990.000₫</strong>



                                                                <p class="item-gift">Quà <b>900.000₫</b></p>
                                                                </a>
                                                        <div class="item-bottom">
                                                                <a href="#" class="shiping"></a>
                                                        </div>
                                                        <div class="utility">
                                                                <p>Màn hình: 15.6", Full HD, 144Hz</p>
                                                                <p>CPU: i5, 12450H, 2GHz</p>
                                                                <p>Card: RTX 2050 4GB</p>
                                                                <p>Pin: 3-cell Li-ion, 52.4 Wh</p>
                                                                <p>Khối lượng: 1.86 kg</p>
                                                        </div>
                                

                                                        <a href="javascript:void(0)" class="item-ss">
                                                                <i></i>
                                                                So sánh
                                                                </a>


                                                        </div>
                                                </div>
                                                <div class="owl-item active" style="width: 220px; margin-right: 8px;">
                                                        <div class="item" data-productid="313176" data-pos="5" data-id="313176">
                                                        <a href="/laptop/acer-aspire-7-gaming-a715-76g-59mw-i5-nhqmysv001?utm_flashsale=1" data-s="OnlineSavingCMS" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Acer Aspire 7 Gaming A715 76G 59MW i5 12450H/8GB/512GB/4GB RTX2050/144Hz/Win11 (NH.QMYSV.001)" data-id="313176" data-price="17690000.0" data-brand="Acer" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
                                                        <div class="item-label">
                                                                <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>

                                                        </div>

                                                        <div class="item-img item-img_44">
                                                                <img class=" ls-is-cached lazyloaded" data-src="https://cdn.tgdd.vn/Products/Images/44/313176/acer-aspire-7-gaming-a715-76g-59mw-i5-nhqmysv001-thumb-600x600.jpg" alt="Acer Aspire 7 Gaming A715 76G 59MW i5 12450H (NH.QMYSV.001)" src="https://cdn.tgdd.vn/Products/Images/44/313176/acer-aspire-7-gaming-a715-76g-59mw-i5-nhqmysv001-thumb-600x600.jpg">
                                                                <img src="https://cdn.tgdd.vn/ValueIcons/label-1nam-3s1.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
                                                        </div>
                                                                <p class="result-label temp3"><img width="20" height="20" class=" ls-is-cached lazyloaded" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png" src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
                                                                <h3 title="Laptop Acer Aspire 7 Gaming A715 76G 59MW i5 12450H/8GB/512GB/4GB RTX2050/144Hz/Win11 (NH.QMYSV.001)">
                                                                Acer Aspire 7 Gaming A715 76G 59MW i5 12450H (NH.QMYSV.001)
                                                        </h3>
                                                        <div class="item-compare">
                                                                <span>RAM 8 GB</span>
                                                                <span>SSD 512 GB</span>
                                                        </div>
                                                                <p class="item-txt-online"><i></i>Online giá rẻ quá</p>
                                                        <div class="box-p">
                                                                <p class="price-old black">21.490.000₫</p>
                                                                <span class="percent">-17%</span>
                                                        </div>
                                                                <strong class="price">17.690.000₫</strong>



                                                                </a>
                                                        <div class="item-bottom">
                                                                <a href="#" class="shiping"></a>
                                                        </div>
                                                        <div class="utility">
                                                                <p>Màn hình: 15.6", Full HD, 144Hz</p>
                                                                <p>CPU: i5, 12450H, 2GHz</p>
                                                                <p>Card: RTX 2050 4GB</p>
                                                                <p>Pin: 3-cell, 50Wh</p>
                                                                <p>Khối lượng: 2.1 kg</p>
                                                        </div>
                                

                                                                <a href="javascript:void(0)" class="item-ss">
                                                                        <i></i>
                                                                        So sánh
                                                                </a>

                                                        <div class="fs-contain">
                                


                                                                <img width="15" height="15" src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/mwgcart/mwgcore/ContentMwg/images/fs-iconfire.png" alt="icon flashsale">
                                                                <span class="rq_count fscount ">
                                                                <i style="width:80%;" class="fs-iconfire">
                                                                </i>
                                                                <b>Còn 8/10 suất</b>
                                                                </span>

                                                        </div>

                                                        </div>
                                                </div>
                                                <div class="owl-item active" style="width: 220px; margin-right: 8px;">
                                                        <div class="item" data-productid="231244" data-pos="6" data-id="231244">
                                                                <a href="/laptop/apple-macbook-air-2020-mgn63saa?utm_flashsale=1" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Apple MacBook Air 13 inch M1 2020 8-core CPU/8GB/256GB/7-core GPU" data-id="231244" data-price="18990000.0" data-brand="MacBook" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
                                                        <div class="item-label">

                                                        </div>

                                                        <div class="item-img item-img_44">
                                                                <img class=" ls-is-cached lazyloaded" data-src="https://cdn.tgdd.vn/Products/Images/44/231244/macbook-air-m1-2020-gray-600x600.jpg" alt="MacBook Air 13 inch M1 2020 7-core GPU" src="https://cdn.tgdd.vn/Products/Images/44/231244/macbook-air-m1-2020-gray-600x600.jpg">
                                                        </div>
                                                                <p class="result-label temp1"><img width="20" height="20" class=" ls-is-cached lazyloaded" alt="Giảm Giá Mạnh" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2024/02/content/50x50--1--100x100.png" src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2024/02/content/50x50--1--100x100.png"><span>Giảm Giá Mạnh</span></p>
                                                                <h3 title="Laptop Apple MacBook Air 13 inch M1 2020 8-core CPU/8GB/256GB/7-core GPU">
                                                                MacBook Air 13 inch M1 2020 7-core GPU
                                                                </h3>
                                                        <div class="item-compare">
                                                                <span>RAM 8 GB</span>
                                                                <span>SSD 256 GB</span>
                                                        </div>
                                                        <div class="box-p">
                                                                <p class="price-old black">19.590.000₫</p>
                                                        </div>
                                                                <strong class="price">18.990.000₫</strong>



                                                                </a>
                                                        <div class="item-rating">
                                                                <p>
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star-dark"></i>
                                                                </p>
                                                                <p class="item-rating-total">202</p>
                                                        </div>
                                                        <div class="item-bottom">
                                                                <a href="#" class="shiping"></a>
                                                        </div>
                                                        <div class="utility">
                                                                <p>Màn hình: 13.3", Retina</p>
                                                                <p>CPU: Apple M1</p>
                                                                <p>Card: 7 nhân GPU</p>
                                                                <p>Pin: Lên đến 18 giờ</p>
                                                                <p>Khối lượng: 1.29 kg</p>
                                                        </div>
                                

                                                                <a href="javascript:void(0)" class="item-ss">
                                                                <i></i>
                                                                So sánh
                                                                </a>


                                                        </div>
                                                </div>
                                                <div class="owl-item active" style="width: 220px; margin-right: 8px;">
                                                        <div class="item" data-productid="309724" data-pos="7" data-id="309724">
                                                                <a href="/laptop/lenovo-ideapad-3-15itl6-i3-82h803sfvn" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Lenovo Ideapad 3 15ITL6 i3 1115G4/8GB/512GB/Win11 (82H803SFVN)" data-id="309724" data-price="8790000.0" data-brand="Lenovo" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
                                                        <div class="item-label">
                                                                <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>

                                                        </div>

                                                        <div class="item-img item-img_44">
                                                                <img class=" ls-is-cached lazyloaded" data-src="https://cdn.tgdd.vn/Products/Images/44/309724/lenovo-ideapad-3-15itl6-i3-82h803sfvn-thumb-600x600.jpg" alt="Lenovo Ideapad 3 15ITL6 i3 1115G4 (82H803SFVN)" src="https://cdn.tgdd.vn/Products/Images/44/309724/lenovo-ideapad-3-15itl6-i3-82h803sfvn-thumb-600x600.jpg">
                                                                <img src="https://cdn.tgdd.vn/2023/10/campaign/label-tgdd-200x200.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
                                                        </div>
                                                                <p class="result-label temp3"><img width="20" height="20" class=" ls-is-cached lazyloaded" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png" src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
                                                                <h3 title="Laptop Lenovo Ideapad 3 15ITL6 i3 1115G4/8GB/512GB/Win11 (82H803SFVN)">
                                                                Lenovo Ideapad 3 15ITL6 i3 1115G4 (82H803SFVN)
                                                                </h3>
                                                        <div class="item-compare">
                                                                <span>RAM 8 GB</span>
                                                                <span>SSD 512 GB</span>
                                                        </div>
                                                        <div class="box-p">
                                                                <p class="price-old black">11.290.000₫</p>
                                                                <span class="percent">-22%</span>
                                                        </div>
                                                                <strong class="price">8.790.000₫</strong>



                                                                <p class="item-gift">Quà <b>100.000₫</b></p>
                                                                </a>
                                                                <div class="item-rating">
                                                                <p>
                                                                        <i class="icon-star"></i>
                                                                        <i class="icon-star"></i>
                                                                        <i class="icon-star"></i>
                                                                        <i class="icon-star"></i>
                                                                        <i class="icon-star-dark"></i>
                                                                </p>
                                                                <p class="item-rating-total">17</p>
                                                        </div>
                                                        <div class="item-bottom">
                                                                <a href="#" class="shiping"></a>
                                                        </div>
                                                        <div class="utility">
                                                                <p>Màn hình: 15.6", Full HD</p>
                                                                <p>CPU: i3, 1115G4, 3GHz</p>
                                                                <p>Card: Intel UHD</p>
                                                                <p>Pin: 45Wh</p>
                                                                <p>Khối lượng: 1.65 kg</p>
                                                        </div>
                                

                                                                <a href="javascript:void(0)" class="item-ss">
                                                                <i></i>
                                                                So sánh
                                                                </a>


                                                        </div>
                                                </div>
                                                <div class="owl-item active" style="width: 220px; margin-right: 8px;">
                                                        <div class="item" data-productid="309724" data-pos="7" data-id="309724">
                                                                <a href="/laptop/lenovo-ideapad-3-15itl6-i3-82h803sfvn" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Lenovo Ideapad 3 15ITL6 i3 1115G4/8GB/512GB/Win11 (82H803SFVN)" data-id="309724" data-price="8790000.0" data-brand="Lenovo" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
                                                        <div class="item-label">
                                                                <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>

                                                        </div>

                                                                <div class="item-img item-img_44">
                                                                <img class=" ls-is-cached lazyloaded" data-src="https://cdn.tgdd.vn/Products/Images/44/309724/lenovo-ideapad-3-15itl6-i3-82h803sfvn-thumb-600x600.jpg" alt="Lenovo Ideapad 3 15ITL6 i3 1115G4 (82H803SFVN)" src="https://cdn.tgdd.vn/Products/Images/44/309724/lenovo-ideapad-3-15itl6-i3-82h803sfvn-thumb-600x600.jpg">
                                                                <img src="https://cdn.tgdd.vn/2023/10/campaign/label-tgdd-200x200.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
                                                        </div>
                                                                <p class="result-label temp3"><img width="20" height="20" class=" ls-is-cached lazyloaded" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png" src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
                                                                <h3 title="Laptop Lenovo Ideapad 3 15ITL6 i3 1115G4/8GB/512GB/Win11 (82H803SFVN)">
                                                                Lenovo Ideapad 3 15ITL6 i3 1115G4 (82H803SFVN)
                                                                </h3>
                                                                <div class="item-compare">
                                                                <span>RAM 8 GB</span>
                                                                <span>SSD 512 GB</span>
                                                        </div>
                                                                <div class="box-p">
                                                                <p class="price-old black">11.290.000₫</p>
                                                                <span class="percent">-22%</span>
                                                        </div>
                                                                <strong class="price">8.790.000₫</strong>



                                                                <p class="item-gift">Quà <b>100.000₫</b></p>
                                                                </a>
                                                        <div class="item-rating">
                                                        <p>
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star-dark"></i>
                                                        </p>
                                                                        <p class="item-rating-total">17</p>
                                                        </div>
                                                        <div class="item-bottom">
                                                                <a href="#" class="shiping"></a>
                                                        </div>
                                                        <div class="utility">
                                                                <p>Màn hình: 15.6", Full HD</p>
                                                                <p>CPU: i3, 1115G4, 3GHz</p>
                                                                <p>Card: Intel UHD</p>
                                                                <p>Pin: 45Wh</p>
                                                                <p>Khối lượng: 1.65 kg</p>
                                                        </div>
                                        

                                                                <a href="javascript:void(0)" class="item-ss">
                                                                        <i></i>
                                                                        So sánh
                                                                </a>


                                                        </div>
                                                </div>
                                                <div class="owl-item active" style="width: 220px; margin-right: 8px;">
                                                        <div class="item" data-productid="302266" data-pos="8" data-id="302266">
                                                                <a href="/laptop/dell-inspiron-15-3520-i3-i3u082w11blu" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Dell Inspiron 15 3520 i3 1215U/8GB/256GB/120Hz/OfficeHS/Win11 (i3U082W11BLU)" data-id="302266" data-price="10990000.0" data-brand="Dell" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
                                                        <div class="item-label">
                                                                <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>

                                                        </div>

                                                        <div class="item-img item-img_44">
                                                                <img class=" ls-is-cached lazyloaded" data-src="https://cdn.tgdd.vn/Products/Images/44/302266/TimerThumb/dell-inspiron-15-3520-i3-i3u082w11blu.jpg" alt="Dell Inspiron 15 3520 i3 1215U (i3U082W11BLU)" src="https://cdn.tgdd.vn/Products/Images/44/302266/TimerThumb/dell-inspiron-15-3520-i3-i3u082w11blu.jpg">
                                                                <img src="https://cdn.tgdd.vn/ValueIcons/label-office-ban-quyen.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
                                                        </div>
                                                                <p class="result-label temp3"><img width="20" height="20" class=" ls-is-cached lazyloaded" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png" src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
                                                                <h3 title="Laptop Dell Inspiron 15 3520 i3 1215U/8GB/256GB/120Hz/OfficeHS/Win11 (i3U082W11BLU)">
                                                                Dell Inspiron 15 3520 i3 1215U (i3U082W11BLU)
                                                                </h3>
                                                        <div class="item-compare">
                                                                <span>RAM 8 GB</span>
                                                                <span>SSD 256 GB</span>
                                                        </div>
                                                        <div class="box-p">
                                                                <p class="price-old black">12.990.000₫</p>
                                                                <span class="percent">-15%</span>
                                                        </div>
                                                                <strong class="price">10.990.000₫</strong>



                                                                <p class="item-gift">Quà <b>100.000₫</b></p>
                                                                </a>
                                                        <div class="item-rating">
                                                                <p>
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star-dark"></i>
                                                                </p>
                                                                <p class="item-rating-total">23</p>
                                                        </div>
                                                        <div class="item-bottom">
                                                                <a href="#" class="shiping"></a>
                                                        </div>
                                                        <div class="utility">
                                                                <p>Màn hình: 15.6", Full HD, 120Hz</p>
                                                                <p>CPU: i3, 1215U, 1.2GHz</p>
                                                                <p>Card: Intel UHD</p>
                                                                <p>Pin: 3-cell, 41Wh</p>
                                                                <p>Khối lượng: 1.9 kg</p>
                                                        </div>
                                

                                                        <a href="javascript:void(0)" class="item-ss">
                                                                <i></i>
                                                                So sánh
                                                        </a>


                                                        </div>
                                                </div>
                                                <div class="owl-item active" style="width: 220px; margin-right: 8px;">
                                                        <div class="item" data-productid="315911" data-pos="9" data-id="315911">
                                                                <a href="/laptop/hp-pavilion-15-eg3095tu-i5-8c5l6pa?utm_flashsale=1" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop HP Pavilion 15 eg3095TU i5 1335U/8GB/512GB/Win11 (8C5L6PA)" data-id="315911" data-price="17390000.0" data-brand="HP" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
                                                        <div class="item-label">
                                                                <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>

                                                        </div>

                                                        <div class="item-img item-img_44">
                                                                <img class=" ls-is-cached lazyloaded" data-src="https://cdn.tgdd.vn/Products/Images/44/315911/hp-pavilion-15-eg3095tu-i5-8c5l6pa-thumb-1-600x600.jpg" alt="HP Pavilion 15 eg3095TU i5 1335U (8C5L6PA)" src="https://cdn.tgdd.vn/Products/Images/44/315911/hp-pavilion-15-eg3095tu-i5-8c5l6pa-thumb-1-600x600.jpg">
                                                                <img src="https://cdn.tgdd.vn/ValueIcons/i5-gen-12-13.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
                                                        </div>
                                                                <p class="result-label temp3"><img width="20" height="20" class=" ls-is-cached lazyloaded" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png" src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
                                                                <h3 title="Laptop HP Pavilion 15 eg3095TU i5 1335U/8GB/512GB/Win11 (8C5L6PA)">
                                                                HP Pavilion 15 eg3095TU i5 1335U (8C5L6PA)
                                                                </h3>
                                                        <div class="item-compare">
                                                                <span>RAM 8 GB</span>
                                                                <span>SSD 512 GB</span>
                                                        </div>
                                                        <div class="box-p">
                                                                <p class="price-old black">19.990.000₫</p>
                                                                <span class="percent">-13%</span>
                                                        </div>
                                                                <strong class="price">17.390.000₫</strong>



                                                                <p class="item-gift">Quà <b>100.000₫</b></p>
                                                                </a>
                                                        <div class="item-bottom">
                                                                <a href="#" class="shiping"></a>
                                                        </div>
                                                        <div class="utility">
                                                                <p>Màn hình: 15.6", Full HD</p>
                                                                <p>CPU: i5, 1335U, 1.3GHz</p>
                                                                <p>Card: Intel Iris Xe</p>
                                                                <p>Pin: 3-cell, 41Wh</p>
                                                                <p>Khối lượng: 1.74 kg</p>
                                                        </div>
                                

                                                                <a href="javascript:void(0)" class="item-ss">
                                                                        <i></i>
                                                                        So sánh
                                                                </a>


                                                        </div>
                                                </div>
                                                <div class="owl-item active" style="width: 220px; margin-right: 8px;">
                                                        <div class="item" data-productid="309373" data-pos="10" data-id="309373">
                                                                <a href="/laptop/asus-tuf-gaming-f15-fx506hc-i5-hn949w?utm_flashsale=1" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Asus TUF Gaming F15 FX506HC i5 11400H/16GB/512GB/4GB RTX3050/144Hz/Win11 (HN949W)" data-id="309373" data-price="18990000.0" data-brand="Asus" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
                                                        <div class="item-label">
                                                                <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>

                                                        </div>

                                                        <div class="item-img item-img_44">
                                                                <img class=" ls-is-cached lazyloaded" data-src="https://cdn.tgdd.vn/Products/Images/44/309373/asus-tuf-gaming-f15-fx506hc-i5-hn949w-thumb-600x600.jpg" alt="Asus TUF Gaming F15 FX506HC i5 11400H (HN949W)" src="https://cdn.tgdd.vn/Products/Images/44/309373/asus-tuf-gaming-f15-fx506hc-i5-hn949w-thumb-600x600.jpg">
                                                                <img src="https://cdn.tgdd.vn/ValueIcons/label-rtx-30-final.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
                                                        </div>
                                                                <p class="result-label temp3"><img width="20" height="20" class=" ls-is-cached lazyloaded" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png" src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
                                                                <h3 title="Laptop Asus TUF Gaming F15 FX506HC i5 11400H/16GB/512GB/4GB RTX3050/144Hz/Win11 (HN949W)">
                                                                Asus TUF Gaming F15 FX506HC i5 11400H (HN949W)
                                                                </h3>
                                                        <div class="item-compare">
                                                                <span>RAM 16 GB</span>
                                                                <span>SSD 512 GB</span>
                                                        </div>
                                                        <div class="box-p">
                                                                <p class="price-old black">22.990.000₫</p>
                                                                <span class="percent">-17%</span>
                                                        </div>
                                                                <strong class="price">18.990.000₫</strong>



                                                                <p class="item-gift">Quà <b>900.000₫</b></p>
                                                                </a>
                                                        <div class="item-rating">
                                                                <p>
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star-dark"></i>
                                                                </p>
                                                                <p class="item-rating-total">30</p>
                                                        </div>
                                                        <div class="item-bottom">
                                                                <a href="#" class="shiping"></a>
                                                        </div>
                                                        <div class="utility">
                                                                <p>Màn hình: 15.6", Full HD, 144Hz</p>
                                                                <p>CPU: i5, 11400H, 2.7GHz</p>
                                                                <p>Card: RTX 3050 4GB</p>
                                                                <p>Pin: 3-cell, 48Wh</p>
                                                                <p>Khối lượng: 2.3 kg</p>
                                                        </div>
                                                                

                                                                <a href="javascript:void(0)" class="item-ss">
                                                                        <i></i>
                                                                        So sánh
                                                                </a>


                                                        </div>
                                                </div>
                            
                                                    <!-- AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA -->
                                                </div>
                                        </div>
                                        <!--  -->
                                        <div class="owl-nav">
                                                <button type="button" role="presentation" class="owl-prev">
                                                        <span aria-label="Previous">‹</span></button>
                                                <button type="button" role="presentation" class="owl-next">
                                                        <span aria-label="Next">›</span></button>
                                        </div>
                                        <!--  -->
                                        <div class="owl-dots disabled">

                                        </div>
                                </div>
                                <a href="https://www.thegioididong.com/laptop-gia-soc" class="block-btn">
                                        <span>Xem tất cả Deal sốc</span>
                                </a>
                        </div>
                </section>
            </div>


              <!--  -->
              <div class="banner-cushion">
        <section>
            
        <div class="bannercushion">
                <div class="cushion-slider">
                 <div class="slider-banner owl-carousel owl-loaded owl-drag">
                        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1210px;">
                                <div class="owl-item active" style="width: 393.333px; margin-right: 10px;">
                                        <a aria-label="slide" data-cate="44" data-place="7325" rel="nofollow" href="https://www.thegioididong.com/tin-tuc/dau-la-goi-office-365-phu-hop-nhat-1543723" onclick="jQuery.ajax({ url: '/bannertracking?bid=79200&amp;r='+ (new Date).getTime(), async: true, cache: false });" target="_blank">      
                                        <img width="394" height="98" loading="lazy" class=" lazyloaded" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2024/02/banner/sticky-office-desk-2-390x97.png" alt="SIS Laptop - Intel" src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2024/02/banner/sticky-office-desk-2-390x97.png"></a>
                                </div>

                                <div class="owl-item active" style="width: 393.333px; margin-right: 10px;"><a aria-label="slide" data-cate="44" data-place="7325" rel="nofollow" href="https://www.thegioididong.com/intel-gen-13" onclick="jQuery.ajax({ url: '/bannertracking?bid=77755&amp;r='+ (new Date).getTime(), async: true, cache: false });" target="_blank">
                                        <img width="394" height="98" loading="lazy" class=" lazyloaded" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/07/banner/sticky-intel-13-desk-390x97-1.png" alt="SIS Laptop - Intel Gen 13" src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/07/banner/sticky-intel-13-desk-390x97-1.png"></a> 
                                </div>

                                <div class="owl-item active" style="width: 393.333px; margin-right: 10px;"><a aria-label="slide" data-cate="44" data-place="7325" rel="nofollow" href="https://www.thegioididong.com/intel-evo" onclick="jQuery.ajax({ url: '/bannertracking?bid=78217&amp;r='+ (new Date).getTime(), async: true, cache: false });" target="_blank">
                                        <img width="394" height="98" loading="lazy" class=" lazyloaded" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/09/banner/sticky-evo-desk-390x97.png" alt="Sticky Intel Evo" src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/09/banner/sticky-evo-desk-390x97.png"></a></div></div>
                                </div>

                                <div class="owl-nav disabled">  
                                        <button type="button" role="presentation" class="owl-prev">
                                                <span aria-label="Previous">‹</span> 
                                        </button>

                                        <button type="button" role="presentation" class="owl-next">
                                                <span aria-label="Next">›</span>
                                        </button>
                                </div>

                        <div class="owl-dots disabled">

                        </div>
                        
                        </div>
                </div>
        </div>

        </section>
    </div>
            <!--  -->  
            <div class="content">
            <div class="block" id="gaming">
                <section>
                    <div class="block__banner">
                        
    <div class="">
            <div class="item_banner" data-href="https://www.thegioididong.com/laptop?g=laptop-gaming" style="background-color:#FED403">
                <a data-cate="44" data-place="1694" rel="nofollow" href="javascript:;" onclick="jQuery.ajax({ url: '/bannertracking?bid=62431&amp;r='+ (new Date).getTime(), async: true, cache: false });"><img style="cursor:pointer" src="https://cdn.tgdd.vn/2024/02/banner/dem-gaming-desk-1200x200.png" alt="Gaming B2S" width="1200" height="200"></a>
            </div>
    </div>

                            <div class="question" onclick="CloseCriteria(this)">
                                <span class="text-hover">Laptop Gaming là gì?</span>
                                <img class="banner-icon" src="//cdn.tgdd.vn/mwgcart/mwgcore/ContentMwg/images/laptop/icon-question.v202307010120.png">
                            </div>
                            <a class="_criteria" onclick="CloseCriteria(this)" href="javascript:;">
                                <div data-htmlid="3602">
                                    <span></span>
                                    <div>
                                        <p><strong>LAPTOP GAMING</strong><br>Mạnh mẽ về cấu hình, trang bị card đồ hoạ rời và có thiết kế góc cạnh, đậm chất gaming, tản nhiệt tốt. Nhiều máy còn có màn hình lớn sắc nét, tần số quét cao, đèn bàn phím màu sắc,...<br><br>Cấu hình tối thiểu:<br><img src="https://cdn.tgdd.vn/2021/09/content/icon-cpu-new-42x42-3.png" data-mce-src="https://cdn.tgdd.vn/2021/09/content/icon-cpu-new-42x42-3.png">&nbsp;CPU: Intel Core i5 / AMD Ryzen 5<br><img src="https://cdn.tgdd.vn/2021/09/content/icon-ram-new-42x42-4.png" data-mce-src="https://cdn.tgdd.vn/2021/09/content/icon-ram-new-42x42-4.png">&nbsp;RAM: 8 GB<br><img src="https://cdn.tgdd.vn/2021/09/content/icon-o-cung-new-42x42-5.png" data-mce-src="https://cdn.tgdd.vn/2021/09/content/icon-o-cung-new-42x42-5.png">&nbsp;Ổ cứng: SSD 512 GB<br><img src="https://cdn.tgdd.vn/2021/09/content/icon-card-new-42x42-1.png" data-mce-src="https://cdn.tgdd.vn/2021/09/content/icon-card-new-42x42-1.png">&nbsp;Card rời: GTX, RTX, Radeon RX,...<br><img src="https://cdn.tgdd.vn/2021/09/content/icon-man-hinh-new-42x42-11.png" data-mce-src="https://cdn.tgdd.vn/2021/09/content/icon-man-hinh-new-42x42-11.png">&nbsp;Màn hình: Full HD</p>
                                    </div>
                                </div>
                            </a>
                    </div>
                    
	<ul class="block__tab">

			<li class="active" data-url="/laptop?g=laptop-gaming" data-html-id="3596"><a href="javascript:;"> Nổi bật </a> </li>
			<li class="" data-url="/laptop?p=15-20-trieu&amp;g=laptop-gaming" data-cate-id="44" data-prop-value-ids="37699" data-price-id="13"><a href="javascript:;"> 15 - 20 triệu </a> </li>
			<li class="" data-url="/laptop-asus?g=laptop-gaming" data-cate-id="44" data-prop-value-ids="37699" data-manu-id="128"><a href="javascript:;"> Asus </a> </li>
			<li class="" data-url="/laptop-acer?g=laptop-gaming" data-cate-id="44" data-prop-value-ids="37699" data-manu-id="119"><a href="javascript:;"> Acer </a> </li>
			<li class="" data-url="/laptop-msi?g=laptop-gaming" data-cate-id="44" data-prop-value-ids="37699" data-manu-id="133"><a href="javascript:;"> MSI </a> </li>
			<li class="" data-url="/laptop-lenovo?g=laptop-gaming" data-cate-id="44" data-prop-value-ids="37699" data-manu-id="120"><a href="javascript:;"> Lenovo </a> </li>
			<li class="" data-url="/laptop?g=laptop-gaming#c=44&amp;p=37699,1416&amp;o=17&amp;pi=0" data-cate-id="44" data-prop-value-ids="37699,1416"><a href="javascript:;"> RAM 16 GB </a> </li>
			<li class="" data-url="/laptop?g=laptop-gaming#c=44&amp;p=37699,259624&amp;o=17&amp;pi=0" data-cate-id="44" data-prop-value-ids="37699,259624"><a href="javascript:;"> Card RTX 40 series </a> </li>
		 

	</ul>
<!--  -->

                    <div class="box-main-listproduct">
                        <div class="listproduct listproduct-block" data-url="/laptop?g=laptop-gaming">
                                <div class="item" data-id="304867">
                                        <a href="/laptop/asus-tuf-gaming-f15-fx506hf-i5-hn014w" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Asus TUF Gaming F15 FX506HF i5 11400H/8GB/512GB/4GB RTX2050/144Hz/Win11 (HN014W)" data-id="304867" data-price="16490000.0" data-brand="Asus" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
                                <div class="item-label">
                                        <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>

                                </div>

            <div class="item-img item-img_44">
                <img class=" ls-is-cached lazyloaded" data-src="https://cdn.tgdd.vn/Products/Images/44/304867/TimerThumb/asus-tuf-gaming-f15-fx506hf-i5-hn014w.jpg" alt="Asus TUF Gaming F15 FX506HF i5 11400H (HN014W)" src="https://cdn.tgdd.vn/Products/Images/44/304867/TimerThumb/asus-tuf-gaming-f15-fx506hf-i5-hn014w.jpg">
                    <img src="https://cdn.tgdd.vn/ValueIcons/Label_01-01.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>
<p class="result-label temp3"><img width="20" height="20" class=" ls-is-cached lazyloaded" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png" src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
        <h3 title="Laptop Asus TUF Gaming F15 FX506HF i5 11400H/8GB/512GB/4GB RTX2050/144Hz/Win11 (HN014W)">
            Asus TUF Gaming F15 FX506HF i5 11400H (HN014W)
        </h3>
            <div class="item-compare">
                        <span>RAM 8 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class="box-p">
                    <p class="price-old black">18.990.000₫</p>
                        <span class="percent">-13%</span>
                </div>
                <strong class="price">16.490.000₫</strong>



            <p class="item-gift">Quà <b>900.000₫</b></p>
    </a>
        <div class="item-rating">
            <p>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                                <i class="icon-star-half"></i>
            </p>
            <p class="item-rating-total">28</p>
        </div>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 15.6", Full HD, 144Hz</p>
            <p>CPU: i5, 11400H, 2.7GHz</p>
            <p>Card: RTX 2050 4GB</p>
            <p>Pin: 3-cell, 48Wh</p>
            <p>Khối lượng: 2.3 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="314630">
                                        <a href="/laptop/acer-aspire-5-a515-58gm-51lb-i5-nxkq4sv002" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Acer Aspire 5 Gaming A515 58GM 51LB i5 13420H/16GB/512GB/4GB RTX2050/Win11 (NX.KQ4SV.002)" data-id="314630" data-price="16990000.0" data-brand="Acer" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">
                    <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class="item-img item-img_44">
                <img class=" ls-is-cached lazyloaded" data-src="https://cdn.tgdd.vn/Products/Images/44/314630/TimerThumb/acer-aspire-5-a515-58gm-51lb-i5-nxkq4sv002.jpg" alt="Acer Aspire 5 Gaming A515 58GM 51LB i5 13420H (NX.KQ4SV.002)" src="https://cdn.tgdd.vn/Products/Images/44/314630/TimerThumb/acer-aspire-5-a515-58gm-51lb-i5-nxkq4sv002.jpg">
                    <img src="https://cdn.tgdd.vn/2023/10/campaign/label-tgdd-200x200.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>
<p class="result-label temp3"><img width="20" height="20" class=" ls-is-cached lazyloaded" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png" src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
        <h3 title="Laptop Acer Aspire 5 Gaming A515 58GM 51LB i5 13420H/16GB/512GB/4GB RTX2050/Win11 (NX.KQ4SV.002)">
            Acer Aspire 5 Gaming A515 58GM 51LB i5 13420H (NX.KQ4SV.002)
        </h3>
            <div class="item-compare">
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class="box-p">
                    <p class="price-old black">20.490.000₫</p>
                        <span class="percent">-17%</span>
                </div>
                <strong class="price">16.990.000₫</strong>



            <p class="item-gift">Quà <b>900.000₫</b></p>
    </a>
        <div class="item-rating">
            <p>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                                <i class="icon-star-dark"></i>
            </p>
            <p class="item-rating-total">17</p>
        </div>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 15.6", Full HD</p>
            <p>CPU: i5, 13420H, 2.1GHz</p>
            <p>Card: RTX 2050 4GB</p>
            <p>Pin: 3-cell, 50Wh</p>
            <p>Khối lượng: 1.7 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="318163">
                                        <a href="/laptop/hp-victus-15-fa1139tx-i5-8y6w3pa" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop HP Gaming VICTUS 15 fa1139TX i5 12450H/16GB/512GB/4GB RTX2050/144Hz/Win11 (8Y6W3PA)" data-id="318163" data-price="18990000.0" data-brand="HP" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">
                    <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class="item-img item-img_44">
                <img class=" ls-is-cached lazyloaded" data-src="https://cdn.tgdd.vn/Products/Images/44/318163/TimerThumb/hp-victus-15-fa1139tx-i5-8y6w3pa.jpg" alt="HP Gaming VICTUS 15 fa1139TX i5 12450H (8Y6W3PA)" src="https://cdn.tgdd.vn/Products/Images/44/318163/TimerThumb/hp-victus-15-fa1139tx-i5-8y6w3pa.jpg">
                    <img src="https://cdn.tgdd.vn/ValueIcons/i5-gen-12-13.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>
<p class="result-label temp3"><img width="20" height="20" class=" ls-is-cached lazyloaded" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png" src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
        <h3 title="Laptop HP Gaming VICTUS 15 fa1139TX i5 12450H/16GB/512GB/4GB RTX2050/144Hz/Win11 (8Y6W3PA)">
            HP Gaming VICTUS 15 fa1139TX i5 12450H (8Y6W3PA)
        </h3>
            <div class="item-compare">
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class="box-p">
                    <p class="price-old black">24.590.000₫</p>
                        <span class="percent">-22%</span>
                </div>
                <strong class="price">18.990.000₫</strong>



            <p class="item-gift">Quà <b>900.000₫</b></p>
    </a>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 15.6", Full HD, 144Hz</p>
            <p>CPU: i5, 12450H, 2GHz</p>
            <p>Card: RTX 2050 4GB</p>
            <p>Pin: 3-cell, 52.5Wh</p>
            <p>Khối lượng: 2.29 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="313667">
                                        <a href="/laptop/lenovo-ideapad-gaming-3-15ach6-r5-82k2027pvn" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Lenovo Ideapad Gaming 3 15ACH6 R5 5500H/16GB/512GB/4GB RTX2050/144Hz/Win11 (82K2027PVN)" data-id="313667" data-price="15990000.0" data-brand="Lenovo" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">
                    <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class="item-img item-img_44">
                <img class=" ls-is-cached lazyloaded" data-src="https://cdn.tgdd.vn/Products/Images/44/313667/TimerThumb/lenovo-ideapad-gaming-3-15ach6-r5-82k2027pvn.jpg" alt="Lenovo Ideapad Gaming 3 15ACH6 R5 5500H (82K2027PVN)" src="https://cdn.tgdd.vn/Products/Images/44/313667/TimerThumb/lenovo-ideapad-gaming-3-15ach6-r5-82k2027pvn.jpg">
                    <img src="https://cdn.tgdd.vn/ValueIcons/bao-hanh-lenovo-2-nam-1.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>
<p class="result-label temp3"><img width="20" height="20" class=" ls-is-cached lazyloaded" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png" src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
        <h3 title="Laptop Lenovo Ideapad Gaming 3 15ACH6 R5 5500H/16GB/512GB/4GB RTX2050/144Hz/Win11 (82K2027PVN)">
            Lenovo Ideapad Gaming 3 15ACH6 R5 5500H (82K2027PVN)
        </h3>
            <div class="item-compare">
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class="box-p">
                    <p class="price-old black">18.990.000₫</p>
                        <span class="percent">-15%</span>
                </div>
                <strong class="price">15.990.000₫</strong>



            <p class="item-gift">Quà <b>900.000₫</b></p>
    </a>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 15.6", Full HD, 144Hz</p>
            <p>CPU: Ryzen 5, 5500H, 3.3GHz</p>
            <p>Card: RTX 2050 4GB</p>
            <p>Pin: 45Wh</p>
            <p>Khối lượng: 2.25 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="316940">
                                        <a href="/laptop/msi-gaming-gf63-thin-12ucx-i5-873vn" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop MSI Gaming GF63 Thin 12UCX i5 12450H/16GB/512GB/4GB RTX2050/144Hz/Win11 (873VN)" data-id="316940" data-price="15990000.0" data-brand="MSI" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">
                    <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class="item-img item-img_44">
                <img class=" ls-is-cached lazyloaded" data-src="https://cdn.tgdd.vn/Products/Images/44/316940/TimerThumb/msi-gaming-gf63-thin-12ucx-i5-873vn-thumb.jpg" alt="MSI Gaming GF63 Thin 12UCX i5 12450H (873VN)" src="https://cdn.tgdd.vn/Products/Images/44/316940/TimerThumb/msi-gaming-gf63-thin-12ucx-i5-873vn-thumb.jpg">
                    <img src="https://cdn.tgdd.vn/ValueIcons/i5-gen-12-13.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>
<p class="result-label temp3"><img width="20" height="20" class=" ls-is-cached lazyloaded" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png" src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
        <h3 title="Laptop MSI Gaming GF63 Thin 12UCX i5 12450H/16GB/512GB/4GB RTX2050/144Hz/Win11 (873VN)">
            MSI Gaming GF63 Thin 12UCX i5 12450H (873VN)
        </h3>
            <div class="item-compare">
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class="box-p">
                    <p class="price-old black">18.990.000₫</p>
                        <span class="percent">-15%</span>
                </div>
                <strong class="price">15.990.000₫</strong>



            <p class="item-gift">Quà <b>900.000₫</b></p>
    </a>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 15.6", Full HD, 144Hz</p>
            <p>CPU: i5, 12450H, 2GHz</p>
            <p>Card: RTX 2050 4GB</p>
            <p>Pin: 3-cell Li-ion, 52.4 Wh</p>
            <p>Khối lượng: 1.86 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="313177">
                                        <a href="/laptop/acer-aspire-7-gaming-a715-76g-5806-i5-nhqmfsv002?utm_flashsale=1" data-s="TwoPriceDetailCMS" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Acer Aspire 7 Gaming A715 76G 5806 i5 12450H/16GB/512GB/4GB RTX3050/144Hz/Win11 (NH.QMFSV.002)" data-id="313177" data-price="19790000.0" data-brand="Acer" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">
                    <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class="item-img item-img_44">
                <img class=" ls-is-cached lazyloaded" data-src="https://cdn.tgdd.vn/Products/Images/44/313177/acer-aspire-7-gaming-a715-76g-5806-i5-nhqmfsv002-thumb-600x600.jpg" alt="Acer Aspire 7 Gaming A715 76G 5806 i5 12450H (NH.QMFSV.002)" src="https://cdn.tgdd.vn/Products/Images/44/313177/acer-aspire-7-gaming-a715-76g-5806-i5-nhqmfsv002-thumb-600x600.jpg">
                    <img src="https://cdn.tgdd.vn/ValueIcons/label-rtx-30-final.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>
<p class="result-label temp3"><img width="20" height="20" class=" ls-is-cached lazyloaded" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png" src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
        <h3 title="Laptop Acer Aspire 7 Gaming A715 76G 5806 i5 12450H/16GB/512GB/4GB RTX3050/144Hz/Win11 (NH.QMFSV.002)">
            Acer Aspire 7 Gaming A715 76G 5806 i5 12450H (NH.QMFSV.002)
        </h3>
            <div class="item-compare">
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
            <p class="item-txt-online"><i></i>Online giá rẻ quá</p>
                <div class="box-p">
                    <p class="price-old black">22.990.000₫</p>
                        <span class="percent">-13%</span>
                </div>
                <strong class="price">19.790.000₫</strong>



            <p class="item-gift">Quà <b>900.000₫</b></p>
    </a>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 15.6", Full HD, 144Hz</p>
            <p>CPU: i5, 12450H, 2GHz</p>
            <p>Card: RTX 3050 4GB</p>
            <p>Pin: 3-cell, 50Wh</p>
            <p>Khối lượng: 2.1 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="317709">
                                        <a href="/laptop/asus-tuf-gaming-f15-fx507zc4-i5-hn229w" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Asus TUF Gaming F15 FX507ZC4 i5 12500H/16GB/1TB/4GB RTX3050/144Hz/Win11 (HN229W)" data-id="317709" data-price="20990000.0" data-brand="Asus" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">
                    <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class="item-img item-img_44">
                <img class=" ls-is-cached lazyloaded" data-src="https://cdn.tgdd.vn/Products/Images/44/317709/TimerThumb/asus-tuf-gaming-f15-fx507zc4-i5-hn229w.jpg" alt="Asus TUF Gaming F15 FX507ZC4 i5 12500H (HN229W)" src="https://cdn.tgdd.vn/Products/Images/44/317709/TimerThumb/asus-tuf-gaming-f15-fx507zc4-i5-hn229w.jpg">
                    <img src="https://cdn.tgdd.vn/ValueIcons/label-rtx-30-final.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>
<p class="result-label temp3"><img width="20" height="20" class=" ls-is-cached lazyloaded" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png" src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
        <h3 title="Laptop Asus TUF Gaming F15 FX507ZC4 i5 12500H/16GB/1TB/4GB RTX3050/144Hz/Win11 (HN229W)">
            Asus TUF Gaming F15 FX507ZC4 i5 12500H (HN229W)
        </h3>
            <div class="item-compare">
                        <span>RAM 16 GB</span>
                        <span>SSD 1 TB</span>
            </div>
                <div class="box-p">
                    <p class="price-old black">25.990.000₫</p>
                        <span class="percent">-19%</span>
                </div>
                <strong class="price">20.990.000₫</strong>



            <p class="item-gift">Quà <b>900.000₫</b></p>
    </a>
        <div class="item-rating">
            <p>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                                <i class="icon-star-dark"></i>
            </p>
            <p class="item-rating-total">7</p>
        </div>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 15.6", Full HD, 144Hz</p>
            <p>CPU: i5, 12500H, 2.5GHz</p>
            <p>Card: RTX 3050 4GB</p>
            <p>Pin: 4-cell, 56Wh</p>
            <p>Khối lượng: 2.2 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="321467">
                                        <a href="/laptop/hp-victus-15-fb1022ax-r5-94f19pa" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop HP Gaming VICTUS 15 fb1022AX R5 7535HS/16GB/512GB/4GB RTX2050/144Hz/Win11 (94F19PA)" data-id="321467" data-price="19990000.0" data-brand="HP" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">
                    <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class="item-img item-img_44">
                <img class=" ls-is-cached lazyloaded" data-src="https://cdn.tgdd.vn/Products/Images/44/321467/hp-victus-15-fb1022ax-r5-94f19pa-thumb-1-600x600.jpg" alt="HP Gaming VICTUS 15 fb1022AX R5 7535HS (94F19PA)" src="https://cdn.tgdd.vn/Products/Images/44/321467/hp-victus-15-fb1022ax-r5-94f19pa-thumb-1-600x600.jpg">
            </div>
<p class="result-label temp3"><img width="20" height="20" class=" ls-is-cached lazyloaded" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png" src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
        <h3 title="Laptop HP Gaming VICTUS 15 fb1022AX R5 7535HS/16GB/512GB/4GB RTX2050/144Hz/Win11 (94F19PA)">
            HP Gaming VICTUS 15 fb1022AX R5 7535HS (94F19PA)
        </h3>
            <div class="item-compare">
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class="box-p">
                    <p class="price-old black">25.490.000₫</p>
                        <span class="percent">-21%</span>
                </div>
                <strong class="price">19.990.000₫</strong>



            <p class="item-gift">Quà <b>900.000₫</b></p>
    </a>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 15.6", Full HD, 144Hz</p>
            <p>CPU: Ryzen 5, 7535HS, 3.3GHz</p>
            <p>Card: RTX 2050 4GB</p>
            <p>Pin: 3-cell, 52.5Wh</p>
            <p>Khối lượng: 2.29 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="313611">
                                        <a href="/laptop/lenovo-loq-gaming-15irh8-i5-82xv00q4vn" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Lenovo LOQ Gaming 15IRH8 i5 13420H/16GB/512GB/6GB RTX4050/144Hz/Win11 (82XV00Q4VN)" data-id="313611" data-price="25990000.0" data-brand="Lenovo" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">
                    <span class="lb-tragop">Trả góp 0%</span>

        </div>

            <div class="item-img item-img_44">
                <img class=" ls-is-cached lazyloaded" data-src="https://cdn.tgdd.vn/Products/Images/44/313611/lenovo-loq-gaming-15irh8-i5-82xv00q4vn-thumb-600x600.jpg" alt="Lenovo LOQ Gaming 15IRH8 i5 13420H (82XV00Q4VN)" src="https://cdn.tgdd.vn/Products/Images/44/313611/lenovo-loq-gaming-15irh8-i5-82xv00q4vn-thumb-600x600.jpg">
                    <img src="https://cdn.tgdd.vn/ValueIcons/label-rtx-40-final.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>
<p class="result-label temp3"><img width="20" height="20" class=" ls-is-cached lazyloaded" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png" src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
        <h3 title="Laptop Lenovo LOQ Gaming 15IRH8 i5 13420H/16GB/512GB/6GB RTX4050/144Hz/Win11 (82XV00Q4VN)">
            Lenovo LOQ Gaming 15IRH8 i5 13420H (82XV00Q4VN)
        </h3>
            <div class="item-compare">
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class="box-p">
                    <p class="price-old black">28.990.000₫</p>
                        <span class="percent">-10%</span>
                </div>
                <strong class="price">25.990.000₫</strong>



            <p class="item-gift">Quà <b>900.000₫</b></p>
    </a>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 15.6", Full HD, 144Hz</p>
            <p>CPU: i5, 13420H, 2.1GHz</p>
            <p>Card: RTX 4050 6GB</p>
            <p>Pin: 60 Wh</p>
            <p>Khối lượng: 2.4 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="310448">
                                        <a href="/laptop/msi-gf63-12uc-i5-803vn" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop MSI Gaming GF63 12UC i5 12450H/8GB/512GB/4GB RTX3050/144Hz/Win11 (803VN)" data-id="310448" data-price="16290000.0" data-brand="MSI" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">
                    <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class="item-img item-img_44">
                <img class=" ls-is-cached lazyloaded" data-src="https://cdn.tgdd.vn/Products/Images/44/310448/TimerThumb/msi-gf63-12uc-i5-803vn.jpg" alt="MSI Gaming GF63 12UC i5 12450H (803VN)" src="https://cdn.tgdd.vn/Products/Images/44/310448/TimerThumb/msi-gf63-12uc-i5-803vn.jpg">
                    <img src="https://cdn.tgdd.vn/2023/10/campaign/label-tgdd-200x200.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>
<p class="result-label temp3"><img width="20" height="20" class=" ls-is-cached lazyloaded" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png" src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
        <h3 title="Laptop MSI Gaming GF63 12UC i5 12450H/8GB/512GB/4GB RTX3050/144Hz/Win11 (803VN)">
            MSI Gaming GF63 12UC i5 12450H (803VN)
        </h3>
            <div class="item-compare">
                        <span>RAM 8 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class="box-p">
                    <p class="price-old black">18.990.000₫</p>
                        <span class="percent">-14%</span>
                </div>
                <strong class="price">16.290.000₫</strong>



            <p class="item-gift">Quà <b>900.000₫</b></p>
    </a>
        <div class="item-rating">
            <p>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                                <i class="icon-star-dark"></i>
            </p>
            <p class="item-rating-total">4</p>
        </div>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 15.6", Full HD, 144Hz</p>
            <p>CPU: i5, 12450H, 2GHz</p>
            <p>Card: RTX 3050 4GB</p>
            <p>Pin: 3-cell Li-ion, 52.4 Wh</p>
            <p>Khối lượng: 1.86 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                        </div>
                    </div>
                    <a href="/laptop?g=laptop-gaming" class="block-btn">
                        <span>Xem tất cả Laptop Gaming</span>
                    </a>
                    <input type="hidden" class="hdf hide" value="
                                <div class=&quot;item&quot; data-id=&quot;304867&quot;>
                                        <a href=&quot;/laptop/asus-tuf-gaming-f15-fx506hf-i5-hn014w&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop Asus TUF Gaming F15 FX506HF i5 11400H/8GB/512GB/4GB RTX2050/144Hz/Win11 (HN014W)&quot; data-id=&quot;304867&quot; data-price=&quot;16490000.0&quot; data-brand=&quot;Asus&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>
                    <span class=&quot;lb-tragop&quot;>Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/304867/TimerThumb/asus-tuf-gaming-f15-fx506hf-i5-hn014w.jpg&quot; alt=&quot;Asus TUF Gaming F15 FX506HF i5 11400H (HN014W)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/ValueIcons/Label_01-01.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>
<p class=&quot;result-label temp3&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giá rẻ quá&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png&quot;><span>Giá rẻ quá</span></p>
        <h3 title=&quot;Laptop Asus TUF Gaming F15 FX506HF i5 11400H/8GB/512GB/4GB RTX2050/144Hz/Win11 (HN014W)&quot;>
            Asus TUF Gaming F15 FX506HF i5 11400H (HN014W)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 8 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>18.990.000₫</p>
                        <span class=&quot;percent&quot;>-13%</span>
                </div>
                <strong class=&quot;price&quot;>16.490.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>900.000₫</b></p>
    </a>
        <div class=&quot;item-rating&quot;>
            <p>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                                <i class=&quot;icon-star-half&quot;></i>
            </p>
            <p class=&quot;item-rating-total&quot;>28</p>
        </div>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 15.6&quot;, Full HD, 144Hz</p>
            <p>CPU: i5, 11400H, 2.7GHz</p>
            <p>Card: RTX 2050 4GB</p>
            <p>Pin: 3-cell, 48Wh</p>
            <p>Khối lượng: 2.3 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;314630&quot;>
                                        <a href=&quot;/laptop/acer-aspire-5-a515-58gm-51lb-i5-nxkq4sv002&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop Acer Aspire 5 Gaming A515 58GM 51LB i5 13420H/16GB/512GB/4GB RTX2050/Win11 (NX.KQ4SV.002)&quot; data-id=&quot;314630&quot; data-price=&quot;16990000.0&quot; data-brand=&quot;Acer&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>
                    <span class=&quot;lb-tragop&quot;>Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/314630/TimerThumb/acer-aspire-5-a515-58gm-51lb-i5-nxkq4sv002.jpg&quot; alt=&quot;Acer Aspire 5 Gaming A515 58GM 51LB i5 13420H (NX.KQ4SV.002)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/2023/10/campaign/label-tgdd-200x200.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>
<p class=&quot;result-label temp3&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giá rẻ quá&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png&quot;><span>Giá rẻ quá</span></p>
        <h3 title=&quot;Laptop Acer Aspire 5 Gaming A515 58GM 51LB i5 13420H/16GB/512GB/4GB RTX2050/Win11 (NX.KQ4SV.002)&quot;>
            Acer Aspire 5 Gaming A515 58GM 51LB i5 13420H (NX.KQ4SV.002)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>20.490.000₫</p>
                        <span class=&quot;percent&quot;>-17%</span>
                </div>
                <strong class=&quot;price&quot;>16.990.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>900.000₫</b></p>
    </a>
        <div class=&quot;item-rating&quot;>
            <p>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                                <i class=&quot;icon-star-dark&quot;></i>
            </p>
            <p class=&quot;item-rating-total&quot;>17</p>
        </div>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 15.6&quot;, Full HD</p>
            <p>CPU: i5, 13420H, 2.1GHz</p>
            <p>Card: RTX 2050 4GB</p>
            <p>Pin: 3-cell, 50Wh</p>
            <p>Khối lượng: 1.7 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;318163&quot;>
                                        <a href=&quot;/laptop/hp-victus-15-fa1139tx-i5-8y6w3pa&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop HP Gaming VICTUS 15 fa1139TX i5 12450H/16GB/512GB/4GB RTX2050/144Hz/Win11 (8Y6W3PA)&quot; data-id=&quot;318163&quot; data-price=&quot;18990000.0&quot; data-brand=&quot;HP&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>
                    <span class=&quot;lb-tragop&quot;>Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/318163/TimerThumb/hp-victus-15-fa1139tx-i5-8y6w3pa.jpg&quot; alt=&quot;HP Gaming VICTUS 15 fa1139TX i5 12450H (8Y6W3PA)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/ValueIcons/i5-gen-12-13.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>
<p class=&quot;result-label temp3&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giá rẻ quá&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png&quot;><span>Giá rẻ quá</span></p>
        <h3 title=&quot;Laptop HP Gaming VICTUS 15 fa1139TX i5 12450H/16GB/512GB/4GB RTX2050/144Hz/Win11 (8Y6W3PA)&quot;>
            HP Gaming VICTUS 15 fa1139TX i5 12450H (8Y6W3PA)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>24.590.000₫</p>
                        <span class=&quot;percent&quot;>-22%</span>
                </div>
                <strong class=&quot;price&quot;>18.990.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>900.000₫</b></p>
    </a>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 15.6&quot;, Full HD, 144Hz</p>
            <p>CPU: i5, 12450H, 2GHz</p>
            <p>Card: RTX 2050 4GB</p>
            <p>Pin: 3-cell, 52.5Wh</p>
            <p>Khối lượng: 2.29 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;313667&quot;>
                                        <a href=&quot;/laptop/lenovo-ideapad-gaming-3-15ach6-r5-82k2027pvn&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop Lenovo Ideapad Gaming 3 15ACH6 R5 5500H/16GB/512GB/4GB RTX2050/144Hz/Win11 (82K2027PVN)&quot; data-id=&quot;313667&quot; data-price=&quot;15990000.0&quot; data-brand=&quot;Lenovo&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>
                    <span class=&quot;lb-tragop&quot;>Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/313667/TimerThumb/lenovo-ideapad-gaming-3-15ach6-r5-82k2027pvn.jpg&quot; alt=&quot;Lenovo Ideapad Gaming 3 15ACH6 R5 5500H (82K2027PVN)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/ValueIcons/bao-hanh-lenovo-2-nam-1.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>
<p class=&quot;result-label temp3&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giá rẻ quá&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png&quot;><span>Giá rẻ quá</span></p>
        <h3 title=&quot;Laptop Lenovo Ideapad Gaming 3 15ACH6 R5 5500H/16GB/512GB/4GB RTX2050/144Hz/Win11 (82K2027PVN)&quot;>
            Lenovo Ideapad Gaming 3 15ACH6 R5 5500H (82K2027PVN)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>18.990.000₫</p>
                        <span class=&quot;percent&quot;>-15%</span>
                </div>
                <strong class=&quot;price&quot;>15.990.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>900.000₫</b></p>
    </a>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 15.6&quot;, Full HD, 144Hz</p>
            <p>CPU: Ryzen 5, 5500H, 3.3GHz</p>
            <p>Card: RTX 2050 4GB</p>
            <p>Pin: 45Wh</p>
            <p>Khối lượng: 2.25 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;316940&quot;>
                                        <a href=&quot;/laptop/msi-gaming-gf63-thin-12ucx-i5-873vn&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop MSI Gaming GF63 Thin 12UCX i5 12450H/16GB/512GB/4GB RTX2050/144Hz/Win11 (873VN)&quot; data-id=&quot;316940&quot; data-price=&quot;15990000.0&quot; data-brand=&quot;MSI&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>
                    <span class=&quot;lb-tragop&quot;>Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/316940/TimerThumb/msi-gaming-gf63-thin-12ucx-i5-873vn-thumb.jpg&quot; alt=&quot;MSI Gaming GF63 Thin 12UCX i5 12450H (873VN)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/ValueIcons/i5-gen-12-13.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>
<p class=&quot;result-label temp3&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giá rẻ quá&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png&quot;><span>Giá rẻ quá</span></p>
        <h3 title=&quot;Laptop MSI Gaming GF63 Thin 12UCX i5 12450H/16GB/512GB/4GB RTX2050/144Hz/Win11 (873VN)&quot;>
            MSI Gaming GF63 Thin 12UCX i5 12450H (873VN)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>18.990.000₫</p>
                        <span class=&quot;percent&quot;>-15%</span>
                </div>
                <strong class=&quot;price&quot;>15.990.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>900.000₫</b></p>
    </a>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 15.6&quot;, Full HD, 144Hz</p>
            <p>CPU: i5, 12450H, 2GHz</p>
            <p>Card: RTX 2050 4GB</p>
            <p>Pin: 3-cell Li-ion, 52.4 Wh</p>
            <p>Khối lượng: 1.86 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;313177&quot;>
                                        <a href=&quot;/laptop/acer-aspire-7-gaming-a715-76g-5806-i5-nhqmfsv002?utm_flashsale=1&quot; data-s=&quot;TwoPriceDetailCMS&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop Acer Aspire 7 Gaming A715 76G 5806 i5 12450H/16GB/512GB/4GB RTX3050/144Hz/Win11 (NH.QMFSV.002)&quot; data-id=&quot;313177&quot; data-price=&quot;19790000.0&quot; data-brand=&quot;Acer&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>
                    <span class=&quot;lb-tragop&quot;>Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/313177/acer-aspire-7-gaming-a715-76g-5806-i5-nhqmfsv002-thumb-600x600.jpg&quot; alt=&quot;Acer Aspire 7 Gaming A715 76G 5806 i5 12450H (NH.QMFSV.002)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/ValueIcons/label-rtx-30-final.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>
<p class=&quot;result-label temp3&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giá rẻ quá&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png&quot;><span>Giá rẻ quá</span></p>
        <h3 title=&quot;Laptop Acer Aspire 7 Gaming A715 76G 5806 i5 12450H/16GB/512GB/4GB RTX3050/144Hz/Win11 (NH.QMFSV.002)&quot;>
            Acer Aspire 7 Gaming A715 76G 5806 i5 12450H (NH.QMFSV.002)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
            <p class=&quot;item-txt-online&quot;><i></i>Online giá rẻ quá</p>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>22.990.000₫</p>
                        <span class=&quot;percent&quot;>-13%</span>
                </div>
                <strong class=&quot;price&quot;>19.790.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>900.000₫</b></p>
    </a>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 15.6&quot;, Full HD, 144Hz</p>
            <p>CPU: i5, 12450H, 2GHz</p>
            <p>Card: RTX 3050 4GB</p>
            <p>Pin: 3-cell, 50Wh</p>
            <p>Khối lượng: 2.1 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;317709&quot;>
                                        <a href=&quot;/laptop/asus-tuf-gaming-f15-fx507zc4-i5-hn229w&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop Asus TUF Gaming F15 FX507ZC4 i5 12500H/16GB/1TB/4GB RTX3050/144Hz/Win11 (HN229W)&quot; data-id=&quot;317709&quot; data-price=&quot;20990000.0&quot; data-brand=&quot;Asus&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>
                    <span class=&quot;lb-tragop&quot;>Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/317709/TimerThumb/asus-tuf-gaming-f15-fx507zc4-i5-hn229w.jpg&quot; alt=&quot;Asus TUF Gaming F15 FX507ZC4 i5 12500H (HN229W)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/ValueIcons/label-rtx-30-final.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>
<p class=&quot;result-label temp3&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giá rẻ quá&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png&quot;><span>Giá rẻ quá</span></p>
        <h3 title=&quot;Laptop Asus TUF Gaming F15 FX507ZC4 i5 12500H/16GB/1TB/4GB RTX3050/144Hz/Win11 (HN229W)&quot;>
            Asus TUF Gaming F15 FX507ZC4 i5 12500H (HN229W)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 16 GB</span>
                        <span>SSD 1 TB</span>
            </div>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>25.990.000₫</p>
                        <span class=&quot;percent&quot;>-19%</span>
                </div>
                <strong class=&quot;price&quot;>20.990.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>900.000₫</b></p>
    </a>
        <div class=&quot;item-rating&quot;>
            <p>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                                <i class=&quot;icon-star-dark&quot;></i>
            </p>
            <p class=&quot;item-rating-total&quot;>7</p>
        </div>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 15.6&quot;, Full HD, 144Hz</p>
            <p>CPU: i5, 12500H, 2.5GHz</p>
            <p>Card: RTX 3050 4GB</p>
            <p>Pin: 4-cell, 56Wh</p>
            <p>Khối lượng: 2.2 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;321467&quot;>
                                        <a href=&quot;/laptop/hp-victus-15-fb1022ax-r5-94f19pa&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop HP Gaming VICTUS 15 fb1022AX R5 7535HS/16GB/512GB/4GB RTX2050/144Hz/Win11 (94F19PA)&quot; data-id=&quot;321467&quot; data-price=&quot;19990000.0&quot; data-brand=&quot;HP&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>
                    <span class=&quot;lb-tragop&quot;>Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/321467/hp-victus-15-fb1022ax-r5-94f19pa-thumb-1-600x600.jpg&quot; alt=&quot;HP Gaming VICTUS 15 fb1022AX R5 7535HS (94F19PA)&quot;>
            </div>
<p class=&quot;result-label temp3&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giá rẻ quá&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png&quot;><span>Giá rẻ quá</span></p>
        <h3 title=&quot;Laptop HP Gaming VICTUS 15 fb1022AX R5 7535HS/16GB/512GB/4GB RTX2050/144Hz/Win11 (94F19PA)&quot;>
            HP Gaming VICTUS 15 fb1022AX R5 7535HS (94F19PA)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>25.490.000₫</p>
                        <span class=&quot;percent&quot;>-21%</span>
                </div>
                <strong class=&quot;price&quot;>19.990.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>900.000₫</b></p>
    </a>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 15.6&quot;, Full HD, 144Hz</p>
            <p>CPU: Ryzen 5, 7535HS, 3.3GHz</p>
            <p>Card: RTX 2050 4GB</p>
            <p>Pin: 3-cell, 52.5Wh</p>
            <p>Khối lượng: 2.29 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;313611&quot;>
                                        <a href=&quot;/laptop/lenovo-loq-gaming-15irh8-i5-82xv00q4vn&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop Lenovo LOQ Gaming 15IRH8 i5 13420H/16GB/512GB/6GB RTX4050/144Hz/Win11 (82XV00Q4VN)&quot; data-id=&quot;313611&quot; data-price=&quot;25990000.0&quot; data-brand=&quot;Lenovo&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>
                    <span class=&quot;lb-tragop&quot;>Trả góp 0%</span>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/313611/lenovo-loq-gaming-15irh8-i5-82xv00q4vn-thumb-600x600.jpg&quot; alt=&quot;Lenovo LOQ Gaming 15IRH8 i5 13420H (82XV00Q4VN)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/ValueIcons/label-rtx-40-final.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>
<p class=&quot;result-label temp3&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giá rẻ quá&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png&quot;><span>Giá rẻ quá</span></p>
        <h3 title=&quot;Laptop Lenovo LOQ Gaming 15IRH8 i5 13420H/16GB/512GB/6GB RTX4050/144Hz/Win11 (82XV00Q4VN)&quot;>
            Lenovo LOQ Gaming 15IRH8 i5 13420H (82XV00Q4VN)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>28.990.000₫</p>
                        <span class=&quot;percent&quot;>-10%</span>
                </div>
                <strong class=&quot;price&quot;>25.990.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>900.000₫</b></p>
    </a>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 15.6&quot;, Full HD, 144Hz</p>
            <p>CPU: i5, 13420H, 2.1GHz</p>
            <p>Card: RTX 4050 6GB</p>
            <p>Pin: 60 Wh</p>
            <p>Khối lượng: 2.4 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;310448&quot;>
                                        <a href=&quot;/laptop/msi-gf63-12uc-i5-803vn&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop MSI Gaming GF63 12UC i5 12450H/8GB/512GB/4GB RTX3050/144Hz/Win11 (803VN)&quot; data-id=&quot;310448&quot; data-price=&quot;16290000.0&quot; data-brand=&quot;MSI&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>
                    <span class=&quot;lb-tragop&quot;>Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/310448/TimerThumb/msi-gf63-12uc-i5-803vn.jpg&quot; alt=&quot;MSI Gaming GF63 12UC i5 12450H (803VN)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/2023/10/campaign/label-tgdd-200x200.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>
<p class=&quot;result-label temp3&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giá rẻ quá&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png&quot;><span>Giá rẻ quá</span></p>
        <h3 title=&quot;Laptop MSI Gaming GF63 12UC i5 12450H/8GB/512GB/4GB RTX3050/144Hz/Win11 (803VN)&quot;>
            MSI Gaming GF63 12UC i5 12450H (803VN)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 8 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>18.990.000₫</p>
                        <span class=&quot;percent&quot;>-14%</span>
                </div>
                <strong class=&quot;price&quot;>16.290.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>900.000₫</b></p>
    </a>
        <div class=&quot;item-rating&quot;>
            <p>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                                <i class=&quot;icon-star-dark&quot;></i>
            </p>
            <p class=&quot;item-rating-total&quot;>4</p>
        </div>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 15.6&quot;, Full HD, 144Hz</p>
            <p>CPU: i5, 12450H, 2GHz</p>
            <p>Card: RTX 3050 4GB</p>
            <p>Pin: 3-cell Li-ion, 52.4 Wh</p>
            <p>Khối lượng: 1.86 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                        ">
                </section>
            </div>
            <div class="block" id="macbook">
                <section>
                    <div class="block__banner">
                        
    <div class="">
            <div class="item_banner" data-href="https://www.thegioididong.com/laptop-apple-macbook" style="background-color:#FCFCFC">
                <a data-cate="44" data-place="1695" rel="nofollow" href="javascript:;" onclick="jQuery.ajax({ url: '/bannertracking?bid=58216&amp;r='+ (new Date).getTime(), async: true, cache: false });"><img style="cursor:pointer" src="https://cdn.tgdd.vn/2023/11/banner/macbook-desk-2-1200x200.png" alt="macbook 2" width="1200" height="200"></a>
            </div>
    </div>

                    </div>
                    


                    <div class="box-main-listproduct">
                        <div class="listproduct listproduct-block" data-url="/laptop-apple-macbook">
                                <div class="item" data-id="231244">
                                        <a href="/laptop/apple-macbook-air-2020-mgn63saa?utm_flashsale=1" data-s="TwoPriceDetailCMS" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Apple MacBook Air 13 inch M1 2020 8-core CPU/8GB/256GB/7-core GPU" data-id="231244" data-price="17690000.0" data-brand="MacBook" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">

        </div>

            <div class="item-img item-img_44">
                <img class=" ls-is-cached lazyloaded" data-src="https://cdn.tgdd.vn/Products/Images/44/231244/macbook-air-m1-2020-gray-600x600.jpg" alt="MacBook Air 13 inch M1 2020 7-core GPU" src="https://cdn.tgdd.vn/Products/Images/44/231244/macbook-air-m1-2020-gray-600x600.jpg">
            </div>
<p class="result-label temp1"><img width="20" height="20" class=" ls-is-cached lazyloaded" alt="Giảm Giá Mạnh" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2024/02/content/50x50--1--100x100.png" src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2024/02/content/50x50--1--100x100.png"><span>Giảm Giá Mạnh</span></p>
        <h3 title="Laptop Apple MacBook Air 13 inch M1 2020 8-core CPU/8GB/256GB/7-core GPU">
            MacBook Air 13 inch M1 2020 7-core GPU
        </h3>
            <div class="item-compare">
                        <span>RAM 8 GB</span>
                        <span>SSD 256 GB</span>
            </div>
            <p class="item-txt-online"><i></i>Online giá rẻ quá</p>
                <div class="box-p">
                    <p class="price-old black">19.590.000₫</p>
                        <span class="percent">-9%</span>
                </div>
                <strong class="price">17.690.000₫</strong>



    </a>
        <div class="item-rating">
            <p>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                                <i class="icon-star-dark"></i>
            </p>
            <p class="item-rating-total">202</p>
        </div>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 13.3", Retina</p>
            <p>CPU: Apple M1</p>
            <p>Card: 7 nhân GPU</p>
            <p>Pin: Lên đến 18 giờ</p>
            <p>Khối lượng: 1.29 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="282827">
                                        <a href="/laptop/apple-macbook-air-m2-2022?utm_flashsale=1" data-s="TwoPriceDetailCMS" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Apple MacBook Air 13 inch M2 2022 8-core CPU/8GB/256GB/8-core GPU" data-id="282827" data-price="24490000.0" data-brand="MacBook" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">

        </div>

            <div class="item-img item-img_44">
                <img class=" ls-is-cached lazyloaded" data-src="https://cdn.tgdd.vn/Products/Images/44/282827/apple-macbook-air-m2-2022-vang-600x600.jpg" alt="MacBook Air 13 inch M2 2022 8-core GPU" src="https://cdn.tgdd.vn/Products/Images/44/282827/apple-macbook-air-m2-2022-vang-600x600.jpg">
            </div>
<p class="result-label temp1"><img width="20" height="20" class=" ls-is-cached lazyloaded" alt="Giảm Giá Mạnh" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2024/02/content/50x50--1--100x100.png" src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2024/02/content/50x50--1--100x100.png"><span>Giảm Giá Mạnh</span></p>
        <h3 title="Laptop Apple MacBook Air 13 inch M2 2022 8-core CPU/8GB/256GB/8-core GPU">
            MacBook Air 13 inch M2 2022 8-core GPU
        </h3>
            <div class="item-compare">
                        <span>RAM 8 GB</span>
                        <span>SSD 256 GB</span>
            </div>
            <p class="item-txt-online"><i></i>Online giá rẻ quá</p>
                <div class="box-p">
                    <p class="price-old black">27.090.000₫</p>
                        <span class="percent">-9%</span>
                </div>
                <strong class="price">24.490.000₫</strong>



    </a>
        <div class="item-rating">
            <p>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                                <i class="icon-star"></i>
            </p>
            <p class="item-rating-total">74</p>
        </div>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 13.6", Retina</p>
            <p>CPU: Apple M2, 100GB/s</p>
            <p>Card: 8 nhân GPU</p>
            <p>Pin: Lên đến 18 giờ</p>
            <p>Khối lượng: 1.24 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="309016">
                                        <a href="/laptop/apple-macbook-air-m2-2023?utm_flashsale=1" data-s="TwoPriceDetailCMS" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Apple MacBook Air 15 inch M2 2023 8-core CPU/8GB/256GB/10-core GPU/35W" data-id="309016" data-price="27990000.0" data-brand="MacBook" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">

        </div>

            <div class="item-img item-img_44">
                <img class=" ls-is-cached lazyloaded" data-src="https://cdn.tgdd.vn/Products/Images/44/309016/apple-macbook-air-15-inch-m2-2023-midnight-thumb-600x600.jpg" alt="MacBook Air 15 inch M2 2023 10-core GPU Sạc 35W" src="https://cdn.tgdd.vn/Products/Images/44/309016/apple-macbook-air-15-inch-m2-2023-midnight-thumb-600x600.jpg">
            </div>
<p class="result-label temp1"><img width="20" height="20" class=" ls-is-cached lazyloaded" alt="Giảm Giá Mạnh" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2024/02/content/50x50--1--100x100.png" src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2024/02/content/50x50--1--100x100.png"><span>Giảm Giá Mạnh</span></p>
        <h3 title="Laptop Apple MacBook Air 15 inch M2 2023 8-core CPU/8GB/256GB/10-core GPU/35W">
            MacBook Air 15 inch M2 2023 10-core GPU Sạc 35W
        </h3>
            <div class="item-compare">
                        <span>RAM 8 GB</span>
                        <span>SSD 256 GB</span>
            </div>
            <p class="item-txt-online"><i></i>Online giá rẻ quá</p>
                <div class="box-p">
                    <p class="price-old black">32.290.000₫</p>
                        <span class="percent">-13%</span>
                </div>
                <strong class="price">27.990.000₫</strong>



    </a>
        <div class="item-rating">
            <p>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                                <i class="icon-star-half"></i>
            </p>
            <p class="item-rating-total">4</p>
        </div>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 15.3", Retina</p>
            <p>CPU: Apple M2, 100GB/s</p>
            <p>Card: 10 nhân GPU</p>
            <p>Pin: Lên đến 18 giờ</p>
            <p>Khối lượng: 1.51 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="289441">
                                        <a href="/laptop/apple-macbook-air-m2-2022-16gb" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Apple MacBook Air 13 inch M2 2022 8-core CPU/16GB/512GB/10-core GPU" data-id="289441" data-price="33990000.0" data-brand="MacBook" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">

        </div>

            <div class="item-img item-img_44">
                <img class=" ls-is-cached lazyloaded" data-src="https://cdn.tgdd.vn/Products/Images/44/289441/apple-macbook-air-m2-2022-16gb-600x600.jpg" alt="MacBook Air 13 inch M2 2022 10-core GPU" src="https://cdn.tgdd.vn/Products/Images/44/289441/apple-macbook-air-m2-2022-16gb-600x600.jpg">
            </div>
<p class="result-label temp1"><img width="20" height="20" class=" ls-is-cached lazyloaded" alt="Giảm Giá Mạnh" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2024/02/content/50x50--1--100x100.png" src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2024/02/content/50x50--1--100x100.png"><span>Giảm Giá Mạnh</span></p>
        <h3 title="Laptop Apple MacBook Air 13 inch M2 2022 8-core CPU/16GB/512GB/10-core GPU">
            MacBook Air 13 inch M2 2022 10-core GPU
        </h3>
            <div class="item-compare">
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class="box-p">
                    <p class="price-old black">39.190.000₫</p>
                        <span class="percent">-13%</span>
                </div>
                <strong class="price">33.990.000₫</strong>



    </a>
        <div class="item-rating">
            <p>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                                <i class="icon-star"></i>
            </p>
            <p class="item-rating-total">12</p>
        </div>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 13.6", Retina</p>
            <p>CPU: Apple M2, 100GB/s</p>
            <p>Card: 10 nhân GPU</p>
            <p>Pin: Lên đến 18 giờ</p>
            <p>Khối lượng: 1.24 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="318228">
                                        <a href="/laptop/macbook-pro-14-inch-m3-2023?utm_flashsale=1" data-s="TwoPriceDetailCMS" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Apple MacBook Pro 14 inch M3 2023 8-core CPU/8GB/512GB/10-core GPU" data-id="318228" data-price="37990000.0" data-brand="MacBook" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">

        </div>

            <div class="item-img item-img_44">
                <img class=" ls-is-cached lazyloaded" data-src="https://cdn.tgdd.vn/Products/Images/44/318228/macbook-pro-14-inch-m3-2023-311023-095050-600x600.jpg" alt="MacBook Pro 14 inch M3 2023 10-core GPU" src="https://cdn.tgdd.vn/Products/Images/44/318228/macbook-pro-14-inch-m3-2023-311023-095050-600x600.jpg">
            </div>
<p class="result-label temp1"><img width="20" height="20" class=" ls-is-cached lazyloaded" alt="Giảm Giá Mạnh" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2024/02/content/50x50--1--100x100.png" src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2024/02/content/50x50--1--100x100.png"><span>Giảm Giá Mạnh</span></p>
        <h3 title="Laptop Apple MacBook Pro 14 inch M3 2023 8-core CPU/8GB/512GB/10-core GPU">
            MacBook Pro 14 inch M3 2023 10-core GPU
        </h3>
            <div class="item-compare">
                        <span>RAM 8 GB</span>
                        <span>SSD 512 GB</span>
            </div>
            <p class="item-txt-online"><i></i>Online giá rẻ quá</p>
                <div class="box-p">
                    <p class="price-old black">39.990.000₫</p>
                        <span class="percent">-5%</span>
                </div>
                <strong class="price">37.990.000₫</strong>



    </a>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 14.2", 4K, 120Hz</p>
            <p>CPU: Apple M3, 100GB/s</p>
            <p>Card: 10 nhân GPU</p>
            <p>Pin: Lên đến 22 giờ</p>
            <p>Khối lượng: 1.55 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="309018">
                                        <a href="/laptop/apple-macbook-air-m2-2023-16gb?utm_flashsale=1" data-s="TwoPriceDetailCMS" data-site="1" data-pro="3" data-cache="False" data-name="Laptop MacBook Air 15 inch M2 2023 8CPU/16GB/256GB/10GPU" data-id="309018" data-price="34490000.0" data-brand="MacBook" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">

        </div>

            <div class="item-img item-img_44">
                <img class=" lazyloaded" data-src="https://cdn.tgdd.vn/Products/Images/44/309018/apple-macbook-air-15-inch-m2-2023-midnight-thumb-600x600.jpg" alt="MacBook Air 15 inch M2 2023 10-core GPU" src="https://cdn.tgdd.vn/Products/Images/44/309018/apple-macbook-air-15-inch-m2-2023-midnight-thumb-600x600.jpg">
            </div>
<p class="result-label temp1"><img width="20" height="20" class="lazyload" alt="Giảm Giá Mạnh" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2024/02/content/50x50--1--100x100.png"><span>Giảm Giá Mạnh</span></p>
        <h3 title="Laptop MacBook Air 15 inch M2 2023 8CPU/16GB/256GB/10GPU">
            MacBook Air 15 inch M2 2023 10-core GPU
        </h3>
            <div class="item-compare">
                        <span>RAM 16 GB</span>
                        <span>SSD 256 GB</span>
            </div>
            <p class="item-txt-online"><i></i>Online giá rẻ quá</p>
                <div class="box-p">
                    <p class="price-old black">37.990.000₫</p>
                        <span class="percent">-9%</span>
                </div>
                <strong class="price">34.490.000₫</strong>



    </a>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 15.3", Retina</p>
            <p>CPU: Apple M2, 100GB/s</p>
            <p>Card: 10 nhân GPU</p>
            <p>Pin: Lên đến 18 giờ</p>
            <p>Khối lượng: 1.51 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="309017">
                                        <a href="/laptop/apple-macbook-air-15-inch-m2-2023?utm_flashsale=1" data-s="TwoPriceDetailCMS" data-site="1" data-pro="3" data-cache="False" data-name="Laptop MacBook Air 15 inch M2 2023 8CPU/8GB/512GB/10GPU" data-id="309017" data-price="32990000.0" data-brand="MacBook" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">

        </div>

            <div class="item-img item-img_44">
                <img class=" ls-is-cached lazyloaded" data-src="https://cdn.tgdd.vn/Products/Images/44/309017/apple-macbook-air-15-inch-m2-2023-midnight-thumb-1-600x600.jpg" alt="MacBook Air 15 inch M2 2023 10-core GPU" src="https://cdn.tgdd.vn/Products/Images/44/309017/apple-macbook-air-15-inch-m2-2023-midnight-thumb-1-600x600.jpg">
            </div>
<p class="result-label temp3"><img width="20" height="20" class="lazyload" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
        <h3 title="Laptop MacBook Air 15 inch M2 2023 8CPU/8GB/512GB/10GPU">
            MacBook Air 15 inch M2 2023 10-core GPU
        </h3>
            <div class="item-compare">
                        <span>RAM 8 GB</span>
                        <span>SSD 512 GB</span>
            </div>
            <p class="item-txt-online"><i></i>Online giá rẻ quá</p>
                <div class="box-p">
                    <p class="price-old black">37.990.000₫</p>
                        <span class="percent">-13%</span>
                </div>
                <strong class="price">32.990.000₫</strong>



    </a>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 15.3", Retina</p>
            <p>CPU: Apple M2, 100GB/s</p>
            <p>Card: 10 nhân GPU</p>
            <p>Pin: Lên đến 18 giờ</p>
            <p>Khối lượng: 1.51 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="289472">
                                        <a href="/laptop/apple-macbook-air-m2-2022-16gb-256gb?utm_flashsale=1" data-s="TwoPriceDetailCMS" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Apple MacBook Air 13 inch M2 2022 8-coreCPU/16GB/256GB/8-core GPU" data-id="289472" data-price="29490000.0" data-brand="MacBook" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">

        </div>

            <div class="item-img item-img_44">
                <img class=" ls-is-cached lazyloaded" data-src="https://cdn.tgdd.vn/Products/Images/44/289472/apple-macbook-air-m2-2022-16gb-256gb-thumb-600x600.jpg" alt="MacBook Air 13 inch M2 2022 8-core GPU" src="https://cdn.tgdd.vn/Products/Images/44/289472/apple-macbook-air-m2-2022-16gb-256gb-thumb-600x600.jpg">
            </div>
<p class="result-label temp1"><img width="20" height="20" class="lazyload" alt="Giảm Giá Mạnh" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2024/02/content/50x50--1--100x100.png"><span>Giảm Giá Mạnh</span></p>
        <h3 title="Laptop Apple MacBook Air 13 inch M2 2022 8-coreCPU/16GB/256GB/8-core GPU">
            MacBook Air 13 inch M2 2022 8-core GPU
        </h3>
            <div class="item-compare">
                        <span>RAM 16 GB</span>
                        <span>SSD 256 GB</span>
            </div>
            <p class="item-txt-online"><i></i>Online giá rẻ quá</p>
                <div class="box-p">
                    <p class="price-old black">31.990.000₫</p>
                        <span class="percent">-7%</span>
                </div>
                <strong class="price">29.490.000₫</strong>



    </a>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 13.6", Retina</p>
            <p>CPU: Apple M2, 100GB/s</p>
            <p>Card: 8 nhân GPU</p>
            <p>Pin: Khoảng 10 tiếng</p>
            <p>Khối lượng: 1.24 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="318230">
                                        <a href="/laptop/apple-macbook-pro-14-inch-m3-pro-2023?utm_flashsale=1" data-s="TwoPriceDetailCMS" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Apple MacBook Pro 14 inch M3 Pro 2023 11-core CPU/18GB/512GB/14-core GPU" data-id="318230" data-price="49490000.0" data-brand="MacBook" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">

        </div>

            <div class="item-img item-img_44">
                <img class=" ls-is-cached lazyloaded" data-src="https://cdn.tgdd.vn/Products/Images/44/318230/apple-macbook-pro-14-inch-m3-pro-2023-311023-105253-600x600.jpg" alt="MacBook Pro 14 inch M3 Pro 2023 14-core GPU" src="https://cdn.tgdd.vn/Products/Images/44/318230/apple-macbook-pro-14-inch-m3-pro-2023-311023-105253-600x600.jpg">
            </div>
<p class="result-label temp1"><img width="20" height="20" class="lazyload" alt="Giảm Giá Mạnh" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2024/02/content/50x50--1--100x100.png"><span>Giảm Giá Mạnh</span></p>
        <h3 title="Laptop Apple MacBook Pro 14 inch M3 Pro 2023 11-core CPU/18GB/512GB/14-core GPU">
            MacBook Pro 14 inch M3 Pro 2023 14-core GPU
        </h3>
            <div class="item-compare">
                        <span>RAM 18 GB</span>
                        <span>SSD 512 GB</span>
            </div>
            <p class="item-txt-online"><i></i>Online giá rẻ quá</p>
                <div class="box-p">
                    <p class="price-old black">49.990.000₫</p>
                </div>
                <strong class="price">49.490.000₫</strong>



    </a>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 14.2", 4K, 120Hz</p>
            <p>CPU: Apple M3 Pro, 150 GB/s memory bandwidth</p>
            <p>Card: 14 nhân GPU</p>
            <p>Pin: Lên đến 18 giờ</p>
            <p>Khối lượng: 1.61 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="231244">
                                        <a href="/laptop/apple-macbook-air-2020-mgn63saa?utm_flashsale=1" data-s="TwoPriceDetailCMS" data-site="1" data-pro="3" data-cache="True" data-name="Laptop Apple MacBook Air 13 inch M1 2020 8-core CPU/8GB/256GB/7-core GPU" data-id="231244" data-price="17690000.0" data-brand="MacBook" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">

        </div>

            <div class="item-img item-img_44">
                <img class=" ls-is-cached lazyloaded" data-src="https://cdn.tgdd.vn/Products/Images/44/231244/macbook-air-m1-2020-gray-600x600.jpg" alt="MacBook Air 13 inch M1 2020 7-core GPU" src="https://cdn.tgdd.vn/Products/Images/44/231244/macbook-air-m1-2020-gray-600x600.jpg">
            </div>
<p class="result-label temp1"><img width="20" height="20" class="lazyload" alt="Giảm Giá Mạnh" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2024/02/content/50x50--1--100x100.png"><span>Giảm Giá Mạnh</span></p>
        <h3 title="Laptop Apple MacBook Air 13 inch M1 2020 8-core CPU/8GB/256GB/7-core GPU">
            MacBook Air 13 inch M1 2020 7-core GPU
        </h3>
            <div class="item-compare">
                        <span>RAM 8 GB</span>
                        <span>SSD 256 GB</span>
            </div>
            <p class="item-txt-online"><i></i>Online giá rẻ quá</p>
                <div class="box-p">
                    <p class="price-old black">19.590.000₫</p>
                        <span class="percent">-9%</span>
                </div>
                <strong class="price">17.690.000₫</strong>



    </a>
        <div class="item-rating">
            <p>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                                <i class="icon-star-dark"></i>
            </p>
            <p class="item-rating-total">202</p>
        </div>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 13.3", Retina</p>
            <p>CPU: Apple M1</p>
            <p>Card: 7 nhân GPU</p>
            <p>Pin: Lên đến 18 giờ</p>
            <p>Khối lượng: 1.29 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                        </div>
                    </div>
                    <a href="/laptop-apple-macbook" class="block-btn">
                        <span>Xem tất cả Laptop MacBook</span>
                    </a>
                    <input type="hidden" class="hdf hide" value="
                                <div class=&quot;item&quot; data-id=&quot;231244&quot;>
                                        <a href=&quot;/laptop/apple-macbook-air-2020-mgn63saa?utm_flashsale=1&quot; data-s=&quot;TwoPriceDetailCMS&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop Apple MacBook Air 13 inch M1 2020 8-core CPU/8GB/256GB/7-core GPU&quot; data-id=&quot;231244&quot; data-price=&quot;17690000.0&quot; data-brand=&quot;MacBook&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/231244/macbook-air-m1-2020-gray-600x600.jpg&quot; alt=&quot;MacBook Air 13 inch M1 2020 7-core GPU&quot;>
            </div>
<p class=&quot;result-label temp1&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giảm Giá Mạnh&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2024/02/content/50x50--1--100x100.png&quot;><span>Giảm Giá Mạnh</span></p>
        <h3 title=&quot;Laptop Apple MacBook Air 13 inch M1 2020 8-core CPU/8GB/256GB/7-core GPU&quot;>
            MacBook Air 13 inch M1 2020 7-core GPU
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 8 GB</span>
                        <span>SSD 256 GB</span>
            </div>
            <p class=&quot;item-txt-online&quot;><i></i>Online giá rẻ quá</p>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>19.590.000₫</p>
                        <span class=&quot;percent&quot;>-9%</span>
                </div>
                <strong class=&quot;price&quot;>17.690.000₫</strong>



    </a>
        <div class=&quot;item-rating&quot;>
            <p>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                                <i class=&quot;icon-star-dark&quot;></i>
            </p>
            <p class=&quot;item-rating-total&quot;>202</p>
        </div>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 13.3&quot;, Retina</p>
            <p>CPU: Apple M1</p>
            <p>Card: 7 nhân GPU</p>
            <p>Pin: Lên đến 18 giờ</p>
            <p>Khối lượng: 1.29 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;282827&quot;>
                                        <a href=&quot;/laptop/apple-macbook-air-m2-2022?utm_flashsale=1&quot; data-s=&quot;TwoPriceDetailCMS&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop Apple MacBook Air 13 inch M2 2022 8-core CPU/8GB/256GB/8-core GPU&quot; data-id=&quot;282827&quot; data-price=&quot;24490000.0&quot; data-brand=&quot;MacBook&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/282827/apple-macbook-air-m2-2022-vang-600x600.jpg&quot; alt=&quot;MacBook Air 13 inch M2 2022 8-core GPU&quot;>
            </div>
<p class=&quot;result-label temp1&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giảm Giá Mạnh&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2024/02/content/50x50--1--100x100.png&quot;><span>Giảm Giá Mạnh</span></p>
        <h3 title=&quot;Laptop Apple MacBook Air 13 inch M2 2022 8-core CPU/8GB/256GB/8-core GPU&quot;>
            MacBook Air 13 inch M2 2022 8-core GPU
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 8 GB</span>
                        <span>SSD 256 GB</span>
            </div>
            <p class=&quot;item-txt-online&quot;><i></i>Online giá rẻ quá</p>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>27.090.000₫</p>
                        <span class=&quot;percent&quot;>-9%</span>
                </div>
                <strong class=&quot;price&quot;>24.490.000₫</strong>



    </a>
        <div class=&quot;item-rating&quot;>
            <p>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                                <i class=&quot;icon-star&quot;></i>
            </p>
            <p class=&quot;item-rating-total&quot;>74</p>
        </div>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 13.6&quot;, Retina</p>
            <p>CPU: Apple M2, 100GB/s</p>
            <p>Card: 8 nhân GPU</p>
            <p>Pin: Lên đến 18 giờ</p>
            <p>Khối lượng: 1.24 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;309016&quot;>
                                        <a href=&quot;/laptop/apple-macbook-air-m2-2023?utm_flashsale=1&quot; data-s=&quot;TwoPriceDetailCMS&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop Apple MacBook Air 15 inch M2 2023 8-core CPU/8GB/256GB/10-core GPU/35W&quot; data-id=&quot;309016&quot; data-price=&quot;27990000.0&quot; data-brand=&quot;MacBook&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/309016/apple-macbook-air-15-inch-m2-2023-midnight-thumb-600x600.jpg&quot; alt=&quot;MacBook Air 15 inch M2 2023 10-core GPU Sạc 35W&quot;>
            </div>
<p class=&quot;result-label temp1&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giảm Giá Mạnh&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2024/02/content/50x50--1--100x100.png&quot;><span>Giảm Giá Mạnh</span></p>
        <h3 title=&quot;Laptop Apple MacBook Air 15 inch M2 2023 8-core CPU/8GB/256GB/10-core GPU/35W&quot;>
            MacBook Air 15 inch M2 2023 10-core GPU Sạc 35W
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 8 GB</span>
                        <span>SSD 256 GB</span>
            </div>
            <p class=&quot;item-txt-online&quot;><i></i>Online giá rẻ quá</p>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>32.290.000₫</p>
                        <span class=&quot;percent&quot;>-13%</span>
                </div>
                <strong class=&quot;price&quot;>27.990.000₫</strong>



    </a>
        <div class=&quot;item-rating&quot;>
            <p>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                                <i class=&quot;icon-star-half&quot;></i>
            </p>
            <p class=&quot;item-rating-total&quot;>4</p>
        </div>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 15.3&quot;, Retina</p>
            <p>CPU: Apple M2, 100GB/s</p>
            <p>Card: 10 nhân GPU</p>
            <p>Pin: Lên đến 18 giờ</p>
            <p>Khối lượng: 1.51 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;289441&quot;>
                                        <a href=&quot;/laptop/apple-macbook-air-m2-2022-16gb&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop Apple MacBook Air 13 inch M2 2022 8-core CPU/16GB/512GB/10-core GPU&quot; data-id=&quot;289441&quot; data-price=&quot;33990000.0&quot; data-brand=&quot;MacBook&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/289441/apple-macbook-air-m2-2022-16gb-600x600.jpg&quot; alt=&quot;MacBook Air 13 inch M2 2022 10-core GPU&quot;>
            </div>
<p class=&quot;result-label temp1&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giảm Giá Mạnh&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2024/02/content/50x50--1--100x100.png&quot;><span>Giảm Giá Mạnh</span></p>
        <h3 title=&quot;Laptop Apple MacBook Air 13 inch M2 2022 8-core CPU/16GB/512GB/10-core GPU&quot;>
            MacBook Air 13 inch M2 2022 10-core GPU
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>39.190.000₫</p>
                        <span class=&quot;percent&quot;>-13%</span>
                </div>
                <strong class=&quot;price&quot;>33.990.000₫</strong>



    </a>
        <div class=&quot;item-rating&quot;>
            <p>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                                <i class=&quot;icon-star&quot;></i>
            </p>
            <p class=&quot;item-rating-total&quot;>12</p>
        </div>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 13.6&quot;, Retina</p>
            <p>CPU: Apple M2, 100GB/s</p>
            <p>Card: 10 nhân GPU</p>
            <p>Pin: Lên đến 18 giờ</p>
            <p>Khối lượng: 1.24 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;318228&quot;>
                                        <a href=&quot;/laptop/macbook-pro-14-inch-m3-2023?utm_flashsale=1&quot; data-s=&quot;TwoPriceDetailCMS&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop Apple MacBook Pro 14 inch M3 2023 8-core CPU/8GB/512GB/10-core GPU&quot; data-id=&quot;318228&quot; data-price=&quot;37990000.0&quot; data-brand=&quot;MacBook&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/318228/macbook-pro-14-inch-m3-2023-311023-095050-600x600.jpg&quot; alt=&quot;MacBook Pro 14 inch M3 2023 10-core GPU&quot;>
            </div>
<p class=&quot;result-label temp1&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giảm Giá Mạnh&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2024/02/content/50x50--1--100x100.png&quot;><span>Giảm Giá Mạnh</span></p>
        <h3 title=&quot;Laptop Apple MacBook Pro 14 inch M3 2023 8-core CPU/8GB/512GB/10-core GPU&quot;>
            MacBook Pro 14 inch M3 2023 10-core GPU
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 8 GB</span>
                        <span>SSD 512 GB</span>
            </div>
            <p class=&quot;item-txt-online&quot;><i></i>Online giá rẻ quá</p>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>39.990.000₫</p>
                        <span class=&quot;percent&quot;>-5%</span>
                </div>
                <strong class=&quot;price&quot;>37.990.000₫</strong>



    </a>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 14.2&quot;, 4K, 120Hz</p>
            <p>CPU: Apple M3, 100GB/s</p>
            <p>Card: 10 nhân GPU</p>
            <p>Pin: Lên đến 22 giờ</p>
            <p>Khối lượng: 1.55 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;309018&quot;>
                                        <a href=&quot;/laptop/apple-macbook-air-m2-2023-16gb?utm_flashsale=1&quot; data-s=&quot;TwoPriceDetailCMS&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop MacBook Air 15 inch M2 2023 8CPU/16GB/256GB/10GPU&quot; data-id=&quot;309018&quot; data-price=&quot;34490000.0&quot; data-brand=&quot;MacBook&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/309018/apple-macbook-air-15-inch-m2-2023-midnight-thumb-600x600.jpg&quot; alt=&quot;MacBook Air 15 inch M2 2023 10-core GPU&quot;>
            </div>
<p class=&quot;result-label temp1&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giảm Giá Mạnh&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2024/02/content/50x50--1--100x100.png&quot;><span>Giảm Giá Mạnh</span></p>
        <h3 title=&quot;Laptop MacBook Air 15 inch M2 2023 8CPU/16GB/256GB/10GPU&quot;>
            MacBook Air 15 inch M2 2023 10-core GPU
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 16 GB</span>
                        <span>SSD 256 GB</span>
            </div>
            <p class=&quot;item-txt-online&quot;><i></i>Online giá rẻ quá</p>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>37.990.000₫</p>
                        <span class=&quot;percent&quot;>-9%</span>
                </div>
                <strong class=&quot;price&quot;>34.490.000₫</strong>



    </a>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 15.3&quot;, Retina</p>
            <p>CPU: Apple M2, 100GB/s</p>
            <p>Card: 10 nhân GPU</p>
            <p>Pin: Lên đến 18 giờ</p>
            <p>Khối lượng: 1.51 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;309017&quot;>
                                        <a href=&quot;/laptop/apple-macbook-air-15-inch-m2-2023?utm_flashsale=1&quot; data-s=&quot;TwoPriceDetailCMS&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop MacBook Air 15 inch M2 2023 8CPU/8GB/512GB/10GPU&quot; data-id=&quot;309017&quot; data-price=&quot;32990000.0&quot; data-brand=&quot;MacBook&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/309017/apple-macbook-air-15-inch-m2-2023-midnight-thumb-1-600x600.jpg&quot; alt=&quot;MacBook Air 15 inch M2 2023 10-core GPU&quot;>
            </div>
<p class=&quot;result-label temp3&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giá rẻ quá&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png&quot;><span>Giá rẻ quá</span></p>
        <h3 title=&quot;Laptop MacBook Air 15 inch M2 2023 8CPU/8GB/512GB/10GPU&quot;>
            MacBook Air 15 inch M2 2023 10-core GPU
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 8 GB</span>
                        <span>SSD 512 GB</span>
            </div>
            <p class=&quot;item-txt-online&quot;><i></i>Online giá rẻ quá</p>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>37.990.000₫</p>
                        <span class=&quot;percent&quot;>-13%</span>
                </div>
                <strong class=&quot;price&quot;>32.990.000₫</strong>



    </a>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 15.3&quot;, Retina</p>
            <p>CPU: Apple M2, 100GB/s</p>
            <p>Card: 10 nhân GPU</p>
            <p>Pin: Lên đến 18 giờ</p>
            <p>Khối lượng: 1.51 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;289472&quot;>
                                        <a href=&quot;/laptop/apple-macbook-air-m2-2022-16gb-256gb?utm_flashsale=1&quot; data-s=&quot;TwoPriceDetailCMS&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop Apple MacBook Air 13 inch M2 2022 8-coreCPU/16GB/256GB/8-core GPU&quot; data-id=&quot;289472&quot; data-price=&quot;29490000.0&quot; data-brand=&quot;MacBook&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/289472/apple-macbook-air-m2-2022-16gb-256gb-thumb-600x600.jpg&quot; alt=&quot;MacBook Air 13 inch M2 2022 8-core GPU&quot;>
            </div>
<p class=&quot;result-label temp1&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giảm Giá Mạnh&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2024/02/content/50x50--1--100x100.png&quot;><span>Giảm Giá Mạnh</span></p>
        <h3 title=&quot;Laptop Apple MacBook Air 13 inch M2 2022 8-coreCPU/16GB/256GB/8-core GPU&quot;>
            MacBook Air 13 inch M2 2022 8-core GPU
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 16 GB</span>
                        <span>SSD 256 GB</span>
            </div>
            <p class=&quot;item-txt-online&quot;><i></i>Online giá rẻ quá</p>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>31.990.000₫</p>
                        <span class=&quot;percent&quot;>-7%</span>
                </div>
                <strong class=&quot;price&quot;>29.490.000₫</strong>



    </a>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 13.6&quot;, Retina</p>
            <p>CPU: Apple M2, 100GB/s</p>
            <p>Card: 8 nhân GPU</p>
            <p>Pin: Khoảng 10 tiếng</p>
            <p>Khối lượng: 1.24 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;318230&quot;>
                                        <a href=&quot;/laptop/apple-macbook-pro-14-inch-m3-pro-2023?utm_flashsale=1&quot; data-s=&quot;TwoPriceDetailCMS&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop Apple MacBook Pro 14 inch M3 Pro 2023 11-core CPU/18GB/512GB/14-core GPU&quot; data-id=&quot;318230&quot; data-price=&quot;49490000.0&quot; data-brand=&quot;MacBook&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/318230/apple-macbook-pro-14-inch-m3-pro-2023-311023-105253-600x600.jpg&quot; alt=&quot;MacBook Pro 14 inch M3 Pro 2023 14-core GPU&quot;>
            </div>
<p class=&quot;result-label temp1&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giảm Giá Mạnh&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2024/02/content/50x50--1--100x100.png&quot;><span>Giảm Giá Mạnh</span></p>
        <h3 title=&quot;Laptop Apple MacBook Pro 14 inch M3 Pro 2023 11-core CPU/18GB/512GB/14-core GPU&quot;>
            MacBook Pro 14 inch M3 Pro 2023 14-core GPU
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 18 GB</span>
                        <span>SSD 512 GB</span>
            </div>
            <p class=&quot;item-txt-online&quot;><i></i>Online giá rẻ quá</p>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>49.990.000₫</p>
                </div>
                <strong class=&quot;price&quot;>49.490.000₫</strong>



    </a>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 14.2&quot;, 4K, 120Hz</p>
            <p>CPU: Apple M3 Pro, 150 GB/s memory bandwidth</p>
            <p>Card: 14 nhân GPU</p>
            <p>Pin: Lên đến 18 giờ</p>
            <p>Khối lượng: 1.61 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;231244&quot;>
                                        <a href=&quot;/laptop/apple-macbook-air-2020-mgn63saa?utm_flashsale=1&quot; data-s=&quot;TwoPriceDetailCMS&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;True&quot; data-name=&quot;Laptop Apple MacBook Air 13 inch M1 2020 8-core CPU/8GB/256GB/7-core GPU&quot; data-id=&quot;231244&quot; data-price=&quot;17690000.0&quot; data-brand=&quot;MacBook&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/231244/macbook-air-m1-2020-gray-600x600.jpg&quot; alt=&quot;MacBook Air 13 inch M1 2020 7-core GPU&quot;>
            </div>
<p class=&quot;result-label temp1&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giảm Giá Mạnh&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2024/02/content/50x50--1--100x100.png&quot;><span>Giảm Giá Mạnh</span></p>
        <h3 title=&quot;Laptop Apple MacBook Air 13 inch M1 2020 8-core CPU/8GB/256GB/7-core GPU&quot;>
            MacBook Air 13 inch M1 2020 7-core GPU
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 8 GB</span>
                        <span>SSD 256 GB</span>
            </div>
            <p class=&quot;item-txt-online&quot;><i></i>Online giá rẻ quá</p>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>19.590.000₫</p>
                        <span class=&quot;percent&quot;>-9%</span>
                </div>
                <strong class=&quot;price&quot;>17.690.000₫</strong>



    </a>
        <div class=&quot;item-rating&quot;>
            <p>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                                <i class=&quot;icon-star-dark&quot;></i>
            </p>
            <p class=&quot;item-rating-total&quot;>202</p>
        </div>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 13.3&quot;, Retina</p>
            <p>CPU: Apple M1</p>
            <p>Card: 7 nhân GPU</p>
            <p>Pin: Lên đến 18 giờ</p>
            <p>Khối lượng: 1.29 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                        ">
                </section>
            </div>
            <div class="block" id="hoc-tap-van-phong">
                <section>
                    <div class="block__banner">
                        
    <div class="">
            <div class="item_banner" data-href="https://www.thegioididong.com/laptop?g=hoc-tap-van-phong" style="background-color:#FED403">
                <a data-cate="44" data-place="1696" rel="nofollow" href="javascript:;" onclick="jQuery.ajax({ url: '/bannertracking?bid=74422&amp;r='+ (new Date).getTime(), async: true, cache: false });"><img style="cursor:pointer" src="https://cdn.tgdd.vn/2024/02/banner/dem-van-phong-desk-1200x200.png" alt="MSI Modern" width="1200" height="200"></a>
            </div>
    </div>

                            <div class="question" onclick="CloseCriteria(this)">
                                <span class="text-hover">Laptop Học tập, Văn phòng là gì?</span>
                                <img class="banner-icon" src="//cdn.tgdd.vn/mwgcart/mwgcore/ContentMwg/images/laptop/icon-question.v202307010120.png">
                            </div>
                            <a class="_criteria" onclick="CloseCriteria(this)" href="javascript:;">
                                <div data-htmlid="3603">
                                    <span></span>
                                    <div>
                                        <p><strong>LAPTOP HỌC TẬP - VĂN PHÒNG</strong><br>Dòng laptop cơ bản, giá thành hợp lý, cấu hình ổn định, xử lý tốt và ổn định các tác vụ văn phòng, phù hợp với các bạn học sinh, sinh viên, nhân viên văn phòng.<br><br>Cấu hình tối thiểu:<br><img src="https://cdn.tgdd.vn/2021/09/content/icon-cpu-new-42x42-2.png" data-mce-src="https://cdn.tgdd.vn/2021/09/content/icon-cpu-new-42x42-2.png">&nbsp;CPU: Intel Core i3 / Celeron / Pentinum<br><img src="https://cdn.tgdd.vn/2021/09/content/icon-ram-new-42x42-3.png" data-mce-src="https://cdn.tgdd.vn/2021/09/content/icon-ram-new-42x42-3.png">&nbsp;RAM: 4 GB<br><img src="https://cdn.tgdd.vn/2021/09/content/icon-o-cung-42x42-4.png" data-mce-src="https://cdn.tgdd.vn/2021/09/content/icon-o-cung-42x42-4.png">&nbsp;Ổ cứng: SSD 256 GB</p>
                                    </div>
                                </div>
                            </a>
                    </div>
                    
	<ul class="block__tab">

			<li class="active" data-url="/laptop?g=hoc-tap-van-phong" data-html-id="3598"><a href="javascript:;"> Nổi bật </a> </li>
			<li class="" data-url="laptop?p=duoi-10-trieu&amp;g=hoc-tap-van-phong" data-cate-id="44" data-prop-value-ids="37697" data-price-id="11"><a href="javascript:;"> Dưới 10 triệu </a> </li>
			<li class="" data-url="/laptop-hp-compaq?g=hoc-tap-van-phong" data-cate-id="44" data-prop-value-ids="37697" data-manu-id="122"><a href="javascript:;"> HP </a> </li>
			<li class="" data-url="/laptop-dell?g=hoc-tap-van-phong" data-cate-id="44" data-prop-value-ids="37697" data-manu-id="118"><a href="javascript:;"> Dell </a> </li>
			<li class="" data-url="/laptop-acer?g=hoc-tap-van-phong" data-cate-id="44" data-prop-value-ids="37697" data-manu-id="119"><a href="javascript:;"> Acer </a> </li>
			<li class="" data-url="/laptop-asus?g=hoc-tap-van-phong" data-cate-id="44" data-prop-value-ids="37697" data-manu-id="128"><a href="javascript:;"> Asus </a> </li>
			<li class="" data-url="/laptop-lenovo?g=hoc-tap-van-phong" data-cate-id="44" data-prop-value-ids="37697" data-manu-id="120"><a href="javascript:;"> Lenovo </a> </li>
			<li class="" data-url="/laptop?g=hoc-tap-van-phong#c=44&amp;p=37697,1416&amp;o=17&amp;pi=0" data-cate-id="44" data-prop-value-ids="37697,1416"><a href="javascript:;"> RAM 16 GB </a> </li>
		 

	</ul>


                    <div class="box-main-listproduct">
                        <div class="listproduct listproduct-block" data-url="/laptop?g=hoc-tap-van-phong">
                                <div class="item" data-id="313084">
                                        <a href="/laptop/hp-15s-fq5229tu-i3-8u237pa" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop HP 15s fq5229TU i3 1215U/8GB/512GB/Win11 (8U237PA)" data-id="313084" data-price="9990000.0" data-brand="HP" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">
                    <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class="item-img item-img_44">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/44/313084/TimerThumb/hp-15s-fq5229tu-i3-8u237pa.jpg" alt="HP 15s fq5229TU i3 1215U (8U237PA)">
                    <img src="https://cdn.tgdd.vn/2023/10/campaign/label-tgdd-200x200.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>
<p class="result-label temp3"><img width="20" height="20" class="lazyload" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
        <h3 title="Laptop HP 15s fq5229TU i3 1215U/8GB/512GB/Win11 (8U237PA)">
            HP 15s fq5229TU i3 1215U (8U237PA)
        </h3>
            <div class="item-compare">
                        <span>RAM 8 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class="box-p">
                    <p class="price-old black">13.690.000₫</p>
                        <span class="percent">-27%</span>
                </div>
                <strong class="price">9.990.000₫</strong>



            <p class="item-gift">Quà <b>100.000₫</b></p>
    </a>
        <div class="item-rating">
            <p>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                                <i class="icon-star-half"></i>
            </p>
            <p class="item-rating-total">13</p>
        </div>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 15.6", Full HD</p>
            <p>CPU: i3, 1215U, 1.2GHz</p>
            <p>Card: Intel UHD</p>
            <p>Pin: 3-cell, 41Wh</p>
            <p>Khối lượng: 1.69 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="311178">
                                        <a href="/laptop/asus-vivobook-go-15-e1504fa-r5-nj776w" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Asus Vivobook Go 15 E1504FA R5 7520U/16GB/512GB/Chuột/Win11 (NJ776W)" data-id="311178" data-price="12490000.0" data-brand="Asus" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">
                    <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class="item-img item-img_44">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/44/311178/TimerThumb/asus-vivobook-go-15-e1504fa-r5-nj776w.jpg" alt="Asus Vivobook Go 15 E1504FA R5 7520U (NJ776W)">
                    <img src="https://cdn.tgdd.vn/2023/10/campaign/label-tgdd-200x200.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>
<p class="result-label temp3"><img width="20" height="20" class="lazyload" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
        <h3 title="Laptop Asus Vivobook Go 15 E1504FA R5 7520U/16GB/512GB/Chuột/Win11 (NJ776W)">
            Asus Vivobook Go 15 E1504FA R5 7520U (NJ776W)
        </h3>
            <div class="item-compare">
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class="box-p">
                    <p class="price-old black">14.490.000₫</p>
                        <span class="percent">-13%</span>
                </div>
                <strong class="price">12.490.000₫</strong>



            <p class="item-gift">Quà <b>100.000₫</b></p>
    </a>
        <div class="item-rating">
            <p>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                                <i class="icon-star-dark"></i>
            </p>
            <p class="item-rating-total">17</p>
        </div>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 15.6", Full HD</p>
            <p>CPU: Ryzen 5, 7520U, 2.8GHz</p>
            <p>Card: Radeon</p>
            <p>Pin: 3-cell, 42Wh</p>
            <p>Khối lượng: 1.63 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="310282">
                                        <a href="/laptop/acer-aspire-3-a315-510p-32ef-i3-nxkdhsv001" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Acer Aspire 3 A315 510P 32EF i3 N305/8GB/256GB/Win11 (NX.KDHSV.001)" data-id="310282" data-price="8790000.0" data-brand="Acer" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">
                    <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class="item-img item-img_44">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/44/310282/TimerThumb/acer-aspire-3-a315-510p-32ef-i3-nxkdhsv001.jpg" alt="Acer Aspire 3 A315 510P 32EF i3 N305 (NX.KDHSV.001)">
                    <img src="https://cdn.tgdd.vn/2023/10/campaign/label-tgdd-200x200.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>
<p class="result-label temp3"><img width="20" height="20" class="lazyload" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
        <h3 title="Laptop Acer Aspire 3 A315 510P 32EF i3 N305/8GB/256GB/Win11 (NX.KDHSV.001)">
            Acer Aspire 3 A315 510P 32EF i3 N305 (NX.KDHSV.001)
        </h3>
            <div class="item-compare">
                        <span>RAM 8 GB</span>
                        <span>SSD 256 GB</span>
            </div>
                <div class="box-p">
                    <p class="price-old black">9.990.000₫</p>
                        <span class="percent">-12%</span>
                </div>
                <strong class="price">8.790.000₫</strong>



            <p class="item-gift">Quà <b>100.000₫</b></p>
    </a>
        <div class="item-rating">
            <p>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                                <i class="icon-star-half"></i>
            </p>
            <p class="item-rating-total">23</p>
        </div>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 15.6", Full HD</p>
            <p>CPU: i3 chuỗi N, N305</p>
            <p>Card: Intel UHD</p>
            <p>Pin: 40 Wh</p>
            <p>Khối lượng: 1.7 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="309293">
                                        <a href="/laptop/dell-inspiron-3520-i3-71003264" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Dell Inspiron 15 3520 i3 1215U/8GB/512GB/120Hz/OfficeHS/Win11 (71003264)" data-id="309293" data-price="11690000.0" data-brand="Dell" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">
                    <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class="item-img item-img_44">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/44/309293/TimerThumb/dell-inspiron-3520-i3-71003264.jpg" alt="Dell Inspiron 15 3520 i3 1215U (71003264)">
                    <img src="https://cdn.tgdd.vn/ValueIcons/label-office-ban-quyen.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>
<p class="result-label temp3"><img width="20" height="20" class="lazyload" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
        <h3 title="Laptop Dell Inspiron 15 3520 i3 1215U/8GB/512GB/120Hz/OfficeHS/Win11 (71003264)">
            Dell Inspiron 15 3520 i3 1215U (71003264)
        </h3>
            <div class="item-compare">
                        <span>RAM 8 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class="box-p">
                    <p class="price-old black">13.790.000₫</p>
                        <span class="percent">-15%</span>
                </div>
                <strong class="price">11.690.000₫</strong>



            <p class="item-gift">Quà <b>100.000₫</b></p>
    </a>
        <div class="item-rating">
            <p>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                                <i class="icon-star-dark"></i>
            </p>
            <p class="item-rating-total">22</p>
        </div>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 15.6", Full HD, 120Hz</p>
            <p>CPU: i3, 1215U, 1.2GHz</p>
            <p>Card: Intel UHD</p>
            <p>Pin: 3-cell, 41Wh</p>
            <p>Khối lượng: 1.9 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="313627">
                                        <a href="/laptop/lenovo-ideapad-1-15alc7-r7-82r400c1vn" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Lenovo Ideapad 1 15ALC7 R7 5700U/16GB/512GB/Win11 (82R400C1VN)" data-id="313627" data-price="12990000.0" data-brand="Lenovo" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">
                    <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class="item-img item-img_44">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/44/313627/TimerThumb/lenovo-ideapad-1-15alc7-r7-82r400c1vn.jpg" alt="Lenovo Ideapad 1 15ALC7 R7 5700U (82R400C1VN)">
                    <img src="https://cdn.tgdd.vn/ValueIcons/bao-hanh-lenovo-2-nam-1.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>

        <h3 title="Laptop Lenovo Ideapad 1 15ALC7 R7 5700U/16GB/512GB/Win11 (82R400C1VN)">
            Lenovo Ideapad 1 15ALC7 R7 5700U (82R400C1VN)
        </h3>
            <div class="item-compare">
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class="box-p">
                    <p class="price-old black">13.990.000₫</p>
                        <span class="percent">-7%</span>
                </div>
                <strong class="price">12.990.000₫</strong>



            <p class="item-gift">Quà <b>100.000₫</b></p>
    </a>
        <div class="item-rating">
            <p>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                                <i class="icon-star"></i>
            </p>
            <p class="item-rating-total">3</p>
        </div>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 15.6", Full HD</p>
            <p>CPU: Ryzen 7, 5700U, 1.8GHz</p>
            <p>Card: Radeon</p>
            <p>Pin: 42 Wh</p>
            <p>Khối lượng: 1.61 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="304539">
                                        <a href="/laptop/msi-modern-14-c11m-i3-011vn" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop MSI Modern 14 C11M i3 1115G4/8GB/512GB/Win11 (011VN)" data-id="304539" data-price="8490000.0" data-brand="MSI" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">
                    <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class="item-img item-img_44">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/44/304539/TimerThumb/msi-modern-14-c11m-i3-011vn-(4).jpg" alt="MSI Modern 14 C11M i3 1115G4 (011VN)">
                    <img src="https://cdn.tgdd.vn/ValueIcons/Label_01-01.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>
<p class="result-label temp3"><img width="20" height="20" class="lazyload" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
        <h3 title="Laptop MSI Modern 14 C11M i3 1115G4/8GB/512GB/Win11 (011VN)">
            MSI Modern 14 C11M i3 1115G4 (011VN)
        </h3>
            <div class="item-compare">
                        <span>RAM 8 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class="box-p">
                    <p class="price-old black">11.990.000₫</p>
                        <span class="percent">-29%</span>
                </div>
                <strong class="price">8.490.000₫</strong>



            <p class="item-gift">Quà <b>100.000₫</b></p>
    </a>
        <div class="item-rating">
            <p>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                                <i class="icon-star-dark"></i>
            </p>
            <p class="item-rating-total">28</p>
        </div>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 14", Full HD</p>
            <p>CPU: i3, 1115G4, 3GHz</p>
            <p>Card: Intel UHD</p>
            <p>Pin: 3-cell, 39Wh</p>
            <p>Khối lượng: 1.4 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="302533">
                                        <a href="/laptop/hp-pavilion-15-eg2082tu-i5-7c0q5pa" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop HP Pavilion 15 eg2082TU i5 1240P/8GB/512GB/Win11 (7C0Q5PA)" data-id="302533" data-price="15590000.0" data-brand="HP" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">
                    <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class="item-img item-img_44">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/44/302533/TimerThumb/hp-pavilion-15-eg2082tu-i5-7c0q5pa-(8).jpg" alt="HP Pavilion 15 eg2082TU i5 1240P (7C0Q5PA)">
                    <img src="https://cdn.tgdd.vn/2023/10/campaign/label-tgdd-200x200.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>
<p class="result-label temp3"><img width="20" height="20" class="lazyload" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
        <h3 title="Laptop HP Pavilion 15 eg2082TU i5 1240P/8GB/512GB/Win11 (7C0Q5PA)">
            HP Pavilion 15 eg2082TU i5 1240P (7C0Q5PA)
        </h3>
            <div class="item-compare">
                        <span>RAM 8 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class="box-p">
                    <p class="price-old black">19.790.000₫</p>
                        <span class="percent">-21%</span>
                </div>
                <strong class="price">15.590.000₫</strong>



            <p class="item-gift">Quà <b>100.000₫</b></p>
    </a>
        <div class="item-rating">
            <p>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                                <i class="icon-star-dark"></i>
            </p>
            <p class="item-rating-total">50</p>
        </div>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 15.6", Full HD</p>
            <p>CPU: i5, 1240P, 1.7GHz</p>
            <p>Card: Intel Iris Xe</p>
            <p>Pin: 3 cell, 41.04 Wh</p>
            <p>Khối lượng: 1.72 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="311180">
                                        <a href="/laptop/asus-vivobook-15-oled-a1505za-i5-l1337w" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Asus Vivobook 15 OLED A1505ZA i5 12500H/16GB/512GB/Win11 (L1337W)" data-id="311180" data-price="16490000.0" data-brand="Asus" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">
                    <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class="item-img item-img_44">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/44/311180/TimerThumb/asus-vivobook-15-oled-a1505za-i5-l1337w.jpg" alt="Asus Vivobook 15 OLED A1505ZA i5 12500H (L1337W)">
                    <img src="https://cdn.tgdd.vn/ValueIcons/label-asus-oled.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>
<p class="result-label temp3"><img width="20" height="20" class="lazyload" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
        <h3 title="Laptop Asus Vivobook 15 OLED A1505ZA i5 12500H/16GB/512GB/Win11 (L1337W)">
            Asus Vivobook 15 OLED A1505ZA i5 12500H (L1337W)
        </h3>
            <div class="item-compare">
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class="box-p">
                    <p class="price-old black">19.990.000₫</p>
                        <span class="percent">-17%</span>
                </div>
                <strong class="price">16.490.000₫</strong>



            <p class="item-gift">Quà <b>100.000₫</b></p>
    </a>
        <div class="item-rating">
            <p>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                                <i class="icon-star-dark"></i>
            </p>
            <p class="item-rating-total">7</p>
        </div>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 15.6", Full HD</p>
            <p>CPU: i5, 12500H, 2.5GHz</p>
            <p>Card: Intel Iris Xe</p>
            <p>Pin: 3-cell, 50Wh</p>
            <p>Khối lượng: 1.7 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="321436">
                                        <a href="/laptop/acer-aspire-a315-44p-r9w8-r7-nxksjsv002" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Acer Aspire 3 A315 44P R9W8 R7 5700U/8GB/512GB/Win11 (NX.KSJSV.002)" data-id="321436" data-price="11490000.0" data-brand="Acer" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">
                    <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class="item-img item-img_44">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/44/321436/TimerThumb/acer-aspire-a315-44p-r9w8-r7-nxksjsv002.jpg" alt="Acer Aspire 3 A315 44P R9W8 R7 5700U (NX.KSJSV.002)">
            </div>
<p class="result-label temp3"><img width="20" height="20" class="lazyload" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
        <h3 title="Laptop Acer Aspire 3 A315 44P R9W8 R7 5700U/8GB/512GB/Win11 (NX.KSJSV.002)">
            Acer Aspire 3 A315 44P R9W8 R7 5700U (NX.KSJSV.002)
        </h3>
            <div class="item-compare">
                        <span>RAM 8 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class="box-p">
                    <p class="price-old black">12.990.000₫</p>
                        <span class="percent">-11%</span>
                </div>
                <strong class="price">11.490.000₫</strong>



            <p class="item-gift">Quà <b>100.000₫</b></p>
    </a>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 15.6", Full HD</p>
            <p>CPU: Ryzen 7, 5700U, 1.8GHz</p>
            <p>Card: Radeon</p>
            <p>Pin: 3-cell, 50Wh</p>
            <p>Khối lượng: 1.7 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="321192">
                                        <a href="/laptop/dell-inspiron-15-3520-i5-25p231" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Dell Inspiron 15 3520 i5 1235U/16GB/512GB/120Hz/OfficeHS/KYHD/Win11 (25P231)" data-id="321192" data-price="15490000.0" data-brand="Dell" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">

        </div>

            <div class="item-img item-img_44">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/44/321192/TimerThumb/dell-inspiron-15-3520-i5-25p231-thumb.jpg" alt="Dell Inspiron 15 3520 i5 1235U (25P231)">
                    <img src="https://cdn.tgdd.vn/ValueIcons/label-office-ban-quyen.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>

        <h3 title="Laptop Dell Inspiron 15 3520 i5 1235U/16GB/512GB/120Hz/OfficeHS/KYHD/Win11 (25P231)">
            Dell Inspiron 15 3520 i5 1235U (25P231)
        </h3>
            <div class="item-compare">
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class="box-p">
                    <p class="price-old black">16.690.000₫</p>
                        <span class="percent">-7%</span>
                </div>
                <strong class="price">15.490.000₫</strong>



            <p class="item-gift">Quà <b>100.000₫</b></p>
    </a>
        <div class="item-rating">
            <p>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                                <i class="icon-star-dark"></i>
            </p>
            <p class="item-rating-total">5</p>
        </div>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 15.6", Full HD, 120Hz</p>
            <p>CPU: i5, 1235U, 1.3GHz</p>
            <p>Card: Intel Iris Xe</p>
            <p>Pin: 3-cell, 41Wh</p>
            <p>Khối lượng: 1.9 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                        </div>
                    </div>
                    <a href="/laptop?g=hoc-tap-van-phong" class="block-btn">
                        <span>Xem tất cả Laptop Học tập, Văn phòng</span>
                    </a>
                    <input type="hidden" class="hdf hide" value="
                                <div class=&quot;item&quot; data-id=&quot;313084&quot;>
                                        <a href=&quot;/laptop/hp-15s-fq5229tu-i3-8u237pa&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop HP 15s fq5229TU i3 1215U/8GB/512GB/Win11 (8U237PA)&quot; data-id=&quot;313084&quot; data-price=&quot;9990000.0&quot; data-brand=&quot;HP&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>
                    <span class=&quot;lb-tragop&quot;>Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/313084/TimerThumb/hp-15s-fq5229tu-i3-8u237pa.jpg&quot; alt=&quot;HP 15s fq5229TU i3 1215U (8U237PA)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/2023/10/campaign/label-tgdd-200x200.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>
<p class=&quot;result-label temp3&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giá rẻ quá&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png&quot;><span>Giá rẻ quá</span></p>
        <h3 title=&quot;Laptop HP 15s fq5229TU i3 1215U/8GB/512GB/Win11 (8U237PA)&quot;>
            HP 15s fq5229TU i3 1215U (8U237PA)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 8 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>13.690.000₫</p>
                        <span class=&quot;percent&quot;>-27%</span>
                </div>
                <strong class=&quot;price&quot;>9.990.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>100.000₫</b></p>
    </a>
        <div class=&quot;item-rating&quot;>
            <p>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                                <i class=&quot;icon-star-half&quot;></i>
            </p>
            <p class=&quot;item-rating-total&quot;>13</p>
        </div>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 15.6&quot;, Full HD</p>
            <p>CPU: i3, 1215U, 1.2GHz</p>
            <p>Card: Intel UHD</p>
            <p>Pin: 3-cell, 41Wh</p>
            <p>Khối lượng: 1.69 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;311178&quot;>
                                        <a href=&quot;/laptop/asus-vivobook-go-15-e1504fa-r5-nj776w&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop Asus Vivobook Go 15 E1504FA R5 7520U/16GB/512GB/Chuột/Win11 (NJ776W)&quot; data-id=&quot;311178&quot; data-price=&quot;12490000.0&quot; data-brand=&quot;Asus&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>
                    <span class=&quot;lb-tragop&quot;>Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/311178/TimerThumb/asus-vivobook-go-15-e1504fa-r5-nj776w.jpg&quot; alt=&quot;Asus Vivobook Go 15 E1504FA R5 7520U (NJ776W)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/2023/10/campaign/label-tgdd-200x200.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>
<p class=&quot;result-label temp3&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giá rẻ quá&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png&quot;><span>Giá rẻ quá</span></p>
        <h3 title=&quot;Laptop Asus Vivobook Go 15 E1504FA R5 7520U/16GB/512GB/Chuột/Win11 (NJ776W)&quot;>
            Asus Vivobook Go 15 E1504FA R5 7520U (NJ776W)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>14.490.000₫</p>
                        <span class=&quot;percent&quot;>-13%</span>
                </div>
                <strong class=&quot;price&quot;>12.490.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>100.000₫</b></p>
    </a>
        <div class=&quot;item-rating&quot;>
            <p>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                                <i class=&quot;icon-star-dark&quot;></i>
            </p>
            <p class=&quot;item-rating-total&quot;>17</p>
        </div>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 15.6&quot;, Full HD</p>
            <p>CPU: Ryzen 5, 7520U, 2.8GHz</p>
            <p>Card: Radeon</p>
            <p>Pin: 3-cell, 42Wh</p>
            <p>Khối lượng: 1.63 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;310282&quot;>
                                        <a href=&quot;/laptop/acer-aspire-3-a315-510p-32ef-i3-nxkdhsv001&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop Acer Aspire 3 A315 510P 32EF i3 N305/8GB/256GB/Win11 (NX.KDHSV.001)&quot; data-id=&quot;310282&quot; data-price=&quot;8790000.0&quot; data-brand=&quot;Acer&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>
                    <span class=&quot;lb-tragop&quot;>Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/310282/TimerThumb/acer-aspire-3-a315-510p-32ef-i3-nxkdhsv001.jpg&quot; alt=&quot;Acer Aspire 3 A315 510P 32EF i3 N305 (NX.KDHSV.001)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/2023/10/campaign/label-tgdd-200x200.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>
<p class=&quot;result-label temp3&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giá rẻ quá&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png&quot;><span>Giá rẻ quá</span></p>
        <h3 title=&quot;Laptop Acer Aspire 3 A315 510P 32EF i3 N305/8GB/256GB/Win11 (NX.KDHSV.001)&quot;>
            Acer Aspire 3 A315 510P 32EF i3 N305 (NX.KDHSV.001)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 8 GB</span>
                        <span>SSD 256 GB</span>
            </div>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>9.990.000₫</p>
                        <span class=&quot;percent&quot;>-12%</span>
                </div>
                <strong class=&quot;price&quot;>8.790.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>100.000₫</b></p>
    </a>
        <div class=&quot;item-rating&quot;>
            <p>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                                <i class=&quot;icon-star-half&quot;></i>
            </p>
            <p class=&quot;item-rating-total&quot;>23</p>
        </div>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 15.6&quot;, Full HD</p>
            <p>CPU: i3 chuỗi N, N305</p>
            <p>Card: Intel UHD</p>
            <p>Pin: 40 Wh</p>
            <p>Khối lượng: 1.7 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;309293&quot;>
                                        <a href=&quot;/laptop/dell-inspiron-3520-i3-71003264&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop Dell Inspiron 15 3520 i3 1215U/8GB/512GB/120Hz/OfficeHS/Win11 (71003264)&quot; data-id=&quot;309293&quot; data-price=&quot;11690000.0&quot; data-brand=&quot;Dell&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>
                    <span class=&quot;lb-tragop&quot;>Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/309293/TimerThumb/dell-inspiron-3520-i3-71003264.jpg&quot; alt=&quot;Dell Inspiron 15 3520 i3 1215U (71003264)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/ValueIcons/label-office-ban-quyen.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>
<p class=&quot;result-label temp3&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giá rẻ quá&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png&quot;><span>Giá rẻ quá</span></p>
        <h3 title=&quot;Laptop Dell Inspiron 15 3520 i3 1215U/8GB/512GB/120Hz/OfficeHS/Win11 (71003264)&quot;>
            Dell Inspiron 15 3520 i3 1215U (71003264)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 8 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>13.790.000₫</p>
                        <span class=&quot;percent&quot;>-15%</span>
                </div>
                <strong class=&quot;price&quot;>11.690.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>100.000₫</b></p>
    </a>
        <div class=&quot;item-rating&quot;>
            <p>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                                <i class=&quot;icon-star-dark&quot;></i>
            </p>
            <p class=&quot;item-rating-total&quot;>22</p>
        </div>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 15.6&quot;, Full HD, 120Hz</p>
            <p>CPU: i3, 1215U, 1.2GHz</p>
            <p>Card: Intel UHD</p>
            <p>Pin: 3-cell, 41Wh</p>
            <p>Khối lượng: 1.9 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;313627&quot;>
                                        <a href=&quot;/laptop/lenovo-ideapad-1-15alc7-r7-82r400c1vn&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop Lenovo Ideapad 1 15ALC7 R7 5700U/16GB/512GB/Win11 (82R400C1VN)&quot; data-id=&quot;313627&quot; data-price=&quot;12990000.0&quot; data-brand=&quot;Lenovo&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>
                    <span class=&quot;lb-tragop&quot;>Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/313627/TimerThumb/lenovo-ideapad-1-15alc7-r7-82r400c1vn.jpg&quot; alt=&quot;Lenovo Ideapad 1 15ALC7 R7 5700U (82R400C1VN)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/ValueIcons/bao-hanh-lenovo-2-nam-1.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>

        <h3 title=&quot;Laptop Lenovo Ideapad 1 15ALC7 R7 5700U/16GB/512GB/Win11 (82R400C1VN)&quot;>
            Lenovo Ideapad 1 15ALC7 R7 5700U (82R400C1VN)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>13.990.000₫</p>
                        <span class=&quot;percent&quot;>-7%</span>
                </div>
                <strong class=&quot;price&quot;>12.990.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>100.000₫</b></p>
    </a>
        <div class=&quot;item-rating&quot;>
            <p>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                                <i class=&quot;icon-star&quot;></i>
            </p>
            <p class=&quot;item-rating-total&quot;>3</p>
        </div>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 15.6&quot;, Full HD</p>
            <p>CPU: Ryzen 7, 5700U, 1.8GHz</p>
            <p>Card: Radeon</p>
            <p>Pin: 42 Wh</p>
            <p>Khối lượng: 1.61 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;304539&quot;>
                                        <a href=&quot;/laptop/msi-modern-14-c11m-i3-011vn&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop MSI Modern 14 C11M i3 1115G4/8GB/512GB/Win11 (011VN)&quot; data-id=&quot;304539&quot; data-price=&quot;8490000.0&quot; data-brand=&quot;MSI&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>
                    <span class=&quot;lb-tragop&quot;>Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/304539/TimerThumb/msi-modern-14-c11m-i3-011vn-(4).jpg&quot; alt=&quot;MSI Modern 14 C11M i3 1115G4 (011VN)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/ValueIcons/Label_01-01.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>
<p class=&quot;result-label temp3&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giá rẻ quá&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png&quot;><span>Giá rẻ quá</span></p>
        <h3 title=&quot;Laptop MSI Modern 14 C11M i3 1115G4/8GB/512GB/Win11 (011VN)&quot;>
            MSI Modern 14 C11M i3 1115G4 (011VN)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 8 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>11.990.000₫</p>
                        <span class=&quot;percent&quot;>-29%</span>
                </div>
                <strong class=&quot;price&quot;>8.490.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>100.000₫</b></p>
    </a>
        <div class=&quot;item-rating&quot;>
            <p>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                                <i class=&quot;icon-star-dark&quot;></i>
            </p>
            <p class=&quot;item-rating-total&quot;>28</p>
        </div>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 14&quot;, Full HD</p>
            <p>CPU: i3, 1115G4, 3GHz</p>
            <p>Card: Intel UHD</p>
            <p>Pin: 3-cell, 39Wh</p>
            <p>Khối lượng: 1.4 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;302533&quot;>
                                        <a href=&quot;/laptop/hp-pavilion-15-eg2082tu-i5-7c0q5pa&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop HP Pavilion 15 eg2082TU i5 1240P/8GB/512GB/Win11 (7C0Q5PA)&quot; data-id=&quot;302533&quot; data-price=&quot;15590000.0&quot; data-brand=&quot;HP&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>
                    <span class=&quot;lb-tragop&quot;>Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/302533/TimerThumb/hp-pavilion-15-eg2082tu-i5-7c0q5pa-(8).jpg&quot; alt=&quot;HP Pavilion 15 eg2082TU i5 1240P (7C0Q5PA)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/2023/10/campaign/label-tgdd-200x200.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>
<p class=&quot;result-label temp3&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giá rẻ quá&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png&quot;><span>Giá rẻ quá</span></p>
        <h3 title=&quot;Laptop HP Pavilion 15 eg2082TU i5 1240P/8GB/512GB/Win11 (7C0Q5PA)&quot;>
            HP Pavilion 15 eg2082TU i5 1240P (7C0Q5PA)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 8 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>19.790.000₫</p>
                        <span class=&quot;percent&quot;>-21%</span>
                </div>
                <strong class=&quot;price&quot;>15.590.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>100.000₫</b></p>
    </a>
        <div class=&quot;item-rating&quot;>
            <p>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                                <i class=&quot;icon-star-dark&quot;></i>
            </p>
            <p class=&quot;item-rating-total&quot;>50</p>
        </div>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 15.6&quot;, Full HD</p>
            <p>CPU: i5, 1240P, 1.7GHz</p>
            <p>Card: Intel Iris Xe</p>
            <p>Pin: 3 cell, 41.04 Wh</p>
            <p>Khối lượng: 1.72 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;311180&quot;>
                                        <a href=&quot;/laptop/asus-vivobook-15-oled-a1505za-i5-l1337w&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop Asus Vivobook 15 OLED A1505ZA i5 12500H/16GB/512GB/Win11 (L1337W)&quot; data-id=&quot;311180&quot; data-price=&quot;16490000.0&quot; data-brand=&quot;Asus&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>
                    <span class=&quot;lb-tragop&quot;>Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/311180/TimerThumb/asus-vivobook-15-oled-a1505za-i5-l1337w.jpg&quot; alt=&quot;Asus Vivobook 15 OLED A1505ZA i5 12500H (L1337W)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/ValueIcons/label-asus-oled.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>
<p class=&quot;result-label temp3&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giá rẻ quá&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png&quot;><span>Giá rẻ quá</span></p>
        <h3 title=&quot;Laptop Asus Vivobook 15 OLED A1505ZA i5 12500H/16GB/512GB/Win11 (L1337W)&quot;>
            Asus Vivobook 15 OLED A1505ZA i5 12500H (L1337W)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>19.990.000₫</p>
                        <span class=&quot;percent&quot;>-17%</span>
                </div>
                <strong class=&quot;price&quot;>16.490.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>100.000₫</b></p>
    </a>
        <div class=&quot;item-rating&quot;>
            <p>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                                <i class=&quot;icon-star-dark&quot;></i>
            </p>
            <p class=&quot;item-rating-total&quot;>7</p>
        </div>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 15.6&quot;, Full HD</p>
            <p>CPU: i5, 12500H, 2.5GHz</p>
            <p>Card: Intel Iris Xe</p>
            <p>Pin: 3-cell, 50Wh</p>
            <p>Khối lượng: 1.7 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;321436&quot;>
                                        <a href=&quot;/laptop/acer-aspire-a315-44p-r9w8-r7-nxksjsv002&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop Acer Aspire 3 A315 44P R9W8 R7 5700U/8GB/512GB/Win11 (NX.KSJSV.002)&quot; data-id=&quot;321436&quot; data-price=&quot;11490000.0&quot; data-brand=&quot;Acer&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>
                    <span class=&quot;lb-tragop&quot;>Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/321436/TimerThumb/acer-aspire-a315-44p-r9w8-r7-nxksjsv002.jpg&quot; alt=&quot;Acer Aspire 3 A315 44P R9W8 R7 5700U (NX.KSJSV.002)&quot;>
            </div>
<p class=&quot;result-label temp3&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giá rẻ quá&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png&quot;><span>Giá rẻ quá</span></p>
        <h3 title=&quot;Laptop Acer Aspire 3 A315 44P R9W8 R7 5700U/8GB/512GB/Win11 (NX.KSJSV.002)&quot;>
            Acer Aspire 3 A315 44P R9W8 R7 5700U (NX.KSJSV.002)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 8 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>12.990.000₫</p>
                        <span class=&quot;percent&quot;>-11%</span>
                </div>
                <strong class=&quot;price&quot;>11.490.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>100.000₫</b></p>
    </a>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 15.6&quot;, Full HD</p>
            <p>CPU: Ryzen 7, 5700U, 1.8GHz</p>
            <p>Card: Radeon</p>
            <p>Pin: 3-cell, 50Wh</p>
            <p>Khối lượng: 1.7 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;321192&quot;>
                                        <a href=&quot;/laptop/dell-inspiron-15-3520-i5-25p231&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop Dell Inspiron 15 3520 i5 1235U/16GB/512GB/120Hz/OfficeHS/KYHD/Win11 (25P231)&quot; data-id=&quot;321192&quot; data-price=&quot;15490000.0&quot; data-brand=&quot;Dell&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/321192/TimerThumb/dell-inspiron-15-3520-i5-25p231-thumb.jpg&quot; alt=&quot;Dell Inspiron 15 3520 i5 1235U (25P231)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/ValueIcons/label-office-ban-quyen.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>

        <h3 title=&quot;Laptop Dell Inspiron 15 3520 i5 1235U/16GB/512GB/120Hz/OfficeHS/KYHD/Win11 (25P231)&quot;>
            Dell Inspiron 15 3520 i5 1235U (25P231)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>16.690.000₫</p>
                        <span class=&quot;percent&quot;>-7%</span>
                </div>
                <strong class=&quot;price&quot;>15.490.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>100.000₫</b></p>
    </a>
        <div class=&quot;item-rating&quot;>
            <p>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                                <i class=&quot;icon-star-dark&quot;></i>
            </p>
            <p class=&quot;item-rating-total&quot;>5</p>
        </div>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 15.6&quot;, Full HD, 120Hz</p>
            <p>CPU: i5, 1235U, 1.3GHz</p>
            <p>Card: Intel Iris Xe</p>
            <p>Pin: 3-cell, 41Wh</p>
            <p>Khối lượng: 1.9 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                        ">
                </section>
            </div>
            <div class="block" id="do-hoa-ky-thuat">
                <section>
                    <div class="block__banner">
                        
    <div class="">
            <div class="item_banner" data-href="https://www.thegioididong.com/laptop?g=do-hoa-ky-thuat" style="background-color:#071B33">
                <a data-cate="44" data-place="1697" rel="nofollow" href="javascript:;" onclick="jQuery.ajax({ url: '/bannertracking?bid=45521&amp;r='+ (new Date).getTime(), async: true, cache: false });"><img style="cursor:pointer" src="https://cdn.tgdd.vn/2023/07/banner/banner-do-hoa-desk-min-1200x200.png" alt="Đồ họa kỹ thuật" width="1200" height="200"></a>
            </div>
    </div>

                            <div class="question" onclick="CloseCriteria(this)">
                                <span class="text-hover">Laptop Đồ họa, Kỹ thuật là gì?</span>
                                <img class="banner-icon" src="//cdn.tgdd.vn/mwgcart/mwgcore/ContentMwg/images/laptop/icon-question.v202307010120.png">
                            </div>
                            <a class="_criteria" onclick="CloseCriteria(this)" href="javascript:;">
                                <div data-htmlid="3604">
                                    <span></span>
                                    <div>
                                        <p><strong>LAPTOP ĐỒ HOẠ - KỸ THUẬT</strong><br>Cấu hình mạnh, trang bị card đồ hoạ rời và sử dụng mượt các phần mềm đồ hoạ đa phương tiện. Sở hữu màn hình sắc nét, dải màu rộng phục vụ tối đa cho công việc.<br><br>Cấu hình tối thiểu:<br><img src="https://cdn.tgdd.vn/2021/09/content/icon-cpu-new-42x42-1.png" data-mce-src="https://cdn.tgdd.vn/2021/09/content/icon-cpu-new-42x42-1.png">&nbsp;CPU: Intel Core i5<br><img src="https://cdn.tgdd.vn/2021/09/content/icon-ram-new-42x42-2.png" data-mce-src="https://cdn.tgdd.vn/2021/09/content/icon-ram-new-42x42-2.png">&nbsp;RAM: 8 GB<br><img src="https://cdn.tgdd.vn/2021/09/content/icon-o-cung-new-42x42-2.png" data-mce-src="https://cdn.tgdd.vn/2021/09/content/icon-o-cung-new-42x42-2.png">&nbsp;Ổ cứng: SSD 512 GB<br><img src="https://cdn.tgdd.vn/2021/09/content/icon-card-new-42x42.png" data-mce-src="https://cdn.tgdd.vn/2021/09/content/icon-card-new-42x42.png">&nbsp;Card đồ hoạ rời<br><img src="https://cdn.tgdd.vn/2021/09/content/icon-man-hinh-new-42x42-16.png" data-mce-src="https://cdn.tgdd.vn/2021/09/content/icon-man-hinh-new-42x42-16.png">&nbsp;Màn hình: Full HD</p>
                                    </div>
                                </div>
                            </a>
                    </div>
                    
	<ul class="block__tab">

			<li class="active" data-url="/laptop?g=hoc-tap-van-phong" data-html-id="3599"><a href="javascript:;"> Nổi bật </a> </li>
			<li class="" data-url="laptop?p=15-20-trieu&amp;g=do-hoa-ky-thuat" data-cate-id="44" data-prop-value-ids="81785" data-price-id="13"><a href="javascript:;"> 15 - 20 triệu </a> </li>
			<li class="" data-url="/laptop?g=do-hoa-ky-thuat#c=44&amp;p=81785,173320&amp;o=17&amp;pi=0" data-cate-id="44" data-prop-value-ids="81785,173320"><a href="javascript:;"> Card đồ hoạ rời </a> </li>
			<li class="" data-url="/laptop?g=do-hoa-ky-thuat#c=44&amp;p=81785,181746&amp;o=17&amp;pi=0" data-cate-id="44" data-prop-value-ids="81785,181746"><a href="javascript:;"> Màn hình 2K </a> </li>
			<li class="" data-url="/laptop?g=do-hoa-ky-thuat#c=44&amp;p=81785,1416&amp;o=17&amp;pi=0" data-cate-id="44" data-prop-value-ids="81785,1416"><a href="javascript:;"> RAM 16 GB </a> </li>
			<li class="" data-url="/laptop-dell?g=do-hoa-ky-thuat" data-cate-id="44" data-prop-value-ids="81785" data-manu-id="118"><a href="javascript:;"> Dell </a> </li>
			<li class="" data-url="/laptop-apple-macbook?g=do-hoa-ky-thuat" data-cate-id="44" data-prop-value-ids="81785" data-manu-id="203"><a href="javascript:;"> MacBook </a> </li>
			<li class="" data-url="/laptop-asus?g=hoc-tap-van-phong" data-cate-id="44" data-prop-value-ids="81785" data-manu-id="128"><a href="javascript:;"> Asus </a> </li>
		 

	</ul>


                    <div class="box-main-listproduct">
                        <div class="listproduct listproduct-block" data-url="/laptop?g=do-hoa-ky-thuat">
                                <div class="item" data-id="311117">
                                        <a href="/laptop/asus-vivobook-14x-oled-k3405vc-i5-km006w" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Asus Vivobook 14X OLED K3405VC i5 13500H/16GB/512GB/4GB RTX3050/Win11 (KM006W)" data-id="311117" data-price="24990000.0" data-brand="Asus" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">
                    <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class="item-img item-img_44">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/44/311117/asus-vivobook-14x-oled-k3405vc-i5-km006w-glr-thumb-600x600.jpg" alt="Asus Vivobook 14X OLED K3405VC i5 13500H (KM006W)">
                    <img src="https://cdn.tgdd.vn/2023/10/campaign/label-tgdd-200x200.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>
<p class="result-label temp3"><img width="20" height="20" class="lazyload" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
        <h3 title="Laptop Asus Vivobook 14X OLED K3405VC i5 13500H/16GB/512GB/4GB RTX3050/Win11 (KM006W)">
            Asus Vivobook 14X OLED K3405VC i5 13500H (KM006W)
        </h3>
            <div class="item-compare">
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class="box-p">
                    <p class="price-old black">29.490.000₫</p>
                        <span class="percent">-15%</span>
                </div>
                <strong class="price">24.990.000₫</strong>



            <p class="item-gift">Quà <b>100.000₫</b></p>
    </a>
        <div class="item-rating">
            <p>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                                <i class="icon-star-dark"></i>
            </p>
            <p class="item-rating-total">4</p>
        </div>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 14", 2K, 90Hz</p>
            <p>CPU: i5, 13500H, 2.6GHz</p>
            <p>Card: RTX 3050 4GB</p>
            <p>Pin: 3-cell, 63Wh</p>
            <p>Khối lượng: 1.4 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="308526">
                                        <a href="/laptop/hp-pavilion-15-eg2062tx-i5-7c0w7pa?utm_flashsale=1" data-s="OnlineSavingCMS" data-site="1" data-pro="3" data-cache="False" data-name="Laptop HP Pavilion 15 eg2062TX i5 1235U/8GB/512GB/2GB MX550/Win11 (7C0W7PA)" data-id="308526" data-price="17290000.0" data-brand="HP" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">
                    <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class="item-img item-img_44">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/44/308526/hp-pavilion-15-eg2062tx-i5-7c0w7pa-thumb-600x600.jpg" alt="HP Pavilion 15 eg2062TX i5 1235U (7C0W7PA)">
                    <img src="https://cdn.tgdd.vn/ValueIcons/i5-gen-12-13.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>
<p class="result-label temp3"><img width="20" height="20" class="lazyload" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
        <h3 title="Laptop HP Pavilion 15 eg2062TX i5 1235U/8GB/512GB/2GB MX550/Win11 (7C0W7PA)">
            HP Pavilion 15 eg2062TX i5 1235U (7C0W7PA)
        </h3>
            <div class="item-compare">
                        <span>RAM 8 GB</span>
                        <span>SSD 512 GB</span>
            </div>
            <p class="item-txt-online"><i></i>Online giá rẻ quá</p>
                <div class="box-p">
                    <p class="price-old black">20.590.000₫</p>
                        <span class="percent">-16%</span>
                </div>
                <strong class="price">17.290.000₫</strong>



    </a>
        <div class="item-rating">
            <p>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                                <i class="icon-star-dark"></i>
            </p>
            <p class="item-rating-total">11</p>
        </div>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 15.6", Full HD</p>
            <p>CPU: i5, 1235U, 1.3GHz</p>
            <p>Card: MX550 2GB</p>
            <p>Pin: 3 cell, 41.04 Wh</p>
            <p>Khối lượng: 1.74 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="313332">
                                        <a href="/laptop/acer-nitro-5-an515-58-769j-i7-nhqfhsv003" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Acer Gaming Nitro 5 AN515 58 769J i7 12700H/8GB/512GB/4GB RTX3050/144Hz/Win11 (NH.QFHSV.003)" data-id="313332" data-price="23490000.0" data-brand="Acer" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">
                    <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class="item-img item-img_44">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/44/313332/acer-nitro-5-an515-58-769j-i7-nhqfhsv003-thumb-600x600.jpg" alt="Acer Gaming Nitro 5 AN515 58 769J i7 12700H (NH.QFHSV.003)">
                    <img src="https://cdn.tgdd.vn/ValueIcons/label-rtx-30-final.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>
<p class="result-label temp3"><img width="20" height="20" class="lazyload" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
        <h3 title="Laptop Acer Gaming Nitro 5 AN515 58 769J i7 12700H/8GB/512GB/4GB RTX3050/144Hz/Win11 (NH.QFHSV.003)">
            Acer Gaming Nitro 5 AN515 58 769J i7 12700H (NH.QFHSV.003)
        </h3>
            <div class="item-compare">
                        <span>RAM 8 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class="box-p">
                    <p class="price-old black">31.790.000₫</p>
                        <span class="percent">-26%</span>
                </div>
                <strong class="price">23.490.000₫</strong>



            <p class="item-gift">Quà <b>900.000₫</b></p>
    </a>
        <div class="item-rating">
            <p>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                                <i class="icon-star-dark"></i>
            </p>
            <p class="item-rating-total">6</p>
        </div>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 15.6", Full HD, 144Hz</p>
            <p>CPU: i7, 12700H, 2.30 GHz</p>
            <p>Card: RTX 3050 4GB</p>
            <p>Pin: 4-cell, 57.5Wh</p>
            <p>Khối lượng: 2.5 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="313639">
                                        <a href="/laptop/lenovo-legion-5-16irh8-i5-82ya00bsvn" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Lenovo Gaming Legion 5 16IRH8 i5 13500H/16GB/512GB/6GB RTX4050/165Hz/Win11 (82YA00BSVN)" data-id="313639" data-price="35990000.0" data-brand="Lenovo" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">
                    <span class="lb-tragop">Trả góp 0%</span>

        </div>

            <div class="item-img item-img_44">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/44/313639/lenovo-legion-5-16irh8-i5-82ya00bsvn-280823-025858-600x600.jpg" alt="Lenovo Gaming Legion 5 16IRH8 i5 13500H (82YA00BSVN)">
                    <img src="https://cdn.tgdd.vn/ValueIcons/label-rtx-40-final.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>

        <h3 title="Laptop Lenovo Gaming Legion 5 16IRH8 i5 13500H/16GB/512GB/6GB RTX4050/165Hz/Win11 (82YA00BSVN)">
            Lenovo Gaming Legion 5 16IRH8 i5 13500H (82YA00BSVN)
        </h3>
            <div class="item-compare">
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class="box-p">
                    <p class="price-old black">36.990.000₫</p>
                </div>
                <strong class="price">35.990.000₫</strong>



            <p class="item-gift">Quà <b>900.000₫</b></p>
    </a>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 16", 2K, 165Hz</p>
            <p>CPU: i5, 13500H, 2.6GHz</p>
            <p>Card: RTX 4050 6GB</p>
            <p>Pin: 80 Wh</p>
            <p>Khối lượng: 2.4 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="314841">
                                        <a href="/laptop/dell-inspiron-15-3530-i7-n3530i716w1" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Dell Inspiron 15 3530 i7 1355U/16GB/512GB/2GB MX550/OfficeHS/Win11 (N3530I716W1)" data-id="314841" data-price="25290000.0" data-brand="Dell" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">

        </div>

            <div class="item-img item-img_44">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/44/314841/dell-inspiron-15-3530-i7-n3530i716w1-thumb-2-600x600.jpg" alt="Dell Inspiron 15 3530 i7 1355U (N3530I716W1)">
                    <img src="https://cdn.tgdd.vn/ValueIcons/label-office-ban-quyen.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>

        <h3 title="Laptop Dell Inspiron 15 3530 i7 1355U/16GB/512GB/2GB MX550/OfficeHS/Win11 (N3530I716W1)">
            Dell Inspiron 15 3530 i7 1355U (N3530I716W1)
        </h3>
            <div class="item-compare">
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <strong class="price">25.290.000₫</strong>



            <p class="item-gift">Quà <b>100.000₫</b></p>
    </a>
        <div class="item-rating">
            <p>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                                <i class="icon-star-dark"></i>
            </p>
            <p class="item-rating-total">7</p>
        </div>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 15.6", Full HD, 120Hz</p>
            <p>CPU: i7, 1355U, 1.7GHz</p>
            <p>Card: MX550 2GB</p>
            <p>Pin: 4-cell, 54Wh</p>
            <p>Khối lượng: 1.65 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="322527">
                                        <a href="/laptop/msi-prestige-16-studio-a13ve-i7-1214vn" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop MSI Prestige 16 Studio A13VE i7 13700H/16GB/1TB/6GB RTX4050/165Hz/Túi/Win11 (214VN)" data-id="322527" data-price="45990000.0" data-brand="MSI" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">

        </div>

            <div class="item-img item-img_44">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/44/322527/msi-prestige-16-studio-a13ve-i7-1214vn-thumb-600x600.jpg" alt="MSI Prestige 16 Studio A13VE i7 13700H (214VN)">
                    <img src="https://cdn.tgdd.vn/ValueIcons/label-rtx-40-final.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>

        <h3 title="Laptop MSI Prestige 16 Studio A13VE i7 13700H/16GB/1TB/6GB RTX4050/165Hz/Túi/Win11 (214VN)">
            MSI Prestige 16 Studio A13VE i7 13700H (214VN)
        </h3>
            <div class="item-compare">
                        <span>RAM 16 GB</span>
                        <span>SSD 1 TB</span>
            </div>
            <p class="item-txt-online">Chỉ bán online</p>
                <div class="box-p">
                    <p class="price-old black">47.990.000₫</p>
                </div>
                <strong class="price">45.990.000₫</strong>



    </a>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 16", 2K, 165Hz</p>
            <p>CPU: i7, 13700H, 2.4GHz</p>
            <p>Card: RTX 4050 6GB</p>
            <p>Pin: 4-cell, 82 Wh</p>
            <p>Khối lượng: 2.1 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="310803">
                                        <a href="/laptop/asus-tuf-gaming-f15-fx507zc4-i5-hn074w?utm_flashsale=1" data-s="OnlineSavingCMS" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Asus TUF Gaming F15 FX507ZC4 i5 12500H/8GB/512GB/4GB RTX3050/144Hz/Win11 (HN074W)" data-id="310803" data-price="18990000.0" data-brand="Asus" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">
                    <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class="item-img item-img_44">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/44/310803/asus-tuf-gaming-f15-fx507zc4-i5-hn074w-thumb-600x600.jpg" alt="Asus TUF Gaming F15 FX507ZC4 i5 12500H (HN074W)">
                    <img src="https://cdn.tgdd.vn/ValueIcons/label-rtx-30-final.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>
<p class="result-label temp3"><img width="20" height="20" class="lazyload" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
        <h3 title="Laptop Asus TUF Gaming F15 FX507ZC4 i5 12500H/8GB/512GB/4GB RTX3050/144Hz/Win11 (HN074W)">
            Asus TUF Gaming F15 FX507ZC4 i5 12500H (HN074W)
        </h3>
            <div class="item-compare">
                        <span>RAM 8 GB</span>
                        <span>SSD 512 GB</span>
            </div>
            <p class="item-txt-online"><i></i>Online giá rẻ quá</p>
                <div class="box-p">
                    <p class="price-old black">23.990.000₫</p>
                        <span class="percent">-20%</span>
                </div>
                <strong class="price">18.990.000₫</strong>



            <p class="item-gift">Quà <b>900.000₫</b></p>
    </a>
        <div class="item-rating">
            <p>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                                <i class="icon-star-dark"></i>
            </p>
            <p class="item-rating-total">17</p>
        </div>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 15.6", Full HD, 144Hz</p>
            <p>CPU: i5, 12500H, 2.5GHz</p>
            <p>Card: RTX 3050 4GB</p>
            <p>Pin: 4-cell, 56Wh</p>
            <p>Khối lượng: 2.2 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="285967">
                                        <a href="/laptop/hp-pavilion-15-eg2034tx-i7-6k780pa?utm_flashsale=1" data-s="OnlineSavingCMS" data-site="1" data-pro="3" data-cache="False" data-name="Laptop HP Pavilion 15 eg2034TX i7 1255U/8GB/512GB/2GB MX550/Win11 (6K780PA)" data-id="285967" data-price="20190000.0" data-brand="HP" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">
                    <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class="item-img item-img_44">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/44/285967/hp-pavilion-15-eg2034tx-i7-6k780pa-180822-030835-600x600.jpg" alt="HP Pavilion 15 eg2034TX i7 1255U (6K780PA)">
                    <img src="https://cdn.tgdd.vn/ValueIcons/i7-gen-12-13.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>
<p class="result-label temp3"><img width="20" height="20" class="lazyload" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
        <h3 title="Laptop HP Pavilion 15 eg2034TX i7 1255U/8GB/512GB/2GB MX550/Win11 (6K780PA)">
            HP Pavilion 15 eg2034TX i7 1255U (6K780PA)
        </h3>
            <div class="item-compare">
                        <span>RAM 8 GB</span>
                        <span>SSD 512 GB</span>
            </div>
            <p class="item-txt-online"><i></i>Online giá rẻ quá</p>
                <div class="box-p">
                    <p class="price-old black">24.590.000₫</p>
                        <span class="percent">-17%</span>
                </div>
                <strong class="price">20.190.000₫</strong>



    </a>
        <div class="item-rating">
            <p>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                                <i class="icon-star"></i>
                            <i class="icon-star-dark"></i>
            </p>
            <p class="item-rating-total">11</p>
        </div>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 15.6", Full HD</p>
            <p>CPU: i7, 1255U, 1.7GHz</p>
            <p>Card: MX550 2GB</p>
            <p>Pin: 3-cell, 41Wh</p>
            <p>Khối lượng: 1.74 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="319657">
                                        <a href="/laptop/acer-nitro-v-anv15-51-53ne-i5-nhqnasv002" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Acer Gaming Nitro V ANV15 51 53NE i5 13420H/16GB/512GB/4GB RTX2050/144Hz/Win11 (NH.QNASV.002)" data-id="319657" data-price="21490000.0" data-brand="Acer" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">
                    <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class="item-img item-img_44">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/44/319657/acer-nitro-v-anv15-51-53ne-i5-nhqnasv002-thumb-600x600.jpg" alt="Acer Gaming Nitro V ANV15 51 53NE i5 13420H (NH.QNASV.002)">
                    <img src="https://cdn.tgdd.vn/ValueIcons/label-1nam-3s1.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>
<p class="result-label temp3"><img width="20" height="20" class="lazyload" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
        <h3 title="Laptop Acer Gaming Nitro V ANV15 51 53NE i5 13420H/16GB/512GB/4GB RTX2050/144Hz/Win11 (NH.QNASV.002)">
            Acer Gaming Nitro V ANV15 51 53NE i5 13420H (NH.QNASV.002)
        </h3>
            <div class="item-compare">
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class="box-p">
                    <p class="price-old black">23.990.000₫</p>
                        <span class="percent">-10%</span>
                </div>
                <strong class="price">21.490.000₫</strong>



            <p class="item-gift">Quà <b>900.000₫</b></p>
    </a>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 15.6", Full HD, 144Hz</p>
            <p>CPU: i5, 13420H, 2.1GHz</p>
            <p>Card: RTX 2050 4GB</p>
            <p>Pin: 4-cell, 57Wh</p>
            <p>Khối lượng: 2.1 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="320181">
                                        <a href="/laptop/dell-precision-14-3480-i7-71024682" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Dell Precision 14 3480 i7 12800H/32GB/1TB/4GB RTXA500/Win11 Pro (71024682)" data-id="320181" data-price="50790000.0" data-brand="Dell" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">

        </div>

            <div class="item-img item-img_44">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/44/320181/dell-precision-14-3480-i7-71024682-thumb-600x600.jpg" alt="Dell Precision 14 3480 i7 12800H (71024682)">
                    <img src="https://cdn.tgdd.vn/ValueIcons/i7-gen-12-13.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>

        <h3 title="Laptop Dell Precision 14 3480 i7 12800H/32GB/1TB/4GB RTXA500/Win11 Pro (71024682)">
            Dell Precision 14 3480 i7 12800H (71024682)
        </h3>
            <div class="item-compare">
                        <span>RAM 32 GB</span>
                        <span>SSD 1 TB</span>
            </div>
            <p class="item-txt-online">Chỉ bán online</p>
                <div class="box-p">
                    <p class="price-old black">52.290.000₫</p>
                </div>
                <strong class="price">50.790.000₫</strong>



            <p class="item-gift">Quà <b>2.190.000₫</b></p>
    </a>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 14", Full HD</p>
            <p>CPU: i7, 12800H, 2.4GHz</p>
            <p>Card: RTX A500 4GB</p>
            <p>Pin: 3-cell, 54 Wh</p>
            <p>Khối lượng: 1.39 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                        </div>
                    </div>
                    <a href="/laptop?g=do-hoa-ky-thuat" class="block-btn">
                        <span>Xem tất cả Laptop Đồ họa, Kỹ thuật</span>
                    </a>
                    <input type="hidden" class="hdf hide" value="
                                <div class=&quot;item&quot; data-id=&quot;311117&quot;>
                                        <a href=&quot;/laptop/asus-vivobook-14x-oled-k3405vc-i5-km006w&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop Asus Vivobook 14X OLED K3405VC i5 13500H/16GB/512GB/4GB RTX3050/Win11 (KM006W)&quot; data-id=&quot;311117&quot; data-price=&quot;24990000.0&quot; data-brand=&quot;Asus&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>
                    <span class=&quot;lb-tragop&quot;>Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/311117/asus-vivobook-14x-oled-k3405vc-i5-km006w-glr-thumb-600x600.jpg&quot; alt=&quot;Asus Vivobook 14X OLED K3405VC i5 13500H (KM006W)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/2023/10/campaign/label-tgdd-200x200.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>
<p class=&quot;result-label temp3&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giá rẻ quá&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png&quot;><span>Giá rẻ quá</span></p>
        <h3 title=&quot;Laptop Asus Vivobook 14X OLED K3405VC i5 13500H/16GB/512GB/4GB RTX3050/Win11 (KM006W)&quot;>
            Asus Vivobook 14X OLED K3405VC i5 13500H (KM006W)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>29.490.000₫</p>
                        <span class=&quot;percent&quot;>-15%</span>
                </div>
                <strong class=&quot;price&quot;>24.990.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>100.000₫</b></p>
    </a>
        <div class=&quot;item-rating&quot;>
            <p>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                                <i class=&quot;icon-star-dark&quot;></i>
            </p>
            <p class=&quot;item-rating-total&quot;>4</p>
        </div>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 14&quot;, 2K, 90Hz</p>
            <p>CPU: i5, 13500H, 2.6GHz</p>
            <p>Card: RTX 3050 4GB</p>
            <p>Pin: 3-cell, 63Wh</p>
            <p>Khối lượng: 1.4 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;308526&quot;>
                                        <a href=&quot;/laptop/hp-pavilion-15-eg2062tx-i5-7c0w7pa?utm_flashsale=1&quot; data-s=&quot;OnlineSavingCMS&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop HP Pavilion 15 eg2062TX i5 1235U/8GB/512GB/2GB MX550/Win11 (7C0W7PA)&quot; data-id=&quot;308526&quot; data-price=&quot;17290000.0&quot; data-brand=&quot;HP&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>
                    <span class=&quot;lb-tragop&quot;>Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/308526/hp-pavilion-15-eg2062tx-i5-7c0w7pa-thumb-600x600.jpg&quot; alt=&quot;HP Pavilion 15 eg2062TX i5 1235U (7C0W7PA)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/ValueIcons/i5-gen-12-13.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>
<p class=&quot;result-label temp3&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giá rẻ quá&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png&quot;><span>Giá rẻ quá</span></p>
        <h3 title=&quot;Laptop HP Pavilion 15 eg2062TX i5 1235U/8GB/512GB/2GB MX550/Win11 (7C0W7PA)&quot;>
            HP Pavilion 15 eg2062TX i5 1235U (7C0W7PA)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 8 GB</span>
                        <span>SSD 512 GB</span>
            </div>
            <p class=&quot;item-txt-online&quot;><i></i>Online giá rẻ quá</p>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>20.590.000₫</p>
                        <span class=&quot;percent&quot;>-16%</span>
                </div>
                <strong class=&quot;price&quot;>17.290.000₫</strong>



    </a>
        <div class=&quot;item-rating&quot;>
            <p>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                                <i class=&quot;icon-star-dark&quot;></i>
            </p>
            <p class=&quot;item-rating-total&quot;>11</p>
        </div>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 15.6&quot;, Full HD</p>
            <p>CPU: i5, 1235U, 1.3GHz</p>
            <p>Card: MX550 2GB</p>
            <p>Pin: 3 cell, 41.04 Wh</p>
            <p>Khối lượng: 1.74 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;313332&quot;>
                                        <a href=&quot;/laptop/acer-nitro-5-an515-58-769j-i7-nhqfhsv003&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop Acer Gaming Nitro 5 AN515 58 769J i7 12700H/8GB/512GB/4GB RTX3050/144Hz/Win11 (NH.QFHSV.003)&quot; data-id=&quot;313332&quot; data-price=&quot;23490000.0&quot; data-brand=&quot;Acer&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>
                    <span class=&quot;lb-tragop&quot;>Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/313332/acer-nitro-5-an515-58-769j-i7-nhqfhsv003-thumb-600x600.jpg&quot; alt=&quot;Acer Gaming Nitro 5 AN515 58 769J i7 12700H (NH.QFHSV.003)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/ValueIcons/label-rtx-30-final.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>
<p class=&quot;result-label temp3&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giá rẻ quá&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png&quot;><span>Giá rẻ quá</span></p>
        <h3 title=&quot;Laptop Acer Gaming Nitro 5 AN515 58 769J i7 12700H/8GB/512GB/4GB RTX3050/144Hz/Win11 (NH.QFHSV.003)&quot;>
            Acer Gaming Nitro 5 AN515 58 769J i7 12700H (NH.QFHSV.003)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 8 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>31.790.000₫</p>
                        <span class=&quot;percent&quot;>-26%</span>
                </div>
                <strong class=&quot;price&quot;>23.490.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>900.000₫</b></p>
    </a>
        <div class=&quot;item-rating&quot;>
            <p>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                                <i class=&quot;icon-star-dark&quot;></i>
            </p>
            <p class=&quot;item-rating-total&quot;>6</p>
        </div>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 15.6&quot;, Full HD, 144Hz</p>
            <p>CPU: i7, 12700H, 2.30 GHz</p>
            <p>Card: RTX 3050 4GB</p>
            <p>Pin: 4-cell, 57.5Wh</p>
            <p>Khối lượng: 2.5 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;313639&quot;>
                                        <a href=&quot;/laptop/lenovo-legion-5-16irh8-i5-82ya00bsvn&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop Lenovo Gaming Legion 5 16IRH8 i5 13500H/16GB/512GB/6GB RTX4050/165Hz/Win11 (82YA00BSVN)&quot; data-id=&quot;313639&quot; data-price=&quot;35990000.0&quot; data-brand=&quot;Lenovo&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>
                    <span class=&quot;lb-tragop&quot;>Trả góp 0%</span>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/313639/lenovo-legion-5-16irh8-i5-82ya00bsvn-280823-025858-600x600.jpg&quot; alt=&quot;Lenovo Gaming Legion 5 16IRH8 i5 13500H (82YA00BSVN)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/ValueIcons/label-rtx-40-final.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>

        <h3 title=&quot;Laptop Lenovo Gaming Legion 5 16IRH8 i5 13500H/16GB/512GB/6GB RTX4050/165Hz/Win11 (82YA00BSVN)&quot;>
            Lenovo Gaming Legion 5 16IRH8 i5 13500H (82YA00BSVN)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>36.990.000₫</p>
                </div>
                <strong class=&quot;price&quot;>35.990.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>900.000₫</b></p>
    </a>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 16&quot;, 2K, 165Hz</p>
            <p>CPU: i5, 13500H, 2.6GHz</p>
            <p>Card: RTX 4050 6GB</p>
            <p>Pin: 80 Wh</p>
            <p>Khối lượng: 2.4 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;314841&quot;>
                                        <a href=&quot;/laptop/dell-inspiron-15-3530-i7-n3530i716w1&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop Dell Inspiron 15 3530 i7 1355U/16GB/512GB/2GB MX550/OfficeHS/Win11 (N3530I716W1)&quot; data-id=&quot;314841&quot; data-price=&quot;25290000.0&quot; data-brand=&quot;Dell&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/314841/dell-inspiron-15-3530-i7-n3530i716w1-thumb-2-600x600.jpg&quot; alt=&quot;Dell Inspiron 15 3530 i7 1355U (N3530I716W1)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/ValueIcons/label-office-ban-quyen.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>

        <h3 title=&quot;Laptop Dell Inspiron 15 3530 i7 1355U/16GB/512GB/2GB MX550/OfficeHS/Win11 (N3530I716W1)&quot;>
            Dell Inspiron 15 3530 i7 1355U (N3530I716W1)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <strong class=&quot;price&quot;>25.290.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>100.000₫</b></p>
    </a>
        <div class=&quot;item-rating&quot;>
            <p>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                                <i class=&quot;icon-star-dark&quot;></i>
            </p>
            <p class=&quot;item-rating-total&quot;>7</p>
        </div>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 15.6&quot;, Full HD, 120Hz</p>
            <p>CPU: i7, 1355U, 1.7GHz</p>
            <p>Card: MX550 2GB</p>
            <p>Pin: 4-cell, 54Wh</p>
            <p>Khối lượng: 1.65 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;322527&quot;>
                                        <a href=&quot;/laptop/msi-prestige-16-studio-a13ve-i7-1214vn&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop MSI Prestige 16 Studio A13VE i7 13700H/16GB/1TB/6GB RTX4050/165Hz/Túi/Win11 (214VN)&quot; data-id=&quot;322527&quot; data-price=&quot;45990000.0&quot; data-brand=&quot;MSI&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/322527/msi-prestige-16-studio-a13ve-i7-1214vn-thumb-600x600.jpg&quot; alt=&quot;MSI Prestige 16 Studio A13VE i7 13700H (214VN)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/ValueIcons/label-rtx-40-final.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>

        <h3 title=&quot;Laptop MSI Prestige 16 Studio A13VE i7 13700H/16GB/1TB/6GB RTX4050/165Hz/Túi/Win11 (214VN)&quot;>
            MSI Prestige 16 Studio A13VE i7 13700H (214VN)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 16 GB</span>
                        <span>SSD 1 TB</span>
            </div>
            <p class=&quot;item-txt-online&quot;>Chỉ bán online</p>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>47.990.000₫</p>
                </div>
                <strong class=&quot;price&quot;>45.990.000₫</strong>



    </a>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 16&quot;, 2K, 165Hz</p>
            <p>CPU: i7, 13700H, 2.4GHz</p>
            <p>Card: RTX 4050 6GB</p>
            <p>Pin: 4-cell, 82 Wh</p>
            <p>Khối lượng: 2.1 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;310803&quot;>
                                        <a href=&quot;/laptop/asus-tuf-gaming-f15-fx507zc4-i5-hn074w?utm_flashsale=1&quot; data-s=&quot;OnlineSavingCMS&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop Asus TUF Gaming F15 FX507ZC4 i5 12500H/8GB/512GB/4GB RTX3050/144Hz/Win11 (HN074W)&quot; data-id=&quot;310803&quot; data-price=&quot;18990000.0&quot; data-brand=&quot;Asus&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>
                    <span class=&quot;lb-tragop&quot;>Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/310803/asus-tuf-gaming-f15-fx507zc4-i5-hn074w-thumb-600x600.jpg&quot; alt=&quot;Asus TUF Gaming F15 FX507ZC4 i5 12500H (HN074W)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/ValueIcons/label-rtx-30-final.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>
<p class=&quot;result-label temp3&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giá rẻ quá&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png&quot;><span>Giá rẻ quá</span></p>
        <h3 title=&quot;Laptop Asus TUF Gaming F15 FX507ZC4 i5 12500H/8GB/512GB/4GB RTX3050/144Hz/Win11 (HN074W)&quot;>
            Asus TUF Gaming F15 FX507ZC4 i5 12500H (HN074W)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 8 GB</span>
                        <span>SSD 512 GB</span>
            </div>
            <p class=&quot;item-txt-online&quot;><i></i>Online giá rẻ quá</p>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>23.990.000₫</p>
                        <span class=&quot;percent&quot;>-20%</span>
                </div>
                <strong class=&quot;price&quot;>18.990.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>900.000₫</b></p>
    </a>
        <div class=&quot;item-rating&quot;>
            <p>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                                <i class=&quot;icon-star-dark&quot;></i>
            </p>
            <p class=&quot;item-rating-total&quot;>17</p>
        </div>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 15.6&quot;, Full HD, 144Hz</p>
            <p>CPU: i5, 12500H, 2.5GHz</p>
            <p>Card: RTX 3050 4GB</p>
            <p>Pin: 4-cell, 56Wh</p>
            <p>Khối lượng: 2.2 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;285967&quot;>
                                        <a href=&quot;/laptop/hp-pavilion-15-eg2034tx-i7-6k780pa?utm_flashsale=1&quot; data-s=&quot;OnlineSavingCMS&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop HP Pavilion 15 eg2034TX i7 1255U/8GB/512GB/2GB MX550/Win11 (6K780PA)&quot; data-id=&quot;285967&quot; data-price=&quot;20190000.0&quot; data-brand=&quot;HP&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>
                    <span class=&quot;lb-tragop&quot;>Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/285967/hp-pavilion-15-eg2034tx-i7-6k780pa-180822-030835-600x600.jpg&quot; alt=&quot;HP Pavilion 15 eg2034TX i7 1255U (6K780PA)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/ValueIcons/i7-gen-12-13.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>
<p class=&quot;result-label temp3&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giá rẻ quá&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png&quot;><span>Giá rẻ quá</span></p>
        <h3 title=&quot;Laptop HP Pavilion 15 eg2034TX i7 1255U/8GB/512GB/2GB MX550/Win11 (6K780PA)&quot;>
            HP Pavilion 15 eg2034TX i7 1255U (6K780PA)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 8 GB</span>
                        <span>SSD 512 GB</span>
            </div>
            <p class=&quot;item-txt-online&quot;><i></i>Online giá rẻ quá</p>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>24.590.000₫</p>
                        <span class=&quot;percent&quot;>-17%</span>
                </div>
                <strong class=&quot;price&quot;>20.190.000₫</strong>



    </a>
        <div class=&quot;item-rating&quot;>
            <p>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                                <i class=&quot;icon-star&quot;></i>
                            <i class=&quot;icon-star-dark&quot;></i>
            </p>
            <p class=&quot;item-rating-total&quot;>11</p>
        </div>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 15.6&quot;, Full HD</p>
            <p>CPU: i7, 1255U, 1.7GHz</p>
            <p>Card: MX550 2GB</p>
            <p>Pin: 3-cell, 41Wh</p>
            <p>Khối lượng: 1.74 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;319657&quot;>
                                        <a href=&quot;/laptop/acer-nitro-v-anv15-51-53ne-i5-nhqnasv002&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop Acer Gaming Nitro V ANV15 51 53NE i5 13420H/16GB/512GB/4GB RTX2050/144Hz/Win11 (NH.QNASV.002)&quot; data-id=&quot;319657&quot; data-price=&quot;21490000.0&quot; data-brand=&quot;Acer&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>
                    <span class=&quot;lb-tragop&quot;>Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/319657/acer-nitro-v-anv15-51-53ne-i5-nhqnasv002-thumb-600x600.jpg&quot; alt=&quot;Acer Gaming Nitro V ANV15 51 53NE i5 13420H (NH.QNASV.002)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/ValueIcons/label-1nam-3s1.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>
<p class=&quot;result-label temp3&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giá rẻ quá&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png&quot;><span>Giá rẻ quá</span></p>
        <h3 title=&quot;Laptop Acer Gaming Nitro V ANV15 51 53NE i5 13420H/16GB/512GB/4GB RTX2050/144Hz/Win11 (NH.QNASV.002)&quot;>
            Acer Gaming Nitro V ANV15 51 53NE i5 13420H (NH.QNASV.002)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>23.990.000₫</p>
                        <span class=&quot;percent&quot;>-10%</span>
                </div>
                <strong class=&quot;price&quot;>21.490.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>900.000₫</b></p>
    </a>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 15.6&quot;, Full HD, 144Hz</p>
            <p>CPU: i5, 13420H, 2.1GHz</p>
            <p>Card: RTX 2050 4GB</p>
            <p>Pin: 4-cell, 57Wh</p>
            <p>Khối lượng: 2.1 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;320181&quot;>
                                        <a href=&quot;/laptop/dell-precision-14-3480-i7-71024682&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop Dell Precision 14 3480 i7 12800H/32GB/1TB/4GB RTXA500/Win11 Pro (71024682)&quot; data-id=&quot;320181&quot; data-price=&quot;50790000.0&quot; data-brand=&quot;Dell&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/320181/dell-precision-14-3480-i7-71024682-thumb-600x600.jpg&quot; alt=&quot;Dell Precision 14 3480 i7 12800H (71024682)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/ValueIcons/i7-gen-12-13.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>

        <h3 title=&quot;Laptop Dell Precision 14 3480 i7 12800H/32GB/1TB/4GB RTXA500/Win11 Pro (71024682)&quot;>
            Dell Precision 14 3480 i7 12800H (71024682)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 32 GB</span>
                        <span>SSD 1 TB</span>
            </div>
            <p class=&quot;item-txt-online&quot;>Chỉ bán online</p>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>52.290.000₫</p>
                </div>
                <strong class=&quot;price&quot;>50.790.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>2.190.000₫</b></p>
    </a>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 14&quot;, Full HD</p>
            <p>CPU: i7, 12800H, 2.4GHz</p>
            <p>Card: RTX A500 4GB</p>
            <p>Pin: 3-cell, 54 Wh</p>
            <p>Khối lượng: 1.39 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                        ">
                </section>
            </div>
            <div class="block" id="mong-nhe">
                <section>
                    <div class="block__banner">
                        
    <div class="">
            <div class="item_banner" data-href="https://www.thegioididong.com/laptop?g=mong-nhe-thoi-trang" style="background-color:#313032">
                <a data-cate="44" data-place="1698" rel="nofollow" href="javascript:;" onclick="jQuery.ajax({ url: '/bannertracking?bid=45522&amp;r='+ (new Date).getTime(), async: true, cache: false });"><img style="cursor:pointer" src="https://cdn.tgdd.vn/2023/07/banner/banner-mong-nhe-desk-min-1200x200.png" alt="Laptop mỏng nhẹ" width="1200" height="200"></a>
            </div>
    </div>

                            <div class="question" onclick="CloseCriteria(this)">
                                <span class="text-hover">Laptop Mỏng nhẹ là gì?</span>
                                <img class="banner-icon" src="//cdn.tgdd.vn/mwgcart/mwgcore/ContentMwg/images/laptop/icon-question.v202307010120.png">
                            </div>
                            <a class="_criteria" onclick="CloseCriteria(this)" href="javascript:;">
                                <div data-htmlid="3605">
                                    <span></span>
                                    <div>
                                        <p><strong>LAPTOP MỎNG NHẸ</strong><br>Với thiết kế mỏng và nhẹ, laptop mang đến ánh nhìn thu hút và tiện lợi khi sử dụng bởi sự nhỏ gọn của máy. Hiệu năng ổn định, đáp ứng đa tác vụ, phù hợp đa dạng nhu cầu.<br><br>Thông số tối thiểu:<br><img src="https://cdn.tgdd.vn/2021/09/content/icon-nang-new-42x42.png" data-mce-src="https://cdn.tgdd.vn/2021/09/content/icon-nang-new-42x42.png">&nbsp;Trọng lượng: Dưới 1.3 kg<br><img src="https://cdn.tgdd.vn/2021/09/content/icon-do-day-new-42x42.png" data-mce-src="https://cdn.tgdd.vn/2021/09/content/icon-do-day-new-42x42.png">&nbsp;Độ dày: Dưới 18 mm<br><img src="https://cdn.tgdd.vn/2021/09/content/icon-ram-new-42x42-1.png" data-mce-src="https://cdn.tgdd.vn/2021/09/content/icon-ram-new-42x42-1.png">&nbsp;RAM: 4 GB<br><img src="https://cdn.tgdd.vn/2021/09/content/icon-o-cung-new-42x42-7.png" data-mce-src="https://cdn.tgdd.vn/2021/09/content/icon-o-cung-new-42x42-7.png">&nbsp;Ổ cứng: SSD 256 GB<br><img src="https://cdn.tgdd.vn/2021/09/content/icon-chat-lieu-42x42-8.png" data-mce-src="https://cdn.tgdd.vn/2021/09/content/icon-chat-lieu-42x42-8.png">&nbsp;Chất liệu vỏ: Kim loại</p>
                                    </div>
                                </div>
                            </a>
                    </div>
                    


                    <div class="box-main-listproduct">
                        <div class="listproduct listproduct-block" data-url="/laptop?g=mong-nhe-thoi-trang">
                                <div class="item" data-id="291155">
                                        <a href="/laptop/hp-elitebook-630-g9-i5-6m143pa" data-s="TwoPriceDetail" data-site="1" data-pro="3" data-cache="False" data-name="Laptop HP Elitebook 630 G9 i5 1235U/8GB/512GB/Win11 (6M143PA)" data-id="291155" data-price="18190000.0" data-brand="HP" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">
                    <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class="item-img item-img_44">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/44/291155/hp-elitebook-630-g9-i5-6m143pa-thumb-lap-600x600.jpg" alt="HP Elitebook 630 G9 i5 1235U (6M143PA)">
                    <img src="https://cdn.tgdd.vn/ValueIcons/i5-gen-12-13.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>
<p class="result-label temp3"><img width="20" height="20" class="lazyload" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
        <h3 title="Laptop HP Elitebook 630 G9 i5 1235U/8GB/512GB/Win11 (6M143PA)">
            HP Elitebook 630 G9 i5 1235U (6M143PA)
        </h3>
            <div class="item-compare">
                        <span>RAM 8 GB</span>
                        <span>SSD 512 GB</span>
            </div>
            <p class="item-txt-online"><i></i>Online giá rẻ quá</p>
                <div class="box-p">
                    <p class="price-old black">22.190.000₫</p>
                        <span class="percent">-18%</span>
                </div>
                <strong class="price">18.190.000₫</strong>



            <p class="item-gift">Quà <b>100.000₫</b></p>
    </a>
        <div class="item-rating">
            <p>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                                <i class="icon-star-dark"></i>
            </p>
            <p class="item-rating-total">24</p>
        </div>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 13.3", Full HD</p>
            <p>CPU: i5, 1235U, 1.3GHz</p>
            <p>Card: Intel UHD</p>
            <p>Pin: 3-cell, 42Wh</p>
            <p>Khối lượng: 1.28 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="320431">
                                        <a href="/laptop/asus-zenbook-14-oled-ux3405ma-ultra-5-pp151w" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Asus Zenbook 14 OLED UX3405MA Ultra 5 125H/16GB/512GB/Túi/Win11 (PP151W)" data-id="320431" data-price="27490000.0" data-brand="Asus" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">
                    <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class="item-img item-img_44">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/44/320431/asus-zenbook-14-oled-ux3405ma-ultra-5-pp151w-thumb-1-600x600.jpg" alt="Asus Zenbook 14 OLED UX3405MA Ultra 5 125H (PP151W)">
                    <img src="https://cdn.tgdd.vn/ValueIcons/label-asus-oled.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>
<p class="result-label temp2"><img width="20" height="20" class="lazyload" alt="Intel Core Ultra" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2024/02/content/label-intel-50x50-2.png"><span>Intel Core Ultra</span></p>
        <h3 title="Laptop Asus Zenbook 14 OLED UX3405MA Ultra 5 125H/16GB/512GB/Túi/Win11 (PP151W)">
            Asus Zenbook 14 OLED UX3405MA Ultra 5 125H (PP151W)
        </h3>
            <div class="item-compare">
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class="box-p">
                    <p class="price-old black">28.990.000₫</p>
                        <span class="percent">-5%</span>
                </div>
                <strong class="price">27.490.000₫</strong>



            <p class="item-gift">Quà <b>100.000₫</b></p>
    </a>
        <div class="item-rating">
            <p>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                                <i class="icon-star-dark"></i>
            </p>
            <p class="item-rating-total">3</p>
        </div>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 14", 2K, 120Hz</p>
            <p>CPU: Ultra 5, 125H, 1.2GHz</p>
            <p>Card: Intel Arc Graphics</p>
            <p>Pin: 4-cell Li-ion, 75 Wh</p>
            <p>Khối lượng: 1.2 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="269313">
                                        <a href="/laptop/acer-swift-3-sf314-511-55qe-i5-nxabnsv003" data-s="TwoPriceDetail" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Acer Swift 3 SF314 511 55QE i5 1135G7/16GB/512GB/Win11 (NX.ABNSV.003)" data-id="269313" data-price="13990000.0" data-brand="Acer" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">
                    <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class="item-img item-img_44">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/44/269313/acer-swift-3-sf314-511-55qe-i5-nxabnsv003-120122-022600-600x600.jpg" alt="Acer Swift 3 SF314 511 55QE i5 1135G7 (NX.ABNSV.003)">
                    <img src="https://cdn.tgdd.vn/ValueIcons/label-1nam-3s1.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>
<p class="result-label temp3"><img width="20" height="20" class="lazyload" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
        <h3 title="Laptop Acer Swift 3 SF314 511 55QE i5 1135G7/16GB/512GB/Win11 (NX.ABNSV.003)">
            Acer Swift 3 SF314 511 55QE i5 1135G7 (NX.ABNSV.003)
        </h3>
            <div class="item-compare">
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
            <p class="item-txt-online"><i></i>Online giá rẻ quá</p>
                <div class="box-p">
                    <p class="price-old black">22.990.000₫</p>
                        <span class="percent">-39%</span>
                </div>
                <strong class="price">13.990.000₫</strong>



            <p class="item-gift">Quà <b>100.000₫</b></p>
    </a>
        <div class="item-rating">
            <p>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                                <i class="icon-star-dark"></i>
            </p>
            <p class="item-rating-total">15</p>
        </div>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 14", Full HD</p>
            <p>CPU: i5, 1135G7, 2.4GHz</p>
            <p>Card: Intel Iris Xe</p>
            <p>Pin: 56Wh</p>
            <p>Khối lượng: 1.19 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="305673">
                                        <a href="/laptop/lenovo-ideapad-slim-5-light-14abr8-r5-82xs002kvn" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Lenovo IdeaPad Slim 5 Light 14ABR8 R5 7530U/16GB/512GB/Win11 (82XS002KVN)" data-id="305673" data-price="14990000.0" data-brand="Lenovo" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">
                    <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class="item-img item-img_44">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/44/305673/lenovo-ideapad-slim-5-light-14abr8-r5-82xs002kvn-thumb-600x600.jpg" alt="Lenovo IdeaPad Slim 5 Light 14ABR8 R5 7530U (82XS002KVN)">
                    <img src="https://cdn.tgdd.vn/ValueIcons/bao-hanh-lenovo-3-nam.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>
<p class="result-label temp3"><img width="20" height="20" class="lazyload" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
        <h3 title="Laptop Lenovo IdeaPad Slim 5 Light 14ABR8 R5 7530U/16GB/512GB/Win11 (82XS002KVN)">
            Lenovo IdeaPad Slim 5 Light 14ABR8 R5 7530U (82XS002KVN)
        </h3>
            <div class="item-compare">
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class="box-p">
                    <p class="price-old black">17.990.000₫</p>
                        <span class="percent">-16%</span>
                </div>
                <strong class="price">14.990.000₫</strong>



            <p class="item-gift">Quà <b>100.000₫</b></p>
    </a>
        <div class="item-rating">
            <p>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                                <i class="icon-star-dark"></i>
            </p>
            <p class="item-rating-total">24</p>
        </div>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 14", Full HD</p>
            <p>CPU: Ryzen 5, 7530U, 2GHz</p>
            <p>Card: Radeon</p>
            <p>Pin: 47 Wh</p>
            <p>Khối lượng: 1.17 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="302984">
                                        <a href="/laptop/hp-elitebook-dragonfly-g3-i7-6z980pa" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop HP Elitebook Dragonfly G3 i7 1255U/16GB/1TB SSD/Touch/Win11 Pro (6Z980PA)" data-id="302984" data-price="41890000.0" data-brand="HP" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">
                    <span class="lb-tragop">Trả góp 0%</span>

        </div>

            <div class="item-img item-img_44">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/44/302984/hp-elitebook-dragonfly-g3-i7-6z980pa-070323-114211-600x600.jpg" alt="HP Elitebook Dragonfly G3 i7 1255U (6Z980PA)">
                    <img src="https://cdn.tgdd.vn/ValueIcons/label-baohanh3nam.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>
<p class="result-label temp3"><img width="20" height="20" class="lazyload" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
        <h3 title="Laptop HP Elitebook Dragonfly G3 i7 1255U/16GB/1TB SSD/Touch/Win11 Pro (6Z980PA)">
            HP Elitebook Dragonfly G3 i7 1255U (6Z980PA)
        </h3>
            <div class="item-compare">
                        <span>RAM 16 GB</span>
                        <span>SSD 1 TB</span>
            </div>
                <div class="box-p">
                    <p class="price-old black">52.590.000₫</p>
                        <span class="percent">-20%</span>
                </div>
                <strong class="price">41.890.000₫</strong>



            <p class="item-gift">Quà <b>100.000₫</b></p>
    </a>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 13.5", Full HD, Cảm ứng</p>
            <p>CPU: i7, 1255U, 1.7GHz</p>
            <p>Card: Intel Iris Xe</p>
            <p>Pin: 6-cell Li-ion, 68 Wh</p>
            <p>Khối lượng: 0.99 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="302950">
                                        <a href="/laptop/masstel-e116-n4020" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Masstel E116 N4020/4GB/128GB/Win10 Pro" data-id="302950" data-price="2990000.0" data-brand="Masstel" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">

        </div>

            <div class="item-img item-img_44">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/44/302950/masstel-e116-n4020-thumb-1-600x600.jpg" alt="Masstel E116 N4020">
                    <img src="https://cdn.tgdd.vn/ValueIcons/Label_01-01.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>
<p class="result-label temp4"><img width="20" height="20" class="lazyload" alt="Laptop Giáo Dục" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/03/content/icon1-50x50-1.png"><span>Laptop Giáo Dục</span></p>
        <h3 title="Laptop Masstel E116 N4020/4GB/128GB/Win10 Pro">
            Masstel E116 N4020
        </h3>
            <div class="item-compare">
                        <span>RAM 4 GB</span>
                        <span>eMMC 128 GB</span>
            </div>
                <strong class="price">2.990.000₫</strong>



            <p class="item-gift">Quà <b>100.000₫</b></p>
    </a>
        <div class="item-rating">
            <p>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                                <i class="icon-star-dark"></i>
            </p>
            <p class="item-rating-total">41</p>
        </div>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 11.6", HD</p>
            <p>CPU: Celeron, N4020, 1.1GHz</p>
            <p>Card: Intel UHD 600</p>
            <p>Pin: 2-cell Li-Po, 30.4 Wh</p>
            <p>Khối lượng: 0.92 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="308000">
                                        <a href="/laptop/asus-zenbook-s-13-oled-ux5304va-i7-nq125w" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Asus Zenbook S 13 OLED UX5304VA i7 1355U/16GB/512GB/Túi/Win11 (NQ125W)" data-id="308000" data-price="31990000.0" data-brand="Asus" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">
                    <span class="lb-tragop">Trả góp 0%</span>

        </div>

            <div class="item-img item-img_44">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/44/308000/asus-zenbook-s-13-oled-ux5304va-i7-nq125w-thumb-450x300.jpg" alt="Asus Zenbook S 13 OLED UX5304VA i7 1355U (NQ125W)">
                    <img src="https://cdn.tgdd.vn/ValueIcons/label-asus-oled.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>
<p class="result-label temp3"><img width="20" height="20" class="lazyload" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
        <h3 title="Laptop Asus Zenbook S 13 OLED UX5304VA i7 1355U/16GB/512GB/Túi/Win11 (NQ125W)">
            Asus Zenbook S 13 OLED UX5304VA i7 1355U (NQ125W)
        </h3>
            <div class="item-compare">
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class="box-p">
                    <p class="price-old black">39.990.000₫</p>
                        <span class="percent">-20%</span>
                </div>
                <strong class="price">31.990.000₫</strong>



            <p class="item-gift">Quà <b>100.000₫</b></p>
    </a>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 13.3", 2K</p>
            <p>CPU: i7, 1355U, 1.7GHz</p>
            <p>Card: Intel Iris Xe</p>
            <p>Pin: 4-cell Li-ion, 63 Wh</p>
            <p>Khối lượng: 1 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="315909">
                                        <a href="/laptop/hp-elitebook-630-g10-i7-873f2pa" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop HP Elitebook 630 G10 i7 1355U/16GB/512GB/Win11 (873F2PA)" data-id="315909" data-price="25190000.0" data-brand="HP" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">
                    <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class="item-img item-img_44">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/44/315909/hp-elitebook-630-g10-i7-873f2pa-thumb-600x600.jpg" alt="HP Elitebook 630 G10 i7 1355U (873F2PA)">
                    <img src="https://cdn.tgdd.vn/ValueIcons/i7-gen-12-13.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>

        <h3 title="Laptop HP Elitebook 630 G10 i7 1355U/16GB/512GB/Win11 (873F2PA)">
            HP Elitebook 630 G10 i7 1355U (873F2PA)
        </h3>
            <div class="item-compare">
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class="box-p">
                    <p class="price-old black">27.790.000₫</p>
                        <span class="percent">-9%</span>
                </div>
                <strong class="price">25.190.000₫</strong>



            <p class="item-gift">Quà <b>100.000₫</b></p>
    </a>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 13.3", Full HD</p>
            <p>CPU: i7, 1355U, 1.7GHz</p>
            <p>Card: Intel UHD</p>
            <p>Pin: 3-cell, 42Wh</p>
            <p>Khối lượng: 1.22 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="316169">
                                        <a href="/laptop/asus-expertbook-b9-oled-b9403cva-i7-km0157x" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Asus ExpertBook B9 OLED B9403CVA i7 1355U/16GB/1TB/Cáp/Túi/Win11 Pro (KM0157X)" data-id="316169" data-price="39990000.0" data-brand="Asus" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">
                    <span class="lb-tragop">Trả góp 0%</span>

        </div>

            <div class="item-img item-img_44">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/44/316169/asus-expertbook-b9-oled-b9403cva-i7-km0157x-thumb-600x600.jpg" alt="Asus ExpertBook B9 OLED B9403CVA i7 1355U (KM0157X)">
                    <img src="https://cdn.tgdd.vn/ValueIcons/label-asus-oled.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>
<p class="result-label temp3"><img width="20" height="20" class="lazyload" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
        <h3 title="Laptop Asus ExpertBook B9 OLED B9403CVA i7 1355U/16GB/1TB/Cáp/Túi/Win11 Pro (KM0157X)">
            Asus ExpertBook B9 OLED B9403CVA i7 1355U (KM0157X)
        </h3>
            <div class="item-compare">
                        <span>RAM 16 GB</span>
                        <span>SSD 1 TB</span>
            </div>
                <div class="box-p">
                    <p class="price-old black">49.990.000₫</p>
                        <span class="percent">-20%</span>
                </div>
                <strong class="price">39.990.000₫</strong>



            <p class="item-gift">Quà <b>100.000₫</b></p>
    </a>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 14", 2K, 90Hz</p>
            <p>CPU: i7, 1355U, 1.7GHz</p>
            <p>Card: Intel Iris Xe</p>
            <p>Pin: 3-cell, 63Wh</p>
            <p>Khối lượng: 0.99 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="305456">
                                        <a href="/laptop/surface-pro-9-i5" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Surface Pro 9 i5 1235U/8GB/256GB/Touch/120Hz/Win11" data-id="305456" data-price="27990000.0" data-brand="Surface" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">

        </div>

            <div class="item-img item-img_44">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/44/305456/surface-pro-9-i5-thumb-cam-ung-600x600.jpg" alt="Surface Pro 9 i5 1235U">
                    <img src="https://cdn.tgdd.vn/ValueIcons/label-intel-evo-i5.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>

        <h3 title="Laptop Surface Pro 9 i5 1235U/8GB/256GB/Touch/120Hz/Win11">
            Surface Pro 9 i5 1235U
        </h3>
            <div class="item-compare">
                        <span>RAM 8 GB</span>
                        <span>SSD 256 GB</span>
            </div>
                <div class="box-p">
                    <p class="price-old black">29.990.000₫</p>
                        <span class="percent">-6%</span>
                </div>
                <strong class="price">27.990.000₫</strong>



    </a>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 13", 2K, 120Hz</p>
            <p>CPU: i5, 1235U, 1.3GHz</p>
            <p>Card: Intel Iris Xe</p>
            <p>Pin: Li-ion, 47.7 Wh</p>
            <p>Khối lượng: 0.879 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                        </div>
                    </div>
                    <a href="/laptop?g=mong-nhe-thoi-trang" class="block-btn">
                        <span>Xem tất cả Laptop Mỏng nhẹ</span>
                    </a>
                    <input type="hidden" class="hdf hide" value="
                                <div class=&quot;item&quot; data-id=&quot;291155&quot;>
                                        <a href=&quot;/laptop/hp-elitebook-630-g9-i5-6m143pa&quot; data-s=&quot;TwoPriceDetail&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop HP Elitebook 630 G9 i5 1235U/8GB/512GB/Win11 (6M143PA)&quot; data-id=&quot;291155&quot; data-price=&quot;18190000.0&quot; data-brand=&quot;HP&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>
                    <span class=&quot;lb-tragop&quot;>Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/291155/hp-elitebook-630-g9-i5-6m143pa-thumb-lap-600x600.jpg&quot; alt=&quot;HP Elitebook 630 G9 i5 1235U (6M143PA)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/ValueIcons/i5-gen-12-13.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>
<p class=&quot;result-label temp3&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giá rẻ quá&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png&quot;><span>Giá rẻ quá</span></p>
        <h3 title=&quot;Laptop HP Elitebook 630 G9 i5 1235U/8GB/512GB/Win11 (6M143PA)&quot;>
            HP Elitebook 630 G9 i5 1235U (6M143PA)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 8 GB</span>
                        <span>SSD 512 GB</span>
            </div>
            <p class=&quot;item-txt-online&quot;><i></i>Online giá rẻ quá</p>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>22.190.000₫</p>
                        <span class=&quot;percent&quot;>-18%</span>
                </div>
                <strong class=&quot;price&quot;>18.190.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>100.000₫</b></p>
    </a>
        <div class=&quot;item-rating&quot;>
            <p>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                                <i class=&quot;icon-star-dark&quot;></i>
            </p>
            <p class=&quot;item-rating-total&quot;>24</p>
        </div>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 13.3&quot;, Full HD</p>
            <p>CPU: i5, 1235U, 1.3GHz</p>
            <p>Card: Intel UHD</p>
            <p>Pin: 3-cell, 42Wh</p>
            <p>Khối lượng: 1.28 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;320431&quot;>
                                        <a href=&quot;/laptop/asus-zenbook-14-oled-ux3405ma-ultra-5-pp151w&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop Asus Zenbook 14 OLED UX3405MA Ultra 5 125H/16GB/512GB/Túi/Win11 (PP151W)&quot; data-id=&quot;320431&quot; data-price=&quot;27490000.0&quot; data-brand=&quot;Asus&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>
                    <span class=&quot;lb-tragop&quot;>Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/320431/asus-zenbook-14-oled-ux3405ma-ultra-5-pp151w-thumb-1-600x600.jpg&quot; alt=&quot;Asus Zenbook 14 OLED UX3405MA Ultra 5 125H (PP151W)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/ValueIcons/label-asus-oled.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>
<p class=&quot;result-label temp2&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Intel Core Ultra&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2024/02/content/label-intel-50x50-2.png&quot;><span>Intel Core Ultra</span></p>
        <h3 title=&quot;Laptop Asus Zenbook 14 OLED UX3405MA Ultra 5 125H/16GB/512GB/Túi/Win11 (PP151W)&quot;>
            Asus Zenbook 14 OLED UX3405MA Ultra 5 125H (PP151W)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>28.990.000₫</p>
                        <span class=&quot;percent&quot;>-5%</span>
                </div>
                <strong class=&quot;price&quot;>27.490.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>100.000₫</b></p>
    </a>
        <div class=&quot;item-rating&quot;>
            <p>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                                <i class=&quot;icon-star-dark&quot;></i>
            </p>
            <p class=&quot;item-rating-total&quot;>3</p>
        </div>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 14&quot;, 2K, 120Hz</p>
            <p>CPU: Ultra 5, 125H, 1.2GHz</p>
            <p>Card: Intel Arc Graphics</p>
            <p>Pin: 4-cell Li-ion, 75 Wh</p>
            <p>Khối lượng: 1.2 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;269313&quot;>
                                        <a href=&quot;/laptop/acer-swift-3-sf314-511-55qe-i5-nxabnsv003&quot; data-s=&quot;TwoPriceDetail&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop Acer Swift 3 SF314 511 55QE i5 1135G7/16GB/512GB/Win11 (NX.ABNSV.003)&quot; data-id=&quot;269313&quot; data-price=&quot;13990000.0&quot; data-brand=&quot;Acer&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>
                    <span class=&quot;lb-tragop&quot;>Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/269313/acer-swift-3-sf314-511-55qe-i5-nxabnsv003-120122-022600-600x600.jpg&quot; alt=&quot;Acer Swift 3 SF314 511 55QE i5 1135G7 (NX.ABNSV.003)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/ValueIcons/label-1nam-3s1.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>
<p class=&quot;result-label temp3&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giá rẻ quá&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png&quot;><span>Giá rẻ quá</span></p>
        <h3 title=&quot;Laptop Acer Swift 3 SF314 511 55QE i5 1135G7/16GB/512GB/Win11 (NX.ABNSV.003)&quot;>
            Acer Swift 3 SF314 511 55QE i5 1135G7 (NX.ABNSV.003)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
            <p class=&quot;item-txt-online&quot;><i></i>Online giá rẻ quá</p>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>22.990.000₫</p>
                        <span class=&quot;percent&quot;>-39%</span>
                </div>
                <strong class=&quot;price&quot;>13.990.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>100.000₫</b></p>
    </a>
        <div class=&quot;item-rating&quot;>
            <p>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                                <i class=&quot;icon-star-dark&quot;></i>
            </p>
            <p class=&quot;item-rating-total&quot;>15</p>
        </div>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 14&quot;, Full HD</p>
            <p>CPU: i5, 1135G7, 2.4GHz</p>
            <p>Card: Intel Iris Xe</p>
            <p>Pin: 56Wh</p>
            <p>Khối lượng: 1.19 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;305673&quot;>
                                        <a href=&quot;/laptop/lenovo-ideapad-slim-5-light-14abr8-r5-82xs002kvn&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop Lenovo IdeaPad Slim 5 Light 14ABR8 R5 7530U/16GB/512GB/Win11 (82XS002KVN)&quot; data-id=&quot;305673&quot; data-price=&quot;14990000.0&quot; data-brand=&quot;Lenovo&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>
                    <span class=&quot;lb-tragop&quot;>Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/305673/lenovo-ideapad-slim-5-light-14abr8-r5-82xs002kvn-thumb-600x600.jpg&quot; alt=&quot;Lenovo IdeaPad Slim 5 Light 14ABR8 R5 7530U (82XS002KVN)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/ValueIcons/bao-hanh-lenovo-3-nam.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>
<p class=&quot;result-label temp3&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giá rẻ quá&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png&quot;><span>Giá rẻ quá</span></p>
        <h3 title=&quot;Laptop Lenovo IdeaPad Slim 5 Light 14ABR8 R5 7530U/16GB/512GB/Win11 (82XS002KVN)&quot;>
            Lenovo IdeaPad Slim 5 Light 14ABR8 R5 7530U (82XS002KVN)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>17.990.000₫</p>
                        <span class=&quot;percent&quot;>-16%</span>
                </div>
                <strong class=&quot;price&quot;>14.990.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>100.000₫</b></p>
    </a>
        <div class=&quot;item-rating&quot;>
            <p>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                                <i class=&quot;icon-star-dark&quot;></i>
            </p>
            <p class=&quot;item-rating-total&quot;>24</p>
        </div>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 14&quot;, Full HD</p>
            <p>CPU: Ryzen 5, 7530U, 2GHz</p>
            <p>Card: Radeon</p>
            <p>Pin: 47 Wh</p>
            <p>Khối lượng: 1.17 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;302984&quot;>
                                        <a href=&quot;/laptop/hp-elitebook-dragonfly-g3-i7-6z980pa&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop HP Elitebook Dragonfly G3 i7 1255U/16GB/1TB SSD/Touch/Win11 Pro (6Z980PA)&quot; data-id=&quot;302984&quot; data-price=&quot;41890000.0&quot; data-brand=&quot;HP&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>
                    <span class=&quot;lb-tragop&quot;>Trả góp 0%</span>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/302984/hp-elitebook-dragonfly-g3-i7-6z980pa-070323-114211-600x600.jpg&quot; alt=&quot;HP Elitebook Dragonfly G3 i7 1255U (6Z980PA)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/ValueIcons/label-baohanh3nam.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>
<p class=&quot;result-label temp3&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giá rẻ quá&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png&quot;><span>Giá rẻ quá</span></p>
        <h3 title=&quot;Laptop HP Elitebook Dragonfly G3 i7 1255U/16GB/1TB SSD/Touch/Win11 Pro (6Z980PA)&quot;>
            HP Elitebook Dragonfly G3 i7 1255U (6Z980PA)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 16 GB</span>
                        <span>SSD 1 TB</span>
            </div>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>52.590.000₫</p>
                        <span class=&quot;percent&quot;>-20%</span>
                </div>
                <strong class=&quot;price&quot;>41.890.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>100.000₫</b></p>
    </a>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 13.5&quot;, Full HD, Cảm ứng</p>
            <p>CPU: i7, 1255U, 1.7GHz</p>
            <p>Card: Intel Iris Xe</p>
            <p>Pin: 6-cell Li-ion, 68 Wh</p>
            <p>Khối lượng: 0.99 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;302950&quot;>
                                        <a href=&quot;/laptop/masstel-e116-n4020&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop Masstel E116 N4020/4GB/128GB/Win10 Pro&quot; data-id=&quot;302950&quot; data-price=&quot;2990000.0&quot; data-brand=&quot;Masstel&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/302950/masstel-e116-n4020-thumb-1-600x600.jpg&quot; alt=&quot;Masstel E116 N4020&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/ValueIcons/Label_01-01.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>
<p class=&quot;result-label temp4&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Laptop Giáo Dục&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/03/content/icon1-50x50-1.png&quot;><span>Laptop Giáo Dục</span></p>
        <h3 title=&quot;Laptop Masstel E116 N4020/4GB/128GB/Win10 Pro&quot;>
            Masstel E116 N4020
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 4 GB</span>
                        <span>eMMC 128 GB</span>
            </div>
                <strong class=&quot;price&quot;>2.990.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>100.000₫</b></p>
    </a>
        <div class=&quot;item-rating&quot;>
            <p>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                                <i class=&quot;icon-star-dark&quot;></i>
            </p>
            <p class=&quot;item-rating-total&quot;>41</p>
        </div>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 11.6&quot;, HD</p>
            <p>CPU: Celeron, N4020, 1.1GHz</p>
            <p>Card: Intel UHD 600</p>
            <p>Pin: 2-cell Li-Po, 30.4 Wh</p>
            <p>Khối lượng: 0.92 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;308000&quot;>
                                        <a href=&quot;/laptop/asus-zenbook-s-13-oled-ux5304va-i7-nq125w&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop Asus Zenbook S 13 OLED UX5304VA i7 1355U/16GB/512GB/Túi/Win11 (NQ125W)&quot; data-id=&quot;308000&quot; data-price=&quot;31990000.0&quot; data-brand=&quot;Asus&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>
                    <span class=&quot;lb-tragop&quot;>Trả góp 0%</span>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/308000/asus-zenbook-s-13-oled-ux5304va-i7-nq125w-thumb-450x300.jpg&quot; alt=&quot;Asus Zenbook S 13 OLED UX5304VA i7 1355U (NQ125W)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/ValueIcons/label-asus-oled.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>
<p class=&quot;result-label temp3&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giá rẻ quá&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png&quot;><span>Giá rẻ quá</span></p>
        <h3 title=&quot;Laptop Asus Zenbook S 13 OLED UX5304VA i7 1355U/16GB/512GB/Túi/Win11 (NQ125W)&quot;>
            Asus Zenbook S 13 OLED UX5304VA i7 1355U (NQ125W)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>39.990.000₫</p>
                        <span class=&quot;percent&quot;>-20%</span>
                </div>
                <strong class=&quot;price&quot;>31.990.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>100.000₫</b></p>
    </a>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 13.3&quot;, 2K</p>
            <p>CPU: i7, 1355U, 1.7GHz</p>
            <p>Card: Intel Iris Xe</p>
            <p>Pin: 4-cell Li-ion, 63 Wh</p>
            <p>Khối lượng: 1 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;315909&quot;>
                                        <a href=&quot;/laptop/hp-elitebook-630-g10-i7-873f2pa&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop HP Elitebook 630 G10 i7 1355U/16GB/512GB/Win11 (873F2PA)&quot; data-id=&quot;315909&quot; data-price=&quot;25190000.0&quot; data-brand=&quot;HP&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>
                    <span class=&quot;lb-tragop&quot;>Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/315909/hp-elitebook-630-g10-i7-873f2pa-thumb-600x600.jpg&quot; alt=&quot;HP Elitebook 630 G10 i7 1355U (873F2PA)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/ValueIcons/i7-gen-12-13.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>

        <h3 title=&quot;Laptop HP Elitebook 630 G10 i7 1355U/16GB/512GB/Win11 (873F2PA)&quot;>
            HP Elitebook 630 G10 i7 1355U (873F2PA)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>27.790.000₫</p>
                        <span class=&quot;percent&quot;>-9%</span>
                </div>
                <strong class=&quot;price&quot;>25.190.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>100.000₫</b></p>
    </a>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 13.3&quot;, Full HD</p>
            <p>CPU: i7, 1355U, 1.7GHz</p>
            <p>Card: Intel UHD</p>
            <p>Pin: 3-cell, 42Wh</p>
            <p>Khối lượng: 1.22 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;316169&quot;>
                                        <a href=&quot;/laptop/asus-expertbook-b9-oled-b9403cva-i7-km0157x&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop Asus ExpertBook B9 OLED B9403CVA i7 1355U/16GB/1TB/Cáp/Túi/Win11 Pro (KM0157X)&quot; data-id=&quot;316169&quot; data-price=&quot;39990000.0&quot; data-brand=&quot;Asus&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>
                    <span class=&quot;lb-tragop&quot;>Trả góp 0%</span>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/316169/asus-expertbook-b9-oled-b9403cva-i7-km0157x-thumb-600x600.jpg&quot; alt=&quot;Asus ExpertBook B9 OLED B9403CVA i7 1355U (KM0157X)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/ValueIcons/label-asus-oled.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>
<p class=&quot;result-label temp3&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giá rẻ quá&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png&quot;><span>Giá rẻ quá</span></p>
        <h3 title=&quot;Laptop Asus ExpertBook B9 OLED B9403CVA i7 1355U/16GB/1TB/Cáp/Túi/Win11 Pro (KM0157X)&quot;>
            Asus ExpertBook B9 OLED B9403CVA i7 1355U (KM0157X)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 16 GB</span>
                        <span>SSD 1 TB</span>
            </div>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>49.990.000₫</p>
                        <span class=&quot;percent&quot;>-20%</span>
                </div>
                <strong class=&quot;price&quot;>39.990.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>100.000₫</b></p>
    </a>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 14&quot;, 2K, 90Hz</p>
            <p>CPU: i7, 1355U, 1.7GHz</p>
            <p>Card: Intel Iris Xe</p>
            <p>Pin: 3-cell, 63Wh</p>
            <p>Khối lượng: 0.99 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;305456&quot;>
                                        <a href=&quot;/laptop/surface-pro-9-i5&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop Surface Pro 9 i5 1235U/8GB/256GB/Touch/120Hz/Win11&quot; data-id=&quot;305456&quot; data-price=&quot;27990000.0&quot; data-brand=&quot;Surface&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/305456/surface-pro-9-i5-thumb-cam-ung-600x600.jpg&quot; alt=&quot;Surface Pro 9 i5 1235U&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/ValueIcons/label-intel-evo-i5.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>

        <h3 title=&quot;Laptop Surface Pro 9 i5 1235U/8GB/256GB/Touch/120Hz/Win11&quot;>
            Surface Pro 9 i5 1235U
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 8 GB</span>
                        <span>SSD 256 GB</span>
            </div>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>29.990.000₫</p>
                        <span class=&quot;percent&quot;>-6%</span>
                </div>
                <strong class=&quot;price&quot;>27.990.000₫</strong>



    </a>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 13&quot;, 2K, 120Hz</p>
            <p>CPU: i5, 1235U, 1.3GHz</p>
            <p>Card: Intel Iris Xe</p>
            <p>Pin: Li-ion, 47.7 Wh</p>
            <p>Khối lượng: 0.879 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                        ">
                </section>
            </div>
            <div class="block" id="cao-cap-sang-trong">
                <section>
                    <div class="block__banner">
                        
    <div class="">
            <div class="item_banner" data-href="https://www.thegioididong.com/laptop?g=cao-cap-sang-trong" style="background-color:#000000">
                <a data-cate="44" data-place="1699" rel="nofollow" href="javascript:;" onclick="jQuery.ajax({ url: '/bannertracking?bid=45523&amp;r='+ (new Date).getTime(), async: true, cache: false });"><img style="cursor:pointer" src="https://cdn.tgdd.vn/2022/08/banner/banner-cao-cao-desktop-1200x200.png" alt="Cao cấp sang trọng" width="1200" height="200"></a>
            </div>
    </div>

                            <div class="question" onclick="CloseCriteria(this)">
                                <span class="text-hover">Laptop Cao cấp, sang trọng là gì?</span>
                                <img class="banner-icon" src="//cdn.tgdd.vn/mwgcart/mwgcore/ContentMwg/images/laptop/icon-question.v202307010120.png">
                            </div>
                            <a class="_criteria" onclick="CloseCriteria(this)" href="javascript:;">
                                <div data-htmlid="3606">
                                    <span></span>
                                    <div>
                                        <p><strong>LAPTOP CAO CẤP - SANG TRỌNG</strong><br>Phù hợp với người dùng là doanh nhân. Laptop có cấu hình mạnh, ngoại hình sang trọng, vận hành tốt đa tác vụ. Một số máy còn đạt các tiêu chuẩn đặc biệt như Intel Evo, độ bền chuẩn quân đội Mỹ,...<br><br>Thông số tối thiểu:<br><img src="https://cdn.tgdd.vn/2021/09/content/icon-evo-42x42.png"> Đạt chuẩn Intel Evo<br><img src="https://cdn.tgdd.vn/2021/09/content/icon-cpu-new-42x42.png">&nbsp;CPU: Intel Core i5<br><img src="https://cdn.tgdd.vn/2021/09/content/icon-ram-new-42x42.png"> RAM: 8 GB<br><img src="https://cdn.tgdd.vn/2021/09/content/icon-o-cung-42x42-1.png">&nbsp;Ổ cứng: SSD 256 GB<br><img src="https://cdn.tgdd.vn/2021/09/content/icon-chat-lieu-42x42-14.png">&nbsp;Chất liệu vỏ: Kim loại</p>
                                    </div>
                                </div>
                            </a>
                    </div>
                    
	<ul class="block__tab">

			<li class="active" data-url="/laptop?g=cao-cap-sang-trong" data-html-id="3601"><a href="javascript:;"> Nổi bật </a> </li>
			<li class="" data-url="/laptop?p=tren-30-trieu&amp;g=cao-cap-sang-trong" data-cate-id="44" data-prop-value-ids="37700" data-price-id="790"><a href="javascript:;"> Trên 30 triệu </a> </li>
			<li class="" data-url="/laptop-asus?g=cao-cap-sang-trong " data-cate-id="44" data-prop-value-ids="37700" data-manu-id="128"><a href="javascript:;"> Asus </a> </li>
			<li class="" data-url="/laptop-hp-compaq?g=cao-cap-sang-trong" data-cate-id="44" data-prop-value-ids="37700" data-manu-id="122"><a href="javascript:;"> HP </a> </li>
			<li class="" data-url="/laptop-apple-macbook?g=cao-cap-sang-trong" data-cate-id="44" data-prop-value-ids="37700" data-manu-id="203"><a href="javascript:;"> MacBook </a> </li>
			<li class="" data-url="/laptop-lg?g=cao-cap-sang-trong" data-cate-id="44" data-prop-value-ids="37700" data-manu-id="1470"><a href="javascript:;"> LG </a> </li>
			<li class="" data-url="/laptop-lenovo?g=cao-cap-sang-trong" data-cate-id="44" data-prop-value-ids="37700" data-manu-id="120"><a href="javascript:;"> Lenovo </a> </li>
		 

	</ul>


                    <div class="box-main-listproduct">
                        <div class="listproduct listproduct-block" data-url="/laptop?g=cao-cap-sang-trong">
                                <div class="item" data-id="296789">
                                        <a href="/laptop/hp-envy-x360-13-bf0090tu-i7-76b13pa" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop HP Envy X360 13 bf0090TU i7 1250U/16GB/512GB/Touch/Pen/Win11 (76B13PA)" data-id="296789" data-price="27690000.0" data-brand="HP" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">
                    <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class="item-img item-img_44">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/44/296789/hp-envy-x360-13-bf0090tu-i7-76b13pa-101122-093057-600x600.jpg" alt="HP Envy X360 13 bf0090TU i7 1250U (76B13PA)">
                    <img src="https://cdn.tgdd.vn/ValueIcons/label-intel-evo-i7.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>
<p class="result-label temp3"><img width="20" height="20" class="lazyload" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
        <h3 title="Laptop HP Envy X360 13 bf0090TU i7 1250U/16GB/512GB/Touch/Pen/Win11 (76B13PA)">
            HP Envy X360 13 bf0090TU i7 1250U (76B13PA)
        </h3>
            <div class="item-compare">
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class="box-p">
                    <p class="price-old black">32.990.000₫</p>
                        <span class="percent">-16%</span>
                </div>
                <strong class="price">27.690.000₫</strong>



            <p class="item-gift">Quà <b>100.000₫</b></p>
    </a>
        <div class="item-rating">
            <p>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                                <i class="icon-star"></i>
            </p>
            <p class="item-rating-total">14</p>
        </div>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 13.3", 2K, Cảm ứng</p>
            <p>CPU: i7, 1250U, 1.1GHz</p>
            <p>Card: Intel Iris Xe</p>
            <p>Pin: 4-cell, 66Wh</p>
            <p>Khối lượng: 1.34 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="304260">
                                        <a href="/laptop/asus-zenbook-14-oled-ux3402va-i5-km085w" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Asus Zenbook 14 OLED UX3402VA i5 1340P/16GB/512GB/Cáp/Túi/Win11 (KM085W)" data-id="304260" data-price="22990000.0" data-brand="Asus" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">
                    <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class="item-img item-img_44">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/44/304260/asus-zenbook-14-oled-ux3402va-i5-km085w-thumb-1-600x600.jpg" alt="Asus Zenbook 14 OLED UX3402VA i5 1340P (KM085W)">
                    <img src="https://cdn.tgdd.vn/ValueIcons/label-asus-oled.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>
<p class="result-label temp3"><img width="20" height="20" class="lazyload" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
        <h3 title="Laptop Asus Zenbook 14 OLED UX3402VA i5 1340P/16GB/512GB/Cáp/Túi/Win11 (KM085W)">
            Asus Zenbook 14 OLED UX3402VA i5 1340P (KM085W)
        </h3>
            <div class="item-compare">
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class="box-p">
                    <p class="price-old black">27.990.000₫</p>
                        <span class="percent">-17%</span>
                </div>
                <strong class="price">22.990.000₫</strong>



            <p class="item-gift">Quà <b>100.000₫</b></p>
    </a>
        <div class="item-rating">
            <p>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                                <i class="icon-star"></i>
            </p>
            <p class="item-rating-total">12</p>
        </div>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 14", 2K, 90Hz</p>
            <p>CPU: i5, 1340P, 1.9GHz</p>
            <p>Card: Intel Iris Xe</p>
            <p>Pin: 4-cell Li-ion, 75 Wh</p>
            <p>Khối lượng: 1.39 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="285765">
                                        <a href="/laptop/acer-swift-3-sf314-512-56qn-i5-nxk0fsv002" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Acer Swift 3 SF314 512 56QN i5 1240P/16GB/512GB/Win11 (NX.K0FSV.002)" data-id="285765" data-price="18490000.0" data-brand="Acer" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">
                    <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class="item-img item-img_44">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/44/285765/acer-swift-3-sf314-512-56qn-i5-nxk0fsv002-ab-thumb-600x600.jpg" alt="Acer Swift 3 SF314 512 56QN i5 1240P (NX.K0FSV.002)">
                    <img src="https://cdn.tgdd.vn/ValueIcons/label-1nam-3s1.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>
<p class="result-label temp3"><img width="20" height="20" class="lazyload" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
        <h3 title="Laptop Acer Swift 3 SF314 512 56QN i5 1240P/16GB/512GB/Win11 (NX.K0FSV.002)">
            Acer Swift 3 SF314 512 56QN i5 1240P (NX.K0FSV.002)
        </h3>
            <div class="item-compare">
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class="box-p">
                    <p class="price-old black">23.990.000₫</p>
                        <span class="percent">-22%</span>
                </div>
                <strong class="price">18.490.000₫</strong>



            <p class="item-gift">Quà <b>100.000₫</b></p>
    </a>
        <div class="item-rating">
            <p>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                                <i class="icon-star-dark"></i>
            </p>
            <p class="item-rating-total">14</p>
        </div>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 14", 2K</p>
            <p>CPU: i5, 1240P, 1.7GHz</p>
            <p>Card: Intel Iris Xe</p>
            <p>Pin: 3-cell, 56Wh</p>
            <p>Khối lượng: 1.2 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="313619">
                                        <a href="/laptop/lenovo-yoga-7-14irl8-i7-82yl006bvn" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Lenovo Yoga 7 14IRL8 i7 1360P/16GB/512GB/Touch/Pen/OfficeHS/Win11 (82YL006BVN)" data-id="313619" data-price="25990000.0" data-brand="Lenovo" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">
                    <span class="lb-tragop">Trả góp 0%</span>

        </div>

            <div class="item-img item-img_44">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/44/313619/lenovo-yoga-7-14irl8-i7-82yl006bvn-thumb-600x600.jpg" alt="Lenovo Yoga 7 14IRL8 i7 1360P (82YL006BVN)">
                    <img src="https://cdn.tgdd.vn/ValueIcons/label-office-ban-quyen.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>
<p class="result-label temp3"><img width="20" height="20" class="lazyload" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
        <h3 title="Laptop Lenovo Yoga 7 14IRL8 i7 1360P/16GB/512GB/Touch/Pen/OfficeHS/Win11 (82YL006BVN)">
            Lenovo Yoga 7 14IRL8 i7 1360P (82YL006BVN)
        </h3>
            <div class="item-compare">
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class="box-p">
                    <p class="price-old black">28.990.000₫</p>
                        <span class="percent">-10%</span>
                </div>
                <strong class="price">25.990.000₫</strong>



            <p class="item-gift">Quà <b>100.000₫</b></p>
    </a>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 14", Full HD, Cảm ứng</p>
            <p>CPU: i7, 1360P, 2.2GHz</p>
            <p>Card: Intel Iris Xe</p>
            <p>Pin: 71Wh</p>
            <p>Khối lượng: 1.49 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="314840">
                                        <a href="/laptop/dell-inspiron-14-7430-i5-n7430i58w1" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Dell Inspiron 14 T7430 i5 1335U/8GB/512GB/Touch/Pen/OfficeHS/Win11 (N7430I58W1)" data-id="314840" data-price="23990000.0" data-brand="Dell" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">

        </div>

            <div class="item-img item-img_44">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/44/314840/dell-inspiron-14-7430-i5-n7430i58w1-221023-102403-600x600.png" alt="Dell Inspiron 14 T7430 i5 1335U (N7430I58W1)">
                    <img src="https://cdn.tgdd.vn/ValueIcons/label-office-ban-quyen.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>

        <h3 title="Laptop Dell Inspiron 14 T7430 i5 1335U/8GB/512GB/Touch/Pen/OfficeHS/Win11 (N7430I58W1)">
            Dell Inspiron 14 T7430 i5 1335U (N7430I58W1)
        </h3>
            <div class="item-compare">
                        <span>RAM 8 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class="box-p">
                    <p class="price-old black">24.190.000₫</p>
                </div>
                <strong class="price">23.990.000₫</strong>



            <p class="item-gift">Quà <b>100.000₫</b></p>
    </a>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 14", Full HD, Cảm ứng</p>
            <p>CPU: i5, 1335U, 1.3GHz</p>
            <p>Card: Intel Iris Xe</p>
            <p>Pin: 4-cell, 54Wh</p>
            <p>Khối lượng: 1.58 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="310451">
                                        <a href="/laptop/msi-prestige-14-evo-b13m-i5-401vn" data-s="TwoPriceDetail" data-site="1" data-pro="3" data-cache="False" data-name="Laptop MSI Prestige 14 Evo B13M i5 13500H/16GB/512GB/Balo/Win11 (401VN)" data-id="310451" data-price="21890000.0" data-brand="MSI" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">
                    <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class="item-img item-img_44">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/44/310451/msi-prestige-14-evo-b13m-i5-401vn-130723-111542-600x600.jpg" alt="MSI Prestige 14 Evo B13M i5 13500H (401VN)">
                    <img src="https://cdn.tgdd.vn/ValueIcons/Label_01-01.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>
<p class="result-label temp3"><img width="20" height="20" class="lazyload" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
        <h3 title="Laptop MSI Prestige 14 Evo B13M i5 13500H/16GB/512GB/Balo/Win11 (401VN)">
            MSI Prestige 14 Evo B13M i5 13500H (401VN)
        </h3>
            <div class="item-compare">
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
            <p class="item-txt-online"><i></i>Online giá rẻ quá</p>
                <div class="box-p">
                    <p class="price-old black">26.990.000₫</p>
                        <span class="percent">-18%</span>
                </div>
                <strong class="price">21.890.000₫</strong>



    </a>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 14", Full HD</p>
            <p>CPU: i5, 13500H, 2.6GHz</p>
            <p>Card: Intel Iris Xe</p>
            <p>Pin: 4-cell, 72Wh</p>
            <p>Khối lượng: 1.49 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="309735">
                                        <a href="/laptop/hp-envy-x360-13-bf0112tu-i5-7c0n9pa" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop HP Envy X360 13 bf0112TU i5 1230U/16GB/512GB/Touch/Pen/Win11 (7C0N9PA)" data-id="309735" data-price="23990000.0" data-brand="HP" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">
                    <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class="item-img item-img_44">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/44/309735/hp-envy-x360-13-bf0112tu-i5-7c0n9pa-glr-thumb-600x600.jpg" alt="HP Envy X360 13 bf0112TU i5 1230U (7C0N9PA)">
                    <img src="https://cdn.tgdd.vn/ValueIcons/label-intel-evo-i5.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>
<p class="result-label temp3"><img width="20" height="20" class="lazyload" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
        <h3 title="Laptop HP Envy X360 13 bf0112TU i5 1230U/16GB/512GB/Touch/Pen/Win11 (7C0N9PA)">
            HP Envy X360 13 bf0112TU i5 1230U (7C0N9PA)
        </h3>
            <div class="item-compare">
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class="box-p">
                    <p class="price-old black">29.590.000₫</p>
                        <span class="percent">-18%</span>
                </div>
                <strong class="price">23.990.000₫</strong>



            <p class="item-gift">Quà <b>100.000₫</b></p>
    </a>
        <div class="item-rating">
            <p>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                                <i class="icon-star-dark"></i>
            </p>
            <p class="item-rating-total">6</p>
        </div>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 13.3", 2K, Cảm ứng</p>
            <p>CPU: i5, 1230U, 1.00 GHz</p>
            <p>Card: Intel Iris Xe</p>
            <p>Pin: 4-cell, 66Wh</p>
            <p>Khối lượng: 1.34 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="321468">
                                        <a href="/laptop/asus-zenbook-14-oled-ux3405ma-ultra-7-pp152w" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Asus Zenbook 14 OLED UX3405MA Ultra 7 155H/32GB/1TB/120Hz/Túi/Win11 (PP152W)" data-id="321468" data-price="32990000.0" data-brand="Asus" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">
                    <span class="lb-tragop">Trả góp 0%</span>

        </div>

            <div class="item-img item-img_44">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/44/321468/asus-zenbook-14-oled-ux3405ma-ultra-7-pp152w-thumb-600x600.jpg" alt="Asus Zenbook 14 OLED UX3405MA Ultra 7 155H (PP152W)">
                    <img src="https://cdn.tgdd.vn/ValueIcons/label-asus-oled.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>
<p class="result-label temp2"><img width="20" height="20" class="lazyload" alt="Intel Core Ultra" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2024/02/content/label-intel-50x50-2.png"><span>Intel Core Ultra</span></p>
        <h3 title="Laptop Asus Zenbook 14 OLED UX3405MA Ultra 7 155H/32GB/1TB/120Hz/Túi/Win11 (PP152W)">
            Asus Zenbook 14 OLED UX3405MA Ultra 7 155H (PP152W)
        </h3>
            <div class="item-compare">
                        <span>RAM 32 GB</span>
                        <span>SSD 1 TB</span>
            </div>
                <div class="box-p">
                    <p class="price-old black">34.990.000₫</p>
                        <span class="percent">-5%</span>
                </div>
                <strong class="price">32.990.000₫</strong>



            <p class="item-gift">Quà <b>100.000₫</b></p>
    </a>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 14", 2K, 120Hz</p>
            <p>CPU: Ultra 7, 155H, 1.4GHz</p>
            <p>Card: Intel Arc Graphics</p>
            <p>Pin: 4-cell Li-ion, 75 Wh</p>
            <p>Khối lượng: 1.2 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="306792">
                                        <a href="/laptop/lg-gram-2023-i5-14z90rgah53a5" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop LG gram 2023 i5 1340P/16GB/256GB/Win11 (14Z90R-G.AH53A5)" data-id="306792" data-price="25990000.0" data-brand="LG" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">
                    <span class="lb-tragop">Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class="item-img item-img_44">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/44/306792/lg-gram-2023-i5-14z90rgah53a5-thumb-600x600.jpg" alt="LG gram 2023 i5 1340P (14Z90R-G.AH53A5)">
                    <img src="https://cdn.tgdd.vn/ValueIcons/label-intel-evo-i5.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>
<p class="result-label temp3"><img width="20" height="20" class="lazyload" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
        <h3 title="Laptop LG gram 2023 i5 1340P/16GB/256GB/Win11 (14Z90R-G.AH53A5)">
            LG gram 2023 i5 1340P (14Z90R-G.AH53A5)
        </h3>
            <div class="item-compare">
                        <span>RAM 16 GB</span>
                        <span>SSD 256 GB</span>
            </div>
            <p class="item-txt-online">Chỉ bán online</p>
                <div class="box-p">
                    <p class="price-old black">32.490.000₫</p>
                        <span class="percent">-20%</span>
                </div>
                <strong class="price">25.990.000₫</strong>



    </a>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 14", Full HD</p>
            <p>CPU: i5, 1340P, 1.9GHz</p>
            <p>Card: Intel Iris Xe</p>
            <p>Pin: Li-ion, 72 Wh</p>
            <p>Khối lượng: 0.999 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="313618">
                                        <a href="/laptop/lenovo-yoga-7-14irl8-i5-82yl006avn" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Laptop Lenovo Yoga 7 14IRL8 i5 1340P/16GB/512GB/Touch/Pen/OfficeHS/Win11 (82YL006AVN)" data-id="313618" data-price="22990000.0" data-brand="Lenovo" data-cate="Laptop" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">
                    <span class="lb-tragop">Trả góp 0%</span>

        </div>

            <div class="item-img item-img_44">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/44/313618/lenovo-yoga-7-14irl8-i5-82yl006avn-thumb-600x600.jpg" alt="Lenovo Yoga 7 14IRL8 i5 1340P (82YL006AVN)">
                    <img src="https://cdn.tgdd.vn/ValueIcons/label-office-ban-quyen.png" loading="lazy" class="lbliconimg lbliconimg_44 tgdd">
            </div>
<p class="result-label temp3"><img width="20" height="20" class="lazyload" alt="Giá rẻ quá" data-src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png"><span>Giá rẻ quá</span></p>
        <h3 title="Laptop Lenovo Yoga 7 14IRL8 i5 1340P/16GB/512GB/Touch/Pen/OfficeHS/Win11 (82YL006AVN)">
            Lenovo Yoga 7 14IRL8 i5 1340P (82YL006AVN)
        </h3>
            <div class="item-compare">
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class="box-p">
                    <p class="price-old black">25.990.000₫</p>
                        <span class="percent">-11%</span>
                </div>
                <strong class="price">22.990.000₫</strong>



            <p class="item-gift">Quà <b>100.000₫</b></p>
    </a>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Màn hình: 14", Full HD, Cảm ứng</p>
            <p>CPU: i5, 1340P, 1.9GHz</p>
            <p>Card: Intel Iris Xe</p>
            <p>Pin: 71Wh</p>
            <p>Khối lượng: 1.49 kg</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                        </div>
                    </div>
                    <a href="/laptop?g=cao-cap-sang-trong" class="block-btn">
                        <span>Xem tất cả Laptop Cao cấp, sang trọng</span>
                    </a>
                    <input type="hidden" class="hdf hide" value="
                                <div class=&quot;item&quot; data-id=&quot;296789&quot;>
                                        <a href=&quot;/laptop/hp-envy-x360-13-bf0090tu-i7-76b13pa&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop HP Envy X360 13 bf0090TU i7 1250U/16GB/512GB/Touch/Pen/Win11 (76B13PA)&quot; data-id=&quot;296789&quot; data-price=&quot;27690000.0&quot; data-brand=&quot;HP&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>
                    <span class=&quot;lb-tragop&quot;>Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/296789/hp-envy-x360-13-bf0090tu-i7-76b13pa-101122-093057-600x600.jpg&quot; alt=&quot;HP Envy X360 13 bf0090TU i7 1250U (76B13PA)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/ValueIcons/label-intel-evo-i7.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>
<p class=&quot;result-label temp3&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giá rẻ quá&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png&quot;><span>Giá rẻ quá</span></p>
        <h3 title=&quot;Laptop HP Envy X360 13 bf0090TU i7 1250U/16GB/512GB/Touch/Pen/Win11 (76B13PA)&quot;>
            HP Envy X360 13 bf0090TU i7 1250U (76B13PA)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>32.990.000₫</p>
                        <span class=&quot;percent&quot;>-16%</span>
                </div>
                <strong class=&quot;price&quot;>27.690.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>100.000₫</b></p>
    </a>
        <div class=&quot;item-rating&quot;>
            <p>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                                <i class=&quot;icon-star&quot;></i>
            </p>
            <p class=&quot;item-rating-total&quot;>14</p>
        </div>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 13.3&quot;, 2K, Cảm ứng</p>
            <p>CPU: i7, 1250U, 1.1GHz</p>
            <p>Card: Intel Iris Xe</p>
            <p>Pin: 4-cell, 66Wh</p>
            <p>Khối lượng: 1.34 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;304260&quot;>
                                        <a href=&quot;/laptop/asus-zenbook-14-oled-ux3402va-i5-km085w&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop Asus Zenbook 14 OLED UX3402VA i5 1340P/16GB/512GB/Cáp/Túi/Win11 (KM085W)&quot; data-id=&quot;304260&quot; data-price=&quot;22990000.0&quot; data-brand=&quot;Asus&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>
                    <span class=&quot;lb-tragop&quot;>Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/304260/asus-zenbook-14-oled-ux3402va-i5-km085w-thumb-1-600x600.jpg&quot; alt=&quot;Asus Zenbook 14 OLED UX3402VA i5 1340P (KM085W)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/ValueIcons/label-asus-oled.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>
<p class=&quot;result-label temp3&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giá rẻ quá&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png&quot;><span>Giá rẻ quá</span></p>
        <h3 title=&quot;Laptop Asus Zenbook 14 OLED UX3402VA i5 1340P/16GB/512GB/Cáp/Túi/Win11 (KM085W)&quot;>
            Asus Zenbook 14 OLED UX3402VA i5 1340P (KM085W)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>27.990.000₫</p>
                        <span class=&quot;percent&quot;>-17%</span>
                </div>
                <strong class=&quot;price&quot;>22.990.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>100.000₫</b></p>
    </a>
        <div class=&quot;item-rating&quot;>
            <p>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                                <i class=&quot;icon-star&quot;></i>
            </p>
            <p class=&quot;item-rating-total&quot;>12</p>
        </div>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 14&quot;, 2K, 90Hz</p>
            <p>CPU: i5, 1340P, 1.9GHz</p>
            <p>Card: Intel Iris Xe</p>
            <p>Pin: 4-cell Li-ion, 75 Wh</p>
            <p>Khối lượng: 1.39 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;285765&quot;>
                                        <a href=&quot;/laptop/acer-swift-3-sf314-512-56qn-i5-nxk0fsv002&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop Acer Swift 3 SF314 512 56QN i5 1240P/16GB/512GB/Win11 (NX.K0FSV.002)&quot; data-id=&quot;285765&quot; data-price=&quot;18490000.0&quot; data-brand=&quot;Acer&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>
                    <span class=&quot;lb-tragop&quot;>Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/285765/acer-swift-3-sf314-512-56qn-i5-nxk0fsv002-ab-thumb-600x600.jpg&quot; alt=&quot;Acer Swift 3 SF314 512 56QN i5 1240P (NX.K0FSV.002)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/ValueIcons/label-1nam-3s1.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>
<p class=&quot;result-label temp3&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giá rẻ quá&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png&quot;><span>Giá rẻ quá</span></p>
        <h3 title=&quot;Laptop Acer Swift 3 SF314 512 56QN i5 1240P/16GB/512GB/Win11 (NX.K0FSV.002)&quot;>
            Acer Swift 3 SF314 512 56QN i5 1240P (NX.K0FSV.002)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>23.990.000₫</p>
                        <span class=&quot;percent&quot;>-22%</span>
                </div>
                <strong class=&quot;price&quot;>18.490.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>100.000₫</b></p>
    </a>
        <div class=&quot;item-rating&quot;>
            <p>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                                <i class=&quot;icon-star-dark&quot;></i>
            </p>
            <p class=&quot;item-rating-total&quot;>14</p>
        </div>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 14&quot;, 2K</p>
            <p>CPU: i5, 1240P, 1.7GHz</p>
            <p>Card: Intel Iris Xe</p>
            <p>Pin: 3-cell, 56Wh</p>
            <p>Khối lượng: 1.2 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;313619&quot;>
                                        <a href=&quot;/laptop/lenovo-yoga-7-14irl8-i7-82yl006bvn&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop Lenovo Yoga 7 14IRL8 i7 1360P/16GB/512GB/Touch/Pen/OfficeHS/Win11 (82YL006BVN)&quot; data-id=&quot;313619&quot; data-price=&quot;25990000.0&quot; data-brand=&quot;Lenovo&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>
                    <span class=&quot;lb-tragop&quot;>Trả góp 0%</span>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/313619/lenovo-yoga-7-14irl8-i7-82yl006bvn-thumb-600x600.jpg&quot; alt=&quot;Lenovo Yoga 7 14IRL8 i7 1360P (82YL006BVN)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/ValueIcons/label-office-ban-quyen.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>
<p class=&quot;result-label temp3&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giá rẻ quá&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png&quot;><span>Giá rẻ quá</span></p>
        <h3 title=&quot;Laptop Lenovo Yoga 7 14IRL8 i7 1360P/16GB/512GB/Touch/Pen/OfficeHS/Win11 (82YL006BVN)&quot;>
            Lenovo Yoga 7 14IRL8 i7 1360P (82YL006BVN)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>28.990.000₫</p>
                        <span class=&quot;percent&quot;>-10%</span>
                </div>
                <strong class=&quot;price&quot;>25.990.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>100.000₫</b></p>
    </a>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 14&quot;, Full HD, Cảm ứng</p>
            <p>CPU: i7, 1360P, 2.2GHz</p>
            <p>Card: Intel Iris Xe</p>
            <p>Pin: 71Wh</p>
            <p>Khối lượng: 1.49 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;314840&quot;>
                                        <a href=&quot;/laptop/dell-inspiron-14-7430-i5-n7430i58w1&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop Dell Inspiron 14 T7430 i5 1335U/8GB/512GB/Touch/Pen/OfficeHS/Win11 (N7430I58W1)&quot; data-id=&quot;314840&quot; data-price=&quot;23990000.0&quot; data-brand=&quot;Dell&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/314840/dell-inspiron-14-7430-i5-n7430i58w1-221023-102403-600x600.png&quot; alt=&quot;Dell Inspiron 14 T7430 i5 1335U (N7430I58W1)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/ValueIcons/label-office-ban-quyen.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>

        <h3 title=&quot;Laptop Dell Inspiron 14 T7430 i5 1335U/8GB/512GB/Touch/Pen/OfficeHS/Win11 (N7430I58W1)&quot;>
            Dell Inspiron 14 T7430 i5 1335U (N7430I58W1)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 8 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>24.190.000₫</p>
                </div>
                <strong class=&quot;price&quot;>23.990.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>100.000₫</b></p>
    </a>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 14&quot;, Full HD, Cảm ứng</p>
            <p>CPU: i5, 1335U, 1.3GHz</p>
            <p>Card: Intel Iris Xe</p>
            <p>Pin: 4-cell, 54Wh</p>
            <p>Khối lượng: 1.58 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;310451&quot;>
                                        <a href=&quot;/laptop/msi-prestige-14-evo-b13m-i5-401vn&quot; data-s=&quot;TwoPriceDetail&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop MSI Prestige 14 Evo B13M i5 13500H/16GB/512GB/Balo/Win11 (401VN)&quot; data-id=&quot;310451&quot; data-price=&quot;21890000.0&quot; data-brand=&quot;MSI&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>
                    <span class=&quot;lb-tragop&quot;>Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/310451/msi-prestige-14-evo-b13m-i5-401vn-130723-111542-600x600.jpg&quot; alt=&quot;MSI Prestige 14 Evo B13M i5 13500H (401VN)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/ValueIcons/Label_01-01.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>
<p class=&quot;result-label temp3&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giá rẻ quá&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png&quot;><span>Giá rẻ quá</span></p>
        <h3 title=&quot;Laptop MSI Prestige 14 Evo B13M i5 13500H/16GB/512GB/Balo/Win11 (401VN)&quot;>
            MSI Prestige 14 Evo B13M i5 13500H (401VN)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
            <p class=&quot;item-txt-online&quot;><i></i>Online giá rẻ quá</p>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>26.990.000₫</p>
                        <span class=&quot;percent&quot;>-18%</span>
                </div>
                <strong class=&quot;price&quot;>21.890.000₫</strong>



    </a>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 14&quot;, Full HD</p>
            <p>CPU: i5, 13500H, 2.6GHz</p>
            <p>Card: Intel Iris Xe</p>
            <p>Pin: 4-cell, 72Wh</p>
            <p>Khối lượng: 1.49 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;309735&quot;>
                                        <a href=&quot;/laptop/hp-envy-x360-13-bf0112tu-i5-7c0n9pa&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop HP Envy X360 13 bf0112TU i5 1230U/16GB/512GB/Touch/Pen/Win11 (7C0N9PA)&quot; data-id=&quot;309735&quot; data-price=&quot;23990000.0&quot; data-brand=&quot;HP&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>
                    <span class=&quot;lb-tragop&quot;>Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/309735/hp-envy-x360-13-bf0112tu-i5-7c0n9pa-glr-thumb-600x600.jpg&quot; alt=&quot;HP Envy X360 13 bf0112TU i5 1230U (7C0N9PA)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/ValueIcons/label-intel-evo-i5.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>
<p class=&quot;result-label temp3&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giá rẻ quá&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png&quot;><span>Giá rẻ quá</span></p>
        <h3 title=&quot;Laptop HP Envy X360 13 bf0112TU i5 1230U/16GB/512GB/Touch/Pen/Win11 (7C0N9PA)&quot;>
            HP Envy X360 13 bf0112TU i5 1230U (7C0N9PA)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>29.590.000₫</p>
                        <span class=&quot;percent&quot;>-18%</span>
                </div>
                <strong class=&quot;price&quot;>23.990.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>100.000₫</b></p>
    </a>
        <div class=&quot;item-rating&quot;>
            <p>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                                <i class=&quot;icon-star-dark&quot;></i>
            </p>
            <p class=&quot;item-rating-total&quot;>6</p>
        </div>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 13.3&quot;, 2K, Cảm ứng</p>
            <p>CPU: i5, 1230U, 1.00 GHz</p>
            <p>Card: Intel Iris Xe</p>
            <p>Pin: 4-cell, 66Wh</p>
            <p>Khối lượng: 1.34 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;321468&quot;>
                                        <a href=&quot;/laptop/asus-zenbook-14-oled-ux3405ma-ultra-7-pp152w&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop Asus Zenbook 14 OLED UX3405MA Ultra 7 155H/32GB/1TB/120Hz/Túi/Win11 (PP152W)&quot; data-id=&quot;321468&quot; data-price=&quot;32990000.0&quot; data-brand=&quot;Asus&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>
                    <span class=&quot;lb-tragop&quot;>Trả góp 0%</span>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/321468/asus-zenbook-14-oled-ux3405ma-ultra-7-pp152w-thumb-600x600.jpg&quot; alt=&quot;Asus Zenbook 14 OLED UX3405MA Ultra 7 155H (PP152W)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/ValueIcons/label-asus-oled.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>
<p class=&quot;result-label temp2&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Intel Core Ultra&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2024/02/content/label-intel-50x50-2.png&quot;><span>Intel Core Ultra</span></p>
        <h3 title=&quot;Laptop Asus Zenbook 14 OLED UX3405MA Ultra 7 155H/32GB/1TB/120Hz/Túi/Win11 (PP152W)&quot;>
            Asus Zenbook 14 OLED UX3405MA Ultra 7 155H (PP152W)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 32 GB</span>
                        <span>SSD 1 TB</span>
            </div>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>34.990.000₫</p>
                        <span class=&quot;percent&quot;>-5%</span>
                </div>
                <strong class=&quot;price&quot;>32.990.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>100.000₫</b></p>
    </a>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 14&quot;, 2K, 120Hz</p>
            <p>CPU: Ultra 7, 155H, 1.4GHz</p>
            <p>Card: Intel Arc Graphics</p>
            <p>Pin: 4-cell Li-ion, 75 Wh</p>
            <p>Khối lượng: 1.2 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;306792&quot;>
                                        <a href=&quot;/laptop/lg-gram-2023-i5-14z90rgah53a5&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop LG gram 2023 i5 1340P/16GB/256GB/Win11 (14Z90R-G.AH53A5)&quot; data-id=&quot;306792&quot; data-price=&quot;25990000.0&quot; data-brand=&quot;LG&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>
                    <span class=&quot;lb-tragop&quot;>Trả góp 0% - Trả trước 10%</span>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/306792/lg-gram-2023-i5-14z90rgah53a5-thumb-600x600.jpg&quot; alt=&quot;LG gram 2023 i5 1340P (14Z90R-G.AH53A5)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/ValueIcons/label-intel-evo-i5.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>
<p class=&quot;result-label temp3&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giá rẻ quá&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png&quot;><span>Giá rẻ quá</span></p>
        <h3 title=&quot;Laptop LG gram 2023 i5 1340P/16GB/256GB/Win11 (14Z90R-G.AH53A5)&quot;>
            LG gram 2023 i5 1340P (14Z90R-G.AH53A5)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 16 GB</span>
                        <span>SSD 256 GB</span>
            </div>
            <p class=&quot;item-txt-online&quot;>Chỉ bán online</p>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>32.490.000₫</p>
                        <span class=&quot;percent&quot;>-20%</span>
                </div>
                <strong class=&quot;price&quot;>25.990.000₫</strong>



    </a>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 14&quot;, Full HD</p>
            <p>CPU: i5, 1340P, 1.9GHz</p>
            <p>Card: Intel Iris Xe</p>
            <p>Pin: Li-ion, 72 Wh</p>
            <p>Khối lượng: 0.999 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;313618&quot;>
                                        <a href=&quot;/laptop/lenovo-yoga-7-14irl8-i5-82yl006avn&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Laptop Lenovo Yoga 7 14IRL8 i5 1340P/16GB/512GB/Touch/Pen/OfficeHS/Win11 (82YL006AVN)&quot; data-id=&quot;313618&quot; data-price=&quot;22990000.0&quot; data-brand=&quot;Lenovo&quot; data-cate=&quot;Laptop&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>
                    <span class=&quot;lb-tragop&quot;>Trả góp 0%</span>

        </div>

            <div class=&quot;item-img item-img_44&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/44/313618/lenovo-yoga-7-14irl8-i5-82yl006avn-thumb-600x600.jpg&quot; alt=&quot;Lenovo Yoga 7 14IRL8 i5 1340P (82YL006AVN)&quot;>
                    <img src=&quot;https://cdn.tgdd.vn/ValueIcons/label-office-ban-quyen.png&quot; loading=&quot;lazy&quot; class=&quot;lbliconimg lbliconimg_44 tgdd&quot;>
            </div>
<p class=&quot;result-label temp3&quot;><img width=&quot;20&quot; height=&quot;20&quot; class=&quot;lazyload&quot; alt=&quot;Giá rẻ quá&quot; data-src=&quot;https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/campaign/icon-50x50-label-giarequa-min-50x50.png&quot;><span>Giá rẻ quá</span></p>
        <h3 title=&quot;Laptop Lenovo Yoga 7 14IRL8 i5 1340P/16GB/512GB/Touch/Pen/OfficeHS/Win11 (82YL006AVN)&quot;>
            Lenovo Yoga 7 14IRL8 i5 1340P (82YL006AVN)
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>RAM 16 GB</span>
                        <span>SSD 512 GB</span>
            </div>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>25.990.000₫</p>
                        <span class=&quot;percent&quot;>-11%</span>
                </div>
                <strong class=&quot;price&quot;>22.990.000₫</strong>



            <p class=&quot;item-gift&quot;>Quà <b>100.000₫</b></p>
    </a>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Màn hình: 14&quot;, Full HD, Cảm ứng</p>
            <p>CPU: i5, 1340P, 1.9GHz</p>
            <p>Card: Intel Iris Xe</p>
            <p>Pin: 71Wh</p>
            <p>Khối lượng: 1.49 kg</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                        ">
                </section>
            </div>
            <div class="block" id="phan-mem">
                <section>
                    <div class="block__banner">
                        
    <div class="block-banner owl-carousel owl-loaded owl-drag">
            
            
    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0.25s ease 0s; width: 2400px;"><div class="owl-item active" style="width: 1200px;"><div class="item_banner" data-href="https://www.thegioididong.com/phan-mem" style="background-color:#001127">
                <a data-cate="44" data-place="1743" rel="nofollow" href="javascript:;" onclick="jQuery.ajax({ url: '/bannertracking?bid=46500&amp;r='+ (new Date).getTime(), async: true, cache: false });"><img style="cursor:pointer" src="https://cdn.tgdd.vn/2022/05/banner/banner-phan-mem-1200x200-1200x200.png" alt="Phần mềm" width="1200" height="200"></a>
            </div></div><div class="owl-item" style="width: 1200px;"><div class="item_banner" data-href="https://www.thegioididong.com/tin-tuc/dau-la-goi-office-365-phu-hop-nhat-1543723" style="background-color:#003170">
                <a data-cate="44" data-place="1743" rel="nofollow" href="javascript:;" onclick="jQuery.ajax({ url: '/bannertracking?bid=85559&amp;r='+ (new Date).getTime(), async: true, cache: false });"><img style="cursor:pointer" src="https://cdn.tgdd.vn/2023/12/banner/Microsoft-1200x300-1200x200.png" alt="Phần mềm" width="1200" height="200"></a>
            </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
        <div class="trigger">
            <div class="trigger-box">
                <span class="btnowl btnowl-prev"></span>
                <div class="counter">
                        <span class="nb-current">1</span>
                        <span class="nb-total">2</span>
                </div>
                <span class="btnowl btnowl-next"></span>
            </div>
        </div>

                    </div>
                    


                    <div class="box-main-listproduct">
                        <div class="listproduct listproduct-block" data-url="/phan-mem">
                                <div class="item" data-id="221162">
                                        <a href="/phan-mem/microsoft-365-personal-32-64bit-1-nam-1-user-win-m" data-s="Nomal" data-site="1" data-pro="3" data-cache="True" data-name="Microsoft 365 Personal 32/64bit chính hãng (1 năm, 1 tài khoản, 5 thiết bị)" data-id="221162" data-price="990000.0" data-brand="Microsoft" data-cate="Phần mềm" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">

        </div>

            <div class="item-img item-img_85">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/85/221162/microsoft-365-personal-32-64bit-1-nam-1-user-win-m-fix-thum-600x600.jpg" alt="Microsoft 365 Personal 32/64bit chính hãng">
            </div>

        <h3 title="Microsoft 365 Personal 32/64bit chính hãng (1 năm, 1 tài khoản, 5 thiết bị)">
            Microsoft 365 Personal 32/64bit chính hãng
        </h3>
            <div class="item-compare">
                        <span>12 tháng</span>
                        <span>1 tài khoản</span>
            </div>
                <div class="box-p">
                    <p class="price-old black">1.490.000₫</p>
                        <span class="percent">-33%</span>
                </div>
                <strong class="price">990.000₫</strong>



    </a>
        <div class="item-rating">
            <p>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                                <i class="icon-star"></i>
            </p>
            <p class="item-rating-total">79</p>
        </div>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Ngôn ngữ: Nhiều ngôn ngữ</p>
            <p>Dùng cho: Windows, MacOS, iOS</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="221161">
                                        <a href="/phan-mem/microsoft-365-family-32-64bit-1-nam-6-user-win-mac" data-s="Nomal" data-site="1" data-pro="3" data-cache="True" data-name="Microsoft 365 Family 32/64bit chính hãng (1 năm, 6 tài khoản, 30 thiết bị)" data-id="221161" data-price="1490000.0" data-brand="Microsoft" data-cate="Phần mềm" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">

        </div>

            <div class="item-img item-img_85">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/85/221161/microsoft-365-family-32-64bit-1-nam-6-user-win-mac-fix-thum-600x600.jpg" alt="Microsoft 365 Family 32/64bit chính hãng">
            </div>

        <h3 title="Microsoft 365 Family 32/64bit chính hãng (1 năm, 6 tài khoản, 30 thiết bị)">
            Microsoft 365 Family 32/64bit chính hãng
        </h3>
            <div class="item-compare">
                        <span>12 tháng</span>
                        <span>6 tài khoản</span>
            </div>
                <div class="box-p">
                    <p class="price-old black">1.990.000₫</p>
                        <span class="percent">-25%</span>
                </div>
                <strong class="price">1.490.000₫</strong>



    </a>
        <div class="item-rating">
            <p>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                                <i class="icon-star"></i>
            </p>
            <p class="item-rating-total">30</p>
        </div>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Ngôn ngữ: Nhiều ngôn ngữ</p>
            <p>Dùng cho: Windows, MacOS, iOS</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="251215">
                                        <a href="/phan-mem/office-home-student-2021-for-pc-mac-vinh-vien" data-s="Nomal" data-site="1" data-pro="3" data-cache="True" data-name="Microsoft Office Home &amp; Student 2021 chính hãng (Vĩnh viễn, 1 thiết bị Windows/Mac)" data-id="251215" data-price="2190000.0" data-brand="Microsoft" data-cate="Phần mềm" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">

        </div>

            <div class="item-img item-img_85">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/85/251215/office-home-student-2021-for-pc-mac-vinh-vien-210623-043021-600x600.png" alt="Microsoft Office Home &amp; Student 2021 chính hãng">
            </div>

        <h3 title="Microsoft Office Home &amp; Student 2021 chính hãng (Vĩnh viễn, 1 thiết bị Windows/Mac)">
            Microsoft Office Home &amp; Student 2021 chính hãng
        </h3>
            <div class="item-compare">
                        <span>Vĩnh viễn</span>
                        <span>1 thiết bị</span>
            </div>
                <div class="box-p">
                    <p class="price-old black">2.990.000₫</p>
                        <span class="percent">-26%</span>
                </div>
                <strong class="price">2.190.000₫</strong>



    </a>
        <div class="item-rating">
            <p>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                                <i class="icon-star-dark"></i>
            </p>
            <p class="item-rating-total">35</p>
        </div>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Ngôn ngữ: Nhiều ngôn ngữ</p>
            <p>Dùng cho: Windows 11, Windows 10, MacOS</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="302700">
                                        <a href="/phan-mem/microsoft-windows-11-home-64-bit-chinh-hang" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Microsoft Windows 11 Home 64-bit chính hãng" data-id="302700" data-price="3690000.0" data-brand="Microsoft" data-cate="Phần mềm" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">

        </div>

            <div class="item-img item-img_85">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/85/302700/microsoft-windows-11-home-64-bit-chinh-hang-thumb-600x600.jpg" alt="Microsoft Windows 11 Home 64-bit chính hãng">
            </div>

        <h3 title="Microsoft Windows 11 Home 64-bit chính hãng">
            Microsoft Windows 11 Home 64-bit chính hãng
        </h3>
            <div class="item-compare">
                        <span>Vĩnh viễn</span>
                        <span>1 thiết bị</span>
            </div>
                <strong class="price">3.690.000₫</strong>



    </a>
        <div class="item-rating">
            <p>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
            </p>
            <p class="item-rating-total">4</p>
        </div>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Ngôn ngữ: Nhiều ngôn ngữ</p>
            <p>Dùng cho: Windows</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="302701">
                                        <a href="/phan-mem/microsoft-windows-11-pro-64-bit-chinh-hang" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Microsoft Windows 11 Pro 64-bit chính hãng" data-id="302701" data-price="5490000.0" data-brand="Microsoft" data-cate="Phần mềm" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">

        </div>

            <div class="item-img item-img_85">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/85/302701/microsoft-windows-11-pro-64-bit-chinh-hang-thumb-600x600.jpg" alt="Microsoft Windows 11 Pro 64-bit chính hãng">
            </div>

        <h3 title="Microsoft Windows 11 Pro 64-bit chính hãng">
            Microsoft Windows 11 Pro 64-bit chính hãng
        </h3>
            <div class="item-compare">
                        <span>Vĩnh viễn</span>
                        <span>1 thiết bị</span>
            </div>
                <strong class="price">5.490.000₫</strong>



    </a>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Ngôn ngữ: Nhiều ngôn ngữ</p>
            <p>Dùng cho: Windows</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="313253">
                                        <a href="/phan-mem/vietmap-live-pro-chinh-hang" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Vietmap Live Pro  chính hãng" data-id="313253" data-price="450000.0" data-brand="Vietmap" data-cate="Phần mềm" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">

        </div>

            <div class="item-img item-img_85">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/85/313253/vietmap-live-pro-chinh-hang-thumb-600x600.jpg" alt="Vietmap Live Pro chính hãng">
            </div>

        <h3 title="Vietmap Live Pro  chính hãng">
            Vietmap Live Pro chính hãng
        </h3>
            <div class="item-compare">
                        <span>1 năm</span>
                        <span>1 thiết bị</span>
            </div>
                <div class="box-p">
                    <p class="price-old black">500.000₫</p>
                        <span class="percent">-10%</span>
                </div>
                <strong class="price">450.000₫</strong>



    </a>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Ngôn ngữ: Tiếng Việt</p>
            <p>Dùng cho: iOS, Android</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="287730">
                                        <a href="/phan-mem/f-secure-safe-internet-security-1pc-1y" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="F-Secure Safe Internet Security chính hãng" data-id="287730" data-price="196000.0" data-brand="F-Secure" data-cate="Phần mềm" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">

        </div>

            <div class="item-img item-img_85">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/85/287730/f-secure-safe-internet-security-1pc-1y-thumb-600x600.jpg" alt="F-Secure Safe Internet Security chính hãng">
            </div>

        <h3 title="F-Secure Safe Internet Security chính hãng">
            F-Secure Safe Internet Security chính hãng
        </h3>
            <div class="item-compare">
                        <span>12 tháng</span>
                        <span>1 thiết bị</span>
            </div>
                <strong class="price">196.000₫</strong>



    </a>
        <div class="item-rating">
            <p>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
            </p>
            <p class="item-rating-total">7</p>
        </div>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Ngôn ngữ: Tiếng Việt, Tiếng Anh</p>
            <p>Dùng cho: Windows, macOS, iOS</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="109490">
                                        <a href="/phan-mem/eset-nod32-antivirus-cho-windows-1-pc" data-s="Nomal" data-site="1" data-pro="3" data-cache="True" data-name="ESET NOD32 Antivirus chính hãng" data-id="109490" data-price="170000.0" data-brand="ESET" data-cate="Phần mềm" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">

        </div>

            <div class="item-img item-img_85">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/85/109490/eset-nod32-antivirus-cho-windows-1-pc-thumb3-600x600.jpeg" alt="ESET NOD32 Antivirus chính hãng">
            </div>

        <h3 title="ESET NOD32 Antivirus chính hãng">
            ESET NOD32 Antivirus chính hãng
        </h3>
            <div class="item-compare">
                        <span>12 tháng</span>
                        <span>1 thiết bị</span>
            </div>
                <strong class="price">170.000₫</strong>



    </a>
        <div class="item-rating">
            <p>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                                <i class="icon-star-half"></i>
            </p>
            <p class="item-rating-total">14</p>
        </div>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Ngôn ngữ: Tiếng Anh</p>
            <p>Dùng cho: Windows 10, macOS</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="310654">
                                        <a href="/phan-mem/kaspersky-plus-chinh-hang" data-s="Nomal" data-site="1" data-pro="3" data-cache="False" data-name="Kaspersky Plus 01 PC chính hãng" data-id="310654" data-price="290000.0" data-brand="Kaspersky" data-cate="Phần mềm" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">

        </div>

            <div class="item-img item-img_85">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/85/310654/Plus1U--600x600.png" alt="Kaspersky Plus 01 PC chính hãng">
            </div>

        <h3 title="Kaspersky Plus 01 PC chính hãng">
            Kaspersky Plus 01 PC chính hãng
        </h3>
            <div class="item-compare">
                        <span>12 tháng</span>
                        <span>1 thiết bị</span>
            </div>
                <strong class="price">290.000₫</strong>



    </a>
        <div class="item-rating">
            <p>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                                <i class="icon-star"></i>
            </p>
            <p class="item-rating-total">6</p>
        </div>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Ngôn ngữ: Tiếng Việt</p>
            <p>Dùng cho: Windows, macOS, iPadOS</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class="item" data-id="274252">
                                        <a href="/phan-mem/vieon-vip-chinh-hang-1-thang" data-s="Nomal" data-site="1" data-pro="3" data-cache="True" data-name="VieON VIP 01 tháng chính hãng" data-id="274252" data-price="79000.0" data-brand="VieON" data-cate="Phần mềm" data-box="BoxCateFilter" class="main-contain  ">
        <div class="item-label">

        </div>

            <div class="item-img item-img_85">
                <img class="lazyload" data-src="https://cdn.tgdd.vn/Products/Images/85/274252/VIP-1T-600x600.jpg" alt="Gói VIP VieON 01 tháng">
            </div>

        <h3 title="VieON VIP 01 tháng chính hãng">
            Gói VIP VieON 01 tháng
        </h3>
            <div class="item-compare">
                        <span>1 tháng</span>
                        <span>4 thiết bị</span>
            </div>
                <strong class="price">79.000₫</strong>



    </a>
        <div class="item-rating">
            <p>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                                <i class="icon-star"></i>
            </p>
            <p class="item-rating-total">538</p>
        </div>
    <div class="item-bottom">
        <a href="#" class="shiping"></a>
    </div>
    <div class="utility">
            <p>Ngôn ngữ: Tiếng Việt</p>
            <p>Dùng cho: Windows, Smart TV, macOS</p>
    </div>
        

    <a href="javascript:void(0)" class="item-ss">
        <i></i>
        So sánh
    </a>


                                </div>
                        </div>
                    </div>
                    <a href="/phan-mem" class="block-btn">
                        <span>Xem tất cả Phần mềm</span>
                    </a>
                    <input type="hidden" class="hdf hide" value="
                                <div class=&quot;item&quot; data-id=&quot;221162&quot;>
                                        <a href=&quot;/phan-mem/microsoft-365-personal-32-64bit-1-nam-1-user-win-m&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;True&quot; data-name=&quot;Microsoft 365 Personal 32/64bit chính hãng (1 năm, 1 tài khoản, 5 thiết bị)&quot; data-id=&quot;221162&quot; data-price=&quot;990000.0&quot; data-brand=&quot;Microsoft&quot; data-cate=&quot;Phần mềm&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>

        </div>

            <div class=&quot;item-img item-img_85&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/85/221162/microsoft-365-personal-32-64bit-1-nam-1-user-win-m-fix-thum-600x600.jpg&quot; alt=&quot;Microsoft 365 Personal 32/64bit chính hãng&quot;>
            </div>

        <h3 title=&quot;Microsoft 365 Personal 32/64bit chính hãng (1 năm, 1 tài khoản, 5 thiết bị)&quot;>
            Microsoft 365 Personal 32/64bit chính hãng
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>12 tháng</span>
                        <span>1 tài khoản</span>
            </div>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>1.490.000₫</p>
                        <span class=&quot;percent&quot;>-33%</span>
                </div>
                <strong class=&quot;price&quot;>990.000₫</strong>



    </a>
        <div class=&quot;item-rating&quot;>
            <p>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                                <i class=&quot;icon-star&quot;></i>
            </p>
            <p class=&quot;item-rating-total&quot;>79</p>
        </div>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Ngôn ngữ: Nhiều ngôn ngữ</p>
            <p>Dùng cho: Windows, MacOS, iOS</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;221161&quot;>
                                        <a href=&quot;/phan-mem/microsoft-365-family-32-64bit-1-nam-6-user-win-mac&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;True&quot; data-name=&quot;Microsoft 365 Family 32/64bit chính hãng (1 năm, 6 tài khoản, 30 thiết bị)&quot; data-id=&quot;221161&quot; data-price=&quot;1490000.0&quot; data-brand=&quot;Microsoft&quot; data-cate=&quot;Phần mềm&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>

        </div>

            <div class=&quot;item-img item-img_85&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/85/221161/microsoft-365-family-32-64bit-1-nam-6-user-win-mac-fix-thum-600x600.jpg&quot; alt=&quot;Microsoft 365 Family 32/64bit chính hãng&quot;>
            </div>

        <h3 title=&quot;Microsoft 365 Family 32/64bit chính hãng (1 năm, 6 tài khoản, 30 thiết bị)&quot;>
            Microsoft 365 Family 32/64bit chính hãng
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>12 tháng</span>
                        <span>6 tài khoản</span>
            </div>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>1.990.000₫</p>
                        <span class=&quot;percent&quot;>-25%</span>
                </div>
                <strong class=&quot;price&quot;>1.490.000₫</strong>



    </a>
        <div class=&quot;item-rating&quot;>
            <p>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                                <i class=&quot;icon-star&quot;></i>
            </p>
            <p class=&quot;item-rating-total&quot;>30</p>
        </div>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Ngôn ngữ: Nhiều ngôn ngữ</p>
            <p>Dùng cho: Windows, MacOS, iOS</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;251215&quot;>
                                        <a href=&quot;/phan-mem/office-home-student-2021-for-pc-mac-vinh-vien&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;True&quot; data-name=&quot;Microsoft Office Home &amp;amp; Student 2021 chính hãng (Vĩnh viễn, 1 thiết bị Windows/Mac)&quot; data-id=&quot;251215&quot; data-price=&quot;2190000.0&quot; data-brand=&quot;Microsoft&quot; data-cate=&quot;Phần mềm&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>

        </div>

            <div class=&quot;item-img item-img_85&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/85/251215/office-home-student-2021-for-pc-mac-vinh-vien-210623-043021-600x600.png&quot; alt=&quot;Microsoft Office Home &amp;amp; Student 2021 chính hãng&quot;>
            </div>

        <h3 title=&quot;Microsoft Office Home &amp;amp; Student 2021 chính hãng (Vĩnh viễn, 1 thiết bị Windows/Mac)&quot;>
            Microsoft Office Home &amp;amp; Student 2021 chính hãng
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>Vĩnh viễn</span>
                        <span>1 thiết bị</span>
            </div>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>2.990.000₫</p>
                        <span class=&quot;percent&quot;>-26%</span>
                </div>
                <strong class=&quot;price&quot;>2.190.000₫</strong>



    </a>
        <div class=&quot;item-rating&quot;>
            <p>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                                <i class=&quot;icon-star-dark&quot;></i>
            </p>
            <p class=&quot;item-rating-total&quot;>35</p>
        </div>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Ngôn ngữ: Nhiều ngôn ngữ</p>
            <p>Dùng cho: Windows 11, Windows 10, MacOS</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;302700&quot;>
                                        <a href=&quot;/phan-mem/microsoft-windows-11-home-64-bit-chinh-hang&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Microsoft Windows 11 Home 64-bit chính hãng&quot; data-id=&quot;302700&quot; data-price=&quot;3690000.0&quot; data-brand=&quot;Microsoft&quot; data-cate=&quot;Phần mềm&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>

        </div>

            <div class=&quot;item-img item-img_85&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/85/302700/microsoft-windows-11-home-64-bit-chinh-hang-thumb-600x600.jpg&quot; alt=&quot;Microsoft Windows 11 Home 64-bit chính hãng&quot;>
            </div>

        <h3 title=&quot;Microsoft Windows 11 Home 64-bit chính hãng&quot;>
            Microsoft Windows 11 Home 64-bit chính hãng
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>Vĩnh viễn</span>
                        <span>1 thiết bị</span>
            </div>
                <strong class=&quot;price&quot;>3.690.000₫</strong>



    </a>
        <div class=&quot;item-rating&quot;>
            <p>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
            </p>
            <p class=&quot;item-rating-total&quot;>4</p>
        </div>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Ngôn ngữ: Nhiều ngôn ngữ</p>
            <p>Dùng cho: Windows</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;302701&quot;>
                                        <a href=&quot;/phan-mem/microsoft-windows-11-pro-64-bit-chinh-hang&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Microsoft Windows 11 Pro 64-bit chính hãng&quot; data-id=&quot;302701&quot; data-price=&quot;5490000.0&quot; data-brand=&quot;Microsoft&quot; data-cate=&quot;Phần mềm&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>

        </div>

            <div class=&quot;item-img item-img_85&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/85/302701/microsoft-windows-11-pro-64-bit-chinh-hang-thumb-600x600.jpg&quot; alt=&quot;Microsoft Windows 11 Pro 64-bit chính hãng&quot;>
            </div>

        <h3 title=&quot;Microsoft Windows 11 Pro 64-bit chính hãng&quot;>
            Microsoft Windows 11 Pro 64-bit chính hãng
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>Vĩnh viễn</span>
                        <span>1 thiết bị</span>
            </div>
                <strong class=&quot;price&quot;>5.490.000₫</strong>



    </a>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Ngôn ngữ: Nhiều ngôn ngữ</p>
            <p>Dùng cho: Windows</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;313253&quot;>
                                        <a href=&quot;/phan-mem/vietmap-live-pro-chinh-hang&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Vietmap Live Pro  chính hãng&quot; data-id=&quot;313253&quot; data-price=&quot;450000.0&quot; data-brand=&quot;Vietmap&quot; data-cate=&quot;Phần mềm&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>

        </div>

            <div class=&quot;item-img item-img_85&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/85/313253/vietmap-live-pro-chinh-hang-thumb-600x600.jpg&quot; alt=&quot;Vietmap Live Pro chính hãng&quot;>
            </div>

        <h3 title=&quot;Vietmap Live Pro  chính hãng&quot;>
            Vietmap Live Pro chính hãng
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>1 năm</span>
                        <span>1 thiết bị</span>
            </div>
                <div class=&quot;box-p&quot;>
                    <p class=&quot;price-old black&quot;>500.000₫</p>
                        <span class=&quot;percent&quot;>-10%</span>
                </div>
                <strong class=&quot;price&quot;>450.000₫</strong>



    </a>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Ngôn ngữ: Tiếng Việt</p>
            <p>Dùng cho: iOS, Android</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;287730&quot;>
                                        <a href=&quot;/phan-mem/f-secure-safe-internet-security-1pc-1y&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;F-Secure Safe Internet Security chính hãng&quot; data-id=&quot;287730&quot; data-price=&quot;196000.0&quot; data-brand=&quot;F-Secure&quot; data-cate=&quot;Phần mềm&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>

        </div>

            <div class=&quot;item-img item-img_85&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/85/287730/f-secure-safe-internet-security-1pc-1y-thumb-600x600.jpg&quot; alt=&quot;F-Secure Safe Internet Security chính hãng&quot;>
            </div>

        <h3 title=&quot;F-Secure Safe Internet Security chính hãng&quot;>
            F-Secure Safe Internet Security chính hãng
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>12 tháng</span>
                        <span>1 thiết bị</span>
            </div>
                <strong class=&quot;price&quot;>196.000₫</strong>



    </a>
        <div class=&quot;item-rating&quot;>
            <p>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
            </p>
            <p class=&quot;item-rating-total&quot;>7</p>
        </div>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Ngôn ngữ: Tiếng Việt, Tiếng Anh</p>
            <p>Dùng cho: Windows, macOS, iOS</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;109490&quot;>
                                        <a href=&quot;/phan-mem/eset-nod32-antivirus-cho-windows-1-pc&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;True&quot; data-name=&quot;ESET NOD32 Antivirus chính hãng&quot; data-id=&quot;109490&quot; data-price=&quot;170000.0&quot; data-brand=&quot;ESET&quot; data-cate=&quot;Phần mềm&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>

        </div>

            <div class=&quot;item-img item-img_85&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/85/109490/eset-nod32-antivirus-cho-windows-1-pc-thumb3-600x600.jpeg&quot; alt=&quot;ESET NOD32 Antivirus chính hãng&quot;>
            </div>

        <h3 title=&quot;ESET NOD32 Antivirus chính hãng&quot;>
            ESET NOD32 Antivirus chính hãng
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>12 tháng</span>
                        <span>1 thiết bị</span>
            </div>
                <strong class=&quot;price&quot;>170.000₫</strong>



    </a>
        <div class=&quot;item-rating&quot;>
            <p>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                                <i class=&quot;icon-star-half&quot;></i>
            </p>
            <p class=&quot;item-rating-total&quot;>14</p>
        </div>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Ngôn ngữ: Tiếng Anh</p>
            <p>Dùng cho: Windows 10, macOS</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;310654&quot;>
                                        <a href=&quot;/phan-mem/kaspersky-plus-chinh-hang&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;False&quot; data-name=&quot;Kaspersky Plus 01 PC chính hãng&quot; data-id=&quot;310654&quot; data-price=&quot;290000.0&quot; data-brand=&quot;Kaspersky&quot; data-cate=&quot;Phần mềm&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>

        </div>

            <div class=&quot;item-img item-img_85&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/85/310654/Plus1U--600x600.png&quot; alt=&quot;Kaspersky Plus 01 PC chính hãng&quot;>
            </div>

        <h3 title=&quot;Kaspersky Plus 01 PC chính hãng&quot;>
            Kaspersky Plus 01 PC chính hãng
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>12 tháng</span>
                        <span>1 thiết bị</span>
            </div>
                <strong class=&quot;price&quot;>290.000₫</strong>



    </a>
        <div class=&quot;item-rating&quot;>
            <p>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                                <i class=&quot;icon-star&quot;></i>
            </p>
            <p class=&quot;item-rating-total&quot;>6</p>
        </div>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Ngôn ngữ: Tiếng Việt</p>
            <p>Dùng cho: Windows, macOS, iPadOS</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                                <div class=&quot;item&quot; data-id=&quot;274252&quot;>
                                        <a href=&quot;/phan-mem/vieon-vip-chinh-hang-1-thang&quot; data-s=&quot;Nomal&quot; data-site=&quot;1&quot; data-pro=&quot;3&quot; data-cache=&quot;True&quot; data-name=&quot;VieON VIP 01 tháng chính hãng&quot; data-id=&quot;274252&quot; data-price=&quot;79000.0&quot; data-brand=&quot;VieON&quot; data-cate=&quot;Phần mềm&quot; data-box=&quot;BoxCateFilter&quot; class=&quot;main-contain  &quot;>
        <div class=&quot;item-label&quot;>

        </div>

            <div class=&quot;item-img item-img_85&quot;>
                <img class=&quot;lazyload&quot; data-src=&quot;https://cdn.tgdd.vn/Products/Images/85/274252/VIP-1T-600x600.jpg&quot; alt=&quot;Gói VIP VieON 01 tháng&quot;>
            </div>

        <h3 title=&quot;VieON VIP 01 tháng chính hãng&quot;>
            Gói VIP VieON 01 tháng
        </h3>
            <div class=&quot;item-compare&quot;>
                        <span>1 tháng</span>
                        <span>4 thiết bị</span>
            </div>
                <strong class=&quot;price&quot;>79.000₫</strong>



    </a>
        <div class=&quot;item-rating&quot;>
            <p>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                        <i class=&quot;icon-star&quot;></i>
                                <i class=&quot;icon-star&quot;></i>
            </p>
            <p class=&quot;item-rating-total&quot;>538</p>
        </div>
    <div class=&quot;item-bottom&quot;>
        <a href=&quot;#&quot; class=&quot;shiping&quot;></a>
    </div>
    <div class=&quot;utility&quot;>
            <p>Ngôn ngữ: Tiếng Việt</p>
            <p>Dùng cho: Windows, Smart TV, macOS</p>
    </div>
        

    <a href=&quot;javascript:void(0)&quot; class=&quot;item-ss&quot;>
        <i></i>
        So sánh
    </a>


                                </div>
                        ">
                </section>
            </div>
    </div>     

            <!--  -->


 

   <section class="hero">

      <div class="swiper hero-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               <div class="content">
                  <span>mua sắm</span>
                  <h3>Jack vivobook</h3>
                  <a href="./product.php" class="btn">Xem thêm</a>
               </div>
               <div class="image">
                  <img src="imgs/home-1.png" alt="">
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="content">
                  <span>mua sắm</span>
                  <h3>acer predator</h3>
                  <a href="./product.php" class="btn">Xem thêm</a>
               </div>
               <div class="image">
                  <img src="imgs/home-2.png" alt="">
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="content">
                  <span>mua sắm</span>
                  <h3>MSI Katana</h3>
                  <a href="./product.php" class="btn">Xem thêm</a>
               </div>
               <div class="image">
                  <img src="imgs/home-3.png" alt="">
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="content">
                  <span>mua sắm</span>
                  <h3>Razer Blade</h3>
                  <a href="./product.php" class="btn">Xem thêm</a>
               </div>
               <div class="image">
                  <img src="imgs/home-4.png" alt="">
               </div>
            </div>

         </div>

         <div class="swiper-pagination"></div>

      </div>

   </section>

   <section class="category">

      <h1 class="title">Mẫu Laptop</h1>

      <div class="box-container">

         <a href="category.php?category=asus" class="box">
            <img src="imgs/asus.png" alt="">
            <h3>asus</h3>
         </a>

         <a href="category.php?category=acer" class="box">
            <img src="imgs/acer.png" alt="">
            <h3>acer</h3>
         </a>

         <a href="category.php?category=msi" class="box">
            <img src="imgs/msi.png" alt="">
            <h3>msi</h3>
         </a>

         <a href="category.php?category=razer" class="box">
            <img src="imgs/razer.png" alt="">
            <h3>razer</h3>
         </a>

      </div>

   </section>


   <section class="products">

      <h1 class="title">laptop mới nhất</h1>

      <div class="box-container">

         <?php
         $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6");
         $select_products->execute();
         if ($select_products->rowCount() > 0) {
            while ($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)) {
         ?>
               <form action="" method="post" class="box">
                  <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
                  <input type="hidden" name="name" value="<?= $fetch_products['name']; ?>">
                  <input type="hidden" name="price" value="<?= $fetch_products['price']; ?>">
                  <input type="hidden" name="image" value="<?= $fetch_products['image']; ?>">
                  <a href="quick_view.php?pid=<?= $fetch_products['id']; ?>" class="fas fa-eye"></a>
                  <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                  <img src="uploaded_img/<?= $fetch_products['image']; ?>" alt="">
                  <a href="category.php?category=<?= $fetch_products['category']; ?>" class="cat"><?= $fetch_products['category']; ?></a>
                  <div class="name"><?= $fetch_products['name']; ?></div>
                  <div class="flex">
                     <div class="price"><?php echo currency_format($fetch_products['price']); ?></div>

                     <input type="number" name="qty" class="qty" min="1" max="99" value="1" maxlength="2">
                  </div>
               </form>
         <?php
            }
         } else {
            echo '<p class="empty">Không có sản phẩm để hiển thị!</p>';
         }
         ?>

      </div>

      <div class="more-btn">
         <a href="./product.php" class="btn">Xem tất cả</a>
      </div>

   </section>



   <?php include 'components/footer.php'; ?>


   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

   <script>
      var swiper = new Swiper(".hero-slider", {
         loop: true,
         grabCursor: true,
         effect: "flip",
         pagination: {
            el: ".swiper-pagination",
            clickable: true,
         },
      });
   </script>

</body>

</html>