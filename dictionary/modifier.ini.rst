.. _modifier:
.. _visibility-modifier:
.. meta::
	:description:
		Modifier: A modifier is a keyword that changes the behavior or properties of a class element, such as property, method, or constant.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Modifier
	:twitter:description: Modifier: A modifier is a keyword that changes the behavior or properties of a class element, such as property, method, or constant
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Modifier
	:og:type: article
	:og:description: A modifier is a keyword that changes the behavior or properties of a class element, such as property, method, or constant
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/modifier.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/modifier.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/modifier.ini.html","name":"Modifier","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 14:23:15 +0000","dateModified":"Thu, 16 Jul 2026 14:23:15 +0000","description":"A modifier is a keyword that changes the behavior or properties of a class element, such as property, method, or constant","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Modifier.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Modifier
--------

A modifier is a keyword that changes the behavior or properties of a class element, such as property, method, or constant. PHP supports several categories of modifiers:

Visibility modifiers control access to class members:

+ ``public``: accessible from anywhere, by default
+ ``protected``: accessible within the class and its subclasses
+ ``private``: accessible only within the declaring class

Other modifiers:

+ ``static``: belongs to the class itself rather than instances
+ ``abstract``: declares a class or method that must be implemented by subclasses
+ ``final``: prevents a class from being extended or a method from being overridden
+ ``readonly``: makes a property immutable after initialization
+ ``readonly class``: makes all properties readonly

Modifiers are essential for implementing encapsulation, polymorphism, and other OOP principles. They enforce design constraints at the language level, improving code safety and clarity.

.. code-block:: php
   
   <?php
   
       abstract class Shape {
           protected float $area;
   
           abstract public function calculate(): float;
   
           final public function describe(): string {
               return 'This shape has an area of ' . $this->calculate();
           }
       }
   
       class Circle extends Shape {
           public function __construct(
               private readonly float $radius
           ) {}
   
           public function calculate(): float {
               return pi() * $this->radius  2;
           }
       }
   
       $c = new Circle(5);
       echo $c->describe();
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.php>`__

See also `PHP Visibility <https://www.php.net/manual/en/language.oop5.php#language.oop5.visibility>`_ and `PHP Class Keywords <https://www.php.net/manual/en/language.oop5.php#language.oop5.basic.class>`_.

Related : :ref:`Visibility <visibility>`, :ref:`Private Visibility <private>`, :ref:`Protected Visibility <protected>`, :ref:`Public Visibility <public>`, :ref:`static <static>`, :ref:`Abstract Keyword <abstract>`, :ref:`Final Keyword <final>`, :ref:`Readonly <readonly>`, :ref:`Data Hiding <data-hiding>`, :ref:`Encapsulation <encapsulation>`, :ref:`OOP (Object Oriented Programming) <oop>`, :ref:`Properties <property>`, :ref:`Method <method>`, :ref:`Static Constant <class-constant>`
