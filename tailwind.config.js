import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

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
                title: ['Poetsen One', ...defaultTheme.fontFamily.sans],
                sans: ["Kanit", ...defaultTheme.fontFamily.sans]
            },
            colors: {
                'primary': "#6ACBEE",
                'secondary': "#4889A1",
                'tertiary': "#F2BFAC",
                'tonal': "#2BA0CB",
                'white': "#FFFFFF",
            },

          
        },
    },


    plugins: [forms],
};
