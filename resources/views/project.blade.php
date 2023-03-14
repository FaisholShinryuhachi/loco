@extends('layout')

@section('content')
    <section class="container my-16 flex flex-col items-center">
        <div class="w-full md:w-[60%] text-center">
            <h3 class="text-xl font-medium text-button mb-3">OUR PORTOFOLIO</h3>
            <h1 class="text-5xl font-semibold text-black mb-8">Our Great<br>
                Awesome Work </h1>
            <p class="text-xl text-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
            </p>
        </div>
        <div class="flex justify-between w-full mt-5">
            <select class="w-1/3 md:w-1/6 px-4 rounded-md bg-white border-2 border-primary" name="cars" id="cars">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="mercedes">Mercedes</option>
                <option value="audi">Audi</option>
            </select>
            <div class="flex space-x-2 mt-2">
                <img class="mx-auto" src="{{ asset('./assets/img/Frame 5.svg') }}" alt="logo">
                <img class="mx-auto" src="{{ asset('./assets/img/Frame 4.svg') }}" alt="logo">
            </div>
        </div>
        <div class="grid gap-4 grid-cols-1 md:grid-cols-3 w-full my-8">
            <div class="flex justify-center">
                <div class="block max-w-sm rounded-lg bg-white shadow-lg p-7 relative">
                    <img class="mb-4" src="{{ asset('./assets/img/Group 35.png') }}" alt="logo">
                    <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800">
                        Branding
                    </h5>
                    <p class="mb-4 text-base text-neutral-600">
                        Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et
                        dolore magna aliqua.
                    </p>
                    <img class="absolute bottom-5 right-6" width="30" src="{{ asset('./assets/img/Group 75.svg') }}"
                        alt="logo">
                </div>
            </div>
            <div class="flex justify-center">
                <div class="block max-w-sm rounded-lg bg-white shadow-lg p-7 relative">
                    <img class="mb-4" src="{{ asset('./assets/img/Group 35.png') }}" alt="logo">
                    <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800">
                        Branding
                    </h5>
                    <p class="mb-4 text-base text-neutral-600">
                        Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et
                        dolore magna aliqua.
                    </p>
                    <img class="absolute bottom-5 right-6" width="30" src="{{ asset('./assets/img/Group 75.svg') }}"
                        alt="logo">
                </div>
            </div>
            <div class="flex justify-center">
                <div class="block max-w-sm rounded-lg bg-white shadow-lg p-7 relative">
                    <img class="mb-4" src="{{ asset('./assets/img/Group 35.png') }}" alt="logo">
                    <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800">
                        Branding
                    </h5>
                    <p class="mb-4 text-base text-neutral-600">
                        Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et
                        dolore magna aliqua.
                    </p>
                    <img class="absolute bottom-5 right-6" width="30" src="{{ asset('./assets/img/Group 75.svg') }}"
                        alt="logo">
                </div>
            </div>
            <div class="flex justify-center">
                <div class="block max-w-sm rounded-lg bg-white shadow-lg p-7 relative">
                    <img class="mb-4" src="{{ asset('./assets/img/Group 35.png') }}" alt="logo">
                    <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800">
                        Branding
                    </h5>
                    <p class="mb-4 text-base text-neutral-600">
                        Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et
                        dolore magna aliqua.
                    </p>
                    <img class="absolute bottom-5 right-6" width="30" src="{{ asset('./assets/img/Group 75.svg') }}"
                        alt="logo">
                </div>
            </div>
            <div class="flex justify-center">
                <div class="block max-w-sm rounded-lg bg-white shadow-lg p-7 relative">
                    <img class="mb-4" src="{{ asset('./assets/img/Group 35.png') }}" alt="logo">
                    <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800">
                        Branding
                    </h5>
                    <p class="mb-4 text-base text-neutral-600">
                        Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et
                        dolore magna aliqua.
                    </p>
                    <img class="absolute bottom-5 right-6" width="30" src="{{ asset('./assets/img/Group 75.svg') }}"
                        alt="logo">
                </div>
            </div>
            <div class="flex justify-center">
                <div class="block max-w-sm rounded-lg bg-white shadow-lg p-7 relative">
                    <img class="mb-4" src="{{ asset('./assets/img/Group 35.png') }}" alt="logo">
                    <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800">
                        Branding
                    </h5>
                    <p class="mb-4 text-base text-neutral-600">
                        Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et
                        dolore magna aliqua.
                    </p>
                    <img class="absolute bottom-5 right-6" width="30" src="{{ asset('./assets/img/Group 75.svg') }}"
                        alt="logo">
                </div>
            </div>
        </div>
    </section>
@endsection
