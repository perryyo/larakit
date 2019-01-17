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
                        <span class="card-title">تخصیص نقش به کاربر</span><br>
                        <div class="row">
                            <form method="POST" class="col s12">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="input-field col s6">
                                        <div class="input-field col s6">
                                            {{ $user->name }}
                                            <input type="hidden" value="{{ $user->id }}" name="user_id">
                                        </div>
                                    </div>
                                    <div class="input-field col s6">
                                        <select name="role_id">
                                            <option value="" disabled selected>انتخاب نقش</option>
                                            @foreach($roles as $role)
                                            <option value="{{ $role->name }}">{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                        <label>انتخاب نقش</label>
                                    </div>

                                   <div class="input-field col s6">
                                       <input type="submit" value="ذخیره"  class="waves-effect waves-light btn green m-b-xs">

                                    </div>
                                </div>
                              <div class="row">


                                   <div class="input-field col s6">
                                       <a href="/admin/{{ $node }}"    class="waves-effect waves-light btn pink m-b-xs">فهرست</a>

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
