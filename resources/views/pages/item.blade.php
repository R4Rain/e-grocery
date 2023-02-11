@extends('layouts.app')

@section('title', __('Item'))

@section('navbar')
    @include('components.navbar')
@endsection

@section('content')
    <div class="container py-5">
        <div class="row mb-2">
            <h3>{{__('Item Details')}}</h3>
        </div>
        <div class="row h-auto">
                <div class="col col-md-4 col-sm-12 p-3 shadow-sm rounded d-flex align-items-center">
                    <img src="{{ asset('storage/'. $item->item_image_link) }}" class="card-img-top mb-5 mb-md-0 rounded" alt="Item image">
                </div>
                <div class="col col-md-7 col-sm-12 ms-md-3 px-3 pt-3">
                    <h3 class="fw-bolder">{{ $item->item_name }}</h3>
                    <div class="border border-dark-subtle border-2 rounded my-2 mb-3"></div>
                    <h4 class="mb-5"><strong>Rp. {{ $item->price }}</strong></h4>
                    <div class="overflow-auto mb-2" style="height: 200px;">
                        <h6 class="text-decoration-underline">{{ __('Description') }}</h6>
                        <p>{!! $item->item_desc !!}</p>
                    </div>
                    <div class="d-flex justify-content-end">
                        <form action="{{ route('buy-item', ['item' => $item] )}}"  method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary btn-lg rounded px-5">{{ __('Buy') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('components.footer')
@endsection