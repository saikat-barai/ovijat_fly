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
        <section id="umrah-package-area" class="px-3 flex flex-col lg:flex-row gap-4 max-w-screen-md xl:max-w-screen-xl bg-white shadow mx-auto rounded-md">
            <div class="lg:w-1/3">
                <div>
                    <img class="w-full h-80 rounded-md" src="{{ asset('frontend/asset') }}/images/umrah-packages/umrah-package.png" alt="">
                </div>
                <div class="py-3 space-y-1">
                    <h3><strong>VVIP Package</strong></h3>
                    <p>0-7 Days</p>
                    <p>4 Beds , BDT 135,000 / Person</p>
                    <button class="p-2 bg-[#ffa42d] text-black rounded-lg uppercase text-sm font-semibold">Send an Inquiry</button>
                </div>
            </div>
            
            <div class="lg:w-2/3">
                <div role="tablist" aria-label="tabs" class="relative mx-auto grid grid-cols-3 md:grid-cols-5 lg:grid-cols-5 items-center bg-[#2F466A] overflow-hidden shadow-2xl shadow-900/20 transition">
                    <div class="absolute indicator my-auto top-0 bottom-0 left-0 bg-[#f9b660ff] shadow-md">
                    </div>
                    <button role="tab" aria-selected="true" aria-controls="panel-1" id="tab-1" tabindex="0"
                        class="relative block tab border-solid border-[1px] ">
                        <span class="text-white">Overview</span>
                    </button>
                    <button role="tab" aria-selected="false" aria-controls="panel-2" id="tab-2" tabindex="-1"
                        class="relative block tab border-solid border-[1px]">
                        <span class="text-white">Including</span>
                    </button>
                    <button role="tab" aria-selected="false" aria-controls="panel-3" id="tab-3" tabindex="-1"
                        class="relative block tab border-solid border-[1px]">
                        <span class="text-white">Excluding</span>
                    </button>
                    <button role="tab" aria-selected="false" aria-controls="panel-4" id="tab-4" tabindex="-1"
                        class="relative block tab border-solid border-[1px]">
                        <span class="text-white">Requirements</span>
                    </button>
                    <button role="tab" aria-selected="false" aria-controls="panel-5" id="tab-5" tabindex="-1"
                        class="relative block tab border-solid border-[1px]">
                        <span class="text-white">Terms & Conditions</span>
                    </button>
                </div>
                <div class="mt-6 relative rounded-3xl bg-purple-50">
                    <div role="tabpanel" id="panel-1" class="tab-panel p-6 transition duration-300">
                        <h2 class="text-xl font-semibold text-gray-800">First tab panel</h2>
                        <p class="mt-4 text-gray-600">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas
                            dolores voluptate temporibus, atque ab eos, delectus at ad hic voluptatem veritatis iure,
                            nulla voluptates quod nobis doloremque eaque! Perferendis, soluta.</p>
                    </div>
                    <div role="tabpanel" id="panel-2"
                        class="absolute top-0 invisible opacity-0 tab-panel p-6 transition duration-300">
                        <h2 class="text-xl font-semibold text-gray-800">Second tab panel</h2>
                        <p class="mt-4 text-gray-600">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas
                            dolores voluptate temporibus, atque ab eos, delectus at ad hic voluptatem veritatis iure,
                            nulla voluptates quod nobis doloremque eaque! Perferendis, soluta.</p>
                    </div>
                    <div role="tabpanel" id="panel-3"
                        class="absolute top-0 invisible opacity-0 tab-panel p-6 transition duration-300">
                        <h2 class="text-xl font-semibold text-gray-800">Third tab panel</h2>
                        <p class="mt-4 text-gray-600">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas
                            dolores voluptate temporibus, atque ab eos, delectus at ad hic voluptatem veritatis iure,
                            nulla voluptates quod nobis doloremque eaque! Perferendis, soluta.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
