<article class="postsArchives">
    <form action="{{ route('posts') }}" method="post">
        @csrf
        <div class="display_flex_stretch display_row postsArchivesFx">
            @foreach($data as $val)


            @endforeach
        </div>
    </form>
</article>
{{ $datas }}
