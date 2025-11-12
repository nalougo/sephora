<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsable Production</title>
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
                    <a href="{{ url('index') }}" class="text-white hover:text-red-400 font-semibold">Responsable Production</a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Contenu principal -->
    <main class="container mx-auto pt-0 py-10 flex-grow flex flex-col items-center justify-center">
        <div class="bg-transparent text-white p-10 rounded-lg shadow-lg max-w-6xl mx-auto w-full">
            <h1 class="text-4xl font-bold mb-6 text-[#FF7F00] text-center">Films Publiés</h1>
            <!-- Bouton Ajouter -->
            <div class="text-center mb-6">
                <a href="{{ route('projection') }}" class="bg-green-500 hover:bg-green-700 text-white py-2 px-6 rounded inline-block">Ajouter une Projection</a>
            </div>
            <!-- Tableau des projections -->
            <table class="min-w-full table-auto text-left">
                <thead class="border-b-2 border-gray-700">
                    <tr>
                        <th class="py-3 px-4 text-lg text-gray-300">Titre du Film</th>
                        <th class="py-3 px-4 text-lg text-gray-300">Date de Projection</th>
                        <th class="py-3 px-4 text-lg text-gray-300">Heure de Projection</th>
                        <th class="py-3 px-4 text-lg text-gray-300">Lieu</th>
                        <th class="py-3 px-4 text-lg text-gray-300">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projections as $projection)
                    <tr class="border-b border-gray-700">
                        <td class="py-3 px-4">{{ $projection->film->titre }}</td> <!-- Titre du film récupéré -->
                        <td class="py-3 px-4">{{ $projection->date }}</td>
                        <td class="py-3 px-4">{{ $projection->heure }}</td>
                        <td class="py-3 px-4">{{ $projection->lieu }}</td>
                        <td class="py-3 px-4">
                            <!-- Formulaire pour supprimer la projection -->
                            <form action="{{ route('projection.delete', $projection->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white py-1 px-4 rounded">
                                    Supprimer
                                </button>
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
