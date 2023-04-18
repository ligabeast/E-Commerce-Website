@extends('layouts.mainLayout')

@section('content')
    <div class="w-full h-full text-blue-600">
        <div class="flex flex-col lg:flex-row m-20 p-4 gap-20 items-center">
            <img class="w-96 h-full hover:scale-125 rounded-lg transition" src="{{asset('images/cookies.jpg')}}">
            <div class="flex flex-col gap-10">
                <p class="text-center font-semibold underline text-4xl w-full">Was sind überhaupt Cookies?</p>
                <p class="text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis consequatur, consequuntur dolorem eligendi expedita facere facilis fugiat iure libero maxime natus placeat quam, quis, totam ut. Ex illum iusto laboriosam laudantium necessitatibus nemo provident vitae. Alias aliquid, aperiam atque beatae deserunt dolorum, esse et impedit, ipsum officia officiis placeat quae quidem reprehenderit sed! Aliquid aspernatur at delectus, eligendi enim facilis hic ipsa iusto laboriosam laborum magnam nam placeat repudiandae sunt velit veritatis vitae. A assumenda non obcaecati tempore! Adipisci at distinctio dolor eligendi rem sunt vitae. Ab accusamus asperiores autem, corporis cumque, distinctio facere ipsa iste itaque nisi, nobis pariatur quaerat quibusdam ratione rem reprehenderit sunt tempora voluptatibus. Adipisci cumque dolor impedit ipsam, nobis quidem reprehenderit sint. Alias aliquam consequuntur cupiditate dolore, doloribus dolorum, eius error ex facere harum in ipsum laboriosam officiis provident, quaerat soluta sunt ut voluptates. Aliquid ducimus enim eveniet, facere fugiat hic, impedit incidunt iure labore laboriosam libero nobis odio possimus quas voluptatem! Deserunt dignissimos, distinctio, eos esse eum ex explicabo hic, itaque repellendus sequi vitae voluptates? Ab dolorum, ea fugiat iusto libero odit optio! Architecto dicta exercitationem maxime nesciunt quis? Ab ad aliquid aspernatur autem debitis delectus deserunt dolorem eum illo inventore iusto, laborum minima nam nobis nulla, odio officia optio pariatur quia quo rem repellendus sed ullam. Amet consectetur distinctio fugiat laboriosam magni quaerat reiciendis sit temporibus. Alias blanditiis fugiat, natus numquam porro tenetur vitae. Atque deserunt dolore est inventore magnam nesciunt nobis quam, qui quibusdam tenetur. Aliquam aspernatur at aut culpa cupiditate dolor dolores ducimus earum ex excepturi, explicabo facere harum impedit incidunt labore </p>
            </div>
        </div>
        <div class="flex flex-col lg:flex-row m-20 p-4 gap-20 items-center justify-center">
            <div class="flex flex-col gap-10 relative">
                <img class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 -z-20 opacity-10" src="{{asset('images/schlossTransparent.png')}}">
                <p class="text-center underline font-semibold text-4xl w-full">Was beudeutet das für die Sicherheit?</p>
                <p class="text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis consequatur, consequuntur dolorem eligendi expedita facere facilis fugiat iure libero maxime natus placeat quam, quis, totam ut. Ex illum iusto laboriosam laudantium necessitatibus nemo provident vitae. Alias aliquid, aperiam atque beatae deserunt dolorum, esse et impedit, ipsum officia officiis placeat quae quidem reprehenderit sed! Aliquid aspernatur at delectus, eligendi enim facilis hic ipsa iusto laboriosam laborum magnam nam placeat repudiandae sunt velit veritatis vitae. A assumenda non obcaecati tempore! Adipisci at distinctio dolor eligendi rem sunt vitae. Ab accusamus asperiores autem, corporis cumque, distinctio facere ipsa iste itaque nisi, nobis pariatur quaerat quibusdam ratione rem reprehenderit sunt tempora voluptatibus. Adipisci cumque dolor impedit ipsam, nobis quidem reprehenderit sint. Alias aliquam consequuntur cupiditate dolore, doloribus dolorum, eius error ex facere harum in ipsum laboriosam officiis provident, quaerat soluta sunt ut voluptates. Aliquid ducimus enim eveniet, facere fugiat hic, impedit incidunt iure labore laboriosam libero nobis odio possimus quas voluptatem! Deserunt dignissimos, distinctio, eos esse eum ex explicabo hic, itaque repellendus sequi vitae voluptates? Ab dolorum, ea fugiat iusto libero odit optio! Architecto dicta exercitationem maxime nesciunt quis? Ab ad aliquid aspernatur autem debitis delectus deserunt dolorem eum illo inventore iusto, laborum minima nam nobis nulla, odio officia optio pariatur quia quo rem repellendus sed ullam. Amet consectetur distinctio fugiat laboriosam magni quaerat reiciendis sit temporibus. Alias blanditiis fugiat, natus numquam porro tenetur vitae. Atque deserunt dolore est inventore magnam nesciunt nobis quam, qui quibusdam tenetur. Aliquam aspernatur at aut culpa cupiditate dolor dolores ducimus earum ex excepturi, explicabo facere harum impedit incidunt labore </p>
            </div>
            <img class="h-96 w-full hover:scale-110 rounded-lg transition" src="{{asset('images/sicherheit.jpg')}}">
        </div>
    </div>
@endsection