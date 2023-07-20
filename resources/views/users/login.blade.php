<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-16">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Prijava
            </h2>
        </header>

        <form method="post" action="/users/authenticate">
            @csrf


            <div class="mb-6">
                <label for="email" class="inline-block">Email</label>
                <label>
                    <input
                        type="email"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="email"
                        value="{{old('email')}}"
                    />
                </label>

                @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="password"
                    class="inline-block">Lozinka
                </label>
                <label>
                    <input
                        type="password"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="password"
                        value="{{old('password')}}"
                    />
                </label>

                @error('password')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <div class="flex justify-center items-center">
                    <button type="submit" class="relative inline-flex items-center justify-center w-auto px-8 py-2 overflow-hidden font-bold text-red-500 transition-all duration-500 border border-gray-200 rounded-md cursor-pointer group ease bg-gradient-to-b from-white to-gray-50 hover:from-gray-50 hover:to-white active:to-white">
                        <span class="w-full h-0.5 absolute bottom-0 group-active:bg-transparent left-0 bg-gray-100"></span>
                        <span class="h-full w-0.5 absolute bottom-0 group-active:bg-transparent right-0 bg-gray-100"></span>
                        Prijava
                    </button>
                </div>
            </div>

            <div class="text-sm  nav">
                <p>
                    Nemaš račun?
                    <a href="/register" style="padding: 0!important">Registracija</a>
                </p>
            </div>
        </form>
    </x-card>
</x-layout>
