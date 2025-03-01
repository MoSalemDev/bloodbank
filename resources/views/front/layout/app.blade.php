<!doctype html>
<html lang="en" dir="rtl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="{{asset('front/assets/css/bootstrap.min.css')}}">

     <!--google fonts css-->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">

    <!--font awesome css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">

    <link rel="icon" href="{{ asset('front/assets/imgs/Icon.png') }}">

    <!--owl-carousel css-->

    <link rel="stylesheet" href="{{asset('front/assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/owl.theme.default.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('front/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/owl.theme.default.min.css')}}"> --}}


    <!--style css-->
    <link rel="stylesheet" href="{{ asset('front/assets/css/style.css') }}">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="{{ asset('front/assets/js/jquery-3.5.1.min.js') }}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script> --}}

    <script src="{{ asset('front/assets/js/bootstrap.bundle.js') }}"></script>
    {{-- <script src="{{ asset('front/assets/js/bootstrap.bundle.min.js') }}"></script> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>

    <script src="https://cdn.rtlcss.com/bootstrap/v4.2.1/js/bootstrap.min.js"
        integrity="sha384-a9xOd0rz8w0J8zqj1qJic7GPFfyMfoiuDjC9rqXlVOcGO/dmRqzMn34gZYDTel8k" crossorigin="anonymous">
    </script>
    {{-- <script src="{{ asset('front/assets/js/owl.carousel.min.js') }}"></script> --}}
    
</head>

<body>
    <!--upper-bar-->
    <div class="upper-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="language">
                        <a href="index.html" class="ar active">عربى</a>
                        <a href="index-ltr.html" class="en inactive">EN</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="social">
                        <div class="icons">
                            <a href="{{ $settings->fb_link }}" target="_blank" class="facebook"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="{{ $settings->insta_link }}" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="{{ $settings->tw_link }}" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="{{ $settings->wts_link }}" target="_blank"><i class="fab fa-whatsapp"></i></a>
                            <a href="{{ $settings->yt_link }}" target="_blank"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="info" dir="ltr">

                        <div class="phone">
                            <a href="{{ $settings->phone }}" target="_blank"><i class="fas fa-phone-alt"></i></a>
                        </div>

                        <div class="e-mail">
                            <a href="{{ $settings->email }}" target="_blank"><i class="far fa-envelope"> </i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--nav-->
    <div class="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="{{route('home')}}">
                    <img src="{{ asset('front') }}/assets/imgs/logo.png" class="d-inline-block align-top"
                        alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('home')}}">الرئيسية <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link" href="{{ $settings->about }}">عن بنك الدم</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">المقالات</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('donation-requests')}}">طلبات التبرع</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="who-are-us.html">من نحن</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact-us.html">اتصل بنا</a>
                        </li>

                    </ul>

                    <!--not a member-->
                    <div class="accounts">
                        @guest('client')
                            @if (Route::has('login'))
                                <a class="signin" href="{{ route('client.login') }}">
                                    {{ 'الدخول' }}</a>
                            @endif

                            @if (Route::has('register'))
                                <a class="create" href="{{ route('client.register') }}">
                                    {{ 'إنشاء حساب جديد' }}</a>
                            @endif
                        @else
                            <!--I'm a member -->
                            <a href="#" class="donate">
                                <img src="{{ asset('front') }}/assets/imgs/transfusion.svg">
                                <p>طلب تبرع</p>
                            </a>

                            <div class="member">
                                <p class="welcome">مرحباً بك</p>
                                <div class="dropdown">
                                    <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ Auth::guard('client')->user()->name }}
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="index-1.html">
                                            <i class="fas fa-home"></i>
                                            الرئيسية
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <i class="far fa-user"></i>
                                            معلوماتى
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <i class="far fa-bell"></i>
                                            اعدادات الاشعارات
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <i class="far fa-heart"></i>
                                            المفضلة
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <i class="far fa-comments"></i>
                                            ابلاغ
                                        </a>
                                        <a class="dropdown-item" href="contact-us.html">
                                            <i class="fas fa-phone-alt"></i>
                                            تواصل معنا
                                        </a>

                                        <a class="dropdown-item" href="#"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('client.logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>

                                    </div>
                                </div>

                            </div>

                        @endguest
                    </div>


                </div>
            </div>
        </nav>
    </div>


    @yield('content')

    <!--contact-->
    <div class="contact">
        <div class="container">
            <div class="col-md-7">
                <div class="title">
                    <h3>اتصل بنا</h3>
                </div>
                <p class="text">يمكنك الإتصال بنا للإستفسار عن معلومة وسيتم الرد عليكم</p>
                <div class="row whatsapp">
                    <a href="#">
                        <img src="{{ asset('front') }}/assets/imgs/whats.png">
                        <p dir="ltr">+002 1215454551</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--app-->
    <div class="app">
        <div class="container">
            <div class="row">
                <div class="info col-md-6">
                    <h3>تطبيق بنك الدم</h3>
                    <p>
                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                    </p>
                    <div class="download">
                        <h4>متوفر على</h4>
                        <div class="row stores">
                            <div class="col-sm-6">
                                <a href="#">
                                    <img src="{{ asset('front') }}/assets/imgs/google.png">
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <a href="#">
                                    <img src="{{ asset('front') }}/assets/imgs/ios.png">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="screens col-md-6">
                    <img src="{{ asset('front') }}/assets/imgs/App.png">
                </div>
            </div>
        </div>
    </div>

    <!--footer-->
    <div class="footer">
        <div class="inside-footer">
            <div class="container">
                <div class="row">
                    <div class="details col-md-4">
                        <img src="{{ asset('front') }}/assets/imgs/logo.png">
                        <h4>بنك الدم</h4>
                        <p>
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى.
                        </p>
                    </div>
                    <div class="pages col-md-4">
                        <div class="list-group" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action active" id="list-home-list"
                                href="index.html" role="tab" aria-controls="home">الرئيسية</a>
                            <a class="list-group-item list-group-item-action" id="list-profile-list" href="#"
                                role="tab" aria-controls="profile">عن بنك الدم</a>
                            <a class="list-group-item list-group-item-action" id="list-messages-list" href="#"
                                role="tab" aria-controls="messages">المقالات</a>
                            <a class="list-group-item list-group-item-action" id="list-settings-list"
                                href="donation-requests.html" role="tab" aria-controls="settings">طلبات
                                التبرع</a>
                            <a class="list-group-item list-group-item-action" id="list-settings-list"
                                href="who-are-us.html" role="tab" aria-controls="settings">من نحن</a>
                            <a class="list-group-item list-group-item-action" id="list-settings-list"
                                href="contact-us.html" role="tab" aria-controls="settings">اتصل بنا</a>
                        </div>
                    </div>
                    <div class="stores col-md-4">
                        <div class="availabe">
                            <p>متوفر على</p>
                            <a href="#">
                                <img src="{{ asset('front') }}/assets/imgs/google1.png">
                            </a>
                            <a href="#">
                                <img src="{{ asset('front') }}/assets/imgs/ios1.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="other">
            <div class="container">
                <div class="row">
                    <div class="social col-md-4">
                        <div class="icons">

                            {{-- $settings->fb_link --}}
                            <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="whatsapp"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                    <div class="rights col-md-8">
                        <p>جميع الحقوق محفوظة لـ <span>بنك الدم</span> &copy; 2019</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('front/assets/js/owl.carousel.js') }}"></script>


    <script src="{{ asset('front/assets/js/main.js') }}"></script>

    @stack('scripts')
</body>

</html>
