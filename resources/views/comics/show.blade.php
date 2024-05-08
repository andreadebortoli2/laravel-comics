@extends('layout.app')

@section('page-title', $comic['title'])

@section('content')

    <div class="comic-cover bg-primary" style="height: 75px; position:relative;">
        <div class="container">
            <div class="card rounded-0" style="position: absolute; bottom: 20px">
                <img class="card-img-top rounded-0" src="{{ $comic['thumb'] }}" alt="Title" style="height: 200px;" />
                <div class=" card-body p-0">
                    <h4 class="card-title p-1 bg-info text-white"
                        style="width: fit-content; position: absolute; top: 0; left: 0; font-size: 0.8rem">
                        COMIC-BOOK</h4>
                    <p class="card-text p-1 text-center bg-info text-white">VIEW GALLERY</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-8">
                <h2 class="text-primary pt-4">
                    {{ strtoupper($comic['title']) }}
                </h2>
                <div class="row my-3 bg-success-subtle border-1 border-bottom border-secondary">
                    <div class="col-9 left-info d-flex justify-content-between align-items-center">
                        <div class="text-success">
                            U.S. Price: <span class="text-white">{{ $comic['price'] }}</span>
                        </div>
                        <div class="availability text-success pe-4">
                            AVAILABLE
                        </div>
                    </div>
                    <div class="col-3 right-info border-1 border-start border-secondary">
                        <div class="dropdown text-center">
                            <button class="btn text-white dropdown-toggle" type="button" id="triggerId"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <p>
                        {{ $comic['description'] }}
                    </p>
                </div>
            </div>
            <div class="col-4 px-4">
                <h4 class="text-secondary text-end">ADVERTISEMENT</h4>
                <img src="{{ Vite::asset('resources/images/img/adv.jpg') }}" alt="" style="width: 100%;">
            </div>
        </div>
    </div>

    <div class="comic-info bg-light border-1 border-top border-bottom border-secondary">
        <div class="container">
            <div class="row row-cols-2 py-5">
                <div class="col">
                    <h3 class="pb-5">Talent</h3>
                    <div class="artist d-flex border-1 border-top border-secondary py-3">
                        <div class="col-3">
                            <h5>Art by:</h5>
                        </div>
                        <div class="col-9">
                            <p class="text-primary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit
                                ipsa necessitatibus possimus, tenetur ipsum nesciunt voluptatum harum consequuntur
                                perspiciatis illo excepturi, quibusdam explicabo ab adipisci quisquam modi atque?
                                Tenetur, debitis.</p>
                        </div>
                    </div>
                    <div class="writer d-flex border-1 border-top border-bottom border-secondary py-3">
                        <div class="col-3">
                            <h5>Written by:</h5>
                        </div>
                        <div class="col-9">
                            <p class="text-primary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore
                                eius laboriosam vero fugit, mollitia voluptates ea maxime nostrum omnis? Mollitia
                                necessitatibus hic architecto repudiandae eaque aperiam temporibus quaerat fuga
                                voluptatum.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h3 class="pb-5">Specs</h3>
                    <div class="series d-flex border-1 border-top border-secondary py-3">
                        <div class="col-3">
                            <h5>Series:</h5>
                        </div>
                        <div class="col-9">
                            <p class="text-primary">{{ strtoupper($comic['series']) }}</p>
                        </div>
                    </div>
                    <div class="price d-flex border-1 border-top border-secondary py-3">
                        <div class="col-3">
                            <h5>U.S. Price:</h5>
                        </div>
                        <div class="col-9">
                            <p>{{ $comic['price'] }}</p>
                        </div>
                    </div>
                    <div class="sale-date d-flex border-1 border-top border-bottom border-secondary py-3">
                        <div class="col-3">
                            <h5>On Sale Date:</h5>
                        </div>
                        <div class="col-9">
                            <p>{{ $comic['sale_date'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </div>

    <div class="utilities border-1 border-bottom border-secondary bg-light">
        <div class="container">
            <div class="row row-cols-4">
                <div class="col d-flex justify-content-between pt-3 border-1 border-start border-secondary">
                    <h4>DIGITAL COMICS</h4>
                    <img src="{{ Vite::asset('resources/images/img/buy-comics-digital-comics.png') }}" alt=""
                        style="background-color:gray; height:50%; padding: 0 1rem;">
                </div>
                <div class="col d-flex justify-content-between pt-3 border-1 border-start border-secondary">
                    <h4>SHOP DC</h4>
                    <img src="{{ Vite::asset('resources/images/img/buy-comics-subscriptions.png') }}" alt=""
                        style="background-color:gray; height:50%; padding: 0 1rem;">
                </div>
                <div class="col d-flex justify-content-between pt-3 border-1 border-start border-secondary">
                    <h4>COMIC SHOP LOCATOR</h4>
                    <img src="{{ Vite::asset('resources/images/img/buy-comics-shop-locator.png') }}" alt=""
                        style="background-color:gray; height:50%; padding: 0 1rem;">
                </div>
                <div class="col d-flex justify-content-between pt-3 border-1 border-start border-end border-secondary">
                    <h4>SUBSCRPTIONS</h4>
                    <img src="{{ Vite::asset('resources/images/img/buy-comics-merchandise.png') }}" alt=""
                        style="background-color:gray; height:50%; padding: 0 1rem;">
                </div>
            </div>
        </div>
    </div>

@endsection
