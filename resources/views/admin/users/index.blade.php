@extends('adminlte::page')
<link rel="icon" href="{{ asset('Logo.ico') }}">
@section("content")

<h1 class="text-center">{{ __("Listado de Usuarios") }}</h1>

<table class="border-separate border-2 text-center border-gray-500 mt-3" style="width: 100%">
    <thead>
        <tr>
            <th scope="col">{{ ("Id") }}</th>
            <th scope="col">{{ ("Nombre") }}</th>
            <th scope="col">{{ ("Email") }}</th>
            <th scope="col">{{ ("Rol") }}</th>
        </tr>
    </thead>
    <tbody>
        @forelse($users as $user)
        <tr>

            <td class="border px-4 py-2">{{ $user->id }}</td>

            <td class="border px-4 py-2">{{ $user->name }}</td>

            <td class="border px-4 py-2">{{ $user->email }}</td>

            <td class="border px-4 py-2">
                {{implode(' , ',$user->roles->map(function($role){
                            return $role->name;
                            })->toArray()
                        )
                        }}
            </td>
           
            <td class="border px-4 py-2">
            @if(!$user->can('adminAccess'))
                <a href="#" class="text-red-400" onclick="event.preventDefault();
                                document.getElementById('delete-user-{{ $user->id }}-form').submit();"><button class="btn btn-danger btn-sm">{{ __("Eliminar") }}</button>
                </a>
                <form id="delete-user-{{ $user->id }}-form" action="{{ route('users.destroy', $user->id) }}" method="POST" class="hidden">
                    @method("DELETE")
                    @csrf
                </form>
            @endif
            </td>

        </tr>
        @empty
        <tr>
            <td colspan="4">
                <div class="bg-red-100 text-center border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <p><strong class="font-bold">{{ __("No hay usuarios") }}</strong></p>
                    <span class="block sm:inline">{{ __("Todavía no hay nada que mostrar aquí") }}</span>
                </div>
            </td>
        </tr>
        @endforelse
    </tbody>
</table>



        <div class="mt-3">
            {{ $users->links() }}
           
        </div>


@endsection