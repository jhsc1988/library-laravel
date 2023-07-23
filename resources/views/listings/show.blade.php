<x-layout>
        <x-card class="p-10 max-w-2xl mx-auto mt-24">
            <div class="text-sm text-left">
                <a href="/" class="ext-black "><i class="fa-solid fa-arrow-left"></i> Povratak</a>
            </div>
            <div class="flex flex-col items-center justify-center text-center">
                <h3 class="text-2xl mb-2">{{$listing->title}}</h3>
                <div class="border-b p-4 border-gray-200 w-full mb-6"></div>
                <img class="w-48 mr-6 mb-6"
                     src="{{$listing->cover ? asset($listing->cover) : asset('/images/no-image.png')}}"
                     alt=""/>
                <div class="border-b p-4 border-gray-200 w-full mb-6"></div>
                <div class="text-sky-500 dark:text-sky-400">
                    {{$listing->author}}
                </div>
                <div class="border-b p-4 border-gray-200 w-full mb-6"></div>
                <blockquote>
                    <p class="overflow-ellipsis overflow-hidden text-sm md:text-md lg:text-lg text-justify">{{$listing->annotation}}</p>
                </blockquote>
                <hr/>
                <div class="border-b p-4 border-gray-200 w-full mb-6"></div>
                <div>
                    <div>
                        <b>Nakladnik:</b> {{$listing->publisher}}
                    </div>
                    <div>
                        <b>Jezik:</b> {{$listing->language}}
                    </div>
                    <div>
                        <b>ISBN:</b> {{$listing->isbn}}
                    </div>
                    <div class="border-b p-4 border-gray-200 w-full mb-6"></div>
                    <div class="text-zinc-900 dark:text-sky-400">
                        <b>Dostupno:</b>
                        @php
                            if($availableAmount === 0)
                                echo('<span style="color: red;"> 0</span>');
                        else
                            echo($availableAmount);
                        @endphp
                    </div>
                    <div class="border-b p-4 border-gray-200 w-full mb-6"></div>
                    <div class="flex justify-center items-center">
                        <form method="POST" action="{{ route('reserve', ['listing' => $listing->id]) }}">
                            @csrf
                            @if ($listing->isReservedByCurrentUser())
                                <button type="button"
                                        class="relative inline-flex items-center justify-center w-auto px-8 py-2 overflow-hidden font-bold text-red-500 transition-all duration-500 border border-gray-200 rounded-md group ease bg-gradient-to-b from-white to-gray-50 hover:from-gray-50 hover:to-white active:to-white cursor-not-allowed opacity-50 pointer-events-none">
                                    <span class="w-full h-0.5 absolute bottom-0 group-active:bg-transparent left-0 bg-gray-100"></span>
                                    <span class="h-full w-0.5 absolute bottom-0 group-active:bg-transparent right-0 bg-gray-100"></span>
                                    <i class="fa-solid fa-check"></i> &nbsp; Rezervirano
                                </button>
                            @else
                                <button type="submit"
                                        class="relative inline-flex items-center justify-center w-auto px-8 py-2 overflow-hidden font-bold text-red-500 transition-all duration-500 border border-gray-200 rounded-md group ease bg-gradient-to-b from-white to-gray-50 hover:from-gray-50 hover:to-white active:to-white @if ($availableAmount === 0) cursor-not-allowed opacity-50 pointer-events-none @endif">
                                    <span class="w-full h-0.5 absolute bottom-0 group-active:bg-transparent left-0 bg-gray-100"></span>
                                    <span class="h-full w-0.5 absolute bottom-0 group-active:bg-transparent right-0 bg-gray-100"></span>
                                    <i class="fa-solid fa-book-open-reader"></i> &nbsp; Posudi
                                </button>
                            @endif
                        </form>

                        <?php if (auth()->check() && auth()->user()->isAdmin()): ?>
                        <form method="GET" action="/listings/<?php echo $listing->id; ?>/edit">
                                <?php echo csrf_field(); ?>
                            &nbsp &nbsp &nbsp
                            <button type="submit"
                                    class="relative inline-flex items-center justify-center w-auto px-8 py-2 overflow-hidden font-bold text-red-500 transition-all duration-500 border border-gray-200 rounded-md cursor-pointer group ease bg-gradient-to-b from-white to-gray-50 hover:from-gray-50 hover:to-white active:to-white">
                                <span
                                    class="w-full h-0.5 absolute bottom-0 group-active:bg-transparent left-0 bg-gray-100"></span>
                                <span
                                    class="h-full w-0.5 absolute bottom-0 group-active:bg-transparent right-0 bg-gray-100"></span>
                                <i class="fa-solid fa-pen-to-square"></i> &nbsp; Promijeni
                            </button>
                        </form>
                        <form method="POST" action="/listings/<?php echo $listing->id; ?>">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('delete'); ?>
                            &nbsp &nbsp &nbsp
                            <button type="submit"
                                    class="relative inline-flex items-center justify-center w-auto px-8 py-2 overflow-hidden font-bold text-red-500 transition-all duration-500 border border-gray-200 rounded-md cursor-pointer group ease bg-gradient-to-b from-white to-gray-50 hover:from-gray-50 hover:to-white active:to-white">
                                <span
                                    class="w-full h-0.5 absolute bottom-0 group-active:bg-transparent left-0 bg-gray-100"></span>
                                <span
                                    class="h-full w-0.5 absolute bottom-0 group-active:bg-transparent right-0 bg-gray-100"></span>
                                <i class="fa-solid fa-trash"></i> &nbsp; Briši
                            </button>
                        </form>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </x-card>
</x-layout>
