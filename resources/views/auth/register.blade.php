<!DOCTYPE html>
<!-- saved from url=(0047)http://brandio.io/envato/iofrm/html/login5.html -->
<html lang="en" class="gr__brandio_io"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('Register') }}</title>
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
                <img src="/assets/login/graphic2.svg" alt="">
            </div>
        </div>
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <h3>Get more things done with Loggin platform.</h3>
                    <p>Access to the most powerfull tool in the entire design and web industry.</p>
                    <div class="page-links">
                        <a href="http://brandio.io/envato/iofrm/html/login5.html" class="active">{{ __('Register') }}</a>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf


                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Name" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif


                        <input id="email" type="email" placeholder="E-mail Address" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif



                        <input id="password" type="password"  placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif




                        <input id="password-confirm" type="password"  placeholder="Confirm Password" class="form-control" name="password_confirmation" required>





                        <div class="form-button">
                            <button id="submit" type="submit" class="ibtn">{{ __('Register') }}</button>

                        </div>
                    </form>
                    <div class="other-links">
                        <span>Or login with</span><a href="http://brandio.io/envato/iofrm/html/login5.html#">Facebook</a><a href="http://brandio.io/envato/iofrm/html/login5.html#">Google</a><a href="http://brandio.io/envato/iofrm/html/login5.html#">Linkedin</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/assets/login/jquery.min.js"></script>
<script src="/assets/login/popper.min.js"></script>
<script src="/assets/login/bootstrap.min.js"></script>
<script src="/assets/login/main.js"></script>

</body></html>
