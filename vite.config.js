import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

// npm install rollup-plugin-less --save-dev (Not built in, install first)
import less from 'rollup-plugin-less';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.less', 
                'resources/js/app.js',
            ],
            refresh: true,
        }),

        less({
            output: path.resolve(__dirname, 'public/css/app.css'),
        }),
    ],
});
