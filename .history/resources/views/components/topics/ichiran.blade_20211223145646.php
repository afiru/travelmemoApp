<article class="topicsArchives">
    <form action="/deltopics" method="post">
   @if(empty($topics ))
   @else
       @csrf
       @foreach($topics as $topic)
           <section class="secTopicsArchives">
               <div class="display_flex_center secTopicsArchivesFx">
                   @if($del === true && $topic->user_id === Auth::id())
                   <input class="checkTopicsArchives" type="checkbox" name="delltopics[]" value="{{ $topic->id }}">
                   @endif
                   <time class="timeTopics">
                       {{ $topic->UPDATED_AT }}
                       <a href="/editotopic/{{ $topic->id }}">(編集)</a>
                   </time>
               </div>
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

   @if($del === true)
   <div class="buttonMoreTopicsWap">
       <button type="submit" class="buttonMoreTopics">削除</button>
   </div>
   @endif


   @if($haspaginate === "true")
       <div class="display_flex_center paginate">

       </div>
   @endif
   </form>
</article>
