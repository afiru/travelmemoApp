
@if(isset($topicData['id']))
    <input type="hidden" name="id" value="{{ $topicData['id'] }}" >
@endif
<div class="formAddCheangePost">
    <label class="block font-medium text-sm text-gray-700" for="name">トピックスタイトル</label>
    <input
    type="text"
    name="title"
    required="required"
    class="rounded-md shadow border-gray-300 inputFormAddCheangePost"
    @if(isset($topicData['title']))
    value="{{ $topicData['title'] }}"
    @else value="{{ old('title') }}"
    @endif
>
</div>
<div class="formAddCheangePost">
    <label class="block font-medium text-sm text-gray-700" for="name">本文</label>
    <textarea class="rounded-md shadow border-gray-300 textareaFormAddCheangePost" name="content" required="required">@if(isset($topicData['content'])){{ $topicData['content'] }}@else{{ old('content') }}@endif</textarea>
</div>
<input type="hidden" name="user_id" value="{{ auth()->id(); }}" >
<input type="hidden" name="genre" value="1" >
<button type="submit" class="buttonAddCheangePost">
    投稿します
</button>
