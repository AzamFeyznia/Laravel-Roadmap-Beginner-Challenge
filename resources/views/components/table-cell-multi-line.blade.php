<th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
    {{ $image ?? '' }}
    <div @class(['pl-3' => isset($image)])>
        {{ $slot }}
    </div>
</th>
