@extends('layouts.app')
<style>
    .card {
        background-color: #ACACAC !important;
    }

    .btn-gray {
        background-color: #A1A1A1 !important;
    }
</style>
@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body px-4">
                    <div class="d-flex justify-content-start my-3">
                        <img src="{{ asset('images/nrh/nrhub1.png') }}">
                    </div>
                    <div class="card dimgrey">
                        <div class="card-body">
                            <!-- Material form register -->
                            <p class="h3-responsive text-left py-2 font-weight-bold">Sign up</p>
                            <form>
                                <div class="form-group row my-0">

                                    <div class="col-md-12 my-0">
                                        <label for="email" class=" col-form-label text-md-right ml-2">Last name</label>
                                        <input id="email" type="email" class="form-control" name="in-lastname" required autocomplete="email" autofocus>
                                    </div>
                                </div>
                                <div class="form-group row my-0">

                                    <div class="col-md-12 my-0">
                                        <label for="email" class=" col-form-label text-md-right ml-2">First name</label>
                                        <input id="email" type="email" class="form-control" name="in-firstname" required autocomplete="email" autofocus>
                                    </div>
                                </div>
                                <div class="form-group row my-0">

                                    <div class="col-md-12 my-0">
                                        <label for="email" class=" col-form-label text-md-right ml-2">Email Address</label>
                                        <input id="email" type="email" class="form-control" name="in-email" required autocomplete="email" autofocus>
                                    </div>
                                </div>
                                <div class="form-group row my-0">

                                    <div class="col-md-12 mb-5">
                                        <label for="email" class=" col-form-label text-md-right ml-2">Mobile Number</label>
                                        <input id="email" type="email" class="form-control" name="in-mobile" required autocomplete="email" autofocus>
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <div class="col-md-6">
                                        <a href="/login" type="button" class="btn btn-gray br-half btn-block btn-md">Back to Login</a>
                                    </div>

                                    <div class="col-md-6">
                                        <a href="" type="button" class="btn btn-gray br-half btn-block btn-md">Create Account</a>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
