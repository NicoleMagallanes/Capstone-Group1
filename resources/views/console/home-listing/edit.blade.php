<x-app-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Home Listing') }}
        </h2>
        <a href="/home-listing">Back to List</a>
    </x-slot>

    @if(session('status') != '')
    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 3000)" class="bg-emerald-200 py-[6px] px-[10px] rounded text-sm text-gray-600">{{ session('status') }}</p>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form id="record-data" method="post" action="{{ $homeListing->id > 0 ? route('home-listing.update', $homeListing->id) : route('home-listing.store') }}" class="mt-6 space-y-6" onsubmit="return validatePassword()">
                        @csrf
                        @if($homeListing->id > 0)
                        @method('patch')
                        @endif
                        <div class="grid grid-cols-2 gap-4">
                            <div class="col-span-2">
                                <x-input-label for="title" :value="__('Title')" />
                                <x-text-input id="title" name="title" type="text" value="{{ $homeListing->title }}" class="mt-1 block w-full" required />
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>

                            <div class="col-span-2">
                                <x-input-label for="content" :value="__('Description')" />
                                <textarea id="content" name="content" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full min-h-[200px]" required>{!! $homeListing->description !!}</textarea>
                                <x-input-error class="mt-2" :messages="$errors->get('content')" />
                            </div>

                            <div class="col-span-2">
                                <x-input-label for="excerpt" :value="__('Price')" />
                                <textarea id="excerpt" name="excerpt" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" required>{!! $homeListing->price !!}</textarea>
                                <x-input-error class="mt-2" :messages="$errors->get('excerpt')" />
                            </div>


                        </div>

                    </form>
                    <div class="container gap-4 pt-4">
                        <form method="post" action="{{url('image/upload/store')}}" enctype="multipart/form-data" class="dropzone" id="dropzone">
                            @csrf
                        </form>
                    </div>
                    <div class="flex items-center gap-4 mt-[15px]">
                        <x-primary-button onclick="doCancel()">{{ __('Cancel') }}</x-primary-button>
                        <x-primary-button form="record-data">{{ __('Save') }}</x-primary-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const doCancel = () => {
            window.location.href = `/manage/home-listing`;
        }
    </script>
    <script type="text/javascript">
        Dropzone.options.dropzone = {
            maxFilesize: 12,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
                return time + file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 50000,
            removedfile: function(file) {
                var name = file.upload.filename;
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    },
                    type: 'POST',
                    url: '{{ url("image/delete") }}',
                    data: {
                        filename: name
                    },
                    success: function(data) {
                        console.log("File has been successfully removed!!");
                    },
                    error: function(e) {
                        console.log(e);
                    }
                });
                var fileRef;
                return (fileRef = file.previewElement) != null ?
                    fileRef.parentNode.removeChild(file.previewElement) : void 0;
            },

            success: function(file, response) {
                console.log(response);
            },
            error: function(file, response) {
                return false;
            }
        };
    </script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
</x-app-layout>
