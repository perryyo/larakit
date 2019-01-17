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
                        <span class="card-title">مشاهده مجوز</span><br>
                        <div class="row">

                                <div class="row">
                                    <div class="input-field col s6">
                                       {{ $row->name }}
                                     </div>


                                </div>
                              <div class="row">


                                   <div class="input-field col s6">
                                       <a href="/admin/permission"    class="waves-effect waves-light btn pink m-b-xs">فهرست</a>

                                    </div>
                                </div>

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
