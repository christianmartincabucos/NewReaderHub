@extends('layouts.app')
<style>
    .card {
        background-color: #ACACAC !important;
    }
</style>
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card card-wrapper">

                <div class="card-body">
                    <div class="d-flex justify-content-center my-5 pb-2">
                        <img src="{{ asset('images/nrh/nrhub1.png') }}">
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-5">
                            <a href="/login" type="button" class="font-weight-bold btn btn-light btn-md br-half btn-block">Login</a>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-5 mt-3 mb-4">
                            <a href="/register" type="button" class="font-weight-bold btn btn-light btn-md br-half btn-block">Sign up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

<!-- @if (Route::has('login'))
<div class="top-right links">
    @auth
    <a href="{{ url('/home') }}">Home</a>
    @else
    <a href="{{ route('login') }}">Login</a>

    @if (Route::has('register'))
    <a href="{{ route('register') }}">Register</a>
    @endif
    @endauth
</div>
@endif -->
