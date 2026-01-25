.. _concrete-method:
.. meta::
	:description:
		Concrete Method: A concrete method is a method that has code.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Concrete Method
	:twitter:description: Concrete Method: A concrete method is a method that has code
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Concrete Method
	:og:type: article
	:og:description: A concrete method is a method that has code
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/concrete-method.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Concrete Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 25 Jan 2026 20:46:19 +0000","dateModified":"Sun, 25 Jan 2026 20:46:19 +0000","description":"A concrete method is a method that has code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Concrete Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Concrete Method
---------------

A concrete method is a method that has code. It is usually the opposite of an ``abstract`` method.

A concrete method may be part of an abstract class or not. It may also be overwritten, in a child class, though it is not compulsory, no always the case.

Interfaces cannot have concrete methods.

.. code-block:: php
   
   <?php
   
   abstract class AbstractClass { 
       abstract function foo(); // abstract method
   
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

Related : :ref:`Final Keyword <final>`, :ref:`Concrete Class <concrete>`, :ref:`Abstract Method <abstract-method>`
