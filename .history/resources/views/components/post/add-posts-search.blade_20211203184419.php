<form action="{{ route('posts') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mt-2 w-full flex justify-start text-gray-500">
        <div class="w-4/12 lg:w-2/12">
            <x-post.add-post-form-genre name="term" data=""></x-post.add-post-form-genre>
        </div>
        <div class="w-4/12 lg:w-2/12 lg:ml-2">
            <x-post.add-post-form-genre name="subterm" data=""></x-post.add-post-form-genre>
        </div>
    </div>
</form>
