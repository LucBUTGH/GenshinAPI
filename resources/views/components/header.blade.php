<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href= {{asset('./favicon.ico')}} type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Genshin API</title>
</head>
<body class="bg-gray-100" >
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script type="module" src="{{asset('./js/app.js')}}" ></script>
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <a href="/" class="text-lg font-semibold">
                    <img class="w-14 h-14" src="{{ asset('images/genshin_pic.png') }}" alt="Logo genshin">
                </a>
                <h1 class="ml-5 font-bold text-2xl"> Genshin API </h1>
            </div>
            
            
            <nav class ="nav">
                <ul class="flex space-x-4">
                    <li>
                        <a href="/">Welcome</a>
                    </li>                          
                    @if(session()->has('user'))
                    <li>
                        <a href="#">{{session('user')->US_USERNAME}}</a>
                    </li>
                    @else
                    <li>
                        <a href="{{route('register')}}">Create an account</a>
                    </li>
                    @endif
                    <li>
                        <a href="{{ route('docSwagger') }}">Documentation</a>
                    </li>
                    <li>
                        <a href="{{ route('contact')}}">Contact</a>
                    </li>
                    @if(session()->has('user'))
                    <li>
                        <a href="{{route('logout')}}">Log out</a>
                    </li>
                    @endif
                </ul>
            </nav>
        </div>
    </header>

    <style>
        
        html, body {
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
        }

        nav a {
            text-decoration: none;
            position: relative;
        }

        nav a::after {
            content: "";
            position: absolute;
            left: 100%;
            bottom: -2px;
            width: 0;
            height: 1px;
            background: white;
            transition: left 0.2s ease, width 0.2s ease; 
        }

        nav a:hover::after {
            left: 0;
            width: 100%;
        }

        nav a:not(:hover)::after {
            left: 0; 
            width: 0;
        }

    </style>
