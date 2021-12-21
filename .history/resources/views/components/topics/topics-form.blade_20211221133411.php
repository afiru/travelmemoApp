
    @if(isset($data['title']))
    value="{{ $data['title'] }}"
    @else value="{{ old('title') }}"
<input
    type="text"
    name="title"
    class="rounded-md shadow border-gray-300 inputFormAddCheangePost"
    @if(isset($data['title']))
    value="{{ $data['title'] }}"
    @else value="{{ old('title') }}"
    @endif
>
