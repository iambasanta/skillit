<section class="py-8 max-w-6xl mx-auto">

    <div class="flex">
        <aside class="w-48 flex-shrink-0">
            <ul class="space-y-2">
                <li>
                    <a href="{{ route('admin.index') }}" class="fobt-semibold text-gray-700 hover:text-blue-600">Home</a>
                </li>

                <li>
                    <p class="font-bold text-gray-500 text-xs tracking-wider uppercase pt-2">Workshops</p>
                    <ul>
                        <li>
                            <a href="" class="font-semibold text-gray-600 hover:text-blue-600">All Workshops</a>
                        </li>

                        <li>
                            <a href="" class="font-semibold text-gray-600 hover:text-blue-600">Add New</a>
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
