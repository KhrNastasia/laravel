<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme='cupcake'>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>
    <link href="{{asset('css/style.css')}}" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="">
<header class="text-gray-600 body-font shadow-lg shadow-grey-500/50">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            LOGO
        </a>
        <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
            <ul class="menu menu-vertical lg:menu-horizontal bg-base-200 rounded-box">
                <li><a class="mr-5 hover:text-gray-900">First Link</a></li>
                <li><a class="mr-5 hover:text-gray-900">Second Link</a></li>
                <li>
                    <details class="dropdown">
                        <summary class="">Third link</summary>
                        <ul class="p-2 shadow menu dropdown-content z-[1] bg-base-100 rounded-box w-52">
                            @foreach($user->review as $r)
                                <li><a>{{$r->comment}}</a></li>
                            @endforeach

{{--                            <li><a>Item 2</a></li>--}}
                        </ul>
                    </details>
                </li>
                <li><a class="mr-5 hover:text-gray-900">Fourth Link</a></li>
            </ul>
        </nav>
        <button class="btn w-44 rounded-full">
            {{$user->name}}
        </button>
    </div>
</header>
<div class="container px-5 my-auto mx-auto h-screen">
    {{$user->email}}
</div>
</body>

</html>
