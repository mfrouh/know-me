<select class="{{$class}}" name="{{$name}}" id="">
  @foreach ($options as $key=> $option)
    <option value="{{$key}}">{{$option}}</option>
  @endforeach
</select>
