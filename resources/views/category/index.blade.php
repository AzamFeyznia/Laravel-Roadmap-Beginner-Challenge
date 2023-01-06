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

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <div class="flex items-center justify-between pb-4 bg-white dark:bg-gray-900">
                            <div class="block mt-4">
                                <!-- Create button -->
                                <x-primary-button type="button" class="ml-3">
                                    <div>
                                        <span class="sr-only">{{ __('Create')}}</span>
                                        <a href="{{ route('categories.create') }}">Create</a>
                                    </div>
                                </x-primary-button>
                            </div>
                        </div>
                        <x-table>
                            <x-slot name="header">
                                <x-table-header-column>{{ __('Name') }}</x-table-header-column>
                                <x-table-header-column>{{ __('Created') }}</x-table-header-column>
                                <x-table-header-column>{{ __('Updated') }}</x-table-header-column>
                                <x-table-header-column>{{ __('Actions') }}</x-table-header-column>
                            </x-slot>

                            @forelse($categories as $category)
                                <x-table-row>
                                    <x-table-cell-multi-line>
                                        <x-table-cell-bold-text>{{ $category->name }}</x-table-cell-bold-text>
                                    </x-table-cell-multi-line>
                                    <x-table-cell>{{ $category->created_at }}</x-table-cell>
                                    <x-table-cell>{{ $category->updated_at }}</x-table-cell>
                                    <x-table-cell-actions>
                                        <x-table-cell-action-edit :url="route('categories.show', $category->id)" title="Details">
                                        </x-table-cell-action-edit>

                                        <x-table-cell-action-edit :url="route('categories.edit', $category->id)" title="Edit">
                                        </x-table-cell-action-edit>

                                        <x-table-cell-action-delete :url="route('categories.destroy', $category->id)">
                                        </x-table-cell-action-delete>
                                    </x-table-cell-actions>
                                </x-table-row>
                            @empty
                                <x-table-row>
                                    <x-table-cell colspan="4" class="text-center">
                                        <x-table-cell-bold-text>{{ __('No categories found') }}</x-table-cell-bold-text>
                                    </x-table-cell>
                                </x-table-row>
                            @endforelse

                        </x-table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
