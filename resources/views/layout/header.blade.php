{{--<header>--}}
{{--    <div class="top-bar">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-6">--}}
{{--                    <ul class="contact-details">--}}
{{--                        <li><a href="tel:+919999127637"><i class="fa fa-mobile"></i> +91-9999127637</a></li>--}}

{{--                        <li><a class="mobile" href="mailto:info@anatelventures.com"><i class="fa fa-envelope"></i> info@anatelventures.com</a></li>--}}

{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="col-md-6">--}}
{{--                    <ul class="social-list">--}}
{{--                        <li><a class="facebook sh-tooltip" data-placement="bottom" target="_blank" title="" href="#" data-original-title="Facebook">--}}
{{--                                <i class="fa fa-facebook"></i>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li><a class="twitter sh-tooltip" data-placement="bottom" target="_blank" title="" href="#" data-original-title="Twitter">--}}
{{--                                <i class="fa fa-twitter"></i>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li><a class="twitter sh-tooltip" data-placement="bottom" target="_blank" title="" href="#" data-original-title="Twitter">--}}
{{--                                <i class="fa fa-instagram"></i>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


{{--    </div>--}}
{{--</header>--}}

<nav class="navbar navbar-expand-md bottom-header navbar-fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
{{--            <img src="img/anatel-logo2.png" alt="">--}}
            <img src="img/anatel-ventures-white.png" class="change-logo" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::segment(1) == '' ? 'active' : null }}">
                    <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{ Request::segment(1) === 'about-us' ? 'active' : null }}" }>
                    <a class="nav-link" href="{{url('about-us')}}">About</a>
                </li>

                <li class="nav-item {{ Request::segment(1) === 'our-business' ? 'active' : null }}">
                    <a class="nav-link" href="{{url('our-business')}}">Business</a>
                </li>
                <li class="nav-item {{ Request::segment(1) === 'contact-us' ? 'active' : null }}">
                    <a class="nav-link" href="{{url('contact-us')}}">Contact</a>
                </li>

            </ul>

        </div>
</nav>