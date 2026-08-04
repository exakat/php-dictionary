.. _control-flow:
.. meta::
	:description:
		Control Flow: Control flow structures direct the way PHP executes the statements.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Control Flow
	:twitter:description: Control Flow: Control flow structures direct the way PHP executes the statements
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Control Flow
	:og:type: article
	:og:description: Control flow structures direct the way PHP executes the statements
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/control-flow.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/control-flow.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/control-flow.ini.html","name":"Control Flow","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 11:14:57 +0000","dateModified":"Tue, 04 Aug 2026 11:14:57 +0000","description":"Control flow structures direct the way PHP executes the statements","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Control Flow.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Control Flow
------------

Control flow structures direct the way PHP executes the statements. For example, a loop repeats the same statements several times; a goto instruction jumps to another part of the code; a if-then statement applies a block of code or another, depending on a condition.

+ if
+ else
+ elseif/else if
+ Alternative syntax for control structures
+ while
+ do...while
+ for
+ foreach
+ break
+ continue
+ switch
+ match
+ declare
+ return
+ ``require()``
+ ``include()``
+ ``require_once()``
+ ``include_once()``
+ goto

Control flow structures can't be called dynamically: they have to be hardcoded, or nested in a closure or other function.

Each of these constructs answers a different question about the order of execution: conditionals, ``if``, ``elseif``, ``match``, choose between branches; loops, ``while``, ``do...while``, ``for``, ``foreach``, repeat a block until a condition changes; jump statements, ``break``, ``continue``, ``return``, ``goto``, leave the current structure early or transfer control elsewhere; and the file-inclusion constructs, ``require``, ``include``, and their ``_once`` variants, bring another script's control flow into the current one.

Understanding control flow is central to reading any PHP program, since it determines which statements actually run for a given input, in what order, and how many times. Poorly structured control flow, such as deeply nested conditionals or unbounded loops, is a common source of bugs and a frequent target of static analysis and refactoring.

.. code-block:: php
   
   <?php
   
       if ($a === 1) { 
           $b = 2;
       } else {
           $b = 3;
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.control-structures.php>`__

See also `PHP flow control <https://zetcode.com/php/flowcontrol/>`_ and `PHP Control Flow <https://www.codeguage.com/v1/courses/php/control-flow>`_.

Related : :ref:`Statement <statement>`, :ref:`Loops <loop>`, :ref:`Semicolon ; <semicolon>`, :ref:`If Then Else <if-then>`, :ref:`While <while>`, :ref:`Do While <do-while>`, :ref:`For <for>`, :ref:`foreach() <foreach>`, :ref:`Break <break>`, :ref:`Continue <continue>`, :ref:`Switch <switch>`, :ref:`Match <match>`, :ref:`declare() <declare>`, :ref:`Return <return>`, :ref:`Inclusions <inclusion>`, :ref:`Goto <goto>`, :ref:`Jump <jump>`
