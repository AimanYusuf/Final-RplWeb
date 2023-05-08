@extends('dashboard.layout.main')
@section('content')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 rounded-lg  mt-14">
            <div class="flex items-center gap-2 mb-5">
                <i class="inline" data-feather="file"></i>
                <h1 class="text-2xl font-bold">All Post</h1>
            </div>
            <hr class="py-5">
            <a href="/dashboard/posts/create"
                class="py-3 px-5 bg-primary text-white rounded-md hover:bg-opacity-80 transition duration-200"><i
                    class="inline me-2" data-feather="edit-3"></i>Create
                New Post</a>
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
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-10">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                From
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Massage
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($massages as $massage)
                            <tr class="bg-white border-b ">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    {{ $massage->title }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $massage->category->name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $massage->author->name }}
                                </td>
                                <td class="px-6 py-4 flex gap-2">
                                    <a href="/dashboard/massage/{{ $massage->slug }}"
                                        class="font-medium p-2 bg-primary text-white rounded-md hover:bg-opacity-80 transition duration-200">Show</a>
                                    <a href="/dashboard/massage/{{ $massage->slug }}/edit"
                                        class="font-medium p-2 bg-green-500 text-white rounded-md hover:bg-opacity-80 transition duration-200">Edit</a>
                                    <form action="/dashboard/massagess/{{ $massage->slug }}" class="inline" method="post">
                                        @method('delete')
                                        @csrf
                                        <button
                                            class="font-medium p-2 bg-red-500 text-white rounded-md hover:bg-opacity-80 transition duration-200"
                                            onclick="return confirm('Are you sure ?')">delete
                                        </button>
                                    </form>
                                    {{-- <a href="#"
                                        class="font-medium p-2 bg-red-500 text-white rounded-md hover:bg-opacity-80 transition duration-200">delete</a> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
