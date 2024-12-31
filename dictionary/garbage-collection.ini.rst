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
	:og:title: Garbage Collection
	:og:type: article
	:og:description: Garbage collection is a PHP mechanism that checks memory and frees it when it needs to store new values
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/garbage-collection.ini.html
	:og:locale: en


Garbage Collection
------------------

Garbage collection is a PHP mechanism that checks memory and frees it when it needs to store new values. 

PHP allocate memory as it needs, when variables and objects are created in the code. Sometimes, those variables are destroyed, using explicit unset() calls, or implicitly, when leaving a method or destroying an object. 

To speed up the process, PHP postpone memory cleaning until the end of the application, or when it reaches some internal threshold. Then, it review all the currently allocated variables, and when they are not used anymore (aka, when the reference counter is down to 0), it removes them.

Since garbage collection requires pausing the execution, PHP only runs it on-demand (via gc_collect_cycles() calls), or once every 10k objects to clear.


.. code-block:: php
   
   <?php
   
   // Explicit Garbage Collection 
   gc_collect_cycles();
   
   // implicit garbage collection
   // well,... difficult to illustrate, right?
   
   ?>


`Documentation <https://www.php.net/manual/en/features.gc.php>`__

See also `Easy to understand PHP garbage collection mechanism <https://medium.com/geekculture/easy-to-understand-php-garbage-collection-mechanism-ee5c5bde5a5d>`_

Related : :ref:`Zval <zval>`, :ref:`References <reference>`, :ref:`Reference Count <reference-count>`
