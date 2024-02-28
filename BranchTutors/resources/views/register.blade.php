@extends('layouts/layout-common')

@extends('layouts/header')

  <body>
    <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
          <div class="text-center">
            <div class="loader"></div>
          </div>
        </div>
      </div>
    </div>
  
    <main class="main">
      <section class="section-box">
        <div class="bg-6-opacity-30 pt-90">
          <div class="container">
            <div class="box-signup">
              <h1 class="text-heading-3 mb-50 text-center">Register with us</h1>
             
              <div class="box-form-signup mb-200">
              @if($errors->any())
                  @foreach ($errors->all() as  $error)
                     <p style="color:red;">{{$error}}<br></p>
                  @endforeach 
                      
              @endif
               <form action="{{url('/studentRegister')}}" method="post">
                 @csrf
                <div class="form-group"><input class="form-control" placeholder="Your name *" name="name"></div>
               
                  <div class="form-group"><input class="form-control" placeholder="Your email *" name="email"></div>
                    <div class="form-group"><input type="password" class="form-control" placeholder="Your Password *" name="password"></div>
                <div class="form-group"><input class="form-control" placeholder="Guardian name *" name="guardian"></div>
                <div class="form-group"><input class="form-control" placeholder="Guardian phone *" name="phone"></div>
                <div class="form-group"><input class="form-control" placeholder="Address *" name="address"></div>
                <div class="form-group"><input class="form-control" placeholder="Your phone *" name="mobile"></div>
                <div class="form-group"><input class="form-control" placeholder="School *" name="school"></div>
                <div class="form-group"><input class="form-control" placeholder="Department *" name="department"></div>
                <div class="form-group"><textarea class="form-control" placeholder="Subject taken *" name="subtaken"></textarea></div>
                 <div class="form-group"><textarea class="form-control" placeholder="Difficult Subject  -list as many as you can*" name="diffsub"></textarea></div>
                <div class="form-group"><textarea class="form-control" placeholder="Interesting Subject  *" name="intresub"></textarea></div>
                <div class="form-group"><input class="form-control" placeholder="Intended School *" name="intended_school"></div>
                 <div class="form-group"><textarea class="form-control" placeholder="Jamb Combination *" name="jamb_comb"></textarea></div>
                
                <div class="form-group"><button type="submit" class="btn btn-green-full text-heading-6">Continue</button></div>
               
              </div>
              </form>
  
              @if(Session::has('success'))
              <p style="color: green">{{Session::get( 'success' ) }}</p>
              @endif
            </div>
          </div>
          {{-- <div class="images-lists">
            <div class="row">
              <div class="col-lg-2 col-md-2 col-sm-6 pl-0"><img class="img-responsive img-full img-1" src="homepage/assets/imgs/page/signup/img-1.png" alt="Agon"></div>
              <div class="col-lg-2 col-md-2 col-sm-6"><img class="img-responsive img-full img-2" src="homepage/assets/imgs/page/signup/img-2.png" alt="Agon"></div>
              <div class="col-lg-4 col-md-4 col-sm-12"><img class="img-responsive img-full img-3" src="homepage/assets/imgs/page/signup/img-3.png" alt="Agon"></div>
              <div class="col-lg-2 col-md-2 col-sm-6"><img class="img-responsive img-full img-4" src="homepage/assets/imgs/page/signup/img-4.png" alt="Agon"></div>
              <div class="col-lg-2 col-md-2 col-sm-6 pr-0"><img class="img-responsive img-full img-5" src="homepage/assets/imgs/page/signup/img-5.png" alt="Agon"></div>
            </div>
          </div> --}}
        </div>
      </section>
    </main>
    {{-- <footer class="footer mt-50">
      <div class="container">
        <div class="footer-top">
          <div class="row">
            <div class="col-md-4 col-sm-6 text-center text-md-start"><a href="index.html"><img alt="Agon" src="homepage/assets/imgs/template/logo.svg"></a></div>
            <div class="col-md-8 col-sm-6 text-center text-md-end"><span class="color-gray-900 text-heading-6 mr-30 text-mb-sm-20">Ready to get started?</span><a class="btn btn-square" href="page-signup.html">Create an Account</a></div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 width-20 mb-30">
            <h4 class="text-heading-5">Contact</h4>
            <div class="mt-20 text-body-text color-gray-600 mb-20">4517 Washington Ave. Manchester, Kentucky 39495</div>
            <div class="mt-20 text-body-text color-gray-600">(239) 555-0108</div>
            <div class="text-body-text color-gray-600">contact@agon.com</div>
          </div>
          <div class="col-lg-3 width-20 mb-30">
            <h4 class="text-heading-5">About Us</h4>
            <ul class="menu-footer mt-20">
              <li><a href="#">Mission &amp; Vision</a></li>
              <li><a href="#">Our Team</a></li>
              <li><a href="page-career.html">Careers</a></li>
              <li><a href="#">Press &amp; Media</a></li>
              <li><a href="#">Advertising</a></li>
              <li><a href="#">Testimonials</a></li>
            </ul>
          </div>
          <div class="col-lg-3 width-20 mb-30">
            <h4 class="text-heading-5">Discover</h4>
            <ul class="menu-footer mt-20">
              <li><a href="blog-2.html">Our Blog</a></li>
              <li><a href="page-pricing-1.html">Plans &amp; Pricing</a></li>
              <li><a href="#">Knowledge Base</a></li>
              <li><a href="#">Cookie Policy</a></li>
              <li><a href="#">Office Center</a></li>
              <li><a href="blog-1.html">News &amp; Events</a></li>
            </ul>
          </div>
          <div class="col-lg-3 width-20 mb-30">
            <h4 class="text-heading-5">Support</h4>
            <ul class="menu-footer mt-20">
              <li><a href="page-faqs-1.html">FAQs</a></li>
              <li><a href="#">Editor Help</a></li>
              <li><a href="#">Community</a></li>
              <li><a href="#">Live Chatting</a></li>
              <li><a href="page-contact.html">Contact Us</a></li>
              <li><a href="#">Support Center</a></li>
            </ul>
          </div>
          <div class="col-lg-3 width-16">
            <h4 class="text-heading-5">Useful links</h4>
            <ul class="menu-footer mt-20">
              <li><a href="#">Request an offer</a></li>
              <li><a href="#">How it works</a></li>
              <li><a href="page-pricing-2.html">Pricing</a></li>
              <li><a href="#">Reviews</a></li>
              <li><a href="#">Stories</a></li>
            </ul>
          </div>
        </div>
        <div class="footer-bottom mt-20">
          <div class="row">
            <div class="col-md-6"><span class="color-gray-400 text-body-lead">&copy; Agon Official 2022</span><a class="text-body-text color-gray-400 ml-50" href="page-terms.html">Privacy policy</a><a class="text-body-text color-gray-400 ml-50" href="page-terms.html">Cookies</a><a class="text-body-text color-gray-400 ml-50" href="page-terms.html">Terms of service</a></div>
            <div class="col-md-6 text-center text-lg-end text-md-end">
              <div class="footer-social"><a class="icon-socials icon-facebook" href="https://facebook.com" target="_blank"></a><a class="icon-socials icon-twitter" href="https://twitter.com" target="_blank"></a><a class="icon-socials icon-instagram" href="https://www.instagram.com" target="_blank"></a><a class="icon-socials icon-linkedin" href="https://www.linkedin.com" target="_blank"></a></div>
            </div>
          </div>
        </div>
      </div>
    </footer> --}}
    @extends('layouts/script')