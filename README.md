# Aliro - Simple User and Roles management for Laravel 4

*Warning: Aliro is our way of going about User and Role management. We leveraged the power of Laravel and Eloquent to make a simple pacakge with just some basic repeatable functions. It's currently under development and may get more powerful features in the future.*

Aliro is a set of migrations and Eloquent classes that will get you up and running with user management in no time. It need very little configuration, and is ready to be used as is.

## Install
In your application's root directory, open up the *composer.json* file and add the package to the `require` section so it looks like this:

```php
"require": {
       "laravel/framework": "4.0.*",
       "koalabs/laravel-aliro": "dev-master*"
},
```

Open the command line, and in the root ot our application, run the Composer update like this:

```
php composer.phar update
```

Now let's add the Aliro Service Provider. Open the *app/config/app.php* file and in the `providers` array, add the following line:

```php
'Koalabs\Aliro\AliroServiceProvider'
```

You may also publish the configuration files in order to avoid them being overriden in future updates. Simply type:

```php
php artisan config:publish koalabs/aliro
```