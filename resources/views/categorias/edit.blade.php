@extends ('layout.admin')
@section ('content')

    <div class="flex-1 p-6">
        <h1 class="text-2xl font-bold mb-4">Editar Categoría</h1>

        <div class="bg-white rounded-lg shadow p-4">
            <form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="nombre" class="block text-gray-700 font-bold mb-2">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" value="{{ $categoria->nombre }}" class="w-full px-4 py-2 border rounded">
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white px-5 py-3 rounded">Actualizar</button>
                    <a href="{{ route('categorias.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white px-5 py-3 rounded ml-2">Cancelar</a>
            </form>
        </div>
    </div>

@endsection