.. _cyclomatic-complexity:
.. meta::
	:description:
		Cyclomatic Complexity: Cyclomatic complexity is a software metric of the complexity of a program.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cyclomatic Complexity
	:twitter:description: Cyclomatic Complexity: Cyclomatic complexity is a software metric of the complexity of a program
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Cyclomatic Complexity
	:og:type: article
	:og:description: Cyclomatic complexity is a software metric of the complexity of a program
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/cyclomatic-complexity.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Cyclomatic Complexity","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"Cyclomatic complexity is a software metric of the complexity of a program","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Cyclomatic Complexity.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Cyclomatic Complexity
---------------------

Cyclomatic complexity is a software metric of the complexity of a program.

This metric measure the number of decisions happening within the code. Those decisions are commands such as If/then, loops, or ternary operators.


.. code-block:: php
   
   <?php
   
   function foo() {
   	if ($a) {
   
   	} else {
   
   	}
   }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Cyclomatic_complexity>`__

See also `Cyclomatic Complexity for PHP <https://pdepend.org/documentation/software-metrics/cyclomatic-complexity.html>`_

Related packages : `phpmetrics/phpmetrics <https://packagist.org/packages/phpmetrics/phpmetrics>`_
