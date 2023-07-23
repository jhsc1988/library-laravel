<form action="/">
    <div class="z-10 relative m-4 rounded-lg mt-20 mr-80 ml-80 b-shadow">
        <div class="absolute top-4 left-3">
            <i class="fa fa-search text-gray-400 hover:text-gray-500"></i>
        </div>
        <label>
            <input
                type="text"
                name="search"
                class="h-14 w-full pl-10 pr-20 rounded-lg focus:shadow focus:outline-none"
                placeholder="Pretraži knjige..."
            />
        </label>
        <div class="absolute top-2 right-2">
            <button type="submit"
                    class="relative inline-flex items-center justify-center w-auto px-2 py-2 overflow-hidden font-bold text-red-500 transition-all duration-500 border border-gray-200 rounded-md cursor-pointer group ease bg-gradient-to-b from-white to-gray-50 hover:from-gray-50 hover:to-white active:to-white">
                                <span
                                    class="w-full h-0.5 absolute bottom-0 group-active:bg-transparent left-0 bg-gray-100"></span>
                <span
                    class="h-full w-0.5 absolute bottom-0 group-active:bg-transparent right-0 bg-gray-100"></span>
                <i class="fa-solid fa-magnifying-glass"></i> &nbsp; Pretraga
            </button>
        </div>
    </div>
</form>
