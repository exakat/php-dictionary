.. _move-semantics:
.. meta::
	:description:
		Move Semantics: Move semantics, central to C++11 and Rust, let a value's underlying resources be transferred from a source object to a destination object instead of copied, when the source is about to be discarded anyway, such as a temporary or a variable passed by value into a function.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Move Semantics
	:twitter:description: Move Semantics: Move semantics, central to C++11 and Rust, let a value's underlying resources be transferred from a source object to a destination object instead of copied, when the source is about to be discarded anyway, such as a temporary or a variable passed by value into a function
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Move Semantics
	:og:type: article
	:og:description: Move semantics, central to C++11 and Rust, let a value's underlying resources be transferred from a source object to a destination object instead of copied, when the source is about to be discarded anyway, such as a temporary or a variable passed by value into a function
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/move-semantics.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/move-semantics.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/move-semantics.ini.html","name":"Move Semantics","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 14:24:06 +0000","dateModified":"Thu, 16 Jul 2026 14:24:06 +0000","description":"Move semantics, central to C++11 and Rust, let a value's underlying resources be transferred from a source object to a destination object instead of copied, when the source is about to be discarded anyway, such as a temporary or a variable passed by value into a function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Move Semantics.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Move Semantics
--------------

Move semantics, central to C++11 and Rust, let a value's underlying resources be transferred from a source object to a destination object instead of copied, when the source is about to be discarded anyway, such as a temporary or a variable passed by value into a function. In C++, this is implemented through rvalue references and move constructors invoked automatically by the compiler; in Rust, moving is the default behavior of assignment itself, and the source variable becomes invalid and unusable afterward, enforced by the borrow checker.

Moving avoids the cost of a deep copy for resources such as heap buffers, file handles, or large data structures, while still leaving the destination fully responsible for the resource's cleanup.

PHP has no move semantics. Objects are always passed and assigned by reference to the same underlying zval, which the engine reference-counts and only copies-on-write when a mutation would otherwise be observed through more than one reference; the source variable remains valid and usable after assignment. There is no syntax to transfer exclusive ownership of an object's internal resources to another variable while invalidating the original.

.. code-block:: php
   
   <?php
   
       $a = new SplStack();
       $a->push(1);
       $b = $a; // reference copy, not a move: $a remains fully valid and usable
       $b->push(2);
       echo $a->count(); // 2, both variables refer to the same object
   
   ?>


`Documentation <https://www.geeksforgeeks.org/cpp/stdmove-in-utility-in-c-move-semantics-move-constructors-and-move-assignment-operators/>`__

Related : :ref:`Ownership <borrow-checking>`, :ref:`__clone() Method <-__clone>`, :ref:`Value Type <value-type>`
