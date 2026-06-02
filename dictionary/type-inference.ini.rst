.. _type-inference:
.. meta::
	:description:
		Type Inference: Type inference is the ability of a tool, such as a static analyzer or the PHP engine, to deduce the type of an expression, variable, or return value without an explicit type declaration.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Type Inference
	:twitter:description: Type Inference: Type inference is the ability of a tool, such as a static analyzer or the PHP engine, to deduce the type of an expression, variable, or return value without an explicit type declaration
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Type Inference
	:og:type: article
	:og:description: Type inference is the ability of a tool, such as a static analyzer or the PHP engine, to deduce the type of an expression, variable, or return value without an explicit type declaration
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/type-inference.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Type Inference","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 01 Jun 2026 09:10:50 +0000","dateModified":"Mon, 01 Jun 2026 09:10:50 +0000","description":"Type inference is the ability of a tool, such as a static analyzer or the PHP engine, to deduce the type of an expression, variable, or return value without an explicit type declaration","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Type Inference.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Type Inference
--------------

Type inference is the ability of a tool, such as a static analyzer or the PHP engine, to deduce the type of an expression, variable, or return value without an explicit type declaration.

PHP itself does not infer types for local variables: their type can only be declared on function arguments, return values, properties, and constants. However, static analyzers perform type inference by tracking assignments, control-flow branches, and function signatures to determine what type a value holds at every point in the code.

Type inference enables early detection of type errors even in partially or untyped code. It is the engine behind gradual type checking: the tool fills the gaps left by missing annotations. PHPDoc blocks, ``@var``, ``@param``, ``@return``, are additional hints that guide inference when the code alone is ambiguous.

A classic example is narrowing: after an ``is_string()`` guard, the analyzer infers that the variable is a ``string`` inside the if-branch, removing false-positive warnings.


.. code-block:: php
   
   <?php
   
       function process(mixed $value): string {
           if (is_string($value)) {
               // type inferred as string here
               return strtoupper($value);
           }
           // type inferred as int|float|bool|array|object|null here
           return (string) $value;
       }
   
   ?>


`Documentation <https://phpstan.org/blog/what-is-type-inference>`__

See also `Type Inference in PHP using Deep Learning <https://lup.lub.lu.se/luur/download?func=downloadFile&recordOId=9021447&fileOId=9021453>`_, `PHPStan – Type Inference <https://phpstan.org/user-guide/backward-compatibility-promise#type-inference-capabilities>`_, `Psalm – Typing in Psalm <https://psalm.dev/docs/annotating_code/type_syntax/atomic_types/>`_, `Narrowing types for static analysis <https://seld.be/notes/narrowing-types-for-static-analysis/>`_ and `Type inference for PHP <https://homepages.cwi.nl/~jurgenv/theses/RuudVanDerWeijde.pdf>`_.

Related : :ref:`Type System <type>`, :ref:`Type Juggling <type-juggling>`, :ref:`Type Checking <type-checking>`, :ref:`Gradual Type Checking <gradual-type-checking>`, :ref:`Type Coverage <type-coverage>`, :ref:`Dependent Type <dependent-type>`, :ref:`Static Expression <static-expression>`, :ref:`Union Type <union-type>`, :ref:`Mixed <mixed>`, :ref:`PHPdoc <phpdoc>`
