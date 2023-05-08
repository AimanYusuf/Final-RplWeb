<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REBCLASSTWO | {{ $title }}</title>
    {{-- icon --}}
    <script src="https://unpkg.com/feather-icons"></script>
    {{-- style --}}
    <link rel="stylesheet" href="/css/style.css">
    {{-- icon --}}
    <script src="https://unpkg.com/feather-icons"></script>
    {{-- Tailwind css cdn --}}
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- FLowbite Cdn --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    {{-- Config --}}
    <script>
        tailwind.config = {
            theme: {
                container: {
                    center: true,
                    padding: "20px",
                },
                extend: {
                    colors: {
                        primary: "#0ea5e9",
                        dark: "#0f172a",
                        secondary: "#64748b",
                        dangger: "#ef4444",
                    },
                    screens: {
                        "2xl": "1320px",
                    },
                },
            },
        }
    </script>
</head>

<body>
    <main class="bg-dark">
        <div class="container ">
            <div class="flex h-screen justify-center items-center">
                <div class="w-full px-4 py-4 border rounded-lg border-black md:w-1/3 shadow-lg bg-white">
                    <form action="/wp-admin" class="py-4" method="post">
                        <h2 class="font-bold text-2xl mb-10 text-center">Login Administator</h2>
                        @csrf
                        @if (session()->has('loginEror'))
                            <div id="alert-2" class="flex p-4 mb-4 text-red-800 rounded-lg bg-red-50 " role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Info</span>
                                <div class="ml-3 text-sm font-medium">{{ session('loginEror') }}
                                </div>
                                <button type="button"
                                    class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 "
                                    data-dismiss-target="#alert-2" aria-label="Close">
                                    <span class="sr-only">Close</span>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                        @endif
                        <div class="flex flex-col mb-5">
                            <label for="email" class="font-medium mb-2  @error('email') text-dangger  @enderror">Your
                                Email</label>
                            <input placeholder="example@gmail.com" type="email" name="email" id="email"
                                class="rounded-lg focus:ring-primary" value="{{ old('email') }}" autocomplete="off">
                            @error('email')
                                <p class="mt-2 text-sm text-dangger dark:text-dangger"><span
                                        class="font-medium">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-10">
                            <label for="password" class=" font-medium mb-2">Your Password</label>
                            <input placeholder="password" type="password" name="password" id="password"
                                class="rounded-lg focus:ring-primary mb-1" autocomplete="off">
                            <p class="text-secondary text-xs">Forget Your Password ? Go to cPanel..!</p>
                        </div>
                        <div class="flex flex-col">
                            <button class="py-2 px-5 bg-primary rounded-lg text-white hover:opacity-75 hover:shadow-lg"
                                type="sim
                            ">Login Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    {{-- flowbite --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>

</html>
