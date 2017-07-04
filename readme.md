<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/jafar690/laravel-api-jwt-starter"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/jafar690/laravel-api-jwt-starter"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/jafar690/laravel-api-jwt-starter"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/jafar690/laravel-api-jwt-starter"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Laravel API Boilerplate (JWT Edition)

Laravel API Boilerplate is a "starter kit" you can use to build your first API in seconds. As you can easily imagine, it is built on top of the awesome Laravel Framework. This version is built on Laravel 5.4!

It is built on top of three packages:

* JWT-Auth - [tymondesigns/jwt-auth](https://github.com/tymondesigns/jwt-auth)
* Dingo API - [dingo/api](https://github.com/dingo/api)
* Laravel-CORS [barryvdh/laravel-cors](http://github.com/barryvdh/laravel-cors)

What I made is an integration of these three packages and a setup of some authentication and credentials recovery methods.

## Installation

1. run `composer create-project jafar690/laravel-api-jwt-starter`;
2. have a coffee, nothing to do here;

Once the project creation procedure will be completed, run the `php artisan migrate` command to install the required tables.


## Main Features

### Ready-To-Use Authentication Controllers

You don't have to worry about authentication and password recovery anymore. I created four controllers you can find in the `App\Http\Controllers\Auth\` for those operations.

For each controller there's an already setup route in `routes/api.php` file:

* `POST api/auth/login`, to do the login and get your access token;
* `POST api/auth/register`, to create a new user into your application;
* `POST api/auth/recovery`, to recover your credentials;
* `POST api/auth/reset`, to reset your password after the recovery;

### A Separate File for Routes

All the API routes can be found in the `routes/api.php` file. This also follow the Laravel 5.3 convention.

### Secrets Generation

Every time you create a new project starting from this repository, the _php artisan jwt:generate_ command will be executed.

## Configuration

This boilerplate is based on _dingo/api_ and _tymondesigns/jwt-auth_ packages. So, you can find many informations about configuration <a href="https://github.com/tymondesigns/jwt-auth/wiki/Configuration" target="_blank">here</a> and <a href="https://github.com/dingo/api/wiki/Configuration">here</a>.

I have made some minor changes to the DINGO API configuration file in _config/api.php_ 

* `sign_up.release_token`: set it to `true` if you want your app release the token right after the sign up process;
* `reset_password.release_token`: set it to `true` if you want your app release the token right after the password reset process;

I have also created form requests for every action (login, register, recovery and reset). Feel free to customize it for your needs.

## Creating Endpoints

You can create endpoints in the same way you could to with using the single _dingo/api_ package. You can <a href="https://github.com/dingo/api/wiki/Creating-API-Endpoints" target="_blank">read its documentation</a> for details. After all, that's just a boilerplate! :)

However, I added some example routes to the `routes/api.php` file to give you immediately an idea.

## Cross Origin Resource Sharing

If you want to enable CORS for a specific route or routes group, you just have to use the _cors_ middleware on them.

Thanks to the _barryvdh/laravel-cors_ package, you can handle CORS easily. Just check <a href="https://github.com/barryvdh/laravel-cors" target="_blank">the docs at this page</a> for more info.

## Feedback

For any questions or feedback, feel free to send me an email at kgakami690@gmail.com
