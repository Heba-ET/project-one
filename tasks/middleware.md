Middleware
Middleware acts as a bridge between a request and a response. It is a type of filtering mechanism. This chapter explains you the middleware mechanism in Laravel.

Laravel includes a middleware that verifies whether the user of the application is authenticated or not. If the user is authenticated, it redirects to the home page otherwise, if not, it redirects to the login page.

Middleware can be created by executing the following command −

php artisan make:middleware <middleware-name>
Registering Middleware
We need to register each and every middleware before using it. There are two types of Middleware in Laravel.

Global Middleware
Route Middleware
The Global Middleware will run on every HTTP request of the application, whereas the Route Middleware will be assigned to a specific route. The middleware can be registered at app/Http/Kernel.php. This file contains two properties $middleware and $routeMiddleware. $middleware property is used to register Global Middleware and $routeMiddleware property is used to register route specific middleware.
