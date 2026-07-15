.. _type-declaration-property:
.. meta::
	:description:
		Property Type Declaration: Type declaration property, also known as typed properties, is a feature introduced in version 7.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Property Type Declaration
	:twitter:description: Property Type Declaration: Type declaration property, also known as typed properties, is a feature introduced in version 7
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Property Type Declaration
	:og:type: article
	:og:description: Type declaration property, also known as typed properties, is a feature introduced in version 7
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/type-declaration-property.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/type-declaration-property.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/type-declaration-property.ini.html","name":"Property Type Declaration","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 30 Jun 2026 09:04:50 +0000","dateModified":"Tue, 30 Jun 2026 09:04:50 +0000","description":"Type declaration property, also known as typed properties, is a feature introduced in version 7","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Property Type Declaration.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Property Type Declaration
-------------------------

Type declaration property, also known as typed properties, is a feature introduced in version 7.4 that allows specifying the type of a class property.

With typed properties, the type of a property is explicitly defined, ensuring that only values of the specified type can be assigned to that property. This helps enforce type safety and prevents accidental assignments of incompatible values.

Typed properties support any type format: simple, union, intersection or DNF. Nullable types are expressed with a leading ``?``, such as ``?string``.

A typed property that has not been initialized before it is read triggers an ``Error`` exception. Typed properties must be explicitly assigned before use, either in the constructor or at the declaration site.

Since PHP 8.1, typed properties may also be declared ``readonly``, which prevents any assignment after the initial one.


.. code-block:: php
   
   <?php
   
       class X {
           private Typed $y;
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.declarations.php>`__

Related : :ref:`Type System <type>`, :ref:`Union Type <union-type>`, :ref:`Intersection Type <intersection-type>`, :ref:`Disjunctive Normal Form (DNF) <dnf-type>`, :ref:`Readonly <readonly>`, :ref:`Nullable <nullable>`, :ref:`Properties <property>`, :ref:`Uninitialized <uninitialized>`, :ref:`TypeError <typeerror>`, :ref:`Return Type <return-type>`, :ref:`Promoted Properties <promoted-property>`, :ref:`Property Hook <property-hook>`, :ref:`Asymmetric Visibility <asymmetric-visibility>`, :ref:`static <static>`, :ref:`Var <var>`

Added in PHP 7.4
