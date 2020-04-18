@extends('layouts.app')
@section('title')
@lang('home.answers')
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
       <div class="col-6 mt-5">
        <div class="card text-center ">
          <div class="card-body ">
           <img  src="{{$answer->friend->image}}" class="img-writer shadow  mb-5" style="right:120px;top:-62px" alt="">
           <a class="alink  mt-3" >{{$answer->friend->name}}</a><br>
           <a class="alink  mt-3" >{{$answer->result}}%</a>
          </div>
        </div>
       </div>
  </div>
</div>
@endsection
