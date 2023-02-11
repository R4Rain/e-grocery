@extends('layouts.app')

@section('title', __('Home'))

@section('navbar')
    @include('components.navbar', ['current' => 'home'])
@endsection

@section('content')
    <div class="container py-5">
        <h4>{{__('Welcome to Amazing E-Grocery!')}}</h4>
        <div class="row my-4">
            @foreach ($items as $item)
                @include('components.item-card')
            @endforeach
        </div>
        <div class="row">
            {{ $items->links() }}
        </div>
    </div>
@endsection

@section('footer')
    @include('components.footer')
@endsection