.. _function:
.. meta::
	:description:
		Functions: Functions are defined with a set of parameters, a body of code for processing, and a returned value, typed or not.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Functions
	:twitter:description: Functions: Functions are defined with a set of parameters, a body of code for processing, and a returned value, typed or not
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Functions
	:og:type: article
	:og:description: Functions are defined with a set of parameters, a body of code for processing, and a returned value, typed or not
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/function.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Illegal class name.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Illegal class name.html","name":"Functions","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 05 Jun 2026 08:47:46 +0000","dateModified":"Fri, 05 Jun 2026 08:47:46 +0000","description":"Functions are defined with a set of parameters, a body of code for processing, and a returned value, typed or not","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Functions.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Functions
---------

Functions are defined with a set of parameters, a body of code for processing, and a returned value, typed or not. 

Methods are defined almost the same way, except for some more options and within the context of a class. 

A function is said anonymous when it has no name. This is the case of the closures and the arrow functions.

.. code-block:: php
   
   <?php
   
       function foo($a, $b) {
           return $a - $b;
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.functions.php>`__

See also `PHP Functions <https://www.tutorialrepublic.com/php-tutorial/php-functions.php>`_ and `How To Use Functions in PHP <https://www.digitalocean.com/community/tutorials/how-to-use-functions-in-php>`_.

Related : :ref:`Recursion <recursion>`, :ref:`Closure <closure>`, :ref:`Arrow Functions <arrow-function>`, :ref:`Method <method>`, :ref:`Anonymous Function <anonymous-function>`, :ref:`First Class Callable <first-class-callable>`, :ref:`Default Parameter <default-parameter>`, :ref:`Dereferencing <dereferencing>`, :ref:`Disable Functions <disable-functions>`, :ref:`Return <return>`, :ref:`Variable Arguments <variable-argument>`, :ref:`Callbacks <callback>`, :ref:`Fallback Function <fallback-function>`, :ref:`Fallback To Global <fallback-to-global>`, :ref:`Pure Function <pure-function>`, :ref:`Call Graph <call-graph>`, :ref:`Impure Function <impure-function>`, :ref:`Parameter Removal <parameter-removal>`, :ref:`Undefined <undefined>`, :ref:`Dynamic Class Constant <dynamic-class-constant>`, :ref:`Naming Conflict <naming-conflict>`, :ref:`PHP Native Function <php-function>`, :ref:`Relay Function <relay-function>`, :ref:`Custom Function <custom-function>`, :ref:`Identity <identity>`
