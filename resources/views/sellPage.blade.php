@extends('layouts.mainLayout')

@section('content')
    <div class="h-full w-full p-5 flex flex-col space-y-5">
        <p class="text-4xl font-semibold">Mein abalo: Verkaufen - Übersicht</p>
        <div class="flex justify-center gap-x-14">
            <div class="flex flex-col items-center  w-10 text-center">
                <p class="text-4xl">{{$quantityActive}}</p>
                <a class="text-blue-500 font-semibold hover:cursor-pointer hover:text-blue-800">Aktiv</a>
            </div>
            <div class="flex flex-col items-center  w-10 text-center">
                <p class="text-4xl">0</p>
                <a class="text-blue-500 font-semibold hover:cursor-pointer hover:text-blue-800">Verkauft</a>
            </div>
            <div class="flex flex-col items-center w-10 text-center">
                <p class="text-4xl">0</p>
                <a class="text-blue-500 font-semibold hover:cursor-pointer hover:text-blue-800">Nicht verkauft</a>
            </div>
            <div class="flex flex-col space-y-3 items-center my-auto">
                <p class="text-3xl font-bold">0,00 €</p>
                <p>Gesamt für 90 Tage</p>
            </div>
            <button>
                <a href="/sell/set_article" class="relative inline-flex items-center px-12 py-3 overflow-hidden text-lg font-medium text-blue-600 border-2 border-blue-600 rounded-full hover:text-white group hover:bg-gray-50">
                    <span class="absolute left-0 block w-full h-0 transition-all bg-blue-600 opacity-100 group-hover:h-full top-1/2 group-hover:top-0 duration-400 ease"></span>
                    <span class="absolute right-0 flex items-center justify-start w-10 h-10 duration-300 transform translate-x-full group-hover:translate-x-0 ease">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg></span>
                    <span class="relative">Artikel verkaufen</span>
                </a>
            </button>
        </div>
    </div>
@endsection
