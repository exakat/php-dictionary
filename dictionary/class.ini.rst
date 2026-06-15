.. _class:
.. _classes:
.. meta::
	:description:
		Class: Basic class definitions begin with the keyword class, followed by a class name, followed by a pair of curly braces which enclose the definitions of the properties and methods belonging to the class.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Class
	:twitter:description: Class: Basic class definitions begin with the keyword class, followed by a class name, followed by a pair of curly braces which enclose the definitions of the properties and methods belonging to the class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Class
	:og:type: article
	:og:description: Basic class definitions begin with the keyword class, followed by a class name, followed by a pair of curly braces which enclose the definitions of the properties and methods belonging to the class
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/class.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Class","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Basic class definitions begin with the keyword class, followed by a class name, followed by a pair of curly braces which enclose the definitions of the properties and methods belonging to the class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Class.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Class
-----

Basic class definitions begin with the keyword class, followed by a class name, followed by a pair of curly braces which enclose the definitions of the properties and methods belonging to the class.

A class name may be validated with the following regex: ``^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$``; and by avoiding a list of PHP keywords, such as ``namespace``, ``class``, ``interface``, etc.

.. code-block:: php
   
   <?php
   
   class X {
       const CONSTANT = 1;
       
       private $property = 2;
       
       function method() {
           /// and more
       }
   
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.basic.php>`__

See also `How to use PHP classes for object-oriented pro­gram­ming <https://www.ionos.com/digitalguide/websites/web-development/php-classes/>`_.

Related : :ref:`Readonly <readonly>`, :ref:`Class Invasion <class-invasion>`, :ref:`Const <const>`, :ref:`Class Getter Method <getter>`, :ref:`implements <implements>`, :ref:`Inheritance <inheritance>`, :ref:`Method <method>`, :ref:`Class Setter Method <setter>`, :ref:`Trait <trait>`, :ref:`Class Wither Method <wither>`, :ref:`Structure <structure>`, :ref:`Class Interface Trait Enumeration (CITE) <cite>`, :ref:`$this <$this>`, :ref:`Lazy Objects <lazy-objects>`, :ref:`Polymorphism <polymorphism>`, :ref:`Promoted Properties <promoted-property>`, :ref:`Existence <existence>`, :ref:`Phptoken <phptoken>`, :ref:`Reflection <reflection>`, :ref:`Undefined <undefined>`, :ref:`Base Class <base-class>`, :ref:`instance <instance>`, :ref:`is_a() <is_a>`, :ref:`Naming Conflict <naming-conflict>`, :ref:`Non-static <non-static>`

Added in PHP 4.0+
