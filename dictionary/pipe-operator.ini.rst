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

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Pipe Operator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:28:06 +0000","dateModified":"Fri, 19 Jun 2026 21:28:06 +0000","description":"The pipe operator is ``|>``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Pipe Operator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Pipe Operator
-------------

The pipe operator is ``|>``. It chains calls from methods from left to right, using the result of the first method as the only argument of the next method.

The pipe operator is compatible with every form of PHP callable: string, arrays, first class callable, closures, arrow functions with parenthesis, etc. 

Pipe operator is not compatible with references. 

The pipe operator should not be mistaken with the ``|`` pipe logical operator, which combines two values with a ``or`` logic.

.. code-block:: php
   
   <?php
   
       $result = abc |> trim(...) |> 'strtoupper'; // 'ABC'
   
   ?>


`Documentation <https://wiki.php.net/rfc/pipe-operator-v3>`__

See also `PHP 8.5: Pipe operator (|>) <https://php.watch/versions/8.5/pipe-operator>`_, `Introducing Piper: array and string manipulation with the pipe operator <https://spatie.be/blog/introducing-piper>`_ and `My thoughts on Spatie/Piper <https://dev.to/xwero/my-thoughts-on-spatiepiper-1ej7>`_.

Related : :ref:`Logical Operators <logical-operator>`

Added in PHP 8.5
