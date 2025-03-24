# Проект LIGHTSABER

Этот проект представляет собой веб-приложение на Laravel с интегрированной формой обратной связи.

## Установка и запуск

### 1. Клонирование репозитория
```sh
git clone https://github.com/username/lightsaber.git
cd lightsaber
```

### 2. Установка зависимостей
```sh
composer install
npm install
```

### 3. Создание и настройка .env
```sh
cp .env.example .env
```
Открыть `.env` и настроить параметры подключения к базе данных:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=lightsaber
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Генерация ключа приложения
```sh
php artisan key:generate
```

### 5. Запуск миграций
```sh
php artisan migrate
```

### 6. Запуск сервера
```sh
php artisan serve
```
Приложение будет доступно по адресу: [http://127.0.0.1:8000](http://127.0.0.1:8000)

## Настройка формы обратной связи

Форма находится в `resources/views/contact.blade.php` и отправляет данные в `routes/web.php`:
```php
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
```

Контроллер `app/Http/Controllers/ContactController.php` обрабатывает запрос и отправляет email с помощью `app/Mail/ContactFormMail.php`.


## Дополнительно

- **Логирование ошибок** — файлы логов находятся в `storage/logs/`
- **Очистка кеша**
```sh
php artisan cache:clear
php artisan config:clear
php artisan route:clear
```

