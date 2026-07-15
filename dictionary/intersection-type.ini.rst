.. _intersection-type:
.. _intersectional:
.. _intersectional-type:
.. meta::
	:description:
		Intersection Type: Intersection types, also called intersectional types, is a specification syntax where several types act together as a single type.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Intersection Type
	:twitter:description: Intersection Type: Intersection types, also called intersectional types, is a specification syntax where several types act together as a single type
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Intersection Type
	:og:type: article
	:og:description: Intersection types, also called intersectional types, is a specification syntax where several types act together as a single type
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/intersection-type.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/intersection-type.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/intersection-type.ini.html","name":"Intersection Type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 21 Jun 2026 09:41:50 +0000","dateModified":"Sun, 21 Jun 2026 09:41:50 +0000","description":"Intersection types, also called intersectional types, is a specification syntax where several types act together as a single type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Intersection Type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Intersection Type
-----------------

Intersection types, also called intersectional types, is a specification syntax where several types act together as a single type. The individual types are separated with the ``&`` operator.

The value typed with an intersection type must satisfy all the types at the same time.

Intersection types only accept class and interface types: scalars (``int``, ``string``, ``bool``, etc.), ``null``, ``false``, ``true``, and ``void`` are not allowed, as a single value cannot simultaneously be of two scalar types. Redundant types are also rejected (e.g., ``A&A``).

Intersection types work well with polymorphism: an object that implements multiple interfaces satisfies an intersection type naturally.

PHP 8.2 introduced Disjunctive Normal Form (DNF) types, which combine intersection and union types, such as ``(A&B)|null``.

.. code-block:: php
   
   <?php
   
   class x {
       // Property is of type A, B and C at the same time. 
       // Two of them have to be interfaces.
       private A & B & C $property;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.type-system.php#language.types.type-system.composite.intersection>`__

See also `How the New Intersection Types in PHP 8.1 Give You More Flexibility <https://www.howtogeek.com/devops/how-the-new-intersection-types-in-php-8-1-give-you-more-flexibility/>`_.

Related : :ref:`Type System <type>`, :ref:`Composite Type <composite-type>`, :ref:`Disjunctive Normal Form (DNF) <dnf-type>`, :ref:`Named Type <named-type>`, :ref:`Relative Types <relative-types>`, :ref:`Property Type Declaration <type-declaration-property>`, :ref:`Union Type <union-type>`, :ref:`Interface <interface>`, :ref:`Polymorphism <polymorphism>`, :ref:`Nullable <nullable>`, :ref:`Return Type <return-type>`, :ref:`TypeError <typeerror>`

Added in PHP 8.1
