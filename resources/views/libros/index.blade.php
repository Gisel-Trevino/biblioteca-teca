@extends('layout.admin')
@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h1 class="text-2x1 font-bold mb-6">Libros</h1>
                <a href="{{ route('libros.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rourded m">Crear Libro</a><br><br>
                @if(session('success'))
                    <div class='bg-green-100  border border-green-400 text-green-700 px-4 py-3 rounded mb-4 shadow-sm' role="alert">
                        {{session('success')}}
                    </div>
                @endif
                <div class="bg-white shadow-md rounded-lg p-6">
                    <table class="min-w-full table-auto">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border-b text-left">ID</th>
                                <th class="px-4 py-2 border-b text-left">Título</th>
                                <th class="px-4 py-2 border-b text-left">Autor</th>
                                <th class="px-4 py-2 border-b text-left">ISBN</th>
                                <th class="px-4 py-2 border-b text-left">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($libros as $libro)
                            <tr>
                                <td class="px-4 py-2 border-b">{{ $libro->id }}</td>
                                <td class="px-4 py-2 border-b">{{ $libro->nombre }}</td>
                                <td class="px-4 py-2 border-b">{{ $libro->autor }}</td>
                                <td class="px-4 py-2 border-b">{{ $libro->isbn }}</td>
                                <td class="px-4 py-2 border-b whitespace-nowrap">
                                    <a href="{{ route('libros.edit', $libro->id) }}" class= "p-2 text-yellow-600 hover:bg-yellow-50 rounded-lg transition" title="Editar">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <form action="{{ route('libros.destroy', $libro->id) }}" method="POST" style="display:inline-block; margin-left: 6px;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white text-xs px-2 py-1 rounded" title="Eliminar">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="px-6 py-4 bg-gray-50 border-t border-gray-100 flex items-center justify-between">
                        {{ $libros->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection