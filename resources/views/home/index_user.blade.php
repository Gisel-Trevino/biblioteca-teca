@extends('layout.user')
@section('content')
<h1 class="text-3xl font-bold text-gray-800 mb-6">Bienvenido {{auth()->user()->name}}</h1>
@endsection