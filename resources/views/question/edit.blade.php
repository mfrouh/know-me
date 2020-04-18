@extends('layouts.app')
@section('title')
@lang('home.editquestion')
@endsection
@section('content')
<div class="container text-@lang('home.left')">
  <div class="row justify-content-center">
    <div class="col-8 mt-5">
          @livewire('editquestion',['question'=>$question])
    </div>
  </div>
</div>
@endsection
