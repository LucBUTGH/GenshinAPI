<x-header/>
    <div class="flex items-top justify-center h-fit-content mt-5">
        <div class="border-8 border-color: white bg-black bg-opacity-50 rounded-lg p-4">
            <!-- Contenu de votre div centrée -->
            <h1 class="text-white text-2xl font-bold mb-4">
                API Genshin</h1>
            <p class ="text-white">For developer travelers!</p>
        </div>
    </div>

    <div class="ml-5 mr-5 border-8 border-color: white bg-black bg-opacity-50 rounded-lg p-4">
        <div class="ml-3 mr-3 flex flex-wrap -mx-2">
            @foreach($characters as $character)
                <div class="w-1/6 px-2 mb-14 flex flex-col items-center">
                    <p class="text-white mb-2">{{ $character->cha_name }}</p>
                    <span>
                        <img id="homepics" class="w-60 h-60 transition-transform transform hover:scale-110 object-cover" loading="lazy" src="{{ asset($character->cha_image) }}" alt="charpic">
                    </span>
                </div>
            @endforeach
        </div>
    </div>
    
    
    
<x-footer/>
