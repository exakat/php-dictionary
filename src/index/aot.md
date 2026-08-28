# Ahead Of Time
Ahead-of-Time, ``AOT``, compilation is the process of compiling source code to machine code before execution, as opposed to at runtime. The compilation happens once during the build phase; the produced binary runs directly without a separate compilation step at startup.

``AOT`` stands in contrast to Just-in-Time compilation, where compilation happens during execution, and to interpretation, where source is executed line by line. ``AOT`` trades compilation time for faster startup and more predictable runtime performance.

True PHP ``AOT`` to native machine code is not part of the standard runtime. However, several mechanisms approximate ``AOT`` behaviour:

- ``OPcache`` preloading: preloads and compiles PHP files into shared memory at server start, so they are not parsed or compiled on each request.
- ``NativePHP``: compiles a PHP application into a standalone desktop binary, bundling the PHP runtime.
- Static analysis tools perform ``AOT``-style type checking without executing code.
- Compiler extensions: compile PHP or PHP-like code to C extensions ahead of time.

The primary PHP performance story is ``OPcache`` + ``JIT``, not strict ``AOT``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/aot.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/aot.html","name":"Ahead Of Time","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 12 Aug 2026 07:56:35 +0000","dateModified":"Wed, 12 Aug 2026 07:56:35 +0000","description":"Ahead-of-Time, AOT, compilation is the process of compiling source code to machine code before execution, as opposed to at runtime","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/aot.html"]}],"alternateName":["ahead-of-time","ahead-of-time-compilation"],"keywords":["compilation","engine"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/compile.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jit.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/interpreted.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/opcode.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/opcache-preloading.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Ahead-of-time_compilation"},{"@type":"CreativeWork","name":"PHP AOT Compiler","url":"https:\/\/github.com\/manticorephp\/compiler"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"aot"}]}]}</script>
```php
<?php

// OPcache preloading — the closest PHP has to AOT for web apps
// preload.php: loaded once at PHP-FPM start, shared across all workers

// Preload all framework and application classes
$files = glob(__DIR__ . '/src//*.php');
foreach ($files as $file) {
    opcache_compile_file($file); // compile to bytecode once, cache in shared memory
}

// php.ini / php-fpm.conf:
// opcache.enable=1
// opcache.preload=/var/www/preload.php
// opcache.preload_user=www-data

// At request time: preloaded files are served from opcache with zero parse/compile cost.

// JIT (PHP 8.0+) — runtime, not AOT, but often confused with it
// opcache.jit=tracing
// opcache.jit_buffer_size=100M

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Ahead-of-time_compilation)**
## See Also

+ [PHP AOT Compiler](https://github.com/manticorephp/compiler)

## Related

+ [Compile](compile.html)
+ [Just In Time (JIT)](jit.html)
+ [Interpreted](interpreted.html)
+ [Opcode](opcode.html)
+ [OPcache Preloading](opcache-preloading.html)
