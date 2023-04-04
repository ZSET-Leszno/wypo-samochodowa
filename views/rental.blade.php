@include('partials.header', ['title' => 'Wypożycz: '.$car['marka'].' '.$car['model']])

<!--hero banner start-->
<div class="cr-hero-banner">
    <img src="<?= $config->base_url ?>assets/img/rental/banner.jpg" alt="not found" class="img-fluid">
</div>
<!--hero banner end-->

<!--car info-->
<section class="car-info pb-30">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="car-info-box bg-white rounded d-flex flex-wrap align-items-center justify-content-between">
                    <div class="info-left">
                        <h3><?= $car['marka'].' '.$car['model']?></h3>
                        <span class="pricing text-primary d-block fw-bold mt-4"><?= $car['cena_za_dzien'];?>/<span>Dziennie</span></span>
                    </div>
                    <div class="right-btns d-flex flex-wrap align-items-center mt-30 mt-md-0">
                        <a href="#"><i class="fa-solid fa-share-nodes"></i></a>
                        <a href="#"><i class="fa-solid fa-code-compare"></i></a>
                        <a href="#"><i class="fa-regular fa-heart"></i></a>
                        <a href="#"><i class="fa-solid fa-print"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--car info end-->

<!--rental description-->
<section class="rental-description pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="rental-feature-box bg-white rounded overflow-hidden">
                    <div class="title-wrapper d-flex mb-30">
                        <h4 class="mb-0 flex-shrink-0">Key Features</h4>
                        <span class="spacer align-self-end ms-3"></span>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="iv_info_item d-flex align-items-center">
                                <span class="icon-wrapper d-inline-flex align-items-center justify-content-center border rounded flex-shrink-0">
                                        <i class="flaticon-drive"></i>
                                </span>
                                <div class="info_content">
                                    <span class="meta">Body Type</span>
                                    <span class="title">Crossover</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="iv_info_item d-flex align-items-center">
                                        <span class="icon-wrapper d-inline-flex align-items-center justify-content-center border rounded flex-shrink-0">
                                        <i class="flaticon-speedometer"></i>
                                    </span>
                                <div class="info_content">
                                    <span class="meta">Mileage</span>
                                    <span class="title">70,000 (Mi)</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="iv_info_item d-flex align-items-center">
                                        <span class="icon-wrapper d-inline-flex align-items-center justify-content-center border rounded flex-shrink-0">
                                        <i class="flaticon-energy"></i>
                                    </span>
                                <div class="info_content">
                                    <span class="meta">Transmission</span>
                                    <span class="title">Autometic</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="iv_info_item d-flex align-items-center">
                                        <span class="icon-wrapper d-inline-flex align-items-center justify-content-center border rounded flex-shrink-0">
                                        <i class="flaticon-car-repair"></i>
                                    </span>
                                <div class="info_content">
                                    <span class="meta">Condition</span>
                                    <span class="title">Used</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="iv_info_item d-flex align-items-center">
                                        <span class="icon-wrapper d-inline-flex align-items-center justify-content-center border rounded flex-shrink-0">
                                        <i class="flaticon-engine"></i>
                                    </span>
                                <div class="info_content">
                                    <span class="meta">Engine Size</span>
                                    <span class="title">1,599 (cc)</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="iv_info_item d-flex align-items-center">
                                        <span class="icon-wrapper d-inline-flex align-items-center justify-content-center border rounded flex-shrink-0">
                                        <i class="flaticon-new-year"></i>
                                    </span>
                                <div class="info_content">
                                    <span class="meta">Year</span>
                                    <span class="title">2018</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="iv_info_item d-flex align-items-center">
                                        <span class="icon-wrapper d-inline-flex align-items-center justify-content-center border rounded flex-shrink-0">
                                        <i class="flaticon-steering-wheel-1"></i>
                                    </span>
                                <div class="info_content">
                                    <span class="meta">Drivetrian</span>
                                    <span class="title">Front Wheel</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="iv_info_item d-flex align-items-center">
                                        <span class="icon-wrapper d-inline-flex align-items-center justify-content-center border rounded flex-shrink-0">
                                        <i class="flaticon-petrol"></i>
                                    </span>
                                <div class="info_content">
                                    <span class="meta">Fuel Type</span>
                                    <span class="title">Diesel</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="iv_info_item d-flex align-items-center">
                                        <span class="icon-wrapper d-inline-flex align-items-center justify-content-center border rounded flex-shrink-0">
                                        <i class="flaticon-drive"></i>
                                    </span>
                                <div class="info_content">
                                    <span class="meta">Color</span>
                                    <span class="title">Black</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="iv_info_item d-flex align-items-center">
                                        <span class="icon-wrapper d-inline-flex align-items-center justify-content-center border rounded flex-shrink-0">
                                        <i class="flaticon-gas-tank"></i>
                                    </span>
                                <div class="info_content">
                                    <span class="meta">Cylinders</span>
                                    <span class="title">06</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="iv_info_item d-flex align-items-center">
                                        <span class="icon-wrapper d-inline-flex align-items-center justify-content-center border rounded flex-shrink-0">
                                        <i class="flaticon-drive"></i>
                                    </span>
                                <div class="info_content">
                                    <span class="meta">VIN</span>
                                    <span class="title">1C4TJPBA1CD</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="iv_info_item d-flex align-items-center">
                                <span class="icon-wrapper d-inline-flex align-items-center justify-content-center border rounded flex-shrink-0">
                                        <i class="flaticon-car-door"></i>
                                    </span>
                                <div class="info_content">
                                    <span class="meta">Drzwi</span>
                                    <span class="title">2 Doors</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="title-wrapper d-flex mt-70 mb-4">
                        <h4 class="mb-0 flex-shrink-0">O samochodzie</h4>
                        <span class="spacer align-self-end ms-3"></span>
                    </div>
                    <p>

                    </p>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="sidebar-widgets-wrapper">
                    <div class="sidebar-widget reservation-widget bg-white rounded widget-padding">
                        <h4 class="mb-30">Rezerwacja pojazdu</h4>
                        <form action="#">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="input-field">
                                        <label class="fw-semibold text-secondary mb-2">Full Name*</label>
                                        <input type="text" placeholder="Full Name" class="border w-100 rounded">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="input-field mt-4">
                                        <label class="fw-semibold text-secondary mb-2">Email Address*</label>
                                        <input type="email" placeholder="Full Name" class="border w-100 rounded">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="input-field mt-4">
                                        <label class="fw-semibold text-secondary mb-2">Phone*</label>
                                        <input type="tel" placeholder="Phone" class="border w-100 rounded">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="input-field mt-4">
                                        <label class="fw-semibold text-secondary mb-2">Pickup Date</label>
                                        <input type="text" class="theme-date-input border w-100 rounded-2" placeholder="08/16/2022 4:28 PM">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="input-field mt-4">
                                        <label class="fw-semibold text-secondary mb-2">Drop Off Date</label>
                                        <input type="text" class="theme-date-input border w-100 rounded-2" placeholder="08/16/2022 4:28 PM">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 mt-40">Rezerwacja tego samochodu</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--rental description end-->
@include('partials.footer')