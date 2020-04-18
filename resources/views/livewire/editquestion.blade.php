<div>
    <label>@lang('home.countanswer')</label>
    <select class="form-control brdrd myclass" id=""wire:model="answer">
       <option value="2">2</option>
       <option value="3">3</option>
       <option value="4">4</option>
    </select>
    {{Question::edit($question,$answer)}}
</div>
