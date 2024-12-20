<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Pel·lícula</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-4 md:p-8">

<!-- Navbar -->
<nav class="bg-blue-600 p-4">
    <div class="max-w-6xl mx-auto flex justify-between items-center">
        <a href="/" class="text-white text-lg font-bold">Inici</a>
    </div>
</nav>

<!-- Main Content -->
<div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6 mt-8">
    <h1 class="text-2xl md:text-3xl font-bold mb-4">{{ $film->NomPelicula }}</h1>
    <p class="text-sm md:text-base mb-2"><strong>Sipnosis:</strong> {{ $film->Sipnosis }}</p>
    <p class="text-sm md:text-base mb-2"><strong>País d'Origen:</strong> {{ $film->Paisorigen }}</p>
    <p class="text-sm md:text-base mb-2"><strong>Durada:</strong> {{ $film->Durada }} minuts</p>
    <p class="text-sm md:text-base mb-4"><strong>Data d'Estrena:</strong> {{ $film->Dataestreno }}</p>
    <a href="/pelicula" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 mt-4 inline-block text-center">Tornar</a>
</div>

<!-- Footer -->
<footer class="bg-blue-600 mt-8 p-4">
    <div class="max-w-6xl mx-auto text-center text-white">
        <p>&copy; 2024 Nerehei. Tots els drets reservats.</p>
    </div>
</footer>

</body>
</html>
