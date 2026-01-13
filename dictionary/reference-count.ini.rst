.. _reference-count:
.. meta::
	:description:
		Reference Count: Reference counting is the way PHP keeps track of the usage of a value.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Reference Count
	:twitter:description: Reference Count: Reference counting is the way PHP keeps track of the usage of a value
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Reference Count
	:og:type: article
	:og:description: Reference counting is the way PHP keeps track of the usage of a value
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/reference-count.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Reference Count","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"Reference counting is the way PHP keeps track of the usage of a value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Reference Count.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Reference Count
---------------

Reference counting is the way PHP keeps track of the usage of a value.

The count starts at 1 when the value is created, and it is increased when the value is passed around. It is decreased when the value is deleted or modified. When the reference count is zero, the value may be removed from the memory safely. 

Reference counting is a feature of the PHP engine : code usually uses it transparently. The only possible interaction is when using the garbage collector.


`Documentation <https://www.php.net/manual/en/features.gc.refcounting-basics.php>`__

Related : :ref:`Garbage Collection <garbage-collection>`, :ref:`Zval <zval>`
