.. _circular-reference:
.. meta::
	:description:
		Circular Reference: A circular reference is a situation where an object has a reference on another object, and vice versa.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Circular Reference
	:twitter:description: Circular Reference: A circular reference is a situation where an object has a reference on another object, and vice versa
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Circular Reference
	:og:type: article
	:og:description: A circular reference is a situation where an object has a reference on another object, and vice versa
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/circular-reference.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Circular Reference","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 24 Apr 2025 05:27:06 +0000","dateModified":"Thu, 24 Apr 2025 05:27:06 +0000","description":"A circular reference is a situation where an object has a reference on another object, and vice versa","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Circular Reference.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Circular Reference
------------------

A circular reference is a situation where an object has a reference on another object, and vice versa. The circle of reference may have two or more objects. 

Circular references create limitation with the garbage collector, which require more refined checks before removing elements from memory. Usually, the garbage collector removes objects which are not referenced from another object. And, in the case of circular references, the whole circle seems to be in use. This leads to memory leaks.

See also https://dev.to/gromnan/php-closures-and-generators-can-hold-circular-references-45ge

Related : :ref:`Garbage Collection <garbage-collection>`, :ref:`References <reference>`, , , 
