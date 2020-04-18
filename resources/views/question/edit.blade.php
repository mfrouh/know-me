@extends('layouts.app')
@section('title')

@endsection
@section('content')
<div class="container text-@lang('home.left')">
   {{-- <x-editquestion :question="$question"/> --}}
   @livewire('editquestion',['question'=>$question])
</div>
@endsection
