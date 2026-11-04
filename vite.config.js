import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { bunny } from 'laravel-vite-plugin/fonts';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js',
                    'resources/images/favicon.ico', 'resources/libs/bootstrap/css/bootstrap.min.css',
                    'resources/libs/bootstrap-icons/bootstrap-icons.css', 'resources/libs/apexcharts/apexcharts.css',
                    'resources/libs/flatpickr/flatpickr.min.css', 'resources/css/main.css',
                    'resources/libs/bootstrap/js/bootstrap.bundle.min.js', 'resources/libs/apexcharts/apexcharts.min.js',
                    'resources/libs/flatpickr/flatpickr.min.js', 'resources/js/dashboard.js',
                    'resources/js/jquery4.js'],
            refresh: true,
            fonts: [
                bunny('Instrument Sans', {
                    weights: [400, 500, 600],
                }),
            ],
        }),
        tailwindcss(),
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
