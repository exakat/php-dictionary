.. _short-assignation:
.. _combined-operator:
.. meta::
	:description:
		Short Assignations: In addition to the basic assignment operator, there are combined operators for all of the binary arithmetic, array union and string operators that allow to use a value in an expression and then set its value to the result of that expression.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Short Assignations
	:twitter:description: Short Assignations: In addition to the basic assignment operator, there are combined operators for all of the binary arithmetic, array union and string operators that allow to use a value in an expression and then set its value to the result of that expression
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Short Assignations
	:og:type: article
	:og:description: In addition to the basic assignment operator, there are combined operators for all of the binary arithmetic, array union and string operators that allow to use a value in an expression and then set its value to the result of that expression
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/short-assignation.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/short-assignation.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/short-assignation.ini.html","name":"Short Assignations","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"In addition to the basic assignment operator, there are combined operators for all of the binary arithmetic, array union and string operators that allow to use a value in an expression and then set its value to the result of that expression","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Short Assignations.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Short Assignations
------------------

In addition to the basic assignment operator, there are combined operators for all of the binary arithmetic, array union and string operators that allow to use a value in an expression and then set its value to the result of that expression.

.. code-block:: php
   
   <?php
   
       // incrementing $a by one
       $a = $a + 1;
       
       // short assignement for the above syntax
       $a += 1;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.assignment.php>`__

See also `PHP — P22: Shorthand Operators <https://www.dinocajic.com/php-shorthand-operators/>`_.

Related : :ref:`Assignations <assignation>`, :ref:`Assignations <assignement>`, :ref:`Bitwise Operators <bitwise-operator>`, :ref:`Iffectation <iffectation>`
