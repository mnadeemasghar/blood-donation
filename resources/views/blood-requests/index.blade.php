<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My blood requests') }}
        </h2>
    </x-slot>

    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="m-4">
                    <x-link href="{{ route('blood-requests.create') }}">{{__("Create")}}</x-link>
                </div>
                @if (isset($blood_requests) && $blood_requests->count() > 0)
                    @foreach ($blood_requests as $blood_request)
                        <div class="border-b border-gray-200 p-4">
                            <div class="mb-2">
                                <span class="font-bold">{{ $blood_request->blood_type }}</span>
                                <span>{{ $blood_request->building }}, {{ $blood_request->area_in_city }}, {{ $blood_request->city }}</span>
                            </div>
                            <div class="mb-2">
                                <span class="font-bold">Required Before:</span> {{ $blood_request->required_before }}
                            </div>
                            <div class="mb-2">
                                <span class="font-bold">Contact No:</span> {{ $blood_request->contact_no }}
                            </div>
                            <div class="mb-2">
                                <span class="font-bold">Contact Person:</span> {{ $blood_request->contact_person_name }}
                            </div>
                            <div class="flex justify-end">
                                <a href="{{ route('blood-requests.edit', $blood_request->id) }}" class="text-blue-500 hover:text-blue-700 mr-2">Edit</a>
                                <!-- Button trigger modal -->
                                <button type="button" class="text-red-500 hover:text-red-700" data-toggle="modal" data-target="#deleteModal{{ $blood_request->id }}">
                                    Delete
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="deleteModal{{ $blood_request->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete this blood request?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <form action="{{ route('blood-requests.destroy', $blood_request->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="p-4">No blood requests found.</div>
                @endif
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
</x-app-layout>
