.. _side-effect:
.. meta::
	:description:
		Side Effect: A side effect refers to any change in the state of a program or system that occurs when a function or expression is evaluated, beyond simply returning a value.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Side Effect
	:twitter:description: Side Effect: A side effect refers to any change in the state of a program or system that occurs when a function or expression is evaluated, beyond simply returning a value
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Side Effect
	:og:type: article
	:og:description: A side effect refers to any change in the state of a program or system that occurs when a function or expression is evaluated, beyond simply returning a value
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/side-effect.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/The backtick (`) operator is deprecated, use shell_exec() instead.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/The backtick (`) operator is deprecated, use shell_exec() instead.html","name":"Side Effect","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Apr 2026 09:35:21 +0000","dateModified":"Mon, 13 Apr 2026 09:35:21 +0000","description":"A side effect refers to any change in the state of a program or system that occurs when a function or expression is evaluated, beyond simply returning a value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Side Effect.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Side Effect
-----------

A side effect refers to any change in the state of a program or system that occurs when a function or expression is evaluated, beyond simply returning a value. Side effects are actions that affect something outside the function's scope, such as modifying a global variable, reading or writing in database, files or any remote API, display data, modify environment. 

Side effects are a concept of programming in general. It is important in functional programming, where function without a side effect are called pure.

.. code-block:: php
   
   <?php
   
   // A pure function, with no side effect 
   function foo($a, $b) {
       return $a + $b;
   }
   
   // A impure function
   function foo($a, $b) {
       echo $a;
   }
   
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Side_effect_(computer_science)>`__

Related : :ref:`Pure Function <pure-function>`, :ref:`Functional Programming <functional-programming>`

Related packages : `staabm/side-effects-detector <https://packagist.org/packages/staabm/side-effects-detector>`_
