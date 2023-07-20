@if(session()->has('message'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="rounded-b-lg fixed top-0 left-1/2 transform-translate-x-1/2 bg-white text-black px-36 py-2" style="font-size: 12px; font-weight: bold; box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;">
        <p>
            {{ session('message') }}
        </p>
    </div>
@endif
