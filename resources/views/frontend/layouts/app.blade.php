<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui" />
    <meta name="description" content="Jessy Pharmaceuticals is one of the dominant players in the pharmaceutical industry in Nigeria. Our company offers an unparalleled range of pharmaceutical generics and branded generics, alongside other nutritional and vitamin products, for the treatment and prevention of diseases hence improving patient's quality of life." />
    <meta name="keywords" content="
    jessy, pharmacy, hepatitis, hepatitis b, virus c, cure, healing, diabetes, diabetic, heart, malaria" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <link href="{{ asset('frontend/css/slider.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/images/logo.png')}}" rel="icon">
    <title>Jessy Pharmaceuticals</title>


    <link href="{{ asset('frontend/animate/aos.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/swiper.css')}}" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('frontend/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/main-pharco.css')}}" rel="stylesheet" type="text/css" />


    <link href="{{asset('frontend/careers/owl/owl.theme.default.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('frontend/careers/owl/owl.carousel.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('frontend/careers/css/css/flexslider.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/careers/css/css/styles.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('frontend/css/bootstrap.extension.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('frontend/animate/aos.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('frontend/css/swiper.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('frontend/css/main-pharco.css')}}" rel="stylesheet" type="text/css" />


  <link href="{{ asset('backend/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">


   <style>

.product-img:hover{
transform: scale(.9)
}

.product-img{
    transition: 1.2s ease-in-out;
}


@media (min-width: 992px) {

        nav > ul > li:hover > a,
        nav > ul > li.active > a {
            color: #2A8BCA;
        }
}




@media (max-width: 820px) {
            .simple-article h3.small, .h3.small {
                font-size: 30px;
            }
        }
        html {
            scroll-behavior: smooth;
        }

        .map a:hover {
            color: #5a5c5c;
        }

        .carousel-item img {
            height: 100vh;
            width: 100%;
            object-fit: contain
        }

        .carousel-control-next, .carousel-control-prev {
            top: 50%;
            bottom: initial;
            width: 65px;
            height: 65px;
            background: #f8931f;
        }

        header.type-1 {
            background: #fff;
        }

        .ytp-cued-thumbnail-overlay {
            position: absolute;
            width: 87% !important;
            height: 100%;
            top: 0;
            right: 0 !important;
            margin: 0 auto !important;
        }

        .carousel-caption {
            position: absolute;
            right: initial;
            bottom: 10%;
            left: 15%;
            z-index: 10;
            padding-top: 20px;
            padding-bottom: 20px;
            color: #fff;
            text-align: left;
        }

            .carousel-caption h2 {
                font-size: 35px;
                margin-bottom: 15px;
            }

        .view-btn, a.view-btn {
            display: inline-block;
            padding: 10px 25px;
            border-radius: 0;
            margin-top: 20px;
            background-color: #f8931f;
            color: #fff;
            text-transform: capitalize;
            border: none;
            outline: 0;
            transition: 0.1s;
            font-size: 15px;
            font-weight: bold;
            letter-spacing: 2px;
            position: relative;
            transition: 0.3s ease-in-out;
        }

            .view-btn span, a.view-btn span {
                position: relative;
                left: 0;
                transition: 0.3s ease-in-out;
                color: #fffffe;
            }

            .view-btn:hover, a.view-btn:hover {
                /* background-color: rgb(240, 240, 240); */
                background-color: #5a5b5d;
                text-decoration: none
            }

                a.view-btn:hover span {
                    color: #f8931f;
                }

        @media (max-width:900px) {
            .carousel-control-next, .carousel-control-prev {
                top: 50%;
                bottom: initial;
                width: 30px;
                height: 50px;
                background: #f8931f;
            }

            .carousel-caption {
                bottom: -10px;
            }

            .view-btn, a.view-btn {
                padding: 3px 12px;
                border-radius: 0;
                margin-top: 20px;
                font-size: 11px;
            }

            .carousel-item img {
                height: 23vh;
                width: 100%;
                object-fit: cover;
                margin-top: 50px;
            }
        }

        @media(min-width:1370px) and (max-height:635px) {
            .carousel-caption {
                left: 19%;
            }
        }


        .top {
      background-image: url("{{ asset('frontend/img/inners/pro2.jpg') }}");
      background-size: cover;
      background-position: center;
      height: 80vh;
      color: white;
      display: flex;
      justify-content: flex-start;
      align-items: center;
      padding: 20px;
      position: relative;
}

.top::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* This creates the dimming effect */
    z-index: 1;
}

.top * {
    position: relative;
    z-index: 2;
}

    .top h1 {
      font-size: 4rem;
      font-weight: bold;
    }

    .top p {
      font-size: 1.5rem;
    }

    @media (max-width: 768px) {
      .top h1 {
        font-size: 2.5rem;
      }

      .top p {
        font-size: 1rem;
      }
    }




    .testimonial{
          margin: 0 20px 40px;
      }
      .testimonial{
          padding: 35px 25px 35px 50px;
          margin-bottom: 35px;
          background: #fff;
          border: 1px solid #f0f0f0;
          position: relative;
      }
      .testimonial::after{
          content: "";
          display: inline-block;
          width: 20px;
          height: 20px;
          background: #fff;
          position: absolute;
          bottom: -10px;
          left: 22px;
          transform: rotate(45deg);
      }
      .testimonial .testimonial-icon{
          width: 46px;
          height: 40px;
          background: #A0DF53;
          text-align: center;
          font-size: 22px;
          color: #fff;
          line-height: 42px;
          position: absolute;
          top: 39px;
          left: -23px;
      }
      .testimonial .testimonial-icon:before{
          content: "";
          border-bottom: 16px solid #e41212;
          border-left: 18px solid transparent;
          position: absolute;
          top: -16px;
          left: 1px;
      }
      .testimonial .description{
          font-size: 15px;
          font-style: italic;
          color: #8a8a8a;
          line-height: 23px;
          margin: 0;
      }
      .testimonial .title{
          display: block;
          font-size: 18px;
          font-weight: 700;
          color: #525252;
          text-transform: capitalize;
          letter-spacing: 1px;
          margin: 0 0 5px 0;
      }
      .testimonial .post{
          display: block;
          font-size: 14px;
          color: #ff4242;
      }
      .owl-theme .owl-controls{
          margin-top: 20px;
      }
      .owl-theme .owl-controls .owl-page span{
          background: #ccc;
          opacity: 1;
          transition: all 0.4s ease 0s;
      }
      .owl-theme .owl-controls .owl-page.active span,
      .owl-theme .owl-controls.clickable .owl-page:hover span{
          background: #ff4242;
      }




      .goTop {
        font-family: "Font Awesome 5 Free";
        font-weight: 600;
        font-size: 18px;
        padding: 18px 20px;
        border-radius: 50%;
        color: #fff;
        background: rgba(90, 91, 93, 0.56);
        -webkit-box-shadow: 0 0 5px 1px rgba(0, 0, 0, 0.1);
        box-shadow: 0 0 5px 1px rgba(0, 0, 0, 0.1);
        position: fixed;
        right: 1.875rem;
        bottom: 1.5rem;
        cursor: pointer;
        -webkit-transform: translateY(150px);
        transform: translateY(150px);
        -webkit-transition: 0.6s;
        transition: 0.6s;
      }

      .goTop:after {
        content: "";
      }
      .goTop:hover {
        background-color: #fee3ec;
        color: #fff;
      }
      .goTop:focus {
        outline: none;
      }
      .goTop.active {
        -webkit-transform: translateY(0);
        transform: translateY(0);
        -webkit-transition: 0.6s;
        transition: 0.6s;
      }


/* Base */
.card-img-top {
    width: 100%;
    height: 300px;
    object-fit: contain;
    transition: 1.2s ease-in-out;
}
.card-img-top:hover{
    transform: scale(.9);
}
.cards {
    height: 100%; /* Ensure the card takes full height */
    display: flex;
    flex-direction: column;
}
.card-body {
    flex: 1; /* Make sure the card body takes the remaining space */
    display: flex;
    flex-direction: column;
    justify-content: flex-end; /* Align the content at the bottom */
}


    .cards {
        /* From https://css.glass */
/* background: rgba(255, 255, 255, 0.69); */
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(4.1px);
-webkit-backdrop-filter: blur(4.1px);
border: 1px solid rgba(255, 255, 255, 0.37);
    }




















      .card-wrapper {
        position: relative;
        width: 100%;
        height: 300px; /* Adjust the height as needed */
        overflow: hidden;
        cursor: pointer;
        border-radius: 10px;
    }

    .card-img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;

        background-position: center;
        transition: all 0.3s ease-in-out;
    }

    .card-content {
        position: relative;
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: rgba(0, 0, 0, 0.7); /* Dark overlay to make the text more readable */
        opacity: 1;
        transition: all 0.3s ease-in-out;
    }

    .circle {
        width: 120px;
        height: 120px;
        background-color: #2A8BCA;
        color:white;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease-in-out;
    }

    .circle h4 {
        font-size: 1.3rem;
        color: white;
        margin: 0;
    }

    .descriptions {
        color: white;
        font-size: 1.2rem;
        padding: 10px;
        line-height: 1.2;
        display: none; /* Initially hidden */
        text-align: center;
    }

    .card-wrapper:hover .card-img {
        opacity: 0;
        transform: scale(1.1);
    }

    .card-wrapper:hover .card-content {
        opacity: 1;
    }

    .card-wrapper:hover .circle {
        opacity: 0;
    }

    .card-wrapper:hover .descriptions {
        display: block;
    }



    .blog-container {
      max-width: 100%;
      margin: 50px auto;
    }
    .blog-image {
      width: 100%;
      height: 450px;
    }
    .blog-meta {
      font-size: 0.9rem;
      color: rgb(46, 40, 40);
    }
    .blog-content {
      margin-top: 20px;
    }

    .blog-content p{
      color: rgb(0, 0, 0);
      line-height: 1.5;
      font-weight: lighter
    }

    .blog-content h1,h2,h3,h4,h5,h6{
      color: rgb(0, 0, 0);
      line-height: 1.5;
      font-weight:700;
      margin-bottom:20px
    }

    .blog-content a{
      color: rgb(0, 60, 255);
    }

    .blog-content img{
        margin:10px 0;
      width: 100%;
    }

    .blog-content ul,ol, li{
     margin: 20px 0;
     color: rgb(0, 0, 0);
     font-weight: 700;
     list-style:disc;
    }

    .social-links a {
      font-size: 1.2rem;
      margin-right: 10px;
      color: #6c757d;
      text-decoration: none;
    }
    .social-links a:hover {
      color: #007bff;
    }





    .product-image {
      width: 100%;
      max-height: 400px;
    }
    .product-section {
      margin-top: 20px;
    }

    .product-section p{
        color: black;
        font-weight: 200;
        line-height:1.6
    }

    .product-section li{
        color: black;
        font-weight: 200;
    }

    .border {
  border: 1px solid #eee !important; }
  .border a {
    display: block;
    padding: 30px; }




@media (max-width: 767px) {
    header.type-1 {
        padding: 15px 0;
        height: 100px;
        margin-bottom: 15px;
        background-color: white;
    }

}
    </style>

</head>
<body class="fonts-8" id="top">

    <div id="content-block">
        <!-- HEADER -->

        @include('frontend.layouts.header')


@yield('content')



<section class="dark-bg text-center contact-wrap relative">
    <a href="#top" class="up-btn"><i class="fa fa-chevron-up"></i></a>

</section>

<!--footer-->
<footer style="background-color: #2A8BCA">
    <div class="container">
        <div class="row pad-10">
            <div class="col-md-6 copyright">
                &copy; Copyright Jessy pharmaceutical company limited. All Rights Reserved <br><br> Designed &amp; Developed by <a style="text-decoration: none; color:#A0DF53" href="https://wa.me/+2347063137059?text=Hello my name is Samuel, it's nice meeting you. How can I be of service to you?" target="_blank">Samuel</a>
            </div>
            <div class="col-md-6 credit social-btns">
                <span class="mr-2">
                    <a href="https://wa.link/di5apq" target="_blank" class="social-link">
                       <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                   <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                 </svg>
                 </a>
                 </span>

             <span class="ml-0 mr-2">
            <a href="https://www.facebook.com/profile.php?id=100093346857378&mibextid=ZbWKwL" target="_blank" title="Facebook">
             <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-facebook text-light" viewBox="0 0 16 16">
                   <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                 </svg>
           </a>
           </span>
            <span class="mr-2">
           <a href="https://twitter.com/DailysunP534" target="_blank" class="social-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-twitter-x text-light" viewBox="0 0 16 16">
                   <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                 </svg>
           </a>
           </span>
            <span class=" mr-2">
           <a  href="https://www.instagram.com/dailysunpharmaceuticalco.ltd/" target="_blank" class="social-link">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram text-light" viewBox="0 0 16 16">
     <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
   </svg>
           </a>
           </span>
            </div>
        </div>
    </div>
</footer>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


<script src="{{ asset('frontend/js/myslider.js')}}" type="text/javascript"></script>
<script src="{{ asset('frontend/animate/aos.js')}}" type="text/javascript"></script>
<script src="{{ asset('frontend/js/global.js')}}"></script>

    <script src="{{ asset('frontend/js/swiper.jquery.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.mousewheel.min.js')}}"></script>

    <script src="{{ asset('backend/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>

    {{-- <script src="{{ asset('frontend/careers/owl/owl.carousel.js')}}" type="text/javascript"></script> --}}
<script>
AOS.init();
$(window).load(function () {
    $('#loader-wrapper').fadeOut();
});
</script>
<script>
(function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
})(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');

ga('create', 'UA-56881453-1', 'auto');
ga('send', 'pageview');

</script>

<script>
$('a[href*=#]:not(.arrowC)').click(function () {
    if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
            $('html,body').animate({
                scrollTop: target.offset().top - 100
            }, 1000);
            return false;
        }
    }
});

</script>

<script>
    $('#testimonial-slider').owlCarousel({
        loop: true,
        nav: false,
        pagination: false,
        autoplay: true,
        autoplayTimeout: 5000,
        animateOut: 'fadeOut',
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 2
            }
        }
    })
</script>


<script>
    $('.owl-carousel-2').owlCarousel({
        loop: true,
        nav: false,
        pagination: false,
        autoplay: true,
        autoplayTimeout: 5000,
        animateOut: 'fadeOut',
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
</script>


<script>
$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop: true,
        autoplay: true,
        pagination: false,
        margin: 10,
        autoplayTimeout: 5000,
        animateOut: 'fadeOut',
        nav: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
});
</script>

<script>
    $(function() {
      $(window).scroll(function() {
        if ($(document).scrollTop() > 60) {
          $(".main-nav").addClass("sticky")
        } else {
          $(".main-nav").removeClass("sticky")
        }
      });
      $("#goTop").click(function() {
        $("html,body").animate({
          scrollTop: 0
        }, "slow");
        return false
      });
      $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
          $("#goTop").addClass("active")
        } else {
          $("#goTop").removeClass("active");
          return false
        }
      }).scroll()
    });
  </script>


</body>

</html>
