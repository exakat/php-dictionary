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
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Backed Enum","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 15 Feb 2025 00:13:14 +0000","dateModified":"Sat, 15 Feb 2025 00:13:14 +0000","description":"Backed enums are enumeration which a string or integer equivalent for each of its cases","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Backed Enum.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


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
