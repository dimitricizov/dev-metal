<x-main-layout>
    <x-slot name="navbar">
        <div class="flex items-center justify-between px-4 py-3 sm:p-0">
            <!-- Brand -->
            <a href="#" class="hover:text-indigo-600 text-xl title-font font-medium sm:p-2">{{ config('app.name') }}</a>
            <!-- Button -->
            <div class="sm:hidden">
                <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                              stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>


        <!-- Menu -->
        <div :class="{'block': open, 'hidden': ! open}" class="hidden px-2 pt-2 pb-4 sm:flex sm:p-0 transition duration-150 ease-in-out">
            <a href="#" class="block px-2 py-1 hover:text-indigo-600">Link</a>
            <a href="#" class="mt-1 sm:mt-0 sm:ml-2  block px-2 py-1 hover:text-indigo-600">Link</a>
            <a href="#" class="mt-1 sm:mt-0 sm:ml-2  block px-2 py-1 hover:text-indigo-600">Link</a>
            <a href="#" class="mt-1 sm:mt-0 sm:ml-2  block px-2 py-1 hover:text-indigo-600">Link</a>
        </div>
    </x-slot>
</x-main-layout>
