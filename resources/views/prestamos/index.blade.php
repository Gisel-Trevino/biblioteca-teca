@extends('layout.admin')
@section('content')
<div class="container mx-auto px-4 py-8">
        <h1 class="text-2x1 font-bold mb-6">Lista de Usuarios</h1>


        <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rourded m">Crear nuevo prestamo</a>
        <br>
        <div class="bg-white shadow-md rounded-lg p-6">
            <table class="min-w-full table-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-b text-left">ID</th>
                        <th class="px-4 py-2 border-b text-left">Fecha de entrega</th>
                        <th class="px-4 py-2 border-b text-left">Estado</th>
                        <th class="px-4 py-2 border-b text-left">Libro</th>
                        <th class="px-4 py-2 border-b text-left">Usuario</th>
                        <th class="px-4 py-2 border-b text-left">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
@endsection