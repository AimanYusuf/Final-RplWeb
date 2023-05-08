<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 "
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white ">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="/dashboard"
                    class="flex items-center p-2 {{ $title === 'Dashboard' ? 'text-primary' : 'text-gray-500' }} rounded-lg hover:bg-gray-100 ">
                    <svg aria-hidden="true" class="w-6 h-6  transition duration-75  group-hover:text-gray-900 "
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>
                    <span class="ml-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/posts"
                    class="flex items-center  p-2 {{ $title === 'Post' ? 'text-primary' : 'text-gray-500' }} rounded-lg ">
                    <i data-feather="file-plus"
                        class="inline w-6 h-6 transition duration-75  group-hover:text-gray-900 dark:group-hover:text-white"></i>
                    <span class="ml-3">Posts</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/gallery"
                    class="flex items-center p-2 {{ $title === 'Gallery' ? 'text-primary' : 'text-gray-500' }} rounded-lg ">
                    <i data-feather="image"
                        class="inline w-6 h-6 transition duration-75  group-hover:text-gray-900 dark:group-hover:text-white"></i>
                    <span class="ml-3">Gallery</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/massage"
                    class="flex items-center p-2 {{ $title === 'Massage' ? 'text-primary' : 'text-gray-500' }} rounded-lg ">
                    <i data-feather="message-square"
                        class="inline w-6 h-6 transition duration-75  group-hover:text-gray-900 dark:group-hover:text-white"></i>
                    <span class="ml-3">Massage</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
