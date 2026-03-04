@extends('layout.admin')
@section('content')
            <div class="container mx-auto px-4 py-8">
        <h1 class="text-2x1 font-bold mb-6">Lista de Usuarios</h1>


        <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rourded m">Crear usuario</a>
        <br><br/>

        <div class="bg-white shadow-md rounded-lg p-6">
            <table class="min-w-full table-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-b text-left">ID</th>
                        <th class="px-4 py-2 border-b text-left">Nombre</th>
                        <th class="px-4 py-2 border-b text-left">Email</th>
                        <th class="px-4 py-2 border-b text-left">Tipo</th>
                        <th class="px-4 py-2 border-b text-left">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($usuarios as $usuario)
                        <tr>
                            <td class="px-4 py-2 border-b">{{ $usuario->id }}</td>
                            <td class="px-4 py-2 border-b">{{ $usuario->nombre }}</td>
                            <td class="px-4 py-2 border-b">{{ $usuario->email }}</td>
                            <td class="px-4 py-2 border-b">{{ $usuario->user_type }}</td>

                            <td class="px-4 py-2 border-b">
                                <a href="#" class="bg-yellow-500 hover:bg-yellow-700 text-white px-3 py-2 rounded">Editar</a>
                                <form action="#" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white px-3 py-2 rounded">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection