@extends('layout')

@section('content')
    <section class="header container flex md:flex-wrap flex-wrap-reverse py-5">
        <div class="w-full md:w-1/2 flex flex-col justify-center md:pr-10">
            <h1 class="text-5xl font-bold text-secondary mb-3">WE ARE THE SOLUTION</h1>
            <h1 class="text-5xl font-medium text-terinary dark:text-darkdesc mb-3">For Your Digital
                Marketing Needs</h1>
            <p class="text-2xl font-medium text-black/70 dark:text-darkdesc">Don't worry, we will trim the heavy things.</p>
            <div class="mt-6">
                <span class="btn-primary">
                    Let’s Collaborate
                </span>
            </div>
        </div>
        <div class="w-full md:w-1/2 flex justify-center items-center ">
            <img src="{{ asset('./assets/img/dinosaurus.png') }}" alt="logo">
        </div>
    </section>
    <section class="sponsor container flex flex-wrap lg:w-[80%] items-center justify-center my-16">
        <div class="w-1/2 p-2 md:w-1/4">
            <img class="mx-auto" src="{{ asset('./assets/img/brand-01.png') }}" alt="logo">
        </div>
        <div class="w-1/2 p-2 md:w-1/4">
            <img class="mx-auto" src="{{ asset('./assets/img/brand-04.png') }}" alt="logo">
        </div>
        <div class="w-1/2 p-2 md:w-1/4">
            <img class="mx-auto" src="{{ asset('./assets/img/brand-05.png') }}" alt="logo">
        </div>
        <div class="w-1/2 p-2 md:w-1/4">
            <img class="mx-auto" src="{{ asset('./assets/img/brand-06.png') }}" alt="logo">
        </div>

    </section>
    <section class="about-us container flex flex-wrap">
        <div class="w-full md:w-1/2 md:pr-8">
            <img class="mx-auto" src="{{ asset('./assets/img/image.png') }}" alt="logo">
        </div>
        <div class="w-full md:w-1/2 flex flex-col justify-center">
            <h3 class="text-xl font-medium text-button mb-3">About Us</h3>
            <h1 class="text-5xl font-semibold text-black dark:text-darkdesc mb-8">We Are <br>Locomotion.</h1>
            <p class="text-xl text-desc dark:text-darkdesc">Kami selalu memposisikan diri bukan sebagai vendor, tapi kami adalah
                teman Anda. Sebagaimana teman yang setia, kami akan terus berdiri siap siaga, untuk teman-teman kami.
            </p>
            <div class="mt-10">
                <span class="btn-primary">
                    Know More
                </span>
            </div>
        </div>
    </section>
    <section class="container my-16 flex flex-col items-center">
        <div class="w-full md:w-[60%] text-center">
            <h3 class="text-xl font-medium text-button mb-3">Service</h3>
            <h1 class="text-5xl font-semibold text-black mb-8 dark:text-darkdesc">We Are Offering <br>
                Top Class Services</h1>
            <p class="text-xl text-desc dark:text-darkdesc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                euismod.
            </p>
        </div>
        <div class="grid gap-4 grid-cols-1 md:grid-cols-3 w-[80%] my-8">
            <div class="flex justify-center">
                <div class="block max-w-sm rounded-lg bg-white dark: shadow-lg p-7 relative">
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
