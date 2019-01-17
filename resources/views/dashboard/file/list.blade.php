@extends('layouts.app-admin')

@section('content')
    <link href="/assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">
    {{--wtf is this ^ ?--}}
    <link rel="stylesheet" href="/assets/faw/css/all.css"  >


    <main class="mn-inner inner-active-sidebar">
        <div class="middle-content">



            <div class="col s12 m12 l6">
                <div class="card">
                    <div class="card-content">
                        <div class="row">
                        <span class="card-title">فهرست مقالات</span>
                            <br>
                        <div class="input-field col s1" style="width: 100px;">
                            <input placeholder="کلیدواژه" name="rfref" id="first_name" type="text" class="validate">

                        </div>
                        <div class="input-field col s1" style="width: 100px;">
                            <select >
                                <option value="" disabled selected>فیلد</option>
                                <option value="1">نام</option>
                                <option value="2">شهر</option>
                                <option value="3">کد ملی</option>
                            </select>
                        </div>
                            <div class="input-field col s2"  >
                                <a class="waves-effect waves-light btn m-b-xs"><i class="material-icons right">search</i>جستجو</a>

                            </div>

                            <div class="input-field col s2" style="width: 100px;">
                            <select >
                                <option value="" disabled selected>تعداد</option>
                                <option value="1">۱۰</option>
                                <option value="2">۵۰</option>
                                <option value="3">۱۰۰</option>
                            </select>
                        </div>

                        </div>

                        <br>
                        <table class="bordered highlight">
                            <thead>
                            <tr>
                                <th data-field="id">نام</th>
                                <th data-field="name">محصول</th>
                                <th data-field="price">قیمت</th>
                                <th data-field="price">قیمت</th>
                                 <th data-field="price">قیمت</th>
                                <th data-field="price">قیمت</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>محمد</td>
                                <td>محصول اول</td>
                                <td>40000 تومان</td>
                                <td>40000 تومان</td>
                                 <td>
                                         <div class="switch m-b-md">
                                            <label>
                                                فعال
                                                <input type="checkbox">
                                                <span class="lever"></span>
                                                غیر فعال
                                            </label>
                                        </div>

                                </td>
                                <td><a class='dropdown-button btn' href='#' data-activates='dropdown2'>نمایش زیرمنو!</a>
                                    <!-- ساختار -->
                                    <ul id='dropdown2' class='dropdown-content'>
                                        <li><a><i class="fas fa-user-edit"  ></i> ویرایش</a></li>
                                        <li><a><i class="fas fa-trash-alt" ></i> حذف</a></li>
                                        <li><a><i class="fas fa-eye"  ></i> مشاهده</a></li>
                                        <li class="divider"></li>
                                        <li><a><i class="fas fa-file-pdf"  ></i> PDF</a></li>
                                        <li><a><i class="fas fa-file-excel"  ></i> excel</a></li>
                                        <li><a><i class="fas fa-comments"  ></i> ارسال پیام </a></li>
                                        <li><a><i class="fas fa-comment-dots"  ></i> ارسال پیام </a></li>
                                        <li><a><i class="fas fa-at"  ></i> ارسال ایمیل </a></li>
                                        <li><a><i class="fas fa-ban"  ></i> ban </a></li>
                                        <li><a><i class="fas fa-globe-americas"  ></i> globe  </a></li>
                                        <li><a><i class="fas fa-bus"  ></i> bus </a></li>
                                        <li><a><i class="fas fa-key"  ></i> key </a></li>
                                        <li><a><i class="fas fa-hashtag"  ></i> hashtag </a></li>
                                        <li><a><i class="fas fa-file-word"  ></i> file-</a></li>
                                        <li><a><i class="fas fa-file-powerpoint"  ></i> file- </a></li>
                                        <li><a><i class="fas fa-file-image"  ></i> file- </a></li>
                                        <li><a><i class="fas fa-file-archive"  ></i> file- </a></li>
                                        <li><a><i class="fas fa-user-graduate"  ></i> user- </a></li>
                                        <li><a><i class="fas fa-chalkboard-teacher"  ></i> chalkb</a></li>
                                        <li><a><i class="fas fa-book-reader"  ></i> book- </a></li>
                                        <li><a><i class="fas fa-award"  ></i> award </a></li>
                                        <li><a><i class="fas fa-palette"  ></i> palette </a></li>
                                        <li><a><i class="fas fa-bell"  ></i> bell </a></li>
                                        <li><a><i class="fas fa-clock"  ></i> clock </a></li>
                                        <li><a><i class="fas fa-euro-sign"  ></i> euro- </a></li>
                                        <li><a><i class="fas fa-bitcoin"  ></i> bitcoin </a></li>
                                        <li><a><i class="fas fa-money-bill-alt"  ></i> mont </a></li>
                                        <li><a><i class="fas fa-upload"  ></i> upload </a></li>
                                        <li><a><i class="fas fa-database"  ></i> database </a></li>
                                        <li><a><i class="fas fa-download"  ></i> download </a></li>
                                        <li><a><i class="fas fa-server"  ></i> server </a></li>
                                        <li><a><i class="fas fa-save"  ></i> save </a></li>
                                        <li><a><i class="fas fa-power-off"  ></i> power </a></li>
                                        <li><a><i class="fas fa-broadcast-tower"  ></i> broadcast </a></li>
                                        <li><a><i class="fas fa-user-secret"  ></i> user </a></li>
                                        <li><a><i class="fas fa-shield-alt"  ></i> block </a></li>
                                        <li><a><i class="fas fa-address-card"  ></i> address- </a></li>
                                        <li><a><i class="fas fa-chart-pie"  ></i> chart- </a></li>
                                        <li><a><i class="fas fa-question-circle"  ></i> question- </a></li>
                                        <li><a><i class="fas fa-universal-access"  ></i> universal- </a></li>

                                     </ul></td>
                             </tr>
                            <tr>
                                <td>علی</td>
                                <td>محصول دوم</td>
                                <td>10000 تومان</td>
                                <td>10000 تومان</td>
                                <td>10000 تومان</td>
                                 <td>10000 تومان</td>
                            </tr>
                            <tr>
                                <td>حسین</td>
                                <td>محصول سوم</td>
                                <td>25000 تومان</td>
                                <td>25000 تومان</td>
                                 <td>25000 تومان</td>
                                <td>25000 تومان</td>
                            </tr>
                            <tr>
                                <td>حسن</td>
                                <td>محصول چهارم</td>
                                <td>15000 تومان</td>
                                 <td>15000 تومان</td>
                                <td>15000 تومان</td>
                                <td>15000 تومان</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>



        </div>


    </main>


    {{--//scripts--}}

@endsection
