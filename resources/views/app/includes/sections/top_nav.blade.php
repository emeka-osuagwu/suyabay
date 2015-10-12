<div class="navbar-fixed">
    <nav role="navigation">
        <div class="nav-wrapper" style="background-color: #278898;">

            <!-- Desktop view top nav -->

            <a href="#" class="logo" id="logo-container"> suyabay</a>

            <ul class="right hide-on-med-and-down">
                <li>
                    <a href="#!">
                        <i class="material-icons">add_alert</i>
                    </a>
                </li>
                <li>
                    <a href="#!">
                        <i class="large material-icons circle">person_pin</i>
                    </a>
                </li>
                <li>
                    <a class="waves-effect modal-trigger" href="{{ URL::to('login') }}">Sign in</a>
                    <a class="waves-effect waves-light modal-trigger" href="{{ URL::to('signup') }}">Sign up</a>
                    <a class="waves-effect waves-light modal-trigger green lighten-2" href="#!">Become a Premium User</a>
                </li>
            </ul>

            <ul id="nav-mobile" class="side-nav collection">

                <li class="collection-item">
                    <a href="#">CHANNELS <span class="new badge grey darken-2" style="padding:5px;">4</span></a>
                </li>

                <li class="collection-item">
                    <a href="#">FAVOURITES <span class="new badge grey darken-2" style="padding:5px;">0</span></a>
                </li>

                <li class="collection-item">
                    <a href="{{ URL::to('signin') }}">SIGN IN</a>
                </li>

                <li class="collection-item">
                    <a href="{{ URL::to('signup') }}">SIGN UP</a>
                </li>

                <li class="collection-item">
                    <a href="{{ URL::to('about') }}">ABOUT</a>
                </li>

                <li class="collection-item">
                    <a href="{{ URL::to('faqs') }}">FAQs</a>
                </li>

                <li class="collection-item">
                    <a href="{{ URL::to('privacypolicy') }}">PRIVACY POLICY</a>
                </li>

            </ul>

            <a href="#" data-activates="nav-mobile" class="button-collapse">
                <i class="material-icons">menu</i>
            </a>
        </div>
    </nav>
</div>
