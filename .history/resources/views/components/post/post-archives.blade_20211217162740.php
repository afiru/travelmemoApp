<article class="postsArchives">
    <form action="{{ route('posts') }}" method="post">
        @csrf
        <div class="display_flex_stretch display_row postsArchivesFx">
            @foreach($datas as $val)
            <div class="display_flex_stretch timeBookingArchivesFx">
                <div class="chackTimePosts">
                    <div class="chackPostsEdito">
                        <input class="shadow-xl chackPosts" type="checkbox" name="post_id[]" value="{{ $val['id'] }}">
                        <time class="timePosts">{{ $val['postModified'] }}</time>
                        <a class="buttonEditoPosts" href="/post/{{ $val['id'] }}">編集</a>
                    </div>
                    <div class="bookingsPostsWap">
                        <p class="display_flex_center numberBookingPost">
                            <figure class="iconNumberBookingPosts">
                                <img loading="lazy" src="/img/iconNumberBooking.svg" alt="いいねアイコン" width="10" height="10" />
                            </figure>
                            <span id="point_sum_{{ $val['id'] }}" class="text-sm point_sum_{{ $val['id'] }}">
                                {{ $val['point_sum'] }}
                            </span>
                        </p>
                    </div>
                </div>
                {{ $val['travelDate'] }} {{ $val['arrivalTime'] }}
            </div>

            @endforeach
        </div>
    </form>
</article>

