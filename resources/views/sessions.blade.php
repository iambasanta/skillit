<x-app-layout>
    <div class="py-12">
        <section class="px-6 py-8">

            <header>
                <div class="max-w-4xl mx-auto lg:mt-20 text-center">
                    <div class="max-w-xl mx-auto">
                        <h1 class="text-4xl font-bold">
                            Sessions
                        </h1>
                        <p class="text-sm mt-10 text-gray-500">
                            Please select the sessions you want to take part in
                        </p>
                    </div>

                </div>
            </header>

            <main class="max-w-6xl mx-auto lg:mt-20 mt-10">
                <div class="lg:grid lg:grid-cols-2 ">
                    @foreach($sessions as $session)
                    <article
                        class="m-6 bg-white rounded-xl ">

                        <header>
                            <div class="bg-orange-background text-white rounded-t-xl p-6">
                                <h3 class="text-2xl font-semibold">
                                    {{ $session->title }}
                                </h3>

                            </div>
                        </header>

                        <div class="py-6 px-5 space-y-6">

                            <div class="">
                                <h4 class="font-bold text-gray-700"> Speaker : {{ $session->facilitator }}</h4>
                            </div>

                            <div class="text-sm text-gray-500">
                                {!! $session->description !!}
                            </div>

                            <footer class="flex justify-between items-center">
                                <div class="text-sm">
                                    <span class="font-semibold uppercase">{{ $session->time }},</span>
                                    {{ $session->date }}
                                </div>

                                <div>
                                    <form action="{{ route('sessions.register',$session->id) }}" method="POST">
                                        @csrf

                                        @method('PATCH')

                                        <button class="px-3 py-2 text-sm font-semibold text-white rounded-full bg-orange-background hover:bg-orange-500">
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

    <x-notify/>
</x-app-layout>
