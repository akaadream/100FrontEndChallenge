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
                'resources/css/challenges/challenge_3.css',
                'resources/css/challenges/challenge_4.css',
                'resources/css/challenges/challenge_5.css',
                'resources/css/challenges/challenge_6.css',
                'resources/css/challenges/challenge_9.css',
                'resources/js/challenges/challenge_2.js',
                'resources/js/challenges/challenge_4.js',
                'resources/js/challenges/challenge_9.js',
            ],
            refresh: true,
        }),
    ],
});
