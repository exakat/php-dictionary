.. _base-class:
.. _superclass:
.. _parent-class:
.. meta::
	:description:
		Base Class: A base class is a class that serves as the root of an inheritance hierarchy.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Base Class
	:twitter:description: Base Class: A base class is a class that serves as the root of an inheritance hierarchy
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Base Class
	:og:type: article
	:og:description: A base class is a class that serves as the root of an inheritance hierarchy
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/base-class.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Base Class","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 08:57:24 +0000","dateModified":"Thu, 09 Jul 2026 08:57:24 +0000","description":"A base class is a class that serves as the root of an inheritance hierarchy","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Base Class.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Base Class
----------

A base class is a class that serves as the root of an inheritance hierarchy. Other classes extend it to inherit its properties and methods.

A base class may be concrete, meaning it can be instantiated directly, or it may be abstract, preventing direct instantiation and forcing subclasses to implement its abstract methods.

A PHP class may only extend one base class, but it may implement multiple interfaces.

There are native base classes, like ``Exception`` and ``Error``, from which all exceptions and errors inherit.

.. code-block:: php
   
   <?php
   
       class Animal {
           public function breathe(): string {
               return 'inhale/exhale';
           }
       }
       
       class Dog extends Animal {
           public function speak(): string {
               return 'woof';
           }
       }
       
       $dog = new Dog();
       echo $dog->breathe(); // inherited from base class
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.inheritance.php>`__

Related : :ref:`Inheritance <inheritance>`, :ref:`extends <extends>`, :ref:`parent <parent>`, :ref:`Abstract Class <abstract-class>`, :ref:`Child Class <child-class>`, :ref:`Subclass <subclass>`, :ref:`Class <class>`, :ref:`Interface <interface>`, :ref:`Base <base>`
