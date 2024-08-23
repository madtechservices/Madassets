# MAD Assets for SnipeIT app for developers

Simple instructions to get this working in a dev environment.

## Step 1: Modify the psr-4 Autoload Section
Locate the psr-4 section under the autoload key in the composer.json file.

### Add your package’s namespace and path to this section:

```json
"psr-4": {
    "App\\": "app/",
    "Database\\Factories\\": "database/factories/",
    "Database\\Seeders\\": "database/seeders/",
    "Madtechservices\\MadAssets\\": "packages/Madtechservices/MadAssets/src/"
}
```

Save the composer.json file.

## Step 2: Regenerate the Autoloader
After updating the composer.json file, you need to regenerate the autoloader so that Laravel recognizes your package:

Run the following command to regenerate the autoload files:

```bash
composer dump-autoload
```

## Step 3: Register the Service Provider
Now that Laravel knows where to find your package, you can register the service provider in config/app.php:

Open the config/app.php file.

Add your service provider to the providers array:

```php
'providers' => [
    // Other Service Providers

    Madtechservices\MadAssets\MadAssetsServiceProvider::class,
],
```

Save the file.

## Step 4: Test Your Application
Clear the configuration cache (if any) by running:

```bash
php artisan config:clear
```

Test your application to ensure everything is working correctly.

By adding your package’s namespace to the psr-4 autoloading section in the composer.json file and regenerating the autoloader, Laravel can now correctly locate and load your package from the packages directory. This should resolve the issue of your site breaking when registering the service provider.
