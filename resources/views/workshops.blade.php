<x-app-layout>
    <div class="py-12">
        <section class="px-6 py-8">

            <header>
                <div class="max-w-4xl mx-auto lg:mt-20 text-center">
                    <div class="max-w-xl mx-auto">
                        <h1 class="text-4xl font-bold">
                            Workshops
                        </h1>
                        <p class="text-sm mt-10 text-gray-500">
                            Please select the workshops you want to take part in
                        </p>
                    </div>

                </div>
            </header>

            <main class="max-w-6xl mx-auto lg:mt-20 mt-10">
                <div class="lg:grid lg:grid-cols-2 ">
                    @foreach($workshops as $workshop)
                    <article
                        class="m-6 bg-white rounded-xl ">

                        <header>
                            <div class="bg-blue-background text-white rounded-t-xl p-6">
                                <h3 class="text-2xl font-semibold">
                                    {{ $workshop->title }}
                                </h3>

                            </div>
                        </header>

                        <div class="py-6 px-5 space-y-6">

                            <div class="">
                                <h4 class="font-bold text-gray-700"> Speaker : {{ $workshop->facilitator }}</h4>
                            </div>

                            <div class="text-sm text-gray-500">
                                {!! $workshop->description !!}
                            </div>

                            <footer class="flex justify-between items-center">
                                <div class="text-sm">
                                    <span class="font-semibold uppercase">{{ $workshop->time }},</span>
                                    {{ $workshop->date }}
                                </div>

                                <div>
                                    <a href=""
                                        class="text-sm font-semibold bg-blue-background hover:bg-sky-500 rounded-full py-2 px-3 text-white">
                                        Add to my list
                                    </a>
                                </div>
                            </footer>
                        </div>
                    </article>
                    @endforeach

                </div>
            </main>

        </section>
    </div>
</x-app-layout>
