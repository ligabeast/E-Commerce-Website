@extends('layouts.mainLayout')

@section('content')
    <div class="z-30 relative">
        <div class="swiperHintergrund relative">
            <div class="swiper-wrapper absolute max-w-full h-auto">
                <img class="swiper-slide opacity-30" src="{{asset('images/Sample1.jpg')}}" />
                <img class="swiper-slide opacity-30" src="{{asset('images/Sample2.jpg')}}" />
                <img class="swiper-slide opacity-30" src="{{asset('images/Sample3.jpg')}}" />
                <img class="swiper-slide opacity-30" src="{{asset('images/Sample4.jpg')}}" />
                <img class="swiper-slide opacity-30" src="{{asset('images/Sample5.jpg')}}" />
                <img class="swiper-slide opacity-30" src="{{asset('images/Sample6.jpg')}}" />
            </div>
        </div>
        <div class="swiper mx-10 rounded-b-xl bg-black bg-opacity-10">
            <p
                class="font-semibold text-center my-auto text-blue-600 text-4xl mx-4"
            >
                Sommersale bis zu <span class="text-6xl">50%</span>
            </p>
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide mb-10">
                    <div class="flex items-center flex-wrap justify-center">
                        <div
                            class="p-4 bg-black bg-opacity-40 m-2 border-black border w-fit h-96 rounded-xl shadow-xl flex flex-col gap-2"
                        >
                            <img
                                src="{{asset('images/articel1.jpg')}}"
                                class="w-52 h-52 rounded-xl hover:scale-110 transition"
                            />
                            <p class="font-semibold text-xl mx-auto">
                                Katze zu verkaufen
                            </p>
                            <p class="text-sm">
                                Zustand:
                                <span class="font-semibold text-base">gebraucht</span>
                            </p>
                            <p class="text-sm">
                                Preis: <span class="font-semibold text-base">190€</span>
                            </p>
                        </div>
                        <div
                            class="p-4 bg-black bg-opacity-40 m-2 border-black border w-fit h-96 rounded-xl shadow-xl flex flex-col gap-2"
                        >
                            <img
                                src="{{asset('images/articel1.jpg')}}"
                                class="w-52 h-52 rounded-xl hover:scale-110 transition"
                            />
                            <p class="font-semibold text-xl mx-auto">
                                Katze zu verkaufen
                            </p>
                            <p class="text-sm">
                                Zustand:
                                <span class="font-semibold text-base">gebraucht</span>
                            </p>
                            <p class="text-sm">
                                Preis: <span class="font-semibold text-base">190€</span>
                            </p>
                        </div>
                        <div
                            class="p-4 bg-black bg-opacity-40 m-2 border-black border w-fit h-96 rounded-xl shadow-xl flex flex-col gap-2"
                        >
                            <img
                                src="{{asset('images/articel1.jpg')}}"
                                class="w-52 h-52 rounded-xl hover:scale-110 transition"
                            />
                            <p class="font-semibold text-xl mx-auto">
                                Katze zu verkaufen
                            </p>
                            <p class="text-sm">
                                Zustand:
                                <span class="font-semibold text-base">gebraucht</span>
                            </p>
                            <p class="text-sm">
                                Preis: <span class="font-semibold text-base">190€</span>
                            </p>
                        </div>
                        <div
                            class="p-4 bg-black bg-opacity-40 m-2 border-black border w-fit h-96 rounded-xl shadow-xl flex flex-col gap-2"
                        >
                            <img
                                src="{{asset('images/articel1.jpg')}}"
                                class="w-52 h-52 rounded-xl hover:scale-110 transition"
                            />
                            <p class="font-semibold text-xl mx-auto">
                                Katze zu verkaufen
                            </p>
                            <p class="text-sm">
                                Zustand:
                                <span class="font-semibold text-base">gebraucht</span>
                            </p>
                            <p class="text-sm">
                                Preis: <span class="font-semibold text-base">190€</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide mb-10">
                    <div class="flex items-center flex-wrap justify-center">
                        <div
                            class="p-4 bg-black bg-opacity-40 m-2 border-black border w-fit h-96 rounded-xl shadow-xl flex flex-col gap-2"
                        >
                            <img
                                src="{{asset('images/articel1.jpg')}}"
                                class="w-52 h-52 rounded-xl hover:scale-110 transition"
                            />
                            <p class="font-semibold text-xl mx-auto">
                                Katze zu verkaufen
                            </p>
                            <p class="text-sm">
                                Zustand:
                                <span class="font-semibold text-base">gebraucht</span>
                            </p>
                            <p class="text-sm">
                                Preis: <span class="font-semibold text-base">190€</span>
                            </p>
                        </div>
                        <div
                            class="p-4 bg-black bg-opacity-40 m-2 border-black border w-fit h-96 rounded-xl shadow-xl flex flex-col gap-2"
                        >
                            <img
                                src="{{asset('images/articel1.jpg')}}"
                                class="w-52 h-52 rounded-xl hover:scale-110 transition"
                            />
                            <p class="font-semibold text-xl mx-auto">
                                Katze zu verkaufen
                            </p>
                            <p class="text-sm">
                                Zustand:
                                <span class="font-semibold text-base">gebraucht</span>
                            </p>
                            <p class="text-sm">
                                Preis: <span class="font-semibold text-base">190€</span>
                            </p>
                        </div>
                        <div
                            class="p-4 bg-black bg-opacity-40 m-2 border-black border w-fit h-96 rounded-xl shadow-xl flex flex-col gap-2"
                        >
                            <img
                                src="{{asset('images/articel1.jpg')}}"
                                class="w-52 h-52 rounded-xl hover:scale-110 transition"
                            />
                            <p class="font-semibold text-xl mx-auto">
                                Katze zu verkaufen
                            </p>
                            <p class="text-sm">
                                Zustand:
                                <span class="font-semibold text-base">gebraucht</span>
                            </p>
                            <p class="text-sm">
                                Preis: <span class="font-semibold text-base">190€</span>
                            </p>
                        </div>
                        <div
                            class="p-4 bg-black bg-opacity-40 m-2 border-black border w-fit h-96 rounded-xl shadow-xl flex flex-col gap-2"
                        >
                            <img
                                src="{{asset('images/articel1.jpg')}}"
                                class="w-52 h-52 rounded-xl hover:scale-110 transition"
                            />
                            <p class="font-semibold text-xl mx-auto">
                                Katze zu verkaufen
                            </p>
                            <p class="text-sm">
                                Zustand:
                                <span class="font-semibold text-base">gebraucht</span>
                            </p>
                            <p class="text-sm">
                                Preis: <span class="font-semibold text-base">190€</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide mb-10">
                    <div class="flex items-center flex-wrap justify-center">
                        <div
                            class="p-4 bg-black bg-opacity-40 m-2 border-black border w-fit h-96 rounded-xl shadow-xl flex flex-col gap-2"
                        >
                            <img
                                src="{{asset('images/articel1.jpg')}}"
                                class="w-52 h-52 rounded-xl hover:scale-110 transition"
                            />
                            <p class="font-semibold text-xl mx-auto">
                                Katze zu verkaufen
                            </p>
                            <p class="text-sm">
                                Zustand:
                                <span class="font-semibold text-base">gebraucht</span>
                            </p>
                            <p class="text-sm">
                                Preis: <span class="font-semibold text-base">190€</span>
                            </p>
                        </div>
                        <div
                            class="p-4 bg-black bg-opacity-40 m-2 border-black border w-fit h-96 rounded-xl shadow-xl flex flex-col gap-2"
                        >
                            <img
                                src="{{asset('images/articel1.jpg')}}"
                                class="w-52 h-52 rounded-xl hover:scale-110 transition"
                            />
                            <p class="font-semibold text-xl mx-auto">
                                Katze zu verkaufen
                            </p>
                            <p class="text-sm">
                                Zustand:
                                <span class="font-semibold text-base">gebraucht</span>
                            </p>
                            <p class="text-sm">
                                Preis: <span class="font-semibold text-base">190€</span>
                            </p>
                        </div>
                        <div
                            class="p-4 bg-black bg-opacity-40 m-2 border-black border w-fit h-96 rounded-xl shadow-xl flex flex-col gap-2"
                        >
                            <img
                                src="{{asset('images/articel1.jpg')}}"
                                class="w-52 h-52 rounded-xl hover:scale-110 transition"
                            />
                            <p class="font-semibold text-xl mx-auto">
                                Katze zu verkaufen
                            </p>
                            <p class="text-sm">
                                Zustand:
                                <span class="font-semibold text-base">gebraucht</span>
                            </p>
                            <p class="text-sm">
                                Preis: <span class="font-semibold text-base">190€</span>
                            </p>
                        </div>
                        <div
                            class="p-4 bg-black bg-opacity-40 m-2 border-black border w-fit h-96 rounded-xl shadow-xl flex flex-col gap-2"
                        >
                            <img
                                src="{{asset('images/articel1.jpg')}}"
                                class="w-52 h-52 rounded-xl hover:scale-110 transition"
                            />
                            <p class="font-semibold text-xl mx-auto">
                                Katze zu verkaufen
                            </p>
                            <p class="text-sm">
                                Zustand:
                                <span class="font-semibold text-base">gebraucht</span>
                            </p>
                            <p class="text-sm">
                                Preis: <span class="font-semibold text-base">190€</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <div class="swiper m-10 rounded-xl rounded-b-xl bg-black bg-opacity-10">
            <p
                class="font-semibold text-center my-auto text-blue-600 text-4xl mx-4"
            >
                Technik im Angebot
            </p>
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide mb-10">
                    <div class="flex items-center flex-wrap justify-center">
                        <div
                            class="p-4 bg-black bg-opacity-40 m-2 border-black border w-fit h-96 rounded-xl shadow-xl flex flex-col gap-2"
                        >
                            <img
                                src="{{asset('images/articel1.jpg')}}"
                                class="w-52 h-52 rounded-xl hover:scale-110 transition"
                            />
                            <p class="font-semibold text-xl mx-auto">
                                Katze zu verkaufen
                            </p>
                            <p class="text-sm">
                                Zustand:
                                <span class="font-semibold text-base">gebraucht</span>
                            </p>
                            <p class="text-sm">
                                Preis: <span class="font-semibold text-base">190€</span>
                            </p>
                        </div>
                        <div
                            class="p-4 bg-black bg-opacity-40 m-2 border-black border w-fit h-96 rounded-xl shadow-xl flex flex-col gap-2"
                        >
                            <img
                                src="{{asset('images/articel1.jpg')}}"
                                class="w-52 h-52 rounded-xl hover:scale-110 transition"
                            />
                            <p class="font-semibold text-xl mx-auto">
                                Katze zu verkaufen
                            </p>
                            <p class="text-sm">
                                Zustand:
                                <span class="font-semibold text-base">gebraucht</span>
                            </p>
                            <p class="text-sm">
                                Preis: <span class="font-semibold text-base">190€</span>
                            </p>
                        </div>
                        <div
                            class="p-4 bg-black bg-opacity-40 m-2 border-black border w-fit h-96 rounded-xl shadow-xl flex flex-col gap-2"
                        >
                            <img
                                src="{{asset('images/articel1.jpg')}}"
                                class="w-52 h-52 rounded-xl hover:scale-110 transition"
                            />
                            <p class="font-semibold text-xl mx-auto">
                                Katze zu verkaufen
                            </p>
                            <p class="text-sm">
                                Zustand:
                                <span class="font-semibold text-base">gebraucht</span>
                            </p>
                            <p class="text-sm">
                                Preis: <span class="font-semibold text-base">190€</span>
                            </p>
                        </div>
                        <div
                            class="p-4 bg-black bg-opacity-40 m-2 border-black border w-fit h-96 rounded-xl shadow-xl flex flex-col gap-2"
                        >
                            <img
                                src="{{asset('images/articel1.jpg')}}"
                                class="w-52 h-52 rounded-xl hover:scale-110 transition"
                            />
                            <p class="font-semibold text-xl mx-auto">
                                Katze zu verkaufen
                            </p>
                            <p class="text-sm">
                                Zustand:
                                <span class="font-semibold text-base">gebraucht</span>
                            </p>
                            <p class="text-sm">
                                Preis: <span class="font-semibold text-base">190€</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide mb-10">
                    <div class="flex items-center flex-wrap justify-center">
                        <div
                            class="p-4 bg-black bg-opacity-40 m-2 border-black border w-fit h-96 rounded-xl shadow-xl flex flex-col gap-2"
                        >
                            <img
                                src="{{asset('images/articel1.jpg')}}"
                                class="w-52 h-52 rounded-xl hover:scale-110 transition"
                            />
                            <p class="font-semibold text-xl mx-auto">
                                Katze zu verkaufen
                            </p>
                            <p class="text-sm">
                                Zustand:
                                <span class="font-semibold text-base">gebraucht</span>
                            </p>
                            <p class="text-sm">
                                Preis: <span class="font-semibold text-base">190€</span>
                            </p>
                        </div>
                        <div
                            class="p-4 bg-black bg-opacity-40 m-2 border-black border w-fit h-96 rounded-xl shadow-xl flex flex-col gap-2"
                        >
                            <img
                                src="{{asset('images/articel1.jpg')}}"
                                class="w-52 h-52 rounded-xl hover:scale-110 transition"
                            />
                            <p class="font-semibold text-xl mx-auto">
                                Katze zu verkaufen
                            </p>
                            <p class="text-sm">
                                Zustand:
                                <span class="font-semibold text-base">gebraucht</span>
                            </p>
                            <p class="text-sm">
                                Preis: <span class="font-semibold text-base">190€</span>
                            </p>
                        </div>
                        <div
                            class="p-4 bg-black bg-opacity-40 m-2 border-black border w-fit h-96 rounded-xl shadow-xl flex flex-col gap-2"
                        >
                            <img
                                src="{{asset('images/articel1.jpg')}}"
                                class="w-52 h-52 rounded-xl hover:scale-110 transition"
                            />
                            <p class="font-semibold text-xl mx-auto">
                                Katze zu verkaufen
                            </p>
                            <p class="text-sm">
                                Zustand:
                                <span class="font-semibold text-base">gebraucht</span>
                            </p>
                            <p class="text-sm">
                                Preis: <span class="font-semibold text-base">190€</span>
                            </p>
                        </div>
                        <div
                            class="p-4 bg-black bg-opacity-40 m-2 border-black border w-fit h-96 rounded-xl shadow-xl flex flex-col gap-2"
                        >
                            <img
                                src="{{asset('images/articel1.jpg')}}"
                                class="w-52 h-52 rounded-xl hover:scale-110 transition"
                            />
                            <p class="font-semibold text-xl mx-auto">
                                Katze zu verkaufen
                            </p>
                            <p class="text-sm">
                                Zustand:
                                <span class="font-semibold text-base">gebraucht</span>
                            </p>
                            <p class="text-sm">
                                Preis: <span class="font-semibold text-base">190€</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide mb-10">
                    <div class="flex items-center flex-wrap justify-center">
                        <div
                            class="p-4 bg-black bg-opacity-40 m-2 border-black border w-fit h-96 rounded-xl shadow-xl flex flex-col gap-2"
                        >
                            <img
                                src="{{asset('images/articel1.jpg')}}"
                                class="w-52 h-52 rounded-xl hover:scale-110 transition"
                            />
                            <p class="font-semibold text-xl mx-auto">
                                Katze zu verkaufen
                            </p>
                            <p class="text-sm">
                                Zustand:
                                <span class="font-semibold text-base">gebraucht</span>
                            </p>
                            <p class="text-sm">
                                Preis: <span class="font-semibold text-base">190€</span>
                            </p>
                        </div>
                        <div
                            class="p-4 bg-black bg-opacity-40 m-2 border-black border w-fit h-96 rounded-xl shadow-xl flex flex-col gap-2"
                        >
                            <img
                                src="{{asset('images/articel1.jpg')}}"
                                class="w-52 h-52 rounded-xl hover:scale-110 transition"
                            />
                            <p class="font-semibold text-xl mx-auto">
                                Katze zu verkaufen
                            </p>
                            <p class="text-sm">
                                Zustand:
                                <span class="font-semibold text-base">gebraucht</span>
                            </p>
                            <p class="text-sm">
                                Preis: <span class="font-semibold text-base">190€</span>
                            </p>
                        </div>
                        <div
                            class="p-4 bg-black bg-opacity-40 m-2 border-black border w-fit h-96 rounded-xl shadow-xl flex flex-col gap-2"
                        >
                            <img
                                src="{{asset('images/articel1.jpg')}}"
                                class="w-52 h-52 rounded-xl hover:scale-110 transition"
                            />
                            <p class="font-semibold text-xl mx-auto">
                                Katze zu verkaufen
                            </p>
                            <p class="text-sm">
                                Zustand:
                                <span class="font-semibold text-base">gebraucht</span>
                            </p>
                            <p class="text-sm">
                                Preis: <span class="font-semibold text-base">190€</span>
                            </p>
                        </div>
                        <div
                            class="p-4 bg-black bg-opacity-40 m-2 border-black border w-fit h-96 rounded-xl shadow-xl flex flex-col gap-2"
                        >
                            <img
                                src="{{asset('images/articel1.jpg')}}"
                                class="w-52 h-52 rounded-xl hover:scale-110 transition"
                            />
                            <p class="font-semibold text-xl mx-auto">
                                Katze zu verkaufen
                            </p>
                            <p class="text-sm">
                                Zustand:
                                <span class="font-semibold text-base">gebraucht</span>
                            </p>
                            <p class="text-sm">
                                Preis: <span class="font-semibold text-base">190€</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <p class="text-4xl text-center font-semibold my-6">Suche nach Kategorien</p>
        <div class="z-40 relative flex flex-wrap gap-5 items-center justify-center m-4">
            <a class="group relative flex items-center justify-center">
                <img src="{{asset('images/Auto.jpg')}}" class=" inline-block rounded-full w-60 h-60 hover:outline transition group-hover:cursor-pointer">
                <p class="pointer-events-none absolute text-2xl font-extrabold">
                    Auto
                </p>
            </a>
            <a class="group relative flex items-center justify-center">
                <img src="{{asset('images/Garten.jpg')}}" class=" inline-block rounded-full w-60 h-60 hover:outline transition group-hover:cursor-pointer">
                <p class="pointer-events-none absolute text-2xl font-extrabold">
                    Garten
                </p>
            </a>
            <div class="group relative flex items-center justify-center">
                <img src="{{asset('images/Baby.jpg')}}" class=" inline-block rounded-full w-60 h-60 hover:outline transition group-hover:cursor-pointer">
                <p class="pointer-events-none absolute text-2xl font-extrabold">
                    Baby
                </p>
            </div>
            <a class="group relative flex items-center justify-center">
                <img src="{{asset('images/Bücher.jpg')}}" class=" inline-block rounded-full w-60 h-60 hover:outline transition group-hover:cursor-pointer">
                <p class="pointer-events-none absolute text-2xl font-extrabold">
                    Bücher
                </p>
            </a>
            <a class="group relative flex items-center justify-center">
                <img src="{{asset('images/Beauty.jpg')}}" class=" inline-block rounded-full w-60 h-60 hover:outline transition group-hover:cursor-pointer">
                <p class="pointer-events-none absolute text-2xl font-extrabold">
                    Beauty
                </p>
            </a>
            <a class="group relative flex items-center justify-center">
                <img src="{{asset('images/Technik.jpg')}}" class=" inline-block rounded-full w-60 h-60 hover:outline transition group-hover:cursor-pointer">
                <p class="pointer-events-none absolute text-2xl font-extrabold">
                    Technik
                </p>
            </a>
            <a class="group relative flex items-center justify-center">
                <img src="{{asset('images/Computer.jpg')}}" class=" inline-block rounded-full w-60 h-60 hover:outline transition group-hover:cursor-pointer">
                <p class="pointer-events-none absolute text-2xl font-extrabold">
                    Computer
                </p>
            </a>
            <a class="group relative flex items-center justify-center">
                <img src="{{asset('images/Smartphone.jpg')}}" class=" inline-block rounded-full w-60 h-60 hover:outline transition group-hover:cursor-pointer">
                <p class="pointer-events-none absolute text-2xl font-extrabold">
                    Smartphone
                </p>
            </a>
            <a class="group relative flex items-center justify-center">
                <img src="{{asset('images/Heimwerk.jpg')}}" class=" inline-block rounded-full w-60 h-60 hover:outline transition group-hover:cursor-pointer">
                <p class="pointer-events-none absolute text-2xl font-extrabold">
                    Heimwerk
                </p>
            </a>
        </div>
    </div>
@endsection
