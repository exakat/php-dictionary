.. _comparison-operator:
.. _comparison:
.. meta::
	:description:
		Comparison: Comparison operators check how two values related to each other.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Comparison
	:twitter:description: Comparison: Comparison operators check how two values related to each other
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Comparison
	:og:type: article
	:og:description: Comparison operators check how two values related to each other
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/comparison-operator.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Unterminated comment starting line %d.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Unterminated comment starting line %d.html","name":"Comparison","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 16 Jan 2026 16:59:52 +0000","dateModified":"Fri, 16 Jan 2026 16:59:52 +0000","description":"Comparison operators check how two values related to each other","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Comparison.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Comparison
----------

Comparison operators check how two values related to each other. They may be equal or different, and, depending on the the type of compared data, they may be greater or lesser than the other one.

PHP comparisons exists with type-juggling, `==`, `<>`, `<=>`, switch() and `!=`, and with type checks, match(), `===` and `!==`. They are called loose comparison, as PHP applies some cast before executing the comparison. Inequalities only exist with type-juggling. 

On the other hand, PHP has strict comparisons, which include comparing the type before running any further checks. They are ``===`` and ``!==``. 

There are also functions dedicated to comparisons, with specific applications : strcmp(), strcasecmp(), strnatcasecpm(), strcoll(), similar_text(), levensthein(), bccomp(), version_compare(), hash_equals(). 

Some of the functions include a loose or a strict version.

.. code-block:: php
   
   <?php
   
   if ($a == $b) {
       print \a and b are equal\;
   }
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.comparison.php>`__

See also https://phpcheatsheets.com/compare/, https://www.educative.io/answers/difference-between-the-and-operators-in-php

Related : :ref:`Operators <operator>`, :ref:`Type Juggling <type-juggling>`, :ref:`Switch <switch>`, :ref:`Match <match>`, :ref:`Spaceship Operator <spaceship>`
