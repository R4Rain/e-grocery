@extends('layouts.app')

@section('title', __('Login'))

@section('navbar')
  @include('components.navbar')
@endsection

@section('content')
<div class="container py-5 h-100">
    <div class="row d-flex h-100 justify-content-center align-items-center">
      <div class="col col-xl-10">
        <div class="card border-0 shadow" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col d-flex align-items-center">
              <div class="card-body p-4 text-black">
                <form action="{{ route('login') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <h4 class="mb-3 pb-3">{{__('Login')}}</h4>
                  <div class="row">
                    <div class="col">
                      <div class="form-group mb-3">
                        <label class="mb-1" for="email">{{ __('Email') }}<span class="text-danger ms-1">*</span></label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{__('Email address')}}" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                        @error('email')
                          <div class="text-danger" role="alert">
                            <small><strong>{{$message}}</strong></small>
                          </div>
                        @enderror
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col">
                      <div class="form-group mb-3">
                        <label class="mb-1" for="password">{{__('Password')}}<span class="text-danger ms-1">*</span></label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{__('Password')}}" name="password" autofocus>
                        @error('password')
                          <div class="text-danger" role="alert">
                            <small><strong>{{$message}}</strong></small>
                          </div>
                        @enderror
                      </div>
                    </div>
                  </div>

                  <div class="pt-1 mb-2">
                    <button class="btn btn-primary btn-md btn-block" type="submit">{{__("Login")}}</button>
                  </div>
                  <p class="mb-2 pb-lg-2">{{__("Don't have an account?")}} <a href="{{ route('view-register') }}" class="text-primary">{{__("Register here")}}</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection

@section('footer')
    @include('components.footer')
@endsection