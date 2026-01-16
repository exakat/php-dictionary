.. _enum-case:
.. meta::
	:description:
		Enumeration Case: An Enumeration may have zero or more case definitions, with no maximum.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Enumeration Case
	:twitter:description: Enumeration Case: An Enumeration may have zero or more case definitions, with no maximum
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Enumeration Case
	:og:type: article
	:og:description: An Enumeration may have zero or more case definitions, with no maximum
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/enum-case.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Enumeration Case","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 16 Jan 2026 18:29:07 +0000","dateModified":"Fri, 16 Jan 2026 18:29:07 +0000","description":"An Enumeration may have zero or more case definitions, with no maximum","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Enumeration Case.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Enumeration Case
----------------

An Enumeration may have zero or more case definitions, with no maximum. A zero-case enum is syntactically valid, if rather useless.

Cases must have distinct names. Also, these names must be distinct with the constant names, since the syntax to reach them is the same.

Enumeration cases must be distinct: this is enforced by the engine with the unit enumerations, but not with the backed enumeration. It is possible to give identical values to the cases, and this will be blocked as soon as the enumeration is loaded by PHP.

.. code-block:: php
   
   <?php
   
   enum Suit
   {
       case Hearts;
       case Diamonds;
       case Clubs;
       case Spades;
   }
   
   enum DayOfTheWeek: int
   {
       case Monday = 1;
       case Tuesday = 2;
       case Wednesday = 3;
       case Thursday = 4;
       case Friday = 4;    // This is an error, that lints but won't execute
       case Saturday = 6;
       case Sunday = 7;
       
       const string MONDAY = 'monday'; // constant MUST have distinct names from other constants and cases. 
                                       // names are case sensitive, so this one is valid.
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.enumerations.basics.php>`__

Related : :ref:`Enumeration (enum) <enum>`, :ref:`Case <case>`, :ref:`Linting <linting>`

Added in PHP 8.1+
