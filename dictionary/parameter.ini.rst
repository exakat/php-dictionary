.. _parameter:
.. meta::
	:description:
		Parameter: A parameter is a variable in a method definition.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Parameter
	:twitter:description: Parameter: A parameter is a variable in a method definition
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Parameter
	:og:type: article
	:og:description: A parameter is a variable in a method definition
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/parameter.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Parameter","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 27 Jul 2025 19:56:11 +0000","dateModified":"Sun, 27 Jul 2025 19:56:11 +0000","description":"A parameter is a variable in a method definition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Parameter.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Parameter
---------

A parameter is a variable in a method definition. They have a name, and may have a default value and type. They may also be passed by reference, or by value (by default).

.. code-block:: php
   
   <?php
   
   function foo($parameter) {}
   
   $argument = 1;
   foo($argument);
   
   ?>


`Documentation <https://www.php.net/manual/en/functions.arguments.php>`__

Related : :ref:`Argument <argument>`, :ref:`Static Expression <static-constant-expression>`, :ref:`Comma <comma>`, :ref:`Constant Scalar Expression <constant-scalar-expression>`, :ref:`Default Value <default-value>`, :ref:`Inherited Variable <inherited-variable>`, :ref:`New In Initializers <new-in-initializer>`
