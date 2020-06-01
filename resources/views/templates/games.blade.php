@extends('layouts.navigation')
<style>
    .card-lightgray {
        background-color: #CCCCCC !important;
    }

    .mt-72 {
        margin-top: 72px !important;
    }

    .box {
        width: 250px;
        height: 62px;
        margin-right: 2px;
        background-color: #fff;
    }

    .link-box {
        width: 300px;
        height: 93px;
        margin-right: 2px;
        background-color: #fff;
    }

    .card-lightgray {
        border: 0px !important;
        box-shadow: none !important;
    }

    .br-0 {
        border-radius: 0px !important;
    }

    .h6-bday {
        font-size: 0.5rem !important;
        line-height: 0.5 !important;
    }
</style>
@section('content')
<div class="container-fluid container-padding row">
    <games></games>
    <div class="col-lg-5 col-md-5 col-sm-5 p-0">
        @include('templates._birthdate')
        <div class="row">
            <div class="col-5 mt-3 pr-1">
                @include('templates._advertisement')
            </div>

            <div class="col-7 mt-3 pl-1">
                @include('templates._links')
            </div>

        </div>
    </div>
    @endsection
