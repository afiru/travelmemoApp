<article class="topicsArchives">
    @if(empty($topics ))
    @else
    @foreach($topics as $topic)
    <section class="secTopicsArchives">

            <time class="timeTopics">{{ $topic->UPDATED_AT }} <a href="/editotopic/{{  }}"</time>
        <a class="buttonTopicsArchives" href="/topic/{{ $topic->id }}">
            <h2 class="h2TopicsArchives">{{ Str::limit($topic->title, 107, '...') }}</h2>
        </a>
    </section>
    @endforeach
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
