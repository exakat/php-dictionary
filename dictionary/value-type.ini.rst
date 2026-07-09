.. _value-type:
.. _stack-allocation:
.. meta::
	:description:
		Value Type: A value type, as in C#, Swift, or Go, is copied in full whenever it is assigned or passed to a function, rather than shared by reference.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Value Type
	:twitter:description: Value Type: A value type, as in C#, Swift, or Go, is copied in full whenever it is assigned or passed to a function, rather than shared by reference
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Value Type
	:og:type: article
	:og:description: A value type, as in C#, Swift, or Go, is copied in full whenever it is assigned or passed to a function, rather than shared by reference
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/value-type.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Value Type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 09:07:30 +0000","dateModified":"Thu, 09 Jul 2026 09:07:30 +0000","description":"A value type, as in C#, Swift, or Go, is copied in full whenever it is assigned or passed to a function, rather than shared by reference","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Value Type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Value Type
----------

A value type, as in C#, Swift, or Go, is copied in full whenever it is assigned or passed to a function, rather than shared by reference; two variables holding a value type never alias the same storage. Value types are typically small enough, and lack the identity-based behavior of objects, that the compiler can allocate them on the stack, or inline within another structure, and reclaim them automatically when they go out of scope, without involving the garbage collector or heap allocator at all.

This differs from a reference type, where the variable holds a pointer to shared, heap-allocated storage, and copying the variable only copies the pointer, leaving both variables observing the same underlying data.

Value type are related to stack allocation, though they are not the same.

PHP has exactly two kinds of values with respect to this distinction: scalars, like ``int``, ``float``, ``bool``, ``string``, and arrays behave like value types, copied on assignment, aka cow, courtesy of copy-on-write so the actual duplication is deferred until a mutation would otherwise be observable; every ``object``, without exception, is a reference type, allocated on the heap and shared by reference whenever assigned or passed. PHP gives the programmer no way to declare a class as a value type, and no way to request stack allocation for anything: allocation strategy is entirely up to the engine and is never a choice exposed in the language.

.. code-block:: php
   
   <?php
   
       $a = [1, 2, 3];
       $b = $a;      // copy-on-write: logically a full copy, value semantics
       $b[] = 4;
       echo count($a); // 3, unaffected
       
       class Box { public int $n = 1; }
       $x = new Box();
       $y = $x;      // reference copy: both variables share the same object
       $y->n = 2;
       echo $x->n;   // 2, objects are never value types in PHP
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Value_type_and_reference_type>`__

See also `Go Type System Overview <https://go101.org/article/type-system-overview.html>`_.

Related : :ref:`Struct Type <struct-type>`, :ref:`Immutable <immutable>`, :ref:`Move Semantics <move-semantics>`, :ref:`Array, [] <array>`, :ref:`Copy On Write (COW) <copy-on-write>`
