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

                    <div class="bg-white p-6 rounded-lg shadow-md h-64 flex items-center justify-center border-dashed border-2 border-gray-300">
                        <p class="text-gray-400 italic">El contenido de la sección seleccionada aparecerá aquí...</p>
                    </div>
                </section>
            </div>
@endsection