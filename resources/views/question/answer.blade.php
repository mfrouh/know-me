@extends('layouts.app')
@section('title')
@lang('home.answers')
@endsection
@section('content')
<div class="container">
  <div class="row">
    @forelse ($answers as $answer)
       <div class="col-3 mt-5">
        <div class="card text-center ">
          <div class="card-body ">
           <img  src="{{$answer->friend->image}}" class="img-writer shadow  mb-5" style="right:120px;top:-62px" alt="">
           <a class="alink  mt-3" >{{$answer->friend->name}}</a><br>
           <a class="alink  mt-3" >{{$answer->result}}%</a>
          </div>
        </div>
       </div>
    @empty
        <div class="col-12 text-center mt-5">
           <p class=""> @lang('home.notfoundanswer')</p>
        </div>
    @endforelse
  </div>
</div>
@endsection
