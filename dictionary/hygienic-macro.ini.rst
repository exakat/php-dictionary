.. _hygienic-macro:
.. _hygienic-macros:
.. meta::
	:description:
		Hygienic Macro: A hygienic macro system is one in which macro expansions cannot accidentally capture or shadow variables from the calling scope.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Hygienic Macro
	:twitter:description: Hygienic Macro: A hygienic macro system is one in which macro expansions cannot accidentally capture or shadow variables from the calling scope
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Hygienic Macro
	:og:type: article
	:og:description: A hygienic macro system is one in which macro expansions cannot accidentally capture or shadow variables from the calling scope
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/hygienic-macro.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/hygienic-macro.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/hygienic-macro.ini.html","name":"Hygienic Macro","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 08:50:04 +0000","dateModified":"Thu, 09 Jul 2026 08:50:04 +0000","description":"A hygienic macro system is one in which macro expansions cannot accidentally capture or shadow variables from the calling scope","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Hygienic Macro.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Hygienic Macro
--------------

A hygienic macro system is one in which macro expansions cannot accidentally capture or shadow variables from the calling scope. In a non-hygienic macro system, such as C preprocessor macros, a macro that introduces a temporary variable risks clashing with a variable of the same name in the code that invokes it. Hygienic macros, pioneered in Scheme's ``syntax-rules`` and later adopted by Rust's ``macro_rules!``, solve this by tracking the lexical scope of every identifier introduced by the macro, renaming variables as needed during expansion so that caller and macro identifiers remain isolated.

Other languages with hygienic or near-hygienic macro systems include Racket, Elixir with ``defmacro`` with quoted ASTs, Julia with ``@macro`` with hygiene by default, and Nim  and its ``macro`` statements.

PHP has no macro system of any kind, hygienic or otherwise. PHP source code is parsed and executed directly; there is no macro-expansion phase. The closest available mechanisms are:

+ ``eval()``: executes a string as PHP code, but operates at runtime on already-parsed text; no variable hygiene is guaranteed.
+ Token-level preprocessing: tools such as ``yay``, a PHP macro preprocessor, run before the PHP parser and perform textual or token-level substitutions, but provide no hygiene guarantees.
+ ``nikic/php-parser``: allows full AST rewriting via a userland visitor, enabling macro-like transformations with explicit scope tracking that the author must implement manually.
+ Functions passed by reference: the most common PHP idiom for ``swap``-style macros is a plain function with ``&`` parameters, which requires an explicit call rather than inline expansion.

.. code-block:: php
   
   <?php
   
       // PHP has no inline macros. Functions are the closest alternative,
       // but they carry call overhead and cannot expand inline in the caller's scope.
   
       // A swap macro in Rust would expand inline with no variable-capture risk:
       //   let (x, y) = (y, x);   // generated hygienically by the macro
       //
       // In PHP the only option is a function with reference parameters:
       function swap(mixed &$a, mixed &$b): void {
           [$a, $b] = [$b, $a];
       }
   
       $x = 1;
       $y = 2;
       swap($x, $y);
       echo "$x $y"; // 2 1
   
       // Token-level macro preprocessing (yay library, run before PHP parses the file):
       //   macro {swap(·a, ·b)} >> {[·a, ·b] = [·b, ·a];}
       // This expands textually: no hygiene: a local variable named $a in the macro
       // definition could collide with a caller variable also named $a.
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Hygienic_macro>`__

See also `Rust macro_rules! <https://doc.rust-lang.org/reference/macros-by-example.html>`_, `yay: PHP macro preprocessor <https://github.com/marcioAlmada/yay>`_ and `nikic/php-parser <https://github.com/nikic/PHP-Parser>`_.

Related : :ref:`Macro <macro>`, :ref:`Metaprogramming <metaprogramming>`, :ref:`Homoiconicity <homoiconicity>`, :ref:`Eval() <eval>`, :ref:`Token <token>`, :ref:`Code Generation <code-generation>`, :ref:`Abstract Syntactic Tree (AST) <ast>`

Related packages : `marcioalmada/yay <https://packagist.org/packages/marcioalmada/yay>`_
