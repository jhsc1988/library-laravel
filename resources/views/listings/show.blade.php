<x-layout>
    <div class="mx-96 p-10 ">
        <x-card class="p-10">
            <div class="text-sm text-left">
                <a href="/" class="ext-black "><i class="fa-solid fa-arrow-left"></i> Povratak</a>
            </div>
            <div class="flex flex-col items-center justify-center text-center">
                <h3 class="text-2xl mb-2">{{$listing->title}}</h3>
                <img class="w-48 mr-6 mb-6"
                     src="{{$listing->cover ? asset($listing->cover) : asset('/images/no-image.png')}}"
                     alt=""/>
                <div class="text-sky-500 dark:text-sky-400">
                    {{$listing->author}}
                </div>
                <blockquote>
                    <p class="overflow-ellipsis overflow-hidden text-sm md:text-md lg:text-lg text-justify">{{$listing->annotation}}</p>
                </blockquote>

                <hr/>
                <div class="border-b-4 p-4 border-gray-200 w-full mb-6"></div>
                <div>
                    <div class="p-4 text-zinc-900 dark:text-sky-400">
                        Dostupno:
                        @php
                            if($listing->amount == 0)
                                echo('<span style="color: red;"> 0</span>');
                        else
                            echo($listing->amount);
                        @endphp
                    </div>
                    <div class="text-lg space-y-6">{{$listing->description}}
                        <a href="{{$listing->website}}" target="_blank"
                           class="block bg-black text-white py-2 rounded-xl hover:opacity-80">
                            <i class="fa-solid fa-globe"></i> Posudi</a>
                    </div>
                </div>
            </div>
        </x-card>
    </div>
</x-layout>
