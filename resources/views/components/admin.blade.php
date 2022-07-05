<section class="max-w-6xl py-8 mx-auto">

    <div class="flex">
        <aside class="flex-shrink-0 w-48">
            <ul class="space-y-2">
                <li>
                    <a href="{{ route('admin.index') }}" class="text-gray-700 fobt-semibold hover:text-blue-600">Home</a>
                </li>

                <li>
                    <p class="pt-2 text-xs font-bold tracking-wider text-gray-500 uppercase">Workshops</p>
                    <ul>
                        <li>
                            <a href="{{ route('admin.workshops.index') }}" class="font-semibold text-gray-600 hover:text-blue-600">All Workshops</a>
                        </li>

                        <li>
                            <a href="{{ route('admin.workshops.create') }}" class="font-semibold text-gray-600 hover:text-blue-600">Add New</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <p class="font-bold text-gray-500 text-xs tracking-wider uppercase pt-2">Sessions</p>
                    <ul>
                        <li>
                            <a href="" class="font-semibold text-gray-600 hover:text-blue-600">All Sessions</a>
                        </li>

                        <li>
                            <a href="" class="font-semibold text-gray-600 hover:text-blue-600">Add New</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </aside>

        <main class="flex-1">
            {{ $slot }}
        </main>
    </div>
</section>
