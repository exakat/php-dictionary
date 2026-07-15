.. _polymorphism:
.. meta::
	:description:
		Polymorphism: Polymorphism is a fundamental concept in object-oriented programming, or OOP.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Polymorphism
	:twitter:description: Polymorphism: Polymorphism is a fundamental concept in object-oriented programming, or OOP
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Polymorphism
	:og:type: article
	:og:description: Polymorphism is a fundamental concept in object-oriented programming, or OOP
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/polymorphism.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/polymorphism.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/polymorphism.ini.html","name":"Polymorphism","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 08 Jul 2026 16:27:16 +0000","dateModified":"Wed, 08 Jul 2026 16:27:16 +0000","description":"Polymorphism is a fundamental concept in object-oriented programming, or OOP","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Polymorphism.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Polymorphism
------------

Polymorphism is a fundamental concept in object-oriented programming, or OOP. It allows different classes to be treated as instances of a common base class, interface, or abstract class, and it allow to write code that works with these objects without needing to know their specific types. 

Polymorphism is achieved through method overriding and interfaces. It is possible to inherit from several parent classes, as long as they inherit from each other. On the other hand, implementing interfaces can be arbitrary chosen for any class and their children.

.. code-block:: php
   
   <?php
   
       class Object {}
       
       // the interfaces are empty for better readability
       interface hasMedian {}
       
       interface hasInscribedCircle {}
       
       class Triangle extends Object implements hasInscribedCircle, hasMedian {}
       
       class Square extends Object implements hasInscribedCircle {}
       
       class Pentagon extends Object {}
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.inheritance.php>`__

See also `PHP Polymorphism Explained ( By Examples ) <https://www.scaler.com/topics/php-tutorial/polymorphism-in-php/>`_ and `Polymorphism in PHP With Example <https://mohasin-dev.medium.com/polymorphism-in-php-with-example-83de1792c89d>`_.

Related : :ref:`Interface <interface>`, :ref:`Class <class>`, :ref:`Inheritance <inheritance>`, :ref:`Trait <trait>`, :ref:`Generics <generics>`, :ref:`instanceof <instanceof>`, :ref:`Intersection Type <intersection-type>`, :ref:`is_a() <is_a>`, :ref:`OOP (Object Oriented Programming) <oop>`, :ref:`Monomorphization <monomorphization>`, :ref:`Existential Type <existential-type>`, :ref:`Higher-Kinded Type <higher-kinded-type>`, :ref:`Mixin <mixin>`, :ref:`Row Polymorphism <row-polymorphism>`, :ref:`Sealed Class <sealed-class>`, :ref:`Multiple Dispatch <multiple-dispatch>`, :ref:`Pattern <pattern>`, :ref:`Structural Typing <structural-typing>`, :ref:`Type Class <type-class>`
