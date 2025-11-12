<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Gestion des Utilisateurs</title>
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
                    <a href="{{ url('index') }}" class="text-white hover:text-red-400 font-semibold">Admin - Utilisateurs</a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Contenu principal -->
    <main class="container mx-auto pt-10 flex-grow flex flex-col items-center justify-center">
        <div class="bg-transparent text-white p-10 rounded-lg shadow-lg max-w-6xl mx-auto w-full">
            <h1 class="text-4xl font-bold mb-6 text-[#FF7F00] text-center">Utilisateurs Enregistrés</h1>

            <!-- Bouton Ajouter -->
            <div class="text-center mb-6">
                <a href="{{ url('formutilisateur') }}" class="bg-green-500 hover:bg-green-700 text-white py-2 px-6 rounded inline-block">
                    Ajouter un Utilisateur
                </a>
            </div>

            <!-- Tableau des utilisateurs -->
            <table class="min-w-full table-auto text-left">
                <thead class="border-b-2 border-gray-700">
                    <tr>
                        <th class="py-3 px-4 text-lg text-gray-300">Nom</th>
                        <th class="py-3 px-4 text-lg text-gray-300">Prénom</th>
                        <th class="py-3 px-4 text-lg text-gray-300">Nom d'utilisateur</th>
                        <th class="py-3 px-4 text-lg text-gray-300">Rôle</th>
                        <th class="py-3 px-4 text-lg text-gray-300">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($utilisateurs as $utilisateur)
                    <tr class="border-b border-gray-700">
                        <td class="py-3 px-4">{{ $utilisateur->nom }}</td>
                        <td class="py-3 px-4">{{ $utilisateur->prenom }}</td>
                        <td class="py-3 px-4">{{ $utilisateur->nom_utilisateur }}</td>
                        <td class="py-3 px-4">{{ $utilisateur->role }}</td>
                        <td class="py-3 px-4">
                            <!-- Bouton Supprimer -->
                            <form action="{{ url('utilisateurs/' . $utilisateur->id) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer cet utilisateur ?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white py-1 px-3 rounded">
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
