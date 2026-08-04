# OPcache Preloading
OPcache preloading, introduced in version 7.4, allows loading PHP files into shared memory at PHP-FPM startup so they are permanently available to all worker processes without any parsing overhead on each request.

A preload script is specified with ``opcache.preload`` in ``php.ini``. All files required or compiled in that script are cached for the lifetime of the PHP-FPM master process. Changes to preloaded files require a PHP-FPM restart to take effect.

Preloading is most effective for framework core files, base classes, and heavily-used libraries.
```php
<?php

    // preload.php  —  referenced in php.ini:
    // opcache.preload = /var/www/preload.php
    // opcache.preload_user = www-data
    
    // Preload all PHP files from the framework kernel
    $dir  = new RecursiveDirectoryIterator('/var/www/vendor/symfony/http-kernel');
    $iter = new RecursiveIteratorIterator($dir);
    
    foreach ($iter as $file) {
        if ($file->getExtension() === 'php') {
            opcache_compile_file($file->getPathname());
        }
}

?>
```

## See Also

+ [Preloading in PHP 7.4](https://stitcher.io/blog/preloading-in-php-74)

Related : [Opcache](Opcache), [Cold Start](Cold Start), [Just In Time (JIT)](Just In Time (JIT)), [Opcode](Opcode), [FastCGI Process Manager (FPM)](FastCGI Process Manager (FPM)), [Ahead Of Time](Ahead Of Time)
