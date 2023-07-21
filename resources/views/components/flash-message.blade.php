@if(session()->has('message'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="rounded-lg fixed top-2 left-1/2 transform-translate-x-1/2 px-36 py-2" style="background:#f7e9e9; font-size: 12px; font-weight: bold; box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;">
        <p>
            <span style="color: rgba(239, 68, 68, 1);">{{ session('message') }}</span>
        </p>
    </div>
@endif
