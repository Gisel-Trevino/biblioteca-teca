@extends('layout.admin')
@section('content')
    <div class="container mx-auto px-4 py-8">
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        <h1 class="text-2xl font-bold mb-4">Perfil de Usuario</h1>

        <form action="{{ route('usuarios.update_profile') }}" method="POST" class="bg-white rounded-lg shadow p-6">
            @csrf
            @method ('PUT')
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Nombre del usuario:</label>
                <input type="text" name="name" id="name" value="{{old('name', $usuario->name ?? '')}}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>
                @error('name')
                    <p class="text-red-500 text-xs italic mt-2">{{$message}}</p>
                @enderror
            </div>

            <div class="mt-4">
                <button type="submit" class="px-4 py-2 bg-green-500 hover:bg-green-700 text-white rounded transition">Guardar Cambios</button>
                <a href="{{ route('usuarios.profile') }}" class="inline-block px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded transition">Volver a inicio</a>  
            </div>
        </form>

        <form action="{{ route('usuarios.update_password') }}" method="POST" class="bg-white rounded-lg shadow p-6">
            @csrf
            @method ('PUT')
            <div class="mb-4">
                <label for="current_password" class="block text-gray-700 font-bold mb-2">Contraseña actual:</label>
                <input type="password" name="current_password" id="current_password" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>
                @error('current_password')
                    <p class="text-red-500 text-xs italic mt-2">{{$message}}</p>
                @enderror                
            </div>

            <div class="mb-4">
                <label for="new_password" class="block text-gray-700 font-bold mb-2">Nueva contraseña:</label>
                <input type="password" name="new_password" id="new_password" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>
                @error('new_password')
                    <p class="text-red-500 text-xs italic mt-2">{{$message}}</p>
                @enderror                
            </div>

            <div class="mb-4">
                <label for="new_password_confirmation" class="block text-gray-700 font-bold mb-2">Confirmar contraseña:</label>
                <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>
                @error('new_password_confirmation')
                    <p class="text-red-500 text-xs italic mt-2">{{$message}}</p>
                @enderror                   
            </div>

            <div class="mt-4">
                <button type="submit" class="px-4 py-2 bg-green-500 hover:bg-green-700 text-white rounded transition">Guardar Cambios</button>
                <a href="{{ route('usuarios.profile') }}" class="inline-block px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded transition">Volver a inicio</a>  
            </div>
        </form>
    </div>
@endsection