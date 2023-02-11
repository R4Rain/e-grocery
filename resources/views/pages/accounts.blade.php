@extends('layouts.app')

@section('title', __('Account Maintenance'))

@section('navbar')
    @include('components.navbar', ['current' => 'maintenance'])
@endsection

@section('content')
    <div class="container py-5">
        <h4>{{__('Account Maintenance')}}</h4>
        <div class="row d-flex justify-content-center my-4">
            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                  <tr>
                    <th>{{__('Account')}}</th>
                    <th>{{__('Role')}}</th>
                    <th class="text-center">{{__('Actions')}}</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($accounts as $account)
                    @include('components.account-row')
                  @endforeach
                  @if ($accounts->isEmpty())
                    <tr>
                      <th class="text-secondary">No registered account yet...</th>
                      <th></th>
                      <th></th>
                    </tr>
                  @endif
                </tbody>
              </table>
        </div>
    </div>
@endsection

@section('footer')
    @include('components.footer')
@endsection