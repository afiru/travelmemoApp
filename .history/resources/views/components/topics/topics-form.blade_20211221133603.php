
@if(isset($data['id']))
    <input type="hidden" name="id" value="{{ $data['id'] }}" >
@endif
<input
    type="text"
    name="title"
    class="rounded-md shadow border-gray-300 inputFormAddCheangePost"
    @if(isset($data['title']))
    value="{{ $data['title'] }}"
    @else value="{{ old('title') }}"
    @endif
>
<textarea name="content">@if(isset($data['title'])) {{ $data['title'] }}    @else value="{{ old('title') }}"   @endif</textarea>
