---
type: "PHP Feature"
title: "Ahead Of Time"
description: "Ahead-of-time compilation, ``AOT``, is the process of compiling source code to machine code before execution, as opposed to at runtime."
resource: "https://en.wikipedia.org/wiki/Ahead-of-time_compilation"
tags: ["compilation", "engine"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Ahead Of Time

Ahead-of-time compilation, ``AOT``, is the process of compiling source code to machine code before execution, as opposed to at runtime. The compilation happens once during the build phase; the produced binary runs directly without a separate compilation step at startup.

``AOT`` stands in contrast to Just-in-Time compilation, where compilation happens during execution, and to interpretation, where source is executed line by line. ``AOT`` trades compilation time for faster startup and more predictable runtime performance.

True PHP ``AOT`` to native machine code is not part of the standard runtime. However, several mechanisms approximate ``AOT`` behaviour:

- ``OPcache`` preloading: preloads and compiles PHP files into shared memory at server start, so they are not parsed or compiled on each request.
- ``NativePHP``: compiles a PHP application into a standalone desktop binary, bundling the PHP runtime.
- Static analysis tools perform ``AOT``-style type checking without executing code.
- Compiler extensions: compile PHP or PHP-like code to C extensions ahead of time.

The primary PHP performance story is ``OPcache`` + ``JIT``, not strict ``AOT``.

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

## Documentation
- [https://en.wikipedia.org/wiki/Ahead-of-time_compilation](https://en.wikipedia.org/wiki/Ahead-of-time_compilation)

## See Also
- [PHP AOT Compiler](https://github.com/manticorephp/compiler)

## Related
- [Compile](/features/compile.md)
- [Just In Time (JIT)](/features/jit.md)
- [Interpreted](/features/interpreted.md)
- [Opcode](/features/opcode.md)
- [OPcache Preloading](/features/opcache-preloading.md)

