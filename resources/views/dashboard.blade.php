<x-app-layout>
    <div class="py-12">
        <header>
            <div class="max-w-4xl mx-auto text-center lg:mt-20">
                <div class="max-w-xl mx-auto">
                    <h1 class="text-4xl font-bold text-sky-500">
                        Events
                    </h1>
                </div>
            </div>
        </header>

        <main class="mx-auto mt-10 max-w-8xl lg:mt-20">

            <div class="flex flex-wrap justify-center">
                <a href="{{ route('workshops') }}">
                    <div class="flex justify-center p-6 rounded-md h-280 w-700 lg:hover:-translate-y-2">
                        <div class="max-h-full w-350 rounded-l-xl bg-blue-background">
                            <img src="{{ asset('images/vector_workshop.png') }}" alt="" class="w-full h-full rounded-l-xl">
                        </div>
                        <div class="flex items-center justify-center p-8 text-2xl font-bold text-white rounded-r-xl bg-blue-background">
                            <p>Workshop</p>
                        </div>
                    </div>
                </a>

                <!--Session Cards-->
                <a href="session.html"><div class="flex p-6 rounded-md h-280 w-700 lg:hover:-translate-y-2">
                    <div class="max-h-full w-350 rounded-l-xl bg-orange-background">
                        <img src="{{ asset('images/vector_session.png') }}" alt="" class="h-full w-full rounded-l-2xl">
                    </div>
                    <div class="rounded-r-xl flex justify-center items-center text-2xl px-10 text-white font-bold bg-orange-background" >
                        <p>Sessions</p>
                    </div>
                </div></a>

            </div>
        </main>

    </div>
</x-app-layout>
