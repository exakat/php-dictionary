.. _unset:
.. meta::
	:description:
		unset(): unset() removes a variable.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: unset()
	:twitter:description: unset(): unset() removes a variable
	:twitter:creator: @exakat
	:og:title: unset()
	:og:type: article
	:og:description: unset() removes a variable
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/unset.ini.html
	:og:locale: en


unset()
-------

unset() removes a variable. This feature used to be available as a function call `unset()` or as a type cast `(unset)`. The type-cast was removed in PHP 7.2. 

.. code-block:: php
   
   <?php
   
   $a = 1;
   unset($a);
   var_dump(isset($a)); // false
   
   ?>


`Documentation <https://www.php.net/manual/en/function.unset.php>`__

Related : :ref:`Variables <variable>`
