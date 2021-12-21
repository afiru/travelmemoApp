<article class="topicsArchives">
    {{ $del }}
    @if(empty($topics ))
    @else
    <form action="/deltopics" method="post">
        @csrf
        @foreach($topics as $topic)
            <section class="secTopicsArchives">
                <input type="cheackbox" name="delltopics[]" value="{{ $topic->id }}">
                <time class="timeTopics">
                    {{ $topic->UPDATED_AT }}
                    <a href="/editotopic/{{ $topic->id }}">(編集)</a>
                    @if($del === true)

                    @endif
                </time>
                <a class="buttonTopicsArchives" href="/topic/{{ $topic->id }}">
                    <h2 class="h2TopicsArchives">{{ Str::limit($topic->title, 107, '...') }}</h2>
                </a>
            </section>
        @endforeach
    </form>
    @endif


    @if($haslink==="true")
        <div class="buttonMoreTopicsWap">
            <a href="/topics" class="buttonLogin buttonMoreTopics">もっと見る</a>
        </div>
    @endif

    @if($haspaginate === "true")
        <div class="display_flex_center paginate">
            {{ $topics }}
        </div>
    @endif
</article>
