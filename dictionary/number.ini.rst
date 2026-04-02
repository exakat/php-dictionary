.. _number:
.. meta::
	:description:
		Number: A number is either a float or an integer.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Number
	:twitter:description: Number: A number is either a float or an integer
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Number
	:og:type: article
	:og:description: A number is either a float or an integer
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/number.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Number","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 28 Mar 2026 08:32:22 +0000","dateModified":"Sat, 28 Mar 2026 08:32:22 +0000","description":"A number is either a float or an integer","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Number.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Number
------

A number is either a float or an integer. 

Numbers are always signed. They are limited, in range, by the constants ``PHP_INT_MAX``, ``PHP_INT_MIN``, and ``PHP_FLOAT_MAX``, ``PHP_FLOAT_MIN``.

PHP also has a concept of numeric strings, which are strings that hold numbers. Other types do not have direct conversion to numbers and need to be converted or cast.

.. code-block:: php
   
   <?php
   
       echo 1;
       echo -1.5;
       
       echo PHP_INT_MAX; 
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.php>`__

See also https://www.codeguage.com/v1/courses/php/numbers-basics, https://www.pixemweb.com/php/php-numbers/, https://medium.com/@philippebeck/exploring-number-manipulation-in-php-e51c85b44630

Related : :ref:`Floating Point Numbers <float>`, :ref:`integer <integer>`, :ref:`Numeric String <numeric-string>`, :ref:`Cast Operator <cast>`
