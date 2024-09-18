# Telepítés

```composer create-project laravel/laravel:^10.0 example-app```

## Előfeltételek
 - cli php (xampp)
 - composer
 - 7zip


## Laravel 11 esetén
```php artisan install:api```

## VS Code profile - Laravel

## VS Code extension-ök

- (Laravel Extension Pack)
- PHP Intelephense
- Laravel Extra Intellisense
- Laravel Snippets
- Laravel Goto View
- Laravel Blade Snippets (Fullstack-hez kell csak)
- Thunder Client

`.editorconfig`
insert_final_newline = false

# Szerver indítás
`php artisan serve`

# Routolás
` /routes/api.php ` - backend
` /routes/web.php ` - fullstack (vannak nézetek is)

## Létező route-ok listázása
```php artisan route:list```

## Új komponens
```php artisan make:component component-name --view```