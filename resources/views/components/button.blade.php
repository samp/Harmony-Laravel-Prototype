<button {{ $attributes->merge(['type' => 'submit', 'class' => 'font-poppins ml-auto px-4 py-2 text-xl w-auto rounded-lg text-white bg-purple-500 dark:bg-purple-600 border-purple-400 bg-gradient-to-tr hover:bg-pink-500 hover:text-white hover:border-transparent transition-colors duration-200']) }}>
    {{ $slot }}
</button>
