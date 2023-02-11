<div id="toast-alert" class="toast align-items-center text-white bg-success border-0 rounded-3 mb-4 ms-4 fixed-bottom" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
    <div class="d-flex">
        <div class="toast-body text-center">
            {{ Session::get($content) }}
        </div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
</div>