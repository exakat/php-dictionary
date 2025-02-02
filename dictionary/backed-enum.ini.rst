.. _backed-enum:
.. meta::
	:description:
		Backed Enum: Backed enums are enumeration which a string or integer equivalent for each of its cases.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Backed Enum
	:twitter:description: Backed Enum: Backed enums are enumeration which a string or integer equivalent for each of its cases
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Backed Enum
	:og:type: article
	:og:description: Backed enums are enumeration which a string or integer equivalent for each of its cases
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/backed-enum.ini.html
	:og:locale: en


Backed Enum
-----------

Backed enums are enumeration which a string or integer equivalent for each of its cases. Each equivalent, like the cases names, must be distinct. They also must be of the type of the backed enumeration: not type juggling on numeric strings or integers happens.

Non backed enumerations are called unbacked enumerations.

.. code-block:: php
   
   <?php
   
   enum Suits: string {
       case HEART = 'heart';
       case CLUB = 'club';
       case DIAMOND = 'diamond';
       case SPADE = 'spade';
   }
   
   enum Prime_digits: int {
       case TWO = 2;
       case THREE = 3;
       case FIVE = 5;
       case SEVEN = 7;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.enumerations.php>`__

Related : :ref:`Enumeration (enum) <enum>`, :ref:`Unbacked Enum <unbacked-enum>`

Added in PHP 8.1
