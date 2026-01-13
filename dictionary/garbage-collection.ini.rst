.. _garbage-collection:
.. _gc:
.. meta::
	:description:
		Garbage Collection: Garbage collection is a PHP mechanism that checks memory and frees it when it needs to store new values.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Garbage Collection
	:twitter:description: Garbage Collection: Garbage collection is a PHP mechanism that checks memory and frees it when it needs to store new values
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Garbage Collection
	:og:type: article
	:og:description: Garbage collection is a PHP mechanism that checks memory and frees it when it needs to store new values
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/garbage-collection.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Garbage Collection","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 19 Apr 2025 15:49:21 +0000","dateModified":"Sat, 19 Apr 2025 15:49:21 +0000","description":"Garbage collection is a PHP mechanism that checks memory and frees it when it needs to store new values","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Garbage Collection.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Garbage Collection
------------------

Garbage collection is a PHP mechanism that checks memory and frees it when it needs to store new values. 

PHP allocate memory as it needs, when variables and objects are created in the code. Sometimes, those variables are destroyed, using explicit unset() calls, or implicitly, when leaving a method or destroying an object. 

To speed up the process, PHP postpone memory cleaning until the end of the application, or when it reaches some internal threshold. Then, it review all the currently allocated variables, and when they are not used anymore (aka, when the reference counter is down to 0), it removes them.

Since garbage collection requires pausing the execution, PHP only runs it on-demand (via gc_collect_cycles() calls), or once every 10k objects to clear.

Garbage collection is needed to handle circular reference: objects that mutually reference each other, and which requires some processing to identify as dead data.

.. code-block:: php
   
   <?php
   
   // Explicit Garbage Collection 
   gc_collect_cycles();
   
   // implicit garbage collection
   // well,... difficult to illustrate, right?
   
   ?>


`Documentation <https://www.php.net/manual/en/features.gc.php>`__

See also `Easy to understand PHP garbage collection mechanism <https://medium.com/geekculture/easy-to-understand-php-garbage-collection-mechanism-ee5c5bde5a5d>`_

Related : :ref:`Zval <zval>`, :ref:`References <reference>`, :ref:`Reference Count <reference-count>`, :ref:`Circular Reference <circular-reference>`, :ref:`Memory <memory>`, :ref:`Memory Leak <memory-leak>`
