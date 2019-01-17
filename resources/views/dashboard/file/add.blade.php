@extends('layouts.app-admin')

@section('content')
    <link href="/assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">
    <link href="/assets/plugins/dropzone/dropzone.min.css" rel="stylesheet">
    <link href="/assets/plugins/dropzone/basic.min.css" rel="stylesheet">
    <main class="mn-inner inner-active-sidebar">
        <div class="middle-content">




            <div class="col s12">
                <ul class="tabs tab-demo z-depth-1" style="width: 100%;">
                    <li class="tab col s3"><a href="#test5" class="active" >تب اول</a></li>
                    <li class="tab col s3"><a href="#test6">تب دوم</a></li>
                    <li class="tab col s3"><a href="#test7">تب غیرفعال</a></li>
                    <li class="tab col s3"><a href="#test8">تب چهارم</a></li>
                </ul>
            </div>
            <div id="test5" class="col s12">
                {{--tab start--}}
                <div class="card">
                    <div class="card-content">
                        <form action="/file-upload" class="dropzone">
                            <div class="fallback">
                                <input name="file" type="file" multiple />
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">فیلدهای ورودی</span><br>
                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input placeholder="نام" id="first_name" type="text" class="validate">
                                        <label for="first_name">نام</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="last_name" type="text" class="validate">
                                        <label for="last_name">نام خانوادگی</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input disabled value="قابل ویرایش نیست" id="disabled" type="text" class="validate">
                                        <label for="disabled">غیرفعال شده</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="password" type="password" class="validate">
                                        <label for="password">کلمه عبور</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="email" type="email" class="validate">
                                        <label for="email">ایمیل</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">خطای سفارشی</span><br>
                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="email2" type="email" class="validate">
                                        <label for="email2" data-error="آدرس ایمیل اشتباه است !" data-success="right">ایمیل</label>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="input-field col s12">

                                        <input class="with-gap" name="group1" type="radio" id="test3"  />
                                        <label for="test3">سبز</label>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="input-field col s12">

                                        <input class="with-gap" name="group1" type="radio" id="test333"  />
                                        <label for="test333">قرمز</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="checkbox" id="test53" />
                                        <label for="test53">قرمز</label>
                                         </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <select>
                                            <option value="" disabled selected>انتخاب کنید</option>
                                            <option value="1">گزینه اول</option>
                                            <option value="2">گزینه دوم</option>
                                            <option value="3">گزینه سوم</option>
                                        </select>
                                        <label>انتخاب متریالایز</label>
                                         </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s12">
                                        <div class="switch m-b-md">
                                            <label>
                                                خاموش
                                                <input type="checkbox">
                                                <span class="lever"></span>
                                                روشن
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s12">

                                        <textarea id="textarea1" class="materialize-textarea" length="120"></textarea>
                                        <label for="textarea1">متن</label>
                                           </div>
                                </div>



                                <div class="row">
                                    <div class="input-field col s12">

                                        <textarea id="textarea1" class="materialize-textarea" length="120"></textarea>
                                        <label for="textarea1">متن</label>


                                           </div>
                                </div>



                                <div class="row">
                                    <div class="input-field col s12">

                                        <a class="waves-effect waves-grey btn-flat m-b-xs">پیش فرض</a>
                                        <a class="waves-effect waves-purple btn-flat m-b-xs">اصلی</a>
                                        <a class="waves-effect waves-green btn-flat m-b-xs">موفقیت</a>
                                        <a class="waves-effect waves-blue btn-flat m-b-xs">اطلاعات</a>
                                        <a class="waves-effect waves-orange btn-flat m-b-xs">هشدار</a>
                                        <a class="waves-effect waves-red btn-flat m-b-xs">خطر</a>

                                        <a class="waves-effect waves-grey btn white m-b-xs">سفید</a>
                                        <a class="waves-effect waves-light btn indigo m-b-xs">آبی نیلی</a>
                                        <a class="waves-effect waves-light btn pink m-b-xs">صورتی</a>
                                        <a class="waves-effect waves-light btn blue m-b-xs">آبی</a>
                                        <a class="waves-effect waves-light btn green m-b-xs">سبز</a>
                                        <a class="waves-effect waves-light btn orange m-b-xs">نارنجی</a>
                                        <a class="waves-effect waves-light btn red m-b-xs">قرمز</a>
                                        <a class="waves-effect waves-light btn purple m-b-xs">بنفش</a><br>
                                        <a class="waves-effect waves-light btn m-b-xs"><i class="material-icons left">cloud</i>دکمه</a>
                                        <a class="waves-effect waves-light btn m-b-xs"><i class="material-icons right">cloud</i>دکمه</a>


                                        <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
                                        <a class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">send</i></a>
                                        <a class="btn-floating btn-large waves-effect waves-light green"><i class="material-icons">call</i></a>

                                        <a class="waves-effect waves-light btn" href="#!">دکمه موج دار</a>
                                        <a href="#!" class="waves-effect waves-circle waves-light btn-floating btn-large">
                                            <i class="material-icons">add</i>
                                        </a>

                                    </div>
                                </div>





                            </form>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">انتخاب فایل</span>
                        <div class="row">
                            <div class="col s12">
                                <form action="#" class="p-v-xs">
                                    <div class="file-field input-field">
                                        <div class="btn teal lighten-1">
                                            <span>File</span>
                                            <input type="file">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text">
                                        </div>
                                    </div>
                                </form>
                                <form action="#" class="p-v-xs">
                                    <div class="file-field input-field">
                                        <div class="btn teal lighten-1">
                                            <span>File</span>
                                            <input type="file" multiple>
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" placeholder="بارگذاری یک یا چند فایل">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <span class="card-title">انتخاب فایل</span>
                        <div class="row">
                            <div class="col s12">
                                <script src="/assets/__editor___/ckeditor.js"></script>
                                <script src="/assets/__editor___/samples/js/sample.js"></script>
                                <link rel="stylesheet" href="css/samples.css">
                                <link rel="stylesheet" href="toolbarconfigurator/lib/codemirror/neo.css">

                                {{--<textarea cols="300" rows="300" name="content" id="editor">--}}
        {{--&lt;p&gt;This is some sample content.&lt;/p&gt;--}}
    {{--</textarea>--}}

                                <div id="editor">
                                    <h1>Hello world!</h1>
                                    <p>I'm an instance of <a href="https://ckeditor.com">CKEditor</a>.</p>
                                </div>
                                <script>
                                    initSample();
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                {{--tab end--}}
            </div>
            <div id="test6" class="col s12"><p class="p-v-sm">تب دوم</p></div>
            <div id="test7" class="col s12"><p class="p-v-sm">تب سوم</p></div>
            <div id="test8" class="col s12"><p class="p-v-sm">تب چهارم</p></div>




        </div>


    </main>


    {{--//scripts--}}

@endsection
