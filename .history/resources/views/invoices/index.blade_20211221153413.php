<x-app-layout>
    <x-gnavi></x-gnavi>
    <div class="wapper loginFormWap PostsFormWaps myPageMainWap">
        <div class="poRe border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md loginFormCnt myPageMain">
            <section class="secMypage">
                <h2 class="t_center h2Mypage">請求書</h2>
            </section>

            <div class="invoices">
                <!--高さ固定でoverflow auto スクロールバーは消したいね-->
                <form action="post" method="/invoices">
                    @csrf
                    @foreach($invoices as $invoice)
                    <div class="display_flex_stretch invoicesLoop">
                        <div class="invoiceDel">
                            <input type="checkbox" name="invoiceDel[]" value="{{ $invoice->id }}">
                        </div>
                        <p class="invoiceGenre">{{ config('postTerms.parentTerms')[$invoice->itemGenre] }}</p>
                        <h2 class="invoiceGenre">{{ $invoice->itemName }}</h2>
                        <p class="invoiceGenre">{{ config('postTerms.parentTerms')[$invoice->itemGenre] }}</p>
                    </div>
                    @endforeach
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
