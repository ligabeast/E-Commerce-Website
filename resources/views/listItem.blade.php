@extends('layouts.mainLayout')

@section('content')
    <form action="/sell/set_article/list" method="post" class="p-10 flex flex-col wrap space-y-5 border-t-2 border-black my-5">
        {{ csrf_field() }}
        <div class="flex-col flex md:flex-row space-y-5 md:space-y-0 md:space-x-5">
            <div id="imageUpload" class="md:w-3/4 w-full h-64 flex items-center flex-col justify-center rounded-xl border-dashed select-none border border-blue-500">
                <img class="w-10" src="{{asset('images/Picture.png')}}">
                <p class="w-20 text-center">Fotos hochladen</p>
                <p class="text-gray-400 text-sm">oder per Drag & Drop</p>
            </div>
            <div id="videoUpload" class="md:w-1/4 w-full h-32 md:h-64 items-center justify-center flex items-center flex-col justify-center rounded-xl border-dashed border border-blue-500">
                <img class="w-10" src="{{asset('images/Video.png')}}">
                <p class="w-20 text-center">Videos hochladen</p>
                <p class="text-gray-400 text-sm">oder per Drag & Drop</p>
            </div>
        </div>
        <p class="text-2xl font-semibold">Vorschau: (max: 5Bilder)</p>
        <div id="dropZone" class="flex gap-5 flex-wrap">

        </div>
        <div class="flex flex-col space-y-2">
            <p class="text-lg font-semibold">Wählen Sie den Artikelzustand aus:</p>
            <div class="flex flex-row">
                <input class="w-8" required type="radio" id="Neu" value="Neu" name="state">
                <label for="Neu">Neu</label>
            </div>
            <div class="flex flex-row">
                <input class="w-8" required type="radio" id="Gebraucht" value="Gebraucht" name="state">
                <label for="Gebraucht">Gebraucht</label>
            </div>
        </div>
        <div class="flex flex-col space-y-6 py-5">
            <div class="relative">
                <input required name="title" id="Angebotstitel" class="placeholder-transparent peer border border-black text-lg rounded-xl px-5 py-3 w-full outline-0" placeholder="Titel">
                <label for="Titel" class="text-black font-bold cursor-text pointer-events-none peer-placeholder-shown:top-3 peer-placeholder-shown:font-normal duration-300 transition-all peer-placeholder-shown:left-5 text-lg peer-placeholder-shown:text-gray-400 absolute -top-8 left-0">Angebotstitel</label>
            </div>
        </div>
        <div class="flex flex-col space-y-3">
            <p class="font-bold text-lg">Kategorie</p>
            <input name="category" readonly class="bg-gray-200 border border-black text-lg rounded-xl px-5 py-3 w-full outline-0" value="{{$category}}">
        </div>
        <div class="flex flex-col space-y-3">
            <p class="font-bold  text-lg">Beschreibung (max. 1000Zeichen)</p>
            <textarea required maxlength="1000" name="description" class="w-full text-lg h-64 outline-0 border-2 border-gray-400 p-5 rounded-xl resize-none"></textarea>
        </div>
        <div class="flex justify-between ">
            <div class="flex items-center space-x-5">
                <p class="font-bold text-lg">Preis:</p>
                <input required name="price" id="price" type="number" step=".01" class="bg-gray-200 border border-black text-lg rounded-xl px-5 py-3 w-32 outline-0">
            </div>
            <button id="submit" type="submit" class="relative inline-flex items-center px-12 py-3 overflow-hidden text-lg font-medium text-blue-600 border-2 border-blue-600 rounded-full hover:text-white group hover:bg-gray-50">
                <span class="absolute left-0 block w-full h-0 transition-all bg-blue-600 opacity-100 group-hover:h-full top-1/2 group-hover:top-0 duration-400 ease"></span>
                <span class="absolute right-0 flex items-center justify-start w-10 h-10 duration-300 transform translate-x-full group-hover:translate-x-0 ease">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg></span>
                <span class="relative">Einstellen</span>
            </button>
        </div>
    </form>
    <script src="{{asset('scripts/listItem.js')}}"></script>
@endsection
