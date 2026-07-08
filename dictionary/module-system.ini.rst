.. _module-system:
.. meta::
	:description:
		Module System with Explicit Exports: A module system with explicit exports treats each source file, or each declared module, as a unit with a controlled boundary: only the names it explicitly exports, such as JavaScript's ``export function foo()`` or Python's ``__all__`` list, are visible to code that imports the module.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Module System with Explicit Exports
	:twitter:description: Module System with Explicit Exports: A module system with explicit exports treats each source file, or each declared module, as a unit with a controlled boundary: only the names it explicitly exports, such as JavaScript's ``export function foo()`` or Python's ``__all__`` list, are visible to code that imports the module
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Module System with Explicit Exports
	:og:type: article
	:og:description: A module system with explicit exports treats each source file, or each declared module, as a unit with a controlled boundary: only the names it explicitly exports, such as JavaScript's ``export function foo()`` or Python's ``__all__`` list, are visible to code that imports the module
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/module-system.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Module System with Explicit Exports","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 08 Jul 2026 15:18:49 +0000","dateModified":"Wed, 08 Jul 2026 15:18:49 +0000","description":"A module system with explicit exports treats each source file, or each declared module, as a unit with a controlled boundary: only the names it explicitly exports, such as JavaScript's ``export function foo()`` or Python's ``__all__`` list, are visible to code that imports the module","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Module System with Explicit Exports.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Module System with Explicit Exports
-----------------------------------

A module system with explicit exports treats each source file, or each declared module, as a unit with a controlled boundary: only the names it explicitly exports, such as JavaScript's ``export function foo()`` or Python's ``__all__`` list, are visible to code that imports the module; everything else defined inside stays private to it, without needing a separate ``private`` keyword on each symbol. OCaml and Rust go further, using module signatures (``.mli`` files, ``pub`` visibility) to state exactly what a module offers, independently of how it is implemented internally.

This gives every file a hard, compiler-checked encapsulation boundary by default: an unexported helper function simply cannot be reached from outside, no matter how it is imported.

PHP's namespaces group names to avoid collisions, but they draw no boundary around a file's contents: every top-level function, class, or constant declared in a file is globally reachable through its fully qualified name as soon as the file is loaded, whether or not the author intended it to be used from outside. Restricting visibility is done member-by-member, with ``private``/``protected`` inside a class, not at the level of the file or namespace as a whole, so there is no PHP equivalent of an unexported, module-private top-level function.

.. code-block:: php
   
   <?php
   
       namespace App\Utils;
       
       // Nothing marks this as internal: any file can still call App\Utils\helper().
       function helper(): void { /* ... */ }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Modular_programming>`__

Related : :ref:`Namespaces <namespace>`, :ref:`Module <module>`, :ref:`Visibility <visibility>`, :ref:`Package-Level <package-visibility>`, :ref:`First-Class Module <first-class-module>`
