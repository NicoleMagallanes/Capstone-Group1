<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home Listing Reservation') }}
        </h2>
        <a href="{{ route('home-listing.index') }}">Back to List</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h5 class="mb-3 text-lg font-bold">{{ request('title') }}</h5>
                    <p class="text-sm mb-2">{{ request('description') }}</p>
                    <p class="text-lg font-bold mb-2">₱{{ request('price') }}</p>

                    @if (request('imageUrl'))
                        <img src="{{ request('imageUrl') }}" alt="Item Image">
                    @endif

                    <p class="mb-6 text-neutral-500 dark:text-neutral-300">
                        <small>Published <u>{{ request('publishedDate') }}</u> by <a href="#!">{{ request('id') }}</a></small>
                    </p>

                    <!-- Rest of your reserve page content -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>



<script>
    const gotoEdit = (id) => {
        window.location.href = `/home-listing/${id}/edit`;
    }
    const gotoReserve = (id) => {
        window.location.href = `/home-listing/${id}/reserve`;
    }
    const gotoAdd = () => {
        window.location.href = `/home-listing/create`;
    }
</script>