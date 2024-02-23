@extends('master')
@section('content')
    <div>
        <section id="hero" class='bg-cover py-5 md:py-12 lg:py-20' style="background-image: url('{{ asset('frontend/asset') }}/images/basic/hero-visa-bg.png')">
            <div class="w-full text-white text-center mb-5">
                <h1 class="p-2 text-lg lg:text-4xl">YOUR VISA PARTNER</h1>
                <h2 class="lg:text-2xl">NEED A VISA?</h2>
            </div>
            <div class="bg-red-50 w-4/5 py-5 lg:py-14 px-10 max-w-screen-md xl:max-w-screen-xl mx-auto rounded-md flex flex-col md:flex-row lg:flex-row gap-4 justify-between">
                <div class="flex flex-col w-full">
                    <label for="" class="text-sm mb-2">I'm a Citizen Of</label>
                    <select name="" id="" class="px-3 py-1 rounded-md text-sm  border-2 border-sky-200">
                        <option value="">Bangladesh</option>
                        <option value="">India</option>
                        <option value="">USA</option>
                    </select>
                </div>
                <div class="flex flex-col w-full">
                    <label for="" class="text-sm mb-2">Travelling to</label>
                    <select name="" id="" class="px-3 py-1 rounded-md text-sm  border-2 border-sky-200">
                        <option value="">Bangladesh</option>
                        <option value="">India</option>
                        <option value="">USA</option>
                    </select>
                </div>
                <div class="flex flex-col w-full">
                    <label for="" class="text-sm mb-2">Visa Category</label>
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
        </section>
        <section id="separator" class="my-5 max-w-screen-md xl:max-w-screen-xl mx-auto">
            <div class="package-title-area flex gap-3 justify-center items-center py-1">
                <h2 class="text-2xl font-bold">Explore Your Visa</h2>
            </div>
        </section>
        <section id="explore-visa-area" class="px-3 max-w-screen-md xl:max-w-screen-xl mx-auto">
            <div class="grid gap-3 grid-cols-2 md:grid-cols-3 lg:grid-cols-5 text-center">
                <a href="{{ route('visa.details') }}"
                    class="relative group visa-btn bg-blue-600 flex flex-col justify-center items-center rounded-md">
                    <div class="p-3">
                        <h3 class="font-bold text-md text-white">Visa Free</h3>
                        <p class="text-xs text-white">(7 countries)</p>
                    </div>
                    <div class="absolute w-10 h-10 bg-blue-600 rotate-45 -bottom-4 -z-10 hidden group-hover:block">
                    </div>
                </a>
                <a href="{{ route('visa.details') }}"
                    class="relative group visa-btn bg-gray-300 flex flex-col justify-center items-center rounded-md">
                    <div class="p-3">
                        <h3 class="font-bold text-md text-black">Visa on Arrival</h3>
                        <p class="text-xs text-black">(7 countries)</p>
                    </div>
                    <div class="absolute w-10 h-10 bg-blue-600 rotate-45 -bottom-4 -z-10 hidden group-hover:block">
                    </div>
                </a>
                <a href="{{ route('visa.details') }}"
                    class="relative group visa-btn bg-gray-300 flex flex-col justify-center items-center rounded-md">
                    <div class="p-3">
                        <h3 class="font-bold text-md text-black">E-Visa</h3>
                        <p class="text-xs text-black">(7 countries)</p>
                    </div>
                    <div class="absolute w-10 h-10 bg-blue-600 rotate-45 -bottom-4 -z-10 hidden group-hover:block">
                    </div>
                </a>
                <a href="{{ route('visa.details') }}"
                    class="relative group visa-btn bg-gray-300 flex flex-col justify-center items-center rounded-md">
                    <div class="p-3">
                        <h3 class="font-bold text-md text-black">Fexible Submission</h3>
                        <p class="text-xs text-black">(7 countries)</p>
                    </div>
                    <div class="absolute w-10 h-10 bg-blue-600 rotate-45 -bottom-4 -z-10 hidden group-hover:block">
                    </div>
                </a>
                <a href="{{ route('visa.details') }}"
                    class="relative group visa-btn bg-gray-300 flex flex-col justify-center items-center rounded-md">
                    <div class="p-3">
                        <h3 class="font-bold text-md text-black">In-person Submission</h3>
                        <p class="text-xs text-black">(7 countries)</p>
                    </div>
                    <div class="absolute w-10 h-10 bg-blue-600 rotate-45 -bottom-4 -z-10 hidden group-hover:block">
                    </div>
                </a>
            </div>
            <div class="bg-gray-200 mt-7 p-5">
                <!-- Swiper -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide flex flex-col p-1 rounded-md text-center">
                            <a href="{{ route('flag.display') }}">
                                <img src="{{ asset('frontend/asset') }}/images/countries-flag/country (1).webp" alt="">
                            </a>
                            <p>Bangladesh</p>
                        </div>
                        <div class="swiper-slide flex flex-col p-1 rounded-md text-center">
                            <a href="{{ route('flag.display') }}">
                                <img src="{{ asset('frontend/asset') }}/images/countries-flag/country (2).webp" alt="">
                            </a>
                            <p>India</p>
                        </div>
                        <div class="swiper-slide flex flex-col p-1 rounded-md text-center">
                            <a href="{{ route('flag.display') }}">
                                <img src="{{ asset('frontend/asset') }}/images/countries-flag/country (3).webp" alt="">
                            </a>
                            <p>USA</p>
                        </div>
                        <div class="swiper-slide flex flex-col p-1 rounded-md text-center">
                            <a href="{{ route('flag.display') }}">
                                <img src="{{ asset('frontend/asset') }}/images/countries-flag/country (4).webp" alt="">
                            </a>
                            <p>Bangladesh</p>
                        </div>
                        <div class="swiper-slide flex flex-col p-1 rounded-md text-center">
                            <a href="{{ route('flag.display') }}">
                                <img src="{{ asset('frontend/asset') }}/images/countries-flag/country (5).webp" alt="">
                            </a>
                            <p>Bangladesh</p>
                        </div>
                        <div class="swiper-slide flex flex-col p-1 rounded-md text-center">
                            <a href="">
                                <img src="{{ asset('frontend/asset') }}/images/countries-flag/country (6).webp" alt="">
                            </a>
                            <p>Bangladesh</p>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </section>
        <section id="separator" class="my-5 max-w-screen-md xl:max-w-screen-xl mx-auto">
            <div class="package-title-area flex gap-3 justify-center items-center py-1">
                <h2 class="text-2xl font-bold text-black">Services</h2>
            </div>
        </section>
        <section id="services-area" class="px-2 grid gap-3 grid-cols-1 md:grid-cols-2 lg:grid-cols-2 max-w-screen-md xl:max-w-screen-xl mx-auto w-full">
            <a href="#" class="group bg-gray-100 p-4 flex rounded-lg hover:bg-blue-600">
                <div class="picture-part mr-4">
                    <i
                        class="fa-brands fa-cc-visa text-4xl bg-blue-600 group-hover:bg-gray-100 flex justify-center p-3 rounded-full"></i>
                </div>
                <div class="service-details">
                    <h3 class="font-bold text-xl group-hover:text-gray-100">Visa Consultancy</h3>
                    <p class="py-1 text-sm group-hover:text-gray-100">Provides accurate visa information and expert
                        guidance on preparing a comprehensive visa application pack.</p>
                    <p class="text-sm font-medium text-blue-500 group-hover:text-blue-200">Read More</p>
                </div>
            </a>
            <a href="#" class="group bg-gray-100 p-4 flex rounded-lg hover:bg-blue-600">
                <div class="picture-part mr-4">
                    <i
                        class="fa-brands fa-cc-visa text-4xl bg-blue-600 group-hover:bg-gray-100 flex justify-center p-3 rounded-full"></i>
                </div>
                <div class="service-details">
                    <h3 class="font-bold text-xl group-hover:text-gray-100">Visa Processing in India</h3>
                    <p class="py-1 text-sm group-hover:text-gray-100">Enables visa seekers to submit and process visas
                        from Bangladesh at the Embassies in India</p>
                    <p class="text-sm font-medium text-blue-500 group-hover:text-blue-200">Read More</p>
                </div>
            </a>
            <a href="#" class="group bg-gray-100 p-4 flex rounded-lg hover:bg-blue-600">
                <div class="picture-part mr-4">
                    <i
                        class="fa-brands fa-cc-visa text-4xl bg-blue-600 group-hover:bg-gray-100 flex justify-center p-3 rounded-full"></i>
                </div>
                <div class="service-details">
                    <h3 class="font-bold text-xl group-hover:text-gray-100">Visa Processing in Bangladesh</h3>
                    <p class="py-1 text-sm group-hover:text-gray-100">Enables visa seekers to submit and process visas
                        in Bangladesh</p>
                    <p class="text-sm font-medium text-blue-500 group-hover:text-blue-200">Read More</p>
                </div>
            </a>
            <a href="#" class="group bg-gray-100 p-4 flex rounded-lg hover:bg-blue-600">
                <div class="picture-part mr-4">
                    <i
                        class="fa-brands fa-cc-visa text-4xl bg-blue-600 group-hover:bg-gray-100 flex justify-center p-3 rounded-full"></i>
                </div>
                <div class="service-details">
                    <h3 class="font-bold text-xl group-hover:text-gray-100">E-visa Processing</h3>
                    <p class="py-1 text-sm group-hover:text-gray-100">To make lives easy for global travelers some
                        countries offer electronic visa facilites</p>
                    <p class="text-sm font-medium text-blue-500 group-hover:text-blue-200">Read More</p>
                </div>
            </a>
            <a href="#" class="group bg-gray-100 p-4 flex rounded-lg hover:bg-blue-600">
                <div class="picture-part mr-4">
                    <i
                        class="fa-brands fa-cc-visa text-4xl bg-blue-600 group-hover:bg-gray-100 flex justify-center p-3 rounded-full"></i>
                </div>
                <div class="service-details">
                    <h3 class="font-bold text-xl group-hover:text-gray-100">Visa Consultancy</h3>
                    <p class="py-1 text-sm group-hover:text-gray-100">Provides accurate visa information and expert
                        guidance on preparing a comprehensive visa application pack.</p>
                    <p class="text-sm font-medium text-blue-500 group-hover:text-blue-200">Read More</p>
                </div>
            </a>
            <a href="#" class="group bg-gray-100 p-4 flex rounded-lg hover:bg-blue-600">
                <div class="picture-part mr-4">
                    <i
                        class="fa-brands fa-cc-visa text-4xl bg-blue-600 group-hover:bg-gray-100 flex justify-center p-3 rounded-full"></i>
                </div>
                <div class="service-details">
                    <h3 class="font-bold text-xl group-hover:text-gray-100">Visa Consultancy</h3>
                    <p class="py-1 text-sm group-hover:text-gray-100">Provides accurate visa information and expert
                        guidance on preparing a comprehensive visa application pack.</p>
                    <p class="text-sm font-medium text-blue-500 group-hover:text-blue-200">Read More</p>
                </div>
            </a>
        </section>
        <section class='bg-cover mt-5' style="background-image: url('{{ asset('frontend/asset') }}/images/basic/hero-visa-bg.png')">
            <div class="max-w-screen-md xl:max-w-screen-xl mx-auto w-full">
                <h2 class="text-center font-bold text-xl md:text-3xl lg:text-4xl p-5 text-white">Visa Eligibility Checker</h2>
            </div>
            <div class="px-2 flex flex-col md:flex-row lg:flex-row gap-3 py-5 max-w-screen-md xl:max-w-screen-xl mx-auto w-full">
                <div class="left-side w-full md:w-1/2 lg:w-1/2">
                    <div class="text-white">
                        <select name="" id="" class="w-full p-3 px-5 bg-transparent border-1 border-white rounded-md">
                            <option value="">Bangladesh</option>
                            <option value="">Bangladesh</option>
                            <option value="">Bangladesh</option>
                            <option value="">Bangladesh</option>
                        </select>
                    </div>
                    <div class="p-5 bg-transparent w-full h-[300px] overflow-y-auto border-[1px] mt-5 rounded-md">
                        <div class="mb-5">
                            <h3 class="text-white font-bold text-2xl">1. What is the purpose of your visit?</h3>
                        </div>
                        <div class="text-white text-sm mb-2">
                            <input class="mr-2" type="radio" name="answer" id="right">
                            <label for="right">Tourism or Leisure</label>
                        </div>
                        <div class="text-white text-sm mb-2">
                            <input class="mr-2" type="radio" name="answer" id="right">
                            <label for="right">Tourism or Leisure</label>
                        </div>
                        <div class="text-white text-sm mb-2">
                            <input class="mr-2" type="radio" name="answer" id="right">
                            <label for="right">Tourism or Leisure</label>
                        </div>
                        <div class="text-white text-sm mb-2">
                            <input class="mr-2" type="radio" name="answer" id="right">
                            <label for="right">Tourism or Leisure</label>
                        </div>
                        <div class="text-white text-sm mb-2">
                            <input class="mr-2" type="radio" name="answer" id="right">
                            <label for="right">Tourism or Leisure</label>
                        </div>
                        <div class="text-white text-sm mb-2">
                            <input class="mr-2" type="radio" name="answer" id="right">
                            <label for="right">Tourism or Leisure</label>
                        </div>
                        <div class="text-white text-sm mb-2">
                            <input class="mr-2" type="radio" name="answer" id="right">
                            <label for="right">Tourism or Leisure</label>
                        </div>
                        <div class="text-white text-sm mb-2">
                            <input class="mr-2" type="radio" name="answer" id="right">
                            <label for="right">Tourism or Leisure</label>
                        </div>
                        <div class="text-white text-sm mb-2">
                            <input class="mr-2" type="radio" name="answer" id="right">
                            <label for="right">Tourism or Leisure</label>
                        </div>
                        <div class="text-white text-sm mb-2">
                            <input class="mr-2" type="radio" name="answer" id="right">
                            <label for="right">Tourism or Leisure</label>
                        </div>
                        <div class="text-white text-sm mb-2">
                            <input class="mr-2" type="radio" name="answer" id="right">
                            <label for="right">Tourism or Leisure</label>
                        </div>
                        <div>
                            <input class="bg-blue-400 text-white text-sm py-2 px-5 rounded-md mt-3" type="submit" value="Next">
                        </div>
                    </div>
                </div>
                <div class="right-side w-full md:w-1/2 lg:w-1/2 bg-white rounded-lg min-h-fit">
                    <div class="p-3 h-auto">

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
