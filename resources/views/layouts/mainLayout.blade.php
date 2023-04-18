<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>

    <!--Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@400;600&display=swap"
        rel="stylesheet"
    />
    <!----->
    <!--Swiper.js-->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <!----->
    <link rel="icon" type="image" href="{{asset('images/TitleIcon.jpg')}}" />
    <title>Abalo Hauptseite</title>
</head>
<body>

<div class="fixed @isset($angemeldet)  @else hidden @endisset flex z-50 top-0 left-0 w-fit p-4 m-4 text-white rounded-lg bg-green-600">    <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
    <span class="sr-only">Info</span>
    <div class="ml-3 text-sm">
        <span class="font-bold text-md">Successful, you are now logged in!</span>
        <span class="font-base"> Good job, you can now browse and find your next nice shopping decision</span>
    </div>
    <button onclick="closeNotification(this)" type="button" class=" ml-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8" data-dismiss-target="#alert-3" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
</div>

<div class="hidden" id="signInContainer">
    <div
        class="fixed z-50 inset-0 bg-black opacity-30 justify-center items-center"
        id="signInBackground"
    ></div>
    <div
        id="signInWindow"
        class="fixed z-50 inset-0 m-auto max-w-md h-fit bg-white py-4 px-8 rounded-md shadow-xl"
    >
        <form id="signInForm">
            <div class="flex relative flex-col py-4">
                <p class="text-2xl font-semibold text-center py-6">Log in with</p>
                <div class="flex flex-row space-x-3 w-full justify-between pb-5">
                    <a
                        href="/login/google-account"
                        class="h-16 flex items-center justify-center w-44 text-lg rounded-lg bg-white font-semibold border-2 border-black hover:-translate-y-0.5 hover:shadow-2xl shadow-xl duration-100"
                        id="googleButton"
                    >
                        <img class="w-10 inline pr-3" src="{{asset('images/Google.png')}}" />
                        <span>Google</span>
                    </a>
                    <a
                        href="/login/facebook-account"
                        class="h-16 w-44  flex items-center justify-center  text-lg rounded-lg bg-white font-semibold border-2 border-black hover:-translate-y-0.5 hover:shadow-2xl shadow-xl duration-100"
                        id="facebookButton"
                    >
                        <img class="w-10 inline pr-3" src="{{asset('images/Facebook.png')}}" />
                        <span>Facebook</span>
                    </a>
                </div>
                <p class="text-center pb-5">or</p>
                <div class="relative mt-3">
                    <input
                        type="email"
                        id="emailSignIn"
                        placeholder="Enter email address"
                        class="peer w-full h-16 px-5 pb-2 pt-5 rounded-sm text-lg placeholder-transparent outline-0 pointer border-b-2 border-gray-500"
                    />
                    <label
                        for="emailSignIn"
                        class="peer-placeholder-shown:top-6 peer-placeholder-shown:left-5 peer-placeholder-shown:text-base text-sm peer-placeholder-shown:text-gray-400 text-black pointer-events-none absolute left-3 top-0 transition-all"
                    >Enter email address</label
                    >
                </div>
                <div class="relative mt-3">
                    <input
                        type="password"
                        id="passwordSignIn"
                        placeholder="Enter your password"
                        class="peer w-full h-16 px-5 pb-2 pt-5 rounded-sm text-lg placeholder-transparent outline-0 pointer border-b-2 border-gray-500"
                    />
                    <label
                        for="passwordSignIn"
                        class="peer-placeholder-shown:top-6 peer-placeholder-shown:left-5 peer-placeholder-shown:text-base text-sm peer-placeholder-shown:text-gray-400 text-black pointer-events-none absolute left-3 top-0 transition-all"
                    >Enter your password</label
                    >
                </div>
                <p
                    class="text-red-500 hidden mt-2 cursor-not-allowed select-none"
                    id="errorMessage"
                >
                    &#9888; <span class="font-semibold">Error:</span> email or password
                    incorrect!
                </p>
                <input type="hidden" name="_token" id="csrf_token_signin" value="{{ Session::token() }}" />
                <input
                    type="submit"
                    value="Log in"
                    id="signInButton"
                    class="w-full mt-8 h-16 bg-blue-400 shadow-xl text-white rounded-xl text-lg tracking-wider hover:shadow-2xl hover:bg-blue-600 hover:cursor-pointer duration-100"
                />
                <p class="mt-4">
                    Not have account yet?
                    <a
                        id="registerLabel"
                        class="hover:text-blue-800 text-blue-400 hover:cursor-pointer"
                    >Register</a
                    >
                </p>
            </div>
        </form>
    </div>
</div>

<div class="hidden" id="registerContainer">
    <div
        class="fixed inset-0 z-50 bg-black opacity-30 justify-center items-center"
        id="registerBackground"
    ></div>
    <div
        id="registerWindow"
        class="fixed inset-0 z-50 m-auto max-w-md h-fit bg-white py-4 px-8 rounded-md shadow-xl"
    >
        <div class="flex relative flex-col py-4">
            <p class="text-2xl font-semibold text-center py-6">Register</p>
            <div class="relative mt-3">
                <form id="registerForm">
                    <div>
                        <input
                            type="text"
                            id="fullNameRegister"
                            placeholder="Enter your fullname"
                            class="peer w-full h-16 px-5 pb-2 pt-5 rounded-sm text-lg placeholder-transparent outline-0 pointer border-b-2 border-gray-500"
                        />
                        <label
                            for="fullNameRegister"
                            class="peer-placeholder-shown:top-6 peer-placeholder-shown:left-5 peer-placeholder-shown:text-base text-sm peer-placeholder-shown:text-gray-400 text-black pointer-events-none absolute left-3 top-0 transition-all"
                        >Enter your fullname</label
                        >
                    </div>
                    <div class="relative mt-3">
                        <input
                            type="email"
                            id="emailRegister"
                            placeholder="Enter email address"
                            class="peer w-full h-16 px-5 pb-2 pt-5 rounded-sm text-lg placeholder-transparent outline-0 pointer border-b-2 border-gray-500"
                        />
                        <label
                            for="emailRegister"
                            class="peer-placeholder-shown:top-6 peer-placeholder-shown:left-5 peer-placeholder-shown:text-base text-sm peer-placeholder-shown:text-gray-400 text-black pointer-events-none absolute left-3 top-0 transition-all"
                        >Enter email address</label
                        >
                    </div>
                    <div class="relative mt-3">
                        <input
                            type="password"
                            id="passwordRegister"
                            placeholder="Enter your password"
                            class="peer w-full h-16 px-5 pb-2 pt-5 rounded-sm text-lg placeholder-transparent outline-0 pointer border-b-2 border-gray-500"
                        />
                        <label
                            for="passwordRegister"
                            class="peer-placeholder-shown:top-6 peer-placeholder-shown:left-5 peer-placeholder-shown:text-base text-sm peer-placeholder-shown:text-gray-400 text-black pointer-events-none absolute left-3 top-0 transition-all"
                        >Enter your password</label
                        >
                    </div>
                    <div class="relative mt-3">
                        <input
                            type="password"
                            id="passwordSubmitRegister"
                            placeholder="Submit your password"
                            class="peer w-full h-16 px-5 pb-2 pt-5 rounded-sm text-lg placeholder-transparent outline-0 pointer border-b-2 border-gray-500"
                        />
                        <label
                            for="passwordSubmitRegister"
                            class="peer-placeholder-shown:top-6 peer-placeholder-shown:left-5 peer-placeholder-shown:text-base text-sm peer-placeholder-shown:text-gray-400 text-black pointer-events-none absolute left-3 top-0 transition-all"
                        >Submit your password</label
                        >
                    </div>
                    <input
                        type="submit"
                        id="registerButton"
                        value="Submit"
                        class="w-full mt-8 h-16 bg-blue-400 shadow-xl text-white rounded-xl text-lg tracking-wider hover:shadow-2xl hover:bg-blue-600 hover:cursor-pointer duration-100"
                    />
                </form>
            </div>
        </div>
    </div>
</div>

<div class="flex flex-col w-full h-full">
    <head class="h-48 flex flex-col justify-center items-center">
        <div class="flex-col flex items-center justify-center md:flex-row">
            <div class="flex flex-row mx-4">
                <a href ="/">
                    <img
                        class="mx-auto my-2 wx-auto hover:cursor-pointer inline hover:scale-105 transition"
                        src="{{asset('images/Logo.png')}}" />
                </a>
                <div
                    class="mx-3 space-x-2 flex justify-center items-center hover:cursor-pointer group relative"
                    id="accountButton"
                >
                    <button
                        class="text-xl group-hover:font-semibold focus:font-semibold tracking-wider group-hover:tracking-wider"
                        id="accountButton"
                    >
                        <img
                            src="{{asset('images/Account-Image.png')}}"
                            class="w-12 inline-block"
                            id="accountButton"
                        />
                        <span class="accountButtonLabel" id="accountButton">@if(Auth::check()) {{Auth::user()->name}} @else Account @endif</span>
                    </button>
                    <div
                        class="absolute top-16 z-50 group w-56 hidden -h-64 border-2 border-black rounded-lg bg-white shadow-2xl px-6 py-2 flex-col space-y-2 divide-y divide-blue-400 text-center text-xl font-semibold"
                        id="account"
                    >
                        @if(Auth::check(0))
                            <p
                                class="hover:translate-x-0.5 transition"
                                onclick="logout()"
                                id="logOut"
                            >
                                Log out
                            </p>
                        @else
                            <p
                                class="hover:translate-x-0.5 transition"
                                onclick="showSignInContainer()"
                                id="signInLabel"
                            >
                                Sign in
                            </p>
                        @endif
                        <a href="/shoppingCart" class="hover:translate-x-0.5 transition">Shopping cart</a>
                        <p class="hover:translate-x-0.5 transition">Account settings</p>
                        <p class="hover:translate-x-0.5 transition">My Orders</p>
                        <p class="hover:translate-x-0.5 transition">Observation list</p>
                        <p class="hover:translate-x-0.5 transition">Messages</p>
                    </div>
                </div>
            </div>
            <div class="flex-col flex md:flex-row mx-4 mr-3">
                <input
                    type="text"
                    placeholder="Search..."
                    class="text-center w-72 h-12 border-b-2 outline-0 border-gray-500 shadow-sm text-lg"
                />
                <div class="my-2 flex justify-center space-x-3">
                    <select class="outline-0 h-full text-lg hover:cursor-pointer">
                        <option selected disabled>Category</option>
                        <option>Elektro</option>
                        <option>Haushalt</option>
                        <option>Kleidung</option>
                        <option>Auto</option>
                        <option>Fitness</option>
                        <option>Nahrung</option>
                    </select>
                    <input
                        type="button"
                        class="bg-blue-400 h-12 px-4 rounded-sm text-white tracking-wider hover:bg-blue-700 transition hover:cursor-pointer hover:-translate-y-0.5 hover:shadow-lg"
                        value="Search"
                    />
                </div>
            </div>
        </div>
    </head>
    <main class="overflow-x-hidden min-h-screen">
        @yield('content')
    </main>
    <footer
        class="h-60 bg-blue-950 flex flex-col item-center justify-center text-white space-y-5"
    >
        <div class="flex flex-row items-center justify-center space-x-5">
            <a class="hover:font-semibold hover:cursor-pointer"
            >Unsere AGB</a
            >
            <a class="hover:font-semibold hover:cursor-pointer"
            >Datenschutzerklärung</a
            >
            <a class="hover:font-semibold hover:cursor-pointer"
            >Impressum</a
            >
            <a class="hover:font-semibold hover:cursor-pointer"
               href="/cookies"
            >Hinweise zu Cookies</a
            >
        </div>
        <p class="text-center">
            &copy;2023-9999 Abalo.com, Inc. oder Partner-Unternehmen
        </p>
    </footer>
</div>
<script src="{{asset('scripts/mainlayout.js')}}"></script>
</body>
</html>
