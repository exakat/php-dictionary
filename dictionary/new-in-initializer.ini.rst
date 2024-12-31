.. _new-in-initializer:
.. _new-initializer:
.. meta::
	:description:
		New In Initializers: It is possible to use a new expression for default values of static variables, arguments and properties.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: New In Initializers
	:twitter:description: New In Initializers: It is possible to use a new expression for default values of static variables, arguments and properties
	:twitter:creator: @exakat
	:og:title: New In Initializers
	:og:type: article
	:og:description: It is possible to use a new expression for default values of static variables, arguments and properties
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/new-in-initializer.ini.html
	:og:locale: en


New In Initializers
-------------------

It is possible to use a new expression for default values of static variables, arguments and properties.

.. code-block:: php
   
   <?php
   
   function headers($a = new B()) : B {
       return $a;
   }
   
   ?>


`Documentation <https://wiki.php.net/rfc/new_in_initializers>`__

See also `PHP RFC: New in initializers <https://wiki.php.net/rfc/new_in_initializers>`_

Added in PHP 8.1+
