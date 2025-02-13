import { defineConfig } from 'vite';
import tailwindcss from '@tailwindcss/vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    tailwindcss(),
    laravel([
      'resources/css/app.css',
      'resources/js/app.js',
  ]),
  ],
})