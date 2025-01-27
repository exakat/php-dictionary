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


Class
-----

Basic class definitions begin with the keyword class, followed by a class name, followed by a pair of curly braces which enclose the definitions of the properties and methods belonging to the class.

.. code-block:: php
   
   <?php
   
   class x {
       const CONSTANT = 1;
       
       private $property = 2;
       
       function method() {
           /// and more
       }
   
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.basic.php>`__

Related : :ref:`Readonly <readonly>`, :ref:`Class Invasion <class-invasion>`, :ref:`Const <const>`, :ref:`Class Getter Method <getter>`, :ref:`implements <implements>`, :ref:`Inheritance <inheritance>`, :ref:`Method <method>`, :ref:`Class Setter Method <setter>`, :ref:`Trait <trait>`, :ref:`Class Wither Method <wither>`, :ref:`Structure <structure>`, :ref:`Class Interface Trait Enumeration (CITE) <cite>`

Added in PHP 4.0+
