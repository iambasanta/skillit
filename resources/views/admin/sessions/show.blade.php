<x-app-layout>
    <x-admin>
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <div class="flex items-center justify-between my-4">

                        <a href="{{ route('admin.sessions.index') }}" class = 'inline-flex items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest hover:bg-gray-300 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150'>
                            {{ __('Go Back') }}
                        </a>

                        <x-button class="ml-4">
                            <a href="{{ route('admin.sessions.registrants.download',$session) }}">
                                {{ __('Save as PDF') }}
                            </a>
                        </x-button>
                    </div>
                    <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Full Name
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Email
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Phone
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        College/Institute
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="text-gray-700 bg-white divide-y divide-gray-200">
                                @foreach($registrants as $registrant)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="inline-flex px-2 text-xs font-semibold leading-5 ">
                                            {{ $registrant->name }}
                                        </span>
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="inline-flex px-2 text-xs font-semibold leading-5 ">
                                            {{ $registrant->email }}
                                        </span>
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="inline-flex px-2 text-xs font-semibold leading-5 ">
                                            {{ $registrant->phone }}
                                        </span>
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="inline-flex px-2 text-xs font-semibold leading-5 ">
                                            {{ $registrant->institute }}
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>

                    <div class="m-2">
                        {{ $registrants->links() }}
                    </div>

                </div>
            </div>
        </div>
    </x-admin>
    <x-notify />
</x-app-layout>
