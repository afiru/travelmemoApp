<div class="display_flex_center totalPayPersonFx">
    <section class="display_flex_stretch_bottom secTotalPay">
        @if(empty($totalPayPerson)))
        @else
        <h3 class="pricePayPerson">{{ number_format($totalPayPerson) }}</h3>
        <p class="txtPayPerson">（1人税込み）</p>
        @endif
    </section>
    <div class="buttonInvoiceMoreWap">
        <a href="/topics" class="buttonLogin buttonInvoiceMore">もっと見る</a>
    </div>
</div>

