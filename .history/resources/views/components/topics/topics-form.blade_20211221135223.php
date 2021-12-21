
@if(isset($data['id']))
    <input type="hidden" name="id" value="{{ $data['id'] }}" >
@endif
<div class="formAddCheangePost">
    <label class="block font-medium text-sm text-gray-700" for="name">トピックスタイトル</label>
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
<div class="formAddCheangePost">
    <label class="block font-medium text-sm text-gray-700" for="name">本文</label>
    <textarea class="rounded-md shadow border-gray-300 textareaFormAddCheangePost" name="content" required="required">@if(isset($data['content'])){{ $data['content'] }}@else{{ old('content') }}@endif</textarea>
</div>
<input type="hidden" name="user_id" value={{ Auth::id }}" >

<button type="submit" class="buttonAddCheangePost">
    投稿します
</button>
