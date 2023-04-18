@extends('layouts.mainLayout')

@section('content')
    <div class="p-5 w-full flex space-x-5">
        <table class="w-2/3">
            <thead>
                <tr class="border-b-2 border-black">
                    <td>Artikel</td>
                    <td class="w-76">Preis</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="flex space-x-2 p-4">
                        <img
                            src="{{asset('/images/Sample1.jpg')}}"
                            class="h-28 rounded-xl"
                        />
                        <div class="flex flex-col justify-between ">
                            <a class="font-medium text-lg hover"
                            >Strickmaschine KH5959 met Doppelbett KR850</a
                            >
                            <div class="w-full">
                                <input id="1" class="float-right inline priceCheckbox" type="checkbox">
                            </div>
                            <div>
                                <p class="text-green-600 text-sm">Auf Lager</p>
                                <p class="text-sm">Voraussichtliche Ankunfszeit: 18.04.2023</p>
                                <a id="1" class="hover:cursor-pointer hover:text-blue-600 underline text-blue-500 removeItem">Entfernen aus Warenkorb</a>
                            </div>
                        </div>
                    </td>
                    <td class="w-76">
                        <p id="price_1" class="text-lg font-semibold">24,95€</p>
                    </td>
                </tr>
                <tr>
                    <td class="flex space-x-2 p-4">
                        <img
                            src="{{asset('/images/Sample1.jpg')}}"
                            class="h-28 rounded-xl"
                        />
                        <div class="flex flex-col justify-between ">
                            <a class="font-medium text-lg hover"
                            >Strickmaschine KH5959 met Doppelbett KR850</a
                            >
                            <div class="w-full">
                                <input id="2" class="float-right inline priceCheckbox" type="checkbox">
                            </div>
                            <div>
                                <p class="text-green-600 text-sm">Auf Lager</p>
                                <p class="text-sm">Voraussichtliche Ankunfszeit: 18.04.2023</p>
                                <a id="2" class="hover:cursor-pointer hover:text-blue-600 underline text-blue-500 removeItem">Entfernen aus Warenkorb</a>
                            </div>
                        </div>
                    </td>
                    <td class="w-76">
                        <p id="price_2" class="text-lg font-semibold">34,95€</p>
                    </td>
                </tr>
                <tr>
                    <td class="flex space-x-2 p-4">
                        <img
                            src="{{asset('/images/Sample1.jpg')}}"
                            class="h-28 rounded-xl"
                        />
                        <div class="flex flex-col justify-between ">
                            <a class="font-medium text-lg hover"
                            >Strickmaschine KH5959 met Doppelbett KR850</a
                            >
                            <div class="w-full">
                                <input id="3" class="float-right inline priceCheckbox" type="checkbox">
                            </div>
                            <div>
                                <p class="text-green-600 text-sm">Auf Lager</p>
                                <p class="text-sm">Voraussichtliche Ankunfszeit: 18.04.2023</p>
                                <a id="3" class="hover:cursor-pointer hover:text-blue-600 underline text-blue-500 removeItem">Entfernen aus Warenkorb</a>
                            </div>
                        </div>
                    </td>
                    <td class="w-76">
                        <p id="price_3" class="text-lg font-semibold">84,95€</p>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="flex flex-col w-1/3">
            <p class="text-lg">Summe (9 Artikel): <span id="sumBalanceLabel" class="text-xl font-semibold">0€</span></p>
        </div>
    </div>
    <script src="{{asset('scripts/shoppingcart.js')}}"></script>
@endsection
