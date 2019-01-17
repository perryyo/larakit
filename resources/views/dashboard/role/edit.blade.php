@extends('layouts.app-admin')

@section('content')
    <link href="/assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">
    <link href="/assets/plugins/dropzone/dropzone.min.css" rel="stylesheet">
    <link href="/assets/plugins/dropzone/basic.min.css" rel="stylesheet">
    <main class="mn-inner inner-active-sidebar">
        <div class="middle-content">



            <div id="test5" class="col s12">
                {{--tab start--}}

                <div class="card">
                    <div class="card-content">
                        <span class="card-title">ویرایش نقش</span><br>
                        <div class="row">
                            <form method="POST" class="col s12">
                                {{ csrf_field() }}
                                <div class="row">

                                    <div class="input-field col s6">
                                        <input   value="{{ $row->name }}" name="name" type="text" class="validate">
                                    </div>

                                   <div class="input-field col s6">
                                       <input type="submit" value="ذخیره"  class="waves-effect waves-light btn green m-b-xs">

                                    </div>
                                </div>
                              <div class="row">


                                   <div class="input-field col s6">
                                       <a href="/admin/role"    class="waves-effect waves-light btn pink m-b-xs">فهرست</a>

                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

                 <br>
                <br>
                {{--tab end--}}
            </div>


        </div>


    </main>


    {{--//scripts--}}

@endsection
