@extends('layouts.app')
@section('title')

@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-8 mt-5">
    @forelse ($questions as $k=> $question)
      <x-question :question="$question" :k="$k"/>
      <hr>
    @empty
    <div class="row">
        <div class="col-12 text-center">
            <p> @lang('home.notfoundquestion') </p>
        </div>
    </div>
    @endforelse
    </div>
  </div>
</div>
@endsection
