@extends('master')
@section('content')
    <div>
        <section id="hero" class='bg-cover py-5 md:py-20 lg:py-20'
            style="background-image: url('{{ asset('frontend/asset') }}/images/basic/visa-details.png')">
            <div class="bg-gray-800 w-4/5 py-7 px-6 md:px-8 lg:px-10 max-w-screen-md xl:max-w-screen-xl mx-auto rounded-md flex flex-col md:flex-row lg:flex-row gap-2 md:gap-3 lg:gap-5 justify-between">
                <div class="flex flex-col w-full">
                    <label for="" class="text-sm mb-2 text-white">I'm a Citizen Of</label>
                    <select name="" id="" class="px-3 py-1 rounded-md text-sm  border-2 border-sky-200">
                        <option value="">Bangladesh</option>
                        <option value="">India</option>
                        <option value="">USA</option>
                    </select>
                </div>
                <div class="flex flex-col w-full">
                    <label for="" class="text-sm mb-2 text-white">Travelling to</label>
                    <select name="" id="" class="px-3 py-1 rounded-md text-sm  border-2 border-sky-200">
                        <option value="">Bangladesh</option>
                        <option value="">India</option>
                        <option value="">USA</option>
                    </select>
                </div>
                <div class="flex flex-col w-full">
                    <label for="" class="text-sm mb-2 text-white">Visa Category</label>
                    <select name="" id="" class="px-3 py-1 rounded-md text-sm  border-2 border-sky-200">
                        <option value="">Bangladesh</option>
                        <option value="">India</option>
                        <option value="">USA</option>
                    </select>
                </div>
                <div class="flex flex-col w-full items-center justify-center">
                    <button
                        class="bg-gradient-to-r from-[#2042cf] to-[#579cf4] px-3 py-2 rounded-md text-white text-sm mt-5">Check
                        Requirements</button>
                </div>
            </div>
            <div class="bg-gray-800 w-4/5 py-5 mt-5 px-5 max-w-screen-md xl:max-w-screen-xl mx-auto rounded-md flex flex-col md:flex-row lg:flex-row text-center items-center gap-5 justify-between">
                <div class="flex gap-4 items-center">
                    <img class="w-16" src="{{ asset('frontend/asset') }}/images/countries-flag/country (1).webp" alt="">
                    <h3 class="text-white">Australia Visa From Bangladesh</h3>
                </div>
                <div class="flex items-center">
                    <button class="bg-white py-2 px-4 rounded-md font-bold hover:bg-gray-300">Apply Now</button>
                </div>
            </div>
            <div class=" lg:w-4/5 py-5 mt-5 px-5 max-w-screen-md xl:max-w-screen-xl mx-auto">
                <div class="available-text text-white text-center font-bold text-3xl"><strong>Available services for Albania</strong>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:flex lg:justify-between gap-2 mt-5">
                    <div class="flex gap-2 items-center bg-transparent border-solid border-[1px] border-gray-200 rounded-md p-1">
                        <img class="w-5" src="{{ asset('frontend/asset') }}/images/basic/visa-features.png" alt="">
                        <p class="text-white text-sm">E-visa Processing</p>
                    </div>
                    <div
                        class="flex gap-2 items-center bg-transparent border-solid border-[1px] border-gray-200 rounded-md p-1">
                        <img class="w-5" src="{{ asset('frontend/asset') }}/images/basic/visa-features.png" alt="">
                        <p class="text-white text-sm">E-visa Processing</p>
                    </div>
                    <div
                        class="flex gap-2 items-center bg-transparent border-solid border-[1px] border-gray-200 rounded-md p-1">
                        <img class="w-5" src="{{ asset('frontend/asset') }}/images/basic/visa-features.png" alt="">
                        <p class="text-white text-sm">E-visa Processing</p>
                    </div>
                    <div
                        class="flex gap-2 items-center bg-transparent border-solid border-[1px] border-gray-200 rounded-md p-1">
                        <img class="w-5" src="{{ asset('frontend/asset') }}/images/basic/visa-features.png" alt="">
                        <p class="text-white text-sm">E-visa Processing</p>
                    </div>
                    <div
                        class="flex gap-2 items-center bg-transparent border-solid border-[1px] border-gray-200 rounded-md p-1">
                        <img class="w-5" src="{{ asset('frontend/asset') }}/images/basic/visa-features.png" alt="">
                        <p class="text-white text-sm">E-visa Processing</p>
                    </div>
                    <div
                        class="flex gap-2 items-center bg-transparent border-solid border-[1px] border-gray-200 rounded-md p-1">
                        <img class="w-5" src="{{ asset('frontend/asset') }}/images/basic/visa-features.png" alt="">
                        <p class="text-white text-sm">E-visa Processing</p>
                    </div>
                </div>
            </div>
        </section>
        <section class='bg-cover py-3 md:py-3 lg:py-3'>
            <div class=" lg:w-4/5 p-3 max-w-screen-md xl:max-w-screen-xl mx-auto rounded-md flex flex-col md:flex-row lg:flex-row   gap-3 justify-between">
                <div class="left-part md:w-2/6 lg:w-2/6 border-solid border-[1px] h-fit">
                    <div class="bg-gradient-to-r from-[#2042cf] to-[#579cf4] p-2 flex items-center gap-2 text-white rounded-sm">
                        <input type="radio" id="basic" checked name="tapItem">
                        <label for="basic" class="text-sm">Basic Information</label>
                    </div>
                    <div class="bg-transparent p-2 flex items-center gap-2">
                        <input type="radio" id="checklist" name="tapItem">
                        <label for="checklist" class="text-sm">Checklist</label>
                    </div>
                    <div class="bg-transparent p-2 flex items-center gap-2">
                        <input type="radio" id="visa-fee" name="tapItem">
                        <label for="visa-fee" class="text-sm">Visa Fees & Proccessing Time</label>
                    </div>
                    <div class="bg-transparent p-2 flex items-center gap-2">
                        <input type="radio" id="forms" name="tapItem">
                        <label for="forms" class="text-sm">Forms & Downloads</label>
                    </div>
                    <div class="bg-transparent p-2 flex items-center gap-2">
                        <input type="radio" id="faq" name="tapItem">
                        <label for="faq" class="text-sm">FAQ</label>
                    </div>
                </div>
                <div class="right-part md:w-4/6 lg:w-4/6 border-solid border-[1px] h-fit">
                    <div class="bg-gradient-to-r from-[#3c4153] to-[#8aa8cf] rounded-sm p-2">
                        <h2 class="text-center text-md font-bold text-white">Basic Information</h2>
                    </div>
                    <div class="p-3">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas illum in nam omnis ipsam
                            doloribus iure tenetur animi officia provident, dolorem alias incidunt atque aliquam dolor
                            minima inventore minus a.</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas illum in nam omnis ipsam
                            doloribus iure tenetur animi officia provident, dolorem alias incidunt atque aliquam dolor
                            minima inventore minus a.</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas illum in nam omnis ipsam
                            doloribus iure tenetur animi officia provident, dolorem alias incidunt atque aliquam dolor
                            minima inventore minus a.</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas illum in nam omnis ipsam
                            doloribus iure tenetur animi officia provident, dolorem alias incidunt atque aliquam dolor
                            minima inventore minus a.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
