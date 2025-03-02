import defaultTheme from 'tailwindcss/defaultTheme';
const forms = require('@tailwindcss/forms');

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    daisyui: {
        themes: ['light']
    },

    plugins: [forms,require('daisyui'),require('tailwind-scrollbar-hide')],
};
