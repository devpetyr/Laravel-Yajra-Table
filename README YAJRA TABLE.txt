//installing yajra table
composer require yajra/laravel-datatables:^9.0

------------------------------------------------------------------------------------------------------------------------
//publishing providers for datatable


Open the file config/app.php and then add following service provider.

'providers' => [
    // ...
    Yajra\DataTables\DataTablesServiceProvider::class,
],
After completing the step above, use the following command to publish configuration & assets:

php artisan vendor:publish --tag=datatables

------------------------------------------------------------------------------------------------------------------------

