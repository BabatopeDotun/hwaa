@extends('layouts.app')

@section('content')

</head>
<header id="header" class="style-plain over">
  <div></div>
  <div class="header">
    <!-- Logo -->
    <div id="logo"> <a href="index.php"><img src="images/logo colored.png" class="logo" alt=""></a> </div>
    <!-- /Logo -->
    <!-- Menu -->
    <div id="menu"> <a href="#" class="menu-main-mobil-button" data-title="Navigate to ..."></a>
      <nav class="menu-main-area">
        <ul id="menu-main" class="menu-main-nav">
          <li class="menu-item current-menu-ancestor current-menu-parent"><a href="index.php">Home</a> </li>
          <li class="menu-item"><a href="services">Sermons</a> </li>
          <li class="menu-item"><a href="welcome">Blog</a> </li>
          <li class="menu-item"><a href="gallery">Gallery</a> </li>
          <li class="menu-item"><a href="about">About Us</a> </li>
          <li class="menu-item"><a href="contact_Us">Contact Us</a></li>
          <li class="menu-item"><a href="download">Download</a></li>
          
        </ul>
      </nav>
    </div>
    <!-- /Menu -->
  </div>
</header>
<h1>{{$title}}</h1>
<div id="wrapper">
  <!-- Site Content -->
  <div class="site-content">
    <!-- Header -->
<!-- Wrapper THERE SHOULD BE A HOME HEADER HERE-->

    <!-- /Header -->
    <!-- Side Info -->


    <div id="side-info">
        <div>
            <h1>
                  
            </h1>          
        </div>
      <div id="socials-wrap-fixed">
        <div class="socials-wrap">
          <div class="socials-title">Social Media</div>
          <span class="social-item"><a href="#" target="_blank" class="mt-button social-icons social_twitter"><span class="icon-twitter">twitter</span></a></span> <span class="social-item"><a href="#" target="_blank" class="mt-button social-icons social_facebook"><span class="icon-facebook">facebook</span></a></span> <span class="social-item"><a href="#" target="_blank" class="mt-button social-icons social_gplus"><span class="icon-gplus">gplus</span></a></span> <span class="social-item"><a href="#" target="_blank" class="mt-button social-icons social_tumblr"><span class="icon-tumblr">tumblr</span></a></span> <span class="social-item"><a href="#" target="_blank" class="mt-button social-icons social_instagram"><span class="icon-instagram">instagram</span></a></span> <span class="social-item"><a href="#" target="_blank" class="mt-button social-icons social_pinterest"><span class="icon-pinterest">pinterest</span></a></span> </div>
        <span class="socials-close icon-close"></span> </div>
      <div id="search-form-wrap-fixed">
        <form method="get" class="search-form" action="#">
          <input type="text" class="search-field" value="" name="s" placeholder="Search">
          <button type="submit" class="search-submit" title="Start search"></button>
        </form>
        <span class="search-close icon-close"></span> </div>
    </div>
    <!-- /Side Info -->
    <!-- Page Content Wrap -->
    <div id="page-content-wrap">
      <!-- Content Wrap -->
      <div class="content-wrap">
        <!-- Content -->
        <div class="content">
          <article class="post-article-single post_type_page">
            <div class="post-content">
              <div class="fw-page-builder-content">
                <section class="fw-main-row columns_padding_0" >
                  <div class="fw-container-fluid">
                    <div class="fw-row">
                      <div class="fw-col-xs-12">
                        <div class="mt-slider">
                          <div class="mt-slider-item wrap-all-slides">
                            <div class="slides-container">
                              <div class="mt-slider-item slide-1">
                                <div class="mt-slide-info">
                                  <h3 class="mt-slide-title">Faith in God</h3>
                                  <div class="mt-slide-text">
                                    <p>One person with a belief<br />
                                      is equal to a force of ninety-nine who have only interest</p>
                                  </div>
                                </div>
                              </div>
                              <div class="mt-slider-item slide-2">
                                <div class="mt-slide-info">
                                  <h3 class="mt-slide-title">The Jesus Way</h3>
                                  <div class="mt-slide-text">
                                    <p>Loving Others.<br />
                                      Jesus lives in our heart.</p>
                                  </div>
                                </div>
                              </div>
                              <div class="mt-slider-item slide-3">
                                <div class="mt-slide-info">
                                  <h3 class="mt-slide-title">Live with Peace</h3>
                                  <div class="mt-slide-text">
                                    <p>Join us for church in Denver<br />
                                      on Sundays at 09:30am. Where you are in life, there is a place for church.</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <nav class="slides-navigation"> <a href="#" class="next"><i class="fa"></i></a> <a href="#" class="prev"><i class="fa"></i></a> </nav>
                          </div>
                          <div class="static"></div>
                        </div>
                      </div>
                    </div>
                    <div class="fw-row">
                      <div class="fw-col-xs-12">
                        <div class="mt-countdown style-1 show-info above">
                          <div class="mt-countdown-timer-wrap">
                            <div class="mt-countdown-header">
                              <div class="mt-countdown-subtitle">countdown</div>
                              <h4 class="mt-countdown-title">To Lunch Day</h4>
                            </div>
                            <div class="mt-countdown-timer" id="countdown-extra" data-date="2018-10-24" data-time="09:09:05">
                              <div class="mt-countdown-item days"><span class="mt-countdown-digits"><span></span><span></span><span></span></span><span class="mt-countdown-label">days</span></div>
                              <div class="mt-countdown-item hours"><span class="mt-countdown-digits"><span></span><span></span></span><span class="mt-countdown-label">hours</span></div>
                              <div class="mt-countdown-item minutes"><span class="mt-countdown-digits"><span></span><span></span></span><span class="mt-countdown-label">minutes</span></div>
                              <div class="mt-countdown-item seconds"><span class="mt-countdown-digits"><span></span><span></span></span><span class="mt-countdown-label">seconds</span></div>
                              <div class="mt-countdown-original hide"></div>
                            </div>
                          </div>
                          <div class="mt-countdown-info-wrap">
                            <div class="mt-countdown-header">
                              <div class="mt-countdown-subtitle">Recommended sermon</div>
                              <h4 class="mt-countdown-title">An appeal to charismatic friends</h4>
                            </div>
                            <a class="countdown-info-link mt-button animate-out color-1" href="#">Play Sermon</a> </div>
                            <div class="fw-row">
                            <div>
                            <a class="countdown-info-link mt-button animate-out color-1" href="#">Watch Pastor Live</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                
                <section class="fw-main-row columns_padding_15 fw-container-fullwidth bg-light-color">
                  <div class="fw-container">
                    <div class="fw-row">
                      <div class="fw-col-xs-12">
                        <div class="fw-divider-space margin-top-6-8-e"></div>
                      </div>
                    </div>
                    <div class="fw-row">
                      <div class="fw-col-xs-12 fw-col-sm-8">
                        <div class="mt-twitter-content with-image image-right-pos margin-bottom-2-7-e-">
                          <div class="mt-twitter-wrap-left">
                            <div class="mt-twitter-view-top">
                              <div class="mt-twitter-image first image-1"></div>
                              <div class="mt-twitter-image last image-2"></div>
                            </div>
                            <div class="mt-twitter"> <span class="mt-twitter-icon icon-twitter"></span>
                              <div class="mt-twitter-list">
                                <div class="mt-twitter-item clearfix">
                                  <div class="mt-twitter-text">The world is my country, all mankind are my brethren, and to do good is my religion.</div>
                                </div>
                                <div class="mt-twitter-item clearfix">
                                  <div class="mt-twitter-text">But unto you that fear my name shall the Sun of righteousness arise with healing in his wings.</div>
                                </div>
                                <div class="mt-twitter-item clearfix">
                                  <div class="mt-twitter-text">Ask, and it shall be given you; Seek, and ye shall find; Knock, and it shall be opened unto you.</div>
                                </div>
                              </div>
                              <a href="#" class="mt-twitter-author">Holly Word</a>
                              <div class="mt-twitter-pagination"></div>
                            </div>
                          </div>
                          <div class="mt-twitter-wrap-right">
                            <div class="mt-twitter-image image-3"></div>
                          </div>
                        </div>
                      </div>
                      <div class="fw-col-xs-12 fw-col-sm-4">
                        <div class="mt-about style-info">
                          <div class="mt-about-content both-link">
                            <h3 class="mt-about-title">About Us</h3>
                            <div class="mt-about-des">
                              <p>Our church is open and friendly with many social activities. To keep our church running smoothly, we have committees anyone can join. Gravida orci lorem posuere turpis. Fusce porttitor massa metus, quis volutpat ex pulvinar feugiat imperdiet, elit arcu hendrerit arcu, et gravida orci lorem posuere turpis. Fusce porttitor massa metus, quis volutpat ex sodales quis. Sed ut perspiciatis, unde omnis iste natus error sit voluptatem.</p>
                            </div>
                            <a class="about-link mt-button first animate-in color-2" href="about.html">Learn More</a> <a class="about-link mt-button animate-out color-1 second" href="gallery.html">View Gallery</a> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <section class="fw-main-row columns_padding_15 fw-container-fullwidth" >
                  <div class="fw-container">
                    <div class="fw-row">
                      <div class="fw-col-xs-12">
                        <div class="fw-divider-space margin-top-7-e"></div>
                      </div>
                    </div>
                    <div class="fw-row">
                      <div class="fw-col-xs-12">
                        <div class="fw-heading fw-heading-h1 style-default fw-heading-center">
                          <h1 class='fw-special-title'>What We Can Do For You!</h1>
                          <div class="fw-special-subtitle">We are a church that believes in god, Everyone is welcome.</div>
                        </div>
                      </div>
                    </div>
                    <div class="fw-row">
                      <div class="fw-col-xs-12">
                        <div class="fw-divider-space margin-top-1-4-e"></div>
                      </div>
                    </div>
                    <div class="fw-row">
                      <div class="fw-col-xs-12 fw-col-sm-4">
                        <p class="services-text"> <span>01</span> </p>
                        <h4 class="services-title"><a href="#">VOLUNTEERING</a></h4>
                        <p class="services-text-center">Quis autem eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil. Totam rem aperiam eaque ipsa, inventore quasi...</p>
                        <div class="fw-divider-space margin-top-10-p"></div>
                      </div>
                      <div class="fw-col-xs-12 fw-col-sm-4">
                        <p class="services-text"> <span>02</span> </p>
                        <h4 class="services-title"><a href="#">HELP AND SUPPORT</a></h4>
                        <p class="services-text-center">Autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil. Totam rem aperiam eaque ipsa, quae ab inventore...</p>
                        <div class="fw-divider-space margin-top-10-p"></div>
                      </div>
                      <div class="fw-col-xs-12 fw-col-sm-4">
                        <p class="services-text"> <span>03</span> </p>
                        <h4 class="services-title"><a href="#">IMPACT FOR EVERYONE</a></h4>
                        <p class="services-text-center">Totam rem aperiam eaque ipsa, quae ab veritatis et quasi. Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil...</p>
                        <div class="fw-divider-space margin-top-10-p"></div>
                      </div>
                    </div>
                  </div>
                </section>
                <section class="fw-main-row columns_padding_15" >
                  <div class="fw-container">
                    <div class="fw-row">
                      <div class="fw-col-xs-12">
                        <div class="fw-divider-space margin-top-6-5-e"></div>
                      </div>
                    </div>
                  </div>
                </section>
                <section class="fw-main-row columns_padding_15 fw-container-fullwidth bg-light-img">
                  <div class="fw-container">
                    <div class="fw-row">
                      <div class="fw-col-xs-12">
                        <div class="mt-sermons style-default margin-top-30-p-">
                          <div class="mt-sermons-item-list">
                            <div class="mt-sermons-item clearfix">
                              <div class="mt-sermons-author">
                                <div class="mt-sermons-author-label"> <span class="label"><span class="line"></span>Pastor</span> </div>
                                <div class="mt-sermons-author-wrap">
                                  <div class="mt-sermons-author-img image-1"></div>
                                  <div class="mt-sermons-author-info">
                                    <h6 class="mt-sermons-author-name">JAMESON ROBERTSON</h6>
                                    <span class="mt-sermons-author-position">Letherson Church</span> </div>
                                </div>
                              </div>
                              <div class="mt-sermons-content">
                                <h4 class="mt-sermons-title"> <a href="audio-post.html">Warning to the Religious</a> </h4>
                                <div class="mt-sermons-des">January 15, 2017</div>
                              </div>
                            </div>
                            <div class="mt-sermons-item clearfix">
                              <div class="mt-sermons-author">
                                <div class="mt-sermons-author-label"> <span class="label"><span class="line"></span>Pastor</span> </div>
                                <div class="mt-sermons-author-wrap">
                                  <div class="mt-sermons-author-img image-2"></div>
                                  <div class="mt-sermons-author-info">
                                    <h6 class="mt-sermons-author-name">Abby Green</h6>
                                    <span class="mt-sermons-author-position">Bread of Life Church</span> </div>
                                </div>
                              </div>
                              <div class="mt-sermons-content">
                                <h4 class="mt-sermons-title"> <a href="audio-post.html">The Five Points of Gospel Truth</a> </h4>
                                <div class="mt-sermons-des">February 11, 2017 <small class="color">(1 hour 32 minutes)</small></div>
                              </div>
                            </div>
                            <div class="mt-sermons-item clearfix">
                              <div class="mt-sermons-author">
                                <div class="mt-sermons-author-label"> <span class="label"><span class="line"></span>Deacon</span> </div>
                                <div class="mt-sermons-author-wrap">
                                  <div class="mt-sermons-author-img image-3"></div>
                                  <div class="mt-sermons-author-info">
                                    <h6 class="mt-sermons-author-name">Maria Moore</h6>
                                    <span class="mt-sermons-author-position">Bread of Life Church</span> </div>
                                </div>
                              </div>
                              <div class="mt-sermons-content">
                                <h4 class="mt-sermons-title"> <a href="audio-post.html">Сhurch ministry for young people</a> </h4>
                                <div class="mt-sermons-des">January 23, 2017</div>
                              </div>
                            </div>
                          </div>
                          <div class="mt-sermon-labels">
                <section class="fw-main-row columns_padding_5 fw-container-fullwidth" >
                  <div class="fw-container">
                    <div class="fw-row">
                      <div class="fw-col-xs-12 fw-col-sm-9">
                        <div class="mt-about style-info with_image">
                          <div class="mt-about-content">
                            <h3 class="mt-about-title">Make a donation</h3>
                            <div class="mt-about-des">
                              <p>Maecenas sodales rutrum felis, in auctor enim rhoncus in. Curabitur tristique, turpis pulvinar feugiat imperdiet, elit arcu hendrerit arcu, et gravida orci lorem posuere turpis. Fusce porttitor massa metus, quis volutpat ex pulvinar feugiat imperdiet, elit arcu hendrerit arcu, et gravida orci lorem posuere turpis. Fusce porttitor massa metus, quis volutpat ex sodales quis.</p>
                            </div>
                            <a class="about-link mt-button first animate-out color-1" href="#">Donate</a> </div>
                          <div class="mt-about-view">
                            <div class="about-image first image-1"></div>
                            <div class="about-image last image-2"></div>
                          </div>
                        </div>
                        <div class="fw-testimonials fw-testimonials-2 style-light">
                          <div class="fw-testimonials-list testimonials-init">
                            <div class="fw-testimonials-item clearfix">
                              <div class="fw-testimonials-text">
                                <p>"I found this community at a time in my life when I was really hurting. I walked in the doors, and felt like I had just come home!"</p>
                              </div>
                              <div class="fw-testimonials-meta">
                                <div class="fw-testimonials-avatar"> <img src="images/team-3.jpg" alt="Dean Carroll"/> </div>
                                <div class="fw-testimonials-author"> <span class="author-name">Dean Carroll</span> <em>Church visitor</em> </div>
                              </div>
                            </div>
                            <div class="fw-testimonials-item clearfix">
                              <div class="fw-testimonials-text">
                                <p>"I was welcomed with warmth and friendship. Thank you so so much for your warm hearts and all your help."</p>
                              </div>
                              <div class="fw-testimonials-meta">
                                <div class="fw-testimonials-avatar"> <img src="images/about_image_1.jpg" alt="Maria Moore"/> </div>
                                <div class="fw-testimonials-author"> <span class="author-name">Maria Moore</span> <em>Church visitor</em> </div>
                              </div>
                            </div>
                            <div class="fw-testimonials-item clearfix">
                              <div class="fw-testimonials-text">
                                <p>"I have been going to this church my whole life and it is such a blessing to me! I am so blessed to be able to attend their meetings and be a part of the amazing things that God is doing."</p>
                              </div>
                              <div class="fw-testimonials-meta">
                                <div class="fw-testimonials-avatar"> <img src="images/team-1.jpg" alt="Jeremy Thompson"/> </div>
                                <div class="fw-testimonials-author"> <span class="author-name">Jeremy Thompson</span> <em>Church visitor</em> </div>
                              </div>
                            </div>
                          </div>
                          <div class="fw-testimonials-arrows"> <a class="prev" href="#"><i class="fa"></i></a> <a class="next" href="#"><i class="fa"></i></a> </div>
                          <div class="fw-testimonials-pagination"></div>
                        </div>
                      </div>
                      <div class="fw-col-xs-12 fw-col-sm-3">
                        <div class="mt-slide margin-top-4-444-e">
                          <div class="mt-slide-item-list">
                            <div class="mt-slide-item clearfix">
                              <div class="mt-about-view">
                                <div class="mt-slide-img img-1"></div>
                              </div>
                              <div class="mt-slide-info">
                                <h6 class="mt-slide-title">How To Help African Children</h6>
                                <div class="mt-slide-text">
                                  <p>We help together</p>
                                </div>
                                <a class="mt-slide-link mt-button animate-out color-4" href="#">Donation</a> </div>
                            </div>
                            <div class="mt-slide-item clearfix">
                              <div class="mt-about-view">
                                <div class="mt-slide-img img-2"></div>
                              </div>
                              <div class="mt-slide-info">
                                <h6 class="mt-slide-title">The Gospel of the Kingdom from the Mount of Olives</h6>
                                <div class="mt-slide-text">
                                  <p>Donation</p>
                                </div>
                                <a class="mt-slide-link mt-button animate-out color-4" href="#">View Details</a> </div>
                            </div>
                          </div>
                          <div class="mt-slide-arrows"> <a class="next" href="#"><i class="fa"></i></a> <a class="prev" href="#"><i class="fa"></i></a> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <section class="fw-main-row columns_padding_15" >
                  <div class="fw-container">
                    <div class="fw-row">
                      <div class="fw-col-xs-12">
                        <div class="fw-divider-space margin-top-5-55-e"></div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </article>
        </div>
        <!-- /Content -->
      </div>
      <!-- /Content Wrap -->
    </div>
    <!-- /Page Content Wrap -->
    <!-- Widgets Below Page -->
    <!-- THERE IS A FOOTER HERE  -->
    <!-- /Widgets Below Page -->
   
  <!-- /Site Content -->
</div>
<!-- /Wrapper -->
<!-- Up -->
<a href="#" class="to-top icon-up-open-mini" title="Up"></a>
<!-- /Up -->
<script type='text/javascript' src='js/jquery/jquery.js'></script>
<script type='text/javascript' src='js/jquery/jquery-packed.js'></script>
<script type='text/javascript' src='js/jquery.isotope.min.js'></script>
<script type='text/javascript' src='js/jquery.carouFredSel.min.js'></script>
<script type='text/javascript' src='js/jquery.superslides.min.js'></script>
<script type='text/javascript' src='js/jquery.touchSwipe.min.js'></script>
<script type='text/javascript' src='js/additionally/countdown/jquery.plugin.js'></script>
<script type='text/javascript' src='js/additionally/countdown/jquery.countdown.js'></script>
<script type='text/javascript' src='js/join.min.js'></script>
<script type='text/javascript' src='js/master.min.js'></script>
<script type='text/javascript' src='js/superfish.min.js'></script>
<script type='text/javascript' src='js/additionally/magnific/jquery.magnific-popup.min.js'></script>
<script type='text/javascript' src='js/additionally/googlemap/googlemap.min.js'></script>
<script type='text/javascript' src='http://maps.google.com/maps/api/js?key=AIzaSyC6OEzNMpzE5zBQTczGohz0EP1UImqjp3E&amp;callback=MtInitMap'></script>
@endsection