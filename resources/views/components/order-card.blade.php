<div class="row">
    <div class="col-lg-3 col-md-12 mb-3 mb-lg-0">
      <div class="bg-image hover-overlay hover-zoom ripple rounded">
        <img src="{{ asset('storage/' . $order->item->item_image_link )}}" class="w-100" alt=""/>
      </div>
    </div>

    <div class="col-lg-5 col-md-6 mb-3 mb-lg-0 d-flex flex-column justify-content-center">
      <p class="text-center"><strong>{{ $order->item->item_name }}</strong></p>
    </div>

    <div class="col-lg-4 col-md-6 mb-3 mb-lg-0 d-flex flex-column justify-content-center">
      <p class="text-center">
        <strong> Rp. {{ $order->item->price }}</strong>
      </p>
      <div class="d-flex justify-content-center">
        <a href="{{ route('view-item', ['item' => $order->item ]) }}" type="button" class="btn btn-primary btn-sm me-2">{{__('Details')}}</a>
        <form action="{{ route('delete-order', ['order' => $order ]) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger btn-sm">{{__('Delete')}}</button>
        </form>
      </div>
    </div>
</div>