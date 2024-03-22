import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        // './node_modules/flowbite/**/*.js',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors:{
                "header_btn":"rgb(255,0,0)",
                "main_blue":"#0832C9",
                "main_bg":"#BEFFFA",
                "interview_orange":"#FFDCB4",
                "interview_blue":"#1BC6FC",
                "interview_gray":"#626262",
                "dpt_bg":"#FE9820",

            },
            spacing: {
                "main_x":"460px",
            },
            width:{
                "employee_width":"300px"
            },
            height:{
                "employee_height":"300px",
                "modalYoutube":"360px",
            }
        },
    },

    plugins: [forms],

    // corePlugins: {
    //     preflight: false,
    // }
};
