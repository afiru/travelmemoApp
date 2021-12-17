<div class="searchPosts bgSearchPosts jsSearchPosts">
    <div class="wapper serchPostsFormWap">
        <div class="serchPostsForm">
            <form action="{{ route('posts') }}" method="get">
                @csrf
                <div class="formSearchPosts">
                    <div class="itemSearchPosts">
                        <x-post.add-post-form-genre name="where[term]" datas="" genre="{{ $where['term'] }}"></x-post.add-post-form-genre>
                    </div>
                    <div class="itemSearchPosts">
                        <x-post.add-post-form-genre name="where[subterm]" datas="" genre="{{ $where['subterm'] }}"></x-post.add-post-form-genre>
                    </div>
                    <div class="itemSearchPosts">
                        <input class="itemSearchPostsInput"  type="date" name="where[travelDate]" placeholder="" list="date-list" min="2022-02-26" max="2022-02-27" @if(isset($where['travelDate'])) value="{{ $where['travelDate'] }}" @endif>
                    </div>
                    <div class="itemSearchPosts">
                        <input class="itemSearchPostsInput" type="text" name="where[prefectures]" placeholder="県名を入れてー" @if(isset($where['prefectures'])) value="{{ $where['prefectures'] }}" @endif>
                    </div>
                    <div class="itemSearchPosts">
                        <input class="itemSearchPostsInput" type="text" name="where[interchange]" placeholder="インターチェンジ名" @if(isset($where['interchange'])) value="{{ $where['interchange'] }}" @endif>
                    </div>
                    <div class="itemSearchPosts">
                        <input class="itemSearchPostsInput" type="text" name="where[placeName]" placeholder="場所名を入れてー"  @if(isset($where['placeName'])) value="{{ $where['placeName'] }}" @endif>
                    </div>
                </div>
                <div class="buttonSearchPostsWap">
                    <button type="submit" class="buttonSearchPosts">検索する</button>
                </div>
            </form>
        </div>
    </div>
</div>


