.. _division:
.. _/:
.. meta::
	:description:
		Division: Division is the mathematical division.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Division
	:twitter:description: Division: Division is the mathematical division
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Division
	:og:type: article
	:og:description: Division is the mathematical division
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/division.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Division","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 03 Feb 2026 06:25:53 +0000","dateModified":"Tue, 03 Feb 2026 06:25:53 +0000","description":"Division is the mathematical division","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Division.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Division
--------

Division is the mathematical division. It applies to numbers: integers and float. 

It also works with booleans and null, which are converted to integers. Other types are not allowed for division and yield a fatal error. 

Division may be resulting in an integer or a float, whatever the type of the initial operands. PHP produces integers whenever possible.

Division by zero, or by any value that is cast to 0, leads to a ``DivisionByZeroError``.

The operator for division is the slash ``/``. The backslash ``\`` is used for namespaces. 

There is a function for the integer division : ``intdiv()``; and ``%`` for the modulo operator, aka the remaining.

.. code-block:: php
   
   <?php
   
   $a = 10 / 2.5; // 4.0
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.arithmetic.php>`__

See also https://www.php.net/manual/en/language.operators.array.php, https://www.texelate.co.uk/blog/combining-arrays-using-plus-versus-array-merge-in-php

Related : :ref:`Addition <addition>`, :ref:`Exponent <exponent>`, :ref:`Multiplication <multiplication>`, :ref:`Modulo <modulo>`, :ref:`DivisionByZeroError <divisionbyzeroerror>`
