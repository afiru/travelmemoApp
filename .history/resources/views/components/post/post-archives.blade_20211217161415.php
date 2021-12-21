<article class="postsArchives">
    <form action="{{ route('posts') }}" method="post">
        @csrf
    </form>
</article>
{{ $datas }}
