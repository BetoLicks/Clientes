<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p>Olá {{Auth::user()->name}}</p>

                    @if(session('msg'))
                       <p>{{ sesion('msg') }}</p>
                    @endif

                    <form action="{{ route('cliente.store') }}">
                     @csrf

                     <input hidden type="text" name="user_id" value="{{Auth::user()->id}}">

                     <div class="bg-gray-100 p-4 overflow-hidden">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" class="w-full rounded" required autofocus>
                     </div>

                     <div class="bg-gray-100 p-4 overflow-hidden">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="w-full rounded" required>
                     </div>

                     <div class="bg-gray-100 p-4 overflow-hidden">
                        <label for="telefone">Telefone</label>
                        <input type="text" name="telefone" id="telefone" class="w-full rounded" required>
                     </div>

                     <div class="bg-gray-100 p-4 overflow-hidden">
                        <label for="empresa">Empresa</label>
                        <input type="text" name="empresa" id="empresa" class="w-full rounded" required>
                     </div>

                     <div class="bg-gray-100 p-4 overflow-hidden">
                        <label for="tel_comercial">Telefone comercial</label>
                        <input type="tel" name="tel_comercial" id="tel_comercial" class="w-full rounded" required>
                     </div>

                     <div class="bg-gray-100 p-4 overflow-hidden">
                        <input type="submit" value="Cadastrar" class="bg-blue-500 text-white rounded p-2"></input>
                        <input type="reset" value="Limpar" class="bg-red-500 text-white rounded p-2"></input>
                     </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
