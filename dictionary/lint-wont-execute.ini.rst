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

