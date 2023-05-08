<nav id="navbar" class="bg-transparent z-20 absolute top-0 left-0 w-full flex items-center">
    <div class="container ">
        <div class="flex justify-between items-center px-4">
            <a href="#" class="font-bold text-xl text-dark block py-5">REB<span
                    class="text-primary">CLASS</span>TWO</a>
            <div
                class="nav-menu text-base shadow-xl absolute top-full md:shadow-none bg-gray-200 w-[15rem] h-screen -right-full trsition duration-300 ease-in-out flex gap-5 md:gap-0 flex-col md:w-full  md:right-auto md:flex-row md:bg-transparent md:top-auto md:h-auto md:static md:justify-end ">
                <a href="/"
                    class="{{ $active === 'Home' ? 'text-blue-600' : 'text-slate-600' }} font-medium md:font-normal hover:text-blue-600 px-4 mt-2 md:mt-0 ">Home</a>
                <a href="/blog"
                    class="{{ $active === 'Blog' ? 'text-blue-600' : 'text-slate-600' }} font-medium md:font-normal hover:text-blue-600 px-4 ">Blog</a>
                <a href="/gallery"
                    class="{{ $active === 'Gallery' ? 'text-blue-600' : 'text-slate-600' }} font-medium md:font-normal hover:text-blue-600 px-4 ">Gallery</a>
                <a href="/fun-game"
                    class="{{ $active === 'Fun Game' ? 'text-blue-600' : 'text-slate-600' }} font-medium md:font-normal hover:text-blue-600 px-4 ">Fun
                    Game</a>
                <a href="/contact-us"
                    class="{{ $active === 'Contact Us' ? 'text-blue-600' : 'text-slate-600' }} font-medium md:font-normal hover:text-blue-600 px-4 ">Contac
                    us</a>
                <div class="flex items-center gap-3 justify-center md:hidden mt-96">
                    {{-- Instagram --}}
                    <a href="" target="_blank"
                        class="w-7 h-7 flex justify-center items-center border rounded-full border-slate-400 hover:border-primary hover:bg-primary hover:text-white text-slate-400 duration-200 transition-all">
                        <i data-feather="instagram" class="inline w-4 h-4"></i>
                    </a>
                    {{-- Youtube --}}
                    <a href="" target="_blank"
                        class="w-7 h-7 flex justify-center items-center border rounded-full border-slate-400 hover:border-primary hover:bg-primary hover:text-white text-slate-400 duration-200 transition-all">
                        <i data-feather="youtube" class="inline w-4 h-4"></i>
                    </a>
                    {{-- Whatsapp --}}
                    <a href="" target="_blank"
                        class="w-7 h-7 flex justify-center items-center border rounded-full border-slate-400 hover:border-primary hover:bg-primary  hover:text-white text-slate-400 duration-200 transition-all">
                        <i data-feather="phone" class="inline w-4 h-4"></i>
                    </a>
                    {{-- Facebook --}}
                    <a href="" target="_blank"
                        class="w-7 h-7 flex justify-center items-center border rounded-full border-slate-400 hover:border-primary hover:bg-primary  hover:text-white text-slate-400 duration-200 transition-all">
                        <i data-feather="facebook" class="inline w-4 h-4"></i>
                    </a>
                    {{-- Twiter --}}
                    <a href="" target="_blank"
                        class="w-7 h-7 flex justify-center items-center border rounded-full border-slate-400 hover:border-primary hover:bg-primary  hover:text-white text-slate-400 duration-200 transition-all">
                        <i data-feather="twitter" class="inline w-4 h-4"></i>
                    </a>
                </div>
                <p class="ms-4 font-medium md:font-normal text-sm md:hidden px-4 ">
                    Contac
                    us in here</p>
            </div>
            <div class="navbar-extra md:hidden">
                <button id="hamburger" name="button" type="submit" class="block right-4 cursor-pointer">
                    <span class="hamburger-line origin-top-left transition ease-in-out duration-300"></span>
                    <span class="hamburger-line transition ease-in-out duration-300"></span>
                    <span class="hamburger-line origin-bottom-left transition ease-in-out duration-300"></span>
                </button>
            </div>
        </div>
    </div>
</nav>
