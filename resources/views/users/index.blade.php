<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight flex-1 text-white">
                {{ __('Users') }}
            </h2>
            <div class="flex-none justify-between">
                <a class="bg-blue-500 text-white rounded p-2"
                   href="{{ route('users.create') }}">Add</a>
            </div>
        </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="w-full shadow">
                        <thead class="bg-gray-800 text-white text-left">
                            <tr>
                                <th class="text-center">#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Roles</th>
                                <th class="text-center">Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $key=>$user)
                                <tr class="even:bg-gray-200 p-2">
                                    <td class="text-center">{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        @if(!empty($user->getRoleNames()))
                                            @foreach($user->getRoleNames() as $role)
                                                <label class="text-sm
                                                bg-blue-900 text-white
                                                rounded p-1">{{$role}}</label>
                                            @endforeach
                                        @endif
                                    </td>
                                    <td class="text-center w-fit py-2 duration-150">
                                        <a class="bg-green-500 text-white px-2 rounded
                                                    hover:bg-green-600 mx-1"
                                            href="{{route('users.show',$user->id)}}">
                                            Info
                                        </a>
                                        <a class="bg-blue-600 text-white px-2 rounded
                                        mx-1"
                                            href="{{route('users.edit',$user->id)}}">
                                            Edit
                                        </a>
                                        <a class="bg-red-600 text-white px-2 rounded mx-1"
                                            href="{{route('users.destroy',$user->id)}}">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="bg-gray-800 text-white">
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                    @foreach($data as $d)
                        <li>{{$d}}</li>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
