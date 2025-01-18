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
        <!-- Conteneur grille avec un espacement entre les cartes -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($projections as $projection)
            <div class="bg-gray-800 rounded-lg shadow-lg flex h-[320px] w-[450px] overflow-hidden">
                <img src="{{ asset('storage/' . $projection->image) }}" alt="Image {{ $projection->film->titre }}" class="w-1/2 object-cover">
                <div class="p-4 w-1/2 flex flex-col justify-center">
                    <h2 class="text-lg font-bold text-[#FF7F00]">{{ $projection->film->titre }}</h2>
                    <p class="text-gray-400 mt-2"><strong>Sujet :</strong> {{ $projection->film->sujet }}</p>
                    <p class="text-gray-400 mt-2"><strong>Date de projection :</strong> {{ $projection->date }}</p>
                    <p class="text-gray-400 mt-2"><strong>Heure de projection :</strong> {{ $projection->heure }}</p>
                    <p class="text-gray-400 mt-2"><strong>Lieu :</strong> {{ $projection->lieu }}</p>
                    <p class="text-gray-400 mt-2"><strong>Réalisateur :</strong> {{ $projection->film->realisateur->nom }} {{ $projection->film->realisateur->prenom }}</p>
                    <p class="text-gray-400 mt-2"><strong>Producteur :</strong> {{ $projection->film->producteur->nom }} {{ $projection->film->producteur->prenom }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </main>

    <footer class="bg-gray-900 text-gray-500 py-4 text-center mt-8">
        &copy; 2025 Votre Organisation. Tous droits réservés.
    </footer>
</body>
</html>
