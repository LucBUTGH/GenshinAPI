<!-- resources/views/login.blade.php -->
<x-header/>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
    <!-- Inclure le CDN de Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <div class="container mx-auto mt-8">
        <form action="{{ route('loginprocess') }}" method="post" class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
            <h1 class="text-center font-bold"> Log In !</h1>
            @csrf
            <label for="email" class="block text-sm font-medium text-gray-600">Email or username :</label>
            <input type="text" name="email" required class="mt-1 p-2 w-full border rounded-md">

            <label for="password" class="block text-sm font-medium text-gray-600">Password :</label>
            <input type="password" name="password" required class="mt-1 p-2 w-full border rounded-md">

            <input type="submit" value="Log in" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md">
            <p class="mt-4">No account ? <a href="{{route('register')}}" class="text-blue-500">Create an account</a></p>

            @if(session('error'))
                <div class="mt-4 bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded-md">
                    {{ session('error') }}
                </div>
            @endif
        </form>
    </div>

</body>
</html>
<x-footer/>
