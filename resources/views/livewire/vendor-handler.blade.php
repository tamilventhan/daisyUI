<div class="pb-4">
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="justify-between pr-3">
                    <div class="flex-initial w-30">
                        <div
                            class="basis-1/4 p-6 font-bold bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                            Vendor Registration
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-0">
        <div class="max-w-9xl mx-auto sm:px-7 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form wire:submit.prevent="register">

                    {{-- STEP 1 --}}

                    @if ($currentStep == 1)

                    <div class="step-one">
                        <!-- Stepper -->
                        <ul class="relative flex flex-row gap-x-2 max-w-xs mx-auto mt-5">
                            <!-- Item -->
                            <li class="shrink basis-0 flex-1 group">
                                <div class="min-w-7 min-h-7 w-full inline-flex items-center text-xs align-middle">
                                    <span
                                        class="size-7 flex justify-center items-center flex-shrink-0 bg-blue-600 font-medium text-gray-200 rounded-full dark:bg-gray-700 dark:text-white">
                                        1
                                    </span>
                                    <div class="ms-2 w-full h-px flex-1 bg-gray-200 group-last:hidden dark:bg-gray-700">
                                    </div>
                                </div>
                            </li>
                            <!-- End Item -->

                            <!-- Item -->
                            <li class="shrink basis-0 flex-1 group">
                                <div class="min-w-7 min-h-7 w-full inline-flex items-center text-xs align-middle">
                                    <span
                                        class="size-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full dark:bg-gray-700 dark:text-white">
                                        2
                                    </span>
                                    <div class="ms-2 w-full h-px flex-1 bg-gray-200 group-last:hidden dark:bg-gray-700">
                                    </div>
                                </div>
                            </li>
                            <!-- End Item -->

                            <!-- Item -->
                            <li class="shrink basis-0 flex-1 group">
                                <div class="min-w-7 min-h-7 w-full inline-flex items-center text-xs align-middle">
                                    <span
                                        class="size-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full dark:bg-gray-700 dark:text-white">
                                        3
                                    </span>
                                    <div class="ms-2 w-full h-px flex-1 bg-gray-200 group-last:hidden dark:bg-gray-700">
                                    </div>
                                </div>
                            </li>
                            <!-- End Item -->

                            <!-- Item -->
                            <li class="shrink basis-0 flex-1 group">
                                <div class="min-w-7 min-h-7 w-full inline-flex items-center text-xs align-middle">
                                    <span
                                        class="size-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full dark:bg-gray-700 dark:text-white">
                                        4
                                    </span>
                                    <div class="ms-2 w-full h-px flex-1 bg-gray-200 group-last:hidden dark:bg-gray-700">
                                    </div>
                                </div>
                            </li>
                            <!-- End Item -->
                        </ul>
                        <!-- End Stepper -->
                        <div class="bg-white rounded px-8 pt-6 pb-8 mb-4 border-t mt-5">
                            <div class="grid gap-4 lg:gap-6">
                                <!-- Comany Name and Firm type -->
                                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 lg:gap-6">
                                    <div class="col-span-2">
                                        <label for="companyName"
                                            class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Company
                                            Name</label>
                                        <input type="text" name="companyName" id="companyName"
                                            class="input input-bordered w-full">
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 lg:gap-6">
                                    <div>
                                        <label for="firmType"
                                            class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Type of
                                            firm/Company</label>

                                        <div wire:ignore>
                                            <select class="select select-bordered w-full" id="firmType"
                                                wire:model="firmType" name="firmType" required>
                                                <option value="">Select type of firm</option>
                                                <option value="public limited">Public Limited</option>
                                                <option value="private limited">Private Limited</option>
                                                <option value="partnership">Partnership</option>
                                                <option value="proprietorship">Proprietorship</option>
                                                <option value="government sector">Government Sector</option>
                                                <option value="others">Others</option>
                                            </select>
                                        </div>
                                        <span class="text-red-500">
                                            @error('firmType')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div>
                                        <label for="businessType"
                                            class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Business
                                            Type</label>

                                        <div wire:ignore>
                                            <select class="select select-bordered w-full" id="businessType"
                                                wire:model="businessType" name="businessType" required>
                                                <option value="">Select type of business</option>
                                                <option value="single">Retailer</option>
                                                <option value="widowed">Distributor/Dealer</option>
                                                <option value="married">Publication/Broadcaster</option>
                                                <option value="divorced">Professional Services</option>
                                                <option value="separated">Service Provider</option>
                                                <option value="widowed">Manufacturer</option>
                                                <option value="widowed">Consultant</option>
                                                <option value="widowed">Wholesaler</option>
                                                <option value="widowed">Freight/Transportation</option>
                                                <option value="widowed">Construction Contractor</option>
                                                <option value="widowed">Others</option>
                                            </select>
                                        </div>
                                        <span class="text-red-500">
                                            @error('businessType')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div>
                                        <label for="unitServing"
                                            class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Unit
                                            Serving</label>

                                        <div wire:ignore>
                                            <select class="select select-bordered w-full" id="unitServing"
                                                wire:model="unitServing" name="unitServing" required>
                                                <option value="">Select unit</option>
                                                <option value="tennur">Tennur</option>
                                                <option value="cantonment">Cantonment</option>
                                                <option value="heart city">Heart City</option>
                                                <option value="chennai">Chennai</option>
                                                <option value="hosur">Hosur</option>
                                                <option value="salem">Salem</option>
                                                <option value="karaikudi">Karaikudi</option>
                                                <option value="electronic city - BLR">Electronic City - BLR</option>
                                                <option value="tirunelveli">Tirunelveli</option>
                                                <option value="marathahalli - BLR">Marathahalli - BLR</option>
                                                <option value="kovilambakkam">Kovilambakkam</option>
                                                <option value="vadapalani">Vadapalani</option>
                                            </select>
                                        </div>
                                        <span class="text-red-500">
                                            @error('unitServing')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <!-- End Comany Name and Firm type -->

                                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 lg:gap-6">
                                    <div class="col-span-2">
                                        <label for="email"
                                            class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Email</label>
                                        <input type="email" name="email" id="email" autocomplete="email"
                                            class="input input-bordered w-full">
                                        <span class="text-red-500">
                                            @error('companyName')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div>
                                        <label for="landlineNumber"
                                            class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Landline
                                            Number</label>
                                        <input type="text" name="landlineNumber" id="landlineNumber"
                                            class="input input-bordered w-full">
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 lg:gap-6">

                                    <div>
                                        <label for="gstRegistered"
                                            class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">
                                            GST Registered
                                        </label>
                                        <div>
                                            <div class="space-x-4">
                                                <input name="gstRegistered" wire:model="gstRegistered" class="radio"
                                                    type="radio" value="1" id="gstRegisteredYes">
                                                <label class="form-label" for="gstRegisteredYes">Yes</label>
                                                <input name="gstRegistered" wire:model="gstRegistered" class="radio"
                                                    type="radio" value="0" id="gstRegisteredNo">
                                                <label class="form-label" for="gstRegisteredNo">No</label>
                                            </div>
                                            <div class="text-red-600">
                                                @error('gstRegistered')
                                                {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <label for="gstNumber"
                                            class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">
                                            GST Number
                                        </label>
                                        <input type="text" name="gstNumber" id="gstNumber"
                                            class="input input-bordered w-full">
                                        <div class="text-red-600">
                                            @error('gstNumber')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div>
                                        <label for="gstPayerStatus"
                                            class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">
                                            GST Payer Status
                                        </label>

                                        <div wire:ignore>
                                            <select class="select select-bordered w-full" id="gstPayerStatus"
                                                wire:model="gstPayerStatus" name="gstPayerStatus" required>
                                                <option value="">Select Payer Status</option>
                                                <option value="public limited">Regular Tax Payable Vendor</option>
                                                <option value="private limited">Composition Scheme Vendor</option>
                                                <option value="partnership">GST Exempted Tax Vendor</option>
                                                <option value="proprietorship">Non Registered Vendor</option>
                                            </select>
                                        </div>
                                        <span class="text-red-500">
                                            @error('gstPayerStatus')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 lg:gap-6">

                                    <div>
                                        <label for="msmeRegistered"
                                            class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">
                                            MSME Registered
                                        </label>
                                        <div>
                                            <div class="space-x-4">
                                                <input name="msmeRegistered" wire:model="msmeRegistered" class="radio"
                                                    type="radio" value="1" id="msmeRegisteredYes">
                                                <label class="form-label" for="msmeRegisteredYes">Yes</label>
                                                <input name="msmeRegistered" wire:model="msmeRegistered" class="radio"
                                                    type="radio" value="0" id="msmeRegisteredNo">
                                                <label class="form-label" for="msmeRegisteredNo">No</label>
                                            </div>
                                            <div class="text-red-600">
                                                @error('msmeRegistered')
                                                {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <label for="drugLicenseNumber"
                                            class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">
                                            Drug License Number
                                        </label>
                                        <input type="text" name="drugLicenseNumber" id="drugLicenseNumber"
                                            class="input input-bordered w-full">
                                        <div class="text-red-600">
                                            @error('drugLicenseNumber')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div>
                                        <label for="panNumber"
                                            class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">
                                            PAN Number
                                        </label>
                                        <input type="text" name="panNumber" id="panNumber"
                                            class="input input-bordered w-full">
                                        <div class="text-red-600">
                                            @error('panNumber')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    @endif

                    {{-- STEP 2 --}}

                    @if ($currentStep == 2)

                    <div class="step-two">
                        <ul class="relative flex flex-row gap-x-2 max-w-xs mx-auto mt-5">
                            <!-- Item -->
                            <li class="shrink basis-0 flex-1 group">
                                <div class="min-w-7 min-h-7 w-full inline-flex items-center text-xs align-middle">
                                    <span
                                        class="size-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full dark:bg-gray-700 dark:text-white">
                                        1
                                    </span>
                                    <div class="ms-2 w-full h-px flex-1 bg-gray-200 group-last:hidden dark:bg-gray-700">
                                    </div>
                                </div>
                            </li>
                            <!-- End Item -->

                            <!-- Item -->
                            <li class="shrink basis-0 flex-1 group">
                                <div class="min-w-7 min-h-7 w-full inline-flex items-center text-xs align-middle">
                                    <span
                                        class="size-7 flex justify-center items-center flex-shrink-0 bg-blue-600 font-medium text-gray-100 rounded-full dark:bg-gray-700 dark:text-white">
                                        2
                                    </span>
                                    <div class="ms-2 w-full h-px flex-1 bg-gray-200 group-last:hidden dark:bg-gray-700">
                                    </div>
                                </div>
                            </li>
                            <!-- End Item -->

                            <!-- Item -->
                            <li class="shrink basis-0 flex-1 group">
                                <div class="min-w-7 min-h-7 w-full inline-flex items-center text-xs align-middle">
                                    <span
                                        class="size-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full dark:bg-gray-700 dark:text-white">
                                        3
                                    </span>
                                    <div class="ms-2 w-full h-px flex-1 bg-gray-200 group-last:hidden dark:bg-gray-700">
                                    </div>
                                </div>
                            </li>
                            <!-- End Item -->

                            <!-- Item -->
                            <li class="shrink basis-0 flex-1 group">
                                <div class="min-w-7 min-h-7 w-full inline-flex items-center text-xs align-middle">
                                    <span
                                        class="size-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full dark:bg-gray-700 dark:text-white">
                                        4
                                    </span>
                                    <div class="ms-2 w-full h-px flex-1 bg-gray-200 group-last:hidden dark:bg-gray-700">
                                    </div>
                                </div>
                            </li>
                            <!-- End Item -->
                        </ul>

                        <div class="bg-white rounded px-8 pt-6 pb-8 mb-4 border-t mt-5">
                            <div class="grid gap-4 lg:gap-6">
                                <div class="grid grid-cols-1 sm:grid-cols-4 gap-4 lg:gap-6">
                                    <div>
                                        <label for="pincode"
                                            class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Pincode</label>
                                        <input type="text" name="pincode" id="pincode"
                                            class="input input-bordered w-full">
                                    </div>

                                    <div>
                                        <label for="city"
                                            class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">City</label>
                                        <input type="city" name="city" id="city" autocomplete="city"
                                            class="input input-bordered w-full">
                                        <span class="text-red-500">
                                            @error('city')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div>
                                        <label for="state"
                                            class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">State</label>
                                        <input type="text" name="state" id="state" class="input input-bordered w-full">
                                    </div>

                                    <div>
                                        <label for="country"
                                            class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Country</label>
                                        <input type="country" name="country" id="country" autocomplete="country"
                                            class="input input-bordered w-full">
                                        <span class="text-red-500">
                                            @error('country')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>

                                <div>
                                    <label for="address"
                                        class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Address</label>
                                    <textarea id="address" name="address" rows="4"
                                        class="textarea textarea-bordered w-full"></textarea>
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 lg:gap-6">
                                    <div>
                                        <label for="contactPerson"
                                            class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Contact
                                            Person</label>
                                        <input type="text" name="contactPerson" id="contactPerson"
                                            autocomplete="contactPerson" class="input input-bordered w-full">
                                        <span class="text-red-500">
                                            @error('contactPerson')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div>
                                        <label for="mobileNumber"
                                            class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Mobile
                                            Number</label>
                                        <input type="number" name="mobileNumber" id="mobileNumber"
                                            class="input input-bordered w-full">
                                    </div>
                                    <div>
                                        <label for="contactEmail"
                                            class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Contact
                                            Email</label>
                                        <input type="text" name="contactEmail" id="contactEmail"
                                            class="input input-bordered w-full">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    {{-- STEP 3 --}}

                    @if ($currentStep == 3)

                    <div class="step-three">
                        <ul class="relative flex flex-row gap-x-2 max-w-xs mx-auto mt-5">
                            <!-- Item -->
                            <li class="shrink basis-0 flex-1 group">
                                <div class="min-w-7 min-h-7 w-full inline-flex items-center text-xs align-middle">
                                    <span
                                        class="size-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full dark:bg-gray-700 dark:text-white">
                                        1
                                    </span>
                                    <div class="ms-2 w-full h-px flex-1 bg-gray-200 group-last:hidden dark:bg-gray-700">
                                    </div>
                                </div>
                            </li>
                            <!-- End Item -->

                            <!-- Item -->
                            <li class="shrink basis-0 flex-1 group">
                                <div class="min-w-7 min-h-7 w-full inline-flex items-center text-xs align-middle">
                                    <span
                                        class="size-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full dark:bg-gray-700 dark:text-white">
                                        2
                                    </span>
                                    <div class="ms-2 w-full h-px flex-1 bg-gray-200 group-last:hidden dark:bg-gray-700">
                                    </div>
                                </div>
                            </li>
                            <!-- End Item -->

                                                        <!-- Item -->
                            <li class="shrink basis-0 flex-1 group">
                                <div class="min-w-7 min-h-7 w-full inline-flex items-center text-xs align-middle">
                                    <span
                                        class="size-7 flex justify-center items-center flex-shrink-0 bg-blue-600 font-medium text-gray-100 rounded-full dark:bg-gray-700 dark:text-white">
                                        3
                                    </span>
                                    <div class="ms-2 w-full h-px flex-1 bg-gray-200 group-last:hidden dark:bg-gray-700">
                                    </div>
                                </div>
                            </li>
                            <!-- End Item -->

                            <!-- Item -->
                            <li class="shrink basis-0 flex-1 group">
                                <div class="min-w-7 min-h-7 w-full inline-flex items-center text-xs align-middle">
                                    <span
                                        class="size-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full dark:bg-gray-700 dark:text-white">
                                        4
                                    </span>
                                    <div class="ms-2 w-full h-px flex-1 bg-gray-200 group-last:hidden dark:bg-gray-700">
                                    </div>
                                </div>
                            </li>
                            <!-- End Item -->
                        </ul>

                        <div class="bg-white rounded px-8 pt-6 pb-8 mb-4 border-t mt-5">
                            <div class="grid gap-4 lg:gap-6">
                                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 lg:gap-6">
                                    <div>
                                        <label for="bankName"
                                            class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Name of the bank</label>
                                        <input type="text" name="bankName" id="bankName"
                                            autocomplete="bankName" class="input input-bordered w-full">
                                        <span class="text-red-500">
                                            @error('bankName')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div>
                                        <label for="branch"
                                            class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Branch</label>
                                        <input type="text" name="branch" id="branch"
                                            autocomplete="branch" class="input input-bordered w-full">
                                        <span class="text-red-500">
                                            @error('branch')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div>
                                        <label for="ifscCode"
                                            class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">IFSC Code</label>
                                        <input type="number" name="ifscCode" id="ifscCode"
                                            autocomplete="ifscCode" class="input input-bordered w-full">
                                        <span class="text-red-500">
                                            @error('ifscCode')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div>
                                        <label for="cityTown"
                                            class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">City/Town</label>
                                        <input type="text" name="cityTown" id="cityTown"
                                            autocomplete="cityTown" class="input input-bordered w-full">
                                        <span class="text-red-500">
                                            @error('cityTown')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div>
                                        <label for="accountHolderName"
                                            class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Account Holder Name</label>
                                        <input type="text" name="accountHolderName" id="accountHolderName"
                                            autocomplete="accountHolderName" class="input input-bordered w-full">
                                        <span class="text-red-500">
                                            @error('accountHolderName')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div>
                                        <label for="accountNumber"
                                            class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Account Number</label>
                                        <input type="number" name="accountNumber" id="accountNumber"
                                            autocomplete="accountNumber" class="input input-bordered w-full">
                                        <span class="text-red-500">
                                            @error('accountNumber')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    
                                    <div>
                                        <label for="accountType"
                                            class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Account Type</label>

                                        <div wire:ignore>
                                            <select class="select select-bordered w-full" id="accountType"
                                                wire:model="accountType" name="accountType" required>
                                                <option value="">Select account type</option>
                                                <option value="current account">Current Account</option>
                                                <option value="savings account">Savings Account</option>
                                                <option value="overdraft account">Overdraft Account</option>
                                            </select>
                                        </div>
                                        <span class="text-red-500">
                                            @error('accountType')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    {{-- STEP 4 --}}
                    @if ($currentStep == 4)
                    <div class="step-four">
                        <ul class="relative flex flex-row gap-x-2 max-w-xs mx-auto mt-5">
                            <!-- Item -->
                            <li class="shrink basis-0 flex-1 group">
                                <div class="min-w-7 min-h-7 w-full inline-flex items-center text-xs align-middle">
                                    <span
                                        class="size-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full dark:bg-gray-700 dark:text-white">
                                        1
                                    </span>
                                    <div class="ms-2 w-full h-px flex-1 bg-gray-200 group-last:hidden dark:bg-gray-700">
                                    </div>
                                </div>
                            </li>
                            <!-- End Item -->

                            <!-- Item -->
                            <li class="shrink basis-0 flex-1 group">
                                <div class="min-w-7 min-h-7 w-full inline-flex items-center text-xs align-middle">
                                    <span
                                        class="size-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full dark:bg-gray-700 dark:text-white">
                                        2
                                    </span>
                                    <div class="ms-2 w-full h-px flex-1 bg-gray-200 group-last:hidden dark:bg-gray-700">
                                    </div>
                                </div>
                            </li>
                            <!-- End Item -->

                            <!-- Item -->
                            <li class="shrink basis-0 flex-1 group">
                                <div class="min-w-7 min-h-7 w-full inline-flex items-center text-xs align-middle">
                                    <span
                                        class="size-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full dark:bg-gray-700 dark:text-white">
                                        3
                                    </span>
                                    <div class="ms-2 w-full h-px flex-1 bg-gray-200 group-last:hidden dark:bg-gray-700">
                                    </div>
                                </div>
                            </li>
                            <!-- End Item -->

                            <!-- Item -->
                            <li class="shrink basis-0 flex-1 group">
                                <div class="min-w-7 min-h-7 w-full inline-flex items-center text-xs align-middle">
                                    <span
                                        class="size-7 flex justify-center items-center flex-shrink-0 bg-blue-600 font-medium text-gray-100 rounded-full dark:bg-gray-700 dark:text-white">
                                        4
                                    </span>
                                    <div class="ms-2 w-full h-px flex-1 bg-gray-200 group-last:hidden dark:bg-gray-700">
                                    </div>
                                </div>
                            </li>
                            <!-- End Item -->

                        </ul>

                        <div class="bg-white rounded px-8 pt-6 pb-8 mb-4 border-t mt-5">
                            <div class="grid gap-4 lg:gap-6 md:p-10">
                                <div class="grid grid-cols-1 sm:grid-cols-1 gap-4 lg:gap-6">

                                    <div>
                                        <label for="vendorCategory"
                                            class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Vendor Category</label>

                                        <div wire:ignore>
                                            <select class="select select-bordered w-full" id="vendorCategory"
                                                wire:model="vendorCategory" name="vendorCategory" required>
                                                <option value="">Select vendor category</option>
                                                <option value="pharma items">Pharma Items</option>
                                                <option value="clinial consumables">Clinial Consumables</option>
                                                <option value="general items">General Items</option>
                                                <option value="stent/implant">Stent/Implant</option>
                                                <option value="clinical service">Clinical Service</option>
                                                <option value="other service">Other Service</option>
                                                <option value="capex">Capex</option>
                                                <option value="construction & projects">Construction & Projects</option>
                                            </select>
                                        </div>
                                        <span class="text-red-500">
                                            @error('vendorCategory')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div>
                                        <label for="productsServices"
                                            class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Product Services</label>
                                        <textarea id="productsServices" name="productsServices" rows="4" class="textarea textarea-bordered w-full"></textarea>
                                        <span class="text-red-500">
                                            @error('productsServices')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div>
                                        <label for="documentListing" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">list of documents if any for the above</label>
                                        <input type="file" name="documentListing" id="documentListing" class="file-input file-input-bordered w-full" />
                                        <span class="text-red-500">
                                            @error('documentListing')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div>
                                        <label class="block mb-2 text-sm text-gray-700 font-medium dark:text-white" for="declaration">
                                            <input wire:model="declaration" class="checkbox" type="checkbox" id="declaration">
                                            <span class="text-sm text-gray-700 font-medium dark:text-white">
                                                You must agree with our <a href="#" class="text-blue-500">Terms and Conditions</a>
                                            </span>
                                        </label>
                                        <span class="text-red-500">@error('declaration'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    <div class="flex justify-between bg-white p-8 border-t">
                        @if ($currentStep == 1)
                        <div></div>
                        @endif

                        @if ($currentStep == 2 || $currentStep == 3 || $currentStep == 4)
                        <button type="button" wire:click="decreaseStep()"
                            class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                            Back
                        </button>
                        @endif

                        @if ($currentStep == 1 || $currentStep == 2 || $currentStep == 3)
                        <button type="button" wire:click="increaseStep()"
                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            Next
                        </button>
                        @endif

                        @if ($currentStep == 4)
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Submit
                        </button>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>