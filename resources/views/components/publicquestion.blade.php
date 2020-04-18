<div class="card mt-2 brdrd shadow-sm">
    <div class="card-header bg-white text-center">
        <div class="row">
            <div class="col-1"><a  class="btn btn-success brdrd btn-sm">{{$k+1}}</a> </div>
            <div class="col-11">{{ $question->question}}</div>
       </div>
    </div>
</div>
    <div class="card-header row bg-white mr-0 ml-0  text-@lang('home.left') mt-1 p-2 @if($question->option1)border-d @endif">
        <div class="col-1"><a class="btn btn-success brdrd btn-sm">{{1}}</a></div>
        <div class="col-1"><input type="radio" value="option1" name="{{$question->id}}"></div>
        <div class="col-10"> {{$question->option1}}</div>
    </div>
    <div class="card-header row bg-white mr-0 ml-0  text-@lang('home.left') mt-1 p-2 @if($question->option2)border-d @endif">
        <div class="col-1"><a class="btn btn-success brdrd btn-sm">{{2}}</a></div>
        <div class="col-1"><input type="radio" value="option2" name="{{$question->id}}"></div>
        <div class="col-10"> {{$question->option2}}</div>
    </div>
    @if($question->option3)
    <div class="card-header row mr-0 ml-0 text-@lang('home.left') mt-1 bg-white p-2 border-d ">
        <div class="col-1"><a class="btn btn-success brdrd btn-sm">{{3}}</a></div>
        <div class="col-1"><input type="radio" value="option3" name="{{$question->id}}"></div>
        <div class="col-10"> {{$question->option3}}</div>
    </div>
    @endif
    @if($question->option4)
    <div class="card-header row  mr-0 ml-0 text-@lang('home.left') mt-1 bg-white p-2 border-d ">
        <div class="col-1"><a class="btn btn-success brdrd btn-sm">{{4}}</a></div>
        <div class="col-1"><input type="radio" value="option4" name="{{$question->id}}"></div>
        <div class="col-10"> {{$question->option4}}</div>
    </div>
    @endif
