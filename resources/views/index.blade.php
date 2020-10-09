<x-main-layout>
    <x-slot name="navbar">
        <div x-data="{ open: false }" class="container mx-auto sm:flex sm:items-center sm:justify-between sm:px-4 sm:py-3">
            <div class="flex items-center justify-between px-4 py-3 sm:p-0">
                <a href="#">
                    <img class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/workflow-mark-on-white.svg" alt="Logo">
                </a>
                <div class="sm:hidden">
                    <button @click="open = ! open"  type="button" class="block text-gray-500 hover:text-gray-600 focus:outline-none">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
            <ul :class="{'block': open, 'hidden': ! open}" class="px-2 pt-2 pb-4 sm:flex sm:pb-2">
                <li><a href="#" class="px-2 py-1 font-medium text-indigo-600 hover:text-indigo-900">Link</a></li>
                <li><a href="#" class="px-2 py-1 font-medium text-indigo-600 hover:text-indigo-900">Link</a></li>
                <li><a href="#" class="px-2 py-1 font-medium text-indigo-600 hover:text-indigo-900">Link</a></li>
            </ul>
        </div>
    </x-slot>
</x-main-layout>
