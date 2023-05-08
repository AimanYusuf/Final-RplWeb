@extends('layout.main')
@section('content')
    <section class="pt-20 pb-32 min-h-screen">
        <div class="container">
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
                    <hr class="mb-4">
                    <p>{!! $post->body !!}</p>
                </div>
            </div>
            <button onclick="goBack()" class="px-4 rounded-md text-white py-2 bg-red-600">Back</button>
        </div>
    </section>
@endsection
