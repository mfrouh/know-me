<div class="card mt-2 brdrd shadow-sm">
    <div class="card-header bg-white text-center">
        <div class="row p-1">
            <div class="col-1"><a  class="btn btn-success brdrd btn-sm">{{$k+1}}</a> </div>
            <div class="col-9">{{ $question->question}}</div>
            <div class="col-2">
               <a href="/question/{{$question->id}}/edit" class="@lang('home.right') btn btn-primary ml-1 mr-1 brdrd btn-sm"><i class="fas fa-edit    "></i></a>
               <a href="#" class="@lang('home.right') btn btn-danger brdrd btn-sm"onclick="event.preventDefault();
               document.getElementById('delete-question-{{$question->id}}').submit();">
               <i class="fa fa-trash-o" aria-hidden="true"></i>
               </a>
               <form id="delete-question-{{$question->id}}" action="/question/{{$question->id}}" method="POST" style="display: none;">
                   @csrf
                   @method('DELETE')
               </form>
            </div>
       </div>
    </div>
</div>
    <div class="card-header mr-0 ml-0 bg-white row  text-@lang('home.left') mt-1 p-2 @if($question->option1)border-d @endif">
        <div class="col-1"> <a  class="btn btn-success brdrd btn-sm">{{1}}</a></div>
        <div class="col-11"> {{$question->option1}}</div>
    </div>
    <div class="card-header mr-0 ml-0 bg-white row  text-@lang('home.left') mt-1 p-2 @if($question->option2)border-d @endif">
        <div class="col-1"> <a  class="btn btn-success brdrd btn-sm">{{2}}</a></div>
        <div class="col-11"> {{$question->option2}}</div>
    </div>
    @if($question->option3)
    <div class="card-header mr-0 ml-0 row text-@lang('home.left') mt-1 bg-white p-2 border-d ">
        <div class="col-1"> <a  class="btn btn-success brdrd btn-sm">{{3}}</a></div>
        <div class="col-11"> {{$question->option3}}</div>
    </div>
    @endif
    @if($question->option4)
    <div class="card-header mr-0 ml-0 row text-@lang('home.left') mt-1 bg-white p-2 border-d ">
        <div class="col-1"> <a  class="btn btn-success brdrd btn-sm">{{4}}</a></div>
        <div class="col-11"> {{$question->option4}}</div>
    </div>
    @endif
