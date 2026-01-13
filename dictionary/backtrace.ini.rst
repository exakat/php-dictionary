.. _backtrace:
.. meta::
	:description:
		Backtrace: A backtrace, in PHP and in other programming language, is a snapshot of the callstack at a specific point in the program’s execution.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Backtrace
	:twitter:description: Backtrace: A backtrace, in PHP and in other programming language, is a snapshot of the callstack at a specific point in the program’s execution
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Backtrace
	:og:type: article
	:og:description: A backtrace, in PHP and in other programming language, is a snapshot of the callstack at a specific point in the program’s execution
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/backtrace.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/The backtick (`) operator is deprecated, use shell_exec() instead.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/The backtick (`) operator is deprecated, use shell_exec() instead.html","name":"Backtrace","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 29 Aug 2025 20:07:58 +0000","dateModified":"Fri, 29 Aug 2025 20:07:58 +0000","description":"A backtrace, in PHP and in other programming language, is a snapshot of the callstack at a specific point in the program\u2019s execution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Backtrace.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Backtrace
---------

A backtrace, in PHP and in other programming language, is a snapshot of the callstack at a specific point in the program’s execution. This is typically needed when an error or exception occurs.

.. code-block:: php
   
   <?php
   function foo() {
       goo();
   }
   
   function goo() {
       debug_print_backtrace();
   }
   
   foo();
   
   /**
   #0 /in/a4eQc(3): goo()
   #1 /in/a4eQc(10): foo()
   */
   
   ?>


`Documentation <https://www.php.net/manual/en/function.debug-backtrace.php>`__

See also https://www.php.net/manual/en/function.debug-backtrace.php, https://www.php.net/manual/en/function.debug-print-backtrace.php

Related packages : `spatie/backtrace <https://packagist.org/packages/spatie/backtrace>`_, `axy/backtrace <https://packagist.org/packages/axy/backtrace>`_
