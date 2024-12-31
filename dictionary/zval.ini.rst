.. _zval:
.. meta::
	:description:
		Zval: ``ZVAL`` is a C structure, that represents data in PHP.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Zval
	:twitter:description: Zval: ``ZVAL`` is a C structure, that represents data in PHP
	:twitter:creator: @exakat
	:og:title: Zval
	:og:type: article
	:og:description: ``ZVAL`` is a C structure, that represents data in PHP
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/zval.ini.html
	:og:locale: en


Zval
----

``ZVAL`` is a C structure, that represents data in PHP. It is a structure, which is never directly used from PHP code.

It may be access with debug_zval_dump() function, for debugging purposes. It is useful to debug PHP engine, or extensions.


.. code-block:: php
   
   <?php
   
   // From the manual 
   $var1 = 'Hello';
   $var1 .= ' World';
   $var2 = $var1;
   
   debug_zval_dump($var1);
   
   // displays string(11) "Hello World" refcount(3)
   
   ?>


`Documentation <https://www.phpinternalsbook.com/php5/zvals/basic_structure.html>`__

See also `debug_zval_dump <https://www.php.net/manual/fr/function.debug-zval-dump.php>`_
