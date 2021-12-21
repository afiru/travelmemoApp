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
                            <span id="point_sum_{{ $val['id'] }}" class="intBookings point_sum_{{ $val['id'] }}">
                                {{ $val['point_sum'] }}
                            </span>
                            <span class="unitBookings">Good</span>
                        </p>
                        <span
                        class="ml-4 text-center text-sm cursor-pointer block mt-1 mb-1 p-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition jsButtonPost buttonPost"
                        data-id="{{ $val['id'] }}"
                        data-target="point_sum_{{ $val['id'] }}"
                        x-data="{id: '{{ $val['id'] }}',userid:'{{ Auth::id() }}'}"
                        >いいね</span>
                    </div>
                </div>
                {{ $val['travelDate'] }} {{ $val['arrivalTime'] }}
            </div>

            @endforeach
        </div>
    </form>
</article>

