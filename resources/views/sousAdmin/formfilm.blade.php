<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Ajout de Film</title>
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
            <h1 class="text-4xl font-bold mb-6 text-[#FF7F00] text-center">Ajouter un Film</h1>

            <!-- Formulaire d'ajout de film -->
            <form action="{{ route('films.store') }}" method="POST" class="space-y-6">
                @csrf

                <!-- Titre du Film -->
                <div class="flex flex-col">
                    <label for="titre" class="text-lg text-gray-300">Titre</label>
                    <input type="text" id="titre" name="titre" placeholder="Titre du Film"
                        class="bg-gray-800 text-white p-3 rounded-md focus:outline-none focus:ring-2 focus:ring-[#FF7F00]"
                        value="{{ old('titre') }}">
                    @error('titre')
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Date du Film -->
                <div class="flex flex-col">
                    <label for="date" class="text-lg text-gray-300">Date</label>
                    <input type="date" id="date" name="date"
                        class="bg-gray-800 text-white p-3 rounded-md focus:outline-none focus:ring-2 focus:ring-[#FF7F00]"
                        value="{{ old('date') }}">
                    @error('date')
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Sujet du Film -->
                <div class="flex flex-col">
                    <label for="sujet" class="text-lg text-gray-300">Sujet</label>
                    <textarea id="sujet" name="sujet" placeholder="Sujet du Film"
                        class="bg-gray-800 text-white p-3 rounded-md focus:outline-none focus:ring-2 focus:ring-[#FF7F00]">{{ old('sujet') }}</textarea>
                    @error('sujet')
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Code du Réalisateur (FK) -->
                <div class="flex flex-col">
                    <label for="code_realisateur" class="text-lg text-gray-300">Réalisateur</label>
                    <select id="code_realisateur" name="code_realisateur"
                        class="bg-gray-800 text-white p-3 rounded-md focus:outline-none focus:ring-2 focus:ring-[#FF7F00]">
                        @foreach($realisateurs as $realisateur)
                            <option value="{{ $realisateur->id }}" {{ old('code_realisateur') == $realisateur->id ? 'selected' : '' }}>
                                {{ $realisateur->nom }} {{ $realisateur->prenom }}
                            </option>
                        @endforeach
                    </select>
                    @error('code_realisateur')
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Code du Producteur (FK) -->
                <div class="flex flex-col">
                    <label for="code_producteur" class="text-lg text-gray-300">Producteur</label>
                    <select id="code_producteur" name="code_producteur"
                        class="bg-gray-800 text-white p-3 rounded-md focus:outline-none focus:ring-2 focus:ring-[#FF7F00]">
                        @foreach($producteurs as $producteur)
                            <option value="{{ $producteur->id }}" {{ old('code_producteur') == $producteur->id ? 'selected' : '' }}>
                                {{ $producteur->nom }} {{ $producteur->prenom }}
                            </option>
                        @endforeach
                    </select>
                    @error('code_producteur')
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
