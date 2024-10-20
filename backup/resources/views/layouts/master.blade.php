<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('page_meta')
    @yield('title') 
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom-animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/progressbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,500,500i,700,900" rel="stylesheet">
</head>
<body>



     

  @include ('layouts.header')
  @yield ('content')
  @include ('layouts.footer')
  

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/swiper.min.js') }}"></script>
    <script src="{{ asset('js/all.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    
    <script>
       function menuFunction() {
        var x = document.getElementById("sidebar-ul");
        if (x.style.display === "none") {
          x.style.display = "block";
        } else {
          x.style.display = "none";
        }
      }

      function menuFunctiontwo() {
        var x = document.getElementById("sidebar-ul-two");
        if (x.style.display === "none") {
          x.style.display = "block";
        } else {
          x.style.display = "none";
        }
      }
      
    </script>
   <script>
      $(function($) {
  if ($(window).width() > 769) {
    $('.navbar .dropdown').hover(function() {
      $(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();

    }, function() {
      $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();

    });

    $('.navbar .dropdown > a').click(function() {
      location.href = this.href;
    });

  }
});
   
/* ==== MOBILE ==== */
$(document).ready(function(){
      $('.navbar-toggler').on('click', function(){
      $('.mobile-menu').toggleClass('open-slide');
      });
});
   </script>
 
    


    <script>
    var swiper = new Swiper('#mainslider', {
       spaceBetween: 30,
       effect: 'fade',
     speed: 1000,
     loop: true,
     autoplay: {
     delay: 5000,
     },
       navigation: {
         nextEl: '.swiper-next',
         prevEl: '.swiper-prev',
       },
     
     });
    </script>

<script>
  $(function(){
$(window).scroll(function(){
    if($(this).scrollTop()>100){
       $('.nav-header').addClass('fix-top');
    }else{
        $('.nav-header').removeClass('fix-top');
    }
});
}); 
   </script>
</body>
</html>
