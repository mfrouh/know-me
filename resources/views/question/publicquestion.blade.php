@extends('layouts.app')
@section('title')
{{$user->name}}
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8 mt-5 text-center">
            <img  src="{{$user->image}}" class="img-writer shadow mt-1 mb-5" style="top:-72px" alt="">
           <form action="/answer" method="POST">
             @csrf
             @forelse ($questions as $k=> $question)
               <x-publicquestion :question="$question" :k="$k"/>
               <hr>
             @empty
             <div class="row">
                 <div class="col-12 text-center">
                     <p>  @lang('home.notfoundquestion') </p>
                 </div>
             </div>
             @endforelse
             @if($questions->count()!=0)
             <input type="hidden" name="user_id" value="{{$question->user_id}}">
             <div class="row">
                 <div class="col-12 text-center">
                     <input type="submit" class="btn btn-outline-primary brdrd " value="@lang('home.save')">
                 </div>
             </div>
             @endif
           </form>
       </div>
    </div>
</div>
@endsection
