.. _pure-function:
.. meta::
	:description:
		Pure Function: A pure function is a function that adheres to two fundamental principles:.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Pure Function
	:twitter:description: Pure Function: A pure function is a function that adheres to two fundamental principles:
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Pure Function
	:og:type: article
	:og:description: A pure function is a function that adheres to two fundamental principles:
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/pure-function.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Pure Function","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Apr 2026 20:42:30 +0000","dateModified":"Wed, 15 Apr 2026 20:42:30 +0000","description":"A pure function is a function that adheres to two fundamental principles:","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Pure Function.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Pure Function
-------------

A pure function is a function that adheres to two fundamental principles:

It is deterministic: for the same input, a pure function will always return the same output. There are no hidden dependencies or side effects that could change the result.

A pure function does not modify any external state or data. It does not change variables outside its scope, write to a database, modify a file, or perform any action that affects the world outside the function.


.. code-block:: php
   
   <?php
   
       function add(int $a, int $b): int {
           return $a + $b;
       }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Pure_function>`__

See also https://leanpub.com/read/thinking-functionally-in-php/leanpub-auto-pure-functions, https://agiroloki.medium.com/functional-programming-in-php-part-2-9db0f5443cdf

Related : :ref:`Functions <function>`
