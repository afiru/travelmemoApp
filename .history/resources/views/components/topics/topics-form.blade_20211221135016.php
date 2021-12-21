
@if(isset($data['id']))
    <input type="hidden" name="id" value="{{ $data['id'] }}" >
@endif
<div class="formAddCheangePost">
    <label class="block font-medium text-sm text-gray-700" for="name">1日目か2日目どっち？（2020/02/26 or 2020/02/27）</label>
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
</div>

<textarea class="rounded-md shadow border-gray-300 textareaFormAddCheangePost" name="content" required="required">@if(isset($data['content'])){{ $data['content'] }}@else{{ old('content') }}@endif</textarea>

<button type="submit" class="buttonAddCheangePost">
    投稿します
</button>
