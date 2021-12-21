<div class="invoicesFormWap">
    <form action="{{ $action }}" method="post">
        @csrf
        <div class="formAddCheangePost">
            <label class="block font-medium text-sm text-gray-700" for="name">何時間ぐらいいる？</label>
            <input
            class="rounded-md shadow border-gray-300 inputFormAddCheangePost"
            type="number"
            step="0.25"
            name="stayTime"
            placeholder="1.5　※時間単位で"
            required="required"
            @if(isset($datas->travelDate))
            value="{{ $datas->stayTime }}"
            @else
            value="{{ old('stayTime') }}"
            @endif>
        </div>
    </form>
</div>

