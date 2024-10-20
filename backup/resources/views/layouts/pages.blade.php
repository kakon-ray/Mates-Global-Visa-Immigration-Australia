<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

     @include('includes.meta')
     @yield('page_meta')
     @yield('title')    

    <!-- Styles -->    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>


<body>




  @include ('layouts.header')
  @yield ('content')
  @include ('layouts.footer')
  

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Scripts -->
    <script src="{{mix('js/manifest.js')}}"></script>
    <script src="{{mix('js/vendor.js')}}"></script>
    <script src="{{mix('js/app.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
    
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
