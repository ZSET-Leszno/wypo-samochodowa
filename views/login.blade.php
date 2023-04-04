@include('partials.header', ['title' => 'Logowanie'])
<!--breadcrumb section start-->
<section class="breadcrumb-section position-relative z-2 overflow-hidden mt--75" data-background="{{$config->base_url}}assets/img/shapes/texture-bg.png">
    <img src="{{$config->base_url}}assets/img/shapes/tire-print-left.png" alt="tire print" class="position-absolute start-0 z-1 tire-print">
    <img src="{{$config->base_url}}assets/img/shapes/tire-print-right.png" alt="tire print" class="position-absolute end-0 z-1 tire-print">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="breadcrumb-content-wrapper text-center position-relative z-3">
                    <h1 class="text-white">Logowanie</h1>
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item text-white fw-500"><a href="{{ $config->base_url }}strona-glowna">Strona Główna</a></li>
                        <li class="breadcrumb-item text-white fw-500">Logowanie</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!--breadcrumb section end-->

<!--login section-->
<section class="login-section ptb-120 position-relative z-1 overflow-hidden">
    <span class="bg-primary-blur position-absolute z--1 start-50 top-0 tarnslate-middle-x"></span>
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-xxl-4">
                <div class="login-form-area">
                    <h2 class="mb-5">Witaj!</h2>
                    <form class="login-form">
                        <label class="fw-semibold text-secondary mb-2">Email</label>
                        <input type="email" placeholder="Wpisz swój adres email" class="w-100 rounded">

                        <label class="fw-semibold text-secondary mb-2 mt-4">Hasło</label>
                        <input type="password" placeholder="Wpisz swoje hasło" class="w-100 rounded">
                        <div class="login-btns col-12 mt-40">
                            <button type="submit" class="btn btn-primary">Zaloguj się</button>
                        </div>
                        <p class="text-xl-center mt-4">Nie posiadasz konta? <a href="{{$config->base_url}}rejestracja">Zarejestruj się</a></p>
                    </form>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 offset-xl-2">
                <div class="login-form-right position-relative z-1 mt-5 mt-xl-0">
                    <img src="{{$config->base_url}}assets/img/login-illustration.png" alt="not found" class="img-fluid">
                    <span class="bg-star-color position-absolute z--1 end-0 bottom-0"></span>
                    <img src="{{$config->base_url}}assets/img/shapes/ball.png" alt="not found" class="position-absolute ball-shape z--1">
                </div>
            </div>
        </div>
    </div>
</section>
<!--login section end-->

@include('partials.footer')
