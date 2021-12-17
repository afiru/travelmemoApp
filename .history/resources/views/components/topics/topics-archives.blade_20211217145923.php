<article class="TopicsArchives">
    @foreach($topics as $topic)
    <section class="secTopicsArchives">
        <a class="buttonTopicsArchives" href="/topic/{{ $topic->id }}">
            <time class="timeTopics">{{ $topic->UPDATED_AT }}</time>
            <h2 class="h2TopicsArchives">{{ Str::limit($topic->title, 107, '...') }}</h2>
        </a>
    </section>
    @endforeach

    @if($haslink===true)

    @endif
</article>
