<x-app-layout>
    <div class="py-12">
        <section class="px-6 py-8">

            <header>
                <div class="max-w-4xl mx-auto text-center lg:mt-20">
                    <div class="max-w-xl mx-auto">
                        <h1 class="text-4xl font-bold">
                            Workshops
                        </h1>
                        <p class="mt-8 text-sm text-gray-500">
                            Please select the workshop you want to take part in
                        </p>
                        <p class="text-xs mt-4 text-red-500">
                            [Note : You can only participate in one]
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

                            <div class="text-sm text-gray-500 text-left">
                                {!! $workshop->description !!}
                            </div>

                            <footer class="flex flex-col justify-left space-y-2">
                                <div class="flex flex-col text-gray-700">
                                    <div class="text-sm ">
                                        Seats : 
                                        @if($workshop->seats == $workshop->users->count())
                                        <span class="bg-green-200 rounded-full px-2 text-green-600 font-semibold">full</span>
                                        @else
                                        {{ $workshop->seats }}
                                        @endif
                                    </div>

                                    <div>
                                        <span>Duration : {{ $workshop->duration }} Day</span>
                                    </div>
                                </div>

                                <div class="lg:flex justify-between">

                                    <div class="text-gray-500 ">
                                        <span>{{ $workshop->date }}</span>
                                        
                                        <div class="flex items-center bg-gray-200 px-2 py-1 rounded-full lg:max-w-full max-w-fit">
                                            <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                            </svg>

                                            <span class="text-xs font-semibold ml-2">{{ $workshop->time }} Onwards</span>
                                        </div>
                                    </div>

                                    <div class="mt-4 text-center">
                                        @if(auth()->user()->workshop?->id === $workshop->id)
                                        <button class="px-6 py-3 text-sm font-bold text-white rounded-full bg-blue-background ">
                                            Registered
                                        </button>
                                        @else

                                        <form action="{{ route('workshops.register',$workshop->id) }}" method="POST">
                                            @csrf

                                            @method('PATCH')

                                            <x-button.blue>Register</x-button.blue>
                                        </form>

                                        @endif

                                    </div>

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
