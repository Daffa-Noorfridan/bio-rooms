<style>
    .bio-room-span {
    color: #f58732;
    font-family: "ReemKufi-Bold", sans-serif;
    font-size: 32px;
    }
    .bio-room-span2 {
    color: #38aeca;
    font-family: "ReemKufi-Bold", sans-serif;
    font-size: 32px;
    }
    .header-nav{
        width: 100%;
        height: 70px;
        flex-shrink: 0;
        background: #06AEC9;
    }
    .bg-logo{
        background:rgb(255, 255, 255);
        border-radius: 5px;
    }
</style>
<nav x-data="{ open: false }" class="header-nav">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div CLASS="bg-logo"><img src="{{ asset('app.png') }}" size="20%">&nbsp;&nbsp;&nbsp;</img></div>
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <!--  <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />-->
                        <div class="bg-logo"><font class="bio-room-span">Bio</font><font class="bio-room-span2">Room</font></div>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link :href="route('ruangan')" :active="request()->routeIs('ruangan')">
                        {{ __('Ruangan') }}
                    </x-nav-link>
                    <x-nav-link :href="route('booking')" :active="request()->routeIs('booking')">
                        {{ __('Booking List') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <a href="#search"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                <path d="M20.7692 12.6923C20.7692 10.4688 19.979 8.56671 18.3984 6.98618C16.8179 5.40565 14.9159 4.61538 12.6923 4.61538C10.4688 4.61538 8.56671 5.40565 6.98618 6.98618C5.40565 8.56671 4.61538 10.4688 4.61538 12.6923C4.61538 14.9159 5.40565 16.8179 6.98618 18.3984C8.56671 19.979 10.4688 20.7692 12.6923 20.7692C14.9159 20.7692 16.8179 19.979 18.3984 18.3984C19.979 16.8179 20.7692 14.9159 20.7692 12.6923ZM30 27.6923C30 28.3173 29.7716 28.8582 29.3149 29.3149C28.8582 29.7716 28.3173 30 27.6923 30C27.0433 30 26.5024 29.7716 26.0697 29.3149L19.8858 23.149C17.7344 24.6394 15.3365 25.3846 12.6923 25.3846C10.9736 25.3846 9.32993 25.0511 7.76142 24.384C6.19291 23.7169 4.84074 22.8155 3.70493 21.6797C2.56911 20.5439 1.66767 19.1917 1.0006 17.6232C0.333534 16.0547 0 14.4111 0 12.6923C0 10.9736 0.333534 9.32993 1.0006 7.76142C1.66767 6.19291 2.56911 4.84074 3.70493 3.70493C4.84074 2.56911 6.19291 1.66767 7.76142 1.0006C9.32993 0.333534 10.9736 0 12.6923 0C14.4111 0 16.0547 0.333534 17.6232 1.0006C19.1917 1.66767 20.5439 2.56911 21.6797 3.70493C22.8155 4.84074 23.7169 6.19291 24.384 7.76142C25.0511 9.32993 25.3846 10.9736 25.3846 12.6923C25.3846 15.3365 24.6394 17.7344 23.149 19.8858L29.3329 26.0697C29.7776 26.5144 30 27.0553 30 27.6923Z" fill="white"/>
                </svg></a>&nbsp;&nbsp;&nbsp;
               <a href="#notification"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                <path d="M21.3524 28.5C22.6499 28.5 23.3354 30.036 22.4699 31.002C21.9072 31.6306 21.2182 32.1334 20.448 32.4777C19.6778 32.822 18.8436 32.9999 17.9999 33C17.1563 32.9999 16.3221 32.822 15.5518 32.4777C14.7816 32.1334 14.0927 31.6306 13.5299 31.002C12.7019 30.078 13.2929 28.6335 14.4809 28.5105L14.6459 28.5015L21.3524 28.5ZM17.9999 3C20.0369 3 21.7589 4.3545 22.3124 6.2115L22.3814 6.468L22.3934 6.5325C24.0472 7.46507 25.4565 8.7763 26.5057 10.3587C27.5549 11.9411 28.2142 13.7496 28.4294 15.636L28.4714 16.0665L28.4999 16.5V20.8965L28.5314 21.1005C28.7368 22.2057 29.3484 23.1941 30.2459 23.871L30.4964 24.0465L30.7394 24.195C32.0294 24.9255 31.5794 26.844 30.1739 26.991L29.9999 27H5.99992C4.45792 27 3.91942 24.954 5.26042 24.195C5.83197 23.8716 6.32579 23.4269 6.70723 22.8924C7.08867 22.3578 7.34848 21.7462 7.46842 21.1005L7.49992 20.886L7.50142 16.431C7.59288 14.4718 8.16316 12.5649 9.16235 10.8772C10.1615 9.18949 11.5592 7.77241 13.2329 6.75L13.6049 6.531L13.6199 6.4665C13.8315 5.56924 14.3136 4.75862 15.0009 4.14427C15.6882 3.52992 16.5476 3.14148 17.4629 3.0315L17.7359 3.006L17.9999 3Z" fill="white"/>
                </svg></a>&nbsp;&nbsp;&nbsp;
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
