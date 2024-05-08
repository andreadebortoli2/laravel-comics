@extends('layout.app')

@section('page-title', $comic['title'])

@section('content')

    <div class="comic-cover">
        <div class="container">
            <div class="card rounded-0">
                <img class="card-img-top rounded-0" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" />
                <div class=" card-body p-0">
                    <h4 class="card-title">
                        COMIC-BOOK</h4>
                    <p class="card-text">VIEW GALLERY</p>
                </div>
            </div>
        </div>
    </div>

    <div class="comic-info-top">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <h2>
                        {{ strtoupper($comic['title']) }}
                    </h2>
                    <div class="quick-info">
                        <div class="col-9 left-info">
                            <div>
                                U.S. Price: <span>{{ $comic['price'] }}</span>
                            </div>
                            <div class="availability">
                                AVAILABLE
                            </div>
                        </div>
                        <div class="col-3 right-info">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Check Availability
                                </button>
                                <div class="dropdown-menu" aria-labelledby="triggerId">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item disabled" href="#">Disabled action</a>
                                    <h6 class="dropdown-header">Section header</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">After divider action</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <p class="comic-description">
                            {{ $comic['description'] }}
                        </p>
                    </div>
                </div>
                <div class="advertisement col-4">
                    <h4>ADVERTISEMENT</h4>
                    <img src="{{ Vite::asset('resources/images/img/adv.jpg') }}"
                        alt="advertisement image about DC power visa">
                </div>
            </div>
        </div>
    </div>

    <div class="comic-info-bottom">
        <div class="container">
            <div class="row row-cols-2 g-5">
                <div class="col">
                    <h3>Talent</h3>
                    <div class="artist">
                        <div class="col-3">
                            <h5>Art by:</h5>
                        </div>
                        <div class="col-9">
                            <p>
                                <span>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit
                                    ipsa necessitatibus possimus, tenetur ipsum nesciunt voluptatum harum consequuntur
                                    perspiciatis illo excepturi, quibusdam explicabo ab adipisci quisquam modi atque?
                                    Tenetur, debitis.
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="writer">
                        <div class="col-3">
                            <h5>Written by:</h5>
                        </div>
                        <div class="col-9">
                            <p>
                                <span>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore
                                    eius laboriosam vero fugit, mollitia voluptates ea maxime nostrum omnis? Mollitia
                                    necessitatibus hic architecto repudiandae eaque aperiam temporibus quaerat fuga
                                    voluptatum.
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h3>Specs</h3>
                    <div class="series">
                        <div class="col-3">
                            <h5>Series:</h5>
                        </div>
                        <div class="col-9">
                            <p><span>
                                    {{ strtoupper($comic['series']) }}
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="price">
                        <div class="col-3">
                            <h5>U.S. Price:</h5>
                        </div>
                        <div class="col-9">
                            <p>{{ $comic['price'] }}</p>
                        </div>
                    </div>
                    <div class="sale-date">
                        <div class="col-3">
                            <h5>On Sale Date:</h5>
                        </div>
                        <div class="col-9">
                            <p>{{ $comic['sale_date'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="utilities">
        <div class="container">
            <div class="row row-cols-4">
                <div class="col">
                    <h4>DIGITAL COMICS</h4>
                    <img src="{{ Vite::asset('resources/images/img/buy-comics-digital-comics.png') }}" alt="">
                </div>
                <div class="col">
                    <h4>SHOP DC</h4>
                    <img src="{{ Vite::asset('resources/images/img/buy-comics-subscriptions.png') }}" alt="">
                </div>
                <div class="col">
                    <h4>COMIC SHOP LOCATOR</h4>
                    <img src="{{ Vite::asset('resources/images/img/buy-comics-shop-locator.png') }}" alt="">
                </div>
                <div class="col">
                    <h4>SUBSCRPTIONS</h4>
                    <img src="{{ Vite::asset('resources/images/img/buy-comics-merchandise.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>

@endsection
