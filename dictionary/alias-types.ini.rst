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
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Alias Types
	:og:type: article
	:og:description: An alias type is a short name for several types at once
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/alias-types.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Unsupported operand types: %s + %s.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Unsupported operand types: %s + %s.html","name":"Alias Types","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 15 Jan 2026 11:04:51 +0000","dateModified":"Thu, 15 Jan 2026 11:04:51 +0000","description":"An alias type is a short name for several types at once","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Alias Types.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


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
