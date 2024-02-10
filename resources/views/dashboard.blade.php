<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- <x-welcome /> -->
                <div class="m-4">
                    {{__("Looking for:")}}
                    <x-link :href="route('blood_donations.blood_type',['blood_type'=>'A+'])">A+ ({{ $blood_group_counts ? $blood_group_counts['A+']:"0" }})</x-link>
                    <x-link :href="route('blood_donations.blood_type',['blood_type'=>'A-'])">A- ({{ $blood_group_counts ? $blood_group_counts['A-']:"0" }})</x-link>
                    <x-link :href="route('blood_donations.blood_type',['blood_type'=>'B+'])">B+ ({{ $blood_group_counts ? $blood_group_counts['B+']:"0" }})</x-link>
                    <x-link :href="route('blood_donations.blood_type',['blood_type'=>'B-'])">B- ({{ $blood_group_counts ? $blood_group_counts['B-']:"0" }})</x-link>
                    <x-link :href="route('blood_donations.blood_type',['blood_type'=>'AB+'])">AB+ ({{ $blood_group_counts ? $blood_group_counts['AB+']:"0" }})</x-link>
                    <x-link :href="route('blood_donations.blood_type',['blood_type'=>'AB-'])">AB- ({{ $blood_group_counts ? $blood_group_counts['AB-']:"0" }})</x-link>
                    <x-link :href="route('blood_donations.blood_type',['blood_type'=>'O+'])">O+ ({{ $blood_group_counts ? $blood_group_counts['O+']:"0" }})</x-link>
                    <x-link :href="route('blood_donations.blood_type',['blood_type'=>'O-'])">O- ({{ $blood_group_counts ? $blood_group_counts['O-']:"0" }})</x-link>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
