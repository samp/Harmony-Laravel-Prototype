const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');
const plugin = require('tailwindcss/plugin')

module.exports = {
    darkMode: 'media',

    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        fontFamily: {
            'poppins': ['Poppins', 'sans-serif'],
            'opensans': ['Open Sans', 'sans-serif'],
        },
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            lineHeight: {
                '12': '3rem',
                '14': '4rem',
            },
            colors: {
                orange: colors.orange,
                lime: colors.lime,
                warmgray: colors.warmGray,
                truegray: colors.trueGray,
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/aspect-ratio')],
};
