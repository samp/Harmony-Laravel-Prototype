const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');
const plugin = require('tailwindcss/plugin')

module.exports = {
    darkMode: 'media',

    content: [
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
            screens: {
                'sm': '680px',
            },
            colors: {
                orange: colors.orange,
                lime: colors.lime,
                warmgray: colors.stone,
                truegray: colors.neutral,
                purple: colors.violet,
            },
            minWidth: {
                '0': '0',
                '1/4': '25%',
                '1/2': '50%',
                '3/4': '75%',
                'full': '100%',
            },
            maxWidth: {
                '1/4': '25%',
                '1/2': '50%',
                '3/4': '75%',
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/aspect-ratio')],
};
