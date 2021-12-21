<article>
    @foreach($topics as $topic)
    <section class="secTopicsArchives">
        <a class="buttonTopicsArchives" href="/topic/{{ $topic->id }}">
            <time class="timeTopics">{{ $topic->UPDATED_AT }}</time>
        </a>


    </section>
    @endforeach
</article>
