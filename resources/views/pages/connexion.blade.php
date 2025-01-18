<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Doc à Tunis</title>
    <!-- Tailwind CSS -->
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
<body class="min-h-screen flex items-center justify-center text-white bg-gray-900">

    <!-- Conteneur principal -->
    <div class="w-full max-w-md p-8 bg-gray-800 bg-opacity-90 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-center mb-6 text-red-500">Connexion</h1>

        <!-- Formulaire de connexion -->
        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf <!-- Token CSRF pour sécuriser le formulaire -->

            <!-- Nom d'utilisateur -->
            <div>
                <label for="username" class="block text-lg font-medium mb-2 text-white">Nom d'utilisateur :</label>
                <input
                    type="text"
                    id="nom_utilisateur"
                    name="nom_utilisateur"
                    class="w-full p-3 border border-gray-600 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500"
                    placeholder="Entrez votre nom d'utilisateur">
                    @error('nom_utilisateur')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
            </div>

            <!-- Mot de passe -->
            <div>
                <label for="password" class="block text-lg font-medium mb-2 text-white">Mot de passe :</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    class="w-full p-3 border border-gray-600 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500"
                    placeholder="Entrez votre mot de passe"
                    required>
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
            </div>

            <!-- Bouton de connexion -->
            <button
                type="submit"
                class="w-full bg-red-600 text-white py-3 rounded-lg font-medium hover:bg-red-700 transition">
                Se connecter
            </button>
        </form>
        <p class="mt-6 text-center text-gray-400">
            Pas encore inscrit ?
            <a href="{{ url('inscription') }}" class="text-red-500 font-medium hover:underline">Créer un compte</a>
        </p>
</body>
</html>
