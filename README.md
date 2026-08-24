# OpenDiscovery Website

Public website for the OpenDiscovery project.

## Requirements

- PHP 8.5+
- Composer 2.x
- Node.js 22+

## Local development

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
npm run dev
php artisan serve
```

## Tests

```bash
npm run build
php artisan test
composer audit
```

## Docker (FrankenPHP + Octane)

```bash
cp .env.example .env
php artisan key:generate
npm run build
docker compose up --build
```

The app listens on http://localhost:18084.

## Local stack (all services)

Run all four OpenDiscovery services together on host ports 18081–18084. Each repo uses the shared Docker network `opendiscovery`.

Prerequisite in each repo: `cp .env.example .env && php artisan key:generate`. Host `.env` supplies `APP_KEY` via compose interpolation; app defaults come from config.

Start order (matches the deploy chain). `root-provider` creates the shared `opendiscovery` network; the others join it as external:

```bash
cd root-provider && docker compose up --build -d
cd ../dk-provider && docker compose up --build -d
cd ../resolver && docker compose up --build -d
cd ../website && docker compose up --build -d
```

Smoke URLs:

- Website: http://localhost:18084
- Resolver: http://localhost:18083/lookup?id=DK12345678
- Root: http://localhost:18081/.well-known/opendiscovery/DK123.json
- DK: http://localhost:18082/.well-known/opendiscovery/DK12345678.json

dk-provider CVR lookups need real `ERST_CVR_USER` / `ERST_CVR_PASS` in `.env`.

## Environment

| Variable | Description |
|----------|-------------|
| `OPENDISCOVERY_RESOLVER` | Base URL for the resolver service |
