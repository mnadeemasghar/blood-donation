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
                                :options="[
                                    'Karachi' => 'Karachi',
                                    'Lahore' => 'Lahore',
                                    'Islamabad' => 'Islamabad',
                                    'Faisalabad' => 'Faisalabad',
                                    'Rawalpindi' => 'Rawalpindi',
                                    'Multan' => 'Multan',
                                    'Gujranwala' => 'Gujranwala',
                                    'Peshawar' => 'Peshawar',
                                    'Quetta' => 'Quetta',
                                    'Sialkot' => 'Sialkot',
                                    'Hyderabad' => 'Hyderabad',
                                    'Gujrat' => 'Gujrat',
                                    'Bahawalpur' => 'Bahawalpur',
                                    'Sargodha' => 'Sargodha',
                                    'Sukkur' => 'Sukkur',
                                    'Larkana' => 'Larkana',
                                    'Sheikhupura' => 'Sheikhupura',
                                    'Jhang' => 'Jhang',
                                    'Rahim Yar Khan' => 'Rahim Yar Khan',
                                    'Mardan' => 'Mardan',
                                    'Kasur' => 'Kasur',
                                    'Mingora' => 'Mingora',
                                    'Dera Ghazi Khan' => 'Dera Ghazi Khan',
                                    'Nawabshah' => 'Nawabshah',
                                    'Sahiwal' => 'Sahiwal',
                                    'Mirpur Khas' => 'Mirpur Khas',
                                    'Okara' => 'Okara',
                                    'Mandi Bahauddin' => 'Mandi Bahauddin',
                                    'Jacobabad' => 'Jacobabad',
                                    'Jhelum' => 'Jhelum',
                                    'Khanewal' => 'Khanewal',
                                    'Khairpur' => 'Khairpur',
                                    'Khuzdar' => 'Khuzdar',
                                    'Dadu' => 'Dadu',
                                    'Gojra' => 'Gojra',
                                    'Bahawalnagar' => 'Bahawalnagar',
                                    'Muridke' => 'Muridke',
                                    'Pakpattan' => 'Pakpattan',
                                    'Rahimyar Khan' => 'Rahimyar Khan',
                                    'Saddiqabad' => 'Saddiqabad',
                                    'Muzaffargarh' => 'Muzaffargarh',
                                    'Bhakkar' => 'Bhakkar',
                                    'Toba Tek Singh' => 'Toba Tek Singh',
                                    'Narowal' => 'Narowal',
                                    'Nowshera' => 'Nowshera',
                                    'Shahdadkot' => 'Shahdadkot',
                                    'Loralai' => 'Loralai',
                                    'Dera Ismail Khan' => 'Dera Ismail Khan',
                                    'Chiniot' => 'Chiniot',
                                    'Kamalia' => 'Kamalia',
                                    'Kashmore' => 'Kashmore',
                                    'Ghotki' => 'Ghotki',
                                    'Sadiqabad' => 'Sadiqabad',
                                    'Zhob' => 'Zhob',
                                    'Matiari' => 'Matiari',
                                    'Dasu' => 'Dasu',
                                    'Badin' => 'Badin',
                                    'Gwadar' => 'Gwadar',
                                    'Chakwal' => 'Chakwal',
                                    'Khushab' => 'Khushab',
                                    'Panjgur' => 'Panjgur',
                                    'Mastung' => 'Mastung',
                                    'Chaman' => 'Chaman',
                                    'Kohlu' => 'Kohlu',
                                    'Awaran' => 'Awaran',
                                    'Qila Abdullah' => 'Qila Abdullah',
                                    'Gandava' => 'Gandava',
                                    'Turbat' => 'Turbat',
                                    'Hangu' => 'Hangu',
                                    'Lakki Marwat' => 'Lakki Marwat',
                                    'Killa Saifullah' => 'Killa Saifullah',
                                    'Barkhan' => 'Barkhan',
                                    'Chagai' => 'Chagai',
                                    'Shangla' => 'Shangla',
                                    'Torkham' => 'Torkham',
                                    'Tank' => 'Tank',
                                    'Karak' => 'Karak',
                                    'Upper Dir' => 'Upper Dir',
                                    'Haripur' => 'Haripur',
                                    'Mianwali' => 'Mianwali',
                                    'Lower Dir' => 'Lower Dir',
                                    'Malakand' => 'Malakand',
                                    'Charsadda' => 'Charsadda',
                                    'Jamrud' => 'Jamrud',
                                    'Hassan Abdal' => 'Hassan Abdal',
                                    'Pind Dadan Khan' => 'Pind Dadan Khan',
                                    'Nankana Sahib' => 'Nankana Sahib',
                                    'Nowshehra' => 'Nowshehra',
                                    'Noshehra' => 'Noshehra',
                                    'Mansehra' => 'Mansehra',
                                    'Attock' => 'Attock',
                                    'Khairpur Tamewali' => 'Khairpur Tamewali',
                                    'Gujranwala District' => 'Gujranwala District',
                                    'Gujranwala Division' => 'Gujranwala Division',
                                    'Tando Adam' => 'Tando Adam',
                                    'Shikarpur' => 'Shikarpur',
                                    'Mithi' => 'Mithi',
                                    'Thatta' => 'Thatta',
                                    'Bhakkar District' => 'Bhakkar District',
                                    'Badin District' => 'Badin District',
                                    'Lasbela District' => 'Lasbela District',
                                    'Gujranwala Tehsil' => 'Gujranwala Tehsil',
                                    'Kandhkot' => 'Kandhkot',
                                    'Mirpur District' => 'Mirpur District',
                                    'Karak District' => 'Karak District',
                                    'Gujrat District' => 'Gujrat District',
                                    'Kohat District' => 'Kohat District',
                                    'Jhelum District' => 'Jhelum District',
                                    'Sukkur District' => 'Sukkur District',
                                    'Muzaffargarh District' => 'Muzaffargarh District',
                                    'Khushab District' => 'Khushab District',
                                    'Dera Ghazi Khan District' => 'Dera Ghazi Khan District',
                                    'Hangu District' => 'Hangu District',
                                    'Tharparkar District' => 'Tharparkar District',
                                    'Kashmore District' => 'Kashmore District',
                                    'Chakwal District' => 'Chakwal District',
                                    'Dir Lower District' => 'Dir Lower District',
                                    'Dir Upper District' => 'Dir Upper District',
                                    'Layyah District' => 'Layyah District',
                                    'Rajanpur District' => 'Rajanpur District',
                                    'Sanghar District' => 'Sanghar District',
                                    'Narowal District' => 'Narowal District',
                                    'Dadu District' => 'Dadu District',
                                    'Bannu District' => 'Bannu District',
                                    'Nushki District' => 'Nushki District',
                                    'Malakand District' => 'Malakand District',
                                    'Kohistan District' => 'Kohistan District',
                                    'Khuzdar District' => 'Khuzdar District',
                                    'Jafarabad District' => 'Jafarabad District',
                                    'Harnai District' => 'Harnai District',
                                    'Gwadar District' => 'Gwadar District',
                                    'Mastung District' => 'Mastung District',
                                    'Kalat District' => 'Kalat District',
                                    'Pishin District' => 'Pishin District',
                                    'Killa Abdullah District' => 'Killa Abdullah District',
                                    'Qilla Abdullah District' => 'Qilla Abdullah District',
                                    'Loralai District' => 'Loralai District',
                                    'Ziarat District' => 'Ziarat District',
                                    'Turbat District' => 'Turbat District',
                                    'Sibi District' => 'Sibi District',
                                    'Mardan District' => 'Mardan District',
                                    'Swabi District' => 'Swabi District',
                                    'Buner District' => 'Buner District',
                                    'Shangla District' => 'Shangla District',
                                    'Malakand District' => 'Malakand District',
                                    'Upper Dir District' => 'Upper Dir District',
                                    'Lower Dir District' => 'Lower Dir District',
                                    'Batagram District' => 'Batagram District',
                                    'Kohistan District' => 'Kohistan District',
                                    'Khyber District' => 'Khyber District',
                                    'Orakzai District' => 'Orakzai District',
                                    'Mohmand District' => 'Mohmand District',
                                    'Bajaur District' => 'Bajaur District',
                                    'North Waziristan District' => 'North Waziristan District',
                                    'South Waziristan District' => 'South Waziristan District',
                                    'FR Bannu District' => 'FR Bannu District',
                                    'FR DI Khan District' => 'FR DI Khan District',
                                    'FR Kohat District' => 'FR Kohat District',
                                    'FR Lakki Marwat District' => 'FR Lakki Marwat District',
                                    'FR Peshawar District' => 'FR Peshawar District',
                                    'FR Tank District' => 'FR Tank District',
                                    'FR Dera Ismail Khan District' => 'FR Dera Ismail Khan District',
                                    'FR Bannu District' => 'FR Bannu District',
                                    'FR DI Khan District' => 'FR DI Khan District',
                                    'FR Kohat District' => 'FR Kohat District',
                                    'FR Lakki Marwat District' => 'FR Lakki Marwat District',
                                    'FR Peshawar District' => 'FR Peshawar District',
                                    'FR Tank District' => 'FR Tank District',
                                    'FR Dera Ismail Khan District' => 'FR Dera Ismail Khan District',
                                    'Chitral District' => 'Chitral District',
                                    'Bajaur Agency' => 'Bajaur Agency',
                                    'Mohmand Agency' => 'Mohmand Agency',
                                    'Kurram Agency' => 'Kurram Agency',
                                    'Orakzai Agency' => 'Orakzai Agency',
                                    'Khyber Agency' => 'Khyber Agency',
                                    'South Waziristan Agency' => 'South Waziristan Agency',
                                    'North Waziristan Agency' => 'North Waziristan Agency'
                                ]">
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
