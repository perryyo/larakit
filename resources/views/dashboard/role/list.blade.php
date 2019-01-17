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
                        <span class="card-title">فهرست نقش ها</span>
                            <br>
                            @if(count($list)>0)
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
                            @endif
                                <div class="input-field col s4">

                                </div>

                                <div class="input-field col s2">
                                    <a href="/admin/role/add"    class="waves-effect waves-light btn pink m-b-xs">افزودن</a>

                                </div>

                        </div>

                        <br>
                        @if(count($list)>0)
                        <table class="bordered highlight">
                            <thead>
                            <tr>
                                <th data-field="id">#</th>
                                <th data-field="name">نام</th>
                                <th data-field="price"></th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($list as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td><a class='dropdown-button btn' href='#' data-activates='dropdown{{ $item->id }}'>انتخاب عملیات</a>
                                    <!-- ساختار -->
                                    <ul id='dropdown{{ $item->id }}' class='dropdown-content'>
                                        <li><a href="/admin/role/{{ $item->id }}"><i class="fas fa-user-edit"></i> ویرایش</a></li>
                                        <li><a href="/admin/role/{{ $item->id }}/delete"><i class="fas fa-trash-alt"></i> حذف</a></li>
                                        <li><a href="/admin/role/{{ $item->id }}/show"><i class="fas fa-eye"></i> مشاهده</a></li>
                                    </ul></td>
                             </tr>
                            @endforeach

                            </tbody>
                        </table>
                        @else
                        هنوز رکوردی ثبت نشده است
                            <br>
                            <br>
                        @endif

                    </div>
                </div>



        </div>


    </main>


    {{--//scripts--}}

@endsection
