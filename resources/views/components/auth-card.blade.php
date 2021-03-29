<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-truegray-900">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 p-4 bg-white dark:bg-truegray-800 dark:text-white shadow overflow-hidden rounded-xl">
        {{ $slot }}
    </div>
</div>
