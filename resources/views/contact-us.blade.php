@extends('layout')

@section('content')
    <section class="header container flex flex-wrap items-center py-5 md:min-h-[100vh]">
        <div class="w-full md:w-1/2 flex flex-col md:pr-10 mb-5">
            <h3 class="text-xl font-medium text-button mb-3">CONTACT US</h3>
            <h1 class="text-5xl font-semibold text-black mb-8">Don’t Hesitate to <br>
                Contact Us</h1>
            <p class="text-xl text-desc mb-4">Let’s talk business or just have a coffee.
                We would love to hear from you.
            </p>
            <div class="w-full social-media flex items-center justify-center md:justify-start space-x-5 mt-5">
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
        <div class="w-full md:w-1/2 flex flex-col mb-5 md:mb-0">
            <div class="flex">
                <div class="w-1/2 form-group flex flex-col space-y-2 p-2">
                    <label for="">Name</label>
                    <input class="bg-transparent border-b-2 border-black focus:outline-none" type="text">
                </div>
                <div class="w-1/2 form-group flex flex-col space-y-2 p-2">
                    <label for="">Email</label>
                    <input class="bg-transparent border-b-2 border-black focus:outline-none" type="text">
                </div>
            </div>
            <div class="form-group flex flex-col space-y-2 p-2">
                <label for="">Your Messages</label>
                <textarea class="bg-transparent border-b-2 border-black focus:outline-none" type="text">
                </textarea>
            </div>
            <div class="mt-6 p-2">
                <span class="btn-primary">
                    Send Messages
                </span>
            </div>
        </div>
    </section>
@endsection
