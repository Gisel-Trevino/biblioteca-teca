<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{'Biblioteca'}}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
    <style>
        /* Estilos adicionales mínimos si fueran necesarios, Tailwind cubre casi todo */
        .hero-bg {
            /* Imagen de stock libre de derechos de Unsplash */
            background-image: url('https://images.unsplash.com/photo-1507842217343-583bb7270b66?q=80&w=2690&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
        }
    </style>
        @endif
    </head>
    <body class="bg-gray-50 font-sans text-gray-900">

    <header class="bg-white shadow-md fixed w-full z-50 top-0">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <i class="fas fa-book-open text-blue-600 text-3xl mr-3"></i>
                    <span class="text-2xl font-bold text-gray-800">Biblio<span class="text-blue-600">Central</span></span>
                </div>

                <div class="hidden md:flex items-center space-x-8 font-medium">
                    <a href="#" class="text-blue-600 hover:text-blue-800 transition duration-300">Inicio</a>
                    <a href="{{route('login')}}" class="bg-blue-600 text-white px-5 py-2 rounded-md hover:bg-blue-700 transition duration-300 shadow-sm flex items-center">
                        <i class="fas fa-user mr-2"></i> Login
                    </a>
                </div>

                <div class="md:hidden flex items-center">
                    <button id="menu-toggle-btn" class="outline-none mobile-menu-button">
                        <i class="fas fa-bars text-2xl text-gray-600 hover:text-blue-600 transition"></i>
                    </button>
                </div>
            </div>
        </nav>

        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-200 px-6 py-4 shadow-lg">
            <ul class="space-y-4 font-medium">
                <li><a href="#" class="block text-blue-600 hover:bg-blue-50 py-2 rounded transition">Inicio</a></li>
                <li><a href="#" class="block text-gray-700 hover:bg-blue-50 py-2 rounded transition flex items-center"><i class="fas fa-user mr-2 text-gray-500"></i>Login</a></li>
            </ul>
        </div>
    </header>

    <section class="relative pt-20 h-screen min-h-[600px] flex content-center items-center justify-center text-white">
        <div class="absolute top-0 w-full h-full bg-center bg-cover hero-bg">
            <span id="blackOverlay" class="w-full h-full absolute opacity-60 bg-black"></span>
        </div>

        <div class="container mx-auto relative z-10 px-6 flex flex-col items-center text-center">
            <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-6">
                Tu puerta al conocimiento <br> universal.
            </h1>
            <p class="text-lg md:text-2xl mb-10 text-gray-200 max-w-3xl">
                Explora millones de libros, recursos digitales y espacios diseñados para el aprendizaje. Bienvenido a tu Biblioteca Central.
            </p>
            <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 px-8 rounded-full shadow-lg hover:shadow-xl transition duration-300 uppercase tracking-wider text-sm md:text-base">
                Explorar el Catálogo
            </a>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
             <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Nuestros Espacios</h2>
                <p class="text-gray-600 max-w-xl mx-auto">Diseñados para inspirar, concentrarse y colaborar. Descubre las áreas que tenemos para ti.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 group">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=2301&auto=format&fit=crop" alt="Sala de Lectura" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-2 text-gray-800">Salas de Lectura Silenciosa</h3>
                        <p class="text-gray-600 text-sm">El ambiente perfecto para la concentración profunda y el estudio sin interrupciones.</p>
                    </div>
                </div>
                 <div class="rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 group">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1529070538774-1843cb3265df?q=80&w=2670&auto=format&fit=crop" alt="Área Colaborativa" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-2 text-gray-800">Áreas de Trabajo Colaborativo</h3>
                        <p class="text-gray-600 text-sm">Espacios equipados con tecnología para trabajos en grupo y discusiones académicas.</p>
                    </div>
                </div>
                 <div class="rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 group">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1481627834876-b7833e8f5570?q=80&w=2428&auto=format&fit=crop" alt="Hemeroteca" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-2 text-gray-800">Hemeroteca Digital</h3>
                        <p class="text-gray-600 text-sm">Acceso a miles de periódicos, revistas científicas y archivos históricos digitalizados.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="bg-gray-900 text-gray-300 py-12">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
            <div class="col-span-1 md:col-span-2">
                 <div class="flex items-center mb-4">
                    <i class="fas fa-book-open text-blue-500 text-2xl mr-3"></i>
                    <span class="text-xl font-bold text-white">Biblio<span class="text-blue-500">Central</span></span>
                </div>
                <p class="mb-4 text-sm leading-relaxed">Institución dedicada a la preservación y difusión del conocimiento, abierta a toda la comunidad para fomentar el aprendizaje continuo.</p>
            </div>
            <div>
                <h3 class="text-white font-bold mb-4 uppercase tracking-wider">Enlaces Rápidos</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-blue-400 transition">Catálogo en línea</a></li>
                    <li><a href="#" class="hover:text-blue-400 transition">Horarios y Ubicación</a></li>
                    <li><a href="#" class="hover:text-blue-400 transition">Membresías</a></li>
                    <li><a href="#" class="hover:text-blue-400 transition">Eventos culturales</a></li>
                </ul>
            </div>
             <div>
                <h3 class="text-white font-bold mb-4 uppercase tracking-wider">Contacto</h3>
                <ul class="space-y-2 text-sm">
                    <li class="flex items-center"><i class="fas fa-map-marker-alt mr-3 w-4"></i> Av. del Conocimiento 123</li>
                    <li class="flex items-center"><i class="fas fa-phone mr-3 w-4"></i> +52 (555) 123-4567</li>
                    <li class="flex items-center"><i class="fas fa-envelope mr-3 w-4"></i> info@bibliocentral.com</li>
                </ul>
            </div>
        </div>
        <div class="border-t border-gray-800 pt-8 mt-8 text-center text-sm text-gray-500">
            <div class="container mx-auto px-6 flex flex-col md:flex-row justify-between items-center">
                <p>&copy; 2024 Biblioteca Central. Todos los derechos reservados.</p>
                <div class="flex space-x-4 mt-4 md:mt-0">
                    <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>


    <script>
        // Esperamos a que el DOM esté cargado
        document.addEventListener('DOMContentLoaded', function() {
            // Referencias al botón y al menú
            const menuToggleBtn = document.getElementById('menu-toggle-btn');
            const mobileMenu = document.getElementById('mobile-menu');

            // Función para alternar la visibilidad
            menuToggleBtn.addEventListener('click', function() {
                // Tailwind usa la clase 'hidden' para ocultar elementos.
                // Toggle simplemente la añade si no está, o la quita si está.
                mobileMenu.classList.toggle('hidden');
            });

            // (Opcional Senior Touch) Cerrar el menú si se hace click en un enlace del menú móvil
            const mobileLinks = mobileMenu.querySelectorAll('a');
            mobileLinks.forEach(link => {
                link.addEventListener('click', () => {
                     mobileMenu.classList.add('hidden');
                });
            });
        });
    </script>

</body>
</html>
