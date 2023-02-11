<tr>
    <td>
      <div class="d-flex align-items-center">
        <img src="{{ asset('storage/' . $account->display_picture_link ) }}" alt="" style="width: 45px; height: 45px" class="rounded-circle"/>
        <div class="ms-3">
          <p class="fw-bold mb-1">{{ $account->first_name . ' ' . $account->last_name }}</p>
          <p class="text-muted mb-0">{{ $account->email }}</p>
        </div>
      </div>
    </td>
    <td>{{ __($account->role->role_name) }}</td>
    <td>
      <div class="d-flex justify-content-center">
        <div>
          <a href="{{ route('view-edit-role', ['user' => $account ]) }}" type="button" class="btn btn-primary btn-sm btn-rounded me-2">{{ __('Update Role') }}</a>
        </div>
        <div>
          <form action="{{ route('delete-account', ['user' => $account ]) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger btn-sm btn-rounded">{{__('Delete')}}</button>
          </form>
        </div>
      </div>
    </td>
</tr>