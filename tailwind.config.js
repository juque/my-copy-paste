import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
              "color-base-100":"var(--color-base-100)",
              "color-base-200":"var(--color-base-200)",
              "color-base-300":"var(--color-base-300)",
              "color-base-400":"var(--color-base-400)",
              "color-base-500":"var(--color-base-500)",
              "color-base-600":"var(--color-base-600)",
            }
        },
    },
    plugins: [],
};
