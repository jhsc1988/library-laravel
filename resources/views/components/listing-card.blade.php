<x-card>
    <figure class="md:flex rounded-xl p-8 md:p-0">
        <img class="w-1/6 md:w-48 md:h-auto md:rounded-none rounded-full mx-auto" src="{{$listing->cover ? asset($listing->cover) : asset('/images/no-image.png')}}" alt="">
        <div class="pt-6 md:p-8 text-center md:text-left space-y-4 flex-1">
            <figcaption class="font-medium">
                <div class="text-sky-500 dark:text-sky-400">
                    {{$listing->author}}
                </div>
                <div class="text-slate-700 dark:text-slate-500">
                    <h3 class="text-lg md:text-xl lg:text-2xl">
                        <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
                    </h3>
                </div>
            </figcaption>
            <blockquote>
                <p class="overflow-ellipsis overflow-hidden text-sm md:text-md lg:text-lg line-clamp-3">{{$listing->annotation}}</p>
            </blockquote>
        </div>
    </figure>
</x-card>
