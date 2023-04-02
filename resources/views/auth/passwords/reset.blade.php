@include('master.navbar')
@extends('master.layout')
@section('style')

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Raleway, sans-serif;
        }

        body {
            background: linear-gradient(90deg, #ffffff, #ffffff);
        }

        .container {

            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .screen {
            margin-top: -80px;
            background: linear-gradient(90deg,  #FF4B2B, #FF416C);
            position: relative;
            height: 600px;
            width: 400px;
            box-shadow: 0px 0px 5px  #FF4B2B;
        }

        .screen__content {


            z-index: 1;
            position: relative;
            height: 100%;
        }

        .screen__background {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 0;
            -webkit-clip-path: inset(0 0 0 0);
            clip-path: inset(0 0 0 0);
        }

        .screen__background__shape {
            transform: rotate(45deg);
            position: absolute;
        }

        .screen__background__shape1 {
            height: 520px;
            width: 520px;
            background: #FFF;
            top: -50px;
            right: 120px;
            border-radius: 0 72px 0 0;
        }

        .screen__background__shape2 {
            height: 220px;
            width: 220px;
            background: #FF416C;
            top: -172px;
            right: 0;
            border-radius: 32px;
        }

        .screen__background__shape3 {
            height: 540px;
            width: 190px;
            background: linear-gradient(270deg, #FF4B2B, #FF416C);
            top: -24px;
            right: 0;
            border-radius: 32px;
        }

        .screen__background__shape4 {
            height: 400px;
            width: 200px;
            background:#FF4B2B;
            top: 420px;
            right: 50px;
            border-radius: 60px;
        }

        .login {
            margin-left: 40px;
            width: 320px;
            padding: 30px;
            padding-top: 156px;
        }

        .login__field {
            padding: 20px 0px;
            position: relative;
        }

        .login__icon {
            position: absolute;
            top: 30px;
            color:#FF4B2B;
        }

        .login__input {
            border: none;
            border-bottom: 2px solid #D1D1D4;
            background: none;
            padding: 10px;
            padding-left: 24px;
            font-weight: 700;
            width: 75%;
            transition: .2s;
        }

        .login__input:active,
        .login__input:focus,
        .login__input:hover {
            outline: none;
            border-bottom-color: #FF4B2B;
        }

        .login__submit {
            background: #fff;
            font-size: 14px;
            margin-top: 30px;
            padding: 16px 20px;
            border-radius: 26px;
            border: 1px solid#FF4B2B;
            text-transform: uppercase;
            font-weight: 700;
            display: flex;
            align-items: center;
            width: 100%;
            color: #FF4B2B;
            box-shadow: 0px 2px 2px#FF4B2B;
            cursor: pointer;
            transition: .2s;
        }

        .login__submit:active,
        .login__submit:focus,
        .login__submit:hover {
            border-color:#FF4B2B;
            outline: none;
        }

        .button__icon {
            font-size: 24px;
            margin-left: auto;
            color: #FF4B2B;
        }

        .social-login {
            position: absolute;
            height: 140px;
            width: 160px;
            text-align: center;
            bottom: 0px;
            right: 0px;
            color: #fff;
        }

        .social-icons {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .social-login__icon {
            padding: 20px 10px;
            color: #fff;
            text-decoration: none;
            text-shadow: 0px 0px 8px  #FF4B2B;
        }

        .social-login__icon:hover {
            transform: scale(1.5);
        }
        .qust{


            text-decoration: none;
            color: #FFFFFF;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="screen">
            <div class="screen__content">
                    <form method="POST" class="login" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="login__field">
                            <i class="login__icon fas fa-user"></i>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" placeholder="Email Adresse" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        <div class="login__field">
                            <i class="login__icon fas fa-user"></i>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Mot de passe" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        <div class="login__field">
                            <i class="login__icon fas fa-user"></i>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmer mot de passe" required autocomplete="new-password">
                            </div>



                                <button type="submit" class="button login__submit">
                                    <span class="button__text">
                                    {{ __('Reset Password') }}
                                    </span>
                                     <i class="button__icon fas fa-chevron-right"></i>
                                </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
