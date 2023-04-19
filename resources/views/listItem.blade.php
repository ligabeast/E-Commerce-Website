@extends('layouts.mainLayout')

@section('content')
    <div class="py-5 px-10 border-t border-black flex flex-col space-y-14">
        <p class="text-3xl font-semibold">Angebot starten</p>
        <div class="flex space-x-5 relative w-full">
            <input placeholder="X" id="SearchBar" type="text"class="peer placeholder-transparent border-b border-gray-500 text-lg outline-0 p-4 w-3/4">
            <label class="pointer-events-none absolute peer-placeholder-shown:top-4 peer-placeholder-shown:-left-1 peer-placeholder-shown:text-gray-400 text-gray-500 duration-300 peer-placeholder-shown:font-medium font-semibold -top-2 -left-5 transition-all text-lg">Wählen Sie eine Kategorie</label>
            <button id="SearchButton" class="bg-zinc-400 h-16 p-5 rounded-full w-1/4 flex justify-center items-center">
                <img class="h-4" src="{{asset('images/SearchIcon.png')}}">
            </button>
        </div>
        <div class="flex flex-col md:space-x-5 md:flex-row">
            <div class="bg-red-600 w-1/3 h-96 flex-col items-end flex justify-between rounded-xl p-6">
                <p class="font-bold text-white text-2xl">Geben Sie im Suchfeld oben Suchbegriffe wie Marke, Modell oder weitere Details (ISBN, MPN, EAN) ein</p>
                <img class="w-32" src="{{asset('images/Airforce.png')}}">
            </div>
            <div class="bg-teal-200 w-1/3 h-96 flex-col items-end flex justify-between rounded-xl p-6">
                <p class="font-bold text-2xl">Wählen Sie aus möglichen Übereinstimmungen aus, um Ihr Angebot zu optimieren</p>
                <img class="w-32" src="{{asset('images/Iphone.png')}}">
            </div>
            <div class="bg-yellow-400 w-1/3 h-96 flex-col items-end flex justify-between rounded-xl p-6">
                <p class="font-bold text-2xl">Vorschau nutzen, Angebot bearbeiten und dann einstellen</p>
                <img class="w-32" src="{{asset('images/Handtasche.png')}}">
            </div>

        </div>
    </div>
    <script src="{{asset('scripts/listItem.js')}}"></script>
@endsection
