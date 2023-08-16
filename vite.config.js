import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        hmr: {
            host: "gp4.ddev.site",
            protocol: "wss",
        },
    },
    resolve: {
        alias: {
            '@fonts': '/resources/css/typography/fonts',
        },
    },
});
