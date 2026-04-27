<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Library - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <header class="bg-slate-800 text-white shadow-lg fixed w-full z-50">
        <div class="container mx-auto flex flex-wrap p-4 flex-col md:flex-row items-center justify-between">
            <div class="flex items-center">
                <button id="menu-btn" class="md:hidden mr-4 focus:outline-none hover:text-blue-400">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
                <span class="text-xl font-bold tracking-wider uppercase">Biblio<span class="text-blue-400">Tech</span></span>
            </div>
            
            <nav class="hidden md:flex flex-wrap items-center text-base justify-center space-x-6">
                <a href="{{route('home')}}" class="hover:text-blue-400 transition">Inicio</a>
                <a href="#" class="hover:text-blue-400 transition">Préstamos</a>
                <a href="#" class="text-red-400 hover:text-red-500 transition font-semibold">Salir</a>
            </nav>
        </div>
    </header>
    <div class="flex pt-16 h-screen overflow-hidden">       
        <aside id="sidebar" class="bg-slate-900 text-white w-64 space-y-6 py-7 px-2 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out z-40 shadow-xl">
            <nav>
                <a href="{{route('home')}}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-600 hover:text-white mb-2 bg-blue-700">
                    <i class="fas fa-home mr-3"></i>Inicio
                </a>
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-slate-700 hover:text-blue-400 mb-2">
                    <i class="fas fa-exchange-alt mr-3"></i>Préstamos
                </a>
                <div class="border-t border-slate-700 my-4"></div>
                <a href="{{route('logout')}}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-red-900 text-red-400">
                    <i class="fas fa-sign-out-alt mr-3"></i>Salir
                </a>
            </nav>

            <div class="absolute bottom-0 left-0 w-full border-t border-slate-700 p-4 bg-slate-900">
                    <div class="flex items-center gap-3">
                        <div class="flex-shrink-0">
                            <img class="w-10 h-10 rounded-full border border-slate-600 shadow-sm" 
                                src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name ?? 'U') }}&background=1e293b&color=60a5fa" 
                                alt="Perfil">
                        </div>
                        
                        <div class="flex flex-col overflow-hidden text-sm">
                            <span class="font-bold text-white truncate">
                                <a href="{{route('usuarios.profile')}}" class="hover:text-blue-400 transition">
                                    {{ auth()->user()->name }}
                                </a>
                            </span>
                            <span class="text-xs text-slate-400 truncate">
                                {{ auth()->user()->email }}
                            </span>
                            </span>
                        </div>
                    </div>
            </div>
            
        </aside>
        <main class="flex-1 flex flex-col overflow-y-auto">
@yield('content')
@include('partials.admin.admin')
