php artisan make:controller API/OrderController --api --model=Order
php artisan make:migration create_orders_table --create=orders

php artisan make:controller API/OrderItemController --api --model=OrderItem
php artisan make:migration create_order_items_table --create=order_items

php artisan make:migration add_product_id_to_order_items
