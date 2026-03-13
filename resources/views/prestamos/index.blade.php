@extends('layout.admin')
@section('content')
<div class="container mx-auto px-4 py-8">
        <h1 class="text-2x1 font-bold mb-6">Lista de Usuarios</h1>

        @if(session('error'))
            <div class="bg-red-100 borde border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                {{session('error')}}
            </div>
        @endif
        <a href="{{route('prestamos.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rourded m">Crear nuevo prestamo</a>
        <br>
        <div class="bg-white shadow-md rounded-lg p-6">
            <table class="min-w-full table-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-b text-left">ID</th>
                        <!--<th class="px-4 py-2 border-b text-left">Fecha de entrega</th>
                        <th class="px-4 py-2 border-b text-left">Estado</th>-->
                        <th class="px-4 py-2 border-b text-left">Libro</th>
                        <th class="px-4 py-2 border-b text-left">Usuario</th>
                        <th class="px-4 py-2 border-b text-left">Fecha de creación</th>
                        <th class="px-4 py-2 border-b text-left">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($prestamos as $prestamo)
                        <tr>
                            <td class="px-4 py-2 border-b">{{$prestamo->id}}</td>
                            <td class="px-4 py-2 border-b">{{$prestamo->libro->nombre}}</td>
                            <td class="px-4 py-2 border-b">{{$prestamo->usuario->name}}</td>
                            <td class="px-4 py-2 border-b">{{$prestamo->created_at->format('Y-m-d')}}</td>
                            <td class="px-4 py-2 border-b">
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection