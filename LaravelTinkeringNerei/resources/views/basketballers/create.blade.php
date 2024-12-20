<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afegir Nou Basketballer</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-4 md:p-8">

<!-- Navbar -->
<nav class="bg-blue-600 p-4">
    <div class="max-w-6xl mx-auto flex justify-between items-center">
        <a href="/" class="text-white text-lg font-bold">Inici</a>
    </div>
</nav>

<!-- Main content -->
<div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6 mt-8">
    <h1 class="text-2xl md:text-3xl font-bold mb-6 text-center md:text-left">Afegir Nou Basketballer</h1>
    <form action="{{ route('basketballer.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="nombasketballer" class="block text-gray-700">Nom Basketballer:</label>
            <input type="text" name="nombasketballer" id="nombasketballer" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>
        <div class="mb-4">
            <label for="equipbasketballer" class="block text-gray-700">Equip:</label>
            <input type="text" name="equipbasketballer" id="equipbasketballer" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="mb-4">
            <label for="edatbasketballer" class="block text-gray-700">Edat:</label>
            <input type="number" name="edatbasketballer" id="edatbasketballer" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>
        <div class="mb-4">
            <label for="posiciobasketballer" class="block text-gray-700">Posició:</label>
            <input type="text" name="posiciobasketballer" id="posiciobasketballer" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>
        <div class="mb-4">
            <label for="dorsalbasketballer" class="block text-gray-700">Dorsal:</label>
            <input type="number" name="dorsalbasketballer" id="dorsalbasketballer" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>
        <div class="flex flex-col md:flex-row items-center md:items-end gap-4 mt-6">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 w-full md:w-auto">Afegir Basketballer</button>
            <a href="/" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 w-full md:w-auto text-center">Volver a la pàgina principal</a>
        </div>
    </form>
</div>

<!-- Footer -->
<footer class="bg-blue-600 mt-8 p-4">
    <div class="max-w-6xl mx-auto text-center text-white">
        <p>&copy; 2024 Nerehei. Tots els drets reservats.</p>
    </div>
</footer>

</body>
</html>
