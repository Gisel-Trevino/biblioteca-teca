@extends ('layout.admin')
@section ('content')

    <div class="flex-1 p-6">
        <h1 class="text-2xl font-bold mb-4">Editar Libros</h1>

        <div class="bg-white rounded-lg shadow p-4">
            <form action="{{ route('libros.update', $libro->id) }}" method="POST">
                @csrf
                @method('PUT')
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 font-bold mb-2">Nombre del libro:</label>
                <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $libro->nombre) }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>
            </div>
            <div class="mb-4">
                <label for="isbn" class="block text-gray-700 font-bold mb-2">ISBN</label>
                <input type="text" name="isbn" id="isbn" value="{{ old('isbn', $libro->isbn) }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>
            </div>
            <div class="mb-4">
                <label for="autor" class="block text-gray-700 font-bold mb-2">Nombre del autor(a):</label>
                <input type="text" name="autor" id="autor" value="{{ old('autor', $libro->autor) }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>
            </div>
            <div class="mb-4">
                <label for="editorial" class="block text-gray-700 font-bold mb-2">Editorial</label>
                <input type="text" name="editorial" id="editorial" value="{{ old('editorial', $libro->editorial) }}" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>
            </div>
            <div class="mb-4">
                <label for="categoria_id" class="block text-gray-700 font-medium mb-2">Categoría</label>
                <select name="categoria_id" id="categoria_id" class="w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-blue-200">
                    <option value=""></option>
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}" {{$libro->categoria_id == $categoria->id ? 'selected' :  '' }}>{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
            </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition-colors">Guardar Libro</button>
                <div class="mt-4">
                        <a href="{{ route('home') }}" class="inline-block px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded transition">Cancelar</a>  
                </div>
            </form>
        </div>
    </div>

@endsection