<!DOCTYPE html>
<html lang="en">
   <head>
     @include('home.homecss')
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
        @include('home.header')
         <!-- banner section start -->
        @include('home.banner')
         <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- services section start -->
   @include('home.services')
      <!-- services section end -->
      <!-- about section start -->
     @include('home.about')
      <!-- about section end -->
      <!-- blog section start -->
      {{-- <div class="blog_section layout_padding">
         <div class="container">
            <h1 class="blog_taital">See Our  Video</h1>
            <p class="blog_text">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which</p>
            <div class="play_icon_main">
               <div class="play_icon"><a href="#"><img src="images/play-icon.png"></a></div>
            </div>
         </div>
      </div> --}}
      <!-- blog section end -->
      <!-- client section start -->
    {{-- @include('home.testimonials') --}}
      <!-- client section start -->
      <!-- choose section start -->
      {{-- <div class="choose_section layout_padding">
         <div class="container">
            <h1 class="choose_taital">Why Choose Us</h1>
            <p class="choose_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All </p>
            <div class="read_bt_1"><a href="#">Read More</a></div>
            <div class="newsletter_box">
               <h1 class="let_text">Let Start Talk with Us</h1>
               <div class="getquote_bt"><a href="#">Get A Quote</a></div>
            </div>
         </div>
      </div> --}}
      <!-- choose section end -->
      <!-- footer section start -->
    @include('home.footer') 
   </body>
</html>