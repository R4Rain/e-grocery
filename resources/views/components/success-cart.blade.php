<div class="container py-5 d-flex justify-content-center align-items-center" style="min-height: 77vh; max-height: 100%;">
    <div class="row h-100">
        <div class="col">
            <div class="card p-lg-5 p-md-4 p-sm-3 border border-3 border-secondary rounded-3 shadow-sm mb-5">
                <div class="card-body">
                    <h5 class="card-title text-center">{{__("Success!")}}</h5>
                    <p class="text-secondary text-center mb-0">{{ Session::get($content) }}</p>
                    <a class="link-primary d-block text-center" href="{{ route('view-home') }}">{{__("Click here to 'Home'")}}</a>
                </div>
            </div>
        </div>
    </div>
</div>