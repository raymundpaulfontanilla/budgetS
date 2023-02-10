<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <!--Flowbite CDN-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <!--Chart CDN-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!--Emoji CSS-->
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
    <!--Regular Datatables CSS-->
    <link href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
    <script type="text/javascript" src="{{asset('js/time.js')}}"></script>
    {{-- TAILWIND COMPONENTS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <!--Main CSS-->
    <link rel="stylesheet" href="{{ asset('table.css') }}">
    <link rel="stylesheet" href="{{ asset('siebar.css') }}">
    <link rel="stylesheet" href="{{ asset('general.css') }}">
    <script src="{{ asset('modal.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Dashboard</title>
</head>

<body>
    <nav>
        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
            type="button" class="inline-flex items-center p-2 mt-2 ml-3 rounded-lg lg:hidden">
            <svg viewBox="0 0 100 80" width="40" height="40">
                <rect width="100" height="20"></rect>
                <rect y="30" width="100" height="20"></rect>
                <rect y="60" width="100" height="20"></rect>
            </svg>
        </button>
        <aside id="logo-sidebar"
            class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full lg:translate-x-0"
            aria-label="Sidebar">
            <div class="h-full px-3 py-4 overflow-y-auto bg-[#18A14D] rounded-r-[55px]">
                <a href="{{route('overview')}}" class="flex items-center pl-2.5 mb-5">
                    <img src="{{ asset('images/logo.png') }}" alt="logo" width="185" />
                </a>
                <ul class="space-y-2">
                    <li>
                        <a href="{{route('overview')}}" class="{{ request()->routeIs('overview') ? 'bg-white text-green-700 rounded-lg' : ' text-white rounded-lg' }} 
                        font-medium hover:bg-white hover:text-green-500 flex items-center p-2 cursor-pointer">
                            <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                            </svg>
                            <span class="ml-3">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('income')}}" class="{{ request()->routeIs('income') ? 'bg-white text-green-700 rounded-lg' : ' text-white rounded-lg' }} 
                        font-medium hover:bg-white hover:text-green-500 flex items-center p-2 cursor-pointer">
                            <svg aria-hidden=" true" class="flex-shrink-0 w-6 h-6" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16 6H4a1 1 0 0 0-1 1v7l3 3h9l3-3V7a1 1 0 0 0-1-1zm-1 7H5v-1h10v1zm0-3H5V9h10v1zm0-3H5V6h10v1z">
                                </path>
                            </svg>
                            <span class="flex-1 ml-3 w">Income</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('expense')}}" class="{{ request()->routeIs('expense') ? 'bg-white text-green-700 rounded-lg' : 'text-white rounded-lg' }} 
                        font-medium hover:bg-white hover:text-green-500 flex items-center p-2 cursor-pointer">
                            <svg aria-hidden=" true" class="flex-shrink-0 w-6 h-6" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16 6H4a1 1 0 0 0-1 1v7l3 3h9l3-3V7a1 1 0 0 0-1-1zm-1 7H5v-1h10v1zm0-3H5V9h10v1zm0-3H5V6h10v1z">
                                </path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Expense</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('transactionhistory')}}" class="{{ request()->routeIs('transactionhistory') ? 'bg-white text-green-700 rounded-lg' : ' text-white rounded-lg' }} 
                        font-medium hover:bg-white hover:text-green-500 flex items-center p-2 cursor-pointer">
                            <svg aria-hidden=" true" class="flex-shrink-0 w-6 h-6" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Transaction History</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('userprofile')}}" class="{{ request()->routeIs('userprofile') ? 'bg-white text-green-700 rounded-lg' : 'text-white rounded-lg' }} 
                        font-medium hover:bg-white hover:text-green-500 flex items-center p-2 cursor-pointer">
                            <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                    clip-rule="evenodd">
                                </path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('changepassword')}}" class="flex items-center p-2 font-medium text-black hover:text-white cursor-pointer">
                            <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                    clip-rule="evenodd">
                                </path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Change Password</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}"
                            class="flex items-center p-2 font-medium text-black hover:text-white cursor-pointer"
                            onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">{{ __('Logout') }}</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <li>
                        <a href="{{ route('logout') }}" class="{{ request()->routeIs('logout') ? 'bg-white text-green-700 rounded-lg' : 'text-white rounded-lg' }} 
                        font-medium hover:bg-white hover:text-green-500 flex items-center p-2 cursor-pointer"
                            onclick=" event.preventDefault(); document.getElementById('logout-form').submit();">
                            <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">{{ __('Logout') }}</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </aside>
    </nav>
    <div class="container ml-auto py-10 md:w-4/5 w-11/12 maincontainer">
        @yield('content')
    </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    <script src="time.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>

</html>