@extends('layouts.app')
@section('title')

@endsection
@section('content')
<div class="container text-@lang('home.left')">
   @livewire('createquestion')
</div>
@endsection
