
@if(isset($data['id']))
    <input type="hidden" name="id" value="{{ $data['id'] }}" >
@endif
<input
    type="text"
    name="title"
    required="required"
    class="rounded-md shadow border-gray-300 inputFormAddCheangePost"
    @if(isset($data['title']))
    value="{{ $data['title'] }}"
    @else value="{{ old('title') }}"
    @endif
>
<textarea class="rounded-md shadow border-gray-300 textareaFormAddCheangePost" name="content" required="required">@if(isset($data['content'])) {{ $data['content'] }}  @else {{ old('content') }}  @endif</textarea>

<button type="submit" class="buttonAddCheangePost">
    投稿します
</button>
