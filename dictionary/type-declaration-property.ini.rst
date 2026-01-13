.. _type-declaration-property:
.. meta::
	:description:
		Property Type Declaration: Type declaration property, also known as typed properties, is a feature introduced in PHP 7.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Property Type Declaration
	:twitter:description: Property Type Declaration: Type declaration property, also known as typed properties, is a feature introduced in PHP 7
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Property Type Declaration
	:og:type: article
	:og:description: Type declaration property, also known as typed properties, is a feature introduced in PHP 7
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/type-declaration-property.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Property Type Declaration","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"Type declaration property, also known as typed properties, is a feature introduced in PHP 7","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Property Type Declaration.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Property Type Declaration
-------------------------

Type declaration property, also known as typed properties, is a feature introduced in PHP 7.4 that allows to specify the type of a class property. 

With type declaration properties, the type of a property is explicitly defined, ensuring that only values of the specified type can be assigned to that property. This helps enforce type safety and prevents accidental assignments of incompatible values.

Typed properties support any type format : simple, union, intersectional or DNF. 


.. code-block:: php
   
   <?php
   
   class x {
       private Typed $y;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.declarations.php>`__

Related : :ref:`Type System <type>`, :ref:`Union Type <union-type>`, :ref:`Intersection Type <intersection-type>`, :ref:`Disjunctive Normal Form (DNF) <dnf-type>`

Added in PHP 7.4
