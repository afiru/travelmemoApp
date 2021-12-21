<div class="invoicesFormWap">
    <form action="{{ $action }}" method="post">
        @csrf
        <div class="formAddCheangePost">
            <label class="block font-medium text-sm text-gray-700" for="name">項目名</label>
            <input
            class="rounded-md shadow border-gray-300 inputFormAddCheangePost"
            type="text"
            name="itemName	"
            required="required"
            @if(isset($datas->url))
            value="{{ $invoiceData->itemName	 }}"
            @else
            value="{{ old('itemName	') }}"
            @endif>
        </div>
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


    </form>
</div>

