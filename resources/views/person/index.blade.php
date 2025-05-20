<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('People') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex items-center justify-end">
                        <a class="bg-blue-600 text-white py-2 px-3 rounded" href="{{ route('person.create') }}">Add Person</a>
                    </div>
                    <table class="table-fixed border-separate border-spacing-6">
                        <thead>
                            <tr>
                                <th class="w-1/4 px-4 py-2">First Name</th>
                                <th class="w-1/4 px-4 py-2">Last Name</th>
                                <th class="w-1/4 px-4 py-2">Email</th>
                                <th class="w-1/4 px-4 py-2">Phone</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($people as $person)
                                <tr>
                                    <td class="border px-4 py-2">{{ $person->firstname }}</td>
                                    <td class="border px-4 py-2">{{ $person->lastname }}</td>
                                    <td class="border px-4 py-2">{{ $person->email }}</td>
                                    <td class="border px-4 py-2">{{ $person->phone }}</td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                   <!-- @foreach ($people as $person)
                        <div class="mb-4">
                            <h3 class="text-lg font-semibold">{{ $person->firstname }} {{ $person->lastname }}</h3>
                            <p>{{ $person->email }}</p>
                            <p>{{ $person->phone }}</p>
                        </div>
                    @endforeach -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>