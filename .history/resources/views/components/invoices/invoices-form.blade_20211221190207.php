<div class="invoicesFormWap">
    <form action="{{ $action }}" method="post">
        @csrf

        <div class="formAddCheangePost">
            <label class="block font-medium text-sm text-gray-700" for="name">項目名</label>
            <input
            class="rounded-md shadow border-gray-300 inputFormAddCheangePost"
            type="text"
            name="itemName"
            required="required"
            @if(isset($invoiceData->itemName))
            value="{{ $invoiceData->itemName }}"
            @else
            value="{{ old('itemName	') }}"
            @endif>
        </div>

        <div class="formAddCheangePost">
            <label class="block font-medium text-sm text-gray-700" for="name">ジャンルを選択</label>
            <div class="">
                @if(isset($invoiceData->term))
                    <x-post.add-post-form-genre genre="term" name="itemGenre" datas="{{ $invoiceData->itemGenre }}"></x-post.add-post-form-genre>
                @else
                    <x-post.add-post-form-genre genre="term" name="itemGenre" datas=""></x-post.add-post-form-genre>
                @endif
            </div>
        </div>

        <div class="formAddCheangePost">
            <label class="block font-medium text-sm text-gray-700" for="name">料金※四人分の総合計</label>
            <input
            class="rounded-md shadow border-gray-300 inputFormAddCheangePost"
            type="number"
            name="cost"
            required="required"
            @if(isset($datas->url))
            value="{{ $invoiceData->cost}}"
            @else
            value="{{ old('cost	') }}"
            @endif>
        </div>
        @if (empty($invoiceData->id))
        <button type="submit" class="buttonInvoices">
            登録します
        </button>
        @else
        <input type="hidden" name="id" value="{{ $invoiceData->id }}">
        <button type="submit" class="buttonInvoices">
            変更します
        </button>
        @endif

    </form>
</div>

