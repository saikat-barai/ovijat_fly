@extends('master')
@section('content')
    <div>
        <section id="separator" class="bg-[#f9b660ff] my-5 max-w-screen-md xl:max-w-screen-xl mx-auto shadow rounded-md">
            <div class="package-title-area flex gap-3 justify-center items-center py-1">
                <img class="w-9" src="{{ asset('frontend/asset') }}/images/basic/umrah-logo.png" alt="">
                <h2 class="text-md font-bold text-black">UMRAH PACKAGES</h2>
                <img class="w-9" src="{{ asset('frontend/asset') }}/images/basic/umrah-logo.png" alt="">
            </div>
        </section>
        <section id="umrah-package-area"
            class="grid gap-4 grid-cols-1 md:grid-cols-3 lg:grid-cols-4 max-w-screen-md xl:max-w-screen-xl bg-white shadow mx-auto w-full p-4 rounded-md">
            @foreach ($umrahs as $umrah)
            <div class="package-card w-full bg-gray-200 rounded-lg border-solid border-1 border-[#ff9900] shadow h-80">
                <a href="{{ route('umrah.details') }}" class="">
                    <div class="package-banner w-full h-3/4">
                        <img class="rounded-t-lg w-full h-full" src="{{ asset('images/umrah/'.$umrah->image) }}" alt="">
                    </div>
                    <div class="package-body">
                        <div class="package-short-desc p-2">
                            <h3 class="text-sm font-bold">{{ $umrah->title }}</h3>
                        </div>
                        <div class="package-price-duration flex justify-between px-2">
                            <p class="bg-indigo-900 text-white text-xs rounded-md p-1">6 Nights/7 Days</p>
                            <p class="bg-indigo-900 text-white text-xs rounded-md p-1">5000 BDT/per-person</p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </section>
    </div>
@endsection
