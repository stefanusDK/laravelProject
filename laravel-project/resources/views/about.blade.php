<div>
    <h1 class="text-2xl font-bold text-gray-900 dark:text-white border-b-2 border-gray-300 dark:border-gray-600 pb-2">
        {{ $title }}
    </h1>
    <p class="mt-2 text-gray-700 dark:text-gray-300">{{ $subtitle }}</p>

    <h2 class="mt-8 text-xl font-semibold text-gray-900 dark:text-white">{{ $greeting }}</h2>
    <p class="text-gray-700 dark:text-gray-300">{{ $description }}</p>

    <table class="mt-3 w-full max-w-xl text-left text-gray-700 dark:text-gray-300">
        @foreach ($profile as $label => $value)
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <td class="py-2 pr-4 font-bold w-36">{{ $label }}</td>
                <td>{{ $value }}</td>
            </tr>
        @endforeach
    </table>
</div>
