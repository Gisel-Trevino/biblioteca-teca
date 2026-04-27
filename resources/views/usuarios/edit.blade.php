@extends('layout.admin')
@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">Agregar Nuevo Usuario</h1>
        <form action="{{route('usuarios.update', $usuario->id)}}" method="POST" class="bg-white rounded-lg shadow p-6">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Nombre del usuario:</label>
                <input type="text" name="name" id="name" value="{{old('name', $usuario->name)}}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>
                @error('name')
                    <p class="text-red-500 text-xs italic mt-2">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Correo eléctronico:</label>
                <input type="email" name="email" id="email" value="{{old('email', $usuario->email)}}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>
                @error('email')
                    <p class="text-red-500 text-xs italic mt-2">{{$message}}</p>
                @enderror                
            </div>
            <div class="mb-4">
                <label for="user_type" class="block text-gray-700 font-bold mb-2">Tipo de usuario:</label>
                <select name="user_type" id="user_type" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>
                    <option value="">Seleccione el tipo de usuario</option>
                    <option value="user" {{old('user_type', $usuario->user_type) == 'user' ? 'select' : ' '}}>user</option>
                    <option value="admin" {{old('user_type', $usuario->user_type) == 'admin' ? 'select' : ' '}}>admin</option>
                </select>
                @error('user_type')
                    <p class="text-red-500 text-xs italic mt-2">{{$message}}</p>
                @enderror                   
            </div>

            <div class="mt-4">
                <button type="submit" class="px-4 py-2 bg-green-500 hover:bg-green-700 text-white rounded transition">Guardar Usuario</button>

                <a href="{{ route('usuarios.index') }}" class="inline-block px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded transition">Volver a la lista de usuarios</a>  
            </div>

        </form>
    </div>
@endsection