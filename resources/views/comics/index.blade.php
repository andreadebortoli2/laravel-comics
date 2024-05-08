@extends('layout.app')

@section('page-title', 'home')

@section('content')
    <div class="main-top">
        <div class="container">
            <h2>CURRENT SERIES</h2>
            <div class="container">
                <div class="row row-cols-6 g-4">
                    @foreach ($comics as $key => $comic)
                        <div class="col">
                            <a href="{{ route('comics.show', ['id' => $key]) }}">
                                <div class="card border-0 rounded-0">
                                    <img class="card-img-top rounded-0" src="{{ $comic['thumb'] }}"
                                        alt="cover of {{ $comic['title'] }}" />
                                    <div class="card-body px-0">
                                        <h6 class="card-title text-white">
                                            {{ strtoupper(str_contains($comic['title'], '#') ? stristr($comic['title'], '#', true) : $comic['title']) }}
                                        </h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <button class="btn rounded-0">LOAD MORE</button>
            </div>
        </div>
    </div>
    <div class="main-bottom">
        <div class="container">
            <div class="row row-cols-5">
                <div class="col">
                    <img src="{{ Vite::asset('resources/images/img/buy-comics-digital-comics.png') }}" alt="" />
                    <div>DIGITAL COMICS</div>
                </div>
                <div class="col">
                    <img src="{{ Vite::asset('resources/images/img/buy-comics-merchandise.png') }}" alt="" />
                    <div>DC MERCHANDISE</div>
                </div>
                <div class="col">
                    <img src="{{ Vite::asset('resources/images/img/buy-comics-subscriptions.png') }}" alt="" />
                    <div>SUBSCRIPTION</div>
                </div>
                <div class="col">
                    <img src="{{ Vite::asset('resources/images/img/buy-comics-shop-locator.png') }}" alt="" />
                    <div>COMIC SHOP LOCATOR</div>
                </div>
                <div class="col">
                    <img src="{{ Vite::asset('resources/images/img/buy-comics-digital-comics.png') }}" alt="" />
                    <div>DC POWER VISA</div>
                </div>
            </div>
        </div>
    </div>
@endsection
