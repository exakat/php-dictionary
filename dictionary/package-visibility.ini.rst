.. _package-visibility:
.. _internal-visibility:
.. meta::
	:description:
		Package-Level: Package-level, or internal, visibility is an access modifier that sits between ``public`` and ``private``: a member marked this way, such as Java's default, no-modifier, visibility or Kotlin's and C#'s ``internal``, is reachable from any code within the same package, module, or compiled assembly, but not from outside it.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Package-Level
	:twitter:description: Package-Level: Package-level, or internal, visibility is an access modifier that sits between ``public`` and ``private``: a member marked this way, such as Java's default, no-modifier, visibility or Kotlin's and C#'s ``internal``, is reachable from any code within the same package, module, or compiled assembly, but not from outside it
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Package-Level
	:og:type: article
	:og:description: Package-level, or internal, visibility is an access modifier that sits between ``public`` and ``private``: a member marked this way, such as Java's default, no-modifier, visibility or Kotlin's and C#'s ``internal``, is reachable from any code within the same package, module, or compiled assembly, but not from outside it
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/package-visibility.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/package-visibility.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/package-visibility.ini.html","name":"Package-Level","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 17:04:49 +0000","dateModified":"Mon, 20 Jul 2026 17:04:49 +0000","description":"Package-level, or internal, visibility is an access modifier that sits between ``public`` and ``private``: a member marked this way, such as Java's default, no-modifier, visibility or Kotlin's and C#'s ``internal``, is reachable from any code within the same package, module, or compiled assembly, but not from outside it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Package-Level.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Package-Level
-------------

Package-level, or internal, visibility is an access modifier that sits between ``public`` and ``private``: a member marked this way, such as Java's default, no-modifier, visibility or Kotlin's and C#'s ``internal``, is reachable from any code within the same package, module, or compiled assembly, but not from outside it. It lets a library share implementation details across its own files without exposing them as part of its public API.

This gives a third, coarser-grained boundary than the usual class-based ``private``/``protected`` pair: visibility scoped to a whole group of files that ship and evolve together, rather than to a single class and its subclasses.

Package level is also called internal visibility.

PHP's visibility modifiers, ``public``, ``protected``, and ``private``, are all scoped to the class hierarchy, never to a namespace, directory, or package. There is no modifier that means visible within this namespace, or within this Composer package, but not outside it; a symbol is either fully public to any caller that can reach its fully qualified name, or restricted to the declaring class and its subclasses.

.. code-block:: php
   
   <?php
   
       namespace App\Billing;
       
       class Invoice {
           // No modifier means reachable only from App\\Billing in Java;
           // in PHP, only public, protected, and private exist, all class-scoped.
           public function total(): float { /* ... */ }
       }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Access_modifiers>`__

Related : :ref:`Visibility <visibility>`, :ref:`Public Visibility <public>`, :ref:`Private Visibility <private>`, :ref:`Protected Visibility <protected>`, :ref:`Namespaces <namespace>`, :ref:`Module System with Explicit Exports <module-system>`
