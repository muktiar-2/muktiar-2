
@extends("layout.master")
@section('content')
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
                                    <a href="product-details.html">
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
                                    <a href="product-details.html">
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
                                    <a href="product-details.html">
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
                                    <a href="product-details.html">
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
                                    <a href="product-details.html">
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
                                    <a href="product-details.html">
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
                                    <a href="product-details.html">
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
                                    <a href="product-details.html">
                                        Fusce aliquam
                                    </a>
                                </h3>
                            </div>

                            <div class="product-image">
                                <span class="sale-tag sale-tag-new">New</span>
                                <a href="#">
                                    <img src="{{asset('')}}forntend/images/feature_p2.png" alt="fp1" class="first-image">
                                    <img src="{{asset('')}}forntend/images/feature_p2_1.png" alt="fp2" class="second-image">
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
                                            <a href="product-details.html">
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
                                            <a href="product-details.html">
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
                                    <img src="{{asset('')}}forntend/images/sale-product-01.jpg" alt="sale product 01" class="first-image border">
                                    <img src="{{asset('')}}forntend/images/sale-product-01-1.jpg" alt="sale product 1.1" class="second-image border">
                                    <div class="product-details-text">
                                        <h4>
                                            <a href="product-details.html">
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
                                            <a href="product-details.html">
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
                                    <img src="{{asset('')}}forntend/images/sale-product-01.jpg" alt="sale product 01" class="first-image border">
                                    <img src="{{asset('')}}forntend/images/sale-product-01-1.jpg" alt="sale product 1.1" class="second-image border">
                                    <div class="product-details-text">
                                        <h4>
                                            <a href="product-details.html">
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
                                            <a href="product-details.html">
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
                                    <div class="{{asset('')}}forntend/product-details-text">
                                        <h4>
                                            <a href="product-details.html">
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
                                            <a href="product-details.html">
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
                                    <img src="{{asset('')}}forntend/images/sale-product-01.jpg" alt="sale product 01" class="first-image border">
                                    <img src="{{asset('')}}forntend/images/sale-product-01-1.jpg" alt="sale product 1.1" class="second-image border">
                                    <div class="product-details-text">
                                        <h4>
                                            <a href="product-details.html">
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
                                            <a href="product-details.html">
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
                                            <a href="product-details.html">
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
                                            <a href="product-details.html">
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
                                            <a href="product-details.html">
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
                                            <a href="product-details.html">
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
                                            <a href="product-details.html">
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
                                            <a href="product-details.html">
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
                                            <a href="product-details.html">
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
@endsection;
