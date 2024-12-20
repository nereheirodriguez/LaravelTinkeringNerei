<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Llista de Pel·lícules</title>
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
    <h1 class="text-2xl md:text-3xl font-bold mb-4 text-center md:text-left">Llista de Pel·lícules</h1>
    <div class="flex flex-col md:flex-row gap-4 mb-4">
        <a href="/pelicula/create" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 text-center w-full md:w-auto">Afegir Nova Pel·lícula</a>
        <a href="/" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 text-center w-full md:w-auto">Tornar a la pàgina principal</a>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
            <tr class="bg-gray-200 text-gray-600 uppercase text-xs md:text-sm leading-normal">
                <th class="py-2 px-4 md:py-3 md:px-6 text-left">Id</th>
                <th class="py-2 px-4 md:py-3 md:px-6 text-left">Nom Pel·lícula</th>
                <th class="py-2 px-4 md:py-3 md:px-6 text-left">Sipnosis</th>
                <th class="py-2 px-4 md:py-3 md:px-6 text-left">País Origen</th>
                <th class="py-2 px-4 md:py-3 md:px-6 text-center">Durada</th>
                <th class="py-2 px-4 md:py-3 md:px-6 text-center">Data estreno</th>
                <th class="py-2 px-4 md:py-3 md:px-6 text-center">Accions</th>
            </tr>
            </thead>
            <tbody class="text-gray-600 text-xs md:text-sm font-light">
            @forelse ($films as $film)
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-4 md:py-3 md:px-6">{{ $film->id }}</td>
                    <td class="py-3 px-4 md:py-3 md:px-6">{{ $film->NomPelicula }}</td>
                    <td class="py-3 px-4 md:py-3 md:px-6">{{ $film->Sipnosis }}</td>
                    <td class="py-3 px-4 md:py-3 md:px-6">{{ $film->Paisorigen }}</td>
                    <td class="py-3 px-4 md:py-3 md:px-6 text-center">{{ $film->Durada }}</td>
                    <td class="py-3 px-4 md:py-3 md:px-6 text-center">{{ $film->Dataestreno }}</td>
                    <td class="py-3 px-4 md:py-3 md:px-6 text-center">
                        <a href="{{ route('pelicula.edit', $film->id) }}" class="text-blue-500 hover:text-blue-700 mr-2">Editar</a>
                        <a href="{{ route('pelicula.destroy', $film->id) }}" class="text-red-500 hover:text-red-700" onclick="return confirm('¿Estas segur de que desitges borrar aquesta pel.licula?')">Eliminar</a>
                        <a href="{{ route('pelicula.show', $film->id) }}" class="text-blue-500 hover:text-blue-700">Mostrar</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="py-3 px-4 text-center">No hi ha pel·lícules disponibles.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>

<!-- Footer -->
<footer class="bg-blue-600 mt-8 p-4">
    <div class="max-w-6xl mx-auto text-center text-white">
        <p>&copy; 2024 Nerehei. Tots els drets reservats.</p>
    </div>
</footer>

</body>
</html>
