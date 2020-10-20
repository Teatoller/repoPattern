# RepoPattern

- Implement a simple Customer Repository Pattern

### Getting Started

1. Setting Repo.

- ```mkdir project```
- ```cd project```
- ```git clone https://github.com/Teatoller/repoPattern.git```
- ```cd repoPattern```
- ```git checkout develop```

v. Open your choice editor  (for vscode run ```code .``` on terminal)

2. Make sure you have the latest .env file as per the `example .env`

- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=repoPattern
- DB_USERNAME=
- DB_PASSWORD=

<i>NB: Add database username and password</i>

Create mySQL database "repoPattern" or whatever name you please

3. Run ```composer install``` command
4. Run migration with seeder ```php artisan migrate:refresh --seed```
5. Run ``` php artisan serve```

6. API endpoints, test on postman

| #  | purpose                         | endpoint              |
|----|---------------------------------|-----------------------|
| 1. | GET:Customers                   | api/customers         |
| 2. | GET:Customer by id              | api/customers/{id}    |
| 3. | DELETE: customer by id          | api/customers/{id}    |
| 4. | POST: Update customer name      | api/customers/{id}    |



## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.


## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
