import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
export default defineConfig({
    build: {
        sourcemap: true,
    },
    plugins: [
        laravel({
            input: [
                'resources/js/jquery.js',
                'resources/js/jquery.magnific-popup.min.js',
                'resources/js/app.js',
                'resources/js/aos.js',
                'resources/js/bootstrap.js',
                'resources/js/bootstrap.min.js',
                'resources/js/main.js',
                'resources/js/owl.carousel.min.js',
                'resources/js/typed.min.js',

                'resources/css/app.css',
                'resources/css/aos.css',
                'resources/css/bootstrap.min.css',
                'resources/css/icofont.min.css',
                'resources/css/magnific-popup.min.css',
                'resources/css/owl.carousel.min.css',
                'resources/css/responsive.css',
                'resources/css/style.css'

            ],
            refresh: true,
        }),
    ],
});
