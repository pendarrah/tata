
<!DOCTYPE html>
<html>
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>تطابق</title>

    <meta name="keywords" content="" />
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="/app/img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="/app/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/app/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/app/vendor/animate/animate.min.css">
    <link rel="stylesheet" href="/app/vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="/app/vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/app/vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="/app/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="/app/css/theme.css">
    <link rel="stylesheet" href="/app/css/theme-elements.css">
    <link rel="stylesheet" href="/app/css/theme-blog.css">
    <link rel="stylesheet" href="/app/css/theme-shop.css">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="/app/vendor/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="/app/vendor/rs-plugin/css/layers.css">
    <link rel="stylesheet" href="/app/vendor/rs-plugin/css/navigation.css">
    <link rel="stylesheet" href="/app/vendor/circle-flip-slideshow/css/component.css">

    <!-- Demo CSS -->
    <link href="/assets/plugins/global/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>


    <!-- Skin CSS -->
    <link rel="stylesheet" href="/app/css/skins/default.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="/app/css/custom.css">

    <!-- Head Libs -->
    <script src="/app/vendor/modernizr/modernizr.min.js"></script>

</head>
<body>
<div class="body">
    <header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 55, 'stickySetTop': '-55px', 'stickyChangeLogo': true}">
        <div class="header-body">
            <div class="header-container container">
                <div class="col-md-12 tataboghTopHeaderBorder">
                    <div class="header-row pt-3">
                        <nav class="header-nav-top header-column">
                            <ul class="nav nav-pills" id="topMenuTatabogh">
                                <li class="nav-item d-sm-block">
                                    <a class="nav-link" data-toggle="modal" data-target="#contactModal" href="#"><i class="fa fa-phone"></i> درخواست تماس</a>
                                </li>
                                <li class="nav-item d-sm-block">
                                    <a class="nav-link" data-toggle="modal" data-target="#mosharekatModal" href="#"><i class="fa fa-wpforms "></i> فرم مشارکت</a>
                                </li>

                                @guest
                                    <li class="nav-item d-sm-block">
                                        <a class="nav-link" data-toggle="modal" data-target="#loginModal" href="#"><i class="fa fa-sign-in"></i> ورود </a>
                                    </li>
                                    <li class="nav-item d-sm-block">
                                        <a class="nav-link" data-toggle="modal" data-target="#registerModal" href="#"><i class="fa fa-sign-in"></i> عضویت </a>
                                    </li>
                                 @endguest

                                @auth
                                    <li class="nav-item d-sm-block">
                                        <a class="nav-link"  href="/dashboard/index">  سلام {{ Auth::user()->fName }} ، ورود به پنل کاربری </a>
                                    </li>
                                @endauth


                            </ul>
                        </nav>
                        <div class="header-search d-none d-md-block">
                            <form id="searchForm" class="" action="page-search-results.html" method="get">
                                <div style="margin-top: 30px" class="input-group">
                                    <input style="display: none" type="text" class="form-control" name="q" id="q" placeholder="جستجو ..." required>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            <a href="#" class="btn btn-primary tatabogh-bg"> باشگاه مشاورین </a>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <div class="header-nav">
                                <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                    <nav class="collapse">
                                        <ul class="nav nav-pills" id="mainNav">
                                            <li class=""><a class="nav-link" href="/">صفحه اصلی</a></li>
                                            <li class="dropdown"><a class="dropdown-item" href="#services">خدمات</a></li>
                                            <li class="dropdown"><a class="dropdown-item" href="#packages">پکیج ها</a></li>
                                            <li class="dropdown"><a class="dropdown-item " href="#">اخبار</a></li>
                                            <li class="dropdown"><a class="dropdown-item" href="#">وبلاگ</a></li>
                                            <li class="dropdown"><a class="dropdown-item" href="{{ route('app.about') }}">درباره ما</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                    <i class="fa fa-bars"></i>
                                </button>
                                
                            <div class="header-logo">
                                <a href="index.html">
                                    <img alt="تطابق" width="111" height="54" data-sticky-width="82" data-sticky-height="40" data-sticky-top="10" src="/app/img/logo.png">
                                </a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="modal fade" id="loginModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="loginModalTitle">ورود به ناحیه کاربری</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="loginModalTatabogh">
                    <div class="modal-body">
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group">
                                <label class="control-label col-sm-4" for="email"> آدرس ایمیل :</label>
                                <div class="col-sm-12">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="لطفا آدرس ایمیل خود را وارد کنید ..." name="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">کلمه عبور :</label>
                                <div class="col-sm-12">
                                    <input type="password"  class="form-control @error('password') is-invalid @enderror" id="pwd" placeholder="لطفا کلمه عبور خود را وارد کنید ..." name="password" >
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-12">
                                    <div style="margin-right: 20px;" class="checkbox">
                                        <label>
                                            <input style="margin-right: -20px;" class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            مرا به خاطر بسپار
                                        </label>
                                    </div>
                                </div>
                            </div>

                    </div>
                    <div class="form-group row">
                        <div class="col-sm-offset-2 col-sm-12">
                            <button type="submit" id="signupp" class="btn btn-success col-md-12">ورود</button>
                        </div>
                    </div>
                    </form>
                </div>


            </div>

        </div>
    </div>


    <div class="modal fade" id="registerModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="loginModalTitle">عضویت در تطابق</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="loginModalTatabogh">
                    <div class="modal-body">
                        <form method="POST" class="form-horizontal" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <div class="col-md-6 col-sm-12">
                                    <input type="text" value="{{ old('fNameRegister') }}" class="form-control @error('fNameRegister') is-invalid @enderror" id="email" placeholder="نام *" name="fNameRegister">
                                    @error('fNameRegister')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <input type="text" value="{{ old('lNameRegister') }}" class="form-control @error('lNameRegister') is-invalid @enderror" id="email" placeholder="نام خانوادگی *" name="lNameRegister">
                                    @error('lNameRegister')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 col-sm-12">
                                    <input type="text" value="{{ old('companyNameRegister') }}" class="form-control @error('companyNameRegister') is-invalid @enderror" id="pwd" placeholder="نام شرکت" name="companyNameRegister">
                                    @error('companyNameRegister')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <input type="text" value="{{ old('nationalCodeRegister') }}" class="form-control @error('nationalCodeRegister') is-invalid @enderror" id="pwd" placeholder="کدملی *" name="nationalCodeRegister">
                                    @error('nationalCodeRegister')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 col-sm-12">
                                    <input type="text" value="{{ old('mobileRegister') }}" class="form-control @error('mobileRegister') is-invalid @enderror" id="pwd" placeholder="شماره تلفن همراه *" name="mobileRegister">
                                    @error('mobileRegister')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <input type="text" value="{{ old('emailRegister') }}" class="form-control @error('emailRegister') is-invalid @enderror" id="pwd" placeholder="آدرس ایمیل *" name="emailRegister">
                                    @error('emailRegister')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12 col-sm-12">
                                    <textarea value="{{ old('sectorRegister') }}" class="form-control @error('sectorRegister') is-invalid @enderror" name="sectorRegister" rows="3" id="textareaDefault" placeholder="زمینه فعالیت شرکت... *"></textarea>
                                    @error('sectorRegister')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>

                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 col-sm-12">
                                    <input value="{{ old('passwordRegister') }}" type="password" class="form-control @error('passwordRegister') is-invalid @enderror" id="pwd" placeholder="کلمه عبور *" name="passwordRegister">
                                    @error('passwordRegister')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="pwd" placeholder="تکرار کلمه عبور" name="password_confirmation">
                                    @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-offset-2 col-sm-12">
                                    <button type="submit" id="signupp" class="btn btn-success col-md-12">ثبت نام</button>
                                </div>
                            </div>
                        </form>


            </div>

        </div>
    </div>


        </div>
    </div>



    <div class="modal fade" id="mosharekatModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="loginModalTitle">فرم درخواست مشارکت</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="mosharekatModalTatabogh">
                    <div class="modal-body">

                        <form class="form-horizontal" method="POST" action="{{ route('app.participate') }}">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-12 col-sm-12">
                                    <select name="service" class="form-control @error('service') is-invalid @enderror ">
                                        <option selected disabled> خدمات مورد نظر برای مشارکت ... </option>
                                        <option value="حسابرسي تامين اجتماعي">حسابرسي تامين اجتماعي</option>
                                        <option value="خدمات مالي و مالياتي">خدمات مالي و مالياتي</option>
                                        <option value="خدمات حقوقي">خدمات حقوقي</option>
                                        <option value="ارزيابي ريسك">ارزيابي ريسك</option>
                                        <option value="خدمات بيمه">خدمات بيمه</option>
                                        <option value="خدمات اداري">خدمات اداري</option>
                                    </select>
                                    @error('service')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 col-sm-12">
                                    <input type="text" class="form-control @error('fNameM') is-invalid @enderror" id="email" placeholder="نام *" name="fNameM">
                                    @error('fNameM')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <input type="text" class="form-control @error('lNameM') is-invalid @enderror" id="email" placeholder="نام خانوادگی *" name="lNameM">
                                    @error('lNameM')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 col-sm-12">
                                    <input type="text" class="form-control @error('companyM') is-invalid @enderror" id="pwd" placeholder="نام شرکت" name="companyM">
                                    @error('companyM')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <input type="text" class="form-control @error('phoneM') is-invalid @enderror" id="pwd" placeholder="شماره تلفن*" name="phoneM">
                                    @error('phoneM')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-offset-2 col-sm-12">
                                    <button type="submit" class="btn btn-success col-md-12">ثبت درخواست</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="modal fade" id="contactModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="loginModalTitle">فرم درخواست تماس</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="mosharekatModalTatabogh">
                    <div class="modal-body">

                        <form class="form-horizontal" method="POST" action="{{ route('app.call') }}">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-12 col-sm-12">
                                    <input type="text" class="form-control  @error('phoneC') is-invalid @enderror " id="email" placeholder="شماره تلفن *" name="phoneC">
                                    @error('phoneC')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12 col-sm-12">
                                    <textarea class="form-control @error('description') is-invalid @enderror  " name="description" rows="3" id="textareaDefault" placeholder="توضیحات *"></textarea>
                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-offset-2 col-sm-12">
                                    <button type="submit" class="btn btn-success col-md-12">ثبت درخواست</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>



    @yield('content')

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d393.3739168092725!2d51.35044648189652!3d35.72117333558432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzXCsDQzJzE2LjMiTiA1McKwMjEnMDIuMyJF!5e0!3m2!1sen!2s!4v1600509885616!5m2!1sen!2s" width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>

                <div class="col-lg-6">
                    <div class="contact-details">
                        <h4>تماس با ما</h4>
                        <ul class="contact">
                            <li><p><i class="fa fa-map-marker"></i> <strong>آدرس:</strong> تهران ، خیابان ستارخان بعد از بازارچه سنتی ستارخان ، جنب خیابان صحرایی ، پلاک 856 ، برج جوانه ، طبقه هفت واحد 4</p></li>
                            <li><p><i class="fa fa-phone"></i> <strong>شماره تماس:</strong>02144270548 | 02144270549</p></li>
                            <li><p><i class="fa fa-envelope"></i> <strong> آدرس ایمیل: </strong> <a href="mailto:info@tatabogh.com">info@tatabogh.com</a></p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <h4> مارا دنبال کنید</h4>
                    <ul class="social-icons">
                        <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1">
                        <a href="index.html" class="logo">
                            <img alt="وبسایت تطابق" class="img-fluid" src="/app/img/logo.png">
                        </a>
                    </div>
                    <div class="col-lg-7">
                        <p>تمامی حقوق مادی و معنوی برای تطابق محفوظ است.</p>
                        <span><a target="_blank" href="https://rahpendar.com/%D8%B7%D8%B1%D8%A7%D8%AD%DB%8C-%D8%B3%D8%A7%DB%8C%D8%AA">طراحی سایت</a> و <a target="_blank" href="https://rahpendar.com/%D9%81%D8%B1%D9%88%D8%B4%DA%AF%D8%A7%D9%87-%D8%A7%DB%8C%D9%86%D8%AA%D8%B1%D9%86%D8%AA%DB%8C">طراحی فروشگاه اینترنتی</a> توسط <a target="_blank" href="https://rahpendar.com">رهپندار</a></span>
                    </div>
                    <div class="col-lg-4">
                        <nav id="sub-menu">
                            <ul>
                                <li><a href="{{ route('app.contact') }}">تماس با ما</a></li>
                                <li><a href="{{ route('app.about') }}">درباره ما</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- Vendor -->
<script src="/app/vendor/jquery/jquery.min.js"></script>
<script src="/app/vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="/app/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="/app/vendor/jquery-cookie/jquery-cookie.min.js"></script>
<script src="/app/vendor/popper/umd/popper.min.js"></script>
<script src="/app/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="/app/vendor/common/common.min.js"></script>
<script src="/app/vendor/jquery.validation/jquery.validation.min.js"></script>
<script src="/app/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
<script src="/app/vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="/app/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
<script src="/app/vendor/isotope/jquery.isotope.min.js"></script>
<script src="/app/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="/app/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="/app/vendor/vide/vide.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="/app/js/theme.js"></script>

<!-- Current Page Vendor and Views -->
<script src="/app/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="/app/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="/app/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
<script src="/app/js/views/view.home.js"></script>

<!-- Theme Custom -->
<script src="/app/js/custom.js"></script>
<script type="text/javascript" src="/app/js/jarallax.min.js"></script>
<script type="text/javascript" src="/app/js/jarallax-video.min.js"></script>
<script type="text/javascript" src="/app/js/jarallax-element.min.js"></script>
<script src="/assets/plugins/global/sweetalert/sweetalert.min.js" type="text/javascript"></script>
@include('sweet::alert')

<!-- Theme Initialization Files -->
<script src="/app/js/theme.init.js"></script>

<!---start GOFTINO code--->
<script type="text/javascript">
    !function(){var a=window,d=document;function g(){var g=d.createElement("script"),s="https://www.goftino.com/widget/Hqa6DI",l=localStorage.getItem("goftino");g.type="text/javascript",g.async=!0,g.referrerPolicy="no-referrer-when-downgrade",g.src=l?s+"?o="+l:s;d.getElementsByTagName("head")[0].appendChild(g);}"complete"===d.readyState?g():a.attachEvent?a.attachEvent("onload",g):a.addEventListener("load",g,!1);}();

    $(document).ready(function () {

    @error('fNameRegister')
        $('#registerModal').modal('toggle');
    @enderror

    @error('lNameRegister')
        $('#registerModal').modal('toggle');
    @enderror

    @error('nationalCodeRegister')
        $('#registerModal').modal('toggle');
    @enderror

    @error('companyNameRegister')
        $('#registerModal').modal('toggle');
    @enderror

    @error('mobileRegister')
        $('#registerModal').modal('toggle');
    @enderror

    @error('sectorRegister')
        $('#registerModal').modal('toggle');
    @enderror

    @error('emailRegister')
        $('#registerModal').modal('toggle');
    @enderror

    @error('passwordRegister')
        $('#registerModal').modal('toggle');
    @enderror



    @error('email')
        $('#loginModal').modal('toggle');
    @enderror


    @error('password')
        $('#loginModal').modal('toggle');
    @enderror





    @error('service')
        $('#mosharekatModal').modal('toggle');
    @enderror
    @error('fNameM')
        $('#mosharekatModal').modal('toggle');
    @enderror
    @error('lNameM')
        $('#mosharekatModal').modal('toggle');
    @enderror
    @error('companyM')
        $('#mosharekatModal').modal('toggle');
    @enderror
    @error('phoneM')
        $('#mosharekatModal').modal('toggle');
    @enderror



    @error('phoneC')
        $('#contactModal').modal('toggle');
    @enderror
    @error('description')
        $('#contactModal').modal('toggle');
    @enderror




    });



</script>
<!---end GOFTINO code--->

</body>
</html>
