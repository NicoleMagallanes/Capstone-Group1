<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage home-listings') }}
        </h2>
    </x-slot>

    @if(session('status') != '')
    <p
        x-data="{ show: true }"
        x-show="show"
        x-transition
        x-init="setTimeout(() => show = false, 3000)"
        class="bg-emerald-200 py-[6px] px-[10px] rounded text-sm text-gray-600">{{ session('status') }}</p>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="grid grid-cols-2 gap-4 mb-[15px]">
                        <form>
                            <div class="grid grid-cols-2 gap-4">
                                <x-text-input name="title" type="text" value="{{ app('request')->input('title') }}" class="mt-1 block w-full" placeholder="Search by title" />
                                <div class="mt-1">
                                    <x-primary-button class="py-[12px]">{{ __('Search')}}</x-primary-button>
                                </div>
                            </div>
                        </form>
                        <div class="text-right">
                            <x-primary-button class="py-[12px]" onclick="gotoAdd()"><i class="fa fa-plus"></i>{{ __('Add')}}</x-primary-button>
                        </div>
                    </div>

                    @if (!empty($photos))
                    <div class="grid gap-6 lg:grid-cols-3 xl:gap-x-12">
                        @foreach($homeListing as $index => $item) 

                        @if (array_key_exists($index, $photos))
                        <div class="mb-6 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20" data-te-ripple-init data-te-ripple-color="light">
                            <img src="{{ $photos[$index]['urls']['regular'] }}" class="w-full h-48 object-cover" alt="{{ $item->title }}" />
                            <a href="#!"></a>

                            <div class="p-6">
                                <h5 class="mb-3 text-lg font-bold">{{ $item->title }}</h5>
                                <p class="text-sm mb-2">${{ $item->description }}</p>

                                <p class="text-lg font-bold mb-2">${{ $item->price }}</p>
                                <div class="mb-3 flex items-center justify-center text-sm font-medium text-danger dark:text-danger-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="mr-2 h-5 w-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 01-1.161.886l-.143.048a1.107 1.107 0 00-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 01-1.652.928l-.679-.906a1.125 1.125 0 00-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 00-8.862 12.872M12.75 3.031a9 9 0 016.69 14.036m0 0l-.177-.529A2.25 2.25 0 0017.128 15H16.5l-.324-.324a1.453 1.453 0 00-2.328.377l-.036.073a1.586 1.586 0 01-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m5.276-3.67a9.012 9.012 0 01-5.276 3.67m0 0a9 9 0 01-10.275-4.835M15.75 9c0 .896-.393 1.7-1.016 2.25" />
                                    </svg>
                                    Travels
                                </div>

                                <p class="mb-6 text-neutral-500 dark:text-neutral-300">
                                    <small>Published <u>{{ $item->publishedDate }}</u> by
                                        <a href="#!">{{ $item->id}}</a>
                                    </small>
                                </p>
                                <p class="mb-6 text-neutral-500 dark:text-neutral-300">
                                    {{ $item->excerpt }}
                                </p>
                                <div class="flex items-center gap-4">
                                    @if($item->canEditRecord('home-listings.index'))
                                    <x-primary-button onclick="gotoEdit({{$item->id}})">{{ __('Edit')}}</x-primary-button>
                                    @else
                                    <x-primary-button class="bg-[#cccccc]">{{ __('Edit')}}</x-primary-button>
                                    @endif
                                    @if($item->canDeleteRecord('home-listings.index'))
                                    <x-delete-restore :id="$item->id" :isDeleted="$item->isDeleted" :action="$item->isDeleted ? route('home-listings.restore',$item->id) : route('home-listings.destroy',$item->id)" deleteLabel="Archive" restoreLabel="Activate" />
                                    @else
                                    <x-danger-button class="bg-[#cccccc]">{{ __('Archive')}}</x-danger-button>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                    @endif

                    <x-pagination :resultList="$homeListing"/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
