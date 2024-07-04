import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/challenges/challenge_1.css',
                'resources/css/challenges/challenge_2.css',
                'resources/js/challenges/challenge_2.js',
            ],
            refresh: true,
        }),
    ],
});
