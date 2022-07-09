<x-app-layout>
    <div class="py-12">
        <section class="px-6 py-8">

            <header>
                <div class="max-w-4xl mx-auto text-center lg:mt-20">
                    <div class="max-w-xl mx-auto">
                        <h1 class="text-4xl font-bold">
                            Workshops
                        </h1>
                        <p class="mt-10 text-sm text-gray-500">
                            Please select the workshops you want to take part in
                        </p>
                    </div>

                </div>
            </header>

            <main class="max-w-6xl mx-auto mt-10 lg:mt-20">
                <div class="lg:grid lg:grid-cols-2 ">
                    @foreach($workshops as $workshop)
                    <article class="m-6 bg-white rounded-xl ">

                        <header>
                            <div class="p-6 text-white bg-blue-background rounded-t-xl">
                                <h3 class="text-2xl font-semibold">
                                    {{ $workshop->title }}
                                </h3>

                            </div>
                        </header>

                        <div class="px-5 py-6 space-y-6">

                            <div class="">
                                <h4 class="font-bold text-gray-700"> Speaker : {{ $workshop->facilitator }}</h4>
                            </div>

                            <div class="text-sm text-gray-500">
                                {!! $workshop->description !!}
                            </div>

                            <footer class="flex items-center justify-between">
                                <div class="text-sm">
                                    <span class="font-semibold uppercase">{{ $workshop->time }},</span>
                                    {{ $workshop->date }}
                                </div>

                                <div>
                                    <form action="{{ route('workshops.register',$workshop->id) }}" method="POST">
                                        @csrf

                                        @method('PATCH')

                                        <button class="px-3 py-2 text-sm font-semibold text-white rounded-full bg-blue-background hover:bg-sky-500">
                                            Register
                                        </button>
                                    </form>

                                </div>
                            </footer>
                        </div>
                    </article>
                    @endforeach

                </div>
            </main>

        </section>
    </div>

    <x-notify />
</x-app-layout>
