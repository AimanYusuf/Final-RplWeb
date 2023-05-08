@extends('layout.main')
@section('content')
    <svg width="553" class="absolute left-0 top-[10px]" height="617" viewBox="0 0 553 617" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <g filter="url(#filter0_f_3_65)">
            <circle cx="239" cy="314" r="89" fill="#4F46E5" />
        </g>
        <defs>
            <filter id="filter0_f_3_65" x="-75" y="0" width="628" height="628"
                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                <feGaussianBlur stdDeviation="112.5" result="effect1_foregroundBlur_3_65" />
            </filter>
        </defs>
    </svg>
    {{-- Hero section start --}}
    <section class="pt-36">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 flex flex-col items-center">
                    <p class="text-base font-medium text-gray-400">Students & <span
                            class="font-bold text-dark">Friends</span>
                    </p>
                    <h1 class="text-5xl font-bold mb-5 md:text-7xl lg:text-8xl">REB<span
                            class="text-primary">CLASS</span>TWO
                    </h1>
                    <p class="text-center max-w-sm text-secondary mb-10 text-base font-medium">We are students of the
                        Department of
                        Software
                        Engineering
                        from Kendal 4th
                        State
                        Vocational High
                        School, who study information technology.</p>
                    <div class="flex gap-5">
                        <a href="/contact-us"
                            class="px-5 py-3 bg-primary rounded-xl text-white hover:shadow-xl hover:opacity-80 transition-all duration-200">
                            <i data-feather="phone" class="inline"></i>
                            Contact
                            Us</a>
                        <a href="/blog"
                            class="px-5 py-3 border border-slate-500 rounded-xl text-dark hover:bg-primary hover:text-white hover:border-white transition-all duration-200"><i
                                data-feather="globe" class="inline hover:text-wh"></i> Blog
                            Post</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Hero section end --}}

    {{-- About section Start --}}
    <section class="pt-40 pb-32" id="about">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full md:w-1/2 px-4 mb-10">
                    <h4 class="font-bold text-primary text-lg uppercase">About us</h4>
                    <h2 class="font-bold text-dark text-3xl mb-5 max-w-xl lg:text-4xl">We are students majoring in software
                        engineering</h2>
                    <p class="text-secondary  leading-relaxed font-medium text-base max-w-xl">We are students at Kendal 4
                        Public School majoring in software engineering and we studied several materials including
                        information technology, web programming, Android-based programming and software programming.</p>
                </div>
                <div class="w-full md:w-1/2 px-4">
                    <h3 class="font-bold text-dark text-3xl mb-4 lg:text-3xl md:pt-10">Follow our social media</h3>
                    <p class="font-medium text-base text-secondary mb-6 max-w-xl">We only have a few social media that we
                        use as
                        coverage for our daily life as students. If your conversation needs are important, I suggest
                        visiting
                        our school's social media or just visiting the skanifo website.</p>
                    <div class="flex items-center gap-3">
                        {{-- Instagram --}}
                        <a href="https://www.instagram.com/rebclsstwo/" target="_blank"
                            class="w-7 h-7 flex justify-center items-center border rounded-full border-slate-400 hover:border-primary hover:bg-primary hover:text-white text-slate-400 duration-200 transition-all">
                            <i data-feather="instagram" class="inline w-4 h-4"></i>
                        </a>
                        {{-- Youtube --}}
                        <a href="https://www.youtube.com/channel/UCFdf_YKwqwslQ1WExWOTGQw?app=desktop" target="_blank"
                            class="w-7 h-7 flex justify-center items-center border rounded-full border-slate-400 hover:border-primary hover:bg-primary hover:text-white text-slate-400 duration-200 transition-all">
                            <i data-feather="youtube" class="inline w-4 h-4"></i>
                        </a>
                        {{-- Whatsapp --}}
                        <a href="https://wa.me/6285920509122/?text=Selamat+Pagi+Mas" target="_blank"
                            class="w-7 h-7 flex justify-center items-center border rounded-full border-slate-400 hover:border-primary hover:bg-primary  hover:text-white text-slate-400 duration-200 transition-all">
                            <i data-feather="phone" class="inline w-4 h-4"></i>
                        </a>
                        {{-- mail --}}
                        <a href="" target="_blank"
                            class="w-7 h-7 flex justify-center items-center border rounded-full border-slate-400 hover:border-primary hover:bg-primary  hover:text-white text-slate-400 duration-200 transition-all">
                            <i data-feather="mail" class="inline w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- About section End --}}

    {{-- latest activity section start --}}
    <section id="activity" class="pt-36 pb-16 bg-slate-200">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">Our latest activity</h4>
                    <h4 class="font-bold text-dark text-3xl mb-4">Our latest activity</h4>
                    <p class="font-medium text-md text-secondary">we have several activities namely school activities and
                        also togetherness activities which we document here</p>
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
    {{-- latest activity section end --}}

    {{-- Suport section start --}}
    <section id="suport" class="pt-24 pb-24 bg-slate-700">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-bold text-lg text-primary mb-2">The support we get</h4>
                    <h4 class="font-bold text-white text-3xl mb-4">We are supported by</h4>
                    <p class="font-medium text-md text-secondary">we have very strong support from several parties
                        including our teachers and some parties who really support us as students</p>
                </div>
            </div>
            <div class="w-full px-4 flex justify-center">
                <div class="flex flex-wrap items-center justify-center">
                    <a href="https://disdikbud.kendalkab.go.id/" target="_blnak"
                        class="max-w-[100px] mx-4 py-4 grayscale opacity-60 transition duration-200 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                        <img src="/img/dinaspendidikan.png" alt="Dinas Pendidikan Kendal" class="bg-transparent"></a>
                </div>
                <div class="flex flex-wrap items-center justify-center">
                    <a href="https://www.kendalkab.go.id/" target="_blnak"
                        class="max-w-[80px] mx-4 py-4 grayscale opacity-60 transition duration-200 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                        <img src="/img/kabupaten_kendal.png" alt="Kabupaten Kendal" class="bg-transparent"></a>
                </div>
                <div class="flex flex-wrap items-center justify-center">
                    <a href="https://smkn4kendal.sch.id/" target="_blnak"
                        class="max-w-[100px] mx-4 py-4 grayscale opacity-60 transition duration-200 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                        <img src="/img/smk.png" alt="Smk Negeri 4 Kendal" class="bg-transparent"></a>
                </div>
            </div>
        </div>
    </section>
    {{-- Suport section end --}}

    {{-- Blog section start --}}
    <section id="blog" class="pt-36 pb-32 bg-slate-100">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">Blog</h4>
                    <h4 class="font-bold text-dark text-3xl mb-4">Our latest blog post</h4>
                    <p class="font-medium text-md text-secondary">We have articles with many categories that we form and
                        post in the form of a blog. And below is our latest post.</p>
                </div>
            </div>
            <div class="flex flex-wrap justify-center">
                @for ($i = 0; $i < 5; $i++)
                    <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                        <div class="bg-white rounded-xl overflow-hidden shadow-lg mb-10">
                            <a href="/blog/{{ $posts[$i]->slug }}">
                                <div class=" h-[200px] overflow-hidden">
                                    @if ($posts[$i]->image)
                                        <img src="{{ asset('storage/' . $posts[$i]->image) }}"
                                            alt="{{ $posts[$i]->title }}" class="w-full">
                                    @else
                                        <img src="https://source.unsplash.com/360x200?{{ $posts[$i]->category->name }}"
                                            alt="{{ $posts[$i]->category->name }}" class="w-full">
                                    @endif
                                </div>
                            </a>
                            <div class="py-8 px-6">
                                <a href="/blog/{{ $posts[$i]->slug }}">
                                    <h3
                                        class="mb-3 font-semibold text-xl text-dark hover:text-primary truncate transition duration-200">
                                        {{ $posts[$i]->title }}</h3>
                                </a>
                                <p class="text-xs text-secondary">By
                                    {{ $posts[$i]->author->name }} in
                                    {{ $posts[$i]->category->name }}. {{ $posts[$i]->created_at->diffForHumans() }}</p>
                                <p class="font-medium text-base text-secondary mb-5">{{ $posts[$i]->excerpt }}</p>
                                <a href="/blog/{{ $posts[0]->slug }}"
                                    class="py-2 px-4 rounded-lg bg-primary font-medium text-sm text-white hover:opacity-80">Go
                                    Somewhere</a>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>
    {{-- Blog section end --}}
@endsection
