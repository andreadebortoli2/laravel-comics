@extends('layout.app')

@section('page-title', 'home')

@section('content')
    <div class="main-top bg-dark">
        <div class="container" style="position: relative;">
            <h2 class="bg-primary p-3" style="width: fit-content; position: absolute; top: -5%">CURRENT SERIES</h2>
            <div class="container py-3">
                <div class="row row-cols-6 pt-5">
                    @foreach ($comics as $key => $comic)
                        <div class="col">
                            <a href="{{ route('comics.show', ['id' => $key]) }}">
                                <div class="card border-0 rounded-0 bg-transparent height-50">
                                    <img class="card-img-top rounded-0" src="{{ $comic['thumb'] }}"
                                        alt="cover of {{ $comic['title'] }}" style="height: 200px; width: 200px;" />
                                    <div class="card-body px-0">
                                        <h6 class="card-title text-white">
                                            {{ str_contains($comic['title'], '#') ? stristr($comic['title'], '#', true) : $comic['title'] }}
                                        </h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="text-center pb-5">
                <button class="btn bg-primary text-white">LOAD MORE</button>
            </div>
        </div>
    </div>
    <div class="mainbottom bg-primary text-white">
        <div class="container d-flex justify-content-between">
            <div class="d-flex align-items-center">
                <img src="{{ Vite::asset('resources/images/img/buy-comics-digital-comics.png') }}" alt=""
                    style="height: 50%;">
                <div class="px-2">DIGITAL COMICS</div>
            </div>
            <div class="p-3 d-flex align-items-center">
                <img src="{{ Vite::asset('resources/images/img/buy-comics-merchandise.png') }}" alt=""
                    style="height: 50%;">
                <div class="px-2">DC MERCHANDISE</div>
            </div>
            <div class="p-3 d-flex align-items-center">
                <img src="{{ Vite::asset('resources/images/img/buy-comics-subscriptions.png') }}" alt=""
                    style="height: 50%;">
                <div class="px-2">SUBSCRIPTION</div>
            </div>
            <div class="p-3 d-flex align-items-center">
                <img src="{{ Vite::asset('resources/images/img/buy-comics-shop-locator.png') }}" alt=""
                    style="height: 50%;">
                <div class="px-2">COMIC SHOP LOCATOR</div>
            </div>
            <div class="align-self-center">
                DC POWER VISA
            </div>
        </div>
    </div>
@endsection
