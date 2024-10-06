@extends('layout')

@section('title', 'shop')

@section('assets')
<link rel="stylesheet" href="{{ @asset('css/shop.css') }}">
@endsection()

@section('content')
<main>
    <section class="mt-20 px-6">
        <div
            class="flex flex-col w-3/4 h-full gap-5 p-2 mx-auto bg-white shadow-lg select-none sm:p-4  rounded-2xl sm:flex-row">
            <div class="bg-gray-200 h-72 sm:h-full sm:w-72 rounded-xl  ">
                <!-- جایگزین کردن عکس با اسلایدر -->
                <div class="h-full w-full rounded-xl ">
                    <div class="swiper mySwiper" style="width: 100%; height: 100%;">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col flex-1 gap-5 sm:p-2">
                <div class="flex flex-col flex-1 gap-3">
                    <div class="w-full bg-slate-950 text-yellow-50 animate-pulse h-14 rounded-2xl mt-10">
                        <h1 class="flex justify-center py-3">روکش درب پلاس</h1>
                    </div>
                    <div class="w-full h-12 bg-gray-200 text-right px-2  rounded-2xl mt-5">
                        <h3>توضیحات محصول</h3>
                    </div>
                    <div class="w-full h-8 bg-gray-200 text-right rounded-2xl px-2 mt-5">
                        <h4>امکان ارسال با </h4>
                    </div>
                    <div class="grid grid-cols-3 gap-4 mt-5">
                        <div class="h-8 bg-gray-200 rounded animate-pulse">
                        </div>
                        <div class="h-8 bg-gray-200 rounded animate-pulse">
                        </div>
                        <button
                            class="h-8 bg-gray-200 rounded hover-btn  hover:bg-gray-300 focus:outline-none focus:ring focus:ring-gray-400 focus:ring-opacity-50">
                            سفارش
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Swiper JS -->


    </section>

    <section class="flex justify-center mt-12">
        <h2 class="text-lg text-wrap" id="product-title">محصولات دیگر ما</h2>
    </section>

    <section class="flex justify-center mt-5">
        <div class="swiper-container my-slider ">
            <div class="swiper-wrapper ">
                <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-1.jpg" alt="Nature 1" />
                </div>
                <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-2.jpg" alt="Nature 2" />
                </div>
                <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-3.jpg" alt="Nature 3" />
                </div>
                <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-4.jpg" alt="Nature 4" />
                </div>
                <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-5.jpg" alt="Nature 5" />
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
</main>


<footer class="bg-white overflow-y-hidden rounded-t-2xl text-black p-4 max-w-full">
    <div class="footer footer-center">
        <div class="grid grid-flow-col gap-6 mt-8 px-2">
            <a href="/@lang('messages.lang')/about_us"
                class="link link-hover text-black hover:text-amber-300 text-lg font-bold">@lang('messages.menu_contact')</a>
            <a href="/@lang('messages.lang')/contact_us"
                class="link link-hover text-black hover:text-amber-300 text-lg font-bold">@lang('messages.menu_about')</a>
        </div>
        <div>
            <div class="flex justify-center space-x-8">
                <a href="https://wa.me/YOURNUMBER"
                    class="transition-all duration-100 ease-in-out text-black hover:-translate-y-4">
                    <i class="fab fa-whatsapp fa-2x"></i>
                </a>
                <a href="tel:YOURNUMBER"
                    class=" transition-all duration-100 ease-in-out text-black hover:-translate-y-4">
                    <i class="fas fa-phone-alt fa-2x"></i>
                </a>
                <a href="https://instagram.com/YOURUSERNAME"
                    class="transition-all duration-100 ease-in-out text-black hover:-translate-y-4">
                    <i class="fab fa-instagram fa-2x"></i>
                </a>
                <a href="https://github.com/YOURUSERNAME"
                    class="transition-all duration-100 ease-in-out text-black hover:-translate-y-4">
                    <i class="fab fa-github fa-2x"></i>
                </a>
                <a href="https://t.me/YOURUSERNAME"
                    class="transition-all duration-100 ease-in-out text-black hover:-translate-y-4">
                    <i class="fab fa-telegram-plane fa-2x"></i>
                </a>
            </div>
            <div class="flex justify-start items-center">
                <aside>
                    <p class=" hover:text-amber-200 mr-4 mt-8">
                        <!-- TODO: 2024 should be dynamic using php -->
                        @lang('messages.rights')
                    </p>
                </aside>
            </div>
        </div>
</footer>
<script src="{{ @asset('js/shop.js') }}"></script>
@endsection()