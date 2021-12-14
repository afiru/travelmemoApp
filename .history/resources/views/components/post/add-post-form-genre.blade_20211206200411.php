<select class="mt-2 py-2 px-2 rounded-md shadow border-gray-300 w-full select_{{ $genre }}" name="{{ $name }}" @if($name==="where[term]") required="true" @endif>
    @if($name==="term")
        @foreach (config('postTerms.parentTerms')  as $key => $value)
            <option value="{{ $key }}" @if(isset($genre) && $genre==$key) selected @endif>{{ $value }}</option>
        @endforeach
    @elseif($name==="where[term]")
        @foreach (config('postTerms.parentTerms')  as $key => $value)
            <option value="{{ $key }}" @if(isset($genre) && $genre==$key) selected @endif>{{ $value }}</option>
        @endforeach
    @else
        @foreach (config('postTerms.subTerms')  as $key => $value)
            <option value="{{ $key }}" @if(isset($genre) && $genre==$key) selected @endif>{{ $value }}</option>
        @endforeach
    @endif
</select>
