<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="font-sans antialiased">
<div class="bg-cover bg-center bg-no-repeat" style="background-image: url('{{url('images/plain.jpeg')}}')">
    <div class="bg-black bg-opacity-50">
    <header>
        <div class="max-w-7xl mx-auto pt-3 px-5 sm:px-0">
            <div class="flex space-x-3 items-center" >
                <a href="{{route('home')}}" class="w-32 bg-indigo-700 py-5 px-3">
                    <img src="{{url('images/logo.png')}}" alt="Logo">
                </a>
                <div class="w-full border-b-4 border-indigo-700 pb-3">
                    <div class="flex space-x-3 justify-end">
                        <a class="text-white bg-indigo-700 px-6 py-3" href="{{route('login')}}">Login</a>
{{--                        <a class="text-white bg-indigo-700 px-6 py-3" href="{{route('register')}}">Register</a>--}}
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Page Content -->
    <main>
        @yield('content')
    </main>
        <footer class="text-center">
            <div class="border-b-4 border-indigo-700">
                <div class="mb-4">
                    <h2 class="text-black text-3xl font-bold uppercase">About Us</h2>
                </div>
            </div>
            <div class="space-y-3 py-3">
                <h2 class="text-3xl font-bold text-indigo-900">Contact us on:</h2>
                <p class="text-xl font-medium text-black">0712347801</p>
                <p class="text-xl font-medium text-black">itswilliamodhiambo@gmail.com</p>
            </div>
        </footer>
    </div>
</div>
</body>
</html>
