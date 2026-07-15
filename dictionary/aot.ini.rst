.. _aot:
.. _ahead-of-time:
.. _ahead-of-time-compilation:
.. meta::
	:description:
		Ahead Of Time: Ahead-of-Time, AOT, compilation is the process of compiling source code to machine code before execution, as opposed to at runtime.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Ahead Of Time
	:twitter:description: Ahead Of Time: Ahead-of-Time, AOT, compilation is the process of compiling source code to machine code before execution, as opposed to at runtime
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Ahead Of Time
	:og:type: article
	:og:description: Ahead-of-Time, AOT, compilation is the process of compiling source code to machine code before execution, as opposed to at runtime
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/aot.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/aot.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/aot.ini.html","name":"Ahead Of Time","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 30 Jun 2026 14:56:36 +0000","dateModified":"Tue, 30 Jun 2026 14:56:36 +0000","description":"Ahead-of-Time, AOT, compilation is the process of compiling source code to machine code before execution, as opposed to at runtime","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Ahead Of Time.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Ahead Of Time
-------------

Ahead-of-Time, AOT, compilation is the process of compiling source code to machine code before execution, as opposed to at runtime. The compilation happens once during the build phase; the produced binary runs directly without a separate compilation step at startup.

AOT stands in contrast to Just-in-Time compilation, where compilation happens during execution, and to interpretation, where source is executed line by line. AOT trades compilation time for faster startup and more predictable runtime performance.

True PHP AOT to native machine code is not part of the standard runtime. However, several mechanisms approximate AOT behaviour:

- OPcache preloading: preloads and compiles PHP files into shared memory at server start, so they are not parsed or compiled on each request.
- NativePHP: compiles a PHP application into a standalone desktop binary, bundling the PHP runtime.
- Static analysis tools perform AOT-style type checking without executing code.
- Compiler extensions: compile PHP or PHP-like code to C extensions ahead of time.

The primary PHP performance story is OPcache + JIT, not strict AOT.

.. code-block:: php
   
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


`Documentation <https://en.wikipedia.org/wiki/Ahead-of-time_compilation>`__

See also `PHP AOT Compiler <https://github.com/manticorephp/compiler>`_.

Related : :ref:`Compile <compile>`, :ref:`Just In Time (JIT) <jit>`, :ref:`Interpreted <interpreted>`, :ref:`Opcode <opcode>`, :ref:`OPcache Preloading <opcache-preloading>`
