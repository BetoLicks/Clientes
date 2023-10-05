<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edição de usuário') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p>Ediando acesso de usuário: {{$user->name}}</p>
                    <p>Nível de acesso atual: {{$user->level}}</p>
                </div>

                <div class="p-6 text-gray-900">
                    <form action="{{route('user.update',$user->id)}}" method="post">
                        @csrf 
                        @method('put')

                        <label for="level">Selecione o nivel</label><br>
                        <select name="level" required class="py-1 px-8 roudered">
                            <option value="" selected disabled>Selecione uma opção</option>
                            <option value="user">Usuário comum</option>
                            <option value="admin">Administrador</option>
                        </select>
                        <button type="submit" class="bg-blue-500 rounded py-2">Salvar</button>



                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
