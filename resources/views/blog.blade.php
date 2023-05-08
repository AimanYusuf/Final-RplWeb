@extends('layout.main')
@section('content')
    <section id="blog" class="pt-16 pb-32 min-h-screen">
        <div class="container">
            <form class="py-5 w-full md:w-1/2 mx-auto px-4">
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only ">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 " fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <input type="search" id="default-search"
                        class="block w-full p-3 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 "
                        placeholder="Search post" value="{{ request('search') }}" name="search">
                    <button type="submit"
                        class="text-white absolute right-2.5 bottom-1.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 ">Search</button>
                </div>
            </form>
            @if ($posts->count())
                <div class="w-full px-4">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg">
                        <a href="/blog/{{ $posts[0]->slug }}">
                            <div class=" h-[400px] overflow-hidden">
                                @if ($posts[0]->image)
                                    <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->title }}"
                                        class="w-full">
                                @else
                                    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}"
                                        alt="{{ $posts[0]->category->name }}" class="w-full">
                                @endif
                            </div>
                        </a>
                        <div class="py-8 px-6 text-center">
                            <a href="/blog/{{ $posts[0]->slug }}">
                                <h3
                                    class="mb-3 font-semibold text-xl text-dark hover:text-primary truncate transition duration-200">
                                    {{ $posts[0]->title }}</h3>
                            </a>
                            <p class="text-sm text-secondary">By
                                <a class="text-primary hover:underline"
                                    href="/blog?author={{ $posts[0]->author->name }}">{{ $posts[0]->author->name }}</a>
                                in
                                <a class="text-primary hover:underline"
                                    href="/blog?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>.
                                {{ $posts[0]->created_at->diffForHumans() }}
                            </p>
                            <p class="font-medium text-base text-secondary mb-5 max-w-xs mx-auto">{{ $posts[0]->excerpt }}
                            </p>
                            <a href="/blog/{{ $posts[0]->slug }}"
                                class="py-2 max-w-auto px-4 rounded-lg bg-primary font-medium text-sm text-white hover:opacity-80">Go
                                Somewhere</a>
                        </div>
                    </div>
                    <div class="flex justify-between py-5 items-baseline">
                        <h2 class="font-bold text-2xl lg:text-2xl text-dark">All Post</h2>
                        <a href="" class="font-medium text-sm hover:underline hover:text-primary">Show All
                            Categories</a>
                    </div>
                </div>
                <div class="flex flex-wrap ">
                    @foreach ($posts->skip(1) as $post)
                        <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                            <div class="bg-white rounded-xl overflow-hidden shadow-lg mb-10">
                                <a href="/blog/{{ $post->slug }}">
                                    <div class=" h-[200px] overflow-hidden">
                                        @if ($post->image)
                                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                                                class="w-full">
                                        @else
                                            <img src="https://source.unsplash.com/360x200?{{ $post->category->name }}"
                                                alt="{{ $post->category->name }}" class="w-full">
                                        @endif
                                    </div>
                                </a>
                                <div class="py-8 px-6">
                                    <a href="/blog/{{ $post->slug }}">
                                        <h3
                                            class="mb-3 font-semibold text-xl text-dark hover:text-primary truncate transition duration-200">
                                            {{ $post->title }}</h3>
                                    </a>
                                    <p class="text-sm text-secondary">By
                                        <a class="text-primary hover:underline"
                                            href="/blog?author={{ $post->author->name }}">{{ $post->author->name }}</a>
                                        in
                                        <a class="text-primary hover:underline"
                                            href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a>.
                                        {{ $post->created_at->diffForHumans() }}
                                    </p>
                                    <p class="font-medium text-base text-secondary mb-5">{{ $post->excerpt }}</p>
                                    <a href="/blog/{{ $post->slug }}"
                                        class="py-2 px-4 rounded-lg bg-primary font-medium text-sm text-white hover:opacity-80">Go
                                        Somewhere</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-2xl text-center">Search Not Found.</p>
            @endif
            <div class="px-4">
                {{ $posts->links() }}
            </div>
        </div>
    </section>
@endsection
