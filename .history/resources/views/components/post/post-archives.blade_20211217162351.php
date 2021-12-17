<article class="postsArchives">
    <form action="{{ route('posts') }}" method="post">
        @csrf
        <div class="display_flex_stretch display_row postsArchivesFx">
            @foreach($datas as $val)
            <div class="display_flex_stretch timeBookingArchivesFx">
                <div class="chackTimePosts">
                    <div class="chackPostsEdito">
                        <input class="shadow-xl chackPosts" type="checkbox" name="post_id[]" value="{{ $val['id'] }}">
                        <time class="timePosts">{{ $val['travelDate'] }} {{ $val['arrivalTime'] }}</time>
                        <a class="buttonEditoPosts" href="/post/{{ $val['id'] }}">編集</a>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </form>
</article>

