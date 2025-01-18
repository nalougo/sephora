<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('APP_NAME') }}</title>
    <!-- Lien vers le fichier CSS de Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white">

    <header class="absolute top-0 left-0 w-full p-5 z-50 flex justify-between">
        <!-- Logo -->
        <div class="absolute top-5 left-5 w-40 h-8"></div>
            <img src="images/logoo.png" alt="DocATunis" class="w-32 h-8">
        </div>

        <!-- Navigation -->
        <nav class="ml-auto">
            <div class="text-center">
                <strong>
                    <a href="{{ url('planning') }}" class="text-white text-lg py-3 px-6 rounded-full hover:text-red-500 transition">Films</a>
                    <a href="{{ route('connecter') }}" class="text-white text-lg py-3 px-6 rounded-full hover:text-red-500 transition">Se connecter</a>
                    <a href="{{ route('register') }}" class="text-white text-lg py-3 px-6 rounded-full hover:text-red-500 transition">S'inscrire</a>
                    <a href="{{ url('apropos') }}" class="text-white text-lg py-3 px-6 rounded-full hover:text-red-500 transition">A propos</a>
                </strong>
            </div>
        </nav>
    </header>

    <!-- Image Background -->
    <div class="relative h-[92vh] bg-cover bg-center" style="background-image: url('images/cassa.jpg');"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-black to-transparent">
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-white">
                <h1 class="text-6xl font-serif font-bold text-red-600 edu-au-vic-wa-nt-arrows-header">DOC A TUNIS</h1>
                <p class="text-2xl mt-0 italic">Tout savoir sur vos films préférés</p>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="bg-gray-800 py-5 text-center text-gray-400">
        <p>&copy; 2024 Docatunis - Tous droits réservés</p>
    </footer>

</body>
</html>
