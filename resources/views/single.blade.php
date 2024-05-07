<?php
$id = $_GET['id'];
var_dump($id);
?>
@extends('layout.app')

@section('page-title', 'single')

@section('content')

@foreach($comics as $key => $comic)
@if($key == $id)
<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="row">

                <h2 class="text-primary">
                    {{strtoupper($comic['title'])}}
                </h2>
            </div>
            <div class="row">
                <div class="col-8 left-info">
                    <div class="price">
                        U.S. Price: {{$comic['price']}}
                    </div>
                    <div class="availability">
                        AVAILABLE
                    </div>
                    <div class="col-4 right-info">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
            </div>
            <div class="row">
                <p>
                    {{$comic['description']}}
                </p>
            </div>
        </div>
        <div class="col-4">
            <img src="{{Vite::asset('resources/images/img/adv.jpg')}}" alt="">
        </div>
    </div>
</div>

@else
<div></div>
@endif
@endforeach

@endsection