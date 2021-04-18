<x-app-layout>
    <x-slot name="title">
        Cart
    </x-slot>

    <div class="flex flex-col gap-4">
        <x-card class="flex-col justify-between p-6">
            <h2 class="text-2xl font-poppins mb-2 lg:w-screen">Cart</h2>
            <div class="mb-4">
                @forelse($cart as $key => $cartitem)
                    <div class="flex">
                        <div class="flex-grow pr-4">
                            <div class="flex mt-1">
                                <img src="{{ '../storage/' . $cartitem['image'] }}" class="w-10 mr-2 rounded">
                                <div class="flex-grow pr-4 pt-2">
                                    {{ $cartitem['name'] }}
                                </div>
                                <p class="pt-2">{{ formatmoney($cartitem['price']) }}</p>
                            </div>
                        </div>

                        <form action="/cart/remove/{{ $key }}" method="POST" class=" pt-2">
                            @csrf
                            @method("DELETE")
                            <button>
                                <i
                                    class="text-red-300 fas fa-trash-alt hover:bg-truegray-700 hover:text-red-400 p-2 mb-1 rounded"></i>
                            </button>
                        </form>
                    </div>

                    @if(!$loop->last)
                        <hr class="mt-1 dark:border-truegray-700">
                    @endif
                @empty
                    <p>There are no items in your cart</p>
                @endforelse
            </div>

            <div class="my-4 text-xl text-right">
                Total: {{ formatmoney($total) }}
            </div>
            <div class="flex flex-row">
                <form action="/cart/clear" method="POST">
                    @csrf
                    @method("DELETE")
                    <x-button>
                        {{ 'Clear' }}
                    </x-button>
                </form>
                <div class="flex-grow"></div>
                <x-button>
                    {{ 'Checkout' }}
                </x-button>
            </div>
        </x-card>
    </div>

</x-app-layout>
