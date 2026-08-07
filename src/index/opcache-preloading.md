# OPcache Preloading
OPcache preloading, introduced in version 7.4, allows loading PHP files into shared memory at PHP-FPM startup so they are permanently available to all worker processes without any parsing overhead on each request.

A preload script is specified with ``opcache.preload`` in ``php.ini``. All files required or compiled in that script are cached for the lifetime of the PHP-FPM master process. Changes to preloaded files require a PHP-FPM restart to take effect.

Preloading is most effective for framework core files, base classes, and heavily-used libraries.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/opcache-preloading.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/opcache-preloading.html","name":"OPcache Preloading","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 13:50:11 +0000","dateModified":"Wed, 15 Jul 2026 13:50:11 +0000","description":"OPcache preloading, introduced in version 7","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/OPcache Preloading.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"OPcache Preloading"}]}]}</script>
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

+ [Opcache](opcache.html)
+ [Cold Start](cold-start.html)
+ [Just In Time (JIT)](jit.html)
+ [Opcode](opcode.html)
+ [FastCGI Process Manager (FPM)](fpm.html)
+ [Ahead Of Time](aot.html)
