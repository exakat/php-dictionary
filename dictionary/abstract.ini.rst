.. _abstract:
.. meta::
	:description:
		Abstract Keyword: PHP has abstract classes, properties and methods.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Abstract Keyword
	:twitter:description: Abstract Keyword: PHP has abstract classes, properties and methods
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Abstract Keyword
	:og:type: article
	:og:description: PHP has abstract classes, properties and methods
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/abstract.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Abstract Keyword","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 22 Jan 2026 07:17:32 +0000","dateModified":"Thu, 22 Jan 2026 07:17:32 +0000","description":"PHP has abstract classes, properties and methods","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Abstract Keyword.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Abstract Keyword
----------------

PHP has abstract classes, properties and methods. Classes defined as abstract cannot be instantiated, and any class that contains at least one abstract method, or property hook, must also be abstract.

.. code-block:: php
   
   <?php
   abstract class AbstractClass
   {
       // Force Extending class to define this method
       abstract protected function getValue();
       abstract protected function prefixValue($prefix);
   
       // abstract property
       abstract public $p { get; }
   
       // Common method
       public function printOut() {
           print $this->getValue() . \n;
       }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.abstract.php>`__

See also https://ashallendesign.co.uk/blog/interfaces-vs-abstract-classes-in-php, https://phpenthusiast.com/object-oriented-php-tutorials/abstract-classes-and-methods, https://www.otsch.codes/blog/testing-abstract-classes-in-php-using-anonymous-classes, https://matthewdaly.co.uk/blog/2023/08/13/why-nearly-every-php-class-you-write-should-be-abstract-or-final/

Related : :ref:`Final Keyword <final>`, :ref:`Abstraction <abstraction>`, :ref:`Concrete Class <concrete>`, :ref:`Object <object>`, :ref:`Overriding <overriding>`
