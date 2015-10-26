@extends('app.authlayout')

@section('title', 'Signup')

@section('content')

<div class="row">

    <div class="col s3 hide-on-small-only white-text">
        void
    </div>

    <div class="col s12 m6 l6">

        <div class="center-align fix">

            <h2>SuyaBay Podcast</h2>
            <small>create your account</small>
        </div>

        <div class="row">
        
            <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">mode_edit</i>
                            <textarea id="username" class="materialize-textarea"></textarea>
                            <label for="icon_prefix1">
                                Username
                            </label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">mode_edit</i>
                            <input id="email" type="text" class="validate">
                                <label for="email">Email</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">mode_edit</i>
                            <input id="password" type="password" class="validate">
                                <label for="password">Password</label>
                    </div>
                </div>

                <div class="row container">

                    <p class="left">
                        <input type="checkbox" class="filled-in" id="remember-me" checked="checked" />
                        <label for="remember-me">Remember Me</label>
                    </p>

                    <button class="waves-effect waves-light btn right" onclick="register()">
                        Sign Up
                    </button>
                </div>
            
        </div>

        <div class="row container">

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

    <div class="col s3 hide-on-small-only white-text">
        void
    </div>

</div>

@endsection











----------------------------------------------------


@extends('app.authlayout')

@section('title', 'Signup')

@section('content')

<div class="row">

    <div class="col s3 hide-on-small-only white-text">
        void
    </div>

    <div class="col s12 m6 l6">

        <div class="center-align fix">

            <h2>SuyaBay Podcast</h2>
            <small>create your account</small>
        </div>

        <form class="row" action="signup" method="POST">
        
            <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">mode_edit</i>
                            <textarea name="username" class="materialize-textarea"></textarea>
                            <label for="icon_prefix1">
                                Username
                            </label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">mode_edit</i>
                            <input name="email" type="text" class="validate">
                                <label for="email">Email</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">mode_edit</i>
                            <input name="password" type="password" class="validate">
                                <label for="password">Password</label>
                    </div>
                </div>

                <div class="row container">

                    <p class="left">
                        <input type="checkbox" class="filled-in" id="remember-me" checked="checked" />
                        <label for="remember-me">Remember Me</label>
                    </p>

                    <button class="waves-effect waves-light btn right" onclick="/register()">
                        Sign Up
                    </button>
                </div>
            
        </form>

        <div class="row container">

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

    <div class="col s3 hide-on-small-only white-text">
        void
    </div>

</div>

@endsection