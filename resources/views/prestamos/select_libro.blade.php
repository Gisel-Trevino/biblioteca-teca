@extends('layout.admin')
@section('content')
<div class="container mx-auto px-4 py-3">
    <h1 class="text-2xl font-bold mb-6">Seleccionar Libro</h1>
    <div class="bg-white shadow-md rounded-lg p-6 mt-4">

        <div class="mt-6">
            <h2 class="text-xl font-bold mb-4">Usuario:</h2>
            <p><strong>ID:</strong> {{$usuario->id}}</p>
            <p><strong>Nombre:</strong> {{$usuario->name}}</p>
            <p><strong>Email:</strong> {{$usuario->email}}</p>
        </div>

        <form action="{{route('prestamos.store')}}" method="POST">
            @csrf
            <label for="libro_id" class="block text-gray-700 font-bold mb-2">ID Libro:</label>
            <select name="libro_id" class="w-full px-3 py-2 bg-white text-gray-700 border rounded shadow appearance-none focus:outline-none focus:ring focus:border-blue-300" required>
                <option value="">Seleccione un libro...</option>
                @foreach($libros as $libro)
                    <option value="{{$libro->id}}">{{$libro->nombre}} - {{$libro->autor}}</option>
                @endforeach
            </select>

            <!--<input type="text" name="libro_id" class="shadow appearence-none border rounded focus:outline-none focus:ring focus:border-blue-300" required>
            <label for="libro_titulo" class="block text-gray-700 font-bold mb-2">Título Libro:</label>
            <input type="text" name="libro_titulo" class="shadow appearence-none border rounded focus:outline-none focus:ring focus:border-blue-300" required>-->

            <input type="hidden" name="usuario_id" value="{{$usuario->id}}">

            <div class="flex items-center justify-between mt-4">
                <input type="submit" value="Prestar" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rourded">
                <a href="{{route('prestamos.index')}}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection