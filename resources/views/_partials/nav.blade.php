@inject('customHelper', \App\CustomClasses\SettingsHelper)
<header>
    <div id="header-layout1" class="header-style1">
        <div class="main-menu-area bg-background-main header-menu-fixed" id="sticker">
            <div class="container">
                <div class="row no-gutters d-flex align-items-center">
                    <div class="col-lg-2 d-none d-lg-block">
                        <div class="logo-area">
                            <a href="/">
                                <img src="{{ asset('public/img/logo.jpg') }}" alt="logo" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 position-static min-height-none">
                        <div class="ne-main-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li class="active">
                                        <a href="/">Home</a>
                                    </li>
                                    @foreach($customHelper->menus() as $menu)
                                    <li>
                                        <a @if($menu->new_tab==1) target="_blank" @endif @if($menu->source=="category") href="category/{{ $menu->url }}" @else href="page/{{ $menu->url }}" @endif >{{ $menu->title }}</a>
                                        @if($menu->is_dropdown=="yes")
                                            @if(isset($menu->category->subCategory))
                                        <ul class="ne-dropdown-menu">
                                            @foreach($menu->category->subCategory as $subCategory)
                                            <li>
                                                <a href="#">Laravel 8</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                            @endif
                                            @endif
                                    </li>
                                    @endforeach
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-12 text-right position-static">
                        <div class="header-action-item">
                            <ul>
                                <li>
                                    <form id="top-search-form" class="header-search-light">
                                        <input type="text" class="search-input" placeholder="Search...." required="" style="display: none;">
                                        <button class="search-button">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </button>
                                    </form>
                                </li>
                                <li>
                                    <button type="button" class="login-btn" data-toggle="modal" data-target="#myModal">
                                        <i class="fa fa-user" aria-hidden="true"></i>Sign in
                                    </button>
                                </li>
                                <li>
                                    <div id="side-menu-trigger" class="offcanvas-menu-btn">
                                        <a href="#" class="menu-bar">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </a>
                                        <a href="#" class="menu-times close">
                                            <span></span>
                                            <span></span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
