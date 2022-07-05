<x-app-layout>
    <x-admin>
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <form method="POST" action="{{ route('admin.workshops.store') }}">
                        @csrf

                        <!-- Title -->
                        <div>
                            <x-label for="title" :value="__('Title')" />

                            <x-input id="title" class="block w-full mt-1" type="text" name="title" :value="old('title')" required autofocus />
                            
                            <x-error name="title" />
                        </div>

                        <!-- Facilitator -->
                        <div class="mt-4">
                            <x-label for="facilitator" :value="__('Facilitator')" />

                            <x-input id="facilitator" class="block w-full mt-1" type="text" name="facilitator" :value="old('facilitator')" required />

                            <x-error name="facilitator" />
                        </div>

                        <!-- Date -->
                        <div class="mt-4">
                            <x-label for="date" :value="__('Date')" />

                            <x-datepicker name="date" value="{{ old('date') }}"/>

                            <x-error name="date" />
                        </div>

                        <!-- Time -->
                        <div class="mt-4">
                            <x-label for="time" :value="__('Time')" />

                            <x-timepicker name="time" value="{{ old('time') }}"/>

                            <x-error name="time" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Create') }}
                            </x-button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </x-admin>
</x-app-layout>
