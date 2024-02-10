<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a Blood Request') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form method="POST" action="{{ route('blood-requests.store') }}" class="p-4">
                    @csrf

                    <div class="flex gap-3">
                        <div class="mb-3">
                            <x-label for="blood_type" class="form-label">{{__('Blood Type:')}}</x-label>
                            <x-select id="blood_type" class="block mt-1 w-full" name="blood_type" :value="old('blood_type')" required
                                    :options="[
                                        'A+' => 'A+',
                                        'A-' => 'A-',
                                        'B+' => 'B+',
                                        'B-' => 'B-',
                                        'AB+' => 'AB+',
                                        'AB-' => 'AB-',
                                        'O+' => 'O+',
                                        'O-' => 'O-'
                                        ]">
                                <option value="" disabled selected>Select Blood Type</option>
                            </x-select>
                            <x-input-error for="blood_type" class="mt-2" />
                        </div>
    
                        <div class="mb-3">
                            <x-label for="city" class="form-label">{{__('City:')}}</x-label>
                            <x-select id="city" class="block mt-1 w-full" name="city" :value="old('city')" required
                                :options="Helpers::pakistanCities()">
                                <option value="" disabled selected>Select City</option>
                            </x-select>
                            <x-input-error for="city" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <x-label for="area_in_city" class="form-label">{{__('Area in City:')}}</x-label>
                            <x-input type="text" name="area_in_city" id="area_in_city" value="{{old('area_in_city')}}" class="form-control" />
                            <x-input-error for="area_in_city" class="mt-2" />
                        </div>
                        
                        <div class="mb-3">
                            <x-label for="building" class="form-label">{{__('Building:')}}</x-label>
                            <x-input type="text" name="building" id="building" value="{{old('building')}}" class="form-control" />
                            <x-input-error for="building" class="mt-2" />
                        </div>
                    </div>
                    
                    <div class="flex gap-3">
                        <div class="mb-3">
                            <x-label for="required_before" class="form-label">{{__('Required Before:')}}</x-label>
                            <x-input type="datetime-local" name="required_before" id="required_before" value="{{old('required_before')}}" class="form-control" />
                            <x-input-error for="required_before" class="mt-2" />
                        </div>
                        
                        <div class="mb-3">
                            <x-label for="contact_no" class="form-label">{{__('Contact Number:')}}</x-label>
                            <x-input type="tel" name="contact_no" id="contact_no" value="{{old('contact_no')}}" class="form-control" />
                            <x-input-error for="contact_no" class="mt-2" />
                        </div>
                        
                        <div class="mb-3">
                            <x-label for="contact_person_name" class="form-label">{{__('Contact Person Name:')}}</x-label>
                            <x-input type="text" name="contact_person_name" id="contact_person_name" value="{{old('contact_person_name')}}" class="form-control" />
                            <x-input-error for="contact_person_name" class="mt-2" />
                        </div>
                    </div>

                    <div class="mb-3">
                        <x-button class="btn btn-primary">{{__('Submit')}}</x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
