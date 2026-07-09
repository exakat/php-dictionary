.. _nominal-type:
.. _nominal-typing:
.. meta::
	:description:
		Nominal Type: Nominal typing is a type-compatibility rule under which two types are considered compatible only if they are explicitly declared as such, by name, through inheritance or interface implementation, regardless of whether they happen to share the same shape.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Nominal Type
	:twitter:description: Nominal Type: Nominal typing is a type-compatibility rule under which two types are considered compatible only if they are explicitly declared as such, by name, through inheritance or interface implementation, regardless of whether they happen to share the same shape
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Nominal Type
	:og:type: article
	:og:description: Nominal typing is a type-compatibility rule under which two types are considered compatible only if they are explicitly declared as such, by name, through inheritance or interface implementation, regardless of whether they happen to share the same shape
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/nominal-type.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Nominal Type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 09:55:06 +0000","dateModified":"Thu, 09 Jul 2026 09:55:06 +0000","description":"Nominal typing is a type-compatibility rule under which two types are considered compatible only if they are explicitly declared as such, by name, through inheritance or interface implementation, regardless of whether they happen to share the same shape","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Nominal Type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Nominal Type
------------

Nominal typing is a type-compatibility rule under which two types are considered compatible only if they are explicitly declared as such, by name, through inheritance or interface implementation, regardless of whether they happen to share the same shape. It is the opposite of structural typing, where compatibility is decided by shape alone, without any explicit declaration.

PHP's type system is nominal: a class only satisfies a type if it is declared with ``extends`` or ``implements``, even when another, unrelated class already defines every required method with a compatible signature. PHP performs no structural compatibility check between classes; the closest it comes to structural typing is duck typing at runtime.

Nominal typing is the norm among mainstream class-based languages, such as PHP, Java, C# and C++. It favors explicitness and intent over flexibility: a class cannot accidentally satisfy an interface it was never meant to implement.

.. code-block:: php
   
   <?php
   
       interface Greeter {
           public function greet(): string;
       }
   
       class Person implements Greeter { // explicit, nominal declaration
           public function greet(): string {
               return 'Hello';
           }
       }
   
       function sayHello(Greeter $g) {
           echo $g->greet();
       }
   
       sayHello(new Person()); // OK, Person is nominally declared as a Greeter
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Nominal_type_system>`__

See also `Nominal type system <https://en.wikipedia.org/wiki/Nominal_type_system>`_.

Related : :ref:`Structural Typing <structural-typing>`, :ref:`Type System <type-system>`, :ref:`Interface <interface>`, :ref:`Type Checking <type-checking>`, :ref:`Polymorphism <polymorphism>`, :ref:`Duck Typing <duck-typing>`
