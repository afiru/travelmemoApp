<select class="mt-2 py-2 px-2 rounded-md shadow border-gray-300 w-full" name="{{ $name }}">
    @if($name==="term")
        @foreach (config('postTerms.parentTerms')  as $key => $value)
            <option value="{{ $key }}" @if($genre==$key) ええい @endif>{{ $value }}</option>
        @endforeach
    @else
        @foreach (config('postTerms.subTerms')  as $key => $value)
            <option value="{{ $key }}">{{ $value }}</option>
        @endforeach
    @endif

</select>

