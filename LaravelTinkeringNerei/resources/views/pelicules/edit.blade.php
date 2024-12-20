<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Película</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<!-- Navbar -->
<nav class="bg-blue-600 p-4">
    <div class="max-w-6xl mx-auto flex justify-between items-center">
        <a href="/" class="text-white text-lg font-bold">Inici</a>
        <div class="flex space-x-4">
            <a href="/pelicula/create" class="text-white px-4 py-2 rounded hover:bg-blue-800">Afegir Pel·lícula</a>
            <a href="/pelicula" class="text-white px-4 py-2 rounded hover:bg-blue-800">Llista de Pel·lícules</a>
        </div>
    </div>
</nav>

<!-- Main Content -->
<div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6 mt-8">
    <h1 class="text-3xl font-bold mb-4 text-center sm:text-4xl">Editar Pel·lícula</h1>
    <form action="{{ route('pelicula.update') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $film->id }}">
        <div class="mb-4">
            <label for="NomPelicula" class="block text-gray-700">Nom:</label>
            <input type="text" name="NomPelicula" value="{{ $film->NomPelicula }}" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>
        <div class="mb-4">
            <label for="Sipnosis" class="block text-gray-700">Sipnosis:</label>
            <input type="text" name="Sipnosis" value="{{ $film->Sipnosis }}" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>
        <div class="mb-4">
            <label for="Paisorigen" class="block text-gray-700">País d'origen:</label>
            <input type="text" name="Paisorigen" value="{{ $film->Paisorigen }}" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>
        <div class="mb-4">
            <label for="Durada" class="block text-gray-700">Duració (min):</label>
            <input type="number" name="Durada" value="{{ $film->Durada }}" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>
        <div class="mb-4">
            <label for="Dataestreno" class="block text-gray-700">Data d'estreno:</label>
            <input type="date" name="Dataestreno" value="{{ $film->Dataestreno }}" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 w-full sm:w-auto mt-4">Actualitzar</button>
    </form>
    <a href="/pelicula" class="text-gray-500 hover:underline mt-4 block text-center sm:text-left">Volver</a>
</div>

<!-- Footer -->
<footer class="bg-blue-600 mt-8 p-4">
    <div class="max-w-6xl mx-auto text-center text-white">
        <p>&copy; 2024 Nerehei. Tots els drets reservats.</p>
    </div>
</footer>

</body>
</html>
