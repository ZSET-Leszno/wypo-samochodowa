<!DOCTYPE html>
<html lang="pl">
<head>
    <!--required meta tags-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--facebook og-->
    <meta property="og:url" content="#" />
    <meta name="twitter:title" content="CarShare -  {{ $title or 'undefined'}}" />
    <meta property="og:description" content="CarShare - " />
    <meta property="og:image" content="#" />
    <meta property="og:image:secure_url" content="#" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="600" />
    <!--meta-->
    <meta name="description" content="CarShare - " />
    <meta name="author" content="michus.studio" />
    <!--favicon icon-->
    <link rel="icon" href="{{ $config->base_url }}assets/img/favicon.png" type="image/png" sizes="16x16" />
    <!--title-->
    <title>CarShare - {{ $title or 'undefined'}}</title>
    <!--style:css-->
    <link rel="stylesheet" href="{{ $config->base_url }}assets/css/main.css" />
</head>

<body>
<div class="ring-preloader w-100 h-100 position-fixed start-0 top-0">
    <div class="lds-dual-ring"></div>
</div>
<!--main content wrapper start-->
<div class="main-wrapper">
    <!--header area start-->
    <header class="header-style-one header-sticky <?= (isset($bg)) ? 'border-0' : '' ?>">
        <div class="at_topbar d-none d-sm-block bg-white">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-5 col-8">
                        <div class="tp-info">
                            <p class="mb-0">Witamy! Na CarShare to my wyznaczamy jakość</p>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-4">
                        <div class="tp-info-wrapper d-flex align-items-center justify-content-end">
                            <div class="d-none tp-info d-xl-inline-flex align-items-center">
                                    <span class="icon-wrapper me-2">
                                      <i class="flaticon-location"></i>
                                  </span>
                                <p class="mb-0">Leszno, Polska</p>
                            </div>
                            <div class="tp-info d-inline-flex align-items-center">
                                    <span class="icon-wrapper me-2">
                                      <i class="flaticon-phone-call"></i>
                                  </span>
                                <p class="mb-0">+48 384 748 936</p>
                            </div>
                            <div class="d-none tp-info d-xl-inline-flex align-items-center">
                                    <span class="icon-wrapper me-2">
                                      <i class="flaticon-email"></i>
                                  </span>
                                <p class="mb-0">carshare@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="at_header_nav <?= (isset($bg)) ? $bg : '' ?>">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-6 col-lg-3">
                        <div class="logo-wrapper">
                            <a href="{{ $config->base_url }}strona-glowna"><img src="{{ $config->base_url }}assets/img/logo.webp" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-6 col-lg-9">
                        <div class="at_header_right d-flex align-items-center justify-content-end">
                            <nav class="at_nav_menu d-none d-lg-block">
                                <ul>
                                    <li><a href="{{ $config->base_url }}strona-glowna">Strona Główna</a></li>
                                    <li><a href="{{ $config->base_url }}samochody">Nasza Flota</a></li>
                                    <li><a href="{{ $config->base_url }}kontakt">Kontakt</a></li>
                                </ul>
                            </nav>
                            <a href="{{ $config->base_url }}auth/login" class="listing-btn text-white ms-4 d-none d-sm-block"><span class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-circle text-white me-2"><i class="fa-solid fa-plus"></i></span>Zaloguj się</a>
                            <button class="ofcanvus-toggle header-toggle-btn ms-4 d-none d-lg-block">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                            <button class="mobile-menu-toggle header-toggle-btn ms-4 d-lg-none">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--header area end-->

    <!--mobile menu start-->
    <div class="mobile-menu position-fixed bg-white deep-shadow">
        <button class="close-menu position-absolute"><i class="fa-solid fa-xmark"></i></button>
        <a href="{{ $config->base_url }}strona-glowna" class="logo-wrapper bg-secondary d-block mt-4 p-3 rounded-1 text-center"><img src="{{ $config->base_url }}assets/img/logo.webp" alt="logo" class="img-fluid"></a>
        <nav class="mobile-menu-wrapper mt-40">
            <ul>
                <li><a href="{{ $config->base_url }}strona-glowna">Strona Główna</a></li>
                <li><a href="{{ $config->base_url }}samochody">Nasza Flota</a></li>
                <li><a href="{{ $config->base_url }}kontakt">Kontakt</a></li>
            </ul>
        </nav>
        <div class="contact-info mt-60">
            <h4 class="mb-20">Dane kontaktowe</h4>
            <p>Kręta 15, Leszno, Polska</p>
            <p>+48 746739984</p>
            <p>carshare@gmail.com</p>
            <div class="social-contact">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>
    <!--mobile menu end-->

    <!--ofcanvus menu start-->
    <div class="at_offcanvus_menu position-fixed">
        <button class="at-offcanvus-close"><i class="fa-solid fa-xmark"></i></button>
        <div class="offcanvus-content">
            <h4 class="mb-4">O nas</h4>
            <p>Firma CarShare to profesjonalna wypożyczalnia samochodów oferująca swoje usługi klientom indywidualnym oraz biznesowym. Nasza flota samochodów jest zawsze w doskonałym stanie technicznym, a nasza oferta obejmuje zarówno krótkoterminowy jak i długoterminowy wynajem.</p>
            <p>Jesteśmy zawsze gotowi sprostać potrzebom naszych klientów i zapewnić im wygodny i bezpieczny sposób podróżowania. Dzięki naszemu doświadczeniu i wysokim standardom obsługi możesz być pewny, że wynajem samochodu w naszej wypożyczalni to gwarancja satysfakcji. Zachęcamy do skorzystania z naszych usług!</p>
        </div>
        <div class="offcanvus-contact">
            <h4 class="mb-4 mt-5">Dane kontaktowe</h4>
            <ul class="at_canvus_address">
                <li>Kręta 15, Leszno, Polska</li>
                <li>+48 746739984</li>
                <li>carshare@gmail.com</li>
            </ul>
        </div>
        <div class="at_canvus_social mt-4">
            <a href="{{ $config->social['facebook'] }}" class="social-btn"><i class="fab fa-facebook-f"></i></a>
            <a href="{{ $config->social['instagram'] }}" class="social-btn"><i class="fab fa-instagram"></i></a>
            <a href="{{ $config->social['linkedin'] }}" class="social-btn"><i class="fab fa-linkedin"></i></a>
            <a href="{{ $config->social['twitter'] }}" class="social-btn"><i class="fab fa-twitter"></i></a>
            <a href="{{ $config->social['youtube'] }}" class="social-btn"><i class="fab fa-youtube"></i></a>
        </div>
    </div>
    <!--ofcanvus menu end-->
