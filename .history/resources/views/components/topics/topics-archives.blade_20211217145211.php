<article>
    @foreach($topics as $topic)
    <section class="secTopicsArchives">
        <time class="timeTopics">{{ $topic->UPDATED_AT }}</time>
    </section>
    @endforeach
</article>
