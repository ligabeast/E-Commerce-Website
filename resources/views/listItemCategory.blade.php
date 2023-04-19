@extends('layouts.mainLayout')

@section('content')
    <div class="py-5 px-10 border-t border-black flex flex-col space-y-14 mx-auto max-w-6xl">
        <p class="text-3xl font-semibold">Angebot starten</p>
        <form method="get" class="flex space-x-5 relative w-full" action="/sell/set_article/category">
            <input placeholder="X" id="SearchBar" name="category" type="text"class="peer placeholder-transparent border-b border-gray-500 text-lg outline-0 p-4 w-3/4">
            <div id="suggestions" class="absolute overflow-hidden bottom-0 bg-white shadow-2xl h-fit z-50flex flex-col rounded-b-xl w-64 top-16 -left-5 space-y-2">
            </div>
            <label for="SearchBar" class="pointer-events-none absolute peer-placeholder-shown:top-4 peer-placeholder-shown:-left-1 peer-placeholder-shown:text-gray-400 text-gray-500 duration-300 peer-placeholder-shown:font-medium font-semibold -top-2 -left-5 transition-all text-lg">Wählen Sie eine Kategorie</label>
            <button type="submit" id="SearchButton" class="bg-zinc-400 h-16 p-5 rounded-full w-1/4 flex justify-center items-center">
                <img class="h-4" src="{{asset('images/SearchIcon.png')}}">
            </button>
        </form>
        <div class="flex flex-col md:space-x-5 md:space-y-0 space-y-5 md:flex-row mx-auto">
            <div class="bg-red-600 md:max-w-xs w-full md:max-h-96 md:h-auto h-60 md:flex-col items-end flex items-center md:items-end justify-between rounded-xl p-6">
                <p class="font-bold text-white text-2xl">Geben Sie im Suchfeld oben Suchbegriffe wie Marke, Modell oder weitere Details (ISBN, MPN, EAN) ein</p>
                <img class="w-32" src="{{asset('images/Airforce.png')}}">
            </div>
            <div class="bg-teal-200 md:max-w-xs w-full md:max-h-96 md:h-auto h-60 md:flex-col items-end flex items-center md:items-end justify-between rounded-xl p-6">
                <p class="font-bold text-2xl">Wählen Sie aus möglichen Übereinstimmungen aus, um Ihr Angebot zu optimieren</p>
                <img class="w-32" src="{{asset('images/Iphone.png')}}">
            </div>
            <div class="bg-yellow-400 md:max-w-xs w-full md:max-h-96 md:h-auto h-60 md:flex-col items-center md:items-end items-end flex justify-between rounded-xl p-6">
                <p class="font-bold text-2xl">Vorschau nutzen, Angebot bearbeiten und dann einstellen</p>
                <img class="w-32" src="{{asset('images/Handtasche.png')}}">
            </div>

        </div>
    </div>
    <script>
        const Categorys = {!! json_encode($categorys->toArray()) !!};
        Categorys.sort((a,b) => a.name.localeCompare(b.name));
    </script>
    <script src="{{asset('scripts/listItemCategory.js')}}"></script>
@endsection
