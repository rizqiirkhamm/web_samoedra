import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import plugin from 'tailwindcss/plugin';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './assets/js/**/*.js', // Menambahkan path untuk JS agar Tailwind bisa membaca kelas di dalam JS
        './**/*.html', // Menambahkan path HTML jika ada
    ],

    darkMode: 'class', // Menambahkan pengaturan dark mode

    theme: {
        extend: {
            // Menambahkan font dari template
            fontFamily: {
                urbanist: ['Urbanist', 'sans-serif'],
                poppins: ['Poppins', 'sans-serif'],
            },
            // Menambahkan warna dari template
            colors: {
                darkblack: {
                    300: '#747681',
                    400: '#2A313C',
                    500: '#23262B',
                    600: '#1D1E24',
                    700: '#151515',
                },
                success: {
                    50: '#D9FBE6',
                    100: '#B7FFD1',
                    200: '#4ADE80',
                    300: '#22C55E',
                    400: '#16A34A',
                },
                // ... tambahkan warna lainnya dari template
                bgray: {
                    50: '#FAFAFA',
                    100: '#F7FAFC',
                    200: '#EDF2F7',
                    300: '#E2E8F0',
                    400: '#CBD5E0',
                    500: '#A0AEC0',
                    600: '#718096',
                    700: '#4A5568',
                    800: '#2D3748',
                    900: '#1A202C',
                },
                // Tambahkan lebih banyak warna sesuai template...
            },
            // Menambahkan custom width, height, dan font size
            width: {
                66: '66%',
                88: '88%',
                70: '70%',
            },
            fontSize: {
                xs: '12px',
                sm: '14px',
                base: '16px',
                lg: '18px',
                xl: '20px',
                '2xl': '24px',
                '3xl': '28px',
                '4xl': '32px',
                '5xl': '48px',
            },
            // Menambahkan lineHeight dan letterSpacing
            lineHeight: {
                'extra-loose': '44.8px',
                'big-loose': '140%',
                130: '130%',
                150: '150%',
                160: '160%',
                175: '175%',
                180: '180%',
                220: '200%',
                220: '220%',
            },
            letterSpacing: {
                tight: '-0.96px',
                40: '-0.4px',
            },
            borderRadius: {
                20: '20px',
            },
            // Menambahkan background images dari template
            backgroundImage: {
                'bgc-dark': "url('/assets/images/background/comming-soon-dark.svg')",
                'bgc-light': "url('/assets/images/background/coming-soon-bg.svg')",
                'notfound-dark': "url('/assets/images/background/404-dark.jpg')",
                'notfound-light': "url('/assets/images/background/404-bg.png')",
            },
        },
    },

    plugins: [
        forms,
        plugin(function ({ addVariant }) {
            addVariant('current', '&.active');
        }),
    ],
};
