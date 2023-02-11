@extends('layouts.app')

@section('navbar')
    @include('components.navbar')
@endsection

@section('title', __('Index'))

@section('content')
@if (Session::has('result'))
    @include('components.success-logout', ['content' => 'result'])
@else
    <div class="container py-5 d-flex justify-content-center align-items-center" style="min-height: 77vh; max-height: 100%;">
        <div class="row h-100">
            <div class="col">
                <div class="card p-lg-5 p-md-4 p-sm-3 border border-3 border-secondary rounded-3 shadow-sm mb-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{__('Find and Buy Your Grocery Here!')}}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
@endsection

@section('footer')
    @include('components.footer')
@endsection