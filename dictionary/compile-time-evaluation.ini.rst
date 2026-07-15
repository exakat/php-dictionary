.. _compile-time-evaluation:
.. _constexpr:
.. meta::
	:description:
		Compile-time Evaluation: Compile-time evaluation is the ability of a compiler to execute expressions or functions during compilation, embedding the computed result directly in the compiled output rather than deferring it to runtime.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Compile-time Evaluation
	:twitter:description: Compile-time Evaluation: Compile-time evaluation is the ability of a compiler to execute expressions or functions during compilation, embedding the computed result directly in the compiled output rather than deferring it to runtime
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Compile-time Evaluation
	:og:type: article
	:og:description: Compile-time evaluation is the ability of a compiler to execute expressions or functions during compilation, embedding the computed result directly in the compiled output rather than deferring it to runtime
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/compile-time-evaluation.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/compile-time-evaluation.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/compile-time-evaluation.ini.html","name":"Compile-time Evaluation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 04 Jul 2026 08:07:39 +0000","dateModified":"Sat, 04 Jul 2026 08:07:39 +0000","description":"Compile-time evaluation is the ability of a compiler to execute expressions or functions during compilation, embedding the computed result directly in the compiled output rather than deferring it to runtime","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Compile-time Evaluation.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Compile-time Evaluation
-----------------------

Compile-time evaluation is the ability of a compiler to execute expressions or functions during compilation, embedding the computed result directly in the compiled output rather than deferring it to runtime. C++ ``constexpr`` (C++11+) allows functions and variables to be evaluated at compile time when their inputs are compile-time constants. Zig's ``comptime`` keyword forces evaluation at compile time. Rust evaluates ``const fn`` calls in constant contexts. D calls the equivalent feature CTFE (Compile-Time Function Evaluation). In all cases, the intent is to move computation earlier, eliminating runtime overhead and enabling richer static guarantees.

PHP is an interpreted language. PHP source code is compiled to opcodes on every request (or cached by OPcache), but there is no ahead-of-time compilation phase that evaluates user-defined functions. PHP does perform limited compile-time optimisations:

+ Constant folding: simple arithmetic and string concatenation on literal values, like ``60 * 60``, ``'foo' . 'bar'`` is folded to a single value by the parser/optimiser before the opcode is emitted.
+ ``const`` declarations: scalar constant values are resolved at compile time. Constant expressions composed of other constants ``A * B`` are also folded.
+ OPcache: caches the compiled opcode representation, avoiding repeated parsing, but does not evaluate user functions at cache time.
+ JIT, PHP 8.0+: the Just-In-Time compiler can optimise hot paths at runtime, but this is runtime specialisation, not compile-time evaluation.

No PHP mechanism allows a user-defined function to be annotated as evaluable at compile time, and no result of such evaluation can be used as a class constant, a default parameter value, or an attribute argument.

.. code-block:: php
   
   <?php
   
       // PHP folds constant arithmetic expressions at compile time (parser level).
       const SECONDS_PER_MINUTE = 60;
       const SECONDS_PER_HOUR   = SECONDS_PER_MINUTE * 60;   // folded to 3600
       const SECONDS_PER_DAY    = SECONDS_PER_HOUR   * 24;   // folded to 86400
   
       // Enum backed values are constant expressions: also folded.
       enum Permission: int {
           case Read    = 1 << 0;   // 1
           case Write   = 1 << 1;   // 2
           case Execute = 1 << 2;   // 4
       }
   
       // The following is NOT possible in PHP: functions cannot be constexpr:
       //
       //   constexpr function factorial(int $n): int {
       //       return $n <= 1 ? 1 : $n * factorial($n - 1);
       //   }
       //   const FACT_10 = factorial(10); // evaluated at compile time
       //
       // In PHP, factorial(10) is always evaluated at runtime.
       function factorial(int $n): int {
           return $n <= 1 ? 1 : $n * factorial($n - 1);
       }
   
       echo factorial(10); // computed at runtime every call
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Compile-time_function_execution>`__

See also `C++ constexpr <https://en.cppreference.com/w/cpp/language/constexpr>`_, `Zig comptime <https://ziglang.org/documentation/master/#comptime>`_, `PHP OPcache <https://www.php.net/manual/en/book.opcache.php>`_ and `PHP JIT <https://www.php.net/manual/en/opcache.configuration.php#ini.opcache.jit>`_.

Related : :ref:`Const <const>`, :ref:`Constants <constant>`, :ref:`Opcache <opcache>`, :ref:`Just In Time (JIT) <jit>`, :ref:`Template Metaprogramming (TMP) <template-metaprogramming>`, :ref:`Metaprogramming <metaprogramming>`, :ref:`Constant Expression <constant-expression>`, :ref:`Enumeration (enum) <enum>`
