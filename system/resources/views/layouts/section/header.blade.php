<header id="header">
    <div class="wpo-site-header wpo-header-style-3">
        <nav class="navigation navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3 col-3 d-lg-none dl-block">
                        <div class="mobail-menu">
                            <button type="button" class="navbar-toggler open-btn">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar first-angle"></span>
                                <span class="icon-bar middle-angle"></span>
                                <span class="icon-bar last-angle"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-6">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="index.html"><img
                                    src="{{ url('public/assets') }}/images/WEDDING.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-1 col-1">
                        <div id="navbar" class="collapse navbar-collapse navigation-holder">
                            <button class="menu-close"><i class="ti-close"></i></button>
                            <ul class="nav navbar-nav mb-2 mb-lg-0">
                                <li class="menu-item-has-children">
                                    <a class="" href="#beranda">BERANDA</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#about">ABOUT</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#fitur">FITUR</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#portofolio">Portofolio</a>
                                </li>

                                <li class="menu-item-has-children">
                                    <a href="#blog">Blog</a>
                                </li>
                                <li><a href="#contact">CONTACT</a></li>
                            </ul>

                        </div><!-- end of nav-collapse -->
                    </div>
                    <div class="col-lg-2 col-md-2 col-2">
                        <div class="header-right">
                            {{-- <div class="header-search-form-wrapper">
                                <div class="cart-search-contact">
                                    <button class="search-toggle-btn"><i class="fi flaticon-search"></i></button>
                                    <div class="header-search-form">
                                        <form>
                                            <div>
                                                <input type="text" class="form-control" placeholder="Search here...">
                                                <button type="submit"><i class="fi flaticon-search"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="mini-cart">
                                <button class="cart-toggle-btn">
                                    <div class="menu-icon">
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                    </div>
                                </button>
                                <div class="mini-cart-content">
                                    <button class="mini-cart-close"><i class="ti-close"></i></button>
                                    <div class="mini-cart-items">
                                        <div class="mini-cart-item clearfix">


                                        </div>
                                    </div>
                                    <div class="mini-cart-action clearfix">
                                        <div class="mini-btn">
                                            <a href="cart.html" class="view-cart-btn">Login</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of container -->
        </nav>
    </div>
    <style>
        .menu-icon {
            width: 30px;
            height: 20px;
            position: relative;
            cursor: pointer;
        }

        .line {
            width: 30px;
            height: 3px;
            background: #000;
            /* Ganti warna sesuai preferensi Anda */
            margin: 5px 0;
        }
    </style>
</header>
