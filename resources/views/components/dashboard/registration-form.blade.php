<div class="max-w-3xl mx-auto space-y-6">

    <div class="bg-indigo-700 text-white p-3">
        <h1 class="font-bold">Registration Form</h1>
    </div>

    <div class="bg-white p-6">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form class="space-y-3" method="POST" action="{{ route('store-user') }}">
        @csrf

            <div class="grid grid-cols-3">
                <x-label for="registration_number" class="text-gray-700 col-span-1" :value="__('Registration Number')" />
                <x-input id="registration_number" class="col-span-2 block mt-1 w-full" type="text" name="registration_number" :value="old('registration_number')" autofocus />
            </div>
            <div class="grid grid-cols-3">
                <x-label for="email" class="text-gray-700 col-span-1" :value="__('Email')" />
                <x-input id="email" class="col-span-2 block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>
            <div class="grid grid-cols-3">
                <x-label for="name" class="text-gray-700 col-span-1" :value="__('Name')" />
                <x-input id="name" class="col-span-2 block mt-1 w-full" type="text" name="name" :value="old('name')" required />
            </div>
            <div class="grid grid-cols-3">
                <x-label for="password" class="text-gray-700 col-span-1" :value="__('Password')" />
                <x-input id="password" class="col-span-2 block mt-1 w-full" type="password" name="password" :value="old('password')" required />
            </div>
            <div class="grid grid-cols-3">
                <label for="myfile">Select a file:</label>
                <input type="file" id="myfile" name="myfile">
            </div>
            <div class="grid grid-cols-3">
                <div class="col-span-1"></div>
                <div class="col-span-2">
                    <label for="is_student" class="inline-flex items-center">
                        <input id="is_student" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="is_student">
                        <span class="ml-2 text-sm text-gray-700">{{ __('Is Student') }}</span>
                    </label>
                </div>
            </div>
            <div class="grid grid-cols-3">
                <div class="col-span-1"></div>
                <div class="col-span-2">
                    <label for="is_staff" class="inline-flex items-center">
                        <input id="is_staff" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="is_staff">
                        <span class="ml-2 text-sm text-gray-700">{{ __('Is Staff') }}</span>
                    </label>
                </div>
            </div>
            <div class="grid grid-cols-3">
                <div class="col-span-1"></div>
                <div class="col-span-2">
                    <label for="is_super_admin" class="inline-flex items-center">
                        <input id="is_super_admin" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="is_super_admin">
                        <span class="ml-2 text-sm text-gray-700">{{ __('Is Super Admin') }}</span>
                    </label>
                </div>
            </div>
            <div class="grid grid-cols-3">
                <div class="col-span-1"></div>
                <div class="col-span-2 flex justify-end">
                    <x-button class="bg-indigo-600 hover:bg-indigo-800">
                        {{ __('Create') }}
                    </x-button>
                </div>
            </div>
        </form>
    </div>
</div>
