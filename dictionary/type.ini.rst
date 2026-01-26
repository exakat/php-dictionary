.. _type:
.. _typehint:
.. meta::
	:description:
		Type System: Type declarations can be added to function arguments, return values, and, as of PHP 7.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Type System
	:twitter:description: Type System: Type declarations can be added to function arguments, return values, and, as of PHP 7
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Type System
	:og:type: article
	:og:description: Type declarations can be added to function arguments, return values, and, as of PHP 7
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/type.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Type System","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 26 Jan 2026 13:37:14 +0000","dateModified":"Mon, 26 Jan 2026 13:37:14 +0000","description":"Type declarations can be added to function arguments, return values, and, as of PHP 7","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Type System.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Type System
-----------

Type declarations can be added to function arguments, return values, and, as of PHP 7.4.0, class properties. They ensure that the value is of the specified type at call time, otherwise a TypeError is thrown. 

.. code-block:: php
   
   <?php
   
   function foo(A $a) : void {}
   
   class x {
       private A $p;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.declarations.php>`__

See also `Explore Your Types <https://backendtea.com/post/explore-your-types/>`_, `Narrowing types for static analysis <https://seld.be/notes/narrowing-types-for-static-analysis/>`_

Related : :ref:`Disjunctive Normal Form (DNF) <dnf-type>`, :ref:`False <false>`, :ref:`Mixed <mixed>`, :ref:`Never Type <never>`, :ref:`Nullable <nullable>`, :ref:`Object <object>`, :ref:`Properties <property>`, :ref:`Return Type <return-type>`, :ref:`strict_types <strict_types>`, :ref:`True <true>`, :ref:`Property Type Declaration <type-declaration-property>`, :ref:`Typed Property <typed-property>`, :ref:`Intersection Type <intersection-type>`, :ref:`Object Type <object-type>`, :ref:`Scalar Types <scalar-type>`, :ref:`Special Types <special-typehint>`, :ref:`Union Type <union-type>`, :ref:`Variables <variable>`, :ref:`Autowiring <autowiring>`, :ref:`Propagation <propagation>`, :ref:`Pseudo-type <pseudo-type>`, :ref:`Type Coverage <type-coverage>`

Added in PHP 7.0
