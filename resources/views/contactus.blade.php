<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Expert</title>
    <link rel="shortcut icon" href="{{asset('')}}frontend/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('')}}frontend/css/all.min.css">
    <link rel="stylesheet" href="{{asset('')}}frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('')}}frontend/css/jquery-ui.css">
    <link rel="stylesheet" href="{{asset('')}}frontend/css/style.css">
</head>
<body>
  <div id="preloader">
    <div class="cssload-dots">
      <div class="cssload-dot"></div>
      <div class="cssload-dot"></div>
      <div class="cssload-dot"></div>
      <div class="cssload-dot"></div>
      <div class="cssload-dot"></div>
  
  </div>
  <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
      <defs>
          <filter id="goo">
              <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="12">
              </feGaussianBlur>
              <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0	0 1 0 0 0	0 0 1 0 0	0 0 0 18 -7" result="goo">
              </feColorMatrix>
          </filter>
      </defs>
  </svg>
  </div>
  <header>
  @include("partials/navigation");
  </header>


    <!-- contactus -->
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-3"> 
                  <!--left sidebar starts here-->
          <div class="left-sidebar">
            <div class="left-sidebar-title">
              <h3>Shopping Options</h3>
            </div>
            <div class="left-layout">
              <div class="single-layout">
                <div class="layout-title">
                  <h4>Category</h4>
                </div>
                <div class="layout-list">
                  <ul>
                    <li><a href="#">Category 01 <span>(4)</span></a></li>
                    <li><a href="#">Category 02 <span>(6)</span></a></li>
                    <li><a href="#">Category 03 <span>(1)</span></a></li>
                  </ul>
                </div>
              </div>
              <div class="price-filter-area single-layout">
                <div class="price-filter">
                  <div class="layout-title">
                    <h4>Price</h4>
                  </div>
                  <p>
                    Range: <input type="text" id="amount" readonly style="width: 80%;border:0; color:#F3652A; font-weight:bold;">
                  </p>
                  <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                    
                  </div>
                </div>
              </div>
              <div class="single-layout">
                <div class="layout-title">
                  <h4>Manufacturer</h4>
                </div>
                <div class="layout-list">
                  <ul>
                    <li><a href="#">Adidas <span>(4)</span></a></li>
                    <li><a href="#">Chanel <span>(6)</span></a></li>
                    <li><a href="#">DKNY <span>(2)</span></a></li>
                    <li><a href="#">Dolce <span>(3)</span></a></li>
                    <li><a href="#">Gabbana <span>(1)</span></a></li>
                    <li><a href="#">Nike <span>(5)</span></a></li>
                    <li><a href="#">Vogue <span>(4)</span></a></li>
                  </ul>
                </div>
              </div>
              <div class="single-layout">
                <div class="layout-title">
                  <h4>color</h4>
                </div>
                <div class="layout-list">
                  <ul>
                    <li><a href="#">Black <span>(4)</span></a></li>
                    <li><a href="#">Blue <span>(6)</span></a></li>
                    <li><a href="#">Brown <span>(2)</span></a></li>
                    <li><a href="#">Pink <span>(3)</span></a></li>
                    <li><a href="#">Red <span>(1)</span></a></li>
                    <li><a href="#">White <span>(5)</span></a></li>
                    <li><a href="#">Yellow <span>(4)</span></a></li>
                  </ul>
                </div>

              </div>

            </div>
            <div class="left-sidebar-title">
              <div class="layout-title bottom-tag">
                <h4>Compare Products </h4>
                </div>
              <p>You have no items to compare.</p>
              <div class="layout-title bottom-tag">
                <h4>Popular Tags</h4>
                <div class="shop-layout">
                  <div class="popular-tag">
                    <div class="tag-list">
                      <ul>
                        <li><a href="#">Clothing</a></li>
                        <li><a href="#">accessories</a></li>
                        <li><a href="#">good</a></li>
                        <li><a href="#">footwear</a></li>
                        <li><a href="#">fashion</a></li>
                        <li><a href="#">kid</a></li>
                        <li><a href="#">Men</a></li>
                        <li><a href="#">Women</a></li>
                      </ul>
                      </div>
                    <div class="tag-action">
                      <ul>
                        <li><a href="#">View all tags</a></li>
                      </ul>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="banner-left">
              <div class="single-banner">
                <a href="#">
                  <img src="{{asset('')}}frontend/images/product/banner-left.jpg" alt="">
                </a>
              </div>

            </div>
            </div>
                </div>
                <div class="col-md-8 col-lg-9">
                    <div class="navigation">

                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="{{url('')}}"><i class="fas fa-home"></i> Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">contact us</li>
                            </ol>
                          </nav>
                    </div>
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.87207782703!2d91.82280881426964!3d22.35845854643285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd89b3aded8b5%3A0x311b3673f0f0499e!2sBITM%20-%20Chittagong%20Campus!5e0!3m2!1sen!2sbd!4v1644385039499!5m2!1sen!2sbd" width="100%" height="450" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="contact_info">
                      <div class="row">
                        <div class="col-md-12 col-lg-6 mb-2 mb-lg-0">
                          <h3 class="border-bottom"><i class="fas fa-user"></i>Contact info</h3>
                          <ul class="address-book">
                            <li class="border-bottom">
                              <a href="#">
                              <i class="fas fa-map-marker-alt"></i>
                              <strong
                              >Address 1234 Pall Mall Street, London England </strong>
                            </a>
                            </li>
                            <li class="border-bottom">
                              <a href="tel:(800)01234567890">
                                <i class="fas fa-envelope"></i>
                                <strong>
                                  Phone (800) 0123 4567 890 
                                </strong>
                              </a>
                            </li>
                            <li class="border-bottom">
                              <a href="mailto:admin@bootexperts.com">
                                <i class="fas fa-mobile-alt"></i>
                                <strong >
                                  Email admin@bootexperts.com
                                </strong>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <div class="col-md-12 col-lg-6">
                          <h3 class="border-bottom"><i class="fas fa-envelope-square"></i>Leave a Message</h3>
                         <div class="contact-form">
                           <form>
                             <div class="row">
                                <div class="col-6 my-2">
                                  <input name="name" id="name" type="text" placeholder="Name(required)" class="form-control">
                                </div>
                                <div class="col-6  my-2">
                                  <input name="Email" id="email" type="text" placeholder="Email(required)" class="form-control">
                                </div>
                                <div class="col-12  my-2">
                                  <input name="subject" id="subject" type="text" placeholder="subject" class="form-control">
                                </div>
                                <div class="col-12 my-2">
                                    <textarea name="message" id="message" class="form-control" rows="10" placeholder="Message"></textarea>
                                  </div>
                                  <div class="col-12 my-2">
                                    <input type="submit" value="Submit Form" class="btn btn-orange">
                                  </div>
                              
                             </div>
                           </form>
                         </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer>
      <div class="container">
        <div class="top-footer">
          <div class="row">
            <div class="col-md-4">
              <div class="shipping">
                <div class="shipping-icon">
                  <i class="fas fa-plane"></i>
                </div>
                <div class="shipping-content">
                  <h6>Free Shipping Worldwide</h6>
                  <p>On order over $150-7days a week</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="customer-care">
                <div class="customer-care-icon">
                  <i class="fas fa-headset"></i>
                </div>
                <div class="customer-care-content">
                  <h6>24/7 CUSTOME R SERVICE</h6>
                  <p>Call us 24/7 at 000 - 123 - 456</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="money-back">
                <div class="money-back-icon">
                  <i class="fas fa-redo-alt"></i>
                </div>
                <div class="money-back-content">
                  <h6>MONEY BACK GUARATEE!</h6>
                  <p>Send within 30 days</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr>

        <div class="bottom-footer">
          <div class="row">
            <div class="col-md-6 col-lg-3">
              <div class="footer-logo">
                <div class="logo">
                  <img src="{{asset('')}}frontend/images/logo.png" alt="logo">
                </div>
                <div class="content">
                  <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>

                  <ul class="social-icon">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <h3>Contact Us</h3>
              <ul class="contactlist">
                <li>
                  <a href="#">
                    <i class="fas fa-map-marker-alt"></i>
                    Address : No 40 Baria Sreet 133/2 NewYork City, NY, United States.
                  </a>
                </li>
                <li>
                  <a href="tel:0(1234)567890">
                    <i class="fas fa-phone-alt"></i>
                    0(1234) 567 890
                  </a>
                </li>
                <li>
                  <a href="emailto:admin@bootexperts.com">
                    <i class="fas fa-envelope"></i>
                    admin@bootexperts.com
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-md-4 col-lg-2">
              <h3>Information</h3>
              <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Store</a></li>
              </ul>
            </div>
            <div class="col-md-4 col-lg-2">
              <h3>Collecions</h3>
              <ul>
                <li><a href="#">Living Room</a></li>
                <li><a href="#">Bathroom</a></li>
                <li><a href="#">Kitchen</a></li>
                <li><a href="#">Bed Room</a></li>
              </ul>
            </div>
            <div class="col-md-4 col-lg-2">
              <h3>My Account</h3>
              <ul>
                <li><a href="#">My Account</a></li>
                <li><a href="#">Order History</a></li>
                <li><a href="#">Wish List</a></li>
                <li><a href="#">News Letter</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="border-top border-top-color">
        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-6">
              <div class="copyright">
                <p>Copyright © <span>BITM</span> 2022. All rights reserved</p>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6">
              <div class="payment">
                <img src="{{asset('')}}frontend/images/payment.png" alt="payment">
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  
  
      <div id="jsScroll" class="scroll" onclick="scrollToTop();">
        <i class="fa fa-angle-up"></i>
      </div>
      <script src="{{asset('')}}frontend/js/bootstrap.bundle.min.js"></script>
      <script src="{{asset('')}}frontend/js/jquery-3.6.0.min.js"></script>
      <script src="{{asset('')}}frontend/js/jquery-migrate-3.3.2.min.js"></script>
      <script src="{{asset('')}}frontend/js/jquery-ui.js"></script>
      <script src="{{asset('')}}frontend/js/slick.min.js"></script>
      <script src="{{asset('')}}frontend/js/script.js"></script>
  </body>
  </html>