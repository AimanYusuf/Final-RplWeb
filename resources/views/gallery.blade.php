@extends('layout.main')
@section('content')
    <section id="activity" class="pt-16 pb-16">
        <div class="container">
            <div class="w-full px-4">
                <div class=" mb-10 pt-10">
                    <h4 class="font-semibold text-lg text-primary mb-2">Gallery</h4>
                    <h4 class="font-bold text-dark text-3xl mb-4">Our gallery as friends</h4>
                    <p class="font-medium text-md text-secondary max-w-md">we as students also have an agenda that we keep as
                        memories and we document it on some of our social media</p>
                </div>
            </div>
            <div class="w-full flex flex-wrap px-4 justify-center">
                @foreach ($galeries as $gallery)
                    <div class="mb-12 w-full p-4 md:w-1/2 lg:w-1/3">
                        <div class="rounded-md shadow-md overflow-hidden h-[200px]">
                            <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}" class="w-full">
                        </div>
                        <h3 class="font-semibold text-xl text-dark mt-2 mb-2">{{ $gallery->title }}</h3>
                        <p class="font-medium text-base text-secondary">{{ $gallery->caption }}</p>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
    </section>
@endsection
