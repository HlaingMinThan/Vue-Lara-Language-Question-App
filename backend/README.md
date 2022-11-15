## Installation Steps


1. Install dependencies with composer

```bash
  composer install
```

2. Copy .env.example and setup database

```bash 
  cp .env.example .env
  touch database/database.sqlite
```

- Generate key in env file
```bash
  php artisan key:generate
```

1. Run BE Server

```bash
  php artisan serve
```