<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Doc à Tunis</title>
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
    <div class="w-full max-w-md p-4 bg-gray-800 bg-opacity-90 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-center mb-6 text-red-500">Inscription</h1>

        <!-- Formulaire d'inscription -->
        <form action="{{ route('register') }}" method="POST" class="space-y-6">
            @csrf
            <!-- Nom -->
            <div>
                <label for="name" class="block text-lg font-medium mb-2 text-white">Nom :</label>
                <input
                    type="text"
                    id="nom"
                    name="nom"
                    value="{{ old('nom') }}"
                    class="w-full p-3 border border-gray-600 bg-gray-700 text-white rounded-lg"
                    placeholder="Entrez votre nom">
                    @error('nom')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror

            </div>

            <!-- Prénom -->
            <div>
                <label for="lastname" class="block text-lg font-medium mb-2 text-white">Prénom :</label>
                <input
                    type="text"
                    id="prenom"
                    name="prenom"
                    class="w-full p-3 border border-gray-600 bg-gray-700 text-white rounded-lg"
                    placeholder="Entrez votre prénom"
                    value="{{ old('prenom') }}">
                    @error('prenom')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror

            </div>

            <!-- Nom d'utilisateur -->
            <div>
                <label for="nom_utilisateur" class="block text-lg font-medium mb-2 text-white">Nom d'utilisateur :</label>
                <input
                    type="text"
                    id="nom_utilisateur"
                    name="nom_utilisateur"
                    value="{{ old('nom_utilisateur') }}"
                    class="w-full p-3 border border-gray-600 bg-gray-700 text-white rounded-lg"
                    placeholder="Choisissez un nom d'utilisateur">
                    @error('nom_utilisateur')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
            </div>

            <!-- Adresse Email -->
            <div>
                <label for="email" class="block text-lg font-medium mb-2 text-white">Adresse Email :</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    class="w-full p-3 border border-gray-600 bg-gray-700 text-white rounded-lg"
                    placeholder="Entrez votre adresse email">
                    @error('email')
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
                    class="w-full p-3 border border-gray-600 bg-gray-700 text-white rounded-lg"
                    placeholder="Choisissez un mot de passe">
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror

            </div>

            <!-- Confirmation mot de passe -->
            <div>
                <label for="password_confirmation" class="block text-lg font-medium mb-2 text-white">Confirmez le mot de passe :</label>
                <input
                    type="password"
                    id="password_confirmation"
                    name="password_confirmation"
                    class="w-full p-3 border border-gray-600 bg-gray-700 text-white rounded-lg"
                    placeholder="Confirmez votre mot de passe">
            </div>
            <!-- Bouton d'inscription -->
            <button
                type="submit"
                class="w-full bg-red-600 text-white py-3 rounded-lg font-medium hover:bg-red-700 transition">
                S'inscrire
            </button>
        </form>
        <!-- Lien vers la connexion -->
        <p class="mt-6 text-center text-gray-400">
            Déjà inscrit ?
            <a href="{{ route('connecter') }}" class="text-red-500 font-medium hover:underline">Se connecter</a>
        </p>
    </div>
</body>
</html>
