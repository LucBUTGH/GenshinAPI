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
            <a href="#" class="text-lg font-semibold">
                <img class="w-14 h-14" src="{{ asset('images/genshin_pic.png') }}" alt="Logo genshin">
            </a>
            
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="#" class="hover:text-gray-300">Accueil</a></li>
                    <li><a href="#" class="hover:text-gray-300">À propos</a></li>
                    <li><a href="#" class="hover:text-gray-300">Documentation</a></li>
                    <li><a href="#" class="hover:text-gray-300">Contact</a></li>
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
    </style>
