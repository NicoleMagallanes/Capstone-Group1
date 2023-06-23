<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Articles') }}
        </h2>
    </x-slot>

    @if(session('status') != '')
    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 3000)" class="bg-emerald-200 py-[6px] px-[10px] rounded text-sm text-gray-600">{{ session('status') }}</p>
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
                        @foreach($articleList as $index => $article)
                        @if (array_key_exists($index, $photos))
                        <div class="mb-6 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20" data-te-ripple-init data-te-ripple-color="light">
                            <img src="{{ $photos[$index]['urls']['regular'] }}" class="w-full h-48 object-cover" alt="{{ $article->title }}" />
                            <a href="#!"></a>

                            <div class="p-6">
                                <h5 class="mb-3 text-lg font-bold">{{ $article->title }}</h5>
                                <div class="mb-3 flex items-center justify-center text-sm font-medium text-danger dark:text-danger-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z" />
                                    </svg>
                                    Hot news
                                </div>
                                <p class="mb-6 text-neutral-500 dark:text-neutral-300">
                                    <small>Published <u>{{ $article->publishedDate }}</u> by
                                        <a href="#!">{{ $article->id}}</a>
                                    </small>
                                </p>
                                <p class="mb-6 text-neutral-500 dark:text-neutral-300">
                                    {{ $article->excerpt }}
                                </p>
                                <div class="flex items-center gap-4">
                                    @if($article->canEditRecord('articles.index'))
                                    <x-primary-button onclick="gotoEdit({{ $article->id}})">{{ __('Edit')}}</x-primary-button>

                                    @endif
                                    @if($article->canDeleteRecord('articles.index'))
                                    <x-delete-restore :id="$article->id" :isDeleted="$article->isDeleted" :action="$article->isDeleted ? route('articles.restore',$article->id) : route('articles.destroy',$article->id)" deleteLabel="Archive" restoreLabel="Activate" />

                                    @endif
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                    @endif


                    <x-pagination :resultList="$articleList" />


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    const gotoEdit = (id) => {
        window.location.href = `/articles/${id}/edit`;
    }

    const gotoAdd = () => {
        window.location.href = `/articles/create`;
    }
</script>