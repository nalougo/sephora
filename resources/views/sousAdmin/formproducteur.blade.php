<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Ajout de Réalisateur</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url('https://laravel.com/assets/img/welcome/background.svg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body class="font-sans bg-gray-900 text-white flex flex-col min-h-screen">
    <!-- En-tête -->
    <header class="bg-gray-900 text-white py-4 shadow-md">
        <nav class="container mx-auto">
            <ul class="flex justify-around">
                <li>
                    <a href="#" class="text-white hover:text-red-400 font-semibold">Responsable inspection</a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Contenu principal -->
    <main class="container mx-auto pt-0 py-10 flex-grow flex flex-col items-center justify-center">
        <div class="bg-transparent text-white p-10 rounded-lg shadow-lg max-w-2xl mx-6 w-full">
            <h1 class="text-4xl font-bold mb-6 text-[#FF7F00] text-center">Ajouter un Producteur</h1>

            <!-- Formulaire d'ajout de réalisateur -->
            <form action="{{ route('producteurs.store') }}" method="POST" class="space-y-6">
                @csrf

                <div class="flex flex-col">
                    <label for="nom" class="text-lg text-gray-300">Nom</label>
                    <input type="text" id="nom" name="nom" placeholder="Nom du Réalisateur"
                        class="bg-gray-800 text-white p-3 rounded-md focus:outline-none focus:ring-2 focus:ring-[#FF7F00]"
                        value="{{ old('nom') }}">
                    @error('nom')
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-col">
                    <label for="prenom" class="text-lg text-gray-300">Prénom</label>
                    <input type="text" id="prenom" name="prenom" placeholder="Prénom du Réalisateur"
                        class="bg-gray-800 text-white p-3 rounded-md focus:outline-none focus:ring-2 focus:ring-[#FF7F00]"
                        value="{{ old('prenom') }}" >
                    @error('prenom')
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-col">
                    <label for="date_naiss" class="text-lg text-gray-300">Date de Naissance</label>
                    <input type="date" id="date_naissance" name="date_naissance"
                        class="bg-gray-800 text-white p-3 rounded-md focus:outline-none focus:ring-2 focus:ring-[#FF7F00]"
                        value="{{ old('date_naissance') }}">
                    @error('date_naissance')
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Bouton Soumettre -->
                <div class="text-center">
                    <button type="submit" class="bg-green-500 hover:bg-green-700 text-white py-2 px-6 rounded">Enregistrer</button>
                </div>
            </form>

        </div>
    </main>

    <!-- Pied de page -->
    <footer class="bg-gray-900 text-gray-500 py-4 mt-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Votre Organisation. Tous droits réservés.</p>
        </div>
    </footer>
</body>
</html>
