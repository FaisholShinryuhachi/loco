@extends('layout')

@section('content')
    <section class="header container flex md:flex-wrap flex-wrap-reverse items-center py-5">
        <div class="w-full md:w-1/2 flex flex-col md:text-right md:pr-10">
            <h3 class="text-xl font-medium text-button mb-3">OUR TEAM</h3>
            <h1 class="text-5xl font-semibold text-black mb-8">Know More About
                Locomotion Team</h1>
            <p class="text-xl text-desc mb-4">Kami selalu memposisikan diri bukan sebagai vendor,
                tapi <span class="text-primary">kami adalah teman Anda.</span>
            </p>
            <p class="text-xl text-desc mb-4">
                Sebagaimana teman yang setia, kami tidak akan
                membiarkan Anda sendiri kebingungan dengan
                berbagai kebutuhan brand dan produk. </p>
            <p class="text-xl text-desc mb-4">
                Sejak <span class="text-primary">2012</span>, urusan kami dengan klien <span
                    class="text-primary">teman-teman</span>
                tidak hanya sekedar tanggung jawab. Tapi ratusan <span class="text-primary">konsultasi, ide-ide kreatif
                </span>(dan kadang gila), serta
                berbagai bentuk kerjasama (pementasan,
                produksi karya, dan pendampingan)
                <span class="text-primary">sudah kami eksekusi.</span>
            </p>
            <p class="text-xl text-desc mb-4">
                Sebagaimana teman yang setia, kami akan terus berdiri
                siap siaga, untuk teman-teman kami. </p>
            <p class="text-xl text-desc mb-4">
                <span class="text-primary">Termasuk Anda.</span>
            </p>
        </div>
        <div class="w-full md:w-1/2 flex justify-center items-center mb-5 md:mb-0">
            <img src="{{ asset('./assets/img/image(1).png') }}" alt="logo">
        </div>
    </section>
    <section class="header container flex flex-wrap items-center">
        <div class="w-full md:w-1/2 flex justify-center items-center mb-5 md:mb-0">
            <img src="{{ asset('./assets/img/Rectangle 130.png') }}" alt="logo">
        </div>
        <div class="w-full md:w-1/2 flex flex-col">
            <h3 class="text-xl font-medium text-button mb-3">OWNER’S PROFILE</h3>
            <h1 class="text-5xl font-semibold text-black mb-8">Fabian Pamor P</h1>
            <p class="text-xl text-desc mb-4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, Lorem
                ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,</span>
            </p>
            <div class="w-full social-media flex items-center justify-center md:justify-start space-x-5 p-5">
                <div class="">
                    <img src="{{ asset('./assets/img/Group 45.png') }}" alt="logo">
                </div>
                <div class="">
                    <img src="{{ asset('./assets/img/Group 44.png') }}" alt="logo">
                </div>
                <div class="">
                    <img src="{{ asset('./assets/img/Group 43.png') }}" alt="logo">
                </div>
                <div class="">
                    <img src="{{ asset('./assets/img/Group 42.png') }}" alt="logo">
                </div>
            </div>
        </div>

    </section>
    <section class="sponsor container mt-16 md:mb-52 flex flex-wrap lg:w-[80%] items-center justify-center ">
        <div class="mb-5">
            <h1 class="text-5xl font-semibold text-black mb-8">Our Trusted Mates</h1>
        </div>
        <div class="flex flex-wrap lg:w-[80%] items-center justify-center">
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
        </div>
        <div class="flex flex-wrap lg:w-[80%] items-center justify-center mt-5">
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
        </div>


    </section>
    <section class="quote container mt-16 mb-10 md:mb-32 flex flex-wrap lg:w-[80%] items-center justify-center ">
        <div class="mb-5 text-center">
            <h1 class="text-5xl font-semibold text-black mb-8">Special Quote
                <br>Fromo Our Mates
            </h1>
        </div>
        <div
            class="flex shadow-lg flex-wrap lg:w-full items-center justify-center bg-white rounded-3xl md:rounded-[80px] py-10 px-5 md:px-24 border-[1.5px] border-primary">
            <div class="ccc">
                <p>
                    “Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, Lorem ipsum dolor sit amet,
                    consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                    erat volutpat. Ut wisi enim ad minim veniam”
                </p>
                <div class="flex flex-row items-center justify-center mt-10">
                    <div class="aspect-square w-[61px] rounded-full bg-slate-600 bg-no-repeat bg-cover bg-center"
                        style="background-image: url({{ asset('./assets/img/profil.jpeg') }})">
                    </div>
                    <div class="pl-6">
                        <h3 class="font-semibold">
                            Jennie BlackPink
                        </h3 class="text-[13px]">
                        <p>BlackPink Co-Founder</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex space-x-2 mt-2">
            <img class="mx-auto" src="{{ asset('./assets/img/Frame 5.svg') }}" alt="logo">
            <img class="mx-auto" src="{{ asset('./assets/img/Frame 4.svg') }}" alt="logo">
        </div>
    </section>
@endsection
