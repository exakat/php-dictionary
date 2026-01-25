.. _relative-types:
.. meta::
	:description:
		Relative Types: Relative types are types that are not explicit, but relative to the current class.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Relative Types
	:twitter:description: Relative Types: Relative types are types that are not explicit, but relative to the current class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Relative Types
	:og:type: article
	:og:description: Relative types are types that are not explicit, but relative to the current class
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/relative-types.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Relative Types","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 22 Jan 2026 13:19:02 +0000","dateModified":"Thu, 22 Jan 2026 13:19:02 +0000","description":"Relative types are types that are not explicit, but relative to the current class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Relative Types.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Relative Types
--------------

Relative types are types that are not explicit, but relative to the current class. There are three relative types : 

+ static : this represents the current calling class. It is important when the class is not directly called, but one of its children is. 
+ self : this represents the current class, at compilation time. 
+ parent : this represents the first available parent of the current class. It usually is the direct parent, but may skip classes when the requested resource is not available, as in method calls.

.. code-block:: php
   
   <?php
   
   class x extends y {
   	function foo() : self {}
   	function hoo() : static {}
   	function ioo() : parent {}	
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.relative-class-types.php>`__

Related : :ref:`Scalar Types <scalar-type>`, :ref:`Union Type <union-type>`, :ref:`Literal Types <literal-types>`, :ref:`Intersection Type <intersection-type>`, :ref:`Disjunctive Normal Form (DNF) <dnf-type>`
