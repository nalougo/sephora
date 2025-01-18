<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Ajout d'Utilisateur</title>
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
    <header class="bg-gray-900 text-white py-3 shadow-md">
        <nav class="container mx-auto">
            <ul class="flex justify-around">
                <li>
                    <a href="#" class="text-white hover:text-red-400 font-semibold">Gestion des Utilisateurs</a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Contenu principal -->
    <main class="container mx-auto py-6 flex-grow flex flex-col items-center justify-center">
        <div class="bg-transparent text-white p-8 rounded-lg shadow-lg max-w-lg mx-4 w-full">
            <h1 class="text-3xl font-bold mb-4 text-[#FF7F00] text-center">Ajouter un Utilisateur</h1>

            <!-- Formulaire d'ajout d'utilisateur -->
            <form action="{{ route('utilisateurs.store') }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label for="nom" class="block text-sm">Nom</label>
                    <input type="text" id="nom" name="nom" placeholder="Nom de l'utilisateur"
                        class="w-full bg-gray-800 text-white p-2 rounded focus:outline-none focus:ring-2 focus:ring-[#FF7F00]"
                        value="{{ old('nom') }}">
                    @error('nom')
                        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="prenom" class="block text-sm">Prénom</label>
                    <input type="text" id="prenom" name="prenom" placeholder="Prénom de l'utilisateur"
                        class="w-full bg-gray-800 text-white p-2 rounded focus:outline-none focus:ring-2 focus:ring-[#FF7F00]"
                        value="{{ old('prenom') }}">
                    @error('prenom')
                        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="nom_utilisateur" class="block text-sm">Nom d'utilisateur</label>
                    <input type="text" id="nom_utilisateur" name="nom_utilisateur" placeholder="Nom d'utilisateur"
                        class="w-full bg-gray-800 text-white p-2 rounded focus:outline-none focus:ring-2 focus:ring-[#FF7F00]"
                        value="{{ old('nom_utilisateur') }}">
                    @error('nom_utilisateur')
                        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="email" class="block text-sm">Adresse Email</label>
                    <input type="email" id="email" name="email" placeholder="Adresse email de l'utilisateur"
                        class="w-full bg-gray-800 text-white p-2 rounded focus:outline-none focus:ring-2 focus:ring-[#FF7F00]"
                        value="{{ old('email') }}">
                    @error('email')
                        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="role" class="block text-sm">Rôle</label>
                    <select id="role" name="role" class="w-full bg-gray-800 text-white p-2 rounded focus:outline-none focus:ring-2 focus:ring-[#FF7F00]">
                        <option value="user" selected>user</option>
                        <option value="responsable_inspection" selected>responsable inspection</option>
                        <option value="responsable_production">responsable production</option>
                        <option value="president_jury">president jury</option>
                        <option value="administrateur">Admin</option>
                    </select>
                    @error('role')
                        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="password" class="block text-sm">Mot de Passe</label>
                    <input type="password" id="password" name="password" placeholder="Mot de passe"
                        class="w-full bg-gray-800 text-white p-2 rounded focus:outline-none focus:ring-2 focus:ring-[#FF7F00]">
                    @error('password')
                        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm">Confirmation du Mot de Passe</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirmez"
                        class="w-full bg-gray-800 text-white p-2 rounded focus:outline-none focus:ring-2 focus:ring-[#FF7F00]">
                    @error('password_confirmation')
                        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div class="text-center">
                    <button type="submit" class="w-1/3 bg-green-500 hover:bg-green-600 text-white py-2 rounded mx-auto">Enregistrer</button>
                </div>
            </form>
        </div>
    </main>

    <!-- Pied de page -->
    <footer class="bg-gray-900 text-gray-500 py-3">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Votre Organisation. Tous droits réservés.</p>
        </div>
    </footer>
</body>
</html>
