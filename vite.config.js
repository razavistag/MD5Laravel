import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    server: {
        host: '172.17.3.158',
        hmr:{
            overlay: true
        }
   },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    resolve:{
        alias:{
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            '~mdb-ui-kit': path.resolve(__dirname, 'node_modules/mdb-ui-kit'),
        }
    },
   
});
