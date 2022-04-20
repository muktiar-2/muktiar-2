<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Riode - Ultimate eCommerce Template</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Riode - Ultimate eCommerce Template">
    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/icons/favicon.png">

    <script>
        WebFontConfig = {
            google: { families: [ 'Poppins:400,500,600,700' ] }
        };
        ( function ( d ) {
            var wf = d.createElement( 'script' ), s = d.scripts[ 0 ];
            wf.src = 'js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore( wf, s );
        } )( document );
    </script>


    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/html_theme/html_files/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/html_theme/html_files/vendor/animate/animate.min.css">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/html_theme/html_files/vendor/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/html_theme/html_files/vendor/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/html_theme/html_files/vendor/photoswipe/photoswipe.min.css">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/html_theme/html_files/vendor/photoswipe/default-skin/default-skin.min.css">

    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/html_theme/html_files/vendor/sticky-icon/stickyicon.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/html_theme/html_files/css/style.min.css">
</head>

<body>
<div class="page-wrapper">
    <header class="header header-border">
        <div class="header-top">
            <div class="container">
                <div class="header-left">
                    <p class="welcome-msg">Welcome to Riode store message or remove it!</p>
                </div>
                <div class="header-right">
                    <div class="dropdown">
                        <a href="#currency">USD</a>
                        <ul class="dropdown-box">
                            <li><a href="#USD">USD</a></li>
                            <li><a href="#EUR">EUR</a></li>
                        </ul>
                    </div>
                    <!-- End DropDown Menu -->
                    <div class="dropdown ml-5">
                        <a href="#language">ENG</a>
                        <ul class="dropdown-box">
                            <li>
                                <a href="#USD">ENG</a>
                            </li>
                            <li>
                                <a href="#EUR">FRH</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End DropDown Menu -->
                    <span class="divider"></span>
                    <a href="contact-us.html" class="contact d-lg-show"><i class="d-icon-map"></i>Contact</a>
                    <a href="#" class="help d-lg-show"><i class="d-icon-info"></i> Need Help</a>
                    <a class="login-link" href="ajax/login.html" data-toggle="login-modal"><i
                                class="d-icon-user"></i>Sign in</a>
                    <span class="delimiter">/</span>
                    <a class="register-link ml-0" href="ajax/login.html" data-toggle="login-modal">Register</a>
                    <!-- End of Login -->
                </div>
            </div>
        </div>
        <!-- End HeaderTop -->
        <div class="header-middle sticky-header fix-top sticky-content">
            <div class="container">
                <div class="header-left">
                    <a href="#" class="mobile-menu-toggle">
                        <i class="d-icon-bars2"></i>
                    </a>
                    <a href="demo1.html" class="logo">
                        <img src="images/logo.png" alt="logo" width="153" height="44" />
                    </a>
                    <!-- End Logo -->

                    <div class="header-search hs-simple">
                        <form action="#" class="input-wrapper">
                            <input type="text" class="form-control" name="search" autocomplete="off"
                                   placeholder="Search..." required />
                            <button class="btn btn-search" type="submit">
                                <i class="d-icon-search"></i>
                            </button>
                        </form>
                    </div>
                    <!-- End Header Search -->
                </div>
                <div class="header-right">
                    <a href="tel:#" class="icon-box icon-box-side">
                        <div class="icon-box-icon mr-0 mr-lg-2">
                            <i class="d-icon-phone"></i>
                        </div>
                        <div class="icon-box-content d-lg-show">
                            <h4 class="icon-box-title">Call Us Now:</h4>
                            <p>0(800) 123-456</p>
                        </div>
                    </a>
                    <span class="divider"></span>
                    <div class="dropdown wishlist wishlist-dropdown off-canvas">
                        <a href="wishlist.html" class="wishlist-toggle">
                            <i class="d-icon-heart"></i>
                        </a>
                        <div class="canvas-overlay"></div>
                        <!-- End Wishlist Toggle -->
                        <div class="dropdown-box scrollable">
                            <div class="canvas-header">
                                <h4 class="canvas-title">wishlist</h4>
                                <a href="#" class="btn btn-dark btn-link btn-icon-right btn-close">close<i
                                            class="d-icon-arrow-right"></i><span class="sr-only">wishlist</span></a>
                            </div>
                            <div class="products scrollable">
                                <div class="product product-wishlist">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="images/wishlist/product-1.jpg" width="100" height="100"
                                                 alt="product" />
                                        </a>
                                        <button class="btn btn-link btn-close">
                                            <i class="fas fa-times"></i><span class="sr-only">Close</span>
                                        </button>
                                    </figure>
                                    <div class="product-detail">
                                        <a href="product.html" class="product-name">Girl's Dark Bag</a>
                                        <div class="price-box">
                                            <span class="product-price">$84.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of wishlist Product -->
                                <div class="product product-wishlist">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="images/wishlist/product-2.jpg" width="100" height="100"
                                                 alt="product" />
                                        </a>
                                        <button class="btn btn-link btn-close">
                                            <i class="fas fa-times"></i><span class="sr-only">Close</span>
                                        </button>
                                    </figure>
                                    <div class="product-detail">
                                        <a href="product.html" class="product-name">Women's Fashional Comforter
                                        </a>
                                        <div class="price-box">
                                            <span class="product-price">$84.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of wishlist Product -->
                                <div class="product product-wishlist">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="images/wishlist/product-3.jpg" width="100" height="100"
                                                 alt="product" />
                                        </a>
                                        <button class="btn btn-link btn-close">
                                            <i class="fas fa-times"></i><span class="sr-only">Close</span>
                                        </button>
                                    </figure>
                                    <div class="product-detail">
                                        <a href="product.html" class="product-name">Wide Knickerbockers</a>
                                        <div class="price-box">
                                            <span class="product-price">$84.00</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- End of wishlist Product -->
                            </div>
                            <a href="wishlist.html" class="btn btn-dark wishlist-btn mt-4"><span>Go To
										Wishlist</span></a>
                            <!-- End of Products  -->
                        </div>
                        <!-- End Dropdown Box -->
                    </div>
                    <span class="divider"></span>
                    <div class="dropdown cart-dropdown type2 off-canvas mr-0 mr-lg-2">
                        <a href="#" class="cart-toggle label-block link">
                            <div class="cart-label d-lg-show">
                                <span class="cart-name">Shopping Cart:</span>
                                <span class="cart-price">$0.00</span>
                            </div>
                            <i class="d-icon-bag"><span class="cart-count">2</span></i>
                        </a>
                        <div class="canvas-overlay"></div>
                        <!-- End Cart Toggle -->
                        <div class="dropdown-box">
                            <div class="canvas-header">
                                <h4 class="canvas-title">Shopping Cart</h4>
                                <a href="#" class="btn btn-dark btn-link btn-icon-right btn-close">close<i
                                            class="d-icon-arrow-right"></i></a>
                            </div>
                            <div class="products scrollable">
                                <div class="product product-cart">
                                    <figure class="product-media">
                                        <a href="#">
                                            <img src="images/cart/product-1.jpg" alt="product" width="80"
                                                 height="88" />
                                        </a>
                                        <button class="btn btn-link btn-close">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </figure>
                                    <div class="product-detail">
                                        <a href="product.html" class="product-name">Riode White Trends</a>
                                        <div class="price-box">
                                            <span class="product-quantity">1</span>
                                            <span class="product-price">$21.00</span>
                                        </div>
                                    </div>

                                </div>
                                <!-- End of Cart Product -->
                                <div class="product product-cart">
                                    <figure class="product-media">
                                        <a href="#">
                                            <img src="images/cart/product-2.jpg" alt="product" width="80"
                                                 height="88" />
                                        </a>
                                        <button class="btn btn-link btn-close">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </figure>
                                    <div class="product-detail">
                                        <a href="product.html" class="product-name">Dark Blue Women’s
                                            Leomora Hat</a>
                                        <div class="price-box">
                                            <span class="product-quantity">1</span>
                                            <span class="product-price">$118.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Cart Product -->
                            </div>
                            <!-- End of Products  -->
                            <div class="cart-total">
                                <label>Subtotal:</label>
                                <span class="price">$139.00</span>
                            </div>
                            <!-- End of Cart Total -->
                            <div class="cart-action">
                                <a href="cart.html" class="btn btn-dark btn-link">View Cart</a>
                                <a href="checkout.html" class="btn btn-dark"><span>Go To Checkout</span></a>
                            </div>
                            <!-- End of Cart Action -->
                        </div>
                        <!-- End Dropdown Box -->
                    </div>
                    <div class="header-search hs-toggle mobile-search">
                        <a href="#" class="search-toggle">
                            <i class="d-icon-search"></i>
                        </a>
                        <form action="#" class="input-wrapper">
                            <input type="text" class="form-control" name="search" autocomplete="off"
                                   placeholder="Search your keyword..." required />
                            <button class="btn btn-search" type="submit">
                                <i class="d-icon-search"></i>
                            </button>
                        </form>
                    </div>
                    <!-- End of Header Search -->
                </div>
            </div>

        </div>

        <div class="header-bottom d-lg-show">
            <div class="container">
                <div class="header-left">
                    <nav class="main-nav">
                        <ul class="menu">
                            <li>
                                <a href="demo1.html">Home</a>
                            </li>
                            <li>
                                <a href="shop.html">Categories</a>
                                <div class="megamenu">
                                    <div class="row">
                                        <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                            <h4 class="menu-title">Variations 1</h4>
                                            <ul>
                                                <li><a href="shop-classic-filter.html">Classic Filter</a></li>
                                                <li><a href="shop-left-toggle-sidebar.html">Left Toggle Filter</a>
                                                </li>
                                                <li><a href="shop-right-toggle-sidebar.html">Right Toggle
                                                        Sidebar</a></li>
                                                <li><a href="shop-horizontal-filter.html">Horizontal Filter </a>
                                                </li>
                                                <li><a href="shop-navigation-filter.html">Navigation Filter</a></li>

                                                <li><a href="shop-off-canvas-filter.html">Off-Canvas Filter </a>
                                                </li>
                                                <li><a href="shop-top-banner.html">Top Banner</a></li>
                                                <li><a href="shop-inner-top-banner.html">Inner Top Banner</a></li>
                                                <li><a href="shop-with-bottom-block.html">With Bottom Block</a></li>
                                                <li><a href="shop-category-in-page-header.html">Category In Page
                                                        Header</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                            <h4 class="menu-title">Variations 2</h4>
                                            <ul>
                                                <li><a href="shop-grid-3cols.html">3 Columns Mode</a></li>
                                                <li><a href="shop-grid-4cols.html">4 Columns Mode</a></li>
                                                <li><a href="shop-grid-5cols.html">5 Columns Mode</a></li>
                                                <li><a href="shop-grid-6cols.html">6 Columns Mode</a></li>
                                                <li><a href="shop-grid-7cols.html">7 Columns Mode</a></li>
                                                <li><a href="shop-grid-8cols.html">8 Columns Mode</a></li>
                                                <li><a href="shop-list-mode.html">List Mode</a></li>
                                                <li><a href="shop-pagination.html">Pagination</a></li>
                                                <li><a href="shop-infinite-ajaxscroll.html">Infinite Ajaxscroll </a>
                                                </li>
                                                <li><a href="shop-loadmore-button.html">Loadmore Button</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                            <h4 class="menu-title">Variations 3</h4>
                                            <ul>
                                                <li><a href="shop-category-grid-shop.html">Category Grid Shop</a>
                                                </li>
                                                <li><a href="shop-category+products.html">Category + Products</a>
                                                </li>
                                                <li><a href="shop-default-1.html">Shop Default 1 </a></li>
                                                <li><a href="shop-default-2.html">Shop Default 2</a>
                                                </li>
                                                <li><a href="shop-default-3.html">Shop Default 3</a>
                                                </li>
                                                <li><a href="shop-default-4.html">Shop Default 4</a>
                                                </li>
                                                <li><a href="shop-default-5.html">Shop Default 5</a>
                                                </li>
                                                <li><a href="shop-default-6.html">Shop Default 6</a>
                                                </li>
                                                <li><a href="shop-default-7.html">Shop Default 7</a>
                                                </li>
                                                <li><a href="shop-default-8.html">Shop Default 8</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div
                                                class="col-6 col-sm-4 col-md-4 col-lg-3 menu-banner menu-banner1 banner banner-fixed">
                                            <figure>
                                                <img src="images/menu/banner-1.jpg" alt="Menu banner" width="221"
                                                     height="330" />
                                            </figure>
                                            <div class="banner-content y-50">
                                                <h4 class="banner-subtitle font-weight-bold text-primary ls-m">Sale.
                                                </h4>
                                                <h3 class="banner-title font-weight-bold"><span
                                                            class="text-uppercase">Up to</span>70% Off</h3>
                                                <a href="shop.html" class="btn btn-link btn-underline">shop now<i
                                                            class="d-icon-arrow-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- End Megamenu -->
                                    </div>
                                </div>
                            </li>
                            <li class="active">
                                <a href="product.html">Products</a>
                                <div class="megamenu">
                                    <div class="row">
                                        <div class="col-6 col-sm-4 col-md-3">
                                            <h4 class="menu-title">Product Pages</h4>
                                            <ul>
                                                <li><a href="product-simple.html">Simple Product</a></li>
                                                <li><a href="product-featured.html">Featured &amp; On Sale</a></li>
                                                <li><a href="product.html">Variable Product</a></li>
                                                <li><a href="product-variable-swatch.html">Variation Swatch
                                                        Product</a></li>
                                                <li><a href="product-grouped.html">Grouped Product </a></li>
                                                <li><a href="product-external.html">External Product</a></li>
                                                <li><a href="product-in-stock.html">In Stock Product</a></li>
                                                <li><a href="product-out-stock.html">Out of Stock Product</a></li>
                                                <li><a href="product-upsell.html">Upsell Products</a></li>
                                                <li><a href="product-cross-sell.html">Cross Sell Products</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-3">
                                            <h4 class="menu-title">Product Layouts</h4>
                                            <ul>
                                                <li><a href="product-vertical.html">Vertical Thumb</a></li>
                                                <li><a href="product-horizontal.html">Horizontal Thumb</a></li>
                                                <li><a href="product-gallery.html">Gallery Type</a></li>
                                                <li><a href="product-grid.html">Grid Images</a></li>
                                                <li><a href="product-masonry.html">Masonry Images</a></li>
                                                <li><a href="product-sticky.html">Sticky Info</a></li>
                                                <li><a href="product-sticky-both.html">Left & Right Sticky</a></li>
                                                <li><a href="product-left-sidebar.html">With Left Sidebar</a></li>
                                                <li><a href="product-right-sidebar.html">With Right Sidebar</a></li>
                                                <li><a href="product-full.html">Full Width Layout </a></li>
                                            </ul>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-3">
                                            <h4 class="menu-title">Product Features</h4>
                                            <ul>
                                                <li><a href="product-sale.html">Sale Countdown</a></li>
                                                <li><a href="product-hurryup.html">Hurry Up Notification </a></li>
                                                <li><a href="product-attribute-guide.html">Attribute Guide </a></li>
                                                <li><a href="product-sticky-cart.html">Add Cart Sticky</a></li>
                                                <li><a href="product-thumbnail-label.html">Labels on Thumbnail</a>
                                                </li>
                                                <li><a href="product-more-description.html">More Description
                                                        Tabs</a></li>
                                                <li><a href="product-accordion-data.html">Data In Accordion</a></li>
                                                <li><a href="product-tabinside.html">Data Inside</a></li>
                                                <li><a href="product-video.html">Video Thumbnail </a></li>
                                                <li><a href="product-360-degree.html">360 Degree Thumbnail </a></li>
                                            </ul>
                                        </div>
                                        <div
                                                class="col-6 col-sm-4 col-md-3 menu-banner menu-banner2 banner banner-fixed">
                                            <figure>
                                                <img src="images/menu/banner-2.jpg" alt="Menu banner" width="221"
                                                     height="330" />
                                            </figure>
                                            <div class="banner-content x-50 text-center">
                                                <h3 class="banner-title text-white text-uppercase">Sunglasses</h3>
                                                <h4 class="banner-subtitle font-weight-bold text-white mb-0">$23.00
                                                    -
                                                    $120.00</h4>
                                            </div>
                                        </div>
                                        <!-- End MegaMenu -->
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#">Pages</a>
                                <ul>
                                    <li><a href="about-us.html">About</a></li>
                                    <li><a href="contact-us.html">Contact Us</a></li>
                                    <li><a href="account.html">Login</a></li>
                                    <li><a href="faq.html">FAQs</a></li>
                                    <li><a href="error-404.html">Error 404</a>
                                        <ul>
                                            <li><a href="error-404.html">Error 404-1</a></li>
                                            <li><a href="error-404-1.html">Error 404-2</a></li>
                                            <li><a href="error-404-2.html">Error 404-3</a></li>
                                            <li><a href="error-404-3.html">Error 404-4</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                </ul>
                            </li>
                            <li class="d-xl-show">
                                <a href="element.html">Elements</a>
                                <div class="megamenu">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h4 class="menu-title">Elements 1</h4>
                                            <ul>
                                                <li><a href="element-accordions.html">Accordions</a></li>
                                                <li><a href="element-alerts.html">Alert &amp; Notification</a></li>

                                                <li><a href="element-banner-effect.html">Banner Effect

                                                    </a></li>
                                                <li><a href="element-banner.html">Banner
                                                    </a></li>
                                                <li><a href="element-blog-posts.html">Blog Posts</a></li>
                                                <li><a href="element-breadcrumb.html">Breadcrumb
                                                    </a></li>
                                                <li><a href="element-buttons.html">Buttons</a></li>
                                                <li><a href="element-cta.html">Call to Action</a></li>
                                                <li><a href="element-countdown.html">Countdown
                                                    </a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <h4 class="menu-title">Elements 2</h4>
                                            <ul>
                                                <li><a href="element-counter.html">Counter </a></li>
                                                <li><a href="element-creative-grid.html">Creative Grid

                                                    </a></li>
                                                <li><a href="element-animation.html">Entrance Effect

                                                    </a></li>
                                                <li><a href="element-floating.html">Floating

                                                    </a></li>
                                                <li><a href="element-hotspot.html">Hotspot

                                                    </a></li>
                                                <li><a href="element-icon-boxes.html">Icon Boxes</a></li>
                                                <li><a href="element-icons.html">Icons</a></li>
                                                <li><a href="element-image-box.html">Image box

                                                    </a></li>
                                                <li><a href="element-instagrams.html">Instagrams</a></li>

                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <h4 class="menu-title">Elements 3</h4>
                                            <ul>

                                                <li><a href="element-categories.html">Product Category</a></li>
                                                <li><a href="element-products.html">Products</a></li>
                                                <li><a href="element-product-banner.html">Products + Banner

                                                    </a></li>
                                                <li><a href="element-product-grid.html">Products + Grid

                                                    </a></li>
                                                <li><a href="element-product-single.html">Product Single

                                                    </a>
                                                </li>
                                                <li><a href="element-product-tab.html">Products + Tab

                                                    </a></li>
                                                <li><a href="element-single-product.html">Single Product

                                                    </a></li>
                                                <li><a href="element-slider.html">Slider

                                                    </a></li>
                                                <li><a href="element-social-link.html">Social Icons </a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <h4 class="menu-title">Elements 4</h4>
                                            <ul>
                                                <li><a href="element-subcategory.html">Subcategory

                                                    </a></li>
                                                <li><a href="element-svg-floating.html">Svg Floating

                                                    </a></li>
                                                <li><a href="element-tabs.html">Tabs</a></li>
                                                <li><a href="element-testimonials.html">Testimonials

                                                    </a></li>
                                                <li><a href="element-titles.html">Title</a></li>
                                                <li><a href="element-typography.html">Typography</a></li>
                                                <li><a href="element-vendor.html">Vendor

                                                    </a></li>
                                                <li><a href="element-video.html">Video

                                                    </a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <a href="blog-classic.html">Blog</a>
                                <ul>
                                    <li><a href="blog-classic.html">Classic</a></li>
                                    <li><a href="blog-listing.html">Listing</a></li>
                                    <li>
                                        <a href="#">Grid</a>
                                        <ul>
                                            <li><a href="blog-grid-2col.html">Grid 2 columns</a></li>
                                            <li><a href="blog-grid-3col.html">Grid 3 columns</a></li>
                                            <li><a href="blog-grid-4col.html">Grid 4 columns</a></li>
                                            <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Masonry</a>
                                        <ul>
                                            <li><a href="blog-masonry-2col.html">Masonry 2 columns</a></li>
                                            <li><a href="blog-masonry-3col.html">Masonry 3 columns</a></li>
                                            <li><a href="blog-masonry-4col.html">Masonry 4 columns</a></li>
                                            <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Mask</a>
                                        <ul>
                                            <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                            <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="post-single.html">Single Post</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="about-us.html">About Us</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="header-right">
                    <a href="#"><i class="d-icon-card"></i>Special Offers</a>
                    <a href="https://d-themes.com/buynow/riodehtml" class="ml-6">Buy Riode!</a>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->
    <main class="main mt-6 single-product">
        <div class="page-content mb-10 pb-6">
            <div class="container">
                <div class="product product-single row mb-7">
                    <div class="col-md-6 sticky-sidebar-wrapper">
                        <div class="product-gallery pg-vertical sticky-sidebar"
                             data-sticky-options="{'minWidth': 767}">
                            <div
                                    class="product-single-carousel owl-carousel owl-theme owl-nav-inner row cols-1 gutter-no">
                                <figure class="product-image">
                                    <img src="images/product/product-1-1-580x652.jpg"
                                         data-zoom-image="images/product/product-1-1-800x900.jpg"
                                         alt="Women's Brown Leather Backpacks" width="800" height="900">
                                </figure>
                                <figure class="product-image">
                                    <img src="images/product/product-1-2-580x652.jpg"
                                         data-zoom-image="images/product/product-1-2-800x900.jpg"
                                         alt="Women's Brown Leather Backpacks" width="800" height="900">
                                </figure>
                                <figure class="product-image">
                                    <img src="images/product/product-1-3-580x652.jpg"
                                         data-zoom-image="images/product/product-1-3-800x900.jpg"
                                         alt="Women's Brown Leather Backpacks" width="800" height="900">
                                </figure>
                                <figure class="product-image">
                                    <img src="images/product/product-1-4-580x652.jpg"
                                         data-zoom-image="images/product/product-1-4-800x900.jpg"
                                         alt="Women's Brown Leather Backpacks" width="800" height="900">
                                </figure>
                            </div>
                            <div class="product-thumbs-wrap">
                                <div class="product-thumbs">
                                    <div class="product-thumb active">
                                        <img src="images/product/product-1-1-109x122.jpg" alt="product thumbnail"
                                             width="109" height="122">
                                    </div>
                                    <div class="product-thumb">
                                        <img src="images/product/product-1-2-109x122.jpg" alt="product thumbnail"
                                             width="109" height="122">
                                    </div>
                                    <div class="product-thumb">
                                        <img src="images/product/product-1-3-109x122.jpg" alt="product thumbnail"
                                             width="109" height="122">
                                    </div>
                                    <div class="product-thumb">
                                        <img src="images/product/product-1-4-109x122.jpg" alt="product thumbnail"
                                             width="109" height="122">
                                    </div>
                                </div>
                                <button class="thumb-up disabled"><i class="fas fa-chevron-left"></i></button>
                                <button class="thumb-down disabled"><i class="fas fa-chevron-right"></i></button>
                            </div>
                            <div class="product-label-group">
                                <label class="product-label label-new">new</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-details">
                            <div class="product-navigation">
                                <ul class="breadcrumb breadcrumb-lg">
                                    <li><a href="demo1.html"><i class="d-icon-home"></i></a></li>
                                    <li><a href="#" class="active">Products</a></li>
                                    <li>Detail</li>
                                </ul>

                                <ul class="product-nav">
                                    <li class="product-nav-prev">
                                        <a href="#">
                                            <i class="d-icon-arrow-left"></i> Prev
                                            <span class="product-nav-popup">
													<img src="images/product/product-thumb-prev.jpg"
                                                         alt="product thumbnail" width="110" height="123">
													<span class="product-name">Sed egtas Dnte Comfort</span>
												</span>
                                        </a>
                                    </li>
                                    <li class="product-nav-next">
                                        <a href="#">
                                            Next <i class="d-icon-arrow-right"></i>
                                            <span class="product-nav-popup">
													<img src="images/product/product-thumb-next.jpg"
                                                         alt="product thumbnail" width="110" height="123">
													<span class="product-name">Sed egtas Dnte Comfort</span>
												</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <h1 class="product-name">Converse Training Shoes</h1>
                            <div class="product-meta">
                                SKU: <span class="product-sku">12345670</span>
                                BRAND: <span class="product-brand">The Northland</span>
                            </div>
                            <div class="product-price">$113.00</div>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width:80%"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#product-tab-reviews" class="link-to-tab rating-reviews">( 11 reviews )</a>
                            </div>
                            <p class="product-short-desc">Sed egestas, ante et vulputate volutpat, eros pede semper
                                est, vitae luctus metus libero eu augue. Morbi purus liberpuro ate vol faucibus
                                adipiscing.</p>
                            <div class="product-form product-variations product-color">
                                <label>Color:</label>
                                <div class="select-box">
                                    <select name="color" class="form-control">
                                        <option value="" selected="selected">Choose an Option</option>
                                        <option value="white">White</option>
                                        <option value="black">Black</option>
                                        <option value="brown">Brown</option>
                                        <option value="red">Red</option>
                                        <option value="green">Green</option>
                                        <option value="yellow">Yellow</option>
                                    </select>
                                </div>
                            </div>
                            <div class="product-form product-variations product-size">
                                <label>Size:</label>
                                <div class="product-form-group">
                                    <div class="select-box">
                                        <select name="size" class="form-control">
                                            <option value="" selected="selected">Choose an Option</option>
                                            <option value="s">Small</option>
                                            <option value="m">Medium</option>
                                            <option value="l">Large</option>
                                            <option value="xl">Extra Large</option>
                                        </select>
                                    </div>
                                    <a href="#" class="product-variation-clean" style="display: none;">Clean All</a>
                                </div>
                            </div>
                            <div class="product-variation-price">
                                <span>$239.00</span>
                            </div>

                            <hr class="product-divider">

                            <div class="product-form product-qty">
                                <div class="product-form-group">
                                    <div class="input-group mr-2">
                                        <button class="quantity-minus d-icon-minus"></button>
                                        <input class="quantity form-control" type="number" min="1" max="1000000">
                                        <button class="quantity-plus d-icon-plus"></button>
                                    </div>
                                    <button
                                            class="btn-product btn-cart text-normal ls-normal font-weight-semi-bold"><i
                                                class="d-icon-bag"></i>Add to
                                        Cart</button>
                                </div>
                            </div>

                            <hr class="product-divider mb-3">

                            <div class="product-footer">
                                <div class="social-links mr-4">
                                    <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                                    <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                                    <a href="#" class="social-link social-pinterest fab fa-pinterest-p"></a>
                                </div>
                                <span class="divider d-lg-show"></span>
                                <a href="#" class="btn-product btn-wishlist mr-6"><i class="d-icon-heart"></i>Add to
                                    wishlist</a>
                                <a href="#" class="btn-product btn-compare"><i class="d-icon-compare"></i>Add
                                    to
                                    compare</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab tab-nav-simple product-tabs">
                    <ul class="nav nav-tabs justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#product-tab-description">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#product-tab-additional">Additional information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#product-tab-size-guide">Size Guide</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#product-tab-reviews">Reviews (2)</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active in" id="product-tab-description">
                            <div class="row mt-6">
                                <div class="col-md-6">
                                    <h5 class="description-title mb-4 font-weight-semi-bold ls-m">Features</h5>
                                    <p class="mb-2">
                                        Praesent id enim sit amet.Tdio vulputate eleifend in in tortor.
                                        ellus massa. siti iMassa ristique sit amet condim vel, facilisis
                                        quimequistiqutiqu amet condim Dilisis Facilisis quis sapien. Praesent id
                                        enim sit amet.
                                    </p>
                                    <ul class="mb-8">
                                        <li>Praesent id enim sit amet.Tdio vulputate</li>
                                        <li>Eleifend in in tortor. ellus massa.Dristique sitii</li>
                                        <li>Massa ristique sit amet condim vel</li>
                                        <li>Dilisis Facilisis quis sapien. Praesent id enim sit amet</li>
                                    </ul>
                                    <h5 class="description-title mb-3 font-weight-semi-bold ls-m">Specifications
                                    </h5>
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <th class="font-weight-semi-bold text-dark pl-0">Material</th>
                                            <td class="pl-4">Praesent id enim sit amet.Tdio</td>
                                        </tr>
                                        <tr>
                                            <th class="font-weight-semi-bold text-dark pl-0">Claimed Size</th>
                                            <td class="pl-4">Praesent id enim sit</td>
                                        </tr>
                                        <tr>
                                            <th class="font-weight-semi-bold text-dark pl-0">Recommended Use
                                            </th>
                                            <td class="pl-4">Praesent id enim sit amet.Tdio vulputate eleifend
                                                in in tortor. ellus massa. siti</td>
                                        </tr>
                                        <tr>
                                            <th class="font-weight-semi-bold text-dark border-no pl-0">
                                                Manufacturer</th>
                                            <td class="border-no pl-4">Praesent id enim</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-6 pl-md-6 pt-4 pt-md-0">
                                    <h5 class="description-title font-weight-semi-bold ls-m mb-5">Video Description
                                    </h5>
                                    <figure class="p-relative d-inline-block mb-2">
                                        <img src="images/product/product.jpg" width="559" height="370"
                                             alt="Product" />
                                        <a class="btn-play btn-iframe" href="video/memory-of-a-woman.mp4">
                                            <i class="d-icon-play-solid"></i>
                                        </a>
                                    </figure>
                                    <div class="icon-box-wrap d-flex flex-wrap">
                                        <div class="icon-box icon-box-side icon-border pt-2 pb-2 mb-4 mr-10">
                                            <div class="icon-box-icon">
                                                <i class="d-icon-lock"></i>
                                            </div>
                                            <div class="icon-box-content">
                                                <h4 class="icon-box-title lh-1 pt-1 ls-s text-normal">2 year
                                                    warranty</h4>
                                                <p>Guarantee with no doubt</p>
                                            </div>
                                        </div>
                                        <div class="divider d-xl-show mr-10"></div>
                                        <div class="icon-box icon-box-side icon-border pt-2 pb-2 mb-4">
                                            <div class="icon-box-icon">
                                                <i class="d-icon-truck"></i>
                                            </div>
                                            <div class="icon-box-content">
                                                <h4 class="icon-box-title lh-1 pt-1 ls-s text-normal">Free shipping
                                                </h4>
                                                <p>On orders over $50.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="product-tab-additional">
                            <ul class="list-none">
                                <li><label>Brands:</label>
                                    <p>SkillStar, SLS</p>
                                </li>
                                <li><label>Color:</label>
                                    <p>Blue, Brown</p>
                                </li>
                                <li><label>Size:</label>
                                    <p>Large, Medium, Small</p>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane " id="product-tab-size-guide">
                            <figure class="size-image mt-4 mb-4">
                                <img src="images/product/size_guide.png" alt="Size Guide Image" width="217"
                                     height="398">
                            </figure>
                            <figure class="size-table mt-4 mb-4">
                                <table>
                                    <thead>
                                    <tr>
                                        <th>SIZE</th>
                                        <th>CHEST(IN.)</th>
                                        <th>WEIST(IN.)</th>
                                        <th>HIPS(IN.)</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>XS</th>
                                        <td>34-36</td>
                                        <td>27-29</td>
                                        <td>34.5-36.5</td>
                                    </tr>
                                    <tr>
                                        <th>S</th>
                                        <td>36-38</td>
                                        <td>29-31</td>
                                        <td>36.5-38.5</td>
                                    </tr>
                                    <tr>
                                        <th>M</th>
                                        <td>38-40</td>
                                        <td>31-33</td>
                                        <td>38.5-40.5</td>
                                    </tr>
                                    <tr>
                                        <th>L</th>
                                        <td>40-42</td>
                                        <td>33-36</td>
                                        <td>40.5-43.5</td>
                                    </tr>
                                    <tr>
                                        <th>XL</th>
                                        <td>42-45</td>
                                        <td>36-40</td>
                                        <td>43.5-47.5</td>
                                    </tr>
                                    <tr>
                                        <th>XXL</th>
                                        <td>45-48</td>
                                        <td>40-44</td>
                                        <td>47.5-51.5</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </figure>
                        </div>
                        <div class="tab-pane" id="product-tab-reviews">
                            <div class="row">
                                <div class="col-lg-4 mb-6">
                                    <div class="avg-rating-container">
                                        <mark>5.0</mark>
                                        <div class="avg-rating">
                                            <span class="avg-rating-title">Average Rating</span>
                                            <div class="ratings-container mb-0">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:100%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <span class="rating-reviews">(2 Reviews)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ratings-list mb-2">
                                        <div class="ratings-item">
                                            <div class="ratings-container mb-0">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:100%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>
                                            <div class="rating-percent">
                                                <span style="width:100%;"></span>
                                            </div>
                                            <div class="progress-value">100%</div>
                                        </div>
                                        <div class="ratings-item">
                                            <div class="ratings-container mb-0">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:80%"></span>
                                                    <span class="tooltiptext tooltip-top">4.00</span>
                                                </div>
                                            </div>
                                            <div class="rating-percent">
                                                <span style="width:0%;"></span>
                                            </div>
                                            <div class="progress-value">0%</div>
                                        </div>
                                        <div class="ratings-item">
                                            <div class="ratings-container mb-0">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:60%"></span>
                                                    <span class="tooltiptext tooltip-top">4.00</span>
                                                </div>
                                            </div>
                                            <div class="rating-percent">
                                                <span style="width:0%;"></span>
                                            </div>
                                            <div class="progress-value">0%</div>
                                        </div>
                                        <div class="ratings-item">
                                            <div class="ratings-container mb-0">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:40%"></span>
                                                    <span class="tooltiptext tooltip-top">4.00</span>
                                                </div>
                                            </div>
                                            <div class="rating-percent">
                                                <span style="width:0%;"></span>
                                            </div>
                                            <div class="progress-value">0%</div>
                                        </div>
                                        <div class="ratings-item">
                                            <div class="ratings-container mb-0">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:20%"></span>
                                                    <span class="tooltiptext tooltip-top">4.00</span>
                                                </div>
                                            </div>
                                            <div class="rating-percent">
                                                <span style="width:0%;"></span>
                                            </div>
                                            <div class="progress-value">0%</div>
                                        </div>
                                    </div>
                                    <a class="btn btn-dark btn-rounded submit-review-toggle" href="#">Submit
                                        Review</a>
                                </div>
                                <div class="col-lg-8 comments pt-2 pb-10 border-no">
                                    <nav class="toolbox">
                                        <div class="toolbox-left">
                                            <div class="toolbox-item">
                                                <a href="#" class="btn btn-outline btn-rounded">All Reviews</a>
                                            </div>
                                            <div class="toolbox-item">
                                                <a href="#" class="btn btn-outline btn-rounded">With Images</a>
                                            </div>
                                            <div class="toolbox-item">
                                                <a href="#" class="btn btn-outline btn-rounded">With Videos</a>
                                            </div>
                                        </div>
                                        <div class="toolbox-right">
                                            <div class="toolbox-item toolbox-sort select-box text-dark">
                                                <label>Sort By :</label>
                                                <select name="orderby" class="form-control">
                                                    <option value="">Default Order</option>
                                                    <option value="newest" selected="selected">Newest Reviews
                                                    </option>
                                                    <option value="oldest">Oldest Reviews</option>
                                                    <option value="high_rate">Highest Rating</option>
                                                    <option value="low_rate">Lowest Rating</option>
                                                    <option value="most_likely">Most Likely</option>
                                                    <option value="most_unlikely">Most Unlikely</option>
                                                </select>
                                            </div>
                                        </div>
                                    </nav>
                                    <ul class="comments-list">
                                        <li>
                                            <div class="comment">
                                                <figure class="comment-media">
                                                    <a href="#">
                                                        <img src="images/blog/comments/1.jpg" alt="avatar">
                                                    </a>
                                                </figure>
                                                <div class="comment-body">
                                                    <div class="comment-rating ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width:100%"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                    </div>
                                                    <div class="comment-user">
															<span class="comment-date">by <span
                                                                        class="font-weight-semi-bold text-uppercase text-dark">John
																	Doe</span> on
																<span class="font-weight-semi-bold text-dark">Nov 22,
																	2018</span></span>
                                                    </div>

                                                    <div class="comment-content mb-5">
                                                        <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor
                                                            libero sodales leo,
                                                            eget blandit nunc tortor eu nibh. Nullam mollis. Ut
                                                            justo.
                                                            Suspendisse potenti.
                                                            Sed egestas, ante et vulputate volutpat, eros pede
                                                            semper
                                                            est, vitae luctus metus libero eu augue.</p>
                                                    </div>
                                                    <div class="file-input-wrappers">

                                                        <img class="btn-play btn-img pwsp"
                                                             src="images/products/product1.jpg" width="280"
                                                             height="315" alt="product" />


                                                        <img class="btn-play btn-img pwsp"
                                                             src="images/products/product3.jpg" width="280"
                                                             height="315" alt="product" />

                                                        <a class="btn-play btn-iframe"
                                                           style="background-image: url(images/product/product.jpg);background-size: cover;"
                                                           href="video/memory-of-a-woman.mp4">
                                                            <i class="d-icon-play-solid"></i>
                                                        </a>
                                                    </div>
                                                    <div class="feeling mt-5">
                                                        <button
                                                                class="btn btn-link btn-icon-left btn-slide-up btn-infinite like mr-2">
                                                            <i class="fa fa-thumbs-up"></i>
                                                            Like (<span class="count">0</span>)
                                                        </button>
                                                        <button
                                                                class="btn btn-link btn-icon-left btn-slide-down btn-infinite unlike">
                                                            <i class="fa fa-thumbs-down"></i>
                                                            Unlike (<span class="count">0</span>)
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="comment">
                                                <figure class="comment-media">
                                                    <a href="#">
                                                        <img src="images/blog/comments/2.jpg" alt="avatar">
                                                    </a>
                                                </figure>

                                                <div class="comment-body">
                                                    <div class="comment-rating ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width:100%"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                    </div>
                                                    <div class="comment-user">
															<span class="comment-date">by <span
                                                                        class="font-weight-semi-bold text-uppercase text-dark">John
																	Doe</span> on
																<span class="font-weight-semi-bold text-dark">Nov 22,
																	2018</span></span>
                                                    </div>

                                                    <div class="comment-content">
                                                        <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor
                                                            libero sodales leo, eget blandit nunc tortor eu nibh.
                                                            Nullam
                                                            mollis.
                                                            Ut justo. Suspendisse potenti. Sed egestas, ante et
                                                            vulputate volutpat,
                                                            eros pede semper est, vitae luctus metus libero eu
                                                            augue.
                                                            Morbi purus libero,
                                                            faucibus adipiscing, commodo quis, avida id, est. Sed
                                                            lectus. Praesent elementum
                                                            hendrerit tortor. Sed semper lorem at felis. Vestibulum
                                                            volutpat.</p>
                                                    </div>
                                                    <div class="feeling mt-5">
                                                        <button
                                                                class="btn btn-link btn-icon-left btn-slide-up btn-infinite like mr-2">
                                                            <i class="fa fa-thumbs-up"></i>
                                                            Like (<span class="count">0</span>)
                                                        </button>
                                                        <button
                                                                class="btn btn-link btn-icon-left btn-slide-down btn-infinite unlike">
                                                            <i class="fa fa-thumbs-down"></i>
                                                            Unlike (<span class="count">0</span>)
                                                        </button>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                    </ul>
                                    <nav class="toolbox toolbox-pagination justify-content-end">
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                                <a class="page-link page-link-prev" href="#" aria-label="Previous"
                                                   tabindex="-1" aria-disabled="true">
                                                    <i class="d-icon-arrow-left"></i>Prev
                                                </a>
                                            </li>
                                            <li class="page-item active" aria-current="page"><a class="page-link"
                                                                                                href="#">1</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item page-item-dots"><a class="page-link" href="#">6</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link page-link-next" href="#" aria-label="Next">
                                                    Next<i class="d-icon-arrow-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- End Comments -->
                            <div class="review-form-section">
                                <div class="review-overlay"></div>
                                <div class="review-form-wrapper">
                                    <div class="title-wrapper text-left">
                                        <h3 class="title title-simple text-left text-normal">Add a Review</h3>
                                        <p>Your email address will not be published. Required fields are marked *
                                        </p>
                                    </div>
                                    <div class="rating-form">
                                        <label for="rating" class="text-dark">Your rating * </label>
                                        <span class="rating-stars selected">
												<a class="star-1" href="#">1</a>
												<a class="star-2" href="#">2</a>
												<a class="star-3" href="#">3</a>
												<a class="star-4 active" href="#">4</a>
												<a class="star-5" href="#">5</a>
											</span>

                                        <select name="rating" id="rating" required="" style="display: none;">
                                            <option value="">Rate…</option>
                                            <option value="5">Perfect</option>
                                            <option value="4">Good</option>
                                            <option value="3">Average</option>
                                            <option value="2">Not that bad</option>
                                            <option value="1">Very poor</option>
                                        </select>
                                    </div>
                                    <form action="#">
											<textarea id="reply-message" cols="30" rows="6" class="form-control mb-4"
                                                      placeholder="Comment *" required></textarea>

                                        <div class="review-medias">
                                            <div class="file-input form-control image-input"
                                                 style="background-image: url(images/product/placeholder.png);">
                                                <div class="file-input-wrapper">
                                                </div>
                                                <label class="btn-action btn-upload" title="Upload Media">
                                                    <input type="file" accept=".png, .jpg, .jpeg"
                                                           name="riode_comment_medias_image_1">
                                                </label>
                                                <label class="btn-action btn-remove" title="Remove Media">
                                                </label>
                                            </div>
                                            <div class="file-input form-control image-input"
                                                 style="background-image: url(images/product/placeholder.png);">
                                                <div class="file-input-wrapper">
                                                </div>
                                                <label class=" btn-action btn-upload" title="Upload Media">
                                                    <input type="file" accept=".png, .jpg, .jpeg"
                                                           name="riode_comment_medias_image_2">
                                                </label>
                                                <label class="btn-action btn-remove" title="Remove Media">
                                                </label>
                                            </div>
                                            <div class="file-input form-control video-input"
                                                 style="background-image: url(images/product/placeholder.png);">
                                                <video class="file-input-wrapper" controls=""></video>
                                                <label class="btn-action btn-upload" title="Upload Media">
                                                    <input type="file" accept=".avi, .mp4"
                                                           name="riode_comment_medias_video_1">
                                                </label>
                                                <label class="btn-action btn-remove" title="Remove Media">
                                                </label>
                                            </div>
                                        </div>
                                        <p>Upload images and videos. Maximum count: 3, size: 2MB</p>
                                        <button type="submit" class="btn btn-primary btn-rounded">Submit<i
                                                    class="d-icon-arrow-right"></i></button>
                                    </form>
                                </div>
                            </div>
                            <!-- End Reply -->
                        </div>
                    </div>
                </div>

                <section class="pt-3 mt-10">
                    <h2 class="title justify-content-center">Related Products</h2>

                    <div class="owl-carousel owl-theme owl-nav-full row cols-2 cols-md-3 cols-lg-4"
                         data-owl-options="{
							'items': 5,
							'nav': false,
							'loop': false,
							'dots': true,
							'margin': 20,
							'responsive': {
								'0': {
									'items': 2
								},
								'768': {
									'items': 3
								},
								'992': {
									'items': 4,
									'dots': false,
									'nav': true
								}
							}
						}">
                        <div class="product">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="images/product/featured1.jpg" alt="product" width="280" height="315">
                                </a>
                                <div class="product-label-group">
                                    <label class="product-label label-new">new</label>
                                </div>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                       data-target="#addCartModal" title="Add to cart"><i
                                                class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <div class="product-cat">
                                    <a href="shop-grid-3col.html">Clothing</a>
                                </div>
                                <h3 class="product-name">
                                    <a href="product.html">Solid Pattern in Summer Dress</a>
                                </h3>
                                <div class="product-price">
                                    <span class="price">$140.00</span>
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width:100%"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="#" class="rating-reviews">( <span class="review-count">12</span>
                                        reviews
                                        )</a>
                                </div>
                            </div>
                        </div>
                        <div class="product">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="images/product/featured2.jpg" alt="product" width="280" height="315">
                                </a>
                                <div class="product-label-group">
                                    <label class="product-label label-sale">27% off</label>
                                </div>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                       data-target="#addCartModal" title="Add to cart"><i
                                                class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <div class="product-cat">
                                    <a href="shop-grid-3col.html">Bags & Backpacks</a>
                                </div>
                                <h3 class="product-name">
                                    <a href="product.html">Mackintosh Poket Backpack</a>
                                </h3>
                                <div class="product-price">
                                    <ins class="new-price">$125.99</ins><del class="old-price">$160.99</del>
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width:60%"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="#" class="rating-reviews">( <span class="review-count">6</span> reviews
                                        )</a>
                                </div>
                            </div>
                        </div>
                        <div class="product">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="images/product/featured3.jpg" alt="product" width="280" height="315">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                       data-target="#addCartModal" title="Add to cart"><i
                                                class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <div class="product-cat">
                                    <a href="shop-grid-3col.html">Clothing</a>
                                </div>
                                <h3 class="product-name">
                                    <a href="product.html">Fashionable Orginal Trucker</a>
                                </h3>
                                <div class="product-price">
                                    <span class="price">$78.64</span>
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width:40%"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="#" class="rating-reviews">( <span class="review-count">2</span> reviews
                                        )</a>
                                </div>
                            </div>
                        </div>
                        <div class="product">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="images/product/featured4.jpg" alt="product" width="280" height="315">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                       data-target="#addCartModal" title="Add to cart"><i
                                                class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <div class="product-cat">
                                    <a href="shop-grid-3col.html">Clothing</a>
                                </div>
                                <h3 class="product-name">
                                    <a href="product.html">Women Red Fur Overcoat</a>
                                </h3>
                                <div class="product-price">
                                    <span class="price">$184.00</span>
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width:80%"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="#" class="rating-reviews">( <span class="review-count">6</span> reviews
                                        )</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

    </main>
    <!-- End Main -->
    <footer class="footer">
        <div class="container">
            <div class="footer-top">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <a href="demo1.html" class="logo-footer">
                            <img src="images/logo-footer.png" alt="logo-footer" width="154" height="43" />
                        </a>
                        <!-- End FooterLogo -->
                    </div>
                    <div class="col-lg-9">
                        <div class="widget widget-newsletter form-wrapper form-wrapper-inline">
                            <div class="newsletter-info mx-auto mr-lg-2 ml-lg-4">
                                <h4 class="widget-title">Subscribe to our Newsletter</h4>
                                <p>Get all the latest information, Sales and Offers.</p>
                            </div>
                            <form action="#" class="input-wrapper input-wrapper-inline">
                                <input type="email" class="form-control" name="email" id="email"
                                       placeholder="Email address here..." required />
                                <button class="btn btn-primary btn-rounded btn-md ml-2" type="submit">subscribe<i
                                            class="d-icon-arrow-right"></i></button>
                            </form>
                        </div>
                        <!-- End Newsletter -->
                    </div>
                </div>
            </div>
            <!-- End FooterTop -->
            <div class="footer-middle">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="widget widget-info">
                            <h4 class="widget-title">Contact Info</h4>
                            <ul class="widget-body">
                                <li>
                                    <label>Phone:</label>
                                    <a href="tel:#">Toll Free (123) 456-7890</a>
                                </li>
                                <li>
                                    <label>Email:</label>
                                    <a href="mailto:mail@riode.com">mail@riode.com</a>
                                </li>
                                <li>
                                    <label>Address:</label>
                                    <a href="#">123 Street Name, City, England</a>
                                </li>
                                <li>
                                    <label>WORKING DAYS / HOURS:</label>
                                </li>
                                <li>
                                    <a href="#">Mon - Sun / 9:00 AM - 8:00 PM</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Widget -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="widget ml-lg-4">
                            <h4 class="widget-title">My Account</h4>
                            <ul class="widget-body">
                                <li>
                                    <a href="about-us.html">About Us</a>
                                </li>
                                <li>
                                    <a href="#">Order History</a>
                                </li>
                                <li>
                                    <a href="#">Returns</a>
                                </li>
                                <li>
                                    <a href="#">Custom Service</a>
                                </li>
                                <li>
                                    <a href="#">Terms &amp; Condition</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Widget -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="widget ml-lg-4">
                            <h4 class="widget-title">Contact Info</h4>
                            <ul class="widget-body">
                                <li>
                                    <a href="#">Sign in</a>
                                </li>
                                <li>
                                    <a href="cart.html">View Cart</a>
                                </li>
                                <li>
                                    <a href="wishlist.html">My Wishlist</a>
                                </li>
                                <li>
                                    <a href="#">Track My Order</a>
                                </li>
                                <li>
                                    <a href="#">Help</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Widget -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="widget widget-instagram">
                            <h4 class="widget-title">Instagram</h4>
                            <figure class="widget-body row">
                                <div class="col-3">
                                    <img src="images/instagram/01.jpg" alt="instagram 1" width="64" height="64" />
                                </div>
                                <div class="col-3">
                                    <img src="images/instagram/02.jpg" alt="instagram 2" width="64" height="64" />
                                </div>
                                <div class="col-3">
                                    <img src="images/instagram/03.jpg" alt="instagram 3" width="64" height="64" />
                                </div>
                                <div class="col-3">
                                    <img src="images/instagram/04.jpg" alt="instagram 4" width="64" height="64" />
                                </div>
                                <div class="col-3">
                                    <img src="images/instagram/05.jpg" alt="instagram 5" width="64" height="64" />
                                </div>
                                <div class="col-3">
                                    <img src="images/instagram/06.jpg" alt="instagram 6" width="64" height="64" />
                                </div>
                                <div class="col-3">
                                    <img src="images/instagram/07.jpg" alt="instagram 7" width="64" height="64" />
                                </div>
                                <div class="col-3">
                                    <img src="images/instagram/08.jpg" alt="instagram 8" width="64" height="64" />
                                </div>
                            </figure>
                        </div>
                        <!-- End Instagram -->
                    </div>
                </div>
            </div>
            <!-- End FooterMiddle -->
            <div class="footer-bottom">
                <div class="footer-left">
                    <figure class="payment">
                        <img src="images/payment.png" alt="payment" width="159" height="29" />
                    </figure>
                </div>
                <div class="footer-center">
                    <p class="copyright">Riode eCommerce &copy; 2021. All Rights Reserved</p>
                </div>
                <div class="footer-right">
                    <div class="social-links">
                        <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                        <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                        <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                    </div>
                </div>
            </div>
            <!-- End FooterBottom -->
        </div>
    </footer>
    <!-- End Footer -->
</div>
<!-- Sticky Footer -->
<div class="sticky-footer sticky-content fix-bottom">
    <a href="demo1.html" class="sticky-link">
        <i class="d-icon-home"></i>
        <span>Home</span>
    </a>
    <a href="shop.html" class="sticky-link">
        <i class="d-icon-volume"></i>
        <span>Categories</span>
    </a>
    <a href="wishlist.html" class="sticky-link">
        <i class="d-icon-heart"></i>
        <span>Wishlist</span>
    </a>
    <a href="account.html" class="sticky-link">
        <i class="d-icon-user"></i>
        <span>Account</span>
    </a>
    <div class="header-search hs-toggle dir-up">
        <a href="#" class="search-toggle sticky-link">
            <i class="d-icon-search"></i>
            <span>Search</span>
        </a>
        <form action="#" class="input-wrapper">
            <input type="text" class="form-control" name="search" autocomplete="off"
                   placeholder="Search your keyword..." required />
            <button class="btn btn-search" type="submit">
                <i class="d-icon-search"></i>
            </button>
        </form>
    </div>
</div>
<!-- Scroll Top -->
<a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i class="d-icon-arrow-up"></i></a>

<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe. It's a separate element as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides.
        PhotoSwipe keeps only 3 of them in the DOM to save memory.
        Don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" aria-label="Close (Esc)"></button>
                <button class="pswp__button pswp__button--zoom" aria-label="Zoom in/out"></button>

                <div class="pswp__preloader">
                    <div class="loading-spin"></div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>

            <button class="pswp__button--arrow--left" aria-label="Previous (arrow left)"></button>
            <button class="pswp__button--arrow--right" aria-label="Next (arrow right)"></button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>

<!-- MobileMenu -->
<div class="mobile-menu-wrapper">
    <div class="mobile-menu-overlay">
    </div>
    <!-- End Overlay -->
    <a class="mobile-menu-close" href="#"><i class="d-icon-times"></i></a>
    <!-- End CloseButton -->
    <div class="mobile-menu-container scrollable">
        <form action="#" class="input-wrapper">
            <input type="text" class="form-control" name="search" autocomplete="off"
                   placeholder="Search your keyword..." required />
            <button class="btn btn-search" type="submit">
                <i class="d-icon-search"></i>
            </button>
        </form>
        <!-- End Search Form -->
        <ul class="mobile-menu mmenu-anim">
            <li>
                <a href="demo1.html">Home</a>
            </li>
            <li>
                <a href="shop.html">Categories</a>
                <ul>
                    <li>
                        <a href="#">
                            Variations 1
                        </a>
                        <ul>
                            <li><a href="shop-classic-filter.html">Classic Filter</a></li>
                            <li><a href="shop-left-toggle-sidebar.html">Left Toggle Filter</a></li>
                            <li><a href="shop-right-toggle-sidebar.html">Right Toggle Sidebar</a></li>
                            <li><a href="shop-horizontal-filter.html">Horizontal Filter </a>
                            </li>
                            <li><a href="shop-navigation-filter.html">Navigation Filter</a></li>

                            <li><a href="shop-off-canvas-filter.html">Off-Canvas Filter </a></li>
                            <li><a href="shop-top-banner.html">Top Banner</a></li>
                            <li><a href="shop-inner-top-banner.html">Inner Top Banner</a></li>
                            <li><a href="shop-with-bottom-block.html">With Bottom Block</a></li>
                            <li><a href="shop-category-in-page-header.html">Category In Page Header</a>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            Variations 2
                        </a>
                        <ul>
                            <li><a href="shop-grid-3cols.html">3 Columns Mode</a></li>
                            <li><a href="shop-grid-4cols.html">4 Columns Mode</a></li>
                            <li><a href="shop-grid-5cols.html">5 Columns Mode</a></li>
                            <li><a href="shop-grid-6cols.html">6 Columns Mode</a></li>
                            <li><a href="shop-grid-7cols.html">7 Columns Mode</a></li>
                            <li><a href="shop-grid-8cols.html">8 Columns Mode</a></li>
                            <li><a href="shop-list-mode.html">List Mode</a></li>
                            <li><a href="shop-pagination.html">Pagination</a></li>
                            <li><a href="shop-infinite-ajaxscroll.html">Infinite Ajaxscroll </a></li>
                            <li><a href="shop-loadmore-button.html">Loadmore Button</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            Variations 3
                        </a>
                        <ul>
                            <li><a href="shop-category-grid-shop.html">Category Grid Shop</a></li>
                            <li><a href="shop-category+products.html">Category + Products</a></li>
                            <li><a href="shop-default-1.html">Shop Default 1 </a>
                            </li>
                            <li><a href="shop-default-2.html">Shop Default 2</a></li>
                            <li><a href="shop-default-3.html">Shop Default 3</a></li>
                            <li><a href="shop-default-4.html">Shop Default 4</a></li>
                            <li><a href="shop-default-5.html">Shop Default 5</a></li>
                            <li><a href="shop-default-6.html">Shop Default 6</a></li>
                            <li><a href="shop-default-7.html">Shop Default 7</a></li>
                            <li><a href="shop-default-8.html">Shop Default 8</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="active">Products</a>
                <ul>
                    <li>
                        <a href="#">Product Pages</a>
                        <ul>
                            <li><a href="product-simple.html">Simple Product</a></li>
                            <li><a href="product-featured.html">Featured &amp; On Sale</a></li>
                            <li><a href="product.html">Variable Product</a></li>
                            <li><a href="product-variable-swatch.html">Variation Swatch
                                    Product</a></li>
                            <li><a href="product-grouped.html">Grouped Product </a></li>
                            <li><a href="product-external.html">External Product</a></li>
                            <li><a href="product-in-stock.html">In Stock Product</a></li>
                            <li><a href="product-out-stock.html">Out of Stock Product</a></li>
                            <li><a href="product-upsell.html">Upsell Products</a></li>
                            <li><a href="product-cross-sell.html">Cross Sell Products</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Product Layouts</a>
                        <ul>
                            <li><a href="product-vertical.html">Vertical Thumb</a></li>
                            <li><a href="product-horizontal.html">Horizontal Thumb</a></li>
                            <li><a href="product-gallery.html">Gallery Type</a></li>
                            <li><a href="product-grid.html">Grid Images</a></li>
                            <li><a href="product-masonry.html">Masonry Images</a></li>
                            <li><a href="product-sticky.html">Sticky Info</a></li>
                            <li><a href="product-sticky-both.html">Left & Right Sticky</a></li>
                            <li><a href="product-left-sidebar.html">With Left Sidebar</a></li>
                            <li><a href="product-right-sidebar.html">With Right Sidebar</a></li>
                            <li><a href="product-full.html">Full Width Layout </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Product Features</a>
                        <ul>
                            <li><a href="product-sale.html">Sale Countdown</a></li>
                            <li><a href="product-hurryup.html">Hurry Up Notification </a></li>
                            <li><a href="product-attribute-guide.html">Attribute Guide </a></li>
                            <li><a href="product-sticky-cart.html">Add Cart Sticky</a></li>
                            <li><a href="product-thumbnail-label.html">Labels on Thumbnail</a>
                            </li>
                            <li><a href="product-more-description.html">More Description
                                    Tabs</a></li>
                            <li><a href="product-accordion-data.html">Data In Accordion</a></li>
                            <li><a href="product-tabinside.html">Data Inside</a></li>
                            <li><a href="product-video.html">Video Thumbnail </a>
                            </li>
                            <li><a href="product-360-degree.html">360 Degree Thumbnail </a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Pages</a>
                <ul>
                    <li><a href="about-us.html">About</a></li>
                    <li><a href="contact-us.html">Contact Us</a></li>
                    <li><a href="account.html">Login</a></li>
                    <li><a href="faq.html">FAQs</a></li>
                    <li><a href="error-404.html">Error 404</a>
                        <ul>
                            <li><a href="error-404.html">Error 404-1</a></li>
                            <li><a href="error-404-1.html">Error 404-2</a></li>
                            <li><a href="error-404-2.html">Error 404-3</a></li>
                            <li><a href="error-404-3.html">Error 404-4</a></li>
                        </ul>
                    </li>
                    <li><a href="coming-soon.html">Coming Soon</a></li>
                </ul>
            </li>
            <li>
                <a href="blog-classic.html">Blog</a>
                <ul>
                    <li><a href="blog-classic.html">Classic</a></li>
                    <li><a href="blog-listing.html">Listing</a></li>
                    <li>
                        <a href="#">Grid</a>
                        <ul>
                            <li><a href="blog-grid-2col.html">Grid 2 columns</a></li>
                            <li><a href="blog-grid-3col.html">Grid 3 columns</a></li>
                            <li><a href="blog-grid-4col.html">Grid 4 columns</a></li>
                            <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Masonry</a>
                        <ul>
                            <li><a href="blog-masonry-2col.html">Masonry 2 columns</a></li>
                            <li><a href="blog-masonry-3col.html">Masonry 3 columns</a></li>
                            <li><a href="blog-masonry-4col.html">Masonry 4 columns</a></li>
                            <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Mask</a>
                        <ul>
                            <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                            <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="post-single.html">Single Post</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="element.html">Elements</a>
                <ul>
                    <li>
                        <a href="#">Elements 1</a>
                        <ul>
                            <li><a href="element-accordions.html">Accordions</a></li>
                            <li><a href="element-alerts.html">Alert &amp; Notification</a></li>

                            <li><a href="element-banner-effect.html">Banner Effect

                                </a></li>
                            <li><a href="element-banner.html">Banner
                                </a></li>
                            <li><a href="element-blog-posts.html">Blog Posts</a></li>
                            <li><a href="element-breadcrumb.html">Breadcrumb
                                </a></li>
                            <li><a href="element-buttons.html">Buttons</a></li>
                            <li><a href="element-cta.html">Call to Action</a></li>
                            <li><a href="element-countdown.html">Countdown
                                </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Elements 2</a>
                        <ul>
                            <li><a href="element-counter.html">Counter </a></li>
                            <li><a href="element-creative-grid.html">Creative Grid

                                </a></li>
                            <li><a href="element-animation.html">Entrance Effect

                                </a></li>
                            <li><a href="element-floating.html">Floating

                                </a></li>
                            <li><a href="element-hotspot.html">Hotspot

                                </a></li>
                            <li><a href="element-icon-boxes.html">Icon Boxes</a></li>
                            <li><a href="element-icons.html">Icons</a></li>
                            <li><a href="element-image-box.html">Image box

                                </a></li>
                            <li><a href="element-instagrams.html">Instagrams</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="#">Elements 3</a>
                        <ul>

                            <li><a href="element-categories.html">Product Category</a></li>
                            <li><a href="element-products.html">Products</a></li>
                            <li><a href="element-product-banner.html">Products + Banner

                                </a></li>
                            <li><a href="element-product-grid.html">Products + Grid

                                </a></li>
                            <li><a href="element-product-single.html">Product Single

                                </a>
                            </li>
                            <li><a href="element-product-tab.html">Products + Tab

                                </a></li>
                            <li><a href="element-single-product.html">Single Product

                                </a></li>
                            <li><a href="element-slider.html">Slider

                                </a></li>
                            <li><a href="element-social-link.html">Social Icons </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Elements 4</a>
                        <ul>
                            <li><a href="element-subcategory.html">Subcategory

                                </a></li>
                            <li><a href="element-svg-floating.html">Svg Floating

                                </a></li>
                            <li><a href="element-tabs.html">Tabs</a></li>
                            <li><a href="element-testimonials.html">Testimonials

                                </a></li>
                            <li><a href="element-titles.html">Title</a></li>
                            <li><a href="element-typography.html">Typography</a></li>
                            <li><a href="element-vendor.html">Vendor

                                </a></li>
                            <li><a href="element-video.html">Video

                                </a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="https://d-themes.com/buynow/riodehtml">Buy Riode!</a></li>
        </ul>
        <!-- End MobileMenu -->
    </div>
</div>
<!-- sticky icons-->
<div class="sticky-icons-wrapper">
    <div class="sticky-icon-links">
        <ul>
            <li><a href="#" class="demo-toggle"><i class="fas fa-home"></i><span>Demos</span></a></li>
            <li><a href="documentation.html"><i class="fas fa-info-circle"></i><span>Documentation</span></a>
            </li>
            <li><a href="https://themeforest.net/downloads/"><i class="fas fa-star"></i><span>Reviews</span></a>
            </li>
            <li><a href="https://d-themes.com/buynow/riodehtml"><i class="fas fa-shopping-cart"></i><span>Buy
							now!</span></a></li>
        </ul>
    </div>
    <div class="demos-list">
        <div class="demos-overlay"></div>
        <a class="demos-close" href="#"><i class="close-icon"></i></a>
        <div class="demos-content scrollable scrollable-light">
            <h3 class="demos-title">Demos</h3>
            <div class="demos">
            </div>
        </div>
    </div>
</div>
<!-- Plugins JS File -->
<script src="http://127.0.0.1:8000/html_theme/html_files/vendor/jquery/jquery.min.js"></script>
<script src="http://127.0.0.1:8000/html_theme/html_files/vendor/sticky/sticky.min.js"></script>
<script src="http://127.0.0.1:8000/html_theme/html_files/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="http://127.0.0.1:8000/html_theme/html_files/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="http://127.0.0.1:8000/html_theme/html_files/vendor/owl-carousel/owl.carousel.min.js"></script>
<script src="http://127.0.0.1:8000/html_theme/html_files/vendor/elevatezoom/jquery.elevatezoom.min.js"></script>
<script src="http://127.0.0.1:8000/html_theme/html_files/vendor/photoswipe/photoswipe.min.js"></script>
<script src="http://127.0.0.1:8000/html_theme/html_files/vendor/photoswipe/photoswipe-ui-default.min.js"></script>

<!-- Main JS File -->
<script src="http://127.0.0.1:8000/html_theme/html_files/js/main.min.js"></script>
</body>

</html>