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
                    <div id="carouselExampleCaptions" class="relative" data-te-carousel-init data-te-carousel-slide>
                        <div class="absolute bottom-0 left-0 right-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0" data-te-carousel-indicators>
                            <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="0" data-te-carousel-active class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="1" class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none" aria-label="Slide 2"></button>
                            <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="2" class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none" aria-label="Slide 3"></button>
                        </div>
                        <div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
                            <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-active data-te-carousel-item style="backface-visibility: hidden">
                                <div class="relative overflow-hidden bg-cover bg-no-repeat" style="background-position: 50%">
                                    <img src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(123).jpg" class="block w-full" />
                                    <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-black bg-fixed opacity-50"></div>
                                </div>
                                <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
                                    <h5 class="text-xl">Humble Host</h5>
                                    <p>
                                        Some representative placeholder content for the first slide.
                                    </p>
                                </div>
                            </div>
                            <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-item style="backface-visibility: hidden">
                                <div class="relative overflow-hidden bg-cover bg-no-repeat" style="background-position: 50%">
                                    <img src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(124).jpg" class="block w-full" />
                                    <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-black bg-fixed opacity-50"></div>
                                </div>
                                <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
                                    <h5 class="text-xl">Humble Host</h5>
                                    <p>
                                        Some representative placeholder content for the second slide.
                                    </p>
                                </div>
                            </div>
                            <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-item style="backface-visibility: hidden">
                                <div class="relative overflow-hidden bg-cover bg-no-repeat" style="background-position: 50%">
                                    <img src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(125).jpg" class="block w-full" />
                                    <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-black bg-fixed opacity-50"></div>
                                </div>
                                <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
                                    <h5 class="text-xl">Humble Host</h5>
                                    <p>
                                        Some representative placeholder content for the third slide.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <button class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none" type="button" data-te-target="#carouselExampleCaptions" data-te-slide="prev">
                            <span class="inline-block h-8 w-8">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                                </svg>
                            </span>
                            <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Previous</span>
                        </button>
                        <button class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none" type="button" data-te-target="#carouselExampleCaptions" data-te-slide="next">
                            <span class="inline-block h-8 w-8">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                            </span>
                            <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Next</span>
                        </button>
                    </div>

                    <h5 class="mb-3 text-lg mt-10 font-bold">{{ request('title') }}</h5>
                    <p class="text-sm mb-2">{{ request('description') }}</p>
                    <p class="text-lg font-bold mb-2">₱{{ request('price') }}</p>

                    <p class="mb-6 text-neutral-500 dark:text-neutral-300">
                        <small>Published <u>{{ request('publishedDate') }}</u> by <a href="#!">{{ request('id') }}</a></small>
                    </p>

                    <div class="relative mb-3" id="datepicker-disable-past" data-te-input-wrapper-init>
                        <input type="text" class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" placeholder="Select a date" />
                        <label for="floatingInput" class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Select a date</label>
                    </div>
                    <div class="relative" id="timepicker-with-button" data-te-timepicker-init data-te-input-wrapper-init>
                        <input type="text" class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" id="form4" />
                        <label for="form4" class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Select a time</label>
                        <button tabindex="0" type="button" class="timepicker-toggle-button absolute right-1.5 top-1/2 ml-auto h-4 w-4 -translate-x-1/2 -translate-y-1/2 cursor-pointer border-none bg-transparent text-neutral-700 outline-none transition-all duration-[300ms] ease-[cubic-bezier(0.25,0.1,0.25,1)] hover:fill-[#3b71ca] focus:text-[#3b71ca] dark:text-white dark:hover:text-[#3b71ca] dark:focus:text-[#3b71ca]" data-te-toggle="timepicker-with-button" data-te-timepicker-toggle-button>
                            <span data-te-timepicker-icon>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l7.5-7.5 7.5 7.5m-15 6l7.5-7.5 7.5 7.5" />
                                </svg>
                            </span>
                        </button>
                    </div>

                    <div class="grid gap-6 lg:grid-cols-3 xl:gap-x-12 mt-10">
                        <div class="flex items-center gap-4">
                            @if($homeListing->canViewAllRecords('home-listing.index'))
                            <x-primary-button onclick="gotoPayment({{$homeListing->id}})">{{ __('Reserve')}}</x-primary-button>
                            @endif
                        </div>
                    </div>



                    <div class="container my-24 mx-auto md:px-6">
                        <section class="mb-32 text-center lg:text-left">
                            <div class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                                <div class="flex flex-wrap items-center">
                                    <div class="block w-full shrink-0 grow-0 basis-auto lg:flex lg:w-6/12 xl:w-4/12">
                                        <img src="https://tecdn.b-cdn.net/img/new/ecommerce/vertical/086.jpg" alt="Trendy Pants and Shoes" class="w-full rounded-t-lg lg:rounded-tr-none lg:rounded-bl-lg" />
                                    </div>
                                    <div class="w-full shrink-0 grow-0 basis-auto lg:w-6/12 xl:w-8/12">
                                        <div class="px-6 py-12 md:px-12">
                                            <h2 class="display-5 mb-6 text-4xl font-bold text-primary dark:text-primary-400">
                                                Why is it so great?
                                            </h2>
                                            <p class="mb-12 text-neutral-500 dark:text-neutral-300">
                                                Nunc tincidunt vulputate elit. Mauris varius purus malesuada
                                                neque iaculis malesuada. Aenean gravida magna orci, non
                                                efficitur est porta id. Donec magna diam.
                                            </p>

                                            <div class="grid md:grid-cols-3 lg:gap-x-12">
                                                <div class="mb-12 md:mb-0">
                                                    <h2 class="mb-4 text-3xl font-bold text-primary dark:text-primary-400">
                                                        1000
                                                    </h2>
                                                    <h5 class="mb-0 text-lg font-medium text-neutral-500 dark:text-neutral-300">
                                                        Happy customers
                                                    </h5>
                                                </div>

                                                <div class="mb-12 md:mb-0">
                                                    <h2 class="mb-4 text-3xl font-bold text-primary dark:text-primary-400">
                                                        70%
                                                    </h2>
                                                    <h5 class="mb-0 text-lg font-medium text-neutral-500 dark:text-neutral-300">
                                                        Growth
                                                    </h5>
                                                </div>

                                                <div class="">
                                                    <h2 class="mb-4 text-3xl font-bold text-primary dark:text-primary-400">
                                                        49
                                                    </h2>
                                                    <h5 class="mb-0 text-lg font-medium text-neutral-500 dark:text-neutral-300">
                                                        Projects
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="container my-24 mx-auto md:px-6">
                        <section class="mb-32 text-center">
                            <h2 class="mb-12 text-3xl font-bold">Testimonials</h2>

                            <div id="carouselExampleCaptions" class="relative" data-te-carousel-init data-te-carousel-slide>
                                <div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
                                    <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-active data-te-carousel-item style="backface-visibility: hidden">
                                        <img class="mx-auto mb-6 rounded-full shadow-lg dark:shadow-black/20 w-[150px]" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).jpg" alt="avatar" />
                                        <div class="flex flex-wrap justify-center">
                                            <div class="w-full shrink-0 grow-0 basis-auto px-3 lg:w-8/12">
                                                <h5 class="mb-2 text-lg font-bold">Maria Kate</h5>
                                                <p class="mb-4 font-medium text-neutral-700 dark:text-neutral-400">
                                                    Photographer
                                                </p>
                                                <p class="mb-6 text-neutral-500 dark:text-neutral-300">
                                                    In ac turpis justo. Vivamus auctor quam vitae odio feugiat
                                                    pulvinar. Sed semper ligula sed lorem tincidunt dignissim.
                                                    Nam sed cursus lectus. Proin non rutrum magna. Proin
                                                    gravida, justo et imperdiet tristique turpis nisi viverra.
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="inline-block w-6">
                                                        <path fill="currentColor" d="M580 556h160V396H580v160Zm-360 0h160V396H220v160Zm406 220 80-160H520V336h280v288l-76 152h-98Zm-360 0 80-160H160V336h280v288l-76 152h-98Zm34-300Zm360 0Z" />
                                                    </svg>
                                                </p>
                                                <ul class="mb-0 flex justify-center">
                                                    <li>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                                                            <path fill="currentColor" d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                                                            <path fill="currentColor" d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                                                            <path fill="currentColor" d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                                                            <path fill="currentColor" d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                                                            <path fill="currentColor" d="m480 757 157 95-42-178 138-120-182-16-71-168v387ZM233 976l65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                                                        </svg>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-item style="backface-visibility: hidden">
                                        <img class="mx-auto mb-6 rounded-full shadow-lg dark:shadow-black/20 w-[150px]" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).jpg" alt="avatar" />
                                        <div class="flex flex-wrap justify-center">
                                            <div class="w-full shrink-0 grow-0 basis-auto px-3 lg:w-8/12">
                                                <h5 class="mb-2 text-lg font-bold">John Doe</h5>
                                                <p class="mb-4 font-medium text-neutral-700 dark:text-neutral-400">
                                                    Web Developer
                                                </p>
                                                <p class="mb-6 text-neutral-500 dark:text-neutral-300">
                                                    Maecenas auctor, quam eget tincidunt pretium, felis diam
                                                    semper turpis, sed scelerisque diam libero facilisis libero.
                                                    Quisque vitae semper metus. Aliquam eu dui aliquam, faucibus
                                                    metus quis, elementum nunc.
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="inline-block w-6">
                                                        <path fill="currentColor" d="M580 556h160V396H580v160Zm-360 0h160V396H220v160Zm406 220 80-160H520V336h280v288l-76 152h-98Zm-360 0 80-160H160V336h280v288l-76 152h-98Zm34-300Zm360 0Z" />
                                                    </svg>
                                                </p>
                                                <ul class="mb-0 flex justify-center">
                                                    <li>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                                                            <path fill="currentColor" d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                                                            <path fill="currentColor" d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                                                            <path fill="currentColor" d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                                                            <path fill="currentColor" d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                                                            <path fill="currentColor" d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                                                        </svg>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-item style="backface-visibility: hidden">
                                        <img class="mx-auto mb-6 rounded-full shadow-lg dark:shadow-black/20 w-[150px]" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).jpg" alt="avatar" />
                                        <div class="flex flex-wrap justify-center">
                                            <div class="w-full shrink-0 grow-0 basis-auto px-3 lg:w-8/12">
                                                <h5 class="mb-2 text-lg font-bold">Anna Deynah</h5>
                                                <p class="mb-4 font-medium text-neutral-700 dark:text-neutral-400">
                                                    UX Designer
                                                </p>
                                                <p class="mb-6 text-neutral-500 dark:text-neutral-300">
                                                    Duis sagittis, turpis in ullamcorper venenatis, ligula nibh
                                                    porta dui, sit amet rutrum enim massa in ante. Curabitur in
                                                    justo at lorem laoreet ultricies. Nunc ligula felis,
                                                    sagittis eget nisi vitae ex arcu sit amet erat.
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="inline-block w-6">
                                                        <path fill="currentColor" d="M580 556h160V396H580v160Zm-360 0h160V396H220v160Zm406 220 80-160H520V336h280v288l-76 152h-98Zm-360 0 80-160H160V336h280v288l-76 152h-98Zm34-300Zm360 0Z" />
                                                    </svg>
                                                </p>
                                                <ul class="mb-0 flex justify-center">
                                                    <li>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                                                            <path fill="currentColor" d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                                                            <path fill="currentColor" d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                                                            <path fill="currentColor" d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                                                            <path fill="currentColor" d="m233 976 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Z" />
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960" class="w-5 text-warning">
                                                            <path fill="currentColor" d="m323 851 157-94 157 95-42-178 138-120-182-16-71-168-71 167-182 16 138 120-42 178Zm-90 125 65-281L80 506l288-25 112-265 112 265 288 25-218 189 65 281-247-149-247 149Zm247-355Z" />
                                                        </svg>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="absolute top-0 bottom-0 left-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none" type="button" data-te-target="#carouselExampleCaptions" data-te-slide="prev">
                                    <span class="inline-block h-8 w-8">
                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="text-neutral-600 dark:text-neutral-300">
                                            <path fill="currentColor" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                                        </svg>
                                    </span>
                                    <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Previous</span>
                                </button>
                                <button class="absolute top-0 bottom-0 right-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none" type="button" data-te-target="#carouselExampleCaptions" data-te-slide="next">
                                    <span class="inline-block h-8 w-8">
                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="text-neutral-600 dark:text-neutral-300">
                                            <path fill="currentColor" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </span>
                                    <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Next</span>
                                </button>
                            </div>
                        </section>
                    </div>
                    <div class="container my-24 mx-auto md:px-6">
                        <section class="mb-32 text-center">
                            <div class="py-12 md:px-12">
                                <div class="container mx-auto xl:px-32">
                                    <div class="grid items-center lg:grid-cols-2">
                                        <div class="mb-12 md:mt-12 lg:mt-0 lg:mb-0">
                                            <div class="relative z-[1] block rounded-lg bg-[hsla(0,0%,100%,0.55)] px-6 py-12 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] backdrop-blur-[30px] dark:bg-[hsla(0,0%,5%,0.7)] dark:shadow-black/20 md:px-12 lg:-mr-14">
                                                <h2 class="mb-12 text-3xl font-bold">Contact us</h2>
                                                <form>
                                                    <div class="relative mb-6" data-te-input-wrapper-init>
                                                        <input type="text" class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" id="exampleInput90" placeholder="Name" />
                                                        <label class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary" for="exampleInput90">Name
                                                        </label>
                                                    </div>
                                                    <div class="relative mb-6" data-te-input-wrapper-init>
                                                        <input type="email" class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" id="exampleInput91" placeholder="Email address" />
                                                        <label class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary" for="exampleInput91">Email address
                                                        </label>
                                                    </div>
                                                    <div class="relative mb-6" data-te-input-wrapper-init>
                                                        <textarea class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" id="exampleFormControlTextarea1" rows="3" placeholder="Your message"></textarea>
                                                        <label for="exampleFormControlTextarea1" class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Message</label>
                                                    </div>
                                                    <div class="mb-6 inline-block min-h-[1.5rem] justify-center pl-[1.5rem] md:flex">
                                                        <input class="relative float-left mt-[0.15rem] mr-[6px] -ml-[1.5rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:ml-[0.25rem] checked:after:-mt-px checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-t-0 checked:after:border-l-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:ml-[0.25rem] checked:focus:after:-mt-px checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-t-0 checked:focus:after:border-l-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent dark:border-neutral-600 dark:checked:border-primary dark:checked:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]" type="checkbox" value="" id="exampleCheck96" checked />
                                                        <label class="inline-block pl-[0.15rem] hover:cursor-pointer" for="exampleCheck96">
                                                            Send me a copy of this message
                                                        </label>
                                                    </div>
                                                    <button type="button" data-te-ripple-init data-te-ripple-color="light" class="inline-block w-full rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] lg:mb-0">
                                                        Send
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="md:mb-12 lg:mb-0">
                                            <div class="relative h-[700px] rounded-lg shadow-lg dark:shadow-black/20">
                                                <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" class="absolute left-0 top-0 h-full w-full rounded-lg" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="container my-24 mx-auto md:px-6">
                        <section class="mb-32">
                            <div class="grid gap-4 md:grid-cols-2">
                                <div class="mb-6 md:mb-0">
                                    <h2 class="mb-6 text-3xl font-bold">Frequently asked questions</h2>

                                    <p class="text-neutral-500 dark:text-neutral-300">
                                        Didn't find your answer in the FAQ?
                                        <a href="#!" class="text-primary transition duration-300 hover:text-primary-600 focus:text-primary-600 active:text-primary-700 dark:text-primary-400 dark:hover:text-primary-500 dark:focus:text-primary-500 dark:active:text-primary-600">Contact
                                            our sales team</a>.
                                    </p>
                                </div>

                                <div class="mb-6 md:mb-0">
                                    <p class="mb-4 font-bold">Anim pariatur cliche reprehenderit?</p>
                                    <p class="mb-12 text-neutral-500 dark:text-neutral-300">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt
                                        autem numquam dolore molestias aperiam culpa alias veritatis
                                        architecto eos, molestiae vitae ex eligendi libero eveniet
                                        dolorem, doloremque rem aliquid perferendis.
                                    </p>

                                    <p class="mb-4 font-bold">Non cupidatat skateboard dolor brunch?</p>
                                    <p class="mb-12 text-neutral-500 dark:text-neutral-300">
                                        Distinctio corporis, iure facere ducimus quos consectetur ipsa ut
                                        magnam autem doloremque ex! Id, sequi. Voluptatum magnam sed fugit
                                        iusto minus et suscipit? Minima sunt at nulla tenetur, numquam
                                        unde quod modi magnam ab deserunt ipsam sint aliquid dolores
                                        libero repellendus cupiditate mollitia quidem dolorem odit
                                    </p>

                                    <p class="mb-4 font-bold">
                                        Praesentium voluptatibus temporibus consequatur non aspernatur?
                                    </p>
                                    <p class="mb-12 text-neutral-500 dark:text-neutral-300">
                                        Minima sunt at nulla tenetur, numquam unde quod modi magnam ab
                                        deserunt ipsam sint aliquid dolores libero repellendus cupiditate
                                        mollitia quidem dolorem.
                                    </p>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


<script src="../js/app.js"></script>

<script>
    const gotoPayment = (id) => {
        window.location.href = `/home-listing/${id}/payment`;
    }
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