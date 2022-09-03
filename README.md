<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Техническое задание

Используя фреймворк:
 
1. Реализовать сущности авторы и книги
 
2. Реализовать административную часть
    * CRUD операции для авторов и книг
    * Вывести список книг с обязательным указанием имени автора в списке
    * Вывести список авторов с указанием кол-ва книг
 
3. Реализовать публичную часть сайта с отображение авторов и их книг (простой вывод списка на странице)
 
4. Реализовать выдачу данных в формате json по RESTful протоколу отдельным контроллером

    * GET /api/v1/books/list получение списка книг с именем автора
    * GET /api/v1/books/by-id получение данных книги по id
    * POST /api/v1/books/update обновление данных книги
    * DELETE /api/v1/books/id удаление записи книги из бд
    
    
## Инструкция по развертыванию

1.  Скопируйе проект к себе 
``` git clone https://github.com/FilipenkoDanil/test2.git test2 ```

2. Переименуйте файл `.env.example` в `.env`.

3. Настройте подключение к вашей БД.

4. Установите пакеты: `composer install` и `npm install && npm run dev`

5. Выполните миграцию и запустите сидер: `php artisan db:seed`. Сидер создаст администратора с логином `admin@gmail.com` и паролем `123123123`, две роли: `user`, `admin`, а так же заполнит базу фейковыми данными.

