<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('user.update') }}">
                        @csrf

                        @method('PATCH')

                        <!-- Full Name -->
                        <div>
                            <x-label for="name" :value="__('Name')" />

                            <x-input id="name" class="block w-full mt-1" type="text" name="name" value="{{ auth()->user()->name }}" required autofocus />

                            <x-error name="name" />
                        </div>

                        <!-- Email -->
                        <div class="mt-4">
                            <x-label for="email" :value="__('Email')" />

                            <x-input id="email" class="block w-full mt-1" type="email" name="email" value="{{ auth()->user()->email }}" required autofocus />

                            <x-error name="email" />
                        </div>

                        <!-- Phone -->
                        <div class="mt-4">
                            <x-label for="phone" :value="__('Phone')" />

                            <x-input id="phone" class="block w-full mt-1" type="text" name="phone" value="{{ auth()->user()->phone }}" required autofocus />

                            <x-error name="phone" />
                        </div>

                        <!-- College/ Institute -->
                        <div class="mt-4">
                            <x-label for="institute" :value="__('College/ Institute')" />

                            <x-input id="institute" class="block w-full mt-1" type="text" name="institute" value="{{ auth()->user()->institute }}" required />

                            <x-error name="institute" />
                        </div>

                        <div class="mt-4 grid grid-cols-2 gap-6">
                            <!-- Faculty -->
                            <div>
                                <x-label for="faculty" :value="__('Faculty')" />

                                <x-input id="faculty" class="block w-full mt-1" type="text" name="faculty" value="{{ auth()->user()->faculty }}" required />

                                <x-error name="faculty" />
                            </div>

                            <!-- Year/ Semester -->
                            <div>
                                <x-label for="level" :value="__('Year/ Semester')" />

                                <x-input id="level" class="block w-full mt-1" type="text" name="level" value="{{ auth()->user()->level }}" required />

                                <x-error name="level" />
                            </div>
                        </div>

                        <!-- New Password -->
                        <div class="mt-4">
                            <x-label for="password" :value="__('New Password')" />

                            <x-input id="password" class="block w-full mt-1" type="password" name="password" />

                            <x-error name="password" />
                        </div>

                        <!-- New Password Confirmation -->
                        <div class="mt-4">
                            <x-label for="password_confirmation" :value="__('New Password Confirmation')" />

                            <x-input id="password_confirmation" class="block w-full mt-1" type="password" name="password_confirmation" />

                            <x-error name="password_confirmation" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Update') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <x-notify/>
</x-app-layout>
