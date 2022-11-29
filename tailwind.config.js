const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
        colors: {
            'blue': '#002c8f',
            'matte-blue': '#24458f',
            'red': '#e92525',
            'black': '#000000',
            'white': '#ffffff',
            'silver': '#f5f5f5',
            'gray': '#484848',
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
