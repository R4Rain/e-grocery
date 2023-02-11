<div class="col-sm-6 col-md-4 col-lg-2 py-2" style="min-height: 300px;">
    <div class="card shadow-sm flex-fill h-100 border-0">
        <img src="{{ asset('storage/'. $item->item_image_link ) }}" alt="" class="card-img-top w-100 h-100 pt-2 px-2 rounded" style="object-fit:cover;">
        <div class="card-body">
            <h6 class="text-center mb-3">{{ $item->item_name }}</h6>
            <div class="d-flex justify-content-center">
                <a href="{{ route('view-item', ['item' => $item] )}}" type="button" class="btn btn-sm btn-primary">{{ __('Details') }}</a>
            </div>
        </div>
    </div>
</div>