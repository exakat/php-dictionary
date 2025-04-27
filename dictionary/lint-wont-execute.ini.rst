.. _lint-wont-execute:
.. meta::
	:description:
		Lint, Won't Execute: ``Lint, won't execute`` is a special state of the code, where the source can be parsed, but cannot be executed.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Lint, Won't Execute
	:twitter:description: Lint, Won't Execute: ``Lint, won't execute`` is a special state of the code, where the source can be parsed, but cannot be executed
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Lint, Won't Execute
	:og:type: article
	:og:description: ``Lint, won't execute`` is a special state of the code, where the source can be parsed, but cannot be executed
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/lint-wont-execute.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Lint, Won't Execute","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Mar 2025 15:10:46 +0000","dateModified":"Wed, 05 Mar 2025 15:10:46 +0000","description":"``Lint, won't execute`` is a special state of the code, where the source can be parsed, but cannot be executed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Lint, Won't Execute.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Lint, Won't Execute
-------------------

``Lint, won't execute`` is a special state of the code, where the source can be parsed, but cannot be executed.

This covers a range of problems, from very obvious to hidden syntaxes. They depends on the moment where PHP applies its checks.

Some situations are depend on the inclusion, autoloading and, generally, the order of execution of the code. 


.. code-block:: php
   
   <?php
   
   function foo() {
       clone 1; // obviously fails when executed
   }
   
   function goo(int $a = A) {}
   const A = 'abc';
   
   // fails when called without arguments
   foo(1); // OK
   foo();  // KO
   
   ?>

