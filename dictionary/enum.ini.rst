.. _enum:
.. _enumeration:
.. _enumerations:
.. meta::
	:description:
		Enumeration (enum): Enumerations are a restricting layer on top of classes and class constants, intended to provide a way to define a closed set of possible values for a type.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Enumeration (enum)
	:twitter:description: Enumeration (enum): Enumerations are a restricting layer on top of classes and class constants, intended to provide a way to define a closed set of possible values for a type
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Enumeration (enum)
	:og:type: article
	:og:description: Enumerations are a restricting layer on top of classes and class constants, intended to provide a way to define a closed set of possible values for a type
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/enum.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Enumeration (enum)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 28 Jan 2025 15:14:39 +0000","dateModified":"Tue, 28 Jan 2025 15:14:39 +0000","description":"Enumerations are a restricting layer on top of classes and class constants, intended to provide a way to define a closed set of possible values for a type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Enumeration (enum).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Enumeration (enum)
------------------

Enumerations are a restricting layer on top of classes and class constants, intended to provide a way to define a closed set of possible values for a type.

.. code-block:: php
   
   <?php
   
   enum Suit
   {
       case Hearts;
       case Diamonds;
       case Clubs;
       case Spades;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.enumerations.php>`__

See also `Enumerations in PHP <https://www.delftstack.com/howto/php/php-enum/>`_, `5 Pitfalls of Upgrade to Native PHP Enums and How to Avoid Them <https://tomasvotruba.com/blog/five-pitfalls-of-upgrade-to-native-php-enums-and-how-to-avoid-them/>`_, `On the use of enums <https://peakd.com/hive-168588/@crell/on-the-use-of-enums>`_, `Enum in PHP — Real life examples <https://medium.com/@danielarcher/enum-in-php-real-life-examples-a596ba421f3c>`_

Related : :ref:`Enumeration Case <enum-case>`, :ref:`Collection <collection>`, :ref:`Class Interface Trait Enumeration (CITE) <cite>`

Related packages : `myclabs/php-enum <https://packagist.org/packages/myclabs/php-enum>`_, `dasprid/enum <https://packagist.org/packages/dasprid/enum>`_, `spatie/enum <https://packagist.org/packages/spatie/enum>`_

Added in PHP 8.1+
