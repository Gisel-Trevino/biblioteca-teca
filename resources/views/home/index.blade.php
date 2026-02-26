@extends('layout.admin')
@section('content')
            <div class="p-8">
                <section>
                    <h1 class="text-3xl font-bold text-gray-800 mb-6">Panel de Control</h1>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-blue-500">
                            <h3 class="text-gray-500 text-sm font-medium uppercase">Libros Totales</h3>
                            <p class="text-3xl font-bold text-gray-700">1,250</p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-green-500">
                            <h3 class="text-gray-500 text-sm font-medium uppercase">Préstamos Activos</h3>
                            <p class="text-3xl font-bold text-gray-700">42</p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-yellow-500">
                            <h3 class="text-gray-500 text-sm font-medium uppercase">Usuarios Nuevos</h3>
                            <p class="text-3xl font-bold text-gray-700">15</p>
                        </div>
                    </div>

                    <section class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
    <div class="p-6 border-b border-gray-100 flex flex-col md:flex-row md:items-center justify-between gap-4">
        <h3 class="text-lg font-bold text-gray-800">Catálogo de Libros</h3>
        <div class="flex flex-col sm:flex-row gap-3">
            <input type="text" placeholder="Buscar libro..." 
                class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none text-sm w-full sm:w-64">
            <a href="{{route('libros.create')}}" class="bg-indigo-700 hover:bg-indigo-800 text-white px-4 py-2 rounded-lg text-sm font-bold transition flex items-center justify-center">
                <i class="fa-solid fa-plus mr-2"></i> Nuevo Libro
            </a>
        </div>
    </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-50 text-gray-600 uppercase text-xs font-semibold">
                            <th class="px-6 py-4">Libro</th>
                            <th class="px-6 py-4">Autor</th>
                            <th class="px-6 py-4">Categoría</th>
                            <th class="px-6 py-4">Estado</th>
                            <th class="px-6 py-4 text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 text-sm text-gray-700">
                        @foreach($libros as $libro)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 flex items-center">
                                <div class="w-10 h-14 bg-gray-200 rounded mr-3 flex-shrink-0 overflow-hidden">
                                    <img src="https://via.placeholder.com/40x56" alt="Portada" class="w-full h-full object-cover">
                                </div>
                                <div>
                                    <span class="block font-bold text-gray-900 leading-tight">{{$libro->nombre}}</span>
                                    <span class="text-xs text-gray-500">{{$libro->isbn}}</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 font-medium">{{$libro->autor}}</td>
                            <td class="px-6 py-4 text-gray-500">{{$libro->categoria->nombre}}</td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-bold uppercase">Disponible</span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex justify-center space-x-2">
                                    <a href="{{route('libros.edit', $libro->id)}}" class= "p-2 text-blue-600 hover:bg-blue-50 rounded-lg transition" title="Editar">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <form action="{{route('libros.destroy', $libro->id)}}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white px-3 py-2 rounded" title="Eliminar">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="px-6 py-4 bg-gray-50 border-t border-gray-100 flex items-center justify-between">
                {{$libros->links()}}
            </div>
            <!--<div class="px-6 py-4 bg-gray-50 border-t border-gray-100 flex items-center justify-between">
                <span class="text-xs text-gray-500 font-medium">Mostrando 2 de 150 libros</span>
                <div class="flex space-x-1">
                    <button class="px-3 py-1 border border-gray-300 rounded hover:bg-white transition text-xs font-bold text-gray-600">Anterior</button>
                    <button class="px-3 py-1 border border-indigo-600 bg-indigo-600 text-white rounded text-xs font-bold">1</button>
                    <button class="px-3 py-1 border border-gray-300 rounded hover:bg-white transition text-xs font-bold text-gray-600">2</button>
                    <button class="px-3 py-1 border border-gray-300 rounded hover:bg-white transition text-xs font-bold text-gray-600">Siguiente</button>
                </div>
            </div>-->
        </section>
                    
                </section>
            </div>
@endsection