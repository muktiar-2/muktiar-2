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
    @include('partials/navigation')
</header>

<main class="main">
    <nav class="breadcrumb-nav">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="demo1.html"><i class="d-icon-home"></i></a></li>
                <li><a href="shop.html">Expert Shop</a></li>
                <li>My Account</li>
            </ul>
        </div>
    </nav>
    <div class="page-content mt-6 pb-2 mb-10">
        <div class="container">
            <div class="login-popup">
                <div class="form-box">
                    <div class="tab tab-nav-simple tab-nav-boxed form-tab">
                        <ul class="nav nav-tabs nav-fill align-items-center border-no justify-content-center mb-5"
                            role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active border-no lh-1 ls-normal" href="#signin">Login</a>
                            </li>
                            <li class="delimiter">or</li>
                            <li class="nav-item">
                                <a class="nav-link border-no lh-1 ls-normal" href="#register">Register</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="signin">
                                <form>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                        <label for="inputEmail">Email address</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputPassword" type="password" placeholder="Password" />
                                        <label for="inputPassword">Password</label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                        <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <a class="small" href="password.html">Forgot Password?</a>
                                        <a class="btn btn-primary" href="index.html">Login</a>
                                    </div>
                                </form>
                                <div class="form-choice text-center">
                                    <label class="ls-m">or Login With</label>
                                    <div class="social-links">
                                        <a href="#"
                                           class="social-link social-google fab fa-google border-no"></a>
                                        <a href="#"
                                           class="social-link social-facebook fab fa-facebook-f border-no"></a>
                                        <a href="#"
                                           class="social-link social-twitter fab fa-twitter border-no"></a>
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

</main>
@include('partials/footer');

<!-- Plugins JS File -->

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
