.. _letter-logical:
.. meta::
	:description:
		Letter Logical Bug: PHP offers two sets of operators for logical operations : the letter operators (and, or, xor) and the symbol operators (&&, ||, no xor in symbol).
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Letter Logical Bug
	:twitter:description: Letter Logical Bug: PHP offers two sets of operators for logical operations : the letter operators (and, or, xor) and the symbol operators (&&, ||, no xor in symbol)
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Letter Logical Bug
	:og:type: article
	:og:description: PHP offers two sets of operators for logical operations : the letter operators (and, or, xor) and the symbol operators (&&, ||, no xor in symbol)
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/letter-logical.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Letter Logical Bug","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 28 Jul 2025 17:14:40 +0000","dateModified":"Mon, 28 Jul 2025 17:14:40 +0000","description":"PHP offers two sets of operators for logical operations : the letter operators (and, or, xor) and the symbol operators (&&, ||, no xor in symbol)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Letter Logical Bug.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Letter Logical Bug
------------------

PHP offers two sets of operators for logical operations : the letter operators (and, or, xor) and the symbol operators (&&, ||, no xor in symbol).

While they do the same, those operators have a difference : they do not share the same precedence. In particular, && has higher priority than = while = has higher priority than and. This leads to a difference in execution.

When combining ``=`` and ``&&``, the logical operation happens before the assignation. While combining ``=`` and ``and`` actually ignore the logical operation.

The same problem affect yield, yield from, print, all assignations, including the short assignations, the ternary operator and the null-coalesce. 

It is recommended to always use the symbol logical operators, which is closer to human expectations. 


.. code-block:: php
   
   <?php
   
   $a = 1 && 3;
   
   $b = 1 and 3;
   // equivalent to 
   ($b = 1) and 3;
   
   var_dump($a); // true
   var_dump($b); // 1
   
   ?>


`Documentation <https://bugs.php.net/bug.php?id=10162>`__
