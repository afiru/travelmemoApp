<article>
    @foreach($topics as $topic)
    <section class="secTopicsArchives">
        <a class="buttonTopicsArchives" href="/topic/{{ $topic->id }}">
            <time class="timeTopics">{{ $topic->UPDATED_AT }}</time>
            <h2 class="h2TopicsArchives">{{ $topic->title }}</h2>
        </a>


    </section>
    @endforeach
</article>
