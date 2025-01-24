import defaultTheme from 'tailwindcss/defaultTheme';
<<<<<<< HEAD
import forms from '@tailwindcss/forms';
=======
>>>>>>> e4693646b05a06d721246768fe2b85237c94d6c2

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
<<<<<<< HEAD
        './resources/views/**/*.blade.php',
    ],

=======
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
>>>>>>> e4693646b05a06d721246768fe2b85237c94d6c2
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
<<<<<<< HEAD

    plugins: [forms],
=======
    plugins: [],
>>>>>>> e4693646b05a06d721246768fe2b85237c94d6c2
};
