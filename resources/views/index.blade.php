<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Expert</title>
    <link rel="shortcut icon" href="{{asset('')}}frontend/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('')}}frontend/css/all.min.css">
    <link rel="stylesheet" href="{{asset('')}}frontend/css/bootstrap.min.css">
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

<section class="slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('')}}frontend/images/slider1.jpg" class="d-block w-100" alt="slider 1">
                <div class="overlay">
                    <div class="container">
                        <h5>New Way to design</h5>
                        <h1>Your Family's Future</h1>
                        <h4> <a href="#">Sale up to 70% all products</a> <span></span></h4>
                        <a href="#" class="shop-now">Shop Now <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('')}}frontend/images/slider2.jpg" class="d-block w-100" alt="slider 2">
                <div class="overlay">
                    <div class="container">
                        <h5>New Way to design</h5>
                        <h1>Your Family's Future</h1>
                        <h4> <a href="#">Sale up to 70% all products</a> <span></span></h4>
                        <a href="#" class="shop-now">Shop Now <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon visually-hidden" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon visually-hidden" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<section class="feature">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="feature-title">
                    <h3>Freature Product</h3>
                    <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="feature-product">
                    <div class="product-item">
                        <ul class="rating-star d-flex justify-content-center">
                            <li>
                                <a href="#">
                                    <i class="far fa-star"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="far fa-star"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="far fa-star"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="far fa-star"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="far fa-star"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="price">
                            <span class="old-price">$170.00</span>
                            <span class="new-price">$155.00</span>
                        </div>
                        <div class="product-name">
                            <h3>
                                <a href="{{asset('')}}frontend/product-details.html">
                                    Fusce aliquam
                                </a>
                            </h3>
                        </div>

                        <div class="product-image">
                            <span class="sale-tag">Sale</span>
                            <a href="#">
                                <img src="{{asset('')}}frontend/images/feature_p1.png" alt="fp1" class="first-image">
                                <img src={{asset('')}}frontend/"images/feature_p1_1.png" alt="fp2" class="second-image">
                            </a>
                            <div class="add-action-hover">
                                <ul>
                                    <li>
                                        <a href="#" title="Add to Wishlist" data-bs-toggle="tooltip" data-bs-placement="top">
                                            <i class="fas fa-heart"></i>
                                        </a>
                                    </li>
                                    <li><a href="#"  data-bs-toggle="tooltip" data-bs-animation="true" data-bs-placement="top" title="Compare">
                                            <i class="fas fa-sync-alt"></i>
                                        </a></li>
                                    <li><a href="#">
                                            <i class="fas fa-eye"></i>
                                        </a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="product-cart-button">
                            <a href="#"> add to cart</a>
                        </div>
                    </div>

                    <div class="product-item">
                        <ul class="rating-star d-flex justify-content-center">
                            <li>
                                <a href="#">
                                    <i class="far fa-star"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="far fa-star"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="far fa-star"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="far fa-star"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="far fa-star"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="price">
                            <span class="old-price">$170.00</span>
                            <span class="new-price">$155.00</span>
                        </div>
                        <div class="product-name">
                            <h3>
                                <a href="{{asset('')}}frontend/product-details.html">
                                    Fusce aliquam
                                </a>
                            </h3>
                        </div>

                        <div class="product-image">
                            <span class="sale-tag">Sale</span>
                            <a href="#">
                                <img src="{{asset('')}}frontend/images/feature_p2.png" alt="fp1" class="first-image">
                                <img src="{{asset('')}}frontend/images/feature_p2_1.png" alt="fp2" class="second-image">
                            </a>
                            <div class="add-action-hover">
                                <ul>
                                    <li><a href="#" data-bs-toggle="tooltip" data-bs-animation="true" data-bs-placement="top" title="Add to Wishlist">
                                            <i class="fas fa-heart"></i>
                                        </a></li>
                                    <li><a href="#"  data-bs-toggle="tooltip" data-bs-animation="true" data-bs-placement="top" title="Compare">
                                            <i class="fas fa-sync-alt"></i>
                                        </a></li>
                                    <li><a href="#">
                                            <i class="fas fa-eye"></i>
                                        </a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="product-cart-button">
                            <a href="#" > add to cart</a>
                        </div>
                    </div>

                    <div class="product-item">
                        <ul class="rating-star d-flex justify-content-center">
                            <li>
                                <a href="#">
                                    <i class="far fa-star"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="far fa-star"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="far fa-star"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="far fa-star"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="far fa-star"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="price">
                            <span class="old-price">$170.00</span>
                            <span class="new-price">$155.00</span>
                        </div>
                        <div class="product-name">
                            <h3>
                                <a href="{{asset('')}}frontend/product-details.html">
                                    Fusce aliquam
                                </a>
                            </h3>
                        </div>

                        <div class="product-image">
                            <span class="sale-tag">Sale</span>
                            <a href="#">
                                <img src="{{asset('')}}frontend/images/feature_p1.png" alt="fp1" class="first-image">
                                <img src="{{asset('')}}frontend/images/feature_p1_1.png" alt="fp2" class="second-image">
                            </a>
                            <div class="add-action-hover">
                                <ul>
                                    <li><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to Wishlist">
                                            <i class="fas fa-heart"></i>
                                        </a></li>
                                    <li><a href="#"  data-bs-toggle="tooltip" data-bs-animation="true" data-bs-placement="top" title="Compare">
                                            <i class="fas fa-sync-alt"></i>
                                        </a></li>
                                    <li><a href="#">
                                            <i class="fas fa-eye"></i>
                                        </a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="product-cart-button">
                            <a href="#"> add to cart</a>
                        </div>
                    </div>

                    <div class="product-item">
                        <ul class="rating-star d-flex justify-content-center">
                            <li>
                                <a href="#">
                                    <i class="far fa-star"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="far fa-star"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="far fa-star"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="far fa-star"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="far fa-star"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="price">
                            <span class="old-price">$170.00</span>
                            <span class="new-price">$155.00</span>
                        </div>
                        <div class="product-name">
                            <h3>
                                <a href="{{asset('')}}frontend/product-details.html">
                                    Fusce aliquam
                                </a>
                            </h3>
                        </div>

                        <div class="product-image">
                            <span class="sale-tag sale-tag-new">New</span>
                            <a href="#">
                                <img src="{{asset('')}}frontend/images/feature_p2.png" alt="fp1" class="first-image">
                                <img src="{{asset('')}}frontend/images/feature_p2_1.png" alt="fp2" class="second-image">
                            </a>
                            <div class="add-action-hover">
                                <ul>
                                    <li><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to Wishlist">
                                            <i class="fas fa-heart"></i>
                                        </a></li>
                                    <li><a href="#"  data-bs-toggle="tooltip" data-bs-animation="true" data-bs-placement="top" title="Compare">
                                            <i class="fas fa-sync-alt"></i>
                                        </a></li>
                                    <li><a href="#">
                                            <i class="fas fa-eye"></i>
                                        </a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="product-cart-button">
                            <a href="#"  > add to cart</a>
                        </div>
                    </div>


                    <div class="product-item">
                        <ul class="rating-star d-flex justify-content-center">
                            <li>
                                <a href="#">
                                    <i class="far fa-star"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="far fa-star"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="far fa-star"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="far fa-star"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="far fa-star"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="price">
                            <span class="old-price">$170.00</span>
                            <span class="new-price">$155.00</span>
                        </div>
                        <div class="product-name">
                            <h3>
                                <a href="{{asset('')}}frontend/product-details.html">
                                    Fusce aliquam
                                </a>
                            </h3>
                        </div>

                        <div class="product-image">
                            <span class="sale-tag">Sale</span>
                            <a href="#">
                                <img src="{{asset('')}}frontend/images/feature_p1.png" alt="fp1" class="first-image">
                                <img src="{{asset('')}}frontend/images/feature_p3.jpg" alt="fp2" class="second-image">
                            </a>
                            <div class="add-action-hover">
                                <ul>
                                    <li><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to Wishlist">
                                            <i class="fas fa-heart"></i>
                                        </a></li>
                                    <li><a href="#"  data-bs-toggle="tooltip" data-bs-animation="true" data-bs-placement="top" title="Compare">
                                            <i class="fas fa-sync-alt"></i>
                                        </a></li>
                                    <li><a href="#">
                                            <i class="fas fa-eye"></i>
                                        </a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="product-cart-button">
                            <a href="#"  > add to cart</a>
                        </div>
                    </div>

                    <div class="product-item">
                        <ul class="rating-star d-flex justify-content-center">
                            <li>
                                <a href="#">
                                    <i class="far fa-star"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="far fa-star"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="far fa-star"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="far fa-star"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="far fa-star"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="price">
                            <span class="old-price">$170.00</span>
                            <span class="new-price">$155.00</span>
                        </div>
                        <div class="product-name">
                            <h3>
                                <a href="{{asset('')}}frontend/product-details.html">
                                    Fusce aliquam
                                </a>
                            </h3>
                        </div>

                        <div class="product-image">
                            <span class="sale-tag">Sale</span>
                            <a href="#">
                                <img src="{{asset('')}}frontend/images/feature_p2.png" alt="fp1" class="first-image">
                                <img src="{{asset('')}}frontend/images/feature_p2_1.png" alt="fp2" class="second-image">
                            </a>
                            <div class="add-action-hover">
                                <ul>
                                    <li><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to Wishlist">
                                            <i class="fas fa-heart"></i>
                                        </a></li>
                                    <li><a href="#"  data-bs-toggle="tooltip" data-bs-animation="true" data-bs-placement="top" title="Compare">
                                            <i class="fas fa-sync-alt"></i>
                                        </a></li>
                                    <li><a href="#">
                                            <i class="fas fa-eye"></i>
                                        </a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="product-cart-button">
                            <a href="#"  > add to cart</a>
                        </div>
                    </div>

                    <div class="product-item">
                        <ul class="rating-star d-flex justify-content-center">
                            <li>
                                <a href="#">
                                    <i class="far fa-star"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="far fa-star"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="far fa-star"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="far fa-star"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="far fa-star"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="price">
                            <span class="old-price">$170.00</span>
                            <span class="new-price">$155.00</span>
                        </div>
                        <div class="product-name">
                            <h3>
                                <a href="{{asset('')}}frontend/product-details.html">
                                    Fusce aliquam
                                </a>
                            </h3>
                        </div>

                        <div class="product-image">
                            <span class="sale-tag">Sale</span>
                            <a href="#">
                                <img src="{{asset('')}}frontend/images/feature_p1.png" alt="fp1" class="first-image">
                                <img src="{{asset('')}}frontend/images/feature_p1_1.png" alt="fp2" class="second-image">
                            </a>
                            <div class="add-action-hover">
                                <ul>
                                    <li><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to Wishlist">
                                            <i class="fas fa-heart"></i>
                                        </a></li>
                                    <li><a href="#"  data-bs-toggle="tooltip" data-bs-animation="true" data-bs-placement="top" title="Compare">
                                            <i class="fas fa-sync-alt"></i>
                                        </a></li>
                                    <li><a href="#">
                                            <i class="fas fa-eye"></i>
                                        </a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="product-cart-button">
                            <a href="#"  > add to cart</a>
                        </div>
                    </div>

                    <div class="product-item">
                        <ul class="rating-star d-flex justify-content-center">
                            <li>
                                <a href="#">
                                    <i class="far fa-star"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="far fa-star"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="far fa-star"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="far fa-star"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="far fa-star"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="price">
                            <span class="old-price">$170.00</span>
                            <span class="new-price">$155.00</span>
                        </div>
                        <div class="product-name">
                            <h3>
                                <a href="{{asset('')}}frontend/product-details.html">
                                    Fusce aliquam
                                </a>
                            </h3>
                        </div>

                        <div class="product-image">
                            <span class="sale-tag sale-tag-new">New</span>
                            <a href="#">
                                <img src="{{asset('')}}frontend/images/feature_p2.png" alt="fp1" class="first-image">
                                <img src="{{asset('')}}frontend/images/feature_p2_1.png" alt="fp2" class="second-image">
                            </a>
                            <div class="add-action-hover">
                                <ul>
                                    <li><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to Wishlist">
                                            <i class="fas fa-heart"></i>
                                        </a></li>
                                    <li><a href="#"  data-bs-toggle="tooltip" data-bs-animation="true" data-bs-placement="top" title="Compare">
                                            <i class="fas fa-sync-alt"></i>
                                        </a></li>
                                    <li><a href="#">
                                            <i class="fas fa-eye"></i>
                                        </a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="product-cart-button">
                            <a href="#"> add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="banner-area d-flex">
    <div class="w-33-33">
        <a href="#" >
            <img src="{{asset('')}}frontend/images/img1_home2.jpg" alt="" class="img-fluid">
        </a>
    </div>
    <div class="w-33-33">
        <a href="#" >
            <img src="{{asset('')}}frontend/images/img2_home2.jpg" alt="" class="img-fluid">
        </a>
    </div>
    <div class="w-33-33">
        <a href="#" >
            <img src="{{asset('')}}frontend/images/img3_home2.jpg" alt="" class="img-fluid">
        </a>
    </div>
</div>

<section class="product-galley py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="sale-product bg-white">
                    <h3>Sale Products</h3>
                    <div class="product-wrap d-flex justify-content-center">
                        <div class="product-content">
                            <div class="single-product-gallery d-flex border-bottom">
                                <img src="{{asset('')}}frontend/images/sale-product-01.jpg" alt="sale product 01" class="first-image border">
                                <img src="{{asset('')}}frontend/images/sale-product-01-1.jpg" alt="sale product 1.1" class="second-image border">
                                <div class="product-details-text">
                                    <h4>
                                        <a href="{{asset('')}}frontend/product-details.html">
                                            Donec non est
                                        </a>
                                    </h4>
                                    <ul class="rating-star d-flex justify-content-left">
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                    <div class="price">
                                        <span class="old-price">$170.00</span>
                                        <span class="new-price">$155.00</span>
                                    </div>
                                </div>
                            </div>

                            <div class="single-product-gallery d-flex border-bottom">
                                <img src="{{asset('')}}frontend/images/sale-product-01.jpg" alt="sale product 01" class="first-image border">
                                <img src="{{asset('')}}frontend/images/sale-product-01-1.jpg" alt="sale product 1.1" class="second-image border">
                                <div class="product-details-text">
                                    <h4>
                                        <a href="#">
                                            Donec non est
                                        </a>
                                    </h4>
                                    <ul class="rating-star d-flex justify-content-left">
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                    <div class="price">
                                        <span class="old-price">$170.00</span>
                                        <span class="new-price">$155.00</span>
                                    </div>
                                </div>
                            </div>


                            <div class="single-product-gallery d-flex">
                                <img src="{{asset('')}}frontend/images/sale-product-01.jpg" alt="sale product 01" class="first-image border">
                                <img src="{{asset('')}}frontend/images/sale-product-01-1.jpg" alt="sale product 1.1" class="second-image border">
                                <div class="product-details-text">
                                    <h4>
                                        <a href="{{asset('')}}frontend/product-details.html">
                                            Donec non est
                                        </a>
                                    </h4>
                                    <ul class="rating-star d-flex justify-content-left">
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                    <div class="price">
                                        <span class="old-price">$170.00</span>
                                        <span class="new-price">$155.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-content">
                            <div class="single-product-gallery d-flex border-bottom">
                                <img src="{{asset('')}}frontend/images/sale-product-01.jpg" alt="sale product 01" class="first-image border">
                                <img src="{{asset('')}}frontend/images/sale-product-01-1.jpg" alt="sale product 1.1" class="second-image border">
                                <div class="product-details-text">
                                    <h4>
                                        <a href="{{asset('')}}frontend/product-details.html">
                                            Donec non est
                                        </a>
                                    </h4>
                                    <ul class="rating-star d-flex justify-content-left">
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                    <div class="price">
                                        <span class="old-price">$170.00</span>
                                        <span class="new-price">$155.00</span>
                                    </div>
                                </div>
                            </div>

                            <div class="single-product-gallery d-flex border-bottom">
                                <img src="{{asset('')}}frontend/images/sale-product-01.jpg" alt="sale product 01" class="first-image border">
                                <img src="{{asset('')}}frontend/images/sale-product-01-1.jpg" alt="sale product 1.1" class="second-image border">
                                <div class="product-details-text">
                                    <h4>
                                        <a href="{{asset('')}}frontend/product-details.html">
                                            Donec non est
                                        </a>
                                    </h4>
                                    <ul class="rating-star d-flex justify-content-left">
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                    <div class="price">
                                        <span class="old-price">$170.00</span>
                                        <span class="new-price">$155.00</span>
                                    </div>
                                </div>
                            </div>


                            <div class="single-product-gallery d-flex">
                                <img src="{{asset('')}}frontend/images/sale-product-01.jpg" alt="sale product 01" class="first-image border">
                                <img src="{{asset('')}}frontend/images/sale-product-01-1.jpg" alt="sale product 1.1" class="second-image border">
                                <div class="product-details-text">
                                    <h4>
                                        <a href="{{asset('')}}frontend/product-details.html">
                                            Donec non est
                                        </a>
                                    </h4>
                                    <ul class="rating-star d-flex justify-content-left">
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                    <div class="price">
                                        <span class="old-price">$170.00</span>
                                        <span class="new-price">$155.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="sale-product bg-white">
                    <h3>New Products</h3>
                    <div class="product-wrap d-flex justify-content-center">
                        <div class="product-content">
                            <div class="single-product-gallery d-flex border-bottom">
                                <img src="{{asset('')}}frontend/images/sale-product-01.jpg" alt="sale product 01" class="first-image border">
                                <img src="{{asset('')}}frontend/images/sale-product-01-1.jpg" alt="sale product 1.1" class="second-image border">
                                <div class="product-details-text">
                                    <h4>
                                        <a href="{{asset('')}}frontend/product-details.html">
                                            Donec non est
                                        </a>
                                    </h4>
                                    <ul class="rating-star d-flex justify-content-left">
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                    <div class="price">
                                        <span class="old-price">$170.00</span>
                                        <span class="new-price">$155.00</span>
                                    </div>
                                </div>
                            </div>

                            <div class="single-product-gallery d-flex border-bottom">
                                <img src="{{asset('')}}frontend/images/sale-product-01.jpg" alt="sale product 01" class="first-image border">
                                <img src="{{asset('')}}frontend/images/sale-product-01-1.jpg" alt="sale product 1.1" class="second-image border">
                                <div class="product-details-text">
                                    <h4>
                                        <a href="{{asset('')}}frontend/product-details.html">
                                            Donec non est
                                        </a>
                                    </h4>
                                    <ul class="rating-star d-flex justify-content-left">
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                    <div class="price">
                                        <span class="old-price">$170.00</span>
                                        <span class="new-price">$155.00</span>
                                    </div>
                                </div>
                            </div>


                            <div class="single-product-gallery d-flex">
                                <img src="{{asset('')}}frontend/images/sale-product-01.jpg" alt="sale product 01" class="first-image border">
                                <img src="{{asset('')}}frontend/images/sale-product-01-1.jpg" alt="sale product 1.1" class="second-image border">
                                <div class="product-details-text">
                                    <h4>
                                        <a href="{{asset('')}}frontend/product-details.html">
                                            Donec non est
                                        </a>
                                    </h4>
                                    <ul class="rating-star d-flex justify-content-left">
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                    <div class="price">
                                        <span class="old-price">$170.00</span>
                                        <span class="new-price">$155.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-content">
                            <div class="single-product-gallery d-flex border-bottom">
                                <img src="{{asset('')}}frontend/images/sale-product-01.jpg" alt="sale product 01" class="first-image border">
                                <img src="{{asset('')}}frontend/images/sale-product-01-1.jpg" alt="sale product 1.1" class="second-image border">
                                <div class="product-details-text">
                                    <h4>
                                        <a href="{{asset('')}}frontend/product-details.html">
                                            Donec non est
                                        </a>
                                    </h4>
                                    <ul class="rating-star d-flex justify-content-left">
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                    <div class="price">
                                        <span class="old-price">$170.00</span>
                                        <span class="new-price">$155.00</span>
                                    </div>
                                </div>
                            </div>

                            <div class="single-product-gallery d-flex border-bottom">
                                <img src="{{asset('')}}frontend/images/sale-product-01.jpg" alt="sale product 01" class="first-image border">
                                <img src="{{asset('')}}frontend/images/sale-product-01-1.jpg" alt="sale product 1.1" class="second-image border">
                                <div class="product-details-text">
                                    <h4>
                                        <a href="{{asset('')}}frontend/product-details.html">
                                            Donec non est
                                        </a>
                                    </h4>
                                    <ul class="rating-star d-flex justify-content-left">
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                    <div class="price">
                                        <span class="old-price">$170.00</span>
                                        <span class="new-price">$155.00</span>
                                    </div>
                                </div>
                            </div>


                            <div class="single-product-gallery d-flex">
                                <img src="{{asset('')}}frontend/images/sale-product-01.jpg" alt="sale product 01" class="first-image border">
                                <img src="{{asset('')}}frontend/images/sale-product-01-1.jpg" alt="sale product 1.1" class="second-image border">
                                <div class="product-details-text">
                                    <h4>
                                        <a href="{{asset('')}}frontend/product-details.html">
                                            Donec non est
                                        </a>
                                    </h4>
                                    <ul class="rating-star d-flex justify-content-left">
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                    <div class="price">
                                        <span class="old-price">$170.00</span>
                                        <span class="new-price">$155.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="sale-product bg-white">
                    <h3>Most Popular</h3>
                    <div class="product-wrap d-flex justify-content-center">
                        <div class="product-content">
                            <div class="single-product-gallery d-flex border-bottom">
                                <img src="{{asset('')}}frontend/images/sale-product-01.jpg" alt="sale product 01" class="first-image border">
                                <img src="{{asset('')}}frontend/images/sale-product-01-1.jpg" alt="sale product 1.1" class="second-image border">
                                <div class="product-details-text">
                                    <h4>
                                        <a href="{{asset('')}}frontend/product-details.html">
                                            Donec non est
                                        </a>
                                    </h4>
                                    <ul class="rating-star d-flex justify-content-left">
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                    <div class="price">
                                        <span class="old-price">$170.00</span>
                                        <span class="new-price">$155.00</span>
                                    </div>
                                </div>
                            </div>

                            <div class="single-product-gallery d-flex border-bottom">
                                <img src="{{asset('')}}frontend/images/sale-product-01.jpg" alt="sale product 01" class="first-image border">
                                <img src="{{asset('')}}frontend/images/sale-product-01-1.jpg" alt="sale product 1.1" class="second-image border">
                                <div class="product-details-text">
                                    <h4>
                                        <a href="{{asset('')}}frontend/product-details.html">
                                            Donec non est
                                        </a>
                                    </h4>
                                    <ul class="rating-star d-flex justify-content-left">
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                    <div class="price">
                                        <span class="old-price">$170.00</span>
                                        <span class="new-price">$155.00</span>
                                    </div>
                                </div>
                            </div>


                            <div class="single-product-gallery d-flex">
                                <img src="{{asset('')}}frontend/images/sale-product-01.jpg" alt="sale product 01" class="first-image border">
                                <img src="{{asset('')}}frontend/images/sale-product-01-1.jpg" alt="sale product 1.1" class="second-image border">
                                <div class="product-details-text">
                                    <h4>
                                        <a href="{{asset('')}}frontend/product-details.html">
                                            Donec non est
                                        </a>
                                    </h4>
                                    <ul class="rating-star d-flex justify-content-left">
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                    <div class="price">
                                        <span class="old-price">$170.00</span>
                                        <span class="new-price">$155.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-content">
                            <div class="single-product-gallery d-flex border-bottom">
                                <img src="{{asset('')}}frontend/images/sale-product-01.jpg" alt="sale product 01" class="first-image border">
                                <img src="{{asset('')}}frontend/images/sale-product-01-1.jpg" alt="sale product 1.1" class="second-image border">
                                <div class="product-details-text">
                                    <h4>
                                        <a href="{{asset('')}}frontend/product-details.html">
                                            Donec non est
                                        </a>
                                    </h4>
                                    <ul class="rating-star d-flex justify-content-left">
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                    <div class="price">
                                        <span class="old-price">$170.00</span>
                                        <span class="new-price">$155.00</span>
                                    </div>
                                </div>
                            </div>

                            <div class="single-product-gallery d-flex border-bottom">
                                <img src="{{asset('')}}frontend/sale-product-01.jpg" alt="sale product 01" class="first-image border">
                                <img src="{{asset('')}}frontend/images/sale-product-01-1.jpg" alt="sale product 1.1" class="second-image border">
                                <div class="product-details-text">
                                    <h4>
                                        <a href="{{asset('')}}frontend/product-details.html">
                                            Donec non est
                                        </a>
                                    </h4>
                                    <ul class="rating-star d-flex justify-content-left">
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                    <div class="price">
                                        <span class="old-price">$170.00</span>
                                        <span class="new-price">$155.00</span>
                                    </div>
                                </div>
                            </div>


                            <div class="single-product-gallery d-flex">
                                <img src="{{asset('')}}frontend/images/sale-product-01.jpg" alt="sale product 01" class="first-image border">
                                <img src="{{asset('')}}frontend/images/sale-product-01-1.jpg" alt="sale product 1.1" class="second-image border">
                                <div class="product-details-text">
                                    <h4>
                                        <a href="{{asset('')}}frontend/product-details.html">
                                            Donec non est
                                        </a>
                                    </h4>
                                    <ul class="rating-star d-flex justify-content-left">
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                    <div class="price">
                                        <span class="old-price">$170.00</span>
                                        <span class="new-price">$155.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="design-gallery py-5 mt-4 shadown">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="design">
                    <div class="design-image  mt-4">
                        <img src="{{asset('')}}frontend/images/design1.jpg" alt="design">
                    </div>
                    <div class="design-text">
                        <h3>cup Premium designs</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="design">
                    <div class="design-image  mt-4">
                        <img src="{{asset('')}}frontend/images/design2.jpg" alt="design">
                    </div>
                    <div class="design-text design-text-2">
                        <h3>CLOCK Premium designs</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="design  mt-4">
                    <div class="design-image">
                        <img src="{{asset('')}}frontend/images/design3.jpg" alt="design">
                    </div>
                    <div class="design-text design-text-3">
                        <h3>CHAIR PREMIUM DESIGNS</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="design  mt-4">
                    <div class="design-image">
                        <img src="{{asset('')}}frontend/images/design4.jpg" alt="design">
                    </div>
                    <div class="design-text design-text-4">
                        <h3>TABLE PREMIUM DESIGNS</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="design  mt-4">
                    <div class="design-image">
                        <img src="{{asset('')}}frontend/images/design5.jpg" alt="design">
                    </div>
                    <div class="design-text design-text-5">
                        <h3>LAMP PREMIUM DESIGNS</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="design mt-4">
                    <div class="design-image">
                        <img src="{{asset('')}}frontend/images/design6.jpg" alt="design">
                    </div>
                    <div class="design-text design-text-6">
                        <h3>BASKETS PREM IUM DESIGNS</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="subscribe-newsletter">
    <div class="subscribe-content">
        <img src="{{asset('')}}frontend/images/bg2-newlest.jpg" alt="subscribe">
        <div class="subscribe">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8">
                        <div class="subscribe-form">
                            <h3><span>Subscribe</span> to our newsletter</h3>
                            <p>Subscribe to the Expert mailing list to receive updates on new arrivals, special offers and other discount information.</p>
                            <form action="#">
                                <div class="row d-flex justify-content-center my-3">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control">
                                    </div>

                                    <div class="col-md-2 my-2 my-sm-0">
                                        <button type="submit" class="btn btn-orange">Subscribe</button>
                                    </div>
                                </div>
                            </form>
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
                            <a href="http://127.0.0.1:8000/ui/emailto:admin@bootexperts.com">
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
<script src="{{asset('')}}frontend/js/jquery-3.6.0.min.js"></script>
<script src="{{asset('')}}frontend/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('')}}frontend/js/jquery-migrate-3.3.2.min.js"></script>
<script src="{{asset('')}}frontend/js/slick.min.js"></script>
<script src="{{asset('')}}frontend/js/script.js"></script>
</body>
</html>