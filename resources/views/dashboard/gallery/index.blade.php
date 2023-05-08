@extends('dashboard.layout.main')
@section('content')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 rounded-lg mt-14">
            <div class="flex mb-5 justify-between items-center">
                <h1 class="font-bold text-2xl mb-5">All Gallery</h1>
                <a href="/dashboard/gallery/create"
                    class="py-3 px-5 bg-primary text-white rounded-md hover:bg-opacity-80 transition duration-200"><i
                        class="inline me-2" data-feather="edit-3"></i>Create
                    New Post</a>
            </div>
            @if (session()->has('success'))
                <div id="alert-2" class="flex p-4 mt-5 mb-4 text-blue-800 rounded-lg bg-blue-50 " role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="ml-3 text-sm font-medium">{{ session('success') }}
                    </div>
                    <button type="button"
                        class="ml-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex h-8 w-8 "
                        data-dismiss-target="#alert-2" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            @endif
            <hr>
            <div class="w-full flex flex-wrap px-4">
                @foreach ($galeries as $gallery)
                    <div class="mb-12 w-full p-4 md:w-1/2 lg:w-1/3">
                        <div class="rounded-md shadow-md overflow-hidden h-[200px]">
                            <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}" class="w-full">
                        </div>
                        <h3 class="font-semibold text-xl text-dark mt-2 mb-2">{{ $gallery->title }}</h3>
                        <p class="font-medium text-base text-secondary">{{ $gallery->caption }}</p>
                        <a href="/dashboard/gallery/{{ $gallery->title }}/edit"
                            class="font-medium p-2 bg-green-500 text-white rounded-md hover:bg-opacity-80 transition duration-200">Edit</a>
                        <form action="/dashboard/gallery/{{ $gallery->title }}" class="inline mx-2" method="post">
                            @method('delete')
                            @csrf
                            <button
                                class="font-medium p-2 bg-red-500 text-white rounded-md hover:bg-opacity-80 transition duration-200"
                                onclick="return confirm('Are you sure ?')">delete
                            </button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
