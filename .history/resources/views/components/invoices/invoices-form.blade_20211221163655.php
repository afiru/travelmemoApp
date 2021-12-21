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
        </div>
    </form>
</div>

