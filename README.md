php artisan make:controller API/OrderController --api --model=Order

php artisan make:migration create_orders_table --create=orders

php artisan make:controller API/OrderItemController --api --model=OrderItem

php artisan make:migration create_order_items_table --create=order_items

php artisan make:migration add_product_id_to_order_items

########
composer require tymon/jwt-auth

Add the service provider to the providers array in the config/app.php config file as follows:

'providers' => [
    Tymon\JWTAuth\Providers\LaravelServiceProvider::class,
]

php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"

php artisan jwt:secret

php artisan make:controller AuthController

