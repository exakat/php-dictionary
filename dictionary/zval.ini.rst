.. _zval:

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
