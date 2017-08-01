<div class="header-v6 header-classic-white header-sticky">
    <div class="navbar mega-menu" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="menu-container">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Navbar Brand -->
                <div class="navbar-brand">
                    <a href="{{ route('frontend.home') }}">
                        <img class="shrink-logo" src="frontend/img/logo.jpg" alt="Logo">
                    </a>
                </div>
                <!-- ENd Navbar Brand -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-responsive-collapse">
                <div class="menu-container">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="{{ route('frontend.about_us') }}">
                                About Us
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('frontend.certifications') }}">Certifications</a>
                                    <a href="{{ route('frontend.gallery') }}">Gallery</a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                Services
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('frontend.services.mro-solutions') }}">MRO Solutions</a>
                                    <a href="{{ route('frontend.services.trading') }}">Trading</a>
                                    <a href="{{ route('frontend.services.military-solutions') }}">Military Solutions</a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                MRO Capabilities
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{route('frontend.accessories')}}">Accessories</a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="{{ route('frontend.rfq') }}">
                               RFQ
                            </a>
                        </li>

                        <li class="dropdown">
                            <a href="{{ route('frontend.contact_us') }}">
                                Contact Us
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>