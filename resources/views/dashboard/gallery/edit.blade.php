@extends('dashboard.layout.main')
@section('content')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 rounded-lg mt-14 ">
            <div class="flex items-center gap-2 mb-5">
                <i class="inline" data-feather="edit"></i>
                <h1 class="text-2xl font-bold text-dark">Edit Post</h1>
            </div>
            <hr class=py-5>
            <div class="">
                <form action="/dashboard/posts" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-6">
                        <label
                            class="block mb-2 text-sm font-medium text-gray-900  @error('image') border-red-600 @enderror "
                            for="user_avatar">Upload
                            file</label>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50  focus:outline-none md:w-1/2"
                            type="file" name="image" value="{{ $gallery->image }}">
                        @error('image')
                            <p class="mt-2 text-sm text-dangger dark:text-dangger"><span class="font-medium">{{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="title"
                            class="block mb-2 text-sm font-medium text-gray-900 @error('title')
                            text-red-600
                            @enderror">Title</label>
                        <input type="text" id="title" value="{{ old('title', $gallery->title) }}" name="title"
                            class="bg-gray-50 border md:w-1/2 border-gray-300 @error('title') border-red-600 @enderror text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="Title">
                        @error('title')
                            <p class="mt-2 text-sm text-dangger "><span class="font-medium">{{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="mb-6 md:w-3/4">
                        <label for="x"
                            class="block mb-2 text-sm font-medium text-gray-900 @error('caption') text-red-600 @enderror ">caption</label>
                        <input id="x" value="{{ old('caption', $gallery->caption) }}" type="hidden" name="caption"
                            class="@error('caption') border-red-600 @enderror">
                        <trix-editor input="x"></trix-editor>
                        @error('caption')
                            <p class="mt-2 text-sm text-dangger "><span class="font-medium">{{ $message }}
                            </p>
                        @enderror
                    </div>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        const title = document.querySelector('#title')
        const slug = document.querySelector('#slug')

        title.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?title=' + title.value).then(response => response.json()).then(data =>
                slug.value = data.slug)
        })
    </script>
@endsection
