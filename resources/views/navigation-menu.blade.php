<nav x-data="{ open: false }" class="bg-white shadow-md border-b border-gray-200">
    <!-- Primary Navigation Restaurant -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="{{ route('home') }}">
                        <img src="{{ URL('images/1.png') }}" alt="Logo" class="w-12 h-12">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:flex sm:ml-10">
                    <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')" class="text-gray-700 hover:text-darkgoldenrod transition duration-300">
                        {{ __('Home') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('categories') }}" :active="request()->routeIs('categories')" class="text-gray-700 hover:text-darkgoldenrod transition duration-300">
                        {{ __('Events') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('restaurants') }}" :active="request()->routeIs('restaurants')" class="text-gray-700 hover:text-darkgoldenrod transition duration-300">
                        {{ __('Restaurants') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('musicCategories') }}" :active="request()->routeIs('musicCategories')" class="text-gray-700 hover:text-darkgoldenrod transition duration-300">
                        {{ __('Music') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('decorationCategories') }}" :active="request()->routeIs('decorationCategories')" class="text-gray-700 hover:text-darkgoldenrod transition duration-300">
                        {{ __('Decoration') }}
                    </x-nav-link>
                    @guest
                    <x-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')" class="text-gray-700 hover:text-darkgoldenrod transition duration-300">
                        {{ __('Login') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')" class="text-gray-700 hover:text-darkgoldenrod transition duration-300">
                        {{ __('Register') }}
                    </x-nav-link>
                    @endguest
                    <x-nav-link href="{{ route('book-now') }}" :active="request()->routeIs('book-now')" class="text-gray-700 hover:text-gray-900 transition duration-300">
                        {{ __('Book Now') }}
                    </x-nav-link>
                    @auth
                    @if(\App\Enums\Role::Admin == Auth::user())
                    <x-nav-link href="{{ route('management') }}" :active="request()->routeIs('management')" class="text-gray-700 hover:text-gray-900 transition duration-300">
                        {{ __('Admin Management') }}
                    </x-nav-link>
                    @endif
                    @endauth
                </div>
            </div>

            @auth
                <!-- Settings Dropdown -->
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                                </button>
                            @else
                                <button class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 focus:outline-none transition duration-150 ease-in-out">
                                    {{ Auth::user()->name }}
                                    <svg class="ml-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                    </svg>
                                </button>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-dropdown-link>
                            @endif

                            <div class="border-t border-gray-200"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
                                <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            @endauth

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Restaurant -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                {{ __('Home') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('categories') }}" :active="request()->routeIs('categories')">
                {{ __('Events') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('restaurants') }}" :active="request()->routeIs('restaurants')">
                {{ __('Restaurants') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('musicCategories') }}" :active="request()->routeIs('musicCategories')">
                {{ __('Music') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('decorationCategories') }}" :active="request()->routeIs('decorationCategories')">
                {{ __('Decoration') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')">
                {{ __('Login') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')">
                {{ __('Register') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('book-now') }}" :active="request()->routeIs('book-now')">
                {{ __('Book Now') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        @auth
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="flex items-center px-4">
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <div class="shrink-0 mr-3">
                            <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                        </div>
                    @endif

                    <div>
                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    </div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                            {{ __('API Tokens') }}
                        </x-responsive-nav-link>
                    @endif

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf
                        <x-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>

                    <!-- Team Management -->
                    @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                        <div class="border-t border-gray-200"></div>

                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Manage Team') }}
                        </div>

                        <x-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                            {{ __('Team Settings') }}
                        </x-responsive-nav-link>

                        @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                            <x-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                                {{ __('Create New Team') }}
                            </x-responsive-nav-link>
                        @endcan

                        @if (Auth::user()->allTeams()->count() > 1)
                            <div class="border-t border-gray-200"></div>

                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Switch Teams') }}
                            </div>

                            @foreach (Auth::user()->allTeams() as $team)
                                <x-switchable-team :team="$team" component="responsive-nav-link"></x-switchable-team>
                            @endforeach
                        @endif
                    @endif
                </div>
            </div>
        @endauth
    </div>
</nav>
