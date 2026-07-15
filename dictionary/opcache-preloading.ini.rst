.. _opcache-preloading:
.. _preloading:
.. meta::
	:description:
		OPcache Preloading: OPcache preloading, introduced in version 7.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: OPcache Preloading
	:twitter:description: OPcache Preloading: OPcache preloading, introduced in version 7
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: OPcache Preloading
	:og:type: article
	:og:description: OPcache preloading, introduced in version 7
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/opcache-preloading.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/opcache-preloading.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/opcache-preloading.ini.html","name":"OPcache Preloading","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 13:50:11 +0000","dateModified":"Wed, 15 Jul 2026 13:50:11 +0000","description":"OPcache preloading, introduced in version 7","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/OPcache Preloading.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


OPcache Preloading
------------------

OPcache preloading, introduced in version 7.4, allows loading PHP files into shared memory at PHP-FPM startup so they are permanently available to all worker processes without any parsing overhead on each request.

A preload script is specified with ``opcache.preload`` in ``php.ini``. All files required or compiled in that script are cached for the lifetime of the PHP-FPM master process. Changes to preloaded files require a PHP-FPM restart to take effect.

Preloading is most effective for framework core files, base classes, and heavily-used libraries.

.. code-block:: php
   
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


`Documentation <https://www.php.net/manual/en/opcache.preloading.php>`__

See also `Preloading in PHP 7.4 <https://stitcher.io/blog/preloading-in-php-74>`_.

Related : :ref:`Opcache <opcache>`, :ref:`Cold Start <cold-start>`, :ref:`Just In Time (JIT) <jit>`, :ref:`Opcode <opcode>`, :ref:`FastCGI Process Manager (FPM) <fpm>`, :ref:`Ahead Of Time <aot>`

Added in PHP 7.4
