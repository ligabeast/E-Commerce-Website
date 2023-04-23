@extends('layouts.mainLayout')

@section('content')
    <div class="mx-auto max-w-xl">
        @foreach($articles as $article)
            <div class="h-40 p-4 flex gap-4 bg-white shadow-md m-4 rounded-xl relative">
                <img
                    src="{{asset('images/Sample1.jpg')}}"
                    class="h-full rounded-xl"
                    alt=""
                    srcset=""
                />
                <div class="flex flex-col justify-between ">
                    <a class="font-medium text-lg hover"
                    >{{$article->name}}</a
                    >
                    <p>
                        {{$article->description}}
                        </p>
                    <p class="text-blue-500 text-lg font-bold">{{$article->price / 100}}€</p>
                    <a onclick="markShoppingCart(this)" class="absolute right-0 top-0 h-8 w-8 bg-green-500 flex justify-center items-center rounded-lg hover:bg-green-600 hover:cursor-pointer transition">
                        <span class="text-4xl text-white">+</span>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
    <script src="{{asset('scripts/search.js')}}"></script>
@endsection
