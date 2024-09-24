<header class="header-area">
    <div class="sticky-area">
        <div class="navigation">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">

                        <div class="logo">
                            <a class="navbar-brand" href="{{ route('home') }}"><img
                                    src="{{ asset('front/asset2/img/logo.png') }}" alt=""></a>
                        </div>

                    </div>
                    <div class="col-lg-9">
                        <div class="main-menu">
                            <nav class="navbar navbar-expand-lg">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                    <span class="navbar-toggler-icon"></span>
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse justify-content-center"
                                    id="navbarSupportedContent">
                                    <ul class="navbar-nav">

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('about_us') }}">About</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('services') }}">Services</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('projects') }}">Projects</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('locations') }}">Locations</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('blogs') }}">Blogs</a>
                                        </li>

                                    </ul>

                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
