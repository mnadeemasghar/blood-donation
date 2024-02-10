<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Donations') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <!-- Blood Types -->
                <div class="m-4">
                    <!-- <x-link :href="route('blood-donations.index')">All</x-link> -->
                    @if (isset($type) && $type == 'A+')
                        <x-danger-button>A+ ({{ $blood_group_counts ? $blood_group_counts['A+']:"0" }})</x-danger-button>
                    @else
                        <x-link :href="route('blood_donations.blood_type',['blood_type'=>'A+'])">A+ ({{ $blood_group_counts ? $blood_group_counts['A+']:"0" }})</x-link>
                    @endif
                    
                    @if (isset($type) && $type == 'A-')
                        <x-danger-button>A- ({{ $blood_group_counts ? $blood_group_counts['A-']:"0" }})</x-danger-button>
                    @else
                        <x-link :href="route('blood_donations.blood_type',['blood_type'=>'A-'])">A- ({{ $blood_group_counts ? $blood_group_counts['A-']:"0" }})</x-link>
                    @endif
                    
                    @if (isset($type) && $type == 'B+')
                        <x-danger-button>B+ ({{ $blood_group_counts ? $blood_group_counts['B+']:"0" }})</x-danger-button>
                    @else
                        <x-link :href="route('blood_donations.blood_type',['blood_type'=>'B+'])">B+ ({{ $blood_group_counts ? $blood_group_counts['B+']:"0" }})</x-link>
                    @endif
                    
                    @if (isset($type) && $type == 'B-')
                        <x-danger-button>B- ({{ $blood_group_counts ? $blood_group_counts['B-']:"0" }})</x-danger-button>
                    @else
                        <x-link :href="route('blood_donations.blood_type',['blood_type'=>'B-'])">B- ({{ $blood_group_counts ? $blood_group_counts['B-']:"0" }})</x-link>
                    @endif
                    
                    @if (isset($type) && $type == 'AB+')
                        <x-danger-button>AB+ ({{ $blood_group_counts ? $blood_group_counts['AB+']:"0" }})</x-danger-button>
                    @else
                        <x-link :href="route('blood_donations.blood_type',['blood_type'=>'AB+'])">AB+ ({{ $blood_group_counts ? $blood_group_counts['AB+']:"0" }})</x-link>
                    @endif
                    
                    @if (isset($type) && $type == 'AB-')
                        <x-danger-button>AB- ({{ $blood_group_counts ? $blood_group_counts['AB-']:"0" }})</x-danger-button>
                    @else
                        <x-link :href="route('blood_donations.blood_type',['blood_type'=>'AB-'])">AB- ({{ $blood_group_counts ? $blood_group_counts['AB-']:"0" }})</x-link>
                    @endif
                    
                    @if (isset($type) && $type == 'O+')
                        <x-danger-button>O+ ({{ $blood_group_counts ? $blood_group_counts['O+']:"0" }})</x-danger-button>
                    @else
                        <x-link :href="route('blood_donations.blood_type',['blood_type'=>'O+'])">O+ ({{ $blood_group_counts ? $blood_group_counts['O+']:"0" }})</x-link>
                    @endif
                    
                    @if (isset($type) && $type == 'O-')
                        <x-danger-button>O- ({{ $blood_group_counts ? $blood_group_counts['O-']:"0" }})</x-danger-button>
                    @else
                        <x-link :href="route('blood_donations.blood_type',['blood_type'=>'O-'])">O- ({{ $blood_group_counts ? $blood_group_counts['O-']:"0" }})</x-link>
                    @endif
                </div>
                
                <div class="min-w-full">
                    <div class="w-full overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr>
                                <th class="py-2 px-4 border-b">Blood Type</th>
                                <th class="py-2 px-4 border-b">Name</th>
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


                <!-- Pagination Links -->
                <div class="mt-4">
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
