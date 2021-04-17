<x-app-layout>
    <x-slot name="title">
        Cart
    </x-slot>

    <div class="flex flex-col gap-4">
        <x-card class="flex-col justify-between p-6">
            <h2 class="text-3xl font-poppins">Cart</h2>
            <div class="">
                @forelse($cart as $cartitem)
                <div class="flex">
                    <div class="flex-grow pr-4">
                        <div class="flex">
                            <div class="flex-grow pr-4">
                                {{ $cartitem["name"] }}
                            </div>
                            <p>{{ $cartitem["price"] }}</p>
                        </div>
                         
                    </div>

                    <form action="/cart/remove/{{ $loop->index }}" method="POST">
                        @csrf
                        <button>
                            <i class="text-red-300 fas fa-trash-alt hover:bg-truegray-700 hover:text-red-400 p-2 rounded"></i>
                        </button>
                    </form>
                </div>
                @empty
                No items
                @endforelse
            </div>

            <div>
                Total: {{ $total }}
            </div>

            <form action="/cart/clear" method="POST">
                @csrf
                <button>
                    Clear
                </button>
            </form>
        </x-card>
    </div>

</x-app-layout>
