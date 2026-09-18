import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/home.css',
                'resources/css/about.css',
                'resources/css/products.css',
                'resources/css/product-detail.css',
                'resources/css/cart.css',
                'resources/js/app.js',
                'resources/js/home.js',
                'resources/js/about.js',
                'resources/js/product-detail.js'
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        cors: true,
    },
});
