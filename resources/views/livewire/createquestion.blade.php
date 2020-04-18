<div>
    <label>@lang('home.countanswer')</label>
    <select class="form-control brdrd myclass" id=""wire:model="answer">
       <option value="2">2</option>
       <option value="3">3</option>
       <option value="4">4</option>
    </select>
    {{Question::Create($answer)}}
    @foreach ($questions as $k=> $question)
   <div class="card mt-2 brdrd shadow-sm">
     <div class="card-header bg-white text-center">@lang('home.questions')</div>
     <div class="card-body">
        <div class="row p-1">
             <div class="col-1"><a href="#" class="btn btn-success brdrd btn-sm">{{$k+1}}</a> </div>
             <div class="col-9">{{ $question->question}}</div>
             <div class="col-2">
                <a href="/question/{{$question->id}}/edit" class="@lang('home.right') btn btn-primary ml-1 mr-1 brdrd btn-sm"><i class="fas fa-edit    "></i></a>
                <a href="/" class="@lang('home.right') btn btn-danger brdrd btn-sm"onclick="event.preventDefault();
                document.getElementById('delete-question-{{$question->id}}').submit();">
                <i class="fa fa-trash-o" aria-hidden="true"></i>
                </a>
                <form id="delete-question-{{$question->id}}" action="/question/{{$question->id}}" method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>
             </div>
        </div>
        <div class="row ">
             <div class="col-12 p-2 @if($question->option1)border-d @endif">{{$question->option1}}</div>
             <div class="col-12 p-2 @if($question->option2)border-d @endif">{{$question->option2}}</div>
             @if($question->option3)<div class="col-12 p-2 border-d ">{{$question->option3}}</div>@endif
             @if($question->option4)<div class="col-12 p-2 border-d ">{{$question->option4}}</div>@endif
        </div>
      </div>
   </div>
   @endforeach
   <div class="row mt-2 text-center">
       <div class="col-12">{{$questions->links()}}</div>
   </div>
</div>
