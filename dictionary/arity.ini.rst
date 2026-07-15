.. _arity:
.. meta::
	:description:
		Arity: Arity is the number of arguments, or operands, that a function, method, or operator accepts: a unary operator such as ``!`` has arity 1, a binary operator such as ``+`` has arity 2, and a function's arity is the count of its declared parameters.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Arity
	:twitter:description: Arity: Arity is the number of arguments, or operands, that a function, method, or operator accepts: a unary operator such as ``!`` has arity 1, a binary operator such as ``+`` has arity 2, and a function's arity is the count of its declared parameters
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Arity
	:og:type: article
	:og:description: Arity is the number of arguments, or operands, that a function, method, or operator accepts: a unary operator such as ``!`` has arity 1, a binary operator such as ``+`` has arity 2, and a function's arity is the count of its declared parameters
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/arity.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/arity.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/arity.ini.html","name":"Arity","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 08 Jul 2026 15:09:01 +0000","dateModified":"Wed, 08 Jul 2026 15:09:01 +0000","description":"Arity is the number of arguments, or operands, that a function, method, or operator accepts: a unary operator such as ``!`` has arity 1, a binary operator such as ``+`` has arity 2, and a function's arity is the count of its declared parameters","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Arity.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Arity
-----

Arity is the number of arguments, or operands, that a function, method, or operator accepts: a unary operator such as ``!`` has arity 1, a binary operator such as ``+`` has arity 2, and a function's arity is the count of its declared parameters. A function whose arity is fixed always expects exactly that many arguments; a function of variable arity, called variadic, accepts any number of arguments from a given point onward.

Arity matters for overload resolution in languages that dispatch on parameter count, for currying, where a function is considered fully applied only once it has received as many arguments as its arity, and for reflection, where a caller may need to discover how many arguments a callable expects before invoking it dynamically.

PHP supports both fixed and variable arity directly. A function's fixed arity is simply its parameter list; variable arity is declared with the ``...`` splat operator on the last parameter, and the actual number of arguments received by any call, fixed or variadic, can be inspected at runtime with ``func_num_args()``, or discovered ahead of a call through ``ReflectionFunction::getNumberOfParameters()``.

.. code-block:: php
   
   <?php
   
       function sum(int ...$numbers): int {
           return array_sum($numbers);
       }
       
       sum(1, 2, 3); // called with arity 3, though sum() itself is variadic
       
       function greet(string $name) {
           echo func_num_args(); // 1: this call's actual arity
       }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Arity>`__

See also `4.6 - Arity, partial application and currying <https://learn-functional-programming.com/chapters/4.6-partial-application-and-currying/>`_.

Related : :ref:`Variadic <variadic>`, :ref:`func_get_args() <func_get_args>`, :ref:`Functions <function>`, :ref:`Currying <currying>`, :ref:`Overloading <overloading>`
