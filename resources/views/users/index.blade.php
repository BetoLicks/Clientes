<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           {{ __('Listagem de usuários') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   <p class="mb-4">Bem vindo <strong>{{Auth::user()->name}}</strong></p>
                </div>

                <div class="p-6 text-gray-900">
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="text-center">Nível</th>
                                <th class="p-4">Nome</th>
                                <th>Email</th>
                                <th>Data de cadastro</th>
                                @can('level')
                                   <th class="text-center">Ações</th>
                                @endcan
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($users as $user)
                                <tr class="hover:bg-gray-100">
                                    <td class="text-center">
                                       @if($user->level == 'admin')    
                                          <i class="fa-solid fa-user-tie"></i>
                                       @endif
                                    </td>

                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->created_at}}</td>
                                    @can('level')
                                    <td class="text-center">
                                        <a href="{{route('user.edit',$user->id)}}">Editar</a>
                                    </td>
                                    @endcan
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="p-3 bg-gray-100 rounded-lg">
                        {{$users->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
