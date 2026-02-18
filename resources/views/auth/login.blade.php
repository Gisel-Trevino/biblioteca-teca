@extends('layout.auth')
@section('content')
<div class="min-h-screen flex flex-col items-center justify-center py-12 px-4 sm:px-6 lg:px-8 space-y-12">
        
        <div class="max-w-md w-full bg-white p-8 rounded-xl shadow-lg border border-gray-200">
            <div class="text-center mb-8">
                <i class="fas fa-user-circle text-blue-600 text-4xl mb-2"></i>
                <h2 class="text-2xl font-bold text-gray-800">Iniciar Sesión</h2>
                <p class="text-sm text-gray-500">Accede a tu cuenta de BiblioCentral</p>
            </div>

            <form id='loginForm' action="{{route('login')}}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label for="login-email" class="block text-sm font-medium text-gray-700 mb-1">Correo Electrónico</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-envelope text-gray-400 text-sm"></i>
                        </div>
                        <input id="login-email" name="email" type="email" required 
                            class="pl-10 block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6 transition-shadow" 
                            placeholder="usuario@ejemplo.com">
                    </div>
                </div>

                <div>
                    <label for="login-password" class="block text-sm font-medium text-gray-700 mb-1">Contraseña</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-lock text-gray-400 text-sm"></i>
                        </div>
                        <input id="login-password" name="password" type="password" required 
                            class="pl-10 block w-full rounded-md border-0 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6 transition-shadow" 
                            placeholder="••••••••">
                    </div>
                    <div class="flex justify-end mt-1">
                        <a href="#" class="text-xs font-medium text-blue-600 hover:text-blue-500">¿Olvidaste tu contraseña?</a>
                    </div>
                </div>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-blue-600 px-3 py-2.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 transition-colors">
                        Ingresar
                    </button>
                </div>
            </form>

            <p class="mt-6 text-center text-sm text-gray-500">
                ¿No tienes cuenta? 
                <a href="#registro" class="font-semibold leading-6 text-blue-600 hover:text-blue-500">Regístrate aquí</a>
            </p>
        </div>


        <div class="w-full max-w-md border-t-2 border-dashed border-gray-300 relative">
            <span class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-gray-100 px-2 text-gray-400 text-sm">Vista del siguiente formulario</span>
        </div>


        <div id="registro" class="max-w-md w-full bg-white p-8 rounded-xl shadow-lg border border-gray-200">
            <div class="text-center mb-8">
                <i class="fas fa-user-plus text-blue-600 text-4xl mb-2"></i>
                <h2 class="text-2xl font-bold text-gray-800">Crear Cuenta</h2>
                <p class="text-sm text-gray-500">Únete a nuestra comunidad de lectores</p>
            </div>

            <form id="registerForm" action="{{ route('register')}}" method="POST" class="space-y-5">
               @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nombre</label>
                        <input id="name" name="name" type="text" required 
                            class="block w-full rounded-md border-0 py-2.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6 transition-shadow">
                    </div>
                    
                </div>

                <div>
                    <label for="register-email" class="block text-sm font-medium text-gray-700 mb-1">Correo Electrónico</label>
                    <input id="register-email" name="email" type="email" required 
                        class="block w-full rounded-md border-0 py-2.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6 transition-shadow"
                        placeholder="ejemplo@correo.com">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Contraseña</label>
                    <input id="password" name="password" type="password" required 
                        class="block w-full rounded-md border-0 py-2.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6 transition-shadow"
                        placeholder="Mínimo 8 caracteres">
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Repetir Contraseña</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" required 
                        class="block w-full rounded-md border-0 py-2.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6 transition-shadow"
                        placeholder="Confirma tu contraseña">
                </div>

                <div class="pt-2">
                    <button type="submit" class="flex w-full justify-center rounded-md bg-green-600 px-3 py-2.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600 transition-colors">
                        Registrarse
                    </button>
                </div>
            </form>
            <p class="mt-6 text-center text-sm text-gray-500">
                ¿Ya tienes una cuenta? 
                <a href="#" class="font-semibold leading-6 text-blue-600 hover:text-blue-500">Inicia sesión</a>
            </p>
        </div>

    </div>
@endsection