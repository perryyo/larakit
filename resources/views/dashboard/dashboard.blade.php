@extends('layouts.app-admin')

@section('content')
    <main class="mn-inner inner-active-sidebar">
        <div class="middle-content">
            <div class="row no-m-t no-m-b">
                <div class="col s12 m12 l4">
                    <div class="card stats-card">
                        <div class="card-content">
                            <div class="card-options">
                                <ul>
                                    <li class="red-text">
                                            <span class="badge green lighten-1">
                                                 افزایش 100d02%
                                            </span>
                                    </li>
                                </ul>
                            </div>
                            <span class="card-title">فروش امروز</span>
                            <span class="stats-counter"><span class="counter">460000</span><small>تومان</small></span>
                        </div>
                        <div id="sparkline-bar"></div>
                    </div>
                </div>
                <div class="col s12 m12 l4">
                    <div class="card stats-card">
                        <div class="card-content">
                            <span class="card-title">ثبت نام امروز</span>
                            <span class="stats-counter"><span class="counter">465946</span></span>

                        </div>
                        <div class="progress stats-card-progress">
                            <div class="determinate" style="width: 70%"></div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l4">
                    <div class="card stats-card">
                        <div class="card-content">

                            <span class="card-title">بازدید</span>
                            <span class="stats-counter"><span class="counter">94857</span><small>هفته کنونی</small></span>
                        </div>
                        <div id="sparkline-line"></div>
                    </div>
                </div>
            </div>
            <div class="row no-m-t no-m-b">
                <div class="col s12 m12 l8">
                    <div class="card visitors-card">
                        <div class="card-content">
                            <div class="card-options">
                                <ul>
                                    <li><a href="javascript:void(0)" class="card-refresh"><i class="material-icons">refresh</i></a></li>
                                </ul>
                            </div>
                            <span class="card-title">نمودار نسبت ثبت نام به فروش<span class="secondary-title">نمایش اطلاعات مربوط به هفته جاری</span></span>
                            <div id="flotchart1"></div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l4">
                    <div class="card server-card">
                        <div class="card-content">
                            <div class="card-options">
                                <ul>
                                    <li class="red-text"><span class="badge blue-grey lighten-3">معمولی</span></li>
                                </ul>
                            </div>
                            <span class="card-title">آمار و ارقام</span>
                            <div class="server-load row">
                                <div class="server-stat col s4">
                                    <p>465845</p>
                                    <span>کاربر</span>
                                </div>
                                <div class="server-stat col s4">
                                    <p>4670</p>
                                    <span>فروش</span>
                                </div>
                                <div class="server-stat col s4">
                                    <p>42500000</p>
                                    <span>سود ماه</span>
                                </div>
                            </div>
                            <div class="stats-info">
                                <ul>
                                    <li>ثبت نام امروز<div class="percent-info green-text right">32% <i class="material-icons">trending_up</i></div></li>
                                    <li>ثبت نام هفته<div class="percent-info red-text right">20% <i class="material-icons">trending_down</i></div></li>
                                    <li>ثبت نام ماه<div class="percent-info green-text right">18% <i class="material-icons">trending_up</i></div></li>
                                </ul>
                            </div>
                            <div id="flotchart2"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row no-m-t no-m-b">
                <div class="col s12 m12 l12">
                    <div class="card invoices-card">
                        <div class="card-content">
                            <div class="card-options">
                                <input type="text" class="expand-search" placeholder="جستجو" autocomplete="off">
                            </div>
                            <span class="card-title">فاکتور ها</span>
                            <table class="responsive-table bordered">
                                <thead>
                                <tr>
                                    <th data-field="id">شناسه</th>
                                    <th data-field="number">نوع پرداخت</th>
                                    <th data-field="company">نام خریدار</th>
                                    <th data-field="date">تاریخ ثبت</th>
                                    <th data-field="progress">وضعیت</th>
                                    <th data-field="total">قیمت</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>#203</td>
                                    <td>آنلاین</td>
                                    <td>علی حسین زاده</td>
                                    <td>1396/1/5 12:10:16</td>
                                    <td>
                                            <span class="badge green darken-1 white-text">
                                                 پرداخت شده
                                            </span>
                                    </td>
                                    <td>14000 تومان</td>
                                </tr>
                                <tr>
                                    <td>#202</td>
                                    <td>کارت به کارت</td>
                                    <td>بردیا کاویان پور</td>
                                    <td>1396/1/5 10:19:52</td>
                                    <td>
                                            <span class="badge green darken-1 white-text">
                                                 پرداخت شده
                                            </span>
                                    </td>
                                    <td>18000 تومان</td>
                                </tr>
                                <tr>
                                    <td>#201</td>
                                    <td>کارت به کارت</td>
                                    <td>حسین حسینی</td>
                                    <td>1396/1/5 08:20:40</td>
                                    <td>
                                                <span class="badge yellow darken-2 white-text">
                                                     پرداخت نشده
                                                </span>
                                    </td>
                                    <td>70000 تومان</td>
                                </tr>
                                <tr>
                                    <td>#199</td>
                                    <td>کارت به کارت</td>
                                    <td>محمد علیزاده</td>
                                    <td>1396/1/4 18:24:29</td>
                                    <td>
                                            <span class="badge green darken-1 white-text">
                                                 پرداخت شده
                                            </span>
                                    </td>
                                    <td>62500 تومان</td>
                                </tr>
                                <tr>
                                    <td>#198</td>
                                    <td>آنلاین</td>
                                    <td>امیر اسماعیلی</td>
                                    <td>1396/1/4 15:30:10</td>
                                    <td>
                                            <span class="badge green darken-1 white-text">
                                                 پرداخت شده
                                            </span>
                                    </td>
                                    <td>14000 تومان</td>
                                </tr>
                                <tr>
                                    <td>#197</td>
                                    <td>آنلاین</td>
                                    <td>باران یحی پور</td>
                                    <td>1396/1/4 90:11:50</td>
                                    <td>
                                            <span class="badge yellow darken-2 white-text">
                                                 پرداخت نشده
                                            </span>
                                    </td>
                                    <td>14000 تومان</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="inner-sidebar">
            <span class="inner-sidebar-title">آخرین پیام ها</span>
            <div class="message-list">
                <div class="info-item message-item"><img class="circle" src="/assets/images/profile-image-2.png" alt=""><div class="message-info"><div class="message-author">حسین حسین زاده</div><small>3 ساعت پیش</small></div></div>
                <div class="info-item message-item"><img class="circle" src="/assets/images/profile-image.png" alt=""><div class="message-info"><div class="message-author">علی کاویان شهر</div><small>12 ساعت پیش</small></div></div>
                <div class="info-item message-item"><img class="circle" src="/assets/images/profile-image-1.png" alt=""><div class="message-info"><div class="message-author">زهرا حسینی</div><small>4 روز پیش</small></div></div>
            </div>
            <span class="inner-sidebar-title">وضعیت</span>
            <span class="info-item">پیام خوانده نشده<span class="new badge">12</span></span>
            <div class="inner-sidebar-divider"></div>
            <span class="info-item"> پیام بی پاسخ <span class="new yellow darken-2 badge">34</span></span>
            <div class="inner-sidebar-divider"></div>
            <span class="info-item disabled"><a href="#">مشاهده همه پیام ها</a></span>
            <div class="inner-sidebar-divider"></div>

            <span class="inner-sidebar-title">وضعیت کلی سایت <i class="material-icons">trending_up</i></span>
            <div class="sidebar-radar-chart"><canvas id="radar-chart" width="170" height="140"></canvas></div>


        </div>

    </main>




@endsection
