@include('partials.header', ['title' => 'Nasza Flota'])

<!--breadcrumb section start-->
<section class="breadcrumb-section position-relative z-2 overflow-hidden mt--75" data-background="{{ $config->base_url }}assets/img/shapes/texture-bg.png">
    <img src="{{ $config->base_url }}assets/img/shapes/tire-print-left.png" alt="tire print" class="position-absolute start-0 z-1 tire-print">
    <img src="{{ $config->base_url }}assets/img/shapes/tire-print-right.png" alt="tire print" class="position-absolute end-0 z-1 tire-print">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="breadcrumb-content-wrapper text-center position-relative z-3">
                    <h1 class="text-white">Nasza Flota</h1>
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item text-white fw-500"><a href="{{ $config->base_url }}strona-glowna">Strona Główna</a></li>
                        <li class="breadcrumb-item text-white fw-500">Nasza Flota</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!--breadcrumb section end-->

<!--inventory details-->
<section class="inventory-details-area ptb-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-3">
                <div class="iv2_sidebar bg-white rounded overflow-hidden">
                    <div class="iv2_sidebar_widget iv2_search_widget">
                        <h6 class="mb-3">Czego szukasz:</h6>
                        <form class="d-flex align-items-center">
                            <input type="text" placeholder="Wyszukaj samochód" class="border border-end-0 rounded-start w-100">
                            <button type="submit" class="bg-transparent border rounded-end flex-shrink-0"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </div>
                    <div class="iv2_sidebar_widget iv2_checkfilter_widget">
                        <div class="accordion iv2_sidebar_accordion">
                            <div class="accordion-item border-0">
                                <h6 class="accordion-header">
                                    <a href="#acc_1" class="accordion-button bg-transparent text-secondary p-0 pe-1" data-bs-toggle="collapse">Marka</a>
                                </h6>
                                <div class="collapse show" id="acc_1">
                                    <div class="accordion-body ps-0 pb-0 pe-2">
                                        <ul class="iv2_sidebar_list at_scrollbar">
                                            <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Chevrolet</label></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="iv2_sidebar_widget iv2_checkfilter_widget">
                        <div class="accordion iv2_sidebar_accordion">
                            <div class="accordion-item border-0">
                                <h6 class="accordion-header">
                                    <a href="#acc_2" class="accordion-button bg-transparent text-secondary p-0 pe-1" data-bs-toggle="collapse">Typ nadwozia</a>
                                </h6>
                                <div class="collapse show" id="acc_2">
                                    <div class="accordion-body ps-0 pb-0 pe-2">
                                        <ul class="iv2_sidebar_list at_scrollbar">
                                            <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Suv</label></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="iv2_sidebar_widget iv2_checkfilter_widget">
                        <div class="accordion iv2_sidebar_accordion">
                            <div class="accordion-item border-0">
                                <h6 class="accordion-header">
                                    <a href="#acc_4" class="accordion-button bg-transparent collapsed text-secondary p-0 pe-1" data-bs-toggle="collapse">Rok</a>
                                </h6>
                                <div class="collapse" id="acc_4">
                                    <div class="accordion-body ps-0 pb-0 pe-2">
                                        <ul class="iv2_sidebar_list at_scrollbar">
                                            <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>2022</label></li>
                                            <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>2021</label></li>
                                            <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>2020</label></li>
                                            <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>2019</label></li>
                                            <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>2018</label></li>
                                            <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>2017</label></li>
                                            <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>2016</label></li>
                                            <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>2015</label></li>
                                            <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>2014</label></li>
                                            <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>2013</label></li>
                                            <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>2012</label></li>
                                            <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>2011</label></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="iv2_sidebar_widget iv2_checkfilter_widget">
                        <div class="accordion iv2_sidebar_accordion">
                            <div class="accordion-item border-0">
                                <h6 class="accordion-header">
                                    <a href="#acc_5" class="accordion-button bg-transparent collapsed text-secondary p-0 pe-1" data-bs-toggle="collapse">Skrzynia Biegów</a>
                                </h6>
                                <div class="collapse" id="acc_5">
                                    <div class="accordion-body ps-0 pb-0 pe-2">
                                        <ul class="iv2_sidebar_list at_scrollbar">
                                            <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Suv</label></li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="iv2_sidebar_widget iv2_checkfilter_widget">
                        <div class="accordion iv2_sidebar_accordion">
                            <div class="accordion-item border-0">
                                <h6 class="accordion-header">
                                    <a href="#acc_7" class="accordion-button bg-transparent collapsed text-secondary p-0 pe-1" data-bs-toggle="collapse">Kolor dominujący</a>
                                </h6>
                                <div class="collapse" id="acc_7">
                                    <div class="accordion-body ps-0 pb-0 pe-2">
                                        <ul class="iv2_sidebar_list at_scrollbar">
                                            <li><label><input type="checkbox"><span class="ct-checkbox me-2"><i class="fa-solid fa-check"></i></span>Biały</label></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="iv2_sidebar_widget iv2_rangeslider_widget">
                        <div class="accordion iv2_sidebar_accordion">
                            <div class="accordion-item border-0">
                                <h6 class="accordion-header">
                                    <a href="#acc_8" class="accordion-button bg-transparent collapsed text-secondary p-0 pe-1" data-bs-toggle="collapse">Przedział cenowy</a>
                                </h6>
                                <div class="collapse" id="acc_8">
                                    <div class="accordion-body ps-0 pb-0">
                                        <div class="at-pricing-range">
                                            <div class="price-filter-range"></div>
                                            <div class="d-flex align-items-center mt-3">
                                                <input type="text" oninput="validity.valid||(value='0');" class="min_price price-range-field price-input">
                                                <span class="d-inline-block ms-2 me-2 fw-bold">-</span>
                                                <input type="text" oninput="validity.valid||(value='10000');" class="max_price price-range-field price-input">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-secondary btn-md mt-40 w-100">Filtruj</a>
                </div>
            </div>
            <div class="col-xl-9">
                <div class="iv_listing mt-5 mt-xl-0">
                    <div class="iv_listing_top d-flex flex-wrap align-items-center bg-white justify-content-center justify-content-sm-between rounded mb-4">
                        <p class="mb-0 fw-500 d-inline-block">Liczba rezultatów: {{ $cars->rowCount() }} z {{ $cars->rowCount() }}</p>
                    </div>
                    <div class="row g-4 justify-content-center">
                        @foreach($cars->fetchAll() as $index => $item)
                            <div class="col-12">
                                <div class="listing_card_item bg-white rounded p-4 d-lg-flex align-items-center position-relative">
                                    <div class="thumb-wrapper overflow-hidden rounded flex-shrink-0">
                                        <a href="{{ $config->base_url }}wypozycz/{{ $item['id_samochodu'] }}"><img src="{{ $config->base_url }}assets/img/cars/{{ $item['image_path'] }}" alt="{{ $item['model'] }}" class="img-fluid"></a>
                                    </div>
                                    <div class="listing_card_content ms-lg-4 mt-4 mt-lg-0">
                                        <span class="small-btn-meta">{{ $item['cena_za_dzien'] }} PLN</span>
                                        <a href="{{ $config->base_url }}wypozycz/{{ $item['id_samochodu'] }}">
                                            <h5 class="mb-1">{{ $item['marka'] }} {{ $item['model'] }}</h5>
                                        </a>
                                        <p class="mt-3 mb-4 pera-text-2">{{ $item['description'] }}</p>
                                        <div class="card-feature-box d-flex flex-wrap align-items-center">
                                            <div class="icon-box d-flex align-items-center border">
                                                <span class="me-2"><i class="flaticon-speedometer"></i></span>
                                                {{ $item['Moc'] }} KM
                                            </div>
                                            <div class="icon-box d-flex align-items-center border">
                                                <span class="me-2"><i class="flaticon-steering-wheel-1"></i></span>
                                                {{ $item['skrzynia_biegow'] }}
                                            </div>
                                            <div class="icon-box d-flex align-items-center border">
                                                <span class="me-2"><i class="flaticon-petrol"></i></span>
                                                {{ $item['rodzaj_paliwa'] }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--inventory details end-->

@include('partials.footer')
