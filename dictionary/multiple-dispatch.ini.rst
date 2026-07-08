.. _multiple-dispatch:
.. _multimethod:
.. meta::
	:description:
		Multiple Dispatch: Multiple dispatch, as found in Common Lisp (CLOS), Julia, and Dylan, selects which implementation of a function to run based on the runtime types of all of its arguments, not just the first one, the way ordinary object-oriented method calls do.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Multiple Dispatch
	:twitter:description: Multiple Dispatch: Multiple dispatch, as found in Common Lisp (CLOS), Julia, and Dylan, selects which implementation of a function to run based on the runtime types of all of its arguments, not just the first one, the way ordinary object-oriented method calls do
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Multiple Dispatch
	:og:type: article
	:og:description: Multiple dispatch, as found in Common Lisp (CLOS), Julia, and Dylan, selects which implementation of a function to run based on the runtime types of all of its arguments, not just the first one, the way ordinary object-oriented method calls do
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/multiple-dispatch.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Multiple Dispatch","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 08 Jul 2026 15:36:06 +0000","dateModified":"Wed, 08 Jul 2026 15:36:06 +0000","description":"Multiple dispatch, as found in Common Lisp (CLOS), Julia, and Dylan, selects which implementation of a function to run based on the runtime types of all of its arguments, not just the first one, the way ordinary object-oriented method calls do","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Multiple Dispatch.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Multiple Dispatch
-----------------

Multiple dispatch, as found in Common Lisp (CLOS), Julia, and Dylan, selects which implementation of a function to run based on the runtime types of all of its arguments, not just the first one, the way ordinary object-oriented method calls do. A function defined for ``(Circle, Rectangle)`` and again for ``(Circle, Circle)`` will resolve to a different body depending on the runtime type of every argument passed, and this resolution happens at the call site, at runtime.

This differs from single dispatch, where a method call ``$shape->collidesWith($other)`` only considers the runtime type of ``$shape``; the type of ``$other`` is fixed by its declared parameter type and requires manual branching, such as ``instanceof`` checks or the double-dispatch visitor pattern, to react differently per combination.

PHP performs single dispatch only: overloaded function declarations do not exist, and ``function collidesWith(Circle $a, Rectangle $b)`` cannot coexist with ``function collidesWith(Circle $a, Circle $b)`` as two resolvable overloads. Choosing behavior based on the combined runtime types of several arguments must be written by hand with ``match``, ``instanceof``, or the visitor pattern.

.. code-block:: php
   
   <?php
       
       // PHP has no true overloading: this second declaration is a fatal error.
       function collide(Circle $a, Circle $b) { /* ... */ }
       function collide(Circle $a, Rectangle $b) { /* ... */ } // Fatal error: redeclaration
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Multiple_dispatch>`__

Related : :ref:`Overloading <overloading>`, :ref:`Method Overloading <method-overloading>`, :ref:`Polymorphism <polymorphism>`, :ref:`instanceof <instanceof>`
