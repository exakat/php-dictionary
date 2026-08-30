---
type: "PHP Feature"
title: "OPcache Preloading"
description: "``OPcache`` preloading, introduced in version 7.4, allows loading PHP files into shared memory at ``PHP-FPM`` startup so they are permanently available to all worker processes without any parsing overhead on each request."
resource: "https://www.php.net/manual/en/opcache.preloading.php"
tags: ["performance", "configuration", "engine"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# OPcache Preloading

``OPcache`` preloading, introduced in version 7.4, allows loading PHP files into shared memory at ``PHP-FPM`` startup so they are permanently available to all worker processes without any parsing overhead on each request.

A preload script is specified with ``opcache.preload`` in ``php.ini``. All files required or compiled in that script are cached for the lifetime of the ``PHP-FPM`` master process. Changes to preloaded files require a ``PHP-FPM`` restart to take effect.

Preloading is most effective for framework core files, base classes, and heavily-used libraries.

```php
<?php

    // preload.php, as referenced in php.ini:
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

## Documentation
- [https://www.php.net/manual/en/opcache.preloading.php](https://www.php.net/manual/en/opcache.preloading.php)

## See Also
- [Preloading in PHP 7.4](https://stitcher.io/blog/preloading-in-php-74)

## Related
- [Opcache](/features/opcache.md)
- [Cold Start](/features/cold-start.md)
- [Just In Time (JIT)](/features/jit.md)
- [Opcode](/features/opcode.md)
- [FastCGI Process Manager (FPM)](/features/fpm.md)
- [Ahead Of Time](/features/aot.md)

## Details
- PHP since: 7.4

