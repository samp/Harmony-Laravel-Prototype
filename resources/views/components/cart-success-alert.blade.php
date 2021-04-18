<div class="opacity-90 fixed bottom-0 right-0 m-6 bg-white dark:bg-truegray-600 border-l-4 border-purple-500 rounded-md text-purple-900 dark:text-purple-100 px-4 py-3 shadow max-w-sm transition-all duration-200"
    role="alert">
    <div class="flex">
        <div>
            <p class="font-bold">Cart</p>
            <div class="flex">
                <picture class="w-16 h-10">
                    <source srcset="{{ '../storage/' . Session::get('cartsuccessimage') }}">
                    <img class="w-16" src="{{ '../storage/' . Session::get('cartsuccessimage') }}" alt="Cart item image">
                </picture>
                <p class="text-sm ml-2">{{ Session::get('cartsuccess') }}</p>
            </div>
            <div class="flex">
                <div class="flex-grow"></div>
                <a href="{{ route('cart') }}" class="text-xs font-bold underline">View Cart</a>
            </div>
        </div>
    </div>
</div>
