@extends('layouts.app')

@section('title', __('Update Role'))

@section('navbar')
    @include('components.navbar', ['current' => 'maintenance'])
@endsection

@section('content')
    <div class="container py-5">
        <h4 class="mb-4">{{__('Update Role')}}</h4>
        <div class="row mb-2">
            <h5>{{ $account->first_name . ' ' . $account->last_name }}</h5>
        </div>
        <form action="{{ route('update-role', ['user' => $account]) }}" method="POST">
            @csrf
            <div class="row mb-5">
                <div class="col-2">
                    <div class="form-group">
                    <label class="mb-1" for="role">{{__('Role')}}<span class="text-danger ms-1">*</span></label>
                    <select class="form-select form-control @error('role') is-invalid @enderror" name="role" id="role">
                        <option value="" selected>{{__('Select the role')}}</option>
                        @foreach ($roles as $role)
                            <option value="{{ $role->role_id }}" @if ($account->role->role_id == $role->role_id) selected @endif>{{ __($role->role_name) }}</option>
                        @endforeach
                    </select>
                    @error('role')
                        <div class="text-danger" role="alert">
                        <small><strong>{{ __($message) }}</strong></small>
                        </div>
                    @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary me-2">{{__('Save')}}</button>
                    <a href="{{ route('view-accounts') }}" type="button" class="btn btn-danger">{{__('Back')}}</a>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('footer')
    @include('components.footer')
@endsection