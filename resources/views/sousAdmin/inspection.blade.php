<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsable Inspection</title>
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
                    <a href="{{ url('index') }}" class="text-white hover:text-red-400 font-semibold">Responsable Inspection</a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Contenu principal -->
    <main class="container mx-auto pt-0 py-10 flex-grow flex flex-col items-center justify-center">
        <div class="bg-transparent text-white p-10 rounded-lg shadow-lg max-w-6xl mx-auto w-full">
            <h1 class="text-4xl font-bold mb-6 text-[#FF7F00] text-center">Films Enregistrés</h1>
            <!-- Bouton Ajouter -->
            <div class="text-center mb-6">
                <a href="{{ route('films') }}" class="bg-green-500 hover:bg-green-700 text-white py-2 px-6 rounded">
                    Ajouter un Film
                </a>
            </div>
            <!-- Tableau des films -->
            <table class="min-w-full table-auto text-left">
                <thead class="border-b-2 border-gray-700">
                    <tr>
                        <th class="py-3 px-4 text-lg text-gray-300">Code</th>
                        <th class="py-3 px-4 text-lg text-gray-300">Titre</th>
                        <th class="py-3 px-4 text-lg text-gray-300">Date</th>
                        <th class="py-3 px-4 text-lg text-gray-300">Sujet</th>
                        <th class="py-3 px-4 text-lg text-gray-300">Réalisateur</th>
                        <th class="py-3 px-4 text-lg text-gray-300">Producteur</th>
                        <th class="py-3 px-4 text-lg text-gray-300"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($films as $film)
                    <tr class="border-b border-gray-700">
                        <td class="py-3 px-4">{{ $film->id}}</td>
                        <td class="py-3 px-4">{{ $film->titre }}</td>
                        <td class="py-3 px-4">{{ $film->date }}</td>
                        <td class="py-3 px-4">{{ $film->sujet }}</td>
                        <td class="py-3 px-4">{{ $film->realisateur->nom }} {{ $film->realisateur->prenom }}</td>
                        <td class="py-3 px-4">{{ $film->producteur->nom }} {{ $film->producteur->prenom }}</td>
                        <td class="py-3 px-4">
                            <!-- Formulaire de suppression -->
                            <form action="{{ route('films.destroy', $film->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce film ?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white py-1 px-4 rounded">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </main>
    <main class="container mx-auto pt-0 py-10 flex-grow flex flex-col items-center justify-center">
        <div class="bg-transparent text-white p-10 rounded-lg shadow-lg max-w-6xl mx-auto w-full">
            <h1 class="text-4xl font-bold mb-6 text-[#FF7F00] text-center">Réalisateurs Enregistrés</h1>
            <!-- Bouton Ajouter -->
            <div class="text-center mb-6">
                <a href="{{ route('realisateur') }}" class="bg-green-500 hover:bg-green-700 text-white py-2 px-6 rounded inline-block">Ajouter un Réalisateur</a>
            </div>
            <!-- Tableau des réalisateurs -->
            <table class="min-w-full table-auto text-left">
                <thead class="border-b-2 border-gray-700">
                    <tr>
                        <th class="py-3 px-4 text-lg text-gray-300">Code</th>
                        <th class="py-3 px-4 text-lg text-gray-300">Nom</th>
                        <th class="py-3 px-4 text-lg text-gray-300">Prénom</th>
                        <th class="py-3 px-4 text-lg text-gray-300">Date de Naissance</th>
                        <th class="py-3 px-4 text-lg text-gray-300"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($realisateurs as $realisateur)
                    <tr class="border-b border-gray-700">
                        <td class="py-3 px-4">{{ $realisateur->id }}</td>  <!-- Utiliser 'id' ici -->
                        <td class="py-3 px-4">{{ $realisateur->nom }}</td>
                        <td class="py-3 px-4">{{ $realisateur->prenom }}</td>
                        <td class="py-3 px-4">{{ $realisateur->date_naiss }}</td>
                        <td class="py-3 px-4">
                            <!-- Formulaire de suppression -->
                            <form action="{{ route('realisateur.destroy', $realisateur->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce réalisateur ?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white py-1 px-4 rounded">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
    <main class="container mx-auto pt-0 py-10 flex-grow flex flex-col items-center justify-center">
        <div class="bg-transparent text-white p-10 rounded-lg shadow-lg max-w-6xl mx-auto w-full">
            <h1 class="text-4xl font-bold mb-6 text-[#FF7F00] text-center">producteurs Enregistrés</h1>
            <!-- Bouton Ajouter -->
            <div class="text-center mb-6">
                <a href="{{ route('producteur') }}" class="bg-green-500 hover:bg-green-700 text-white py-2 px-6 rounded inline-block">Ajouter un producteur</a>
            </div>
            <!-- Tableau des réalisateurs -->
            <table class="min-w-full table-auto text-left">
                <thead class="border-b-2 border-gray-700">
                    <tr>
                        <th class="py-3 px-4 text-lg text-gray-300">Code</th>
                        <th class="py-3 px-4 text-lg text-gray-300">Nom</th>
                        <th class="py-3 px-4 text-lg text-gray-300">Prénom</th>
                        <th class="py-3 px-4 text-lg text-gray-300">Date de Naissance</th>
                        <th class="py-3 px-4 text-lg text-gray-300"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($producteurs as $producteur)
                    <tr class="border-b border-gray-700">
                        <td class="py-3 px-4">{{ $producteur->id }}</td>  <!-- Utiliser 'id' ici -->
                        <td class="py-3 px-4">{{ $producteur->nom }}</td>
                        <td class="py-3 px-4">{{ $producteur->prenom }}</td>
                        <td class="py-3 px-4">{{ $producteur->date_naiss }}</td>
                        <td class="py-3 px-4">
                            <!-- Formulaire de suppression -->
                            <form action="{{ route('producteurs.destroy', $producteur->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce réalisateur ?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white py-1 px-4 rounded">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
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
