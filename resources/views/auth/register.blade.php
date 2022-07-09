<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 text-gray-500 fill-current" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Full Name -->
            <div>
                <x-label for="name" :value="__('Full Name')" />

                <x-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Phone Number -->
            <div class="mt-4">
                <x-label for="phone" :value="__('Phone Number')" />

                <x-input id="phone" class="block w-full mt-1" type="text" name="phone" :value="old('phone')" required />
            </div>

            <!-- Institute/ College -->
            <div class="mt-4">
                <x-label for="institute" :value="__('Institute/ College')" />

                <x-input id="institute" class="block w-full mt-1" type="text" name="institute" :value="old('institute')" required />
            </div>

            <!-- Faculty -->
            <div class="mt-4">
                <x-label for="faculty" :value="__('Faculty')" />

                <x-input id="faculty" class="block w-full mt-1" type="text" name="faculty" :value="old('faculty')" required />
            </div>

            <!-- Year/ Semester -->
            <div class="mt-4">
                <x-label for="level" :value="__('Year/ Semester')" />

                <x-input id="level" class="block w-full mt-1" type="text" name="level" :value="old('level')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block w-full mt-1" type="password" name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
