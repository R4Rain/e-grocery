@extends('layouts.app')

@section('title', __('Cart'))

@section('navbar')
    @include('components.navbar', ['current' => 'cart'])
@endsection

@section('content')

@if(Session::has('result'))
  @include('components.success-cart', ['content' => 'result'])
@else
  <div class="container py-5">
    <div class="row d-flex justify-content-center my-4">
      <div class="col-md-8">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">{{ __('My Cart') }} - {{ $total_order }} {{ __('items') }}</h5>
          </div>
          <div class="card-body">
            @foreach ($orders as $order)
                @include('components.order-card')
                @if(!$loop->last)
                    <hr class="my-4" />
                @endif
            @endforeach

            @if($orders->isEmpty())
                <div class="row align-items-center">
                    <div class="col">
                        <div class="text-secondary">{{ __('No item yet in your cart...')}}</div>
                    </div>
                </div>
            @endif
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">{{ __('Summary') }}</h5>
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                <div>
                  <strong>{{__('Total price')}}</strong>
                </div>
                <span><strong>Rp. {{ $total_price }}</strong></span>
              </li>
            </ul>
            <form action="{{ route('checkout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary btn-block">{{ __('Check Out') }}</button>
            </form>
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