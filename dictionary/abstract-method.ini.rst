.. _abstract-method:
.. meta::
	:description:
		Abstract Method: An abstract method is a method that has no code.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Abstract Method
	:twitter:description: Abstract Method: An abstract method is a method that has no code
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Abstract Method
	:og:type: article
	:og:description: An abstract method is a method that has no code
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/abstract-method.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Abstract Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 06 Jan 2026 21:22:36 +0000","dateModified":"Tue, 06 Jan 2026 21:22:36 +0000","description":"An abstract method is a method that has no code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Abstract Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Abstract Method
---------------

An abstract method is a method that has no code. It also has the ``abstract`` option.

An abstract method serves as a blueprint for other methods: it host class is intended to be subclassed. 

Interfaces only have abstract methods.

.. code-block:: php
   
   <?php
   
   abstract class AbstractClass { 
       function foo(); // abstract method
   
       function goo() {
           return 1;
       } // concrete method
   }
   
   class ConcreteClass extends AbstractClass{
   
       function foo() {
           return 2;
       } // concrete method
   
       // No need to redefine the concrete methods.
       // Yet, it is still possible
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.abstract.php>`__

See also https://medium.com/@Amir_M4A/in-the-world-of-php-programming-there-are-several-key-concepts-that-developers-need-to-understand-b2ed1916287f

Related : :ref:`Final Keyword <final>`, :ref:`Concrete Class <concrete>`, :ref:`Concrete Method <concrete-method>`
