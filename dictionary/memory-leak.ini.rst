.. _memory-leak:
.. meta::
	:description:
		Memory Leak: A memory leak is the allocation of memory, without its deallocation when that memory is not needed anymore.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Memory Leak
	:twitter:description: Memory Leak: A memory leak is the allocation of memory, without its deallocation when that memory is not needed anymore
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Memory Leak
	:og:type: article
	:og:description: A memory leak is the allocation of memory, without its deallocation when that memory is not needed anymore
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/memory-leak.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Memory Leak","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 12 Jun 2025 05:15:51 +0000","dateModified":"Thu, 12 Jun 2025 05:15:51 +0000","description":"A memory leak is the allocation of memory, without its deallocation when that memory is not needed anymore","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Memory Leak.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Memory Leak
-----------

A memory leak is the allocation of memory, without its deallocation when that memory is not needed anymore. 

As PHP manage the memory itself, memory leaks happen in different situations: 

+ Accumulation of data, without release. For example, an array that collect new data and never removes them.
+ Circular reference: objects or variables keep a link one onto each other, and the PHP garbage collector see them in use.
+ Disabled garbage collector: the garbage collector was disabled, and does not perform
+ Bugs: sometimes, the memory usage is not voluntary.

See also https://medium.com/@aji658911/preventing-memory-leaks-in-php-best-practices-for-efficient-memory-management-beac555020f2

Related : :ref:`Circular Reference <circular-reference>`, :ref:`Garbage Collection <garbage-collection>`
