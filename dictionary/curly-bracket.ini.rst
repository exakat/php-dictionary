.. _curly-bracket:
.. _curly-braces:
.. meta::
	:description:
		Curly Brackets: Curly brackets have different usage in PHP:.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Curly Brackets
	:twitter:description: Curly Brackets: Curly brackets have different usage in PHP:
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Curly Brackets
	:og:type: article
	:og:description: Curly brackets have different usage in PHP:
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/curly-bracket.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Curly Brackets","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Mar 2025 15:10:46 +0000","dateModified":"Wed, 05 Mar 2025 15:10:46 +0000","description":"Curly brackets have different usage in PHP:","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Curly Brackets.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Curly Brackets
--------------

Curly brackets have different usage in PHP:

+ Delimit a block of code 
+ Represents a variable delimiter inside string
+ It used to identify a single byte in a string, with an array syntax

They are also called curly braces.

.. code-block:: php
   
   <?php
   
   for($a = 1; $a < 10; ++$i) {
   	// block
   	
   	// delimit a variable to avoid confusing it with $vars
   	echo "{$var}s";
   }
   
   // old syntax: it used to be the second character in the string
   // This is a removed feature in PHP 8.0+
   // modern syntax : use angular brackets
   echo $string{1};
   
   ?>


See also `PHP Curly Braces: How and When to Use it? <https://schoolsofweb.com/php-curly-braces-how-and-when-to-use-it/>`_

Related : :ref:`Block <block>`, :ref:`String <string>`, :ref:`Square Brackets <square-bracket>`, :ref:`Token <token>`
