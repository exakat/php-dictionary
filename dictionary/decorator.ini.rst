.. _decorator:
.. _decoration:
.. meta::
	:description:
		Decorator Pattern: A decorator is a design pattern used to add behavior or responsibilities to objects dynamically, without altering their code.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Decorator Pattern
	:twitter:description: Decorator Pattern: A decorator is a design pattern used to add behavior or responsibilities to objects dynamically, without altering their code
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Decorator Pattern
	:og:type: article
	:og:description: A decorator is a design pattern used to add behavior or responsibilities to objects dynamically, without altering their code
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/decorator.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Decorator Pattern","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 16 Jan 2026 17:01:22 +0000","dateModified":"Fri, 16 Jan 2026 17:01:22 +0000","description":"A decorator is a design pattern used to add behavior or responsibilities to objects dynamically, without altering their code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Decorator Pattern.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Decorator Pattern
-----------------

A decorator is a design pattern used to add behavior or responsibilities to objects dynamically, without altering their code. Decorators are often used to extend the functionality of classes or objects by wrapping them in additional classes that provide the desired functionality.

.. code-block:: php
   
   <?php
   
   interface Coffee {
       function cost();
   }
   
   class SimpleCoffee implements Coffee {
       public function cost() {
           return 5;
       }
   }
   
   class MilkDecorator implements Coffee {
       protected $coffee;
   
       public function __construct(Coffee $coffee) {
           $this->coffee = $coffee;
       }
   
       public function cost() {
           return $this->coffee->cost() + 2;
       }
   }
   
   ?>


`Documentation <https://refactoring.guru/design-patterns/decorator/php/example>`__

See also https://rekalogika.dev/doctrine-collections-decorator/cookbook/decorating-members, https://muhammedsari.me/hands-on-decoration

Related packages : `zbateson/stream-decorators <https://packagist.org/packages/zbateson/stream-decorators>`_
