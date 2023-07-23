<x-layout>
    <div class="mx-96 p-10 mt-16">
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
                            if($listing->amount == 0)
                                echo('<span style="color: red;"> 0</span>');
                        else
                            echo($listing->amount);
                        @endphp
                    </div>
                    <div class="border-b p-4 border-gray-200 w-full mb-6"></div>
                    <div class="flex justify-center items-center">
                        <button type="submit"
                                class="relative inline-flex items-center justify-center w-auto px-8 py-2 overflow-hidden font-bold text-red-500 transition-all duration-500 border border-gray-200 rounded-md cursor-pointer group ease bg-gradient-to-b from-white to-gray-50 hover:from-gray-50 hover:to-white active:to-white">
                            <span
                                class="w-full h-0.5 absolute bottom-0 group-active:bg-transparent left-0 bg-gray-100"></span>
                            <span
                                class="h-full w-0.5 absolute bottom-0 group-active:bg-transparent right-0 bg-gray-100"></span>
                            <i class="fa-solid fa-book-open-reader"></i> &nbsp Posudi
                        </button>

                        <?php if (auth()->check() && auth()->user()->isAdmin()): ?>
                        &nbsp; &nbsp; &nbsp;

                        <form method="GET" action="/listings/<?php echo $listing->id; ?>/edit">
                                <?php echo csrf_field(); ?>
                            <button type="submit"
                                    class="relative inline-flex items-center justify-center w-auto px-8 py-2 overflow-hidden font-bold text-red-500 transition-all duration-500 border border-gray-200 rounded-md cursor-pointer group ease bg-gradient-to-b from-white to-gray-50 hover:from-gray-50 hover:to-white active:to-white">
                                <span
                                    class="w-full h-0.5 absolute bottom-0 group-active:bg-transparent left-0 bg-gray-100"></span>
                                <span
                                    class="h-full w-0.5 absolute bottom-0 group-active:bg-transparent right-0 bg-gray-100"></span>
                                <i class="fa-solid fa-pen-to-square"></i> &nbsp; Promijeni
                            </button>
                        </form>

                        &nbsp; &nbsp; &nbsp;

                        <form method="POST" action="/listings/<?php echo $listing->id; ?>">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('delete'); ?>
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
    </div>
</x-layout>
