<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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

    <header class="bg-gray-900 py-6 shadow-md">
        <div class="container mx-auto text-center">
            <h1 class="text-3xl font-bold text-[#FF7F00]">{{ $projection->film->titre }}</h1>
        </div>
    </header>

    <main class="container mx-auto py-12 flex-grow bg-gray-1000 bg-opacity-70 text-gray-200">
        <div class="rounded-lg shadow-lg overflow-hidden max-w-4xl mx-auto">
            <div class="flex">
                <img src="{{ asset('storage/' . $projection->image) }}" alt="Affiche Wallace et Gromit" class="object-cover" style="width: 255px; height: 350px;">
                <div class="p-6 w-2/3">
                    <h2 class="text-2xl font-bold text-[#FF7F00] mb-4">{{ $projection->film->titre }}</h2>
                    <p class="text-gray-300 mb-4 text-lg"><strong>{{ $projection->date }}</strong> || <strong>{{ $projection->heure }}</strong> || <strong>{{ $projection->lieu }}</strong></p>
                    <p class="text-gray-300 mb-4 text-lg"><strong>De:</strong> {{ $projection->film->realisateur->nom }} {{ $projection->film->realisateur->prenom }}</p>
                    <p class="text-gray-300 mb-4 text-lg"><strong>Avec:</strong> {{ $projection->film->producteur->nom }} {{ $projection->film->producteur->prenom }}</p>
                    <div class="flex space-x-4">
                        <div class="w-16 h-16 bg-gray-600 rounded-lg flex items-center justify-center">
                            <div class="text-center">
                                <p class="text-2xl font-bold text-gray-100">4,0</p>
                                <p class="text-gray-300 text-sm">jury</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-gray-300 mb-4 text-lg ml-8">{{ $projection->film->sujet }}</p>
        </div>
    </main>

    <footer class="bg-gray-900 text-white py-6 text-center">
        &copy; 2025 Votre Organisation. Tous droits réservés.
    </footer>
</body>
</html>
