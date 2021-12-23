<div class="invoicesFormWap">
    <form action="{{ $action }}" method="post">
        @csrf
        <div class="formAddCheangePost">
            <label class="block font-medium text-sm text-gray-700" for="name">ジャンルを選んでー</label>
            <div class="">
                @if(isset($invoiceData->term))
                    <x-post.add-post-form-genre genre="term" name="term" datas="{{ $invoiceData->term }}"></x-post.add-post-form-genre>
                @else
                    <x-post.add-post-form-genre genre="subterm" name="term" datas=""></x-post.add-post-form-genre>
                @endif
            </div>
        </div>
    </form>
</div>

