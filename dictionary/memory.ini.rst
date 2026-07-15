.. _memory:
.. meta::
	:description:
		Memory: Memory refers to the portion of server RAM that PHP uses to execute scripts.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Memory
	:twitter:description: Memory: Memory refers to the portion of server RAM that PHP uses to execute scripts
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Memory
	:og:type: article
	:og:description: Memory refers to the portion of server RAM that PHP uses to execute scripts
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/memory.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/memory.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/memory.ini.html","name":"Memory","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:25:08 +0000","dateModified":"Fri, 19 Jun 2026 21:25:08 +0000","description":"Memory refers to the portion of server RAM that PHP uses to execute scripts","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Memory.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Memory
------

Memory refers to the portion of server RAM that PHP uses to execute scripts. 

Whenever a PHP application runs, it needs memory to load the PHP engine, parse the code, store data and various caches.

Memory usage is controlled by the ``memory_limit`` directive, and functions like ``get_memory_usage()``. 

PHP handles the memory management, and there is little more to do beyond setting the overall limit, although some features may become memory hungry easily, such as ``array_merge()`` in loops, or the ``N+1 query`` problem.

`Documentation <https://www.php.net/manual/en/ini.core.php#ini.memory-limit>`__

Related : :ref:`memory_limit <memory_limit>`, :ref:`Circular Reference <circular-reference>`, :ref:`Free <free>`, :ref:`Garbage Collection <garbage-collection>`, :ref:`Shared Memory <shared-memory>`, :ref:`Treemap <treemap>`
