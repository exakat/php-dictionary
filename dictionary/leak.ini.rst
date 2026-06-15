.. _leak:
.. meta::
	:description:
		Leak: A leak generally refers to a situation where resources are not properly released after they should have been.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Leak
	:twitter:description: Leak: A leak generally refers to a situation where resources are not properly released after they should have been
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Leak
	:og:type: article
	:og:description: A leak generally refers to a situation where resources are not properly released after they should have been
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/leak.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Leak","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A leak generally refers to a situation where resources are not properly released after they should have been","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Leak.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Leak
----

A leak generally refers to a situation where resources are not properly released after they should have been. This can lead to degraded performance, crash or security issues.

Different types of leaks: 

+ Memory leaks: memory is not freed, voluntarily or not, and reach ``memory_limit``.
+ Resource leaks: resources such as file handles are not freed, voluntarily or not.
+ Data Leaks: sensitive data are made available, in an indirect way, and may even reach attackers.

See also `A Journey to find a memory leak <https://jolicode.com/blog/a-journey-to-find-a-memory-leak>`_ and `Preventing Memory Leaks in PHP: Best Practices for Efficient Memory Management <https://medium.com/@aji658911/preventing-memory-leaks-in-php-best-practices-for-efficient-memory-management-beac555020f2>`_.

Related : :ref:`Resource Leak <resource-leak>`, :ref:`Memory Leak <memory-leak>`, :ref:`Data Leak <data-leak>`, :ref:`Path Traversal <path-traversal>`, :ref:`phpinfo() <phpinfo>`
