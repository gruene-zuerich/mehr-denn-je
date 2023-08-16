/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            aspectRatio: {
                "16/9": "16 / 9",
            },
            colors: {
                "magenta": "#EC008C",
                "green": "#84B414"
            }
        },
    },
    plugins: [],
}
