@include('partials.header', ['title' => 'Kontakt'])
    <!--breadcrumb section start-->
    <section class="breadcrumb-section position-relative z-2 overflow-hidden mt--75" data-background="{{ $config->base_url }}assets/img/shapes/texture-bg.png">
        <img src="{{ $config->base_url }}assets/img/shapes/tire-print-left.png" alt="tire print" class="position-absolute start-0 z-1 tire-print">
        <img src="{{ $config->base_url }}assets/img/shapes/tire-print-right.png" alt="tire print" class="position-absolute end-0 z-1 tire-print">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcrumb-content-wrapper text-center position-relative z-3">
                        <h1 class="text-white">Zostańmy w Kontakcie</h1>
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item text-white fw-500"><a href="{{ $config->base_url }}home">Strona Główna</a></li>
                            <li class="breadcrumb-item text-white fw-500">Kontakt</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--breadcrumb section end-->

    <!--contact section start-->
    <section class="contact-section ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="contact-form-area bg-white rounded">
                        <h4 class="mb-3">Potrzebujesz Pomocy? Wyślij wiadomość!</h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <form id="contact-form" action="{{ $config->base_url }}api/contact" method="post" class="ct-form-wrapper">
                            <div class="row g-4">
                                <div class="col-sm-6">
                                    <div class="input-field">
                                        <label class="fw-semibold text-secondary mb-1" for="name">Imię</label>
                                        <input type="text" id="name" name="name" placeholder="Twoję imię" class="border w-100 rounded" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-field">
                                        <label class="fw-semibold text-secondary mb-1" for="email">E-mail</label>
                                        <input type="email" id="email" name="email" placeholder="Twój E-mail" class="border w-100 rounded" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-field">
                                        <label class="fw-semibold text-secondary mb-1" for="phone">Telefon</label>
                                        <input type="tel" id="phone" name="phone" placeholder="Twój nr. Telefonu" class="border w-100 rounded" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-field">
                                        <label class="fw-semibold text-secondary mb-1" for="subject">Temat</label>
                                        <select class="form-select" id="subject" name="subject" required>
                                            <option></option>
                                            <option>Temat 1</option>
                                            <option>Temat 2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="input-field">
                                        <label class="fw-semibold text-secondary mb-1" for="message">Wiadomość</label>
                                        <textarea placeholder="Twoja Wiadomość" name="message" id="message" class="border w-100 rounded" rows="5" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-md mt-4" type="submit">Wyślij wiadomość</button>
                        </form>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="contact-sidebar-widget py-5 px-4 bg-white rounded mt-5 mt-xl-0">
                        <h4 class="mb-4">Contact Details</h4>
                        <ul class="fs-md">
                            <li class="fw-500"><strong class="fw-bold text-secondary">Siedziba: </strong>Leszno, Polska</li>
                        </ul>
                        <hr class="mt-4 mb-4">
                        <ul class="contact-info">
                            <li class="d-flex align-items-center">
                                <span class="icon-wrapper d-flex align-items-center justify-content-center rounded bg-light-primary rounded-circle flex-shrink-0"><i class="fa-brands fa-whatsapp"></i></span>
                                <div class="ms-3 info-content">
                                    <span class="d-block">Infolinia:</span>
                                    <a href="tel:48123456789">+48 123 456 789</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <span class="icon-wrapper d-flex align-items-center justify-content-center rounded bg-light-primary rounded-circle flex-shrink-0"><i class="fa-regular fa-envelope"></i></span>
                                <div class="ms-3 info-content">
                                    <span class="d-block">E-mail wsparcia</span>
                                    <a href="maito:wsparcie@carshare.pl">wsparcie@carshare.pl</a>
                                </div>
                            </li>
                        </ul>
                        <hr class="mt-30 mb-40">
                        <h6 class="mb-3">Obserwuj Nas</h6>
                        <div class="contact-social">
                            <a href="{{ $config->social['facebook'] }}"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{ $config->social['twitter'] }}"><i class="fab fa-twitter"></i></a>
                            <a href="{{ $config->social['linkedin'] }}"><i class="fab fa-linkedin-in"></i></a>
                            <a href="{{ $config->social['youtube'] }}"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact section end-->

    <!--map area started-->
    <div class="map-area">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d78877.64939460068!2d16.505558471232828!3d51.84403725348014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47059826914dc4d3%3A0x1b48d36e91c7a321!2sLeszno!5e0!3m2!1spl!2spl!4v1678825780887!5m2!1spl!2spl" width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!--map area end-->

@include('partials.footer')
