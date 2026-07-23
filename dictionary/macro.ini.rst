.. _macro:
.. _macros:
.. meta::
	:description:
		Macro: A macro is a rule or pattern that maps a source text or syntax fragment to a replacement, which is then substituted before or during compilation.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Macro
	:twitter:description: Macro: A macro is a rule or pattern that maps a source text or syntax fragment to a replacement, which is then substituted before or during compilation
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Macro
	:og:type: article
	:og:description: A macro is a rule or pattern that maps a source text or syntax fragment to a replacement, which is then substituted before or during compilation
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/macro.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/macro.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/macro.ini.html","name":"Macro","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 23 Jul 2026 13:44:16 +0000","dateModified":"Thu, 23 Jul 2026 13:44:16 +0000","description":"A macro is a rule or pattern that maps a source text or syntax fragment to a replacement, which is then substituted before or during compilation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Macro.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Macro
-----

A macro is a rule or pattern that maps a source text or syntax fragment to a replacement, which is then substituted before or during compilation. Macros operate at the level of source text, for example the C preprocessor, tokens, for example Rust ``macro_rules!``, or AST nodes, asin Lisp and Elixir, and allow programmers to extend the syntax of a language or eliminate repetitive code without the overhead of a function call.

Two main families of macros exist:

+ Textual macros non-hygienic: the C preprocessor ``#define`` replaces a name with a literal text fragment. Variable names inside the macro can accidentally shadow names in the calling scope, leading to subtle bugs.
+ Hygienic macros: as in Scheme's ``syntax-rules``, Rust's ``macro_rules!``, and Elixir's ``defmacro``, each identifier introduced by the macro is automatically renamed to prevent accidental capture of caller variables.

PHP has no native macro system. PHP source code is parsed and executed directly by the Zend Engine; there is no macro-expansion phase. The mechanisms that approximate macros are:

+ ``eval()``: executes a PHP string at runtime, but provides no hygiene and operates after parsing.
+ Token-level preprocessors such as ``yay`` run before the PHP parser and perform textual or token-level substitutions, but offer no hygiene guarantees.
+ ``nikic/php-parser`` allows full AST rewriting via a visitor pattern, enabling macro-like transformations with explicit, manually implemented scope tracking.
+ Compile-time constants ``const`` and class constants serve a narrow, value-substitution role similar to object-like C macros, but without the generality of function-like macros.

See also hygienic macro for the hygiene-specific aspects of macro systems.

.. code-block:: php
   
   <?php
   
       // PHP has no macro expansion. Constants are the closest equivalent
       // to simple object-like C macros (#define MAX 100).
       const MAX_RETRIES = 3;
   
       // For function-like macros, PHP uses ordinary functions.
       // No inline expansion; call overhead applies.
       function clamp(int $value, int $min, int $max): int {
           return max($min, min($max, $value));
       }
   
       // Token-level macro with the yay preprocessor (external tool, run before PHP):
       //   macro {clamp(·v, ·lo, ·hi)} >> {max(·lo, min(·hi, ·v))}
       // This expands inline but is not hygienic.
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Macro_(computer_science)>`__

See also `yay: PHP macro preprocessor <https://github.com/marcioAlmada/yay>`_ and `nikic/php-parser <https://github.com/nikic/PHP-Parser>`_.

Related : :ref:`Hygienic Macro <hygienic-macro>`, :ref:`Metaprogramming <metaprogramming>`, :ref:`Homoiconicity <homoiconicity>`, :ref:`Eval() <eval>`, :ref:`Token <token>`, :ref:`Code Generation <code-generation>`, :ref:`Const <const>`

Related packages : `marcioalmada/yay <https://packagist.org/packages/marcioalmada/yay>`_
