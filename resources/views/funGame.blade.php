@extends('layout.main')
@section('content')
    <section id="activity" class="pt-16 pb-16 min-h-screen">
        <div class="container">
            <div class="w-full px-4">
                <div class=" mb-10 pt-10">
                    <h4 class="font-semibold text-lg text-primary">Mini Games</h4>
                    <h4 class="font-bold text-dark text-3xl mb-4">Mini games you can play</h4>
                    <p class="font-medium text-md text-secondary max-w-md">we have some mini games that you can play as
                        entertainment if you get bored reading our blog</p>
                </div>
            </div>
            <div class="flex flex-wrap ">
                <div class="w-full px-4 md:w-1/2 mb-10">
                    <a href="/quiz-bahasa-jawa" class="text-xl md:text-2xl  font-bold mb-5">Quiz bahasa jawa</a>
                    <a href="/quiz-bahasa-jawa">
                        <img src="/img/quiz.jpeg" alt="tebak gambar" class="rounded-lg w-full  shadow-lg mt-5 h-[300px]">
                    </a>
                </div>
                <div class="w-full px-4 md:w-1/2 mb-10">
                    <a href="/tebakGambar-bahasa-jawa" class="text-xl md:text-2xl  font-bold mb-5">Tebak Gambar</a>
                    <a href="/tebakGambar-bahasa-jawa">
                        <img src="/img/tebakgambar.jpeg" alt="tebak gambar"
                            class="rounded-lg w-full  shadow-lg mt-5 h-[300px]">
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
