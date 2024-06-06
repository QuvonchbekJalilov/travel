<?php
$lang = \Illuminate\Support\Facades\App::getLocale();

?><!-- Main Header -->
<header class="header header_style_one">
    <div class="middle_bar">
        <div class="auto-container">
            <div class="middle_bar_inner d-flex align-items-center justify-content-center justify-content-between gap-4 flex-wrap">
                <!-- Logo -->
                <div class="logo">
                    <a href="{{ route('index')}}" class="logo_default"><img src="/frontend/images/MiracleTourLogo.png"
                                                                            alt="img" style="height:50px"></a>
                </div>
                <div class="mainnav d-none d-lg-block">
                    <ul class="main_menu">
                        <li class="menu-item"><a href="{{ route('index')}}">{{__('main.home')}}</a>
                        </li>
                        <li class="menu-item"><a href="/about">{{__('main.about')}}</a>
                        </li>
                        <li class="menu-item"><a href="{{ route('tour')}}">{{__('main.tour')}}</a>
                        </li>
                        <li class="menu-item"><a href="{{route('blog')}}">{{__('main.blog')}}</a>
                        </li>
                        <li class="menu-item"><a href="{{route('contact')}}">{{__('main.contact')}}</a>
                        </li>
                        <li class="menu-item menu-item-has-children"><a href="#">
                                @if($lang == 'en')
                                    Language: en
                                @endif
                                @if($lang == 'ru')
                                    язык: ru
                                @endif
                                @if($lang == 'uz')
                                    Til: uz
                                @endif
                            </a>
                            <ul class="sub-menu">
                                <li><a class="dropdown-item" href="/ru">Руc</a></li>
                                <li><a class="dropdown-item" href="/uz">Uzb</a></li>

                                <li><a class="dropdown-item" href="/en">En</a></li>
                            </ul>
                        </li>


                    </ul>

                </div>

                <div class="other_elements_wrapper d-flex align-items-center gap-4">
                    <!-- Button Box -->


                    <!-- Mobile Menu Toggle Button -->
                    <div class="mr_menu_toggle d-lg-none">
                        <span class="toggle_line"></span>
                        <span class="toggle_line"></span>
                        <span class="toggle_line"></span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>

<!-- Sticky/Fixed Nav -->


<!-- Mobile Responsive Menu -->
<div class="mr_menu d-lg-none">

    <button type="button" class="mr_menu_close"><i class="fa fa-times"></i></button>
    <div class="logo"></div> <!-- Keep this div empty. Logo will come here by JavaScript -->
    <div class="mr_navmenu"></div> <!-- Keep this div empty. Menu will come here by JavaScript -->
</div>
<!-- End Main Header -->