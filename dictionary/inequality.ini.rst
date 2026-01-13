.. _inequality:
.. meta::
	:description:
		Inequality: Inequalities are the mathematical comparison of values, with the `>`,  `>=`,  `<` and `=<` operators.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Inequality
	:twitter:description: Inequality: Inequalities are the mathematical comparison of values, with the `>`,  `>=`,  `<` and `=<` operators
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Inequality
	:og:type: article
	:og:description: Inequalities are the mathematical comparison of values, with the `>`,  `>=`,  `<` and `=<` operators
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/inequality.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Inequality","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"Inequalities are the mathematical comparison of values, with the `>`,  `>=`,  `<` and `=<` operators","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Inequality.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Inequality
----------

Inequalities are the mathematical comparison of values, with the `>`,  `>=`,  `<` and `=<` operators. 

Unlike the equality operators, they do not have a strict version, which takes into account the type of the values. Hence, the compared values are always adapted to each other's type.



.. code-block:: php
   
   <?php
   
   // displays false
   var_dump("3" > 3);
   
   // displays true
   var_dump(4 >= 0)
   
   ?>
   


`Documentation <https://www.php.net/manual/en/language.operators.comparison.php>`__
