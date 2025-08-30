import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/assets/frontend/css/app.css',  'resources/css/assets/frontend/js/script.js'],
            refresh: true,
        }),
        vue(),
    ],
});
