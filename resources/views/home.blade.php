@extends('layout')

@section('content')
    <section class="header container flex flex-wrap">
        <div class="w-full md:w-1/2 flex flex-col justify-center pr-10">
            <h1 class="text-5xl font-bold text-secondary mb-3">WE ARE THE SOLUTION</h1>
            <h1 class="text-5xl font-medium text-terinary mb-3">For Your Digital
                Marketing Needs</h1>
            <p class="text-2xl font-medium text-black">Don't worry, we will trim the heavy things.</p>
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
@endsection
