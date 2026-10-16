/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                'mh-primary': '#0F0F0F',
                'mh-secondary': '#1A1A1A',
                'mh-accent-gold': '#C69C6D',
                'mh-coffee-brown': '#5B3A29',
                'mh-cream': '#F7F2EA',
                'mh-gold-hover': '#e2b482',
                'mh-text-muted': '#9A9A9A',
            },
            fontFamily: {
                sans: ['Poppins', 'ui-sans-serif', 'system-ui', 'sans-serif'],
                heading: ['Playfair Display', 'serif'],
            },
        },
    },
    plugins: [],
};
