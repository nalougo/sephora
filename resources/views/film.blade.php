<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url('https://laravel.com/assets/img/welcome/background.svg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body class="font-sans bg-gray-900 text-white">
    <header class="bg-gray-900 py-4 shadow-md">
        <div class="container mx-auto">
            <h1 class="text-3xl font-bold text-[#FF7F00] text-center">Liste des Films</h1>
        </div>
    </header>

    <main class="container mx-auto py-10 flex-grow">
        <div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-5 gap-8">
            @foreach($projections as $projection)
            <div class="flex justify-center">
                <a href="{{ route('film.show', $projection->id) }}" class="block">
                    <img
                        src="{{ asset('storage/' . $projection->image) }}"
                        alt="Image {{ $projection->film->titre }}"
                        class="w-[225px] h-[320px] object-cover rounded-lg shadow-lg transition-transform transform hover:scale-105 duration-300"
                    />
                </a>
            </div>
            @endforeach
        </div>
    </main>

    <footer class="bg-gray-900 text-gray-500 py-4 text-center mt-8">
        &copy; 2025 Votre Organisation. Tous droits réservés.
    </footer>
</body>
</html>
