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
                "main-bg": "#031716",
                "secondary-bg": "#032F30",
                "accent-1": "#0A7075",
                "accent-2": "#274D60",
                "text-primary": "#0C969C",
                "text-secondary": "#6B8D8E",
                "text-white": "#FFFFFF",
            },
        },
    },
    plugins: [],
};
