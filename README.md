# Laravel Google Analytics

A simple and easy-to-use Laravel package for integrating Google Analytics (gtag.js) into your application.

## Installation

You can install the package via composer:

```bash
composer require quadcompanies/google-analytics
```

```bash
php artisan vendor:publish --provider="QuadCompanies\GoogleAnalytics\GoogleAnalyticsServiceProvider" --tag="config"
```

This is the contents of the published config file:
return [
    /*
     * The Google Analytics Measurement ID (usually starts with 'G-')
     */
    'measurement_id' => env('GOOGLE_ANALYTICS_MEASUREMENT_ID'),

    /*
     * Whether or not to enable Google Analytics.
     */
    'enabled' => env('GOOGLE_ANALYTICS_ENABLED', true),

    /*
     * Additional Tag IDs that should be loaded.
     */
    'tag_ids' => [],
];
```

## Usage

### Environment Setup

Add your Google Analytics Measurement ID to your `.env` file:

```env
GOOGLE_ANALYTICS_MEASUREMENT_ID=G-XXXXXXXXXX
```

### Blade Directive

To add the Google Analytics script to every page, add the `@googleAnalytics` directive to the `<head>` section of your main layout file (e.g., `resources/views/layouts/app.blade.php`):

```html
<!DOCTYPE html>
<html>
<head>
    @googleAnalytics()
    ...
</head>
...
</html>
```

### Dynamic Parameters

You can also pass a custom measurement ID and additional tag IDs directly through the directive:

```blade
@googleAnalytics('G-CUSTOM-ID', ['G-TAG-1', 'G-TAG-2'])
```

## Testing

Coming soon...

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
