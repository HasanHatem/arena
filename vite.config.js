import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/app.scss',
                'resources/scss/admin/admin.scss',
                'resources/js/app.js',
                'resources/js/admin/admin.js',
            ],
            sass: {
                includePaths: ['node_modules'],
            },
            refresh: true,
        })
    ],
    resolve: {
        alias: {
            '@utils': '/resources/js/utils/',
        },
    },
});

