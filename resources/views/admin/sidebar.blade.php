<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="#" onClick="return false;" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"
               aria-expanded="false"></a>
            <a href="#" onClick="return false;" class="bars"></a>
            <a class="navbar-brand" href="{{ route('admin-dashboard') }}">
                <img src="/admin/images/logo.png" alt="" />
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-left">
                <li>
                    <a href="#" onClick="return false;" class="sidemenu-collapse">
                        <i class="nav-hdr-btn ti-align-left"></i>
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!-- Full Screen Button -->
                <li class="fullscreen">
                    <a href="javascript:;" class="fullscreen-btn">
                        <i class="nav-hdr-btn ti-fullscreen"></i>
                    </a>
                </li>
                <!-- #END# Full Screen Button -->
                <li class="dropdown user_profile">
                    <div class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ auth()->user()->image != '' ? auth()->user()->image : '/img/no-image.png' }}" width="35" height="35" alt="user">
                    </div>
                    <ul class="dropdown-menu pullDown">
                        <li class="body">
                            <ul class="user_dw_menu">
                                <li>
                                    <a href="{{ route('profile.index') }}">
                                        <i class="material-icons">person</i>پروفایل
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}" onClick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="material-icons">power_settings_new</i>{{ __('auth.Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- #END# Tasks -->
                <li class="pull-right">
                    <a href="#" onClick="return false;" class="js-right-sidebar" data-close="true">
                        <i class="nav-hdr-btn ti-layout-grid2"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- #Top Bar -->
<div>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li>
                    <div class="sidebar-profile clearfix">
                        <div class="profile-img">
                            <img src="{{ auth()->user()->image != '' ? auth()->user()->image : '/img/no-image.png' }}" alt="profile">
                        </div>
                        <div class="profile-info">
                            <h3>{{ auth()->user()->name }}</h3>
                            <p>خوش آمدید !</p>
                        </div>
                    </div>
                </li>
                <li class="active">
                    <a href="{{ route('admin-dashboard') }}">
                        <i class="menu-icon ti-home"></i>
                        <span>داشبورد مدیریت</span>
                    </a>
                </li>
                <li>
                    <a href="#" onClick="return false;" class="menu-toggle">
                        <i class="menu-icon  ti-microphone"></i>
                        <span>مدیریت پادکست ها</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="{{ route('podcasts.index') }}">لیست کل پادکست ها</a>
                        </li>
                        <li>
                            <a href="{{ route('podcasts.show', 'requests') }}">پادکست های منتظر تایید </a>
                        </li>
                        <li>
                            <a href="{{ route('podcasts.create') }}">افزودن پادکست جدید</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" onClick="return false;" class="menu-toggle">
                        <i class="menu-icon ti-layers-alt"></i>
                        <span>مدیریت آلبوم ها</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="{{ route('albums.index') }}">لیست کل آلبوم ها</a>
                        </li>
                        <li>
                            <a href="{{ route('albums.create') }}">افزودن آلبوم جدید</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" onClick="return false;" class="menu-toggle">
                        <i class="menu-icon ti-menu-alt"></i>
                        <span>مدیریت دسته بندی ها</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="{{ route('categories.index') }}">لیست کل دسته بندی ها</a>
                        </li>
                        <li>
                            <a href="{{ route('categories.create') }}">افزودن دسته بندی جدید</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" onClick="return false;" class="menu-toggle">
                        <i class="menu-icon ti-user"></i>
                        <span>مدیریت کاربران</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="{{ route('users.index') }}">لیست کل کاربران</a>
                        </li>
                        <li>
                            <a href="{{ route('users.create') }}">افزودن کاربر جدید</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" onClick="return false;" class="menu-toggle">
                        <i class="menu-icon  ti-comment"></i>
                        <span>مدیریت کامنت ها</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="{{ route('comments.index') }}">لیست کل کامنت ها</a>
                        </li>
                        <li>
                            <a href="{{ route('comments.show', 'requests') }}">کامنت های منتظر تایید </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" onClick="return false;" class="menu-toggle">
                        <i class="menu-icon ti-settings"></i>
                        <span>مدیریت پروفایل</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="{{ route('profile-setting.index') }}">تنظیمات پروفایل</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li role="presentation">
                <a href="#skins" data-toggle="tab" class="active">پوسته ها</a>
            </li>
            <li role="presentation">
                <a href="#settings" data-toggle="tab">تنظیمات</a>
            </li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane in active in active stretchLeft" id="skins">
                <div class="demo-skin">
                    <div class="rightSetting">
                        <p>تنظیمات عمومی</p>
                        <ul class="setting-list list-unstyled m-t-20">
                            <li>
                                <div class="form-check">
                                    <div class="form-check m-l-10">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value="" checked> ذخیره تاریخچه
                                            <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <div class="form-check m-l-10">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value="" checked> نمایش وضعیت
                                            <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <div class="form-check m-l-10">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value="" checked> ثبت مسئله خودکار
                                            <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <div class="form-check m-l-10">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value="" checked> نمایش وضعیت به همه
                                            <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="rightSetting">
                        <p>رنگ منو نوار کناری</p>
                        <button type="button" class="btn btn-sidebar-light btn-border-radius p-l-20 p-r-20">روشن</button>
                        <button type="button" class="btn btn-sidebar-dark btn-default btn-border-radius p-l-20 p-r-20">تاریک</button>
                    </div>
                    <div class="rightSetting">
                        <p>رنگ قالب</p>
                        <button type="button" class="btn btn-theme-light btn-border-radius p-l-20 p-r-20">روشن</button>
                        <button type="button" class="btn btn-theme-dark btn-default btn-border-radius p-l-20 p-r-20">تاریک</button>
                    </div>
                    <div class="rightSetting">
                        <p>پوسته ها</p>
                        <ul class="demo-choose-skin choose-theme list-unstyled">
                            <li data-theme="black" class="actived">
                                <div class="black-theme"></div>
                            </li>
                            <li data-theme="white">
                                <div class="white-theme white-theme-border"></div>
                            </li>
                            <li data-theme="purple">
                                <div class="purple-theme"></div>
                            </li>
                            <li data-theme="blue">
                                <div class="blue-theme"></div>
                            </li>
                            <li data-theme="cyan">
                                <div class="cyan-theme"></div>
                            </li>
                            <li data-theme="green">
                                <div class="green-theme"></div>
                            </li>
                            <li data-theme="orange">
                                <div class="orange-theme"></div>
                            </li>
                        </ul>
                    </div>
                    <div class="rightSetting">
                        <p>فضای دیسک</p>
                        <div class="sidebar-progress">
                            <div class="progress m-t-20">
                                <div class="progress-bar l-bg-cyan shadow-style width-per-10" role="progressbar"
                                     aria-valuenow="10" aria-valuemin="10" aria-valuemax="100"></div>
                            </div>
                            <span class="progress-description">
                                    <small>{{ $diskSize ?? '' }}</small>
                                </span>
                        </div>
                    </div>
                    <div class="rightSetting m-b-15">
                        <p>پادکست های دانلود شده</p>
                        <div class="sidebar-progress">
                            <div class="progress m-t-20">
                                <div class="progress-bar l-bg-orange shadow-style width-per-100" role="progressbar"
                                     aria-valuenow="100" aria-valuemin="100" aria-valuemax="100"></div>
                            </div>
                            <span class="progress-description">
                                    <small>{{ $downloads ?? '' }} بار</small>
                                </span>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane stretchRight" id="settings">
                <div class="demo-settings">
                    <p>تنظیمات عمومی</p>
                    <ul class="setting-list">
                        <li>
                            <span>گزارش استفاده از پانل</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever switch-col-green"></span>
                                </label>
                            </div>
                        </li>
                        <li>
                            <span>تغییر مسیر ایمیل</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox">
                                    <span class="lever switch-col-blue"></span>
                                </label>
                            </div>
                        </li>
                    </ul>
                    <p>تنظیمات سیستم</p>
                    <ul class="setting-list">
                        <li>
                            <span>اطلاعیه ها</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever switch-col-purple"></span>
                                </label>
                            </div>
                        </li>
                        <li>
                            <span>به روز رسانی خودکار</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever switch-col-cyan"></span>
                                </label>
                            </div>
                        </li>
                    </ul>
                    <p>تنظیمات حساب</p>
                    <ul class="setting-list">
                        <li>
                            <span>آفلاین</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever switch-col-red"></span>
                                </label>
                            </div>
                        </li>
                        <li>
                            <span>مجوز محل سکونت</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox">
                                    <span class="lever switch-col-lime"></span>
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    <!-- #END# Right Sidebar -->
</div>
