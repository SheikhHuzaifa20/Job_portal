@section('title', 'Register')
@extends('layouts.main')
@section('css')
    <style>
        .form-container.sign-in-container.col-md-6 {
            margin: 0 auto;
        }
    </style>
@endsection
@section('content')
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-wrapper inner-banner-wrapper">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="section-heading text-center">
                                    <h1>My Account</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="account">
        <div class="container" id="from-wrapper">
            <div class="form-container sign-in-container col-md-6">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h1>Login</h1>
                    <div class="form-group ">
                        <label>Username or email address*</label>
                        <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                            name="email" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <small class="alert alert-danger w-100 d-block p-2 mt-2">{{ $errors->first('email') }}</small>
                        @endif
                    </div>
                    <div class="form-group password-field">
                        <label>Password*</label>
                        <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                            name="password">
                        @if ($errors->has('password'))
                            <small
                                class="alert alert-danger w-100 d-block p-2 mt-2">{{ $errors->first('password') }}</small>
                        @endif
                        <div style="display: flex; justify-content: space-between; padding-top: 5px;">
                            <a href="{{ url('password/reset') }}" class="pull-right forg_text forgot"> Forgot password? </a>
                            <button  class="btn btn-primary login-btn"  type="submit">Login</button>
                        </div>

                    </div>
                    <hr />
                    <div style="display: flex; justify-content: space-between; padding: 5px 0px;">
                        <h5>If you dont have an Account?</h5>
                        <a href="{{ url('signup') }}" class="pull-right forg_text btn btn-primary">Signup</a>
                    </div>
                </form>
            </div>

        </div>
    </section>
@endsection
@section('js')
    <script>
        $("#phone").on("keypress keyup blur", function(event) {
            $(this).val($(this).val().replace(/[^\d].+/, ""));
            if ((event.which < 48 || event.which > 57)) {
                event.preventDefault();
            }
        });
    </script>
@endsection
