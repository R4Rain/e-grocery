@extends('layouts.app')

@section('title', __('Register'))

@section('navbar')
  @include('components.navbar')
@endsection

@section('content')
<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card border-0 shadow" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col d-flex align-items-center">
              <div class="card-body p-4 text-black">
                <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <h4 class="mb-3 pb-3">{{__('Register')}}</h4>
                  <div class="row mb-3">
                    <div class="col d-flex align-items-center justify-content-center flex-column">
                      <div id="default-image" class="rounded-circle bg-secondary" style="width: 175px; height: 175px;">
                        <div class="text-center w-100 h-100 d-flex justify-content-center align-items-center">
                          {{ __('Display picture') }}
                        </div>
                      </div>
                      <img id="preview-image" src="#" class="rounded-circle" style="width: 175px; height: 175px; object-fit: cover;" hidden>
                      <div class="mt-3">
                        <label class="mb-1" for="input-register-image">{{ __('Display picture') }}<span class="text-danger ms-1">*</span></label>
                        <input class="form-control @error('display_picture') is-invalid @enderror" type="file" id="input-register-image" name="display_picture">
                        @error('display_picture')
                          <div class="text-danger" role="alert">
                            <small><strong>{{__($message)}}</strong></small>
                          </div>
                        @enderror
                      </div>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <div class="col">
                      <div class="form-group">
                        <label class="mb-1" for="first_name">{{ __('First name') }}<span class="text-danger ms-1">*</span></label>
                        <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" placeholder="{{__('Max. 25 characters with no symbol')}}" name="first_name" value="{{ old('first_name') }}" autocomplete="first_name" autofocus>
                        @error('first_name')
                          <div class="invalid-feedback" role="alert">
                              <strong>{{__($message)}}</strong>
                          </div>
                        @enderror
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-group">
                        <label class="mb-1" for="last_name">{{ __('Last name') }}<span class="text-danger ms-1">*</span></label>
                        <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" placeholder="{{__('Max. 25 characters with no symbol')}}" name="last_name" value="{{ old('last_name') }}" autocomplete="last_name" autofocus>
                        @error('last_name')
                          <div class="text-danger" role="alert">
                            <small><strong>{{__($message)}}</strong></small>
                          </div>
                        @enderror
                      </div>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <div class="col">
                      <div class="form-group">
                        <label class="mb-1" for="email">{{__('Email')}}<span class="text-danger ms-1">*</span></label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{__('Email Address')}}" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                        @error('email')
                          <div class="text-danger" role="alert">
                            <small><strong>{{__($message)}}</strong></small>
                          </div>
                        @enderror
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-group">
                        <label class="mb-1" for="role">{{__('Role')}}<span class="text-danger ms-1">*</span></label>
                        <select class="form-select form-control @error('role') is-invalid @enderror" name="role" id="role">
                          <option value="" selected>{{__('Select the role')}}</option>
                          @foreach ($roles as $role)
                            <option value="{{ $role->role_id }}" @if (old('role') == $role->role_id) selected @endif>{{ __($role->role_name) }}</option>
                          @endforeach
                        </select>
                        @error('role')
                          <div class="text-danger" role="alert">
                            <small><strong>{{__($message)}}</strong></small>
                          </div>
                        @enderror
                      </div>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <div class="col">
                      <div class="form-group">
                        <label class="mb-1" for="gender">{{__('Gender')}}<span class="text-danger ms-1">*</span></label>
                        <div>
                          @foreach ($genders as $gender)
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="gender" id="gender-{{$gender->gender_id}}" value="{{$gender->gender_id}}" @if(old('gender') == $gender->gender_id) checked @endif>
                              <label class="form-check-label" for="gender-{{$gender->gender_id}}">{{ __($gender->gender_desc) }}</label>
                            </div>
                          @endforeach
                          @error('gender')
                            <div class="text-danger" role="alert">
                                <small><strong>{{__($message)}}</strong></small>
                            </div>
                          @enderror
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <div class="col">
                      <div class="form-group">
                        <label class="mb-1" for="password">{{__('Password')}}<span class="text-danger ms-1">*</span></label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{__('Min. 8 characters with at least 1 number')}}" name="password" autofocus>
                        @error('password')
                          <div class="text-danger" role="alert">
                            <small><strong>{{__($message)}}</strong></small>
                          </div>
                        @enderror
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-group mb-3">
                        <label class="mb-1" for="confirm_password">{{__('Confirm password')}}<span class="text-danger ms-1">*</span></label>
                        <input id="confirm_password" type="password" class="form-control @error('confirm_password') is-invalid @enderror" placeholder="{{__('Confirm password')}}" name="confirm_password" autofocus>
                        @error('confirm_password')
                          <div class="text-danger" role="alert">
                            <small><strong>{{__($message)}}</strong></small>
                          </div>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="pt-1 mb-2">
                    <button class="btn btn-primary btn-md btn-block" type="submit">{{__('Register')}}</button>
                  </div>
                  <p class="mb-2 pb-lg-2">{{__('Already have an account?')}} <a href="{{ route('view-login') }}" class="text-primary">{{__('Login here')}}</a></p>
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