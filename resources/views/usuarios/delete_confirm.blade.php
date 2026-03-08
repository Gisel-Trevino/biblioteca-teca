@extends('layout.admin')
@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2x1 font-bold mb-6">Eliminar usuario</h1>
        <p>¿Estás seguro de que deseas eliminar este usuario?</p>

         <div class="bg-white shadow-md rounded-lg p-6">
            <table class="min-w-full table-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-b text-left">ID</th>
                        <th class="px-4 py-2 border-b text-left">Nombre</th>
                        <th class="px-4 py-2 border-b text-left">Email</th>
                        <th class="px-4 py-2 border-b text-left">Tipo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-4 py-2 border-b">{{ $usuario->id }}</td>
                        <td class="px-4 py-2 border-b">{{ $usuario->name }}</td>
                        <td class="px-4 py-2 border-b">{{ $usuario->email }}</td>
                        <td class="px-4 py-2 border-b">{{ $usuario->user_type }}</td>
                    </tr>
                </tbody>
            </table>
            <form action="{{route('usuarios.destroy', $usuario->id)}}" method="POST" class="inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white px-3 py-2 rounded">Eliminar</button>
                <a href="{{route('usuarios.index')}}" class="bg-gray-500 hover:bg-gray-700 text-white px-3 py-2 rounded">Cancelar</a>
            </form>
        </div>       
    </div>
@endsection