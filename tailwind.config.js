/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    50: '#B3E5FC',
                    100: '#81D4FA',
                    200: '#4FC3F7',
                    300: '#29B6F6',
                    400: '#03A9F4',
                    500: '#009DCD',
                    600: '#0077B6',
                    700: '#005F9E',
                    800: '#004D8A',
                    900: '#003366',
                },
                tachygraph: {
                    500: '#8B5CF6',
                },
                payroll: {
                    500: '#10B981',
                },
                missions: {
                    500: '#F59E0B',
                },
                pto: {
                    500: '#EC4899',
                },
            },
            fontFamily: {
                sans: ['Inter', 'sans-serif'],
            },
        },
    },
    plugins: [],
};
