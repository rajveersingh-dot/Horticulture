<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight flex-1">
                {{ __('Edit User') }}
            </h2>
            <div class="flex-none justify-between">
                <a class="bg-blue-500 text-white rounded p-2"
                   href="{{ route('users.index') }}">Back</a>
            </div>
        </div>
    </x-slot>
</x-app-layout>
