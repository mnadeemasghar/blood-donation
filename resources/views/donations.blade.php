<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Donations') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <td class="py-2 px-4 border-b">Blood Type</td>
                            <td class="py-2 px-4 border-b">Name</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $donation)
                            <tr>
                                <td class="py-2 px-4 border-b">{{ $donation->blood_type }}</td>
                                <td class="py-2 px-4 border-b">{{ $donation->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
