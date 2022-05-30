<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 text-red-600">
                    You're logged in!
                </div>
                <div class="p-4">
                    <p>{{$user}}</p>
                    <p>{{Auth::user()}}</p>
                    <p>{{Auth::user()->getRoleNames()}}</p>
                </div>
                <div class="p-4 border border-b-2">
                    @if(Auth::user()->hasRole('SuperAdmin'))
                        <p>You are Super Admin !!</p>
                    @endif
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
