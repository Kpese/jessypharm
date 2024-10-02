<header class="type-1 fixed">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-6 col-sm-2">
                <a href="index.html" class="logo">
                    <img src="{{ asset('frontend/images/logo2.png') }}" style="padding:8px 0; width:50%" alt="">
                </a>
            </div>
            <div class="col-xs-6 col-sm-10 text-right">

                <div class="navigation-wrapper">

                    <a href="index.html" class="logo responsive">
                        <img src="{{ asset('frontend/images/logo2.png') }}" style="padding:8px 0; width:50%" alt="">
                    </a>

                    <div class="navigation-overflow">
                        <nav class="text-left clearfix mynav">
                            <ul>

                                <li class="{{ request()->is('/') ? 'active' : '' }}">
                                    <a href="/" >Home</a>
                                </li>
                                <li>
                                    <a href="#">empty</a>
                                </li>
                                <li class="{{ request()->is('about') ? 'active' : '' }}">
                                    <a href="{{route('about')}}">About us</a>
                                </li>
                                <li class="{{ request()->is('product') ? 'active' : '' }}">
                                    <a href="{{route('product')}}">Products</a>
                                </li>
                                <li class="{{ request()->is('media') ? 'active' : '' }}">
                                    <a href="{{route('media')}}">Media</a>
                                </li>
                                <li class="{{ request()->is('distribution') ? 'active' : '' }}">
                                    <a href="{{route('distribution')}}">Distributors</a>
                                </li>
                                <li class="{{ request()->is('contact') ? 'active' : '' }}">
                                    <a href="{{route('contact')}}">Contact Us</a>
                                </li>

                            </ul>
                        </nav>
                    </div>

                </div>

                <div class="hamburger-icon open-navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

            </div>
        </div>
    </div>
    <div class="close-layer toggle-visibility">
        <div class="button-close"></div>
    </div>
</header>
