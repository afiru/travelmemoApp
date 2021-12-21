<x-app-layout>
    <x-gnavi></x-gnavi>
    <div class="wapper loginFormWap PostsFormWaps myPageMainWap">
        <div class="poRe border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md loginFormCnt myPageMain">
            <section class="secMypage">
                <h2 class="t_center h2Mypage">請求書入力</h2>
            </section>

            <x-invoices.invoices-form action="/addinvoice" ></x-invoices.invoices-form>
        </div>
    </div>
</x-app-layout>
