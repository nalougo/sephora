<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projection </title>
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
    <div class="w-full max-w-md p-4 shadow-lg bg-opacity-90 rounded-lg">
        <h1 class="text-4xl font-bold text-center mb-6 text-[#FF7F00]">Ajouter une Projection</h1>

        <!-- Formulaire d'ajout de projection -->
        <form action="" method="POST" enctype="multipart/form-data" class="space-y-6">
            <!-- Code Film -->
            <div>
                <label for="code_film" class="block text-lg font-medium mb-2 text-white">Film :</label>
                <select name="code_film" id="code_film" class="w-full p-3 border border-gray-600 bg-gray-700 text-white rounded-lg">
                    <!-- Ajoutez ici les films disponibles -->
                    <option value="1">Film 1</option>
                    <option value="2">Film 2</option>
                </select>
            </div>

            <!-- Date de Projection -->
            <div>
                <label for="date" class="block text-lg font-medium mb-2 text-white">Date de Projection :</label>
                <input
                    type="date"
                    id="date"
                    name="date"
                    class="w-full p-3 border border-gray-600 bg-gray-700 text-white rounded-lg">
            </div>

            <!-- Heure de Projection -->
            <div>
                <label for="heure" class="block text-lg font-medium mb-2 text-white">Heure de Projection :</label>
                <input
                    type="time"
                    id="heure"
                    name="heure"
                    class="w-full p-3 border border-gray-600 bg-gray-700 text-white rounded-lg">
            </div>

            <!-- Lieu de Projection -->
            <div>
                <label for="lieu" class="block text-lg font-medium mb-2 text-white">Lieu :</label>
                <input
                    type="text"
                    id="lieu"
                    name="lieu"
                    class="w-full p-3 border border-gray-600 bg-gray-700 text-white rounded-lg"
                    placeholder="Entrez le lieu de projection">
            </div>

            <!-- Image de Projection -->
            <div>
                <label for="image" class="block text-lg font-medium mb-2 text-white">Image du Film :</label>
                <input
                    type="file"
                    id="image"
                    name="image"
                    class="w-full p-3 border border-gray-600 bg-gray-700 text-white rounded-lg"
                    accept="image/*">
            </div>

            <!-- Bouton d'ajout -->
            <div class="text-center mb-6">
                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white py-2 px-6 rounded">Publier</button>
            </div>
        </form>
    </div>
</body>
</html>
