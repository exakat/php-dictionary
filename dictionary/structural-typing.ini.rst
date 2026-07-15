.. _structural-typing:
.. meta::
	:description:
		Structural Typing: Structural typing is a type-compatibility rule under which a value satisfies a type purely because it exposes the required shape: the same methods and properties, with compatible signatures, regardless of its declared name or inheritance chain.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Structural Typing
	:twitter:description: Structural Typing: Structural typing is a type-compatibility rule under which a value satisfies a type purely because it exposes the required shape: the same methods and properties, with compatible signatures, regardless of its declared name or inheritance chain
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Structural Typing
	:og:type: article
	:og:description: Structural typing is a type-compatibility rule under which a value satisfies a type purely because it exposes the required shape: the same methods and properties, with compatible signatures, regardless of its declared name or inheritance chain
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/structural-typing.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/structural-typing.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/structural-typing.ini.html","name":"Structural Typing","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jul 2026 09:14:47 +0000","dateModified":"Fri, 10 Jul 2026 09:14:47 +0000","description":"Structural typing is a type-compatibility rule under which a value satisfies a type purely because it exposes the required shape: the same methods and properties, with compatible signatures, regardless of its declared name or inheritance chain","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Structural Typing.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Structural Typing
-----------------

Structural typing is a type-compatibility rule under which a value satisfies a type purely because it exposes the required shape: the same methods and properties, with compatible signatures, regardless of its declared name or inheritance chain. It contrasts with nominal typing, where compatibility is decided by an explicit declaration, such as ``implements`` or ``extends``.

Languages such as TypeScript, Go, and OCaml use structural typing: any object or struct that happens to define the required methods satisfies an interface, whether or not it was ever declared to implement it.

PHP's type system is nominal: a class only satisfies an interface if it explicitly declares ``implements InterfaceName``, even when it already defines every required method with a compatible signature. PHP performs no structural compatibility check between classes. The closest PHP comes to structural typing is duck typing at runtime, where code calls a method on any object without checking its declared type, and lets a fatal error occur if the method turns out to be missing.

.. code-block:: php
   
   <?php
   
       interface Greeter {
           public function greet(): string;
       }
       
       class Person {
           // Same shape as Greeter, but does not implement it.
           public function greet(): string {
               return 'Hello';
           }
       }
       
       function sayHello(Greeter $g) {
           echo $g->greet();
       }
       
       sayHello(new Person()); // Fatal error: Person does not implement Greeter
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Structural_type_system>`__

Related : :ref:`Interface <interface>`, :ref:`Type System <type-system>`, :ref:`Type Checking <type-checking>`, :ref:`Polymorphism <polymorphism>`
