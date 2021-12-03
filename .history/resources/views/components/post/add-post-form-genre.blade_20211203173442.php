<select class="mt-2 py-2 px-2 rounded-md shadow border-gray-300 w-full lg:w-4/12" name="{{ $name }}" @if($name==="term") required="required" @endif>
    <option value=""></option>
    @if($name==="term")
        @foreach (config('postTerms.parentTerms')  as $key => $value)
            <option value="{{ $key }}">{{ $value }}</option>
        @endforeach
    @else
        @foreach (config('postTerms.subTerms')  as $key => $value)
            <option value="{{ $key }}">{{ $value }}</option>
        @endforeach
    @endif

</select>
