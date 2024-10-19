### Add Laravel Breeze

```bash
    composer require laravel/breeze --dev
```

### Install Laravel Breeze

```bash
    php artisan breeze:install
```

### Run Laravel Migrations

```bash
    php artisan migrate
```

### Install Livewire

```bash
    composer require livewire/livewire
```

### Publish Livewire Config file

```bash
    php artisan livewire:publish --config
```

### Install The Package

```bash
    npm install --save-dev @defstudio/vite-livewire-plugin
```

### Add the new Vite plugin to your vite.config.js file

```bash
    import livewire from '@defstudio/vite-livewire-plugin';
```

## Inside plugins Add the new Livewire plugin to your vite.config.js file

```bash
    livewire({  // Here we add it to the plugins
        refresh: ['resources/css/app.css'],
    }),
```

### Install NPM

```bash
    npm install
```

### To start development server

```bash
    npm run dev
```


## Install daisyUI as a Node package:

```bash
    npm i -D daisyui@latest
```


## To hide scroller bar for story:

```bash
    npm i tailwind-scrollbar-hide
```

### Goto tailwind.config.js and in plugins

```bash
    plugins: [forms,require('daisyui'),require('tailwind-scrollbar-hide')
```


### Add livewire conpontents

```bash
    php artisan make:livewire post.item
```


### Install Alpine.js

```bash
    npm install @alpinejs/intersect
```

### Install Swiper.js

```bash
    npm install swiper
```
