<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('categories.store') }}">
                        @csrf
                        <div class="block mt-4">
                            <x-input-label for="name" :value="__('Name')">Name</x-input-label>
                            <x-text-input
                                type="text"
                                name="name"
                                id="name"
                                class="block mt-1 w-full"
                                :value="old('name')"
                                required
                                autofocus />

                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <div class="block mt-4">
                            <x-primary-button>
                                {{ __('Create') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
