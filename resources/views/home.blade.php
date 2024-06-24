@extends('app.layout')
@section('content')
    <div class="section-1 flex w-full justify-center">
        <img class="w-full object-cover object-center h-[250px] sm:h-[600px]" src="{{ asset('images/hero.jpg') }}" alt="">
    </div>
    
    <div class="container py-12 px-6 space-y-24 flex flex-col sm:items-center sm:flex-col sm:justify-between w-full max-w-[1200px] mx-auto my-0 ">
        <div class="section-2 flex gap-8 flex-col-reverse mt-6 sm:items-center sm:flex-row  sm:my-16">
            <div class="s2-left flex flex-col gap-4 sm:w-[35%]">
                <div class="text space-y-2">
                    <h3 class="font-bold text-4xl">Best services for everyone.</h3>
                    <p class="">
                        SEA Salon, the market leader in Indonesia salon business offers premium services and treatments.
                    </p>
                </div>
                <a href="/services">
                    <button
                    type="submit"
                    class="w-full px-4 py-2 text-white bg-slate-950 hover:bg-slate-800 transition rounded-lg">Explore Services</button>
                </a>
            </div>
            <div class="s2-right sm:w-[80%]">
                <img class="rounded shadow-xl" src="{{ asset('images/banner2.jpg') }}" alt="">
            </div>
        </div>

        <div class="section-3 flex gap-8 flex-col sm:items-center sm:flex-row  sm:my-16">
            <div class="s3-right sm:w-[80%]">
                <img class="rounded shadow-xl" src="{{ asset('images/banner3.webp') }}" alt="">
            </div>
            <div class="s3-left flex flex-col gap-4 sm:w-[35%]">
                <div class="text space-y-2">
                    <h3 class="font-bold text-4xl">Reserve to experience satisfaction.</h3>
                    <p class="">
                        SEA Salon, the market leader in Indonesia salon business offers premium services and treatments.
                    </p>
                </div>
                <a href="/reservation">
                    <button
                    type="submit"
                    class="w-full px-4 py-2 text-white bg-slate-950 hover:bg-slate-800 transition rounded-lg">Reserve Now</button>
                </a>
            </div>
        </div>
    </div>
@endsection
