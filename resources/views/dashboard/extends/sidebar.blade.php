
     <header class="mn-header navbar-fixed">
    <nav class="cyan darken-1">
        <div class="nav-wrapper row">

            <div class="header-title col s3">
                <span class="chapter-title">اطلس</span>
            </div>
            <form class="left search col s6 hide-on-small-and-down">
                <div class="input-field">
                    <input id="search" type="search" placeholder="جستجو..." autocomplete="off">
                    <label for="search"><i class="material-icons search-icon">search</i></label>
                </div>
                <a href="javascript: void(0)" class="close-search"><i class="material-icons">close</i></a>
            </form>
            <ul class="right col s9 m3 nav-right-menu">
                <li><a href="javascript:void(0)" data-activates="chat-sidebar" class="chat-button show-on-large"><i class="material-icons">more_vert</i></a></li>
                <li class="hide-on-small-and-down"><a href="javascript:void(0)" data-activates="dropdown1" class="dropdown-button dropdown-right show-on-large"><i class="material-icons">notifications_none</i><span class="badge">4</span></a></li>
                <li class="hide-on-med-and-up"><a href="javascript:void(0)" class="search-toggle"><i class="material-icons">search</i></a></li>
            </ul>

            <ul id="dropdown1" class="dropdown-content notifications-dropdown">
                <li class="notificatoins-dropdown-container">
                    <ul>
                        <li class="notification-drop-title">امروز</li>
                        <li>
                            <a href="#!">
                                <div class="notification">
                                    <div class="notification-icon circle cyan"><i class="material-icons">done</i></div>
                                    <div class="notification-text"><p><b>علی علیزاده</b> آپلود قالب جدید</p><span>5 دقیقه پیش</span></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <div class="notification">
                                    <div class="notification-icon circle deep-purple"><i class="material-icons">cached</i></div>
                                    <div class="notification-text"><p><b>علی</b> بروزرسانی وضعیت</p><span>12 دقیقه پیش</span></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <div class="notification">
                                    <div class="notification-icon circle red"><i class="material-icons">delete</i></div>
                                    <div class="notification-text"><p><b>عاطفه محمدی</b> حذف حساب</p><span>30 دقیقه پیش</span></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <div class="notification">
                                    <div class="notification-icon circle cyan"><i class="material-icons">person_add</i></div>
                                    <div class="notification-text"><p><b>حسین حسینی</b> ثبت نام </p><span>2 ساعت پیش</span></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <div class="notification">
                                    <div class="notification-icon circle green"><i class="material-icons">file_upload</i></div>
                                    <div class="notification-text"><p>آپلود فایل</p><span>4 ساعت پیش</span></div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-drop-title">دیروز</li>
                        <li>
                            <a href="#!">
                                <div class="notification">
                                    <div class="notification-icon circle green"><i class="material-icons">security</i></div>
                                    <div class="notification-text"><p>رفع مشکل امنیتی</p><span>16ساعت پیش</span></div>
                                </div>
                            </a>
                        </li>

                    </ul>
                </li>
            </ul>
            <section class="material-design-hamburger navigation-toggle">
                <a href="#" data-activates="slide-out" class="button-collapse show-on-large material-design-hamburger__icon">
                    <span class="material-design-hamburger__layer"></span>
                </a>
            </section>
        </div>
    </nav>
</header>
<div class="search-results">
    <div class="container search-container">
        <div class="row">
            <div class="col s12 search-head">
                <div class="row">
                    <div class="col s12">
                        <div class="left">
                            <p class="search-results-title">نتایج جستجوی سریع</p>
                            <p class="search-filter left">
                                <input type="checkbox" class="filled-in" id="filled-in-box" checked/>
                                <label for="filled-in-box">جستجوی گوگل</label>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="res-not-found">بدون نتیجه</div>
            </div>
            <div class="col s12 m4 search-result-container">
                <div class="card card-transparent">
                    <div class="row valign-wrapper">
                        <div class="col s3">
                            <img src="/assets/images/profile-image-1.png" alt="" class="circle responsive-img z-depth-1">
                        </div>
                        <div class="col s9">
                                        <span class="search-result-text">
                                            جستجوی  <span class="search-text search-result-highlight"></span><br><span class="secondary-search-text">آخرین فعالیت 2 روز پیش</span>
                                        </span>
                        </div>
                    </div>
                </div>
                <div class="card card-transparent">
                    <div class="row valign-wrapper">
                        <div class="col s3">
                            <img src="/assets/images/profile-image-3.jpg" alt="" class="circle responsive-img z-depth-1">
                        </div>
                        <div class="col s9">
                                        <span class="search-result-text">
                                            اخبار درباره <span class="search-text search-result-highlight"></span><br><span class="secondary-search-text">45 وبلاگ</span>
                                        </span>
                        </div>
                    </div>
                </div>
                <div class="card card-transparent">
                    <div class="row valign-wrapper">
                        <div class="col s3">
                            <img src="/assets/images/profile-image.png" alt="" class="circle responsive-img z-depth-1">
                        </div>
                        <div class="col s9">
                                        <span class="search-result-text">
                                            حسین حسینی  (کارمند  <span class="search-text search-result-highlight"></span>)<br><span class="secondary-search-text">آماده همکاری</span>
                                        </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 search-result-container">
                <div class="card card-transparent ">
                    <div class="row valign-wrapper">
                        <div class="col s3">
                            <span class="z-depth-1 circle search-circle indigo lighten-1">F</span>
                        </div>
                        <div class="col s9">
                                        <span class="search-result-text">
                                            <span class="search-text search-result-highlight"></span> در فیس بوک<br><span class="secondary-search-text"><a href="#">نمایش سایت</a></span>
                                        </span>
                        </div>
                    </div>
                </div>
                <div class="card card-transparent">
                    <div class="row valign-wrapper">
                        <div class="col s3">
                            <span class="z-depth-1 circle search-circle light-blue lighten-1">T</span>
                        </div>
                        <div class="col s9">
                                        <span class="search-result-text">
                                            <span class="search-text search-result-highlight"></span> در توییتر<br><span class="secondary-search-text"><a href="#">نمایش سایت</a></span>
                                        </span>
                        </div>
                    </div>
                </div>
                <div class="card card-transparent">
                    <div class="row valign-wrapper">
                        <div class="col s3">
                            <span class="z-depth-1 circle search-circle red darken-1">G</span>
                        </div>
                        <div class="col s9">
                                        <span class="search-result-text">
                                             <span class="search-text search-result-highlight"></span><br><span class="secondary-search-text">در گوگل پلاس<a href="#">نمایش سایت</a></span>
                                        </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 search-result-container">
                <div class="card card-transparent">
                    <div class="card-content first">
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از<span class="search-text search-result-highlight"></span>  دارد. </p>
                    </div>
                    <div class="card-action">
                        <span class="grey-text">دیروز 16:30</span>
                    </div>
                </div>
                <div class="card card-transparent">
                    <div class="card-content">
                        <p>لورم ا استفاده از <span class="search-text search-result-highlight"></span> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از</p>
                    </div>
                    <div class="card-action">
                        <span class="grey-text">دیروز 12:54</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<aside id="chat-sidebar" class="side-nav white">
    <div class="side-nav-wrapper">
        <div class="col s12">
            <ul class="tabs tab-demo" style="width: 100%;">
                <li class="tab col s3"><a href="#sidebar-chat-tab" class="active">گفتگو</a></li>
                <li class="tab col s3"><a href="#sidebar-more-tab">تنظیمات</a></li>
            </ul>
        </div>
        <div id="sidebar-chat-tab" class="col s12 sidebar-messages right-sidebar-panel">
            <p class="right-sidebar-heading">لیست گفتگو ها</p>
            <div class="chat-list">
                <a href="javascript:void(0)" class="chat-message">
                    <div class="chat-item">
                        <div class="chat-item-image">
                            <img src="/assets/images/profile-image.png" class="circle" alt="">
                        </div>
                        <div class="chat-item-info">
                            <p class="chat-name">علی علیزاده</p>
                            <span class="chat-message">سلام</span>
                        </div>
                    </div>
                </a>
                <a href="javascript:void(0)" class="chat-message">
                    <div class="chat-item">
                        <div class="chat-item-image">
                            <img src="/assets/images/profile-image-1.png" class="circle" alt="">
                        </div>
                        <div class="chat-item-info">
                            <p class="chat-name">حسین حسینی</p>
                            <span class="chat-message">چطوری؟ خوبی؟</span>
                        </div>
                    </div>
                </a>
                <a href="javascript:void(0)" class="chat-message">
                    <div class="chat-item">
                        <div class="chat-item-image">
                            <img src="/assets/images/profile-image-3.jpg" class="circle" alt="">
                        </div>
                        <div class="chat-item-info">
                            <p class="chat-name">زهرا محمدی</p>
                            <span class="chat-message">بعدا تماس بگیر</span></div>
                    </div>
                </a>
                <a href="javascript:void(0)" class="chat-message">
                    <div class="chat-item">
                        <div class="chat-item-image">
                            <img src="/assets/images/profile-image.png" class="circle" alt="">
                        </div>
                        <div class="chat-item-info">
                            <p class="chat-name">امیر خاکپور</p>
                            <span class="chat-message">قیمتش چنده؟</span>
                        </div>
                    </div>
                </a>
                <a href="javascript:void(0)" class="chat-message">
                    <div class="chat-item">
                        <div class="chat-item-image">
                            <img src="/assets/images/profile-image-1.png" class="circle" alt="">
                        </div>
                        <div class="chat-item-info">
                            <p class="chat-name">آسیه صادقی</p>
                            <span class="chat-message">نه، اوکیه</span>
                        </div>
                    </div>
                </a>
                <a href="javascript:void(0)" class="chat-message">
                    <div class="chat-item">
                        <div class="chat-item-image">
                            <img src="/assets/images/profile-image.png" class="circle" alt="">
                        </div>
                        <div class="chat-item-info">
                            <p class="chat-name">عاطفه محمدی</p>
                            <span class="chat-message">بعدا میبینمت !</span>
                        </div>
                    </div>
                </a>
                <a href="javascript:void(0)" class="chat-message">
                    <div class="chat-item">
                        <div class="chat-item-image">
                            <img src="/assets/images/profile-image-3.jpg" class="circle" alt="">
                        </div>
                        <div class="chat-item-info">
                            <p class="chat-name">علی علی پور</p>
                            <span class="chat-message">کجا ببینمتون؟</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="chat-sidebar-options">
                <a href="#" class="left"><i class="material-icons">edit</i></a>
                <a href="#" class="right"><i class="material-icons">settings</i></a>
            </div>
        </div>
        <div id="sidebar-more-tab" class="col s12 sidebar-more right-sidebar-panel">
            <p class="right-sidebar-heading">تنظیمات</p>
            <div class="settings-list">
                <div class="setting-item">
                    <div class="setting-text">اطلاع رسانی</div>
                    <div class="setting-set">
                        <div class="switch">
                            <label>
                                <input type="checkbox" checked>
                                <span class="lever"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="setting-item">
                    <div class="setting-text">جستجوی سریع</div>
                    <div class="setting-set">
                        <div class="switch">
                            <label>
                                <input type="checkbox" checked>
                                <span class="lever"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="setting-item">
                    <div class="setting-text">بروزرسانی خودکار</div>
                    <div class="setting-set">
                        <div class="switch">
                            <label>
                                <input type="checkbox">
                                <span class="lever"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <p class="right-sidebar-heading">حساب</p>
            <div class="settings-list">
                <div class="setting-item">
                    <div class="setting-text">حالت آفلاین</div>
                    <div class="setting-set">
                        <div class="switch">
                            <label>
                                <input type="checkbox">
                                <span class="lever"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="setting-item">
                    <div class="setting-text">موقعیت</div>
                    <div class="setting-set">
                        <div class="switch">
                            <label>
                                <input type="checkbox">
                                <span class="lever"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="setting-item">
                    <div class="setting-text">نمایش کاربران آفلاین</div>
                    <div class="setting-set">
                        <div class="switch">
                            <label>
                                <input type="checkbox">
                                <span class="lever"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="setting-item">
                    <div class="setting-text">ذخیره تاریخچه</div>
                    <div class="setting-set">
                        <div class="switch">
                            <label>
                                <input type="checkbox">
                                <span class="lever"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
<aside id="chat-messages" class="side-nav white">
    <p class="sidebar-chat-name">عاطفه محمدی<a href="#" data-activates="chat-messages" class="chat-message-link"><i class="material-icons">keyboard_arrow_right</i></a></p>
    <div class="messages-container">
        <div class="message-wrapper them">
            <div class="circle-wrapper"><img src="/assets/images/profile-image-1.png" class="circle" alt=""></div>
            <div class="text-wrapper">سلام.</div>
        </div>
        <div class="message-wrapper me">
            <div class="circle-wrapper"><img src="/assets/images/profile-image-3.jpg" class="circle" alt=""></div>
            <div class="text-wrapper">سلام. چطوری؟ خوبی؟</div>
        </div>
        <div class="message-wrapper them">
            <div class="circle-wrapper"><img src="/assets/images/profile-image-1.png" class="circle" alt=""></div>
            <div class="text-wrapper">مرسی. شرمنده مزاحم شدم یه کار کوچیک داشتم</div>
        </div>
        <div class="message-wrapper me">
            <div class="circle-wrapper"><img src="/assets/images/profile-image-3.jpg" class="circle" alt=""></div>
            <div class="text-wrapper">خواهش میکنم ما در خدمتیم</div>
        </div>
        <div class="message-wrapper them">
            <div class="circle-wrapper"><img src="/assets/images/profile-image-1.png" class="circle" alt=""></div>
            <div class="text-wrapper">حالا شما یک محل تعیین کنید حضوری خدمتتون عرض میکنم.</div>
        </div>
        <div class="message-wrapper me">
            <div class="circle-wrapper"><img src="/assets/images/profile-image-3.jpg" class="circle" alt=""></div>
            <div class="text-wrapper">باشه مشکلی نیست.</div>
        </div>
    </div>
    <div class="message-compose-box">
        <div class="input-field">
            <input placeholder="" id="message_compose" type="text">
        </div>
    </div>
</aside>
<aside id="slide-out" class="side-nav white fixed">
    <div class="side-nav-wrapper">
        <div class="sidebar-profile">
            <div class="sidebar-profile-image">
                <img src="/assets/images/profile-image.png" class="circle" alt="">
            </div>
            <div class="sidebar-profile-info">
                <a href="javascript:void(0);" class="account-settings-link">
                    <p>Sh3dowCoder</p>
                    <span>حسین محمد زاده<i class="material-icons right">arrow_drop_down</i></span>
                </a>
            </div>
        </div>
        <div class="sidebar-account-settings">
            <ul>
                <li class="no-padding">
                    <a class="waves-effect waves-grey"><i class="material-icons">mail_outline</i>صندوق ورودی</a>
                </li>
                <li class="no-padding">
                    <a class="waves-effect waves-grey"><i class="material-icons">star_border</i>مهم ها<span class="new badge">18</span></a>
                </li>
                <li class="no-padding">
                    <a class="waves-effect waves-grey"><i class="material-icons">done</i>ارسال شده</a>
                </li>
                <li class="no-padding">
                    <a class="waves-effect waves-grey"><i class="material-icons">history</i>تاریخچه</a>
                </li>
                <li class="divider"></li>
                <li class="no-padding">
                    <a class="waves-effect waves-grey"><i class="material-icons">exit_to_app</i>خروج</a>
                </li>
            </ul>
        </div>
        <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
            <li class="no-padding"><a class="waves-effect waves-grey" href="index.html"><i class="material-icons">settings_input_svideo</i>داشبورد</a></li>
            <li class="no-padding">
                <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">apps</i>برنامه ها<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="mailbox.html">ایمیل</a></li>
                        <li><a href="search.html">جستجو</a></li>
                        <li><a href="todo.html">وظایف</a></li>
                    </ul>
                </div>
            </li>
            <li class="no-padding">
                <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">code</i>رابط کاربری<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="ui-accordions.html">آکاردئون</a></li>
                        <li><a href="ui-badges.html">نشان</a></li>
                        <li><a href="ui-buttons.html">دکمه</a></li>
                        <li><a href="ui-typography.html">نوشتارها</a></li>
                        <li><a href="ui-cards.html">پنل</a></li>
                        <li><a href="ui-chips.html">برچسب</a></li>
                        <li><a href="ui-color.html">رنگ</a></li>
                        <li><a href="ui-collections.html">کلکسیون</a></li>
                        <li><a href="ui-dropdown.html">منو</a></li>
                        <li><a href="ui-dialogs.html">دیالوگ</a></li>
                        <li><a href="ui-grid.html">ستون</a></li>
                        <li><a href="ui-helpers.html">راهنما</a></li>
                        <li><a href="ui-modals.html">مدال</a></li>
                        <li><a href="ui-media.html">چندرسانه ای</a></li>
                        <li><a href="ui-icons.html">آیکن ها</a></li>
                        <li><a href="ui-parallax.html">پارالاکس</a></li>
                        <li><a href="ui-preloader.html">لودینگ</a></li>
                        <li><a href="ui-shadow.html">سایه</a></li>
                        <li><a href="ui-tabs.html">تب</a></li>
                        <li><a href="ui-waves.html">موج</a></li>
                    </ul>
                </div>
            </li>
            <li class="no-padding">
                <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">star_border</i>افزونه ها<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="miscellaneous-sweetalert.html">Sweet Alert</a>
                        <li><a href="miscellaneous-code-editor.html">Code Editor</a>
                        <li><a href="miscellaneous-nestable.html">Nestable List</a>
                        <li><a href="miscellaneous-masonry.html">Masonry</a>
                        <li><a href="miscellaneous-idle-timer.html">Idle Timer</a>
                    </ul>
                </div>
            </li>
            <li class="no-padding">
                <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">mode_edit</i>فرم ها<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="form-elements.html">رابط کاربر فرم</a></li>
                        <li><a href="form-upload.html">اپلود فایل</a></li>
                        <li><a href="form-image-crop.html">برش تصویر</a></li>
                        <li><a href="form-image-zoom.html">بزرگنمایی تصویر</a></li>
                        <li><a href="form-input-mask.html">ورودی ماسک</a></li>
                    </ul>
                </div>
            </li>
            <li class="no-padding">
                <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">grid_on</i>جداول<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="table-static.html">جداول ثابت</a></li>
                        <li><a href="table-responsive.html">جداول واکنش گرا</a></li>
                        <li><a href="table-data.html">جدول داده</a></li>
                    </ul>
                </div>
            </li>
            <li class="no-padding"><a class="waves-effect waves-grey" href="charts.html"><i class="material-icons">trending_up</i>نمودار ها</a></li>
            <li class="no-padding">
                <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">my_location</i>نقشه ها<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="maps-google.html">نقشه گوگل</a></li>
                        <li><a href="maps-vector.html">نقشه وکتور</a></li>
                    </ul>
                </div>
            </li>
            <li class="no-padding">
                <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">tag_faces</i>صفحات آماده<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="layout-blank.html">صفحه خالی</a></li>
                        <li><a href="404.html"> خطا 404</a></li>
                        <li><a href="500.html">خطا 500</a></li>
                        <li><a href="invoice.html">فاکتور</a></li>
                        <li><a href="faq.html">سوالات متداول</a></li>
                        <li><a href="sign-in.html">ورود</a></li>
                        <li><a href="sign-up.html">ثبت نام</a></li>
                        <li><a href="lock-screen.html">قفل صفحه</a></li>
                        <li><a href="pattern-lock-screen.html">قفل صفحه الگو</a></li>
                        <li><a href="forgot.html">فراموشی کلمه عبور</a></li>
                        <li><a href="pricing-tables.html">طرح ها (قیمت)</a></li>
                        <li><a href="contact.html">تماس با ما</a></li>
                        <li><a href="gallery.html">گالری</a></li>
                        <li><a href="timeline.html">خط زمانی</a></li>
                        <li><a href="coming-soon.html">بزودی</a></li>
                    </ul>
                </div>
            </li>
        </ul>
        <div class="footer">
            <p class="copyright">Sh3dowCoder ©</p>
            <a href="#!">حریم خصوصی</a> | <a href="#!">قوانین</a>
        </div>
    </div>
</aside>

