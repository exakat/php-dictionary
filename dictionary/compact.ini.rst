.. _compact:
.. meta::
	:description:
		compact(): compact() is a native PHP function, which creates an array containing variables and their values.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: compact()
	:twitter:description: compact(): compact() is a native PHP function, which creates an array containing variables and their values
	:twitter:creator: @exakat
	:og:title: compact()
	:og:type: article
	:og:description: compact() is a native PHP function, which creates an array containing variables and their values
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/compact.ini.html
	:og:locale: en


compact()
---------

compact() is a native PHP function, which creates an array containing variables and their values.

It is the opposite of extract().


.. code-block:: php
   
   <?php
   
   $a = '1';
   $b = '2';
   
   $array = compact('a', 'b');
   // ['a' => 1, 'b' => 2];
   ?>
   


`Documentation <https://www.php.net/manual/en/function.compact.php>`__

Related : :ref:`extract() <extract>`, :ref:`Variable Variables <variable-variable>`
