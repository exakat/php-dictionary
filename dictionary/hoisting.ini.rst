.. _hoisting:
.. meta::
	:description:
		Hoisting: Hoisting is a language feature where declarations are automatically moved to the top of their scope before code execution.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Hoisting
	:twitter:description: Hoisting: Hoisting is a language feature where declarations are automatically moved to the top of their scope before code execution
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Hoisting
	:og:type: article
	:og:description: Hoisting is a language feature where declarations are automatically moved to the top of their scope before code execution
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/hoisting.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Hoisting","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Hoisting is a language feature where declarations are automatically moved to the top of their scope before code execution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Hoisting.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Hoisting
--------

Hoisting is a language feature where declarations are automatically moved to the top of their scope before code execution. It is notably a JavaScript feature and not a PHP feature.

PHP does not support hoisting for variables: a variable must be assigned before it is read, or it will be undefined.

PHP functions are pre-compiled and can be called before their textual declaration in the same file, which may look like hoisting but is actually the result of PHP's two-pass compilation model.

PHP classes are not hoisted either: a class must be declared, autoloaded, before it is instantiated.

.. code-block:: php
   
   <?php
   
   // This works: functions are pre-compiled
   greet();
   
   function greet() { echo 'Hello'; }
   
   // This does NOT work: variables are not hoisted
   echo $message; // Undefined variable
   
   $message = 'Hello';
   
   ?>


See also `Hoisting (MDN) <https://developer.mozilla.org/en-US/docs/Glossary/Hoisting>`_.

Related : :ref:`Class Hoisting <class-hoisting>`, :ref:`Class Autoloading <autoload>`, :ref:`Undefined <undefined>`, :ref:`Compile <compilation>`, :ref:`Cache <cache>`, :ref:`Order Of Execution <order-of-execution>`
