@extends('layouts.mainLayout')

@section('content')
    <input type="text" hidden id="user_id" value="{{Auth::id()}}">
    <div class="p-5 w-full flex md:flex-row flex-col space-x-5">
        <table class="md:w-2/3 w-full">
            <thead>
                <tr class="border-b-2 border-black">
                    <td>Artikel</td>
                    <td class="w-76">Preis</td>
                </tr>
            </thead>
            <tbody>
            @foreach($items as $item)
                <tr>
                    <td class="flex space-x-2 p-4">
                        <img
                            src="{{asset('/images/Sample1.jpg')}}"
                            class="h-28 rounded-xl"
                        />
                        <div class="flex flex-col justify-between ">
                            <a class="font-medium text-lg hover"
                            >{{$item->name}}</a
                            >
                            <div class="w-full">
                                <input id="{{$item->id}}" class="float-right inline priceCheckbox" type="checkbox">
                            </div>
                            <div>
                                <p class="text-green-600 text-sm">Auf Lager</p>
                                <p class="text-sm">Voraussichtliche Ankunfszeit: 18.04.2023</p>
                                <a id="{{$item->id}}" class="hover:cursor-pointer hover:text-blue-600 underline text-blue-500 removeItem">Entfernen aus Warenkorb</a>
                            </div>
                        </div>
                    </td>
                    <td class="w-76">
                        <p id="price_{{$item->id}}" class="text-lg font-semibold">{{$item->price / 100}}€</p>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="flex flex-col w-1/3">
            <p class="text-lg">Summe (9 Artikel): <span id="sumBalanceLabel" class="text-xl font-semibold">0€</span></p>
            <a href="#" class="relative inline-flex hover:shadow-2xl w-56 items-center hover:border-2 border-white justify-center px-10 py-3 overflow-hidden font-mono font-medium tracking-tighter text-white bg-neutral-400 rounded-lg group">
                <span class="absolute w-0 h-0 transition-all duration-500 ease-out bg-blue-500 rounded-full group-hover:w-full group-hover:h-56"></span>
                <span class="absolute inset-0 w-full h-full -mt-1 rounded-lg opacity-30 bg-gradient-to-b from-transparent via-transparent to-gray-700"></span>
                <span class="relative text-lg">Zur Kasse</span>
            </a>
        </div>
    </div>
    <script src="{{asset('scripts/shoppingcart.js')}}"></script>
@endsection
