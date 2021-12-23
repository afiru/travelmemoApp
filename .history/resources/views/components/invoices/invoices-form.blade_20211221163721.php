<div class="invoicesFormWap">
    <form action="{{ $action }}" method="post">
        @csrf
        <div class="formAddCheangePost">
            <label class="block font-medium text-sm text-gray-700" for="name">ジャンルを選択</label>
            <div class="">
                @if(isset($invoiceData->term))
                    <x-post.add-post-form-genre genre="term" name="term" datas="{{ $invoiceData->itemGenre }}"></x-post.add-post-form-genre>
                @else
                    <x-post.add-post-form-genre genre="subterm" name="term" datas=""></x-post.add-post-form-genre>
                @endif
            </div>
        </div>

        <div class="formAddCheangePost">
            <label class="block font-medium text-sm text-gray-700" for="name">場所名のurlを教えてー</label>
            <input
            class="rounded-md shadow border-gray-300 inputFormAddCheangePost"
            type="text"
            name="url"
            placeholder="url"
            required="required"
            @if(isset($datas->url))
            value="{{ $datas->url }}"
            @else
            value="{{ old('url') }}"
            @endif>
        </div>
    </form>
</div>
