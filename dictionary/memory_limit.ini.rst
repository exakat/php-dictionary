.. _memory_limit:
.. meta::
	:description:
		memory_limit: ``memory_limit`` is the directive that caps the maximum amount of memory that PHP can use.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: memory_limit
	:twitter:description: memory_limit: ``memory_limit`` is the directive that caps the maximum amount of memory that PHP can use
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: memory_limit
	:og:type: article
	:og:description: ``memory_limit`` is the directive that caps the maximum amount of memory that PHP can use
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/memory_limit.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"memory_limit","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 27 Jun 2025 15:42:17 +0000","dateModified":"Fri, 27 Jun 2025 15:42:17 +0000","description":"``memory_limit`` is the directive that caps the maximum amount of memory that PHP can use","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/memory_limit.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


memory_limit
------------

``memory_limit`` is the directive that caps the maximum amount of memory that PHP can use. 

The limit is expressed in bytes, although options are available for kb ``K``, Mb ``M`` and Gb ``G`` (case insensitive).

The limit may be lifted by setting this directive to ``-1``.

PHP requires a minimum of memory when starting. Usually, it is about 2Mb of RAM. Setting any positive value for ``memory_limit`` below that threshold prevents PHP from starting.

The default value of ``memory_limit`` is 128 Mb. 

``memory_limit`` may be changed during execution with ``ini_set()``.

.. code-block:: php
   
   <?php
   
   echo ini_get('memory_limit');  //128M
   
   ?>


`Documentation <https://www.php.net/manual/en/ini.core.php#ini.memory-limit>`__

See also https://linuxblog.io/understanding-php-memory_limit/
