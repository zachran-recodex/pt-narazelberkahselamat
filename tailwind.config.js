import defaultTheme from 'tailwindcss/defaultTheme';
const plugin = require('tailwindcss/plugin');

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
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'nbs': {
                    '50': '#f0f7fe',
                    '100': '#ddecfc',
                    '200': '#c2dffb',
                    '300': '#98ccf8',
                    '400': '#67b1f3',
                    '500': '#398bed',
                    '600': '#2e74e2',
                    '700': '#255fd0',
                    '800': '#244da9',
                    '900': '#234385',
                    '950': '#1a2a51',
                },
            },
        },
    },
    plugins: [
        plugin(function({ addUtilities }) {
            addUtilities({
                '.py-main': {
                        paddingTop: '2rem',
                        paddingBottom: '2rem',
                    '@screen sm': {
                        paddingTop: '3rem',
                        paddingBottom: '3rem',
                    },
                    '@screen lg': {
                        paddingTop: '4rem',
                        paddingBottom: '4rem',
                    }
                },
                '.container-main': {
                    '@apply container mx-auto px-4 sm:px-6 lg:px-8': {},
                },
            });
        })
    ],
};
