<select class="mt-2 py-2 px-2 rounded-md shadow border-gray-300 w-full lg:w-4/12" name="{{ $name }}" @if($name==="term") required="required" @endif>
    @if($name==="term")
        @foreach (config('postTerms.parentTerms')  as $key => $value)
            <option value="{{ $key }}">{{ $value }}</option>
        @endforeach
    @else

    @endif

</select>
