.. _memory:
.. meta::
	:description:
		Memory: memory refers to the portion of server RAM that PHP uses to execute scripts.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Memory
	:twitter:description: Memory: memory refers to the portion of server RAM that PHP uses to execute scripts
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Memory
	:og:type: article
	:og:description: memory refers to the portion of server RAM that PHP uses to execute scripts
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/memory.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Memory","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 27 Jun 2025 15:26:53 +0000","dateModified":"Fri, 27 Jun 2025 15:26:53 +0000","description":"memory refers to the portion of server RAM that PHP uses to execute scripts","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Memory.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Memory
------

memory refers to the portion of server RAM that PHP uses to execute scripts. 

Whenever a PHP application runs, it needs memory to load the PHP engine, parse the code, store data and various caches.

Memory usage is controlled by the ``memory_limit`` directive, and functions like ``get_memory_usage()``. 

PHP handles the memory management, and there is little more to do beyond setting the overall limit, although some features may become memory hungry easily, such as ``array_merge()`` in loops, or the ``N+1 query`` problem.
