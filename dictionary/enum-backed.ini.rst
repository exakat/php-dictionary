.. _enum-backed:
.. meta::
	:description:
		Backed Enumeration: Backed enumerations are enumerations whose cases have a built-in scalar equivalent.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Backed Enumeration
	:twitter:description: Backed Enumeration: Backed enumerations are enumerations whose cases have a built-in scalar equivalent
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Backed Enumeration
	:og:type: article
	:og:description: Backed enumerations are enumerations whose cases have a built-in scalar equivalent
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/enum-backed.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Backed Enumeration","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"Backed enumerations are enumerations whose cases have a built-in scalar equivalent","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Backed Enumeration.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


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

Related : :ref:`Enumeration (enum) <enum>`

Added in PHP 8.1+
