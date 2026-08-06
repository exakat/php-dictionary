# OPcache Preloading
OPcache preloading, introduced in version 7.4, allows loading PHP files into shared memory at PHP-FPM startup so they are permanently available to all worker processes without any parsing overhead on each request.

A preload script is specified with ``opcache.preload`` in ``php.ini``. All files required or compiled in that script are cached for the lifetime of the PHP-FPM master process. Changes to preloaded files require a PHP-FPM restart to take effect.

Preloading is most effective for framework core files, base classes, and heavily-used libraries.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/opcache-preloading.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/opcache-preloading.html","name":"OPcache Preloading","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 13:50:11 +0000","dateModified":"Wed, 15 Jul 2026 13:50:11 +0000","description":"OPcache preloading, introduced in version 7","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/OPcache Preloading.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://www.php.net/manual/en/opcache.preloading.php)**
## See Also

+ [Preloading in PHP 7.4](https://stitcher.io/blog/preloading-in-php-74)

## Related

+ [Opcache](opcache.ini.html)
+ [Cold Start](cold-start.ini.html)
+ [Just In Time (JIT)](jit.ini.html)
+ [Opcode](opcode.ini.html)
+ [FastCGI Process Manager (FPM)](fpm.ini.html)
+ [Ahead Of Time](aot.ini.html)
