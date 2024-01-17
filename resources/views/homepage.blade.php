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
        <iframe src="{{ route('docSwagger') }}" width="100%" height="600px"></iframe>
    </div>

    <!-- resources/views/welcome.blade.php -->




<x-footer/>
