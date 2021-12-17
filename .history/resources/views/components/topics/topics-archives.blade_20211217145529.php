<article>
    @foreach($topics as $topic)
    <section class="secTopicsArchives">
        <a class="buttonTopicsArchives" href="/topic/{{ $topic->id }}">
            <time class="timeTopics">{{ $topic->UPDATED_AT }}</time>
            <h2 class="h2TopicsArchives">{{ Str::limit($topic->title, 10, '...') }}</h2>
        </a>


    </section>
    @endforeach
</article>
