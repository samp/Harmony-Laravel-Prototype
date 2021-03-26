<button {{ $attributes->merge(['type' => 'submit', 'class' => 'px-4 py-2 text-xl w-auto rounded-lg border-2 border-purple-400 bg-gradient-to-tr hover:from-yellow-400 hover:via-pink-500 hover:to-purple-500 hover:text-white hover:border-transparent transition-colors']) }}>
    {{ $slot }}
</button>
