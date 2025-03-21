.. _polymorphism:
.. meta::
	:description:
		Polymorphism: Polymorphism is a fundamental concept in object-oriented programming (OOP).
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Polymorphism
	:twitter:description: Polymorphism: Polymorphism is a fundamental concept in object-oriented programming (OOP)
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Polymorphism
	:og:type: article
	:og:description: Polymorphism is a fundamental concept in object-oriented programming (OOP)
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/polymorphism.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Polymorphism","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"Polymorphism is a fundamental concept in object-oriented programming (OOP)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Polymorphism.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Polymorphism
------------

Polymorphism is a fundamental concept in object-oriented programming (OOP). It allows different classes to be treated as instances of a common base class, interface, or abstract class, and it allow to write code that works with these objects without needing to know their specific types. 

Polymorphism is achieved through method overriding and interfaces. It is possible to inherit from several parent classes, as long as they inherit from each other. On the other hand, implementing interfaces can be arbitrary chosen for any class.

.. code-block:: php
   
   <?php
   
   class Object {}
   
   interface hasMedian {}
   
   interface hasInscribedCircle {}
   
   class Triangle extends Object implements hasInscribedCircle, hasMedian {}
   
   class Square extends Object implements hasInscribedCircle {}
   
   class Pentagon extends Object {}
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.inheritance.php>`__

See also `PHP Polymorphism Explained ( By Examples ) <https://www.scaler.com/topics/php-tutorial/polymorphism-in-php/>`_, `Polymorphism in PHP <https://phpenthusiast.com/object-oriented-php-tutorials/polymorphism-in-php>`_, `Polymorphism in PHP With Example <https://mohasin-dev.medium.com/polymorphism-in-php-with-example-83de1792c89d>`_
