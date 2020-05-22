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

    .picture-box {
        width: 110px;
        height: 170px;
        margin-right: 8px;
        margin-left: 8px;
        background-color: #fff;
        border-radius: 0.50rem;
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
        <div class="col-sm-7">
            <div class="card-wrapper">
                <div class="card card-gray">
                    <div class="card-header card-darkgray h6 p-2">
                        What inspires you today?
                    </div>
                    <div class="card-body card-gray card-radius" style="height:50px;">
                        <a class="text-white mr-1" role="button"><i class="far fa-plus-square"></i></a>
                        <a class="text-white"><i class="fas fa-ellipsis-v"></i></a>
                    </div>
                </div>
                <div class="card card-gray mt-3">
                    <div class="card-body card-gray card-radius mx-3 py-2">
                        <div class="d-flex justify-content-center">
                            <div class="picture-box">
                                <img class="mx-2 my-2 rounded-circle" alt="100x100" height="25" width="25" src="{{ asset('images/nrh/profile-pic.jpg') }}" data-holder-rendered="true">
                            </div>
                            <div class="picture-box">
                                <img class="mx-2 my-2 rounded-circle" alt="100x100" height="25" width="25" src="{{ asset('images/nrh/profile-pic.jpg') }}" data-holder-rendered="true">
                            </div>
                            <div class="picture-box">
                                <img class="mx-2 my-2 rounded-circle" alt="100x100" height="25" width="25" src="{{ asset('images/nrh/profile-pic.jpg') }}" data-holder-rendered="true">
                            </div>
                            <div class="picture-box">
                                <img class="mx-2 my-2 rounded-circle" alt="100x100" height="25" width="25" src="{{ asset('images/nrh/profile-pic.jpg') }}" data-holder-rendered="true">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-3">

                    <div class="float-right mr-2" style="position: absolute; top: 2%; right: 0%;">
                        <a role="button" class="text-white"><i class="fas fa-ellipsis-v"></i></a>
                    </div>
                    <div class="card-header rounded-top card-gray d-flex flex-row">

                        <img src="{{ asset('images/nrh/profile-pic.jpg') }}" class="rounded-circle mr-3" height="45px" width="45px" alt="avatar">
                        <div>

                            <h5 class="card-title mb-1">John Doe</h5>
                            <h6 class="card-text" style="font-size:0.7rem;"><i class="far fa-clock pr-2"></i>15 hours ago</h6>

                        </div>

                    </div>

                    <div class="card-body p-0">
                        <div class="view overlay">
                            <img class="card-img-top" src="{{ asset('images/nrh/blog.png') }}" alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                    </div>
                    <div class="card-footer card-gray px-2 rounded py-2">
                        <div class="d-flex justify-content-between">
                            <div class="text-center offset-md-2">
                                <h5>10 Ways Artists can improve their art</h5>
                                <h6>Things you should know to better yourself</h6>
                            </div>
                            <div class="float-right">
                                <a role="button" class="text-white"><i class="fas fa-ellipsis-h"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 p-0">
            @include('templates._birthdate')
            <div class="row">
                <div class="col-5 mt-3 pr-0 mb-5">
                    @include('templates._advertisement')
                </div>

                <div class="col-7 mt-3 pl-2">
                    @include('templates._links')
                </div>

            </div>
        </div>
    </div>
@endsection
