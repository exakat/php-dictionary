.. _memory-arena:
.. _arena allocator:
.. meta::
	:description:
		Memory Arena: A memory arena is a large, contiguous block of memory that is pre-allocated upfront and then carved into smaller pieces on demand.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Memory Arena
	:twitter:description: Memory Arena: A memory arena is a large, contiguous block of memory that is pre-allocated upfront and then carved into smaller pieces on demand
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Memory Arena
	:og:type: article
	:og:description: A memory arena is a large, contiguous block of memory that is pre-allocated upfront and then carved into smaller pieces on demand
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/memory-arena.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Memory Arena","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 08:14:53 +0000","dateModified":"Thu, 09 Jul 2026 08:14:53 +0000","description":"A memory arena is a large, contiguous block of memory that is pre-allocated upfront and then carved into smaller pieces on demand","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Memory Arena.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Memory Arena
------------

A memory arena is a large, contiguous block of memory that is pre-allocated upfront and then carved into smaller pieces on demand. Rather than calling the system allocator individually for each object, code requests slices from the arena, which simply advances an internal pointer. When the arena is done, the entire block is freed in a single operation.

The pattern trades deallocation granularity for speed and locality. Individual objects in an arena cannot be freed independently; the whole region is reclaimed at once when the arena's lifetime ends. This makes arenas well-suited for short-lived, batch-style work such as parsing, compilation, or request processing where many small allocations are created together and discarded together.

PHP's Zend Engine uses arena allocators internally for per-request memory. The ``emalloc``/``efree`` family of functions that extensions use are backed by a per-request arena that is wiped at the end of each request, making object-by-object deallocation unnecessary. OPcache similarly uses dedicated memory regions for its shared memory segment. PHP's JIT compiler uses arenas for generated machine code buffers.

From a PHP developer's perspective, arenas are invisible: the engine manages them automatically. Understanding them helps explain why PHP's per-request memory model is efficient and why ``memory_limit`` is enforced at the request level rather than the object level.

`Documentation <https://en.wikipedia.org/wiki/Region-based_memory_management>`__

See also `PHP internals: memory management <https://www.phpinternalsbook.com/php7/memory_management/zend_memory_manager.html>`_.

Related : :ref:`Memory <memory>`, :ref:`memory_limit <memory_limit>`, :ref:`Garbage Collection <garbage-collection>`, :ref:`Zval <zval>`, :ref:`Opcache <opcache>`, :ref:`Just In Time (JIT) <jit>`, :ref:`Shared Memory <shared-memory>`, :ref:`Memory Leak <memory-leak>`, :ref:`php://memory <php-memory>`
