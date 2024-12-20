<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App de Pel·lícules i Basket</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f7fa;
        }

        .navbar {
            background: linear-gradient(to right, #4e79b3, #1d3557);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            opacity: 0.95;
            animation: slideIn 1s ease-out;
        }

        @keyframes slideIn {
            0% {
                transform: translateY(-100%);
            }

            100% {
                transform: translateY(0);
            }
        }

        .navbar a:hover {
            text-shadow: 0 2px 4px rgba(255, 255, 255, 0.6);
            animation: bounce 0.6s ease-in-out;
        }

        @keyframes bounce {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0);
            }
        }

        .hero {
            color: white;
            padding-top: 12rem;
            text-align: center;
            background-color: #1d3557;
            animation: fadeInUp 2s ease-out;
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(50px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero h1 {
            font-size: 4rem;
            text-shadow: 3px 3px 15px rgba(0, 0, 0, 0.6);
            transition: color 0.3s, text-shadow 0.3s;
        }

        .hero h1:hover {
            color: #ffdf00;
            text-shadow: 0 0 15px #ffdf00, 0 0 30px #ffdf00;
            animation: textGlow 1s ease-in-out infinite alternate;
        }

        @keyframes textGlow {
            0% {
                text-shadow: 0 0 15px #ffdf00, 0 0 30px #ffdf00;
            }

            100% {
                text-shadow: 0 0 25px #ffdf00, 0 0 45px #ffdf00;
            }
        }

        .hero-overlay {
            background: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 0;
        }

        .hero-content {
            position: relative;
            z-index: 10;
        }

        .button-hover {
            transform: scale(1);
            transition: all 0.3s ease-in-out;
            animation: rotateButton 1.5s ease-in-out infinite alternate;
        }

        @keyframes rotateButton {
            0% {
                transform: rotate(0deg);
            }

            50% {
                transform: rotate(15deg);
            }

            100% {
                transform: rotate(0deg);
            }
        }

        .button-hover:hover {
            transform: rotate(360deg) translateY(-5px) scale(1.1);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        .footer {
            background: #283747;
            color: #ddd;
            animation: fadeIn 1.5s ease-in-out;
        }

        .footer a:hover {
            color: #ffdf00;
            animation: fadeOut 0.5s ease-in-out;
        }

        @keyframes fadeOut {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0.6;
            }
        }

        /* Millores per la responsivitat */
        @media (max-width: 1024px) {
            .hero h1 {
                font-size: 3rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .navbar a {
                font-size: 1rem;
            }
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .button-hover {
                width: 100%;
                margin: 10px 0;
            }

            .hero-content {
                padding: 0 15px;
            }

            .navbar {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .navbar .flex {
                flex-direction: column;
                align-items: center;
            }
        }

        @media (max-width: 480px) {
            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 0.9rem;
            }

            .button-hover {
                width: 100%;
                margin: 10px 0;
            }

            .footer-text {
                font-size: 0.8rem;
            }
        }

        .scroll-fade {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInScroll 1s forwards;
        }

        @keyframes fadeInScroll {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .show-on-scroll {
            animation: fadeInScroll 1s forwards;
        }

        .show-on-scroll-delay {
            animation: fadeInScroll 1.5s forwards;
        }

        /* Efecte de moviment per les imatges */
        .image-slide {
            opacity: 0;
            transform: translateX(-50px);
            animation: slideInImage 1s forwards;
        }

        @keyframes slideInImage {
            0% {
                opacity: 0;
                transform: translateX(-50px);
            }

            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Efecte de salt per als textos */
        .text-bounce {
            animation: bounceText 1s ease-in-out infinite alternate;
        }

        @keyframes bounceText {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0);
            }
        }

        /* Colors per les seccions */
        .section-films {
            background-color: #4e79b3;
            color: white;
        }

        .section-basketballers {
            background-color: #ff6f61;
            color: white;
        }

        .section-contacte {
            background-color: #ffdf00;
            color: #1d3557;
        }

        .footer-text {
            font-size: 0.9rem;
            text-align: center;
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-800">

<!-- Navbar -->
<nav class="navbar fixed w-full z-50 text-white py-4">
    <div class="max-w-6xl mx-auto px-6 flex justify-between items-center">
        <a href="#inici" class="text-3xl font-extrabold tracking-wider hover:text-indigo-400 transition duration-300 text-bounce">🎬🏀 App de Pel·lícules i Basket</a>
        <div class="flex space-x-6">
            <a href="/pelicula" class="hover:text-indigo-400 transition duration-300 text-bounce">Pel·lícules</a>
            <a href="/basketballers" class="hover:text-green-400 transition duration-300 text-bounce">Basketballers</a>
            <a href="#films" class="hover:text-indigo-400 transition duration-300 text-bounce">Secció Pel·lícules</a>
            <a href="#basketballers" class="hover:text-green-400 transition duration-300 text-bounce">Secció Basketballers</a>
            <a href="#contacte" class="hover:text-indigo-400 transition duration-300 text-bounce">Contacte</a>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section id="inici" class="hero relative h-screen flex justify-center items-center bg-cover bg-center" style="background-image: url('https://wallpapers.com/images/featured/space-jam-2-p7e808oig75g103h.jpg');">
    <div class="hero-overlay absolute top-0 left-0 right-0 bottom-0 bg-black opacity-50 z-0"></div>
    <div class="hero-content max-w-4xl mx-auto text-center relative z-10">
        <h1 class="font-extrabold mb-6 text-white show-on-scroll">Descobreix l'App de Pel·lícules i Basketballers</h1>
        <p class="text-lg mb-8 text-gray-300 show-on-scroll-delay">Gestiona i explora continguts exclusius amb un sol clic.</p>
        <div class="flex justify-center space-x-4">
            <a href="#films" class="button-hover bg-indigo-600 text-white font-semibold py-3 px-8 rounded-lg hover:bg-indigo-700">Explora Pel·lícules</a>
            <a href="#basketballers" class="button-hover bg-green-600 text-white font-semibold py-3 px-8 rounded-lg hover:bg-green-700">Explora Basketballers</a>
        </div>
    </div>
</section>

<!-- Pel·lícules Section -->
<section id="films" class="py-16 section-films text-center">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-4xl font-bold mb-6 text-white text-bounce">Les Nostres Pel·lícules</h2>
        <p class="text-gray-300 mb-8">Explora una selecció especial de pel·lícules per a tots els gustos.</p>
        <a href="/pelicula" class="button-hover bg-indigo-600 text-white font-semibold py-3 px-6 rounded-lg hover:bg-indigo-700">Anar a la pàgina Pel.lícules</a>
    </div>
</section>

<!-- Basketballers Section -->
<section id="basketballers" class="py-16 section-basketballers text-center">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-4xl font-bold mb-6 text-white text-bounce">Els Millors Basketballers</h2>
        <p class="text-gray-300 mb-8">Coneix els atletes més destacats i afegeix-los a la teva llista.</p>
        <a href="/basketballers" class="button-hover bg-green-600 text-white font-semibold py-3 px-6 rounded-lg hover:bg-green-700">Anar a la pàgina Basketballers</a>
    </div>
</section>

<!-- Contact Section -->
<section id="contacte" class="py-16 section-contacte text-center">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-4xl font-bold mb-6 text-indigo-800">Contacte</h2>
        <p class="text-lg mb-8 text-indigo-900">Per qualsevol dubte o suggeriment, no dubtis a contactar-nos.</p>
        <a href="mailto:info@nerehei.com" class="button-hover bg-white text-indigo-800 font-semibold py-3 px-6 rounded-lg hover:bg-indigo-100">Contacta'ns</a>
    </div>
</section>

<!-- Footer -->
<footer class="footer py-6 text-center">
    <p class="text-sm footer-text">&copy; 2024 Creat per <span class="text-indigo-400 font-semibold">Nerehei</span>. Tots els drets reservats.</p>
    <a href="#inici" class="text-indigo-300 hover:text-indigo-500 transition duration-300">Torna a dalt</a>
</footer>

</body>

</html>
