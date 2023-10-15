import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        host: '127.0.0.1',
    },
    plugins: [
        laravel({
            input: [
                'resources/css/navbar.css',
                'resources/css/homepage.css',
                'resources/css/footer.css',
                'resources/css/brandCategory.css',
                'resources/css/product.css',
                'resources/css/filament.css',
            ],
            refresh: true,
        }),
    ],
});
