.. _syntax:
.. meta::
	:description:
		Syntax: Syntax refers to the set of rules that defines the structure of valid PHP code.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Syntax
	:twitter:description: Syntax: Syntax refers to the set of rules that defines the structure of valid PHP code
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Syntax
	:og:type: article
	:og:description: Syntax refers to the set of rules that defines the structure of valid PHP code
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/syntax.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Syntax","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 28 Jun 2025 08:58:18 +0000","dateModified":"Sat, 28 Jun 2025 08:58:18 +0000","description":"Syntax refers to the set of rules that defines the structure of valid PHP code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Syntax.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Syntax
------

Syntax refers to the set of rules that defines the structure of valid PHP code.

For example, there is the object syntax, around the ``->`` and ``::`` operators, and the array syntax, around ``[index]`` operator. 

Syntax must be lintable for a PHP script to be executable. Otherwise, it creates a syntax error. Yet, a lintable syntax does not always mean the code is executable: it may yield an execution error. It is not always obvious which syntax is not executable.

.. code-block:: php
   
   <?php
   
   A = B C; // syntax error, 'C' is not valid. 
   
   clone 1; // not a syntax error
   
   $array = ['a' => 1, 'b' => 2, 'c' => 3];
   echo $array['a']; // 1
   
   $object = (object) $array;
   echo $object->a; // 1
   echo $object['a']; // no syntax error, error at execution
   
   //valid syntax
   function foo($x) {
       print $x;
   }
   
   //valid call
   foo(3);
   
   //invalid call
   foo([]);
   
   ?>


Related : :ref:`Syntax Error <syntax-error>`
