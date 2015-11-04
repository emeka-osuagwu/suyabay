@extends('app.authlayout')

@section('title', 'Signup | SuyaBay')

@section('content')

<div class="col s12 m6 l12 spacer">

    <div class="row center-align">
        <h2> Sign up for an account</h2>
    </div>

    <div>
        <form class="form col s6 center offset-s3" action="/signup" method="POST">
            <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
            <div class="input-field">
                <i class="material-icons prefix">perm_identity</i>
                    <input id="username" type="text" name="username" class="validate" />
                <label for="icon_prefix1">
                    Username
                </label>
            </div>

            <div class="input-field">
                <i class="material-icons prefix">turned_in_not</i>
                    <input id="email" name="email" type="email" class="validate" value="{{ isset($email) ? $email : '' }}">
                    <label for="email">Email</label>
            </div>

            <div class="input-field">
                <i class="material-icons prefix">lock_outline</i>
                    <input id="password" type="password" name="password" class="validate" />
                    <label for="password">Password</label>
            </div>

            <div>
                <p class="left">
                    <input type="checkbox" class="filled-in" id="remember-me" checked="checked" />
                    <label for="remember-me">Remember Me</label>
                    <input type="hidden" name="github" value="{{ isset($github) ? $github : '0' }}">
                    <input type="hidden" name="facebook" value="{{ isset($facebook) ? $facebook : '0' }}">
                    <input type="hidden" name="twitter" value="{{ isset($twitter) ? $twitter : '0' }}">
                </p>

                <button class="waves-effect waves-light btn right" >
                    Sign Up
                </button>
            </div>
        </form>
    </div>

    <div class="col s6 center offset-s3">
        <span>
            <small>
                Already a user?
            </small>
        </span>

        <span>
            <small>
                <a href="{{ URL::to('login') }}"> Sign In to your account</a>
            </small>
        </span>

    </div>

</div>

@endsection
