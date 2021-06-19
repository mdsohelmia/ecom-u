<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('backend/css/main.css')}}">
</head>

<body class="antialiased">

<div class="flex flex-col lg:flex-row min-h-screen font-semibold text-blue-900 text-base subpixel-antialiased">

    <!-- mobile bar -->
    <div class="bg-blue-900 py-2 px-4 flex items-center justify-between lg:hidden text-blue-100">
        <button id="menuToggle">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            </svg>
        </button>
        <a href="#" class="block -mr-8">
            <span class="sr-only">Edge SaaS</span>
            <svg class="w-16 text-white" viewBox="0 0 52 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.88477 16.2207H0.0195312L5.61523 0.78125H7.48047L1.88477 16.2207Z" fill="currentColor" class="opacity-50" />
                <path d="M13.7793 15.1953C12.2754 15.1953 11.0547 14.7233 10.1172 13.7793C9.1862 12.8288 8.7207 11.5658 8.7207 9.99023V9.69727C8.7207 8.64258 8.92253 7.70182 9.32617 6.875C9.73633 6.04167 10.3092 5.39388 11.0449 4.93164C11.7806 4.4694 12.6009 4.23828 13.5059 4.23828C14.9447 4.23828 16.0547 4.69727 16.8359 5.61523C17.6237 6.5332 18.0176 7.83203 18.0176 9.51172V10.4688H11.1133C11.1849 11.3411 11.4746 12.0312 11.9824 12.5391C12.4967 13.0469 13.1413 13.3008 13.916 13.3008C15.0033 13.3008 15.8887 12.8613 16.5723 11.9824L17.8516 13.2031C17.4284 13.8346 16.862 14.3262 16.1523 14.6777C15.4492 15.0228 14.6582 15.1953 13.7793 15.1953ZM13.4961 6.14258C12.8451 6.14258 12.3177 6.37044 11.9141 6.82617C11.5169 7.2819 11.263 7.91667 11.1523 8.73047H15.6738V8.55469C15.6217 7.76042 15.4102 7.16146 15.0391 6.75781C14.668 6.34766 14.1536 6.14258 13.4961 6.14258Z" fill="currentColor" />
                <path d="M19.4238 9.63867C19.4238 8.01107 19.8014 6.70573 20.5566 5.72266C21.3118 4.73307 22.3242 4.23828 23.5938 4.23828C24.7135 4.23828 25.6185 4.62891 26.3086 5.41016V0H28.6816V15H26.5332L26.416 13.9062C25.7064 14.7656 24.7591 15.1953 23.5742 15.1953C22.3372 15.1953 21.3346 14.6973 20.5664 13.7012C19.8047 12.7051 19.4238 11.3509 19.4238 9.63867ZM21.7969 9.84375C21.7969 10.918 22.002 11.7578 22.4121 12.3633C22.8288 12.9622 23.418 13.2617 24.1797 13.2617C25.1497 13.2617 25.8594 12.8288 26.3086 11.9629V7.45117C25.8724 6.60482 25.1693 6.18164 24.1992 6.18164C23.431 6.18164 22.8385 6.48763 22.4219 7.09961C22.0052 7.70508 21.7969 8.61979 21.7969 9.84375Z" fill="currentColor" />
                <path d="M30.7422 9.63867C30.7422 7.99805 31.1263 6.68945 31.8945 5.71289C32.6693 4.72982 33.6947 4.23828 34.9707 4.23828C36.1751 4.23828 37.1224 4.6582 37.8125 5.49805L37.9199 4.43359H40.0586V14.6777C40.0586 16.0645 39.6257 17.1582 38.7598 17.959C37.9004 18.7598 36.7383 19.1602 35.2734 19.1602C34.4987 19.1602 33.7402 18.9974 32.998 18.6719C32.2624 18.3529 31.7025 17.9329 31.3184 17.4121L32.4414 15.9863C33.1706 16.8522 34.069 17.2852 35.1367 17.2852C35.9245 17.2852 36.5462 17.0703 37.002 16.6406C37.4577 16.2174 37.6855 15.5924 37.6855 14.7656V14.0527C37.002 14.8145 36.0905 15.1953 34.9512 15.1953C33.7142 15.1953 32.7018 14.7038 31.9141 13.7207C31.1328 12.7376 30.7422 11.377 30.7422 9.63867ZM33.1055 9.84375C33.1055 10.9049 33.3203 11.7415 33.75 12.3535C34.1862 12.959 34.7884 13.2617 35.5566 13.2617C36.5137 13.2617 37.2233 12.8516 37.6855 12.0312V7.38281C37.2363 6.58203 36.5332 6.18164 35.5762 6.18164C34.7949 6.18164 34.1862 6.49089 33.75 7.10938C33.3203 7.72786 33.1055 8.63932 33.1055 9.84375Z" fill="currentColor" />
                <path d="M47.1582 15.1953C45.6543 15.1953 44.4336 14.7233 43.4961 13.7793C42.5651 12.8288 42.0996 11.5658 42.0996 9.99023V9.69727C42.0996 8.64258 42.3014 7.70182 42.7051 6.875C43.1152 6.04167 43.6882 5.39388 44.4238 4.93164C45.1595 4.4694 45.9798 4.23828 46.8848 4.23828C48.3236 4.23828 49.4336 4.69727 50.2148 5.61523C51.0026 6.5332 51.3965 7.83203 51.3965 9.51172V10.4688H44.4922C44.5638 11.3411 44.8535 12.0312 45.3613 12.5391C45.8757 13.0469 46.5202 13.3008 47.2949 13.3008C48.3822 13.3008 49.2676 12.8613 49.9512 11.9824L51.2305 13.2031C50.8073 13.8346 50.2409 14.3262 49.5312 14.6777C48.8281 15.0228 48.0371 15.1953 47.1582 15.1953ZM46.875 6.14258C46.224 6.14258 45.6966 6.37044 45.293 6.82617C44.8958 7.2819 44.6419 7.91667 44.5312 8.73047H49.0527V8.55469C49.0007 7.76042 48.7891 7.16146 48.418 6.75781C48.0469 6.34766 47.5326 6.14258 46.875 6.14258Z" fill="currentColor" />
            </svg>
        </a>
        <button
            class="flex flex-row items-center justify-center xl:justify-start space-x-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-60">
            <span class="font-bold text-blue-100 text-xs">Abigail Wallace</span>
            <img src="images/user.jpg" alt="Abigail Wallace" class="w-10 h-10 rounded-full">
        </button>
    </div>
    <!--/ mobile bar-->

    <!--- sidebar -->
    @includeIf('backend.layouts.partials.sidebar')
    <!--/ sidebar -->

    <div class="flex-1 flex flex-col bg-blue-50 py-4 lg:py-8 px-4 lg:px-6 xl:px-8 overflow-hidden">

        <!-- topbar -->
        <div class="max-w-screen-2xl w-full mx-auto flex justify-between">
            <div class="hidden md:block">
                <h1 class="text-2xl mb-1 font-bold text-blue-800">Welcome Abigail</h1>
                <p class="text-lg text-blue-900 hidden lg:block">Dashboard overview</p>
            </div>
            <div class="flex space-x-4 flex-1 justify-between md:justify-end">
                <div class="relative md:max-w-xs w-full">
                    <svg class="w-5 h-5 absolute top-3 left-3 text-blue-900 opacity-70" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                              clip-rule="evenodd"></path>
                    </svg>
                    <input type="text"
                           class="bg-white rounded-lg w-full h-10 pr-4 pl-9 placeholder-blue-900 placeholder-opacity-70 text-blue-900 text-sm font-semibold  focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-60"
                           placeholder="Enter your search term...">
                </div>
                <div class="flex space-x-4">
                    <button type="button"
                            class="bg-white rounded-lg h-10 px-3 hover:bg-gray-50 focus:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-60">
                        <svg class="w-6 h-6 text-blue-900 opacity-80" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>
                    </button>
                    <button type="button"
                            class="bg-white rounded-lg h-10 px-3 hover:bg-gray-50 focus:bg-gray-50  focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-60 relative">
                        <svg class="w-6 h-6 text-blue-900 opacity-80" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                            </path>
                        </svg>
                        <div class="w-2 h-2 rounded-full bg-red-500 absolute top-3 right-4 ring-2 ring-red-400 ring-opacity-60">
                             </div>
                    </button>
                </div>
            </div>
        </div>
        <!--/ topbar -->

        <!-- main content -->
        <div class="flex-1 py-4 lg:py-10">
           @yield('main')
        </div>
        <!--/ main content -->
    </div>
</div>


<!-- JavaScript -->
<script>

    // Very simple example for toggling mobile menu

    const button = document.getElementById('menuToggle');
    const menu = document.getElementById('menu');
    const body = document.getElementsByTagName('body')

    button.onclick = function (event) {
        event.preventDefault();

        menu.classList.toggle('hidden')
        body[0].classList.toggle('overflow-hidden')

    }
</script>
<!--/ JavaScript -->

</body>
</html>
