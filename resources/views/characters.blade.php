<x-header/>
<div class="bg-gray-100 font-sans">
    <section class="container mx-auto mt-8">
      <h1 class="text-3xl font-semibold mb-4 text-center">Découvrez les Personnages de Genshin Impact</h1>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        @foreach($characters as $character)
        <!-- Carte du personnage 1 -->
        <div class="transition-transform transform hover:scale-110 object-cover bg-white p-6 rounded-lg shadow-md">
          <img src={{$character->cha_image}} alt="Personnage 1" class="w-full h-32 object-cover mb-4 rounded-md">
          <h2 class="text-lg font-semibold mb-2">{{$character->cha_name}}</h2>
          <p class="text-gray-700">{{$character->cha_element}}</p>
          <a href="{{ route('character', ['name' => $character->cha_name]) }}" class="text-genshin-500 mt-4 inline-block">{{ $character->cha_region }}</a>
        </div>
        @endforeach          
      </div>
    </section>
</div>
<x-footer/>