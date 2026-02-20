.. _method-compatibility:
.. meta::
	:description:
		Method Compatibility: Method compatibility means that when a class overrides a method, from a parent class or interface, the new method must keep a compatible signature.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Method Compatibility
	:twitter:description: Method Compatibility: Method compatibility means that when a class overrides a method, from a parent class or interface, the new method must keep a compatible signature
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Method Compatibility
	:og:type: article
	:og:description: Method compatibility means that when a class overrides a method, from a parent class or interface, the new method must keep a compatible signature
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/method-compatibility.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Method Compatibility","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 18 Feb 2026 20:24:23 +0000","dateModified":"Wed, 18 Feb 2026 20:24:23 +0000","description":"Method compatibility means that when a class overrides a method, from a parent class or interface, the new method must keep a compatible signature","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Method Compatibility.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Method Compatibility
--------------------

Method compatibility means that when a class overrides a method, from a parent class or interface, the new method must keep a compatible signature.

In short, the child method must:

+ Have the same or wider visibility (e.g. public stays public, private becomes protected)
+ Accept the same parameter types (or more general ones)
+ Return the same type (or a more specific one)
+ Not require more mandatory parameters

If it’s incompatible, PHP throws a fatal error.

.. code-block:: php
   
   <?php
   
   class X {
       function foo(int $a): void {}
       function goo(int $a): X {}
       function hoo(int $a): string {}
   }
   
   class Y extends X {
       // This is compatible, as it is identical to the parent method
       function foo(int $a): void {}
       
       // This is compatible, yet not identical
       // the parameter is more general
       // the return type is more precise
       function goo(int|string $a): Y {}
       
       // This is not compatible with the parent's method signature
       function hoo(int $a): int {}
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.basic.php#language.oop.lsp>`__

Related : :ref:`Method <method>`
