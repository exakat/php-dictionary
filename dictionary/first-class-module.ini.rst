.. _first-class-module:
.. meta::
	:description:
		First-Class Module: In OCaml and a few other ML-family languages, a module can itself be treated as an ordinary value: passed as a function argument, returned from a function, stored in a data structure, or chosen at runtime among several implementations of the same module signature, using a construct such as ``(module M : SIG)``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: First-Class Module
	:twitter:description: First-Class Module: In OCaml and a few other ML-family languages, a module can itself be treated as an ordinary value: passed as a function argument, returned from a function, stored in a data structure, or chosen at runtime among several implementations of the same module signature, using a construct such as ``(module M : SIG)``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: First-Class Module
	:og:type: article
	:og:description: In OCaml and a few other ML-family languages, a module can itself be treated as an ordinary value: passed as a function argument, returned from a function, stored in a data structure, or chosen at runtime among several implementations of the same module signature, using a construct such as ``(module M : SIG)``
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/first-class-module.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/first-class-module.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/first-class-module.ini.html","name":"First-Class Module","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 08 Jul 2026 15:14:41 +0000","dateModified":"Wed, 08 Jul 2026 15:14:41 +0000","description":"In OCaml and a few other ML-family languages, a module can itself be treated as an ordinary value: passed as a function argument, returned from a function, stored in a data structure, or chosen at runtime among several implementations of the same module signature, using a construct such as ``(module M : SIG)``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/First-Class Module.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


First-Class Module
------------------

In OCaml and a few other ML-family languages, a module can itself be treated as an ordinary value: passed as a function argument, returned from a function, stored in a data structure, or chosen at runtime among several implementations of the same module signature, using a construct such as ``(module M : SIG)``. This lets an entire package of types and functions be selected or swapped dynamically, the way an object implementing an interface would be in an object-oriented language, but at the granularity of a whole module rather than a single instance.

This differs from ordinary module systems, where a module is only a static, compile-time unit of organization: something that ``import`` by name, but never hold, pass around, or compute with as a value.

PHP has no module construct at all, first-class or otherwise; a namespace is a compile-time naming device with no runtime representation and cannot be assigned to a variable, passed as an argument, or chosen dynamically. The closest PHP comes to swapping an entire package of related functionality at runtime is choosing between classes, typically through dependency injection or a factory that returns different objects implementing the same interface.

`Documentation <https://v2.ocaml.org/manual/firstclassmodules.html>`__

Related : :ref:`Module System with Explicit Exports <module-system>`, :ref:`Namespaces <namespace>`, :ref:`Interface <interface>`, :ref:`Dependency Injection <dependency-injection>`
