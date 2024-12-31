.. _boolean:
.. _bool:
.. meta::
	:description:
		Boolean: A boolean is a value that is either true or false.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Boolean
	:twitter:description: Boolean: A boolean is a value that is either true or false
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Boolean
	:og:type: article
	:og:description: A boolean is a value that is either true or false
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/boolean.ini.html
	:og:locale: en


Boolean
-------

A boolean is a value that is either true or false. 

PHP's boolean are constants. They may be prefixed by ``\\``, and are case-insensitive. They can't be redefined in namespaces.

There are rules to convert any data to a boolean. 

Booleans have a related scalar type : ``bool``. There is also a special ``false`` type. 



.. code-block:: php
   
   <?php
   
   $a = True;
   $b = \FALSE;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.boolean.php>`__

Related : :ref:`Type Juggling <type-juggling>`, :ref:`Scalar Types <scalar-type>`
