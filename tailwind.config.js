import defaultTheme from 'tailwindcss/defaultTheme';


/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    
    presets: [
        require('./vendor/tallstackui/tallstackui/tailwind.config.js') 
    ],
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './vendor/tallstackui/tallstackui/src/**/*.php',
        "./node_modules/flowbite/**/*.js"
    ],

    theme: {
        extend: {
            display: ['dark'],
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'primary': {
                    DEFAULT: '#117739', 
                    '50': '#fff',   
                    '100': '#C8E6C9',   // Light green, useful for hover states or highlights.
                    '200': '#A5D6A7',   // Light to medium green, good for less emphatic elements.
                    '300': '#60b848',   // Bright green, stands out more.
                    '400': '#66BB6A',   // Strong green, good for buttons or icons.
                    '500': '#117739',   // Standard green, suitable for main elements.
                    '600': '#057a55',   // Medium dark green, good for active states or important text.
                    '700': '#388E3C',   // Darker green, excellent for headings or important information.
                    '800': '#2E7D32',   // Very dark green, ideal for text on light backgrounds.
                    '900': '#1B5E20',   // Very dark green, ideal for text on dark backgrounds.
                }
            },
            screens: {
                'sm': '640px',
                'md': '768px',
                'lg': '1024px',
              },
              gridTemplateColumns: {
                // Simple 16 column grid
                '16': 'repeat(16, minmax(0, 1fr))',
              }
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('flowbite/plugin')
    ],
};
