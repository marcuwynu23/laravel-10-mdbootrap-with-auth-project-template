import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/*.css",
                "resources/js/*.js",
                "resources/vendor/**/*.{css,js}",
            ],
            refresh: true,
        }),
    ],
});
