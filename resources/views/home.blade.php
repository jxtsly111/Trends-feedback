<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <title>TRENDSHUB</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/templatemo-tale-seo-agency.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 582 Tale SEO Agency

https://templatemo.com/tm-582-tale-seo-agency

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Pre-Header Area Start ***** -->
  <div class="pre-header">
    @if(session('success'))
    <div class="alert alert-success" id="success-message">
        {{ session('success') }}
    </div>
    <script>
        // Automatically hide the success message after 5 seconds
        setTimeout(function(){
            document.getElementById('success-message').style.display = 'none';
        }, 5000);
    </script>
    @endif
  
  
    @if ($errors->any())
    <div class="alert alert-danger" id="error-message">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    <script>
        // Automatically hide the error message after 5 seconds
        setTimeout(function(){
            document.getElementById('error-message').style.display = 'none';
        }, 5000);
    </script>
    @endif
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-9">
          <div class="left-info">
            <ul>
              <li><a href="#"><i class="fa fa-phone"></i>+000 1234 5678</a></li>
              <li><a href="#"><i class="fa fa-envelope"></i>infocompany@email.com</a></li>
              <li><a href="#"><i class="fa fa-map-marker"></i>St. London 54th Bull</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-sm-3">
          <div class="social-icons">
            <ul>
              <li><a href="#"><i class="fab fa-facebook"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Pre-Header Area End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <h2 style="color: white">TrendsHub</h2>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                      <li class="scroll-to-section"><a href="#contact">Submit Feedback</a></li>
                      <li class="scroll-to-section"><a href="#projects">Browse Suggestions</a></li>
                      <li class="scroll-to-section"><a href="#infos">About Us</a></li>
                      <li>

                        @if (Route::has('login'))
                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                            @auth
                                <li  class="scroll-to-section">
                                    <x-app-layout>
   
                                    </x-app-layout>
                                </li>
                               
                           
                                   
                                    
                            @else
                              <li>  <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a></li>
        
                                @if (Route::has('register'))
                                   <li><a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a></li>
                                @endif
                            @endauth
                        </div>
                    @endif

                      </li>
                  </ul>   
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>


  <!-- ***** Header Area End ***** -->

  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="caption header-text">
            <h6>TRENDS HUB</h6>
            <div class="line-dec"></div>
            <h4>Dive <em>Into  TRENDS HUB</em> World <span>With Us</span></h4>
            <p>Trendshub is a dynamic social media platform designed to foster meaningful interactions and trend discussions. Users can share posts, engage with diverse content formats such as images, videos, and audio, and connect with others through comments and replies. The platform emphasizes trending topics and supports features like post verification, user badges, and notifications to enhance the user experience. Trendshub is a vibrant space where users can explore trending content, build connections, and stay informed on popular discussions. <a href="index.html">Home</a>, <a href="about.html">About</a>, and <a href="faqs.html">FAQ</a>.</p>
            <div class="main-button scroll-to-section"><a href="#services">Submit Feedback</a></div>
            <span>or</span>
            <div class="second-button"><a href="faqs.html">Browse Suggestions</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="services section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-6">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-heading">
                <h2>We Provide <em>Different Services</em> &amp;
                  <span>Features</span> For Your Agency</h2>
                  <div class="line-dec"></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doers eiusmod.</p>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/services-01.jpg" alt="discover SEO" class="templatemo-feature">
                </div>
                <h4>Discover More on Latest SEO Trends</h4>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/services-02.jpg" alt="data analysis" class="templatemo-feature">
                </div>
                <h4>Real-Time Big Data Analysis</h4>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/services-03.jpg" alt="precise data" class="templatemo-feature">
                </div>
                <h4>Precise Data Analysis &amp; Prediction</h4>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/services-04.jpg" alt="SEO marketing" class="templatemo-feature">
                </div>
                <h4>SEO Marketing &amp; Social Media</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="projects section" id="projects">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h2>Browse Other <em>Feedbacks</em> <span>About Trendshub</span></h2>
            <div class="line-dec"></div>
          </div>
        </div>
      </div> 
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-features owl-carousel">
            @forelse($data as $item)
            <div class="col-lg-6 col-sm-6">
                <div class="service-item">
                    <div class="icon">
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>Anonymous</h4>
                    <p style="color: black">{{ $item->message }}</p>
                </div>
            </div>
        @empty
            <p>No feedback available</p>
        @endforelse
          </div>
      </div>
    </div>
  </div>

  <div class="infos section video-info" id="infos">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="main-content">
            <div class="row">
              <div class="col-lg-6">
                    <div class="video-thumb">
                        <img style="height: 750px" src="assets/images/trends.jpeg" alt="">
                        <a href="https://www.youtube.com/watch?v=tKWreyKw72Q" target="_blank"><i class="fa fa-play"></i></a>
                      </div>
              </div>
              <div class="col-lg-6">
                <div class="section-heading">
                  <h2> <em>About  </em><span>TrendsHub</span></h2>
                  <div class="line-dec"></div>
                  <p>You are free to use this template for any purpose. You are not allowed to redistribute the downloadable ZIP file of Tale SEO Template on any other template website. Please contact us. Thank you.</p>
                </div>
                <div class="skills">
                  <div class="skill-slide marketing">
                    <div class="fill"></div>
                    <h6>User Friendly</h6>
                    <span>90%</span>
                  </div>
                  <div class="skill-slide digital">
                    <div class="fill"></div>
                    <h6>Trending Topics</h6>
                    <span>80%</span>
                  </div>
                  <div class="skill-slide media">
                    <div class="fill"></div>
                    <h6>Meaningful Interactions</h6>
                    <span>95%</span>
                  </div>
                </div>
                <p class="more-info">Trendshub is a dynamic social media platform designed to foster meaningful interactions and trend discussions.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-us section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="contact-us-content">
            <div class="row">
              <div class="col-lg-12">
                <form id="contact-form" action="{{url('/feedbacksubmit')}}" method="post">@csrf
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="section-heading">
                        <h2><em>FEEDBACK</em> <span>SUBMISSION</span></h2>
                      </div>
                    </div>
                    
                    <div class="col-lg-12">
                      <fieldset>
                        <textarea name="message" id="message" placeholder="Your Feedback"></textarea>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="orange-button">Send Feedback Now</button>
                      </fieldset>
                    </div>
                  </div>
                </form>
                <div class="more-info">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="info-item">
                        <i class="fa fa-phone"></i>
                        <h4><a href="#">010-020-0340</a></h4>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-item">
                        <i class="fa fa-envelope"></i>
                        <h4><a href="#">info@company.com</a></h4>
                        <h4><a href="#">hello@company.com</a></h4>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-item">
                        <i class="fa fa-map-marker"></i>
                        <h4><a href="#">Sunny Isles Beach, FL 33160, United States</a></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2024 <a href="#">Kwasi Codes Agency</a>. All rights reserved. 
        
        <br>Design: <a href="https://templatemo.com" target="_blank">TemplateMo</a></p>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>


  </body>

</html>
