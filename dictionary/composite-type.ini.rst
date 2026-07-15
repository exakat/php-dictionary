.. _composite-type:
.. meta::
	:description:
		Composite Type: Composite types combine multiple types into a single type expression.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Composite Type
	:twitter:description: Composite Type: Composite types combine multiple types into a single type expression
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Composite Type
	:og:type: article
	:og:description: Composite types combine multiple types into a single type expression
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/composite-type.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/composite-type.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/composite-type.ini.html","name":"Composite Type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 05:24:51 +0000","dateModified":"Tue, 14 Jul 2026 05:24:51 +0000","description":"Composite types combine multiple types into a single type expression","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Composite Type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Composite Type
--------------

Composite types combine multiple types into a single type expression. PHP supports three forms of composite types:

+ Union types ``A|B``: the value must satisfy at least one of the listed types. Introduced in version 8.0, with ``catch`` clauses supporting multi-type syntax since PHP 7.1.
+ Intersection types ``A&B``: the value must satisfy all of the listed types simultaneously. Restricted to class and interface names. Introduced in version 8.1.
+ DNF types ``(A&B)|C``: disjunctive normal form, which combines intersections and unions. Introduced in version 8.2.

Composite types are accepted in parameter types, property types, and return types. ``catch`` clauses accept union types only. ``instanceof`` does not accept any composite form.

.. code-block:: php
   
   <?php
   
       // Union type
       function foo(int|string $id): void {}
       
       // Intersection type
       function bar(Countable&Iterator $col): void {}
       
       // DNF type
       function baz((Countable&Iterator)|null $col): void {}
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.type-system.php#language.types.type-system.composite>`__

See also `PHP type system: composite types <https://www.php.net/manual/en/language.types.type-system.php#language.types.type-system.composite>`_, `PHP RFC: Union Types 2.0 <https://wiki.php.net/rfc/union_types_v2>`_, `PHP RFC: Pure intersection types <https://wiki.php.net/rfc/pure-intersection-types>`_ and `PHP RFC: Disjunctive Normal Form Types <https://wiki.php.net/rfc/dnf_types>`_.

Related : :ref:`Union Type <union-type>`, :ref:`Intersection Type <intersection-type>`, :ref:`Disjunctive Normal Form (DNF) <dnf-type>`, :ref:`Named Type <named-type>`, :ref:`Type System <type>`, :ref:`Property Type Declaration <type-declaration-property>`, :ref:`Return Type <return-type>`, :ref:`Parameter <parameter>`

Added in PHP 8.0
