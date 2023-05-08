@extends('layout.main')
@section('content')
    <section id="activity" class="pt-16 pb-16 bg-slate-200">
        <div class="container flex flex-wrap">
            <div class="w-full md:w-1/2 px-4">
                <div class=" mb-5 pt-10">
                    <h4 class="font-semibold text-2xl text-primary">Contact Us</h4>
                    <h4 class="font-bold text-dark  mb-4 max-w-sm">You can contact us on our social media or go
                        directly to
                        our person in charge, namely SMK N 4 Kendal :</h4>
                </div>
                <div class="form">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.5298226711448!2d110.22815801477297!3d-6.946653694981148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e705d9c2a3b439b%3A0xcd3827ba60db3c5!2sSMK%20N%204%20Kendal!5e0!3m2!1sen!2sid!4v1682307184042!5m2!1sen!2sid"
                        width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" class="shadow-lg lg:w-[600px] lg:h-[450px]"></iframe>
                </div>
            </div>
            <div class="w-full md:w-1/2 px-4 lg:pt-24 pt-10">
                <h3 class="font-bold text-dark text-3xl mb-4 lg:text-3xl md:pt-10">Our social media accounts</h3>
                <p class="font-medium text-base text-secondary mb-6 max-w-xl">We only have a few social media that we use as
                    coverage for our daily life as students. If your conversation needs are important, I suggest visiting
                    our school's social media or just visiting the skanifo website.</p>
                <div class="flex items-center gap-3 mb-5">
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

                <form action="/dashboard/massage" method="post">
                    @csrf
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your
                            email</label>
                        <input type="email" id="email"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="name@flowbite.com" required>
                    </div>
                    <div class="mb-6">

                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 ">Your
                            message</label>
                        <textarea id="message" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                            placeholder="Leave a comment..."></textarea>

                    </div>
                    <div class="flex items-start mb-6">
                        <div class="flex items-center h-5">
                            <input id="terms" type="checkbox" value=""
                                class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 "
                                required>
                        </div>
                        <label for="terms" class="ml-2 text-sm font-medium text-gray-900">Agree to a
                            courtesy agreement</label>
                    </div>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Send
                        <i data-feather="send" class="inline ms-3 w-4 h-4"></i></button>
                </form>

            </div>
        </div>
    </section>
@endsection
