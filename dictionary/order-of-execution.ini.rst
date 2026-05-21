.. _order-of-execution:
.. _execution order:
.. meta::
	:description:
		Order Of Execution: PHP processes a file in two steps before executing it.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Order Of Execution
	:twitter:description: Order Of Execution: PHP processes a file in two steps before executing it
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Order Of Execution
	:og:type: article
	:og:description: PHP processes a file in two steps before executing it
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/order-of-execution.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Order Of Execution","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 21 May 2026 09:32:20 +0000","dateModified":"Thu, 21 May 2026 09:32:20 +0000","description":"PHP processes a file in two steps before executing it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Order Of Execution.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Order Of Execution
------------------

PHP processes a file in two steps before executing it. In the first step, the engine parses and compiles the source into opcodes. During this compilation step, unconditionally declared top-level functions and classes are registered early (early binding), making them available to the whole file regardless of their textual position. In the second step, the opcodes are executed sequentially, top to bottom.

As a result, the rules for what must be defined before use depend on the kind of entity:

Functions: a function declared unconditionally at the top level is early-bound and can be called before its definition in the file. A function declared inside a conditional block or inside another function is only available after that declaration is reached at runtime.

Classes: an unconditionally declared top-level class is also early-bound. A conditionally declared class must be defined before use, or PHP will attempt to load it via autoloading. Autoloading gives classes a second chance that functions do not have.

Constants: ``const`` declarations at the top level are evaluated at compile time and are available immediately. ``define()`` calls are runtime statements and only take effect when execution reaches them.

Variables: PHP has no variable hoisting at all. A variable must be assigned before it is read. Reading an uninitialized variable produces a notice and yields ``null``.

Included files: code from an ``include`` or ``require`` runs at the point where the statement is reached, not before. Any definitions in the included file become available from that point onward.

.. code-block:: php
   
   <?php
   
   // Works: top-level function, early-bound by the compiler
   foo();
   function foo() { echo 'foo'; }
   
   // Fails at runtime: function is inside a conditional, not early-bound
   // bar(); // Fatal error: call to undefined function
   if (true) {
       function bar() { echo 'bar'; }
   }
   bar(); // works only after this point
   
   // Works: const is compile-time
   echo MY_CONST;
   const MY_CONST = 42;
   
   // Fails: define() is a runtime call
   // echo MY_RT_CONST; // undefined constant
   define('MY_RT_CONST', 99);
   echo MY_RT_CONST; // works only after this point
   
   // Classes: unconditional top-level class is early-bound
   $obj = new Foo();
   class Foo {}
   
   // Classes: conditional class requires autoload or prior declaration
   if (true) {
       class Bar {}
   }
   $obj2 = new Bar(); // works only after this point
   
   ?>


`Documentation <https://www.npopov.com/2021/10/20/Early-binding-in-PHP.html>`__

See also `Early binding in PHP <https://www.npopov.com/2021/10/20/Early-binding-in-PHP.html>`_.

Related : :ref:`Linting <lint>`, :ref:`Compile <compile>`, :ref:`Class Hoisting <class-hoisting>`, :ref:`Class Autoloading <autoload>`, :ref:`Constants <constant>`, :ref:`include <include>`, :ref:`Global Code <global-code>`
