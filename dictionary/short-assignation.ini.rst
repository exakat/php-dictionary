.. _short-assignation:
.. _combined-operator:
.. meta::
	:description:
		Short Assignations: In addition to the basic assignment operator, there are "combined operators" for all of the binary arithmetic, array union and string operators that allow you to use a value in an expression and then set its value to the result of that expression.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Short Assignations
	:twitter:description: Short Assignations: In addition to the basic assignment operator, there are "combined operators" for all of the binary arithmetic, array union and string operators that allow you to use a value in an expression and then set its value to the result of that expression
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Short Assignations
	:og:type: article
	:og:description: In addition to the basic assignment operator, there are "combined operators" for all of the binary arithmetic, array union and string operators that allow you to use a value in an expression and then set its value to the result of that expression
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/short-assignation.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Short Assignations","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"In addition to the basic assignment operator, there are \"combined operators\" for all of the binary arithmetic, array union and string operators that allow you to use a value in an expression and then set its value to the result of that expression","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Short Assignations.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Short Assignations
------------------

In addition to the basic assignment operator, there are "combined operators" for all of the binary arithmetic, array union and string operators that allow you to use a value in an expression and then set its value to the result of that expression.

.. code-block:: php
   
   <?php
   
   // incrementing $a by one
   $a = $a + 1;
   
   // short assignement for the above syntax
   $a += 1;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.assignment.php>`__

See also `PHP — P22: Shorthand Operators <https://blog.devgenius.io/php-7-x-p22-shorthand-operators-bdef003cd52d>`_

Related : :ref:`Assignations <assignation>`, :ref:`Assignations <assignement>`
