<x-header/>

<div class="bg-gradient-to-b from-blue-900 to-blue-600 text-white">
    <div class="container mx-auto py-16">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Bienvenue sur l'API Genshin</h1>
            <p class="text-lg md:text-xl mb-6">Explorez les merveilles de Genshin Impact avec notre API dédiée aux développeurs.</p>
            <a href="#getting-started" class="bg-genshin-500 text-white px-6 py-3 rounded-full inline-block font-bold hover:bg-genshin-700 transition duration-300">Commencer</a>
        </div>
    </div>
</div>

<section id="getting-started" class="bg-gray-100 py-16">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl font-semibold mb-4">Découvrez notre API</h2>
                <p class="text-gray-700 text-lg">Des informations sur les armes, personnages et artéfacts à disposition !</p>
                <div class="mt-6">
                    <ul class="list-decimal text-lg text-gray-700">
                        <li class="mb-2">Créez un compte</li>
                        <li class="mb-2">Consultez notre documentation complète.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-gray-200 py-16">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl md:text-4xl font-semibold mb-8">Explorez le Monde de Genshin</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="transition-transform transform hover:scale-110 object-cover p-6 bg-white rounded-lg shadow-md">
                <h3 class="text-xl md:text-2xl font-semibold mb-4">Personnages</h3>
                <p class="text-gray-700 mb-4">Explorez les détails de chaque personnage, y compris leurs compétences, statistiques de base et ascensions.</p>
                <a href="{{ route('characters') }}" class="bg-genshin-500 text-white px-4 py-2 rounded-full inline-block hover:bg-genshin-700 transition duration-300">Voir les personnages</a>
            </div>

            <div class="transition-transform transform hover:scale-110 object-cover p-6 bg-white rounded-lg shadow-md">
                <h3 class="text-xl md:text-2xl font-semibold mb-4">Armes</h3>
                <p class="text-gray-700 mb-4">Explorez les caractéristiques de chaque arme, leurs statistiques et leurs bonus.</p>
                <a href="#" class="bg-genshin-500 text-white px-4 py-2 rounded-full inline-block hover:bg-genshin-700 transition duration-300">Voir les armes</a>
            </div>

            <div class="transition-transform transform hover:scale-110 object-cover p-6 bg-white rounded-lg shadow-md">
                <h3 class="text-xl md:text-2xl font-semibold mb-4">Artéfacts</h3>
                <p class="text-gray-700 mb-4">Découvrez les artéfacts disponibles dans le monde de Genshin Impact et leurs effets.</p>
                <a href="#" class="bg-genshin-500 text-white px-4 py-2 rounded-full inline-block hover:bg-genshin-700 transition duration-300">Voir les artéfacts</a>
            </div>
        </div>
    </div>
</section>

<x-footer/>
