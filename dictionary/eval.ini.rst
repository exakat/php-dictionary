.. _eval:
.. meta::
	:description:
		Eval(): The eval() function executes a string as a PHP code.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Eval()
	:twitter:description: Eval(): The eval() function executes a string as a PHP code
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Eval()
	:og:type: article
	:og:description: The eval() function executes a string as a PHP code
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/eval.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Eval()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 26 Jan 2026 12:54:20 +0000","dateModified":"Mon, 26 Jan 2026 12:54:20 +0000","description":"The eval() function executes a string as a PHP code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Eval().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Eval()
------

The eval() function executes a string as a PHP code.

eval() has been used originally to obtain features that PHP did not offer. Nowadays, those features are rare enough that it is recommended to find a safe alternative, before relying on it.

.. code-block:: php
   
   <?php
   
   $name = 'v';
   $value = 'vvvv';
   
   // Set a variable with a dynamic name
   eval('$'.$name.' = '.$value);
   // equivalent to $$name = $value;
   
   ?>


`Documentation <https://www.php.net/manual/en/function.eval.php>`__

See also https://www.tutorialspoint.com/eval-function-in-php, https://www.exakat.io/en/land-where-php-uses-eval/
