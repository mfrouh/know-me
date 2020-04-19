@extends('layouts.app')
@section('title')
{{ __('home.login') }}
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-white text-center">{{ __('home.login') }}</div>
                <div class="card-body">
                  <a href="/auth/redirect/facebook" class="btn btn-primary" ><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
