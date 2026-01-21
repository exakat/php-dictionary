.. _pipe:
.. meta::
	:description:
		Pipe Operator: The ``pipe`` operator is the ``|>`` operator.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Pipe Operator
	:twitter:description: Pipe Operator: The ``pipe`` operator is the ``|>`` operator
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Pipe Operator
	:og:type: article
	:og:description: The ``pipe`` operator is the ``|>`` operator
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/pipe.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Pipe Operator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 21 Jan 2026 08:53:06 +0000","dateModified":"Wed, 21 Jan 2026 08:53:06 +0000","description":"The ``pipe`` operator is the ``|>`` operator","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Pipe Operator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Pipe Operator
-------------

The ``pipe`` operator is the ``|>`` operator. 

The pipe operator chains two callables from left to right: it takes the return value of the first callable and passes it to the right callable.

The pipe operator is equivalent to nested calls of functions, methods, closures. It also only applies to callables with one compulsory parameter, with return values, and without references.

It was added in PHP 8.5.

The pipe operator is a reference to the ``|`` pipe operator from the command line, with use the result of the previous (left) command to feed the next (right) command. It should not be confused with the or bitwise operator ``|``, already available.

.. code-block:: php
   
   <?php
   
   $result = HELLO world
       |> trim(...)
       |> strtolower(...)
       |> ucfirst(...);
   // Hello World
   
   
   // Same as 
   $result = ucfirst(strtolower(trim(HELLO World)));
   // Hello World
   
   ?>


See also https://php.watch/versions/8.5/pipe-operator, https://wiki.php.net/rfc/pipe-operator-v3, https://thephp.foundation/blog/2025/07/11/php-85-adds-pipe-operator/

Related : :ref:`Bitwise Operators <bitwise-operator>`

Added in PHP 8.5+
