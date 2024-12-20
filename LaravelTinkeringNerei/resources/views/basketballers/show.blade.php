<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Jugador de Bàsquet</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">

<!-- Navbar -->
<nav class="bg-blue-600 p-4">
    <div class="max-w-6xl mx-auto flex justify-between items-center">
        <a href="/" class="text-white text-lg font-bold">Inici</a>
    </div>
</nav>

<!-- Main content -->
<div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6 mt-8">
    <h1 class="text-3xl font-bold mb-4 text-center">{{ $basketballer->nombasketballer }}</h1>
    <div class="space-y-4">
        <p><strong>Equip:</strong> {{ $basketballer->equipbasketballer }}</p>
        <p><strong>Edat:</strong> {{ $basketballer->edatbasketballer }}</p>
        <p><strong>Posició:</strong> {{ $basketballer->posiciobasketballer }}</p>
        <p><strong>Dorsal:</strong> {{ $basketballer->dorsalbasketballer }}</p>
    </div>
    <a href="/basketballers" class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-700 mt-6 inline-block mx-auto md:mx-0">Tornar</a>
</div>

<!-- Footer -->
<footer class="bg-blue-600 mt-8 p-4">
    <div class="max-w-6xl mx-auto text-center text-white">
        <p>&copy; 2024 Nerehei. Tots els drets reservats.</p>
    </div>
</footer>

</body>
</html>
