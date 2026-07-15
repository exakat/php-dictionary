.. _dynamic-expression:
.. meta::
	:description:
		Dynamic Expression: A dynamic expression is an expression that is only wholly defined at execution time.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Dynamic Expression
	:twitter:description: Dynamic Expression: A dynamic expression is an expression that is only wholly defined at execution time
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Dynamic Expression
	:og:type: article
	:og:description: A dynamic expression is an expression that is only wholly defined at execution time
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/dynamic-expression.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/dynamic-expression.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/dynamic-expression.ini.html","name":"Dynamic Expression","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:48 +0000","dateModified":"Fri, 19 Jun 2026 21:24:48 +0000","description":"A dynamic expression is an expression that is only wholly defined at execution time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Dynamic Expression.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Dynamic Expression
------------------

A dynamic expression is an expression that is only wholly defined at execution time. It needs to collect pieces of information before processing. This applies to elements that are usually static, such as class, function, method, constants, not to parameters which are expected to be variable.

.. code-block:: php
   
   <?php
   
       $config = new ConfigFile();
   
       $function = $config->sortingMethod; // sort, or rsort
       $function($array);
   
   ?>


`Documentation <https://www.php.net/manual/en/language.expressions.php>`__

Related : :ref:`Static Expression <static-expression>`
