@extends('layouts.app')

@section('title', __('Profile'))

@section('navbar')
    @include('components.navbar', ['current' => 'profile'])
@endsection

@section('content')
@if(Session::has('result'))
    @include('components.success-profile', ['content' => 'result'])
@else
    <div class="container py-5">
        <div class="row gx-4 gx-lg-5">
            <div class="col col-md-3 col-sm-12 d-flex justify-content-center p-3">
                <img id="display-picture-image" src="{{ asset('storage/' . Auth::user()->display_picture_link) }}" alt="" class="rounded-circle mb-1" style="width: 250px; height: 250px; object-fit: cover;">
            </div>
            <div class="col col-md-9 col-sm-12 p-3">
                <div class="row mb-3">
                    <form action="{{ route('update-profile') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col">
                            <div class="form-group">
                            <label class="mb-1" for="first_name">{{__('First name')}}<span class="text-danger ms-1">*</span></label>
                            <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" placeholder="{{__('Max. 25 characters with no symbol')}}" name="first_name" value="{{ Auth::user()->first_name }}" autocomplete="first_name" autofocus>
                            @error('first_name')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{__($message)}}</strong>
                                </div>
                            @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                            <label class="mb-1" for="last_name">{{__('Last name')}}<span class="text-danger ms-1">*</span></label>
                            <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" placeholder="{{__('Max. 25 characters with no symbol')}}" name="last_name" value="{{ Auth::user()->last_name }}" autocomplete="last_name" autofocus>
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
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{__('Email address')}}" name="email" value="{{ Auth::user()->email }}" autocomplete="email" autofocus>
                            @error('email')
                            <div class="text-danger" role="alert">
                                <small><strong>{{__($message)}}</strong></small>
                            </div>
                            @enderror
                        </div>
                        </div>
                        <div class="col">
                        <div class="form-group">
                            <label class="mb-1" for="role">{{__('Role')}}</label>
                            <input id="role" type="text" class="form-control" name="role" value="{{ __(Auth::user()->role->role_name) }}" disabled>
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
                                <input class="form-check-input" type="radio" name="gender" id="gender-{{$gender->gender_id}}" value="{{$gender->gender_id}}" @if(Auth::user()->gender_id == $gender->gender_id) checked @endif>
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
                        <div class="col">
                            <div class="form-group">
                                <label class="mb-1" for="input-profile-image">{{__('Display picture')}}</label>
                                <input class="form-control @error('display_picture') is-invalid @enderror" type="file" id="input-profile-image" name='display_picture'>
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
                        <button class="btn btn-primary btn-md btn-block" type="submit">{{__('Save')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endif
@endsection

@section('footer')
    @include('components.footer')
@endsection
