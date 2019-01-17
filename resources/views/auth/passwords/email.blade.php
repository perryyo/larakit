<!DOCTYPE html>
<!-- saved from url=(0047)http://brandio.io/envato/iofrm/html/login5.html -->
<html lang="en" class="gr__brandio_io"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('Reset Password') }}</title>
    <link rel="stylesheet" type="text/css" href="/assets/login/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/login/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/login/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="/assets/login/iofrm-theme5.css">
</head>
<body data-gr-c-s-loaded="true">
<div class="form-body">
    <div class="website-logo">
        <a href="http://brandio.io/envato/iofrm/html/index.html">
            <div class="logo">
                <img class="logo-size" src="/assets/login/logo-light.svg" alt="">
            </div>
        </a>
    </div>
    <div class="row">
        <div class="img-holder">
            <div class="bg"></div>
            <div class="info-holder">
                <a href="/login"><img src="/assets/login/graphic2.svg" alt=""></a>
            </div>
        </div>
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <h3>{{ __('Reset Password') }}</h3>
                    <p>To reset your password, enter the email address you use to sign in to iofrm</p>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                         <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                        <div class="form-button full-width">
                             <button  id="submit" type="submit" class="ibtn btn-forget">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </form>
                </div>
                @if ($errors->has('email'))
                @else
                <script>
                    $(window).on("load", function() {
                        $('.btn-forget').on('click',function(e){
                            e.preventDefault();
                            $('.form-items','.form-content').addClass('hide-it');
                            $('.form-sent','.form-content').addClass('show-it');
                        })
                    });

                </script>
                <div class="form-sent">
                    <div class="tick-holder">
                        <div class="tick-icon"></div>
                    </div>
                    <h3>Password link sent</h3>
                    <p>Please check your inbox iofrm@iofrmtemplate.io</p>
                    <div class="info-holder">
                        <span>Unsure if that email address was correct?</span> <a href="#">We can help</a> <br>
                       <a href="/login">Go To Login Page</a>.
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
<script src="/assets/login/jquery.min.js"></script>
<script src="/assets/login/popper.min.js"></script>
<script src="/assets/login/bootstrap.min.js"></script>
<script src="/assets/login/main.js"></script>

</body></html>
