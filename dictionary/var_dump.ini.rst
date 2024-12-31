.. _var_dump:
.. meta::
	:description:
		var_dump(): var_dump() displays the information in a variable or any data container.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: var_dump()
	:twitter:description: var_dump(): var_dump() displays the information in a variable or any data container
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: var_dump()
	:og:type: article
	:og:description: var_dump() displays the information in a variable or any data container
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/var_dump.ini.html
	:og:locale: en


var_dump()
----------

var_dump() displays the information in a variable or any data container. It is a debugging function.

var_dump() is one of the most famous PHP function. It is often related to print_r(). 

.. code-block:: php
   
   <?php
   
   $a = true;
   var_dump($a);
   // bool(true)
   
   ?>


`Documentation <https://www.php.net/var_dump>`__

Related : :ref:`print_r() <print_r>`
