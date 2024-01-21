<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href= asset {{'../../../favicon.ico'}} type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Genshin API</title>
</head>
<body class="bg-gray-100" >

    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-lg font-semibold">
                <img class="w-14 h-14" src="{{ asset('images/genshin_pic.png') }}" alt="Logo genshin">
            </a>
            
            <nav class ="nav">
                <ul class="flex space-x-4">
                    <li>
                        <a href="/">Accueil</a>
                    </li>                          
                    @if(session()->has('user'))
                    <li>
                        <a href="#" class="hover:text-gray-300">{{session('user')->US_USERNAME}}</a>
                    </li>
                    @else
                    <li>
                        <a href="{{route('register')}}" class="hover:text-gray-300">Se connecter</a>
                    </li>
                    @endif
                    <li>
                        <a href="{{ route('docSwagger') }}" class="hover:text-gray-300">Documentation</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-gray-300">Contact</a>
                    </li>
                    @if(session()->has('user'))
                    <li>
                        <a href="{{route('logout')}}" class="hover:text-gray-300">Déconnexion</a>
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

        nav a:hover::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -2px; /* Ajouté */
            width: 0;
            height: 1px;
            background: white;
            transition: width 1s ease; 
        }

        nav a:hover::after {
            width: 100%;
            animation: underline 0.5s ease;
        }

            @keyframes underline {
            0% {
                width: 0; 
            }
            
            100% {
                width: 100%;
            }
        }

    </style>
