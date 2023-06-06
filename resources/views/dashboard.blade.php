<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div id="carouselDashboard" class="te-carousel">
                        <div class="te-carousel-inner">
                            @foreach($photos as $photo)
                                <div class="te-carousel-item">
                                    <div class="mb-6 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20" data-te-ripple-init data-te-ripple-color="light">
                                        <img src="{{ $photo['urls']['regular'] }}" class="w-full h-48 object-cover" alt="Unsplash Photo" />
                                        <a href="#!"></a>

                                        <div class="p-6">
                                            <h5 class="mb-3 text-lg font-bold">{{ $photo['alt_description'] }}</h5>
                                            <p class="mb-6 text-neutral-500 dark:text-neutral-300">
                                                {{ __('Author') }}: <a href="{{ $photo['user']['links']['html'] }}" target="_blank">{{ $photo['user']['name'] }}</a>
                                            </p>
                                            <p class="mb-6 text-neutral-500 dark:text-neutral-300">
                                                {{ __('Location') }}: {{ $photo['location']['title'] ?? __('Unknown') }}
                                            </p>
                                            <div class="flex items-center gap-4">
                                                <x-primary-button>{{ __('Read More') }}</x-primary-button>
                                                <x-danger-button>{{ __('Delete') }}</x-danger-button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <button class="te-carousel-control te-carousel-prev">
                            <span class="te-carousel-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 8.25l-7.5 7.5 7.5 7.5" />
                                </svg>
                            </span>
                            <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">{{ __('Prev') }}</span>
                        </button>
                        <button class="te-carousel-control te-carousel-next">
                            <span class="te-carousel-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                            </span>
                            <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">{{ __('Next') }}</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
