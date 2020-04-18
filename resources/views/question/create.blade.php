@extends('layouts.app')
@section('title')
@lang('home.createquestion')
@endsection
@section('content')
<div class="container text-@lang('home.left')">
    <div class="row justify-content-center">
        <div class="col-8 mt-5">
          @livewire('createquestion')
        </div>
    </div>
</div>
@endsection
