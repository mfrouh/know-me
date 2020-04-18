<form action="/question/{{$question->id}}" method="POST">
   @csrf
   @method('put')
  <div class="form-group">
    <label for="@lang('home.question')">@lang('home.question')</label>
    <textarea name="question" id="" class="form-control myclass brdrd" rows="2" required>{{$question->question}}</textarea>
  </div>
  @for ($i = 1; $i <= $answer; $i++)
       <div class="form-group border-d">
          <div class="row ">
             <div class="col-1 center">
                 <label for="@lang('home.option'.$i)">@lang('home.option'.$i)</label>
             </div>
              <div class="col-1 center ">
                 <input type="radio" name="correctanswer" {{$question->correctanswer=="option$i"?'checked':''}} value="option{{$i}}" required>
              </div>
              <div class="col-10">
                  @php
                       $option="option$i";
                  @endphp
                 <input type="text" name="option{{$i}}" value="{{$question->$option}}" id="" class="form-control myclass brdrd" placeholder="@lang('home.option'.$i)" required>
              </div>
          </div>
       </div>
  @endfor
  <div class="form-group text-center">
    <input type="submit"  class="btn btn-primary btn-sm myclass brdrd" value="@lang('home.save')">
  </div>
</form>
