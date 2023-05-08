@extends('dashboard.layout.main')
@section('content')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 rounded-lg mt-14">
            <h1 class="text-3xl font-bold">Welcome admin</h1>
            <h2 class="font-medium text-lg mt-3">{{ auth()->user()->name }}</h2>
            <hr>
            <div class="mt-5">
                <h1 class="max-w-md text-sm font-medium mb-5">Hai admin {{ auth()->user()->name }} Bagaimana kabarmu 👋 saya
                    akan
                    memberikan beberapa
                    laporan tentang website Personal mu. Hingga saat ini saya hanya bisa memberikan laporan ini dan berikut
                    adalah laporan untuk saat ini</h1>
                <div class="flex gap-3">
                    <div class="px-4 py-2 text-center bg-primary text-white rounded-lg">
                        <h1>Post</h1>
                        <h1 class="text-4xl font-bold">{{ count($posts) }}</h1>
                    </div>
                    <div class="px-4 py-2 text-center bg-primary text-white rounded-lg">
                        <h1>Gallery</h1>
                        <h1 class="text-4xl font-bold">{{ count($gallery) }}</h1>
                    </div>
                    <div class="px-4 py-2 text-center bg-primary text-white rounded-lg">
                        <h1>Massage</h1>
                        <h1 class="text-4xl font-bold">{{ count($posts) }}</h1>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap mt-5 mb-10">
                <div class="w-full md:w-1/2 px-4">
                    <div class="p-4 border-2 border-gray-200 rounded-lg ">
                        <div class="flex justify-between">
                            <h1 class="font-medium">Your Latest Post</h1>
                            <a href="dashboard/posts" class="font-medium">Show All Post</a>
                        </div>
                        <hr class="my-2">
                        <div class="w-full px-4 ">
                            <div class="bg-white rounded-xl overflow-hidden shadow-lg mb-10">
                                <a href="/dashboard/posts/{{ $posts[0]->slug }}">
                                    <img src="https://source.unsplash.com/360x200?{{ $posts[0]->category->name }}"
                                        alt="{{ $posts[0]->category->name }}" class="w-full">
                                </a>
                                <div class="py-8 px-6">
                                    <a href="/dashboard/posts/{{ $posts[0]->slug }}">
                                        <h3
                                            class="mb-3 font-semibold text-xl text-dark hover:text-primary truncate transition duration-200">
                                            {{ $posts[0]->title }}</h3>
                                    </a>
                                    <p class="text-xs text-secondary">By
                                        {{ $posts[0]->author->name }} in
                                        {{ $posts[0]->category->name }}.
                                        {{ $posts[0]->created_at->diffForHumans() }}
                                    </p>
                                    <p class="font-medium text-base text-secondary mb-5">{{ $posts[0]->excerpt }}</p>
                                    <a href="/dashboard/posts/{{ $posts[0]->slug }}"
                                        class="py-2 px-4 rounded-lg bg-primary font-medium text-sm text-white hover:opacity-80">Go
                                        Somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 px-4">
                    <div class="p-4 border-2 border-gray-200 rounded-lg ">
                        <div class="flex justify-between">
                            <h1 class="font-medium">Latest Gallery</h1>
                            <a href="dashboard/posts" class="font-medium">Show All Massage</a>
                        </div>
                        <hr class="my-2">
                        @if ($gallery->count())
                            <div class="w-full px-4 ">
                                <div class="bg-white rounded-xl overflow-hidden shadow-lg mb-10">
                                    <div class="rounded-md shadow-md overflow-hidden h-[200px]">
                                        <img src="{{ asset('storage/' . $gallery[0]->image) }}"
                                            alt="{{ $gallery[0]->title }}" class="w-full">
                                    </div>
                                    <div class="p-4">
                                        <h3 class="font-semibold text-xl text-dark mt-2 mb-2">{{ $gallery[0]->title }}</h3>
                                        <p class="font-medium text-base text-secondary">{{ $gallery[0]->caption }}</p>
                                    </div>
                                </div>
                            </div>
                        @else
                            <h1>Not Find Latest Post</h1>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
