<input type="text" name="title" @if(isset($data['title'])) value="{{ $data['title'] }}"  @else old()  @endif>
