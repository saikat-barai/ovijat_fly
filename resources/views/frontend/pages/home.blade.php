@extends('master')
@section('content')
    <div>
        {{-- <section id="hero" class='bg-cover pb-6' style="background-image: url('/images/basic/OTA Dextop-CP (1).png')">
            <div id="search-main-part" class="pt-20 max-w-screen-md xl:max-w-screen-xl mx-auto">
                <div id="search-main"
                    class="relative flex flex-col w-full mx-auto items-center bg-white rounded-xl w-100 border-solid border-2 border-[#6f3c07]">
                    <div id="search-option-btn" class="flex gap-3 py-3 mt-10">
                        <button
                            class="rounded-md px-3 py-1 border-solid border-1 border-[#595959] bg-[#e3951fff] text-white">One
                            Way</button>
                        <button
                            class="rounded-md px-3 py-1 border-solid border-1 border-[#595959] bg-[#e3951fff] text-white">Round
                            Trip</button>
                        <button
                            class="rounded-md px-3 py-1 border-solid border-1 border-[#595959] bg-[#e3951fff] text-white">Multy
                            City</button>
                    </div>
                    <div id="search-option-field"
                        class="w-11/12 flex mb-10 rounded-xl border-solid border-2 border-[#595959]">
                        <div
                            class="input-group relative border-solid border-r-2 border-[#595959] flex flex-col lg:w-1/4 p-1 px-2">
                            <label class="uppercase text-sm font-normal" for="">From</label>
                            <p class="text-xl font-bold">Dhaka</p>
                            <p class="text-xs"><span class="font-bold uppercase">Dac</span> Zia International</p>

                            <div id="from-to-icon"
                                class="absolute top-1/2 -right-8 -translate-y-1/2 -translate-x-1/2 drop-shadow-xl w-8 h-8 flex items-center justify-center rounded-full border-solid border-2 border-[#595959] bg-white text-sm">
                                <i class="fa-solid fa-right-left"></i>
                            </div>
                        </div>
                        <div
                            class="input-group flex flex-col border-solid border-r-2 border-[#595959] lg:w-1/4 p-1 px-2 pl-5">
                            <label class="uppercase text-sm font-normal" for="">To</label>
                            <p class="text-xl font-bold">Dubai</p>
                            <p class="text-xs"><span class="font-bold uppercase">Dac</span> Zia International</p>
                        </div>
                        <div class="search-departure-return-date flex lg:w-2/4 border-solid border-r-2 border-[#595959] ">
                            <div
                                class="input-group flex flex-col py-1 px-2 border-solid border-r-2 border-[#595959] lg:w-2/4">
                                <label class="uppercase text-sm font-normal" for="">DEPARTURE</label>
                                <p class="font-medium uppercase"><span class="font-bold pr-2 text-2xl">27</span>Dec"22</p>
                                <p class="text-xs font-bold">Sunday</p>
                            </div>
                            <div
                                class="input-group border-solid flex flex-col py-1 px-2 lg:w-2/4">
                                <label class="uppercase text-sm font-normal" for="">RETURN</label>
                                <p class="text-sm">Tap to add a return date for bigger Discount</p>
                            </div>
                        </div>
                        <div class="input-group flex flex-col py-1 px-2 lg:w-1/4">
                            <label class="uppercase text-sm font-normal" for="">TRAVELLERS & CLASS</label>
                            <p class="font-medium"><span class="font-bold text-2xl">1 </span>Traveller</p>
                            <p class="text-sm">Economy/Premium Economy</p>
                        </div>
                    </div>
                    <div id="search-taps"
                        class="absolute lg:w-6/12 -top-9 flex gap-3 px-3 py-1 bg-white justify-between items-center text-center rounded-xl border-solid border-2 border-[#595959]">
                        <div class="tap-group flex flex-col items-center text-center w-full">
                            <a href="" class="hover:text-blue-400">
                                <img class='w-10' src="{{ asset('frontend/asset') }}/images/basic/flight.png" alt="Flight">
                                <p class="text-sm">Flight</p>
                            </a>
                        </div>
                        <div class="tap-group flex flex-col items-center text-center w-full">
                            <a href="" class="hover:text-blue-400">
                                <img class='w-10' src="{{ asset('frontend/asset') }}/images/basic/hotel.png" alt="Hotel">
                                <p class="text-sm">Hotel</p>
                            </a>
                        </div>
                        <div class="tap-group flex flex-col items-center text-center w-full">
                            <a href="{{ route('umrah') }}" class="hover:text-blue-400">
                                <img class='w-10' src="{{ asset('frontend/asset') }}/images/basic/umrah.png" alt="Umrah">
                                <p class="text-sm">Umrah</p>
                            </a>
                        </div>
                        <div class="tap-group flex flex-col items-center text-center w-full">
                            <a href="" class="hover:text-blue-400">
                                <img class='w-10' src="{{ asset('frontend/asset') }}/images/basic/tour.png" alt="Tours">
                                <p class="text-sm">Tours</p>
                            </a>
                        </div>
                        <div class="tap-group flex flex-col items-center text-center w-full">
                            <a href="{{ route('visa') }}" class="hover:text-blue-400">
                                <img class='w-10' src="{{ asset('frontend/asset') }}/images/basic/visa.png" alt="Visa">
                                <p class="text-sm">Visa</p>
                            </a>
                        </div>
                        <div class="tap-group flex flex-col items-center text-center w-full">
                            <a href="" class="hover:text-blue-400">
                                <img class='w-10' src="{{ asset('frontend/asset') }}/images/basic/group.png" alt="Group Fare">
                                <p class="text-sm">Group Fare</p>
                            </a>
                        </div>
                        <div class="tap-group flex flex-col items-center text-center w-full">
                            <a href="" class="hover:text-blue-400">
                                <img class='w-10' src="{{ asset('frontend/asset') }}/images/basic/car.png" alt="Car Pental">
                                <p class="text-sm">Car Pental</p>
                            </a>
                        </div>
                    </div>
                    <div id="search-button" class="absolute -bottom-4">
                        <button
                            class="bg-[#3c78d8ff] rounded-xl border-solid border-2 border-[#ffffff] text-white py-1 px-6">Search</button>
                    </div>
                </div>
            </div>
            <div id="tracking-area"
                class="flex w-full bg-white mx-auto mt-14 rounded-full border-solid border-2 border-[#ff9900] max-w-screen-md xl:max-w-screen-xl">
                <div class="track-group w-full p-2 flex items-center border-solid border-r-2 border-[#595959]">
                    <p class="text-xs text-center w-full">Explore Amazing Offers</p>
                </div>
                <div class="track-group w-full p-2 flex items-center border-solid border-r-2 border-[#595959]">
                    <p class="text-xs text-center w-full">Track Hotel Book Status</p>
                </div>
                <div class="track-group w-full p-2  flex items-center border-solid border-r-2 border-[#595959]">
                    <p class="text-xs text-center w-full">Track Visa Application Status</p>
                </div>
                <div class="track-group w-full p-2  flex items-center border-solid border-r-2 border-[#595959]">
                    <p class="text-xs text-center w-full">Track Umrah Book Status</p>
                </div>
                <div class="track-group w-full p-2  flex items-center">
                    <p class="text-xs text-center w-full">Track Flight Book Status</p>
                </div>
            </div>
        </section> --}}
        <section id="hero" class='bg-cover pb-6 min-w-96' style="background-image: url('{{ asset('frontend/asset') }}/images/basic/OTA Dextop-CP (1).png')">
            <div id="search-main-part" class="pt-20 max-w-screen-md xl:max-w-screen-xl mx-auto">
                <div id="search-main"
                    class="md:relative flex flex-col w-fulln mx-auto items-center md:bg-white rounded-xl md:border-solid md:border-2 border-[#6f3c07]">
                    <div id="search-taps"
                        class="md:absolute w-11/12 lg:w-6/12 -top-9 flex gap-3 px-3 py-1 bg-white justify-between items-center text-center rounded-xl border-solid border-2 border-[#595959]">
                        <div class="tap-group flex flex-col items-center text-center w-full">
                            <img class='w-10' src="{{ asset('frontend/asset') }}/images/basic/flight.png" alt="Flight">
                            <p class="text-sm">Flight</p>
                        </div>
                        <div class="tap-group flex flex-col items-center text-center w-full">
                            <img class='w-10' src="{{ asset('frontend/asset') }}/images/basic/hotel.png" alt="Hotel">
                            <p class="text-sm">Hotel</p>
                        </div>
                        <div class="tap-group flex flex-col items-center text-center w-full">
                            <img class='w-10' src="{{ asset('frontend/asset') }}/images/basic/umrah.png" alt="Umrah">
                            <p class="text-sm">Umrah</p>
                        </div>
                        <div class="tap-group flex flex-col items-center text-center w-full">
                            <img class='w-10' src="{{ asset('frontend/asset') }}/images/basic/tour.png" alt="Tours">
                            <p class="text-sm">Tours</p>
                        </div>
                        <div class="tap-group flex flex-col items-center text-center w-full">
                            <img class='w-10' src="{{ asset('frontend/asset') }}/images/basic/visa.png" alt="Visa">
                            <p class="text-sm">Visa</p>
                        </div>
                        <div class="tap-group flex flex-col items-center text-center w-full hidden md:block">
                            <img class='w-10' src="{{ asset('frontend/asset') }}/images/basic/group.png" alt="Group Fare">
                            <p class="text-sm">Group Fare</p>
                        </div>
                        <div class="tap-group flex flex-col items-center text-center w-full hidden md:block">
                            <img class='w-10' src="{{ asset('frontend/asset') }}/images/basic/car.png" alt="Car Pental">
                            <p class="text-sm">Car Pental</p>
                        </div>
                    </div>
                    <div id="search-option-btn" class="flex gap-3 py-4 md:py-3 md:mt-10">
                        <button
                            class="rounded-md px-3 py-1 border-solid border-1 border-[#595959] bg-[#e3951fff] text-white">One
                            Way</button>
                        <button
                            class="rounded-md px-3 py-1 border-solid border-1 border-[#595959] bg-[#e3951fff] text-white">Round
                            Trip</button>
                        <button
                            class="rounded-md px-3 py-1 border-solid border-1 border-[#595959] bg-[#e3951fff] text-white">Multy
                            City</button>
                    </div>
                    <div id="search-option-field" class="w-11/12 flex flex-col md:flex-row mb-10">
                        <div class="w-full flex flex-row mb-2 md:mb-0">
                            <div class="input-group relative flex flex-col w-full bg-white border-solid border-2 border-[#595959] border-r-0 rounded-l-xl p-1 px-2">
                                <label class="uppercase text-sm font-normal" for="">From</label>
                                <p class="text-xl font-bold">Dhaka</p>
                                <p class="text-xs"><span class="font-bold uppercase">Dac</span> Zia International</p>

                                <div id="from-to-icon"
                                    class="absolute top-1/2 -right-8 -translate-y-1/2 -translate-x-1/2 drop-shadow-xl w-8 h-8 flex items-center justify-center rounded-full border-solid border-2 border-[#595959] bg-white text-sm">
                                    <i class="fa-solid fa-right-left"></i>
                                </div>
                            </div>
                            <div
                                class="input-group flex flex-col w-full bg-white border-solid border-2 border-[#595959] rounded-r-xl md:rounded-r-none p-1 px-4">
                                <label class="uppercase text-sm font-normal" for="">To</label>
                                <p class="text-xl font-bold">Dubai</p>
                                <p class="text-xs"><span class="font-bold uppercase">Dac</span> Zia International</p>
                            </div>
                        </div>
                        <div
                            class="search-departure-return-date flex flex-row w-full mb-2 md:mb-0">
                            <div
                                class="input-group flex flex-col w-full bg-white border-solid border-2 border-[#595959] border-r-0 rounded-l-xl md:border-l-0 md:rounded-l-none p-1 px-2">
                                <label class="uppercase text-sm font-normal" for="">DEPARTURE</label>
                                <p class="font-medium uppercase"><span class="font-bold pr-2 text-2xl">27</span>Dec"22
                                </p>
                                <p class="text-xs font-bold">Sunday</p>
                            </div>
                            <div class="input-group border-solid flex flex-col w-full bg-white  border-solid border-2 border-[#595959] rounded-r-xl md:rounded-r-none p-1 px-4">
                                <label class="uppercase text-sm font-normal" for="">RETURN</label>
                                <p class="text-sm">Tap to add a return date for bigger Discount</p>
                            </div>
                        </div>
                        <div class="w-full md:w-6/12">
                            <div
                                class="input-group flex flex-col bg-white border-solid border-2 border-[#595959] rounded-xl md:rounded-l-none md:border-l-0 p-1 px-4">
                                <label class="uppercase text-sm font-normal" for="">TRAVELLERS & CLASS</label>
                                <p class="font-medium"><span class="font-bold text-2xl">1 </span>Traveller</p>
                                <p class="text-sm">Economy/Premium Economy</p>
                            </div>
                        </div>
                    </div>
                    <div id="search-button" class="md:absolute -bottom-4 w-11/12 md:w-2/12">
                        <button
                            class="bg-[#3c78d8ff] rounded-xl border-solid border-2 border-[#ffffff] text-white py-1 px-6 w-full">Search</button>
                    </div>
                </div>
            </div>
            <div id="tracking-area"
                class="flex flex-col md:flex-row w-11/12 mx-auto mt-14 max-w-screen-md xl:max-w-screen-xl">
                <div class="w-full flex items-center mb-2 md:mb-0">
                    <div
                        class="track-group w-full p-2 bg-white border-solid border-2 border-[#595959] border-r-0 rounded-l-full">
                        <p class="text-xs text-center w-full">Explore Amazing Offers</p>
                    </div>
                    <div
                        class="track-group w-full p-2 bg-white border-solid border-2 border-[#595959] md:border-r-0 rounded-r-full md:rounded-r-none">
                        <p class="text-xs text-center w-full">Track Hotel Book Status</p>
                    </div>
                </div>
                <div class="w-full flex items-center mb-2 md:mb-0">
                    <div
                        class="track-group w-full p-2 bg-white border-solid border-2 border-[#595959] border-r-0 rounded-l-full md:rounded-l-none">
                        <p class="text-xs text-center w-full">Track Visa Application Status</p>
                    </div>
                    <div
                        class="track-group w-full p-2 bg-white border-solid border-2 border-[#595959] md:border-r-0 rounded-r-full md:rounded-r-none">
                        <p class="text-xs text-center w-full">Track Umrah Book Status</p>
                    </div>
                </div>
                <div class="w-full md:w-6/12 flex items-center">
                    <div
                        class="track-group w-full p-2 bg-white border-solid border-2 border-[#595959] rounded-l-full md:rounded-l-none rounded-r-full">
                        <p class="text-xs text-center w-full">Track Flight Book Status</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="separator"
            class="bg-[#4285f4ff] my-5 max-w-screen-md xl:max-w-screen-xl mx-auto shadow rounded-md">
            <div class="package-title-area flex gap-3 justify-center items-center py-1">
                <img class="w-9" src="{{ asset('frontend/asset') }}/images/basic/tour-package-logo.png" alt="">
                <h2 class="text-md font-bold text-white">LATEST TOUR PACKAGES</h2>
                <img class="w-9" src="{{ asset('frontend/asset') }}/images/basic/tour-package-logo.png" alt="">
            </div>
        </section>
        <section id="offer-slider-area" class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 max-w-screen-md xl:max-w-screen-xl bg-white shadow mx-auto w-full p-4 rounded-md">
            <div class="offer-group flex w-full bg-gray-200 rounded-lg border-solid border-1 border-[#ff9900] shadow h-full ">
                <div class="offer-banner w-full">
                    <img class="rounded-t-lg h-40" src="{{ asset('frontend/asset') }}/images/offers/picture1.png" alt="">
                </div>
                <div class="offer-short-desc p-2 text-center w-full flex flex-col my-auto">
                    <h2 class="text-lg font-bold">This is offer Title</h2>
                    <p class="text-sm">This is offer short description</p>
                </div>
            </div>
            <div class="offer-group flex w-full bg-gray-200 rounded-lg border-solid border-1 border-[#ff9900] shadow h-full ">
                <div class="offer-banner w-full">
                    <img class="rounded-t-lg h-40" src="{{ asset('frontend/asset') }}/images/offers/picture1.png" alt="">
                </div>
                <div class="offer-short-desc p-2 text-center w-full flex flex-col my-auto">
                    <h2 class="text-lg font-bold">This is offer Title</h2>
                    <p class="text-sm">This is offer short description</p>
                </div>
            </div>
            <div class="offer-group flex w-full bg-gray-200 rounded-lg border-solid border-1 border-[#ff9900] shadow h-full ">
                <div class="offer-banner w-full">
                    <img class="rounded-t-lg h-40" src="{{ asset('frontend/asset') }}/images/offers/picture1.png" alt="">
                </div>
                <div class="offer-short-desc p-2 text-center w-full flex flex-col my-auto">
                    <h2 class="text-lg font-bold">This is offer Title</h2>
                    <p class="text-sm">This is offer short description</p>
                </div>
            </div>
            {{-- <div class="offer-group flex w-full bg-gray-200 rounded-lg border-solid border-1 border-[#ff9900] shadow h-full">
                <div class="offer-banner w-full">
                    <img class="rounded-t-lg w-40 h-40" src="{{ asset('frontend/asset') }}/images/offers/picture1.png" alt="">
                </div>
                <div class="offer-short-desc p-2 text-center w-full flex flex-col my-auto">
                    <h2 class="text-lg font-bold">This is offer Title</h2>
                    <p class="text-sm">This is offer short description</p>
                </div>
            </div> --}}
        </section>
        <section id="separator"
            class="bg-[#4285f4ff] my-5 max-w-screen-md xl:max-w-screen-xl mx-auto shadow rounded-md">
            <div class="package-title-area flex gap-3 justify-center items-center py-1">
                <img class="w-9" src="{{ asset('frontend/asset') }}/images/basic/tour-package-logo.png" alt="">
                <h2 class="text-md font-bold text-white">LATEST TOUR PACKAGES</h2>
                <img class="w-9" src="{{ asset('frontend/asset') }}/images/basic/tour-package-logo.png" alt="">
            </div>
        </section>
        <section id="tour-package-area" class="grid gap-3 grid-cols-1 md:grid-cols-3 lg:grid-cols-4 max-w-screen-md xl:max-w-screen-xl bg-white shadow mx-auto w-full p-4 rounded-md">
            <div class="package-card w-full bg-gray-200 rounded-lg border-solid border-1 border-[#ff9900] shadow h-80">
                <a href="">
                    <div class="package-banner w-full h-3/4">
                        <img class="rounded-t-lg w-full h-full" src="{{ asset('frontend/asset') }}/images/tour-packages/tour-package.png" alt="">
                    </div>
                    <div class="package-body">
                        <div class="package-short-desc p-2">
                            <h3 class="text-sm font-bold">This is package</h3>
                        </div>
                        <div class="package-price-duration flex justify-between px-2">
                            <p class="bg-indigo-900 text-white text-xs rounded-md p-1">6 Nights/7 Days</p>
                            <p class="bg-indigo-900 text-white text-xs rounded-md p-1">5000 BDT/per-person</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="package-card w-full bg-gray-200 rounded-lg border-solid border-1 border-[#ff9900] shadow h-80">
                <a href="">
                    <div class="package-banner w-full h-3/4">
                        <img class="rounded-t-lg w-full h-full" src="{{ asset('frontend/asset') }}/images/tour-packages/tour-package.png" alt="">
                    </div>
                    <div class="package-body">
                        <div class="package-short-desc p-2">
                            <h3 class="text-sm font-bold">This is package</h3>
                        </div>
                        <div class="package-price-duration flex justify-between px-2">
                            <p class="bg-indigo-900 text-white text-xs rounded-md p-1">6 Nights/7 Days</p>
                            <p class="bg-indigo-900 text-white text-xs rounded-md p-1">5000 BDT/per-person</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="package-card w-full bg-gray-200 rounded-lg border-solid border-1 border-[#ff9900] shadow h-80">
                <a href="">
                    <div class="package-banner w-full h-3/4">
                        <img class="rounded-t-lg w-full h-full" src="{{ asset('frontend/asset') }}/images/tour-packages/tour-package.png" alt="">
                    </div>
                    <div class="package-body">
                        <div class="package-short-desc p-2">
                            <h3 class="text-sm font-bold">This is package</h3>
                        </div>
                        <div class="package-price-duration flex justify-between px-2">
                            <p class="bg-indigo-900 text-white text-xs rounded-md p-1">6 Nights/7 Days</p>
                            <p class="bg-indigo-900 text-white text-xs rounded-md p-1">5000 BDT/per-person</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="package-card w-full bg-gray-200 rounded-lg border-solid border-1 border-[#ff9900] shadow h-80">
                <a href="">
                    <div class="package-banner w-full h-3/4">
                        <img class="rounded-t-lg w-full h-full" src="{{ asset('frontend/asset') }}/images/tour-packages/tour-package.png" alt="">
                    </div>
                    <div class="package-body">
                        <div class="package-short-desc p-2">
                            <h3 class="text-sm font-bold">This is package</h3>
                        </div>
                        <div class="package-price-duration flex justify-between px-2">
                            <p class="bg-indigo-900 text-white text-xs rounded-md p-1">6 Nights/7 Days</p>
                            <p class="bg-indigo-900 text-white text-xs rounded-md p-1">5000 BDT/per-person</p>
                        </div>
                    </div>
                </a>
            </div>
            {{-- <div class="package-card w-full bg-gray-200 rounded-lg border-solid border-1 border-[#ff9900] shadow h-80">
                <div class="package-banner w-full h-3/4">
                    <img class="rounded-t-lg w-full h-full" src="{{ asset('frontend/asset') }}/images/tour-packages/tour-package.png" alt="">
                </div>
                <div class="package-body">
                    <div class="package-short-desc p-2">
                        <h3 class="text-sm font-bold">This is package</h3>
                    </div>
                    <div class="package-price-duration flex justify-between">
                        <p class="bg-indigo-900 text-white text-xs rounded-md p-1">6 Nights/7 Days</p>
                        <p class="bg-indigo-900 text-white text-xs rounded-md p-1">5000 BDT/per-person</p>
                    </div>
                </div>
            </div> --}}
        </section>
        <section id="separator"
            class="bg-[#f9b660ff] my-5 max-w-screen-md xl:max-w-screen-xl mx-auto shadow rounded-md">
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