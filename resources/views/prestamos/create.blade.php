@extends('layout.admin')
@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">Crear nuevo prestamo</h1>
        <form action="{{ route('prestamos.buscar_usuario') }}" method="POST" class="bg-white rounded-lg shadow p-6">
            @csrf
            <div class="mb-4">
                <label for="usuario_id" class="block text-gray-700 font-bold mb-2">ID del usuario:</label>
                <input type="text" name="usuario_id" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>
                <label for="usuario_nombre" class="block text-gray-700 font-bold mb-2">Nombre del usuario:</label>
                <input type="text" name="usuario_nombre" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>
            </div>

            <div class="mt-4">
                <input type="submit" value="Buscar" class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded transition">
                <a href="{{route('prestamos.index')}}" class="inline-block px-4 py-2 bg-gray-500 hover:bg-gray-700 text-white rounded transition">Cancelar</a>  
            </div>
        </form>
        @isset($usuario)
        <div class="mt-6">
            <h2 class="text-xl font-bold mb-4">Usuario encontrado:</h2>
            <p><strong>ID:</strong> {{$usuario->id}}</p>
            <p><strong>Nombre:</strong> {{$usuario->name}}</p>
            <p><strong>Email:</strong> {{$usuario->email}}</p>
        </div>
        @endisset
    </div>
@endsection