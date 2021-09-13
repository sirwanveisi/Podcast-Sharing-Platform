<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Megapod Template">
    <meta name="keywords" content="Megapod, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>هیروپاد - @yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800;900&display=swap"
          rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/css/style.css" type="text/css">
    @yield('style')
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>
<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__search">
        <form action="{{ route('find') }}" method="post">
            @csrf
            <input class="form-control header-s" type="text" name="key" placeholder="کلمه کلیدی..." required
                   oninvalid="this.setCustomValidity('یک کلمه کلیدی وارد کنید')"
                   oninput="setCustomValidity('')">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <div class="offcanvas__logo">
        <a href="./index.html"><img src="/img/logo.png" alt=""></a>
    </div>
    <div id="mobile-menu-wrap"></div>
    @if (Route::has('login'))
        @auth
            @if(auth()->user()->role == 'user')
                <div class="dropdown">
                    <img class="dropbtn" style="border-radius: 50%" src="{{ auth()->user()->image != '' ? auth()->user()->image : '/img/no-image.png' }}" alt="user" width="36" height="36">
                    <div class="dropdown-content">
                        <a href="{{ route('profile.index') }}">
                            <i class="fa fa-user"></i> پروفایل
                        </a>
                        <a href="{{ route('logout') }}" onClick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out"></i> {{ __('auth.Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
                <a href="{{ route('podcast.index') }}">
                    <button class="btn btn-warning upload-btn" name="user-login"><i
                                class="fa fa-cloud-upload" aria-hidden="true"></i> بارگذاری پادکست
                    </button>
                </a>
            @else
                <div class="dropdown">
                    <img class="dropbtn" style="border-radius: 50%" src="{{ auth()->user()->image != '' ? auth()->user()->image : '/img/no-image.png' }}" alt="user" width="36" height="36">
                    <div class="dropdown-content">
                        <a href="{{ route('profile-setting.index') }}">
                            <i class="fa fa-user"></i> پروفایل
                        </a>
                        <a href="{{ route('logout') }}" onClick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out"></i> {{ __('auth.Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
                <a href="{{ route('admin-dashboard') }}">
                    <button class="btn btn-primary upload-btn" name="user-login"><i
                                class="fa fa-home" aria-hidden="true"></i> داشبورد مدیریت
                    </button>
                </a>
            @endif
        @else
            <a href="{{ route('login') }}">
                <button class="btn btn-warning upload-btn" name="user-login"><i
                            class="fa fa-user" aria-hidden="true"></i> ورود / عضویت
                </button>
            </a>
        @endif
    @endif
</div>
<!-- Offcanvas Menu End -->
<!-- Header Section Begin -->
<header class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="header__logo">
                    <a href="{{ route('homepage') }}"><img src="/img/logo.png" alt=""></a>
                </div>
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{ route('homepage') }}">خانه</a></li>
                        <li class="{{ request()->is('podcasts') ? 'active' : '' }}"><a href="{{ route('podcasts') }}">پادکست ها</a></li>
                        <li class="{{ request()->is('categories') ? 'active' : '' }}"><a href="{{ route('categories') }}">دسته بندی ها</a></li>
                        <li class="{{ request()->is('albums') ? 'active' : '' }}"><a href="{{ route('albums') }}">آلبوم ها</a></li>
                        <li class="{{ request()->is('search') ? 'active' : '' }}"><a href="{{ route('search') }}">جستجو پیشرفته</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-4">
                <div class="header__left">
                    <div class="header__left__search">
                        <form action="{{ route('find') }}" method="post">
                            @csrf
                            <input class="form-control header-s" type="text" name="key" placeholder="کلمه کلیدی..." required
                                   oninvalid="this.setCustomValidity('یک کلمه کلیدی وارد کنید')"
                                   oninput="setCustomValidity('')">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="header__left__upload">
                        @if (Route::has('login'))
                            @auth
                                @if(auth()->user()->role == 'user')
                                    <div class="dropdown">
                                        <img class="dropbtn" style="border-radius: 50%" src="{{ auth()->user()->image != '' ? auth()->user()->image : '/img/no-image.png' }}" alt="user" width="36" height="36">
                                        <div class="dropdown-content">
                                            <a href="{{ route('profile.index') }}">
                                                <i class="fa fa-user"></i> پروفایل
                                            </a>
                                            <a href="{{ route('logout') }}" onClick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                <i class="fa fa-sign-out"></i> {{ __('auth.Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                    <a href="{{ route('podcast.index') }}">
                                        <button class="btn btn-warning upload-btn" name="user-login"><i
                                                    class="fa fa-cloud-upload" aria-hidden="true"></i> بارگذاری پادکست
                                        </button>
                                    </a>
                                @else
                                    <div class="dropdown">
                                        <img class="dropbtn" style="border-radius: 50%" src="{{ auth()->user()->image != '' ? auth()->user()->image : '/img/no-image.png' }}" alt="user" width="36" height="36">
                                        <div class="dropdown-content">
                                            <a href="{{ route('profile-setting.index') }}">
                                                <i class="fa fa-user"></i> پروفایل
                                            </a>
                                            <a href="{{ route('logout') }}" onClick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                <i class="fa fa-sign-out"></i> {{ __('auth.Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                    <a href="{{ route('admin-dashboard') }}">
                                        <button class="btn btn-primary upload-btn" name="user-login"><i
                                                    class="fa fa-home" aria-hidden="true"></i> داشبورد مدیریت
                                        </button>
                                    </a>
                                @endif
                            @else
                                <a href="{{ route('login') }}">
                                    <button class="btn btn-warning upload-btn" name="user-login"><i
                                            class="fa fa-user" aria-hidden="true"></i> ورود / عضویت
                                    </button>
                                </a>
                        @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>
<!-- Header Section End -->
