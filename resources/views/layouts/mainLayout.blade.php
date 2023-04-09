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
    <link rel="icon" type="image" href="{{asset('images/TitleIcon.jpg')}}" />
    <title>Abalo Hauptseite</title>
</head>
<body>
<div class="hidden" id="signInContainer">
    <div
        class="fixed inset-0 bg-black opacity-30 justify-center items-center"
        id="signInBackground"
    ></div>
    <div
        id="signInWindow"
        class="fixed inset-0 m-auto max-w-md h-fit bg-white py-4 px-8 rounded-md shadow-xl"
    >
        <div class="flex relative flex-col py-4">
            <p class="text-2xl font-semibold text-center py-6">Log in with</p>
            <div class="flex flex-row space-x-3 w-full justify-between pb-5">
                <button
                    class="h-16 w-44 text-lg rounded-lg bg-white font-semibold border-2 border-black hover:-translate-y-0.5 hover:shadow-2xl shadow-xl duration-100"
                >
                    <img class="w-10 inline pr-3" src="{{asset('images/Google.png')}}" />
                    <span>Google</span>
                </button>
                <button
                    class="h-16 w-44 text-lg rounded-lg bg-white font-semibold border-2 border-black hover:-translate-y-0.5 hover:shadow-2xl shadow-xl duration-100"
                >
                    <img class="w-10 inline pr-3" src="{{asset('images/Facebook.png')}}" />
                    <span>Facebook</span>
                </button>
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
            <input
                type="button"
                value="Log in"
                class="w-full mt-8 h-16 bg-blue-400 shadow-xl text-white rounded-xl text-lg tracking-wider hover:shadow-2xl hover:bg-blue-600 hover:cursor-pointer duration-100"
            />
            <p class="mt-4">
                Not have account yet?
                <a
                    id="registerButton"
                    class="hover:text-blue-800 text-blue-400 hover:cursor-pointer"
                >Register</a
                >
            </p>
        </div>
    </div>
</div>

<div class="hidden" id="registerContainer">
    <div
        class="fixed inset-0 bg-black opacity-30 justify-center items-center"
        id="registerBackground"
    ></div>
    <div
        id="registerWindow"
        class="fixed inset-0 m-auto max-w-md h-fit bg-white py-4 px-8 rounded-md shadow-xl"
    >
        <div class="flex relative flex-col py-4">
            <p class="text-2xl font-semibold text-center py-6">Register</p>
            <div class="relative mt-3">
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
                type="button"
                value="Submit"
                class="w-full mt-8 h-16 bg-blue-400 shadow-xl text-white rounded-xl text-lg tracking-wider hover:shadow-2xl hover:bg-blue-600 hover:cursor-pointer duration-100"
            />
        </div>
    </div>
</div>

<div class="flex flex-col w-screen h-screen">
    <head class="h-48 flex flex-col justify-center items-center">
        <div class="flex-col flex items-center justify-center md:flex-row">
            <div class="flex flex-row mx-4">
                <img
                    class="mx-auto my-2 wx-auto hover:cursor-pointer inline hover:scale-105 transition"
                    src="{{asset('images/Logo.png')}}"
                />
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
                        <span id="accountButton">Account</span>
                    </button>
                    <div
                        class="absolute top-16 group w-56 hidden -h-64 border-2 border-black rounded-lg bg-white shadow-2xl px-6 py-2 flex-col space-y-2 divide-y divide-blue-400 text-center text-xl font-semibold"
                        id="account"
                    >
                        <p
                            class="hover:translate-x-0.5 transition"
                            onclick="showSignInContainer()"
                            id="signInButton"
                        >
                            Sign in
                        </p>
                        <p class="hover:translate-x-0.5 transition">Shopping cart</p>
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
    <main class="h-full bg-white">
        @yield('one')
        @yield('two')
        @yield('three')
        @yield('four')
        @yield('five')
    </main>
    <footer
        class="h-60 bg-blue-950 flex flex-col item-center justify-center text-white space-y-5"
    >
        <div class="flex flex-row items-center justify-center space-x-5">
            <a class="hover:font-semibold hover:cursor-pointer hover:text-lg"
            >Unsere AGB</a
            >
            <a class="hover:font-semibold hover:cursor-pointer hover:text-lg"
            >Datenschutzerklärung</a
            >
            <a class="hover:font-semibold hover:cursor-pointer hover:text-lg"
            >Impressum</a
            >
            <a class="hover:font-semibold hover:cursor-pointer hover:text-lg"
            >Hinweise zu Cookies</a
            >
        </div>
        <p class="text-center">
            &copy;2023-9999 Abalo.com, Inc. oder Partner-Unternehmen
        </p>
    </footer>
</div>
<script src="{{asset('scripts/script.js')}}"></script>
</body>
</html>
