<x-layout>
    <x-card class="p-10 mr-96 ml-96 mx-auto mt-24">
        <div class="text-sm text-left pb-8">
            <a href="/" class="ext-black "><i class="fa-solid fa-arrow-left"></i> Povratak</a>

        </div>
        <header class="text-center">
            <h2 class="text-2xl uppercase font-bold mb-1">Promjena</h2>
        </header>

        <form method="POST" action="/listings/{{$listing->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Naslov</label>
                <label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                           value="{{$listing->title}}"/>
                </label>

                @error('title')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="author" class="inline-block text-lg mb-2">Autor</label>
                <label>
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="author"
                        placeholder="Npr.: Tomić, Ante"
                        value="{{$listing->author}}"
                    />
                </label>

                @error('author')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="publisher" class="inline-block text-lg mb-2">Nakladnik</label>
                <label>
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="publisher"
                        placeholder="Npr.: Zagreb : Hena com, 2022"
                        value="{{$listing->publisher}}"
                    />
                </label>

                @error('publisher')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="language" class="inline-block text-lg mb-2">Jezik</label>
                <label>
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="language"
                        placeholder="Npr.: hrvatski"
                        value="{{$listing->language}}"
                    />
                </label>

                @error('language')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="annotation" class="inline-block text-lg mb-2">Anotacija</label>
                <label>
                    <textarea
                        class="border border-gray-200 rounded p-2 w-full"
                        name="annotation"
                        rows="10"
                        placeholder>{{$listing->annotation}}
                    </textarea>
                </label>

                @error('annotation')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="isbn" class="inline-block text-lg mb-2">ISBN</label>
                <label>
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="isbn"
                        placeholder="Npr.: 978-953-259-426-3"
                        value="{{$listing->isbn}}"
                    />
                </label>

                @error('isbn')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="amount" class="inline-block text-lg mb-2">Količina</label>
                <label>
                    <input
                        type="number"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="amount"
                        placeholder="Npr.: 3"
                        value="{{$listing->amount}}"
                    />
                </label>

                @error('amount')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="cover" class="inline-block text-lg mb-2">Naslovnica</label>
                <input
                    type="file"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="cover"
                />

                <div class="flex justify-center items-center">
                    <img class="w-48 mr-6 mb-6"
                         @php
                             $cover = $listing->cover ? asset($listing->cover) : asset('images/no-image.png');
                         @endphp
                         src="{{ $cover }}" alt="Listing Cover"
                    >
                </div>


                @error('cover')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="flex justify-center items-center">
                <button type="submit"
                        class="relative inline-flex items-center justify-center w-auto px-8 py-2 overflow-hidden font-bold text-red-500 transition-all duration-500 border border-gray-200 rounded-md cursor-pointer group ease bg-gradient-to-b from-white to-gray-50 hover:from-gray-50 hover:to-white active:to-white">
                    <span class="w-full h-0.5 absolute bottom-0 group-active:bg-transparent left-0 bg-gray-100"></span>
                    <span class="h-full w-0.5 absolute bottom-0 group-active:bg-transparent right-0 bg-gray-100"></span>
                    Spremi promjene
                </button>
            </div>
        </form>
    </x-card>
</x-layout>
