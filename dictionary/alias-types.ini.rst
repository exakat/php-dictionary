.. _alias-types:
.. _type-alias:
.. meta::
	:description:
		Alias Types: An alias type is a short name for several types at once.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Alias Types
	:twitter:description: Alias Types: An alias type is a short name for several types at once
	:twitter:creator: @exakat
	:og:title: Alias Types
	:og:type: article
	:og:description: An alias type is a short name for several types at once
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/alias-types.ini.html
	:og:locale: en


Alias Types
-----------

An alias type is a short name for several types at once. Under the hood, alias types are union type. 

PHP offers several native alias types, such as ``iterable``, which represents ``array | Traversable``. Alias type are not available for customisation. 

The same rules applies to alias types than other types : for example, ``array | iterable`` produces a 'Duplicate type array is redundant' error.


.. code-block:: php
   
   <?php
   
   function foo(iterable $a) {
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.literal.php>`__

Related : :ref:`Scalar Types <scalar-typehint>`, :ref:`Union Type <union-type>`, :ref:`Type System <typehint>`

Added in PHP 8.0
