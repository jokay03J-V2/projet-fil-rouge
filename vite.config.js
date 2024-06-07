import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/home_menu.js',
                'resources/js/API_logique.js',
            ],
            refresh: true,
        }),
    ],
});
