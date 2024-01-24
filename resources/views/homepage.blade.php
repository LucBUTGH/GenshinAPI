<x-header/>
    <div class="flex items-top justify-center h-fit-content mt-5">
        <div class="border-8 border-color: white bg-black bg-opacity-50 rounded-lg p-4">
            <!-- Contenu de votre div centrée -->
            <h1 class="text-white text-2xl font-bold mb-4">
                API Genshin</h1>
            <p class ="text-white">For developer travelers!</p>
        </div>
    </div>

    <div class="ml-5 mr-5 bg-orange-800 bg-opacity-100 rounded-lg p-4">
        <div class="ml-3 mr-3 flex flex-wrap -mx-2">
            <!--
            @foreach($characters as $character)
                <div class="w-1/6 px-2 mb-14 flex flex-col items-center">
                    <p class="text-white mb-2">{{ $character->cha_name }}</p>
                    <span>
                        <img id="homepics" class="w-60 h-60 transition-transform transform hover:scale-110 object-cover" loading="lazy" src="{{ asset($character->cha_image) }}" alt="charpic">
                    </span>
                </div>
            @endforeach-->
        </div>
        <section class="container mx-auto mt-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
              <div class="mb-4">
                <h2 class="text-3xl font-semibold mb-4">Découvrez notre API</h2>
                <p class="text-gray-700">Explorez les données complètes de Genshin Impact, des personnages aux armes, en passant par les quêtes et les régions.</p>
              </div>
              <div>
                <img src="genshin-api-image.jpg" alt="API Genshin Impact" class="rounded-md shadow-lg">
              </div>
            </div>
        </section>
        
        <section class="bg-gray-200 py-8">
            <div class="container mx-auto text-center">
              <h2 class="text-2xl font-semibold mb-4">Comment commencer</h2>
              <p class="text-gray-700">Intégrer notre API Genshin Impact dans votre projet en quelques étapes simples :</p>
              <ol class="list-decimal text-left mt-4">
                <li class="mb-2">Inscrivez-vous pour obtenir votre clé API.</li>
                <li class="mb-2">Consultez notre documentation complète.</li>
                <li class="mb-2">Utilisez la clé API dans vos projets et explorez les données de Genshin Impact.</li>
              </ol>
            </div>
        </section>

        <section class="bg-gray-200 py-8">
            <div class="container mx-auto text-center">
            <h2 class="text-2xl font-semibold mb-4">Personnages</h2>
            <p class="text-gray-700">Explorez les détails de chaque personnage, y compris leurs compétences, statistiques de base et ascensions.</p>
            <a href="#" class="bg-genshin-500 px-4 py-2 rounded mt-4 inline-block">Voir les personnages</a>
            </div>
        </section>

        <section class="bg-gray-100 py-8">
            <div class="container mx-auto text-center">
            <h2 class="text-2xl font-semibold mb-4">Armes</h2>
            <p class="text-gray-700">Explorez les caractéristiques de chaque arme, leurs statistiques et leurs bonus.</p>
            <a href={{route('character')}} class="bg-genshin-500 px-4 py-2 rounded mt-4 inline-block">Voir les armes</a>
            </div>
        </section>

        <section class="bg-gray-200 py-8">
            <div class="container mx-auto text-center">
            <h2 class="text-2xl font-semibold mb-4">Artéfacts</h2>
            <p class="text-gray-700">Découvrez les artéfacts disponibles dans le monde de Genshin Impact et leurs effets.</p>
            <a href="#" class="bg-genshin-500 px-4 py-2 rounded mt-4 inline-block">Voir les artéfacts</a>
            </div>
        </section>
        </div>
    </div>
<x-footer/>
