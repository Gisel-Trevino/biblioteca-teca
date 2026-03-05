@extends('layout.admin')
@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">Agregar Nuevo Usuario</h1>
        <form action="{{route('usuarios.store')}}" method="POST" class="bg-white rounded-lg shadow p-6">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Nombre del usuario:</label>
                <input type="text" name="name" id="name" value="{{old('name')}}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>
                @error('name')
                    <p class="text-red-500 text-xs italic mt-2">{{message}}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Correo eléctronico:</label>
                <input type="email" name="email" id="email" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>
                @error('email')
                    <p class="text-red-500 text-xs italic mt-2">{{message}}</p>
                @enderror                
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-bold mb-2">Contraseña:</label>
                <input type="password" name="password" id="password" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>
                @error('password')
                    <p class="text-red-500 text-xs italic mt-2">{{message}}</p>
                @enderror                
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="block text-gray-700 font-bold mb-2">Confirmar contraseña:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>
                @error('password_confirmation')
                    <p class="text-red-500 text-xs italic mt-2">{{message}}</p>
                @enderror                   
            </div>
            <div class="mb-4">
                <label for="user_type" class="block text-gray-700 font-bold mb-2">Tipo de usuario:</label>
                <select name="user_type" id="user_type" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>
                    <option value="">Seleccione el tipo de usuario</option>
                    <option value="admin">admin</option>
                    <option value="user">user</option>
                </select>
                @error('user_type')
                    <p class="text-red-500 text-xs italic mt-2">{{message}}</p>
                @enderror                   
            </div>
            <button type="submit" class="px-4 py-2 bg-green-500 hover:bg-green-700 text-white rounded transition">Guardar Usuario</button>

            <div class="mt-4">
                <a href="{{ route('usuarios.index') }}" class="inline-block px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded transition">Volver a la lista de categorias</a>  
            </div>

        </form>
    </div>
@endsection