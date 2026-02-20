.. _semicolon:
.. meta::
	:description:
		Semicolon: Semicolon is used to mark the end of a statement.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Semicolon
	:twitter:description: Semicolon: Semicolon is used to mark the end of a statement
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Semicolon
	:og:type: article
	:og:description: Semicolon is used to mark the end of a statement
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/semicolon.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Semicolon","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 18 Feb 2026 20:48:07 +0000","dateModified":"Wed, 18 Feb 2026 20:48:07 +0000","description":"Semicolon is used to mark the end of a statement","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Semicolon.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Semicolon
---------

Semicolon is used to mark the end of a statement. 

It is also used in the for() statement, to separate the initialization, the termination and the increment. When using several statement between those semicolons, they must be separated with a comma.

Semicolons may also be used instead of colons, in a case statement.

Semicolons may be omitted, before a closing PHP tag.

.. code-block:: php
   
   <?php
   
   $a = 1; $b = 2;
   
   // multi-statement usage in for()
   for($i = 0, $j = 0; $i < 10; ++$i, ++$j) {
   	print "$i $j\n";
   }
   
   switch($a) {
   	case 1;
   		$a = 2;
   		break;
   		
   	default; 
   		$a = 1;
   }
   
   // semi colon may be omitted before the closing tag.
   $c = 1
   ?>


Related : :ref:`Colon <colon>`, :ref:`Switch <switch>`, :ref:`For <for>`, :ref:`Statement <statement>`
