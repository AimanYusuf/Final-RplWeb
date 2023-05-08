@extends('dashboard.layout.main')
@section('content')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 rounded-lg  mt-14">
            <div class="w-full overflow-hidden border rounded-lg shadow-md mb-5">
                <div class=" h-[500px] overflow-hidden">
                    @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full">
                    @else
                        <img src="https://source.unsplash.com/360x200?{{ $post->category->name }}"
                            alt="{{ $post->category->name }}" class="w-full">
                    @endif
                </div>
                <div class="px-4 py-4">
                    <h1 class="font-bold text-2xl md:text-3xl lg:text-4xl mb-3">{{ $post->title }}</h1>
                    <h3 class="font-medium text-sm">Author : {{ $post->author->name }}</h3>
                    <h3 class="font-medium text-sm">Category : {{ $post->category->name }}</h3>
                    <h3 class="font-medium mb-5 text-sm">Created at : {{ $post->created_at->diffForHumans() }}</h3>
                    </h3>
                    <div class=" mb-5">
                        <a href="/dashboard/posts"
                            class="font-medium p-2 bg-primary text-white rounded-md hover:bg-opacity-80 transition duration-200">Show
                            All Post</a>
                        <a href="/dashboard/posts/{{ $post->slug }}/edit"
                            class="font-medium p-2 bg-green-500 text-white rounded-md hover:bg-opacity-80 transition duration-200">Edit</a>
                        <form action="/dashboard/posts/{{ $post->slug }}" class="inline" method="post">
                            @method('delete')
                            @csrf
                            <button
                                class="font-medium p-2 bg-red-500 text-white rounded-md hover:bg-opacity-80 transition duration-200"
                                onclick="return confirm('Are you sure ?')">delete
                            </button>
                        </form>
                    </div>
                    <hr class="mb-4">
                    <p>{!! $post->body !!}</p>
                </div>
            </div>
            <button onclick="window.history.back()" class="px-4 rounded-md text-white py-2 bg-red-600">Back</button>
        </div>
    </div>
@endsection
