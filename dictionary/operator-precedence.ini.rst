.. _operator-precedence:
.. meta::
	:description:
		Operator Precedence: The operator precedence dictates in which order the operators in a same sequence are executed.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Operator Precedence
	:twitter:description: Operator Precedence: The operator precedence dictates in which order the operators in a same sequence are executed
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Operator Precedence
	:og:type: article
	:og:description: The operator precedence dictates in which order the operators in a same sequence are executed
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/operator-precedence.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Operator Precedence","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:47:06 +0000","dateModified":"Fri, 10 Jan 2025 09:47:06 +0000","description":"The operator precedence dictates in which order the operators in a same sequence are executed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Operator Precedence.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Operator Precedence
-------------------

The operator precedence dictates in which order the operators in a same sequence are executed. 

For example, in the code `1 + 2 * 3`, the order is the mathematical order : multiplication has precedence over addition. The results is 7, not 9. 

In PHP, operators have different precedence : `.` (dot) has a lower priority than addition `+` and `-`.  

Precedence may lead to unexpected behavior. For example, ``-9 ** 2 == -9``, because ``-`` has lower precedence than ``**``, and PHP doesn't parse negative numbers in one pass. 

Also, `$a = $b & $c;` means that `$a = $b;`, because `=` has a higher priority than `&`.



.. code-block:: php
   
   
   <?php
   
   // 7, not 9
   $a = 1 + 2 * 3; 
   
   // 11
   $a = 4 * 2 + 3; 
   
   // equivalent to !($a instanceof aClass)
   // ! has lower precedence than instanceof
   $b = !$a instanceof aClass;
   
   ?>
   


`Documentation <https://www.php.net/manual/en/language.operators.precedence.php#language.operators.precedence>`__
