.. _enum-backed:
.. meta::
	:description:
		Backed Enumeration: Backed enumerations are enumerations whose cases have a built-in scalar equivalent.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Backed Enumeration
	:twitter:description: Backed Enumeration: Backed enumerations are enumerations whose cases have a built-in scalar equivalent
	:twitter:creator: @exakat
	:og:title: Backed Enumeration
	:og:type: article
	:og:description: Backed enumerations are enumerations whose cases have a built-in scalar equivalent
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/enum-backed.ini.html
	:og:locale: en


Backed Enumeration
------------------

Backed enumerations are enumerations whose cases have a built-in scalar equivalent. The scalars may be integers or strings.

There are methods to convert a scalar value to an enumeration's case, notably from() and tryFrom(). On the other way, the cases have a property called ``value``.


.. code-block:: php
   
   <?php
   enum Suit: string
   {
       case Hearts   = 'H';
       case Diamonds = 'D';
       case Clubs    = 'C';
       case Spades   = 'S';
   }
   ?>


`Documentation <https://www.php.net/manual/en/language.enumerations.backed.php>`__

Related : :ref:`Enumeration <enum>`

Added in PHP 8.1+
