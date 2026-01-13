.. _pipe-operator:
.. meta::
	:description:
		Pipe Operator: The pipe operator is ``|>``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Pipe Operator
	:twitter:description: Pipe Operator: The pipe operator is ``|>``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Pipe Operator
	:og:type: article
	:og:description: The pipe operator is ``|>``
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/pipe-operator.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Unterminated comment starting line %d.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Unterminated comment starting line %d.html","name":"Pipe Operator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Nov 2025 05:42:31 +0000","dateModified":"Thu, 06 Nov 2025 05:42:31 +0000","description":"The pipe operator is ``|>``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Pipe Operator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Pipe Operator
-------------

The pipe operator is ``|>``. It chains calls from methods from left to right, using the result of the first method as the only argument of the next method.

The pipe operator is compatible with every form of PHP callable : string, arrays, first class callable, closures, arrow functions with parenthesis, etc. 

It is not compatible with references, . 

The pipe operator should not be mistaken with the ``|`` pipe logical operator, which combines two values with a ``or`` logic.

The pipe operator was added in PHP 8.5.


.. code-block:: php
   
   <?php
   
   $result = abc |> trim(...) |> 'strtoupper'; // 'ABC'
   
   ?>


See also https://php.watch/versions/8.5/pipe-operator

Related : :ref:`Logical Operators <logical-operator>`
