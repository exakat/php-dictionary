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


Reference Count
---------------

Reference counting is the way PHP keeps track of the usage of a value.

The count starts at 1 when the value is created, and it is increased when the value is passed around. It is decreased when the value is deleted or modified. When the reference count is zero, the value may be removed from the memory safely. 

Reference counting is a feature of the PHP engine : code usually uses it transparently. The only possible interaction is when using the garbage collector.


`Documentation <https://www.php.net/manual/en/features.gc.refcounting-basics.php>`__

Related : :ref:`Garbage Collection <garbage-collection>`, :ref:`Zval <zval>`
