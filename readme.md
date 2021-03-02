# WP-FontAwesome

WP-FontAwesome adds Font Awesome to WordPress form Composer.

The main reason for this is to help with dependencies. Instead of having Font Awesome bundled in both a theme and composer module this allows both to require a single module which by registering the styles/scripts itself means no overlap between multiple installs.

## Usage

```
composer require ed-itsolutions/wp-fontawesome
```

```php
//functions.php, in your wp_enqeue_scripts action:

wp_enqueue_script('font-awesome');
```

