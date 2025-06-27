.. _syntax-error:
.. meta::
	:description:
		Syntax Error: A syntax error happens when the text could not be parsed into tokens by PHP.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Syntax Error
	:twitter:description: Syntax Error: A syntax error happens when the text could not be parsed into tokens by PHP
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Syntax Error
	:og:type: article
	:og:description: A syntax error happens when the text could not be parsed into tokens by PHP
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/syntax-error.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Syntax Error","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 22 Jun 2025 20:21:52 +0000","dateModified":"Sun, 22 Jun 2025 20:21:52 +0000","description":"A syntax error happens when the text could not be parsed into tokens by PHP","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Syntax Error.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Syntax Error
------------

A syntax error happens when the text could not be parsed into tokens by PHP. PHP would use the tokens to interpret the code, but here, the tokens are not recognizable. 

Syntax error happen for a variety of reasons, which may compound one with the other: 

+ Unbalanced opening/closing tokens, such as parenthesis ``()``, brackets ``[]``, curly brackets ``{}``
+ Unfinished command: the final semi colon ``;`` was forgotten
+ Forgotten ``)``, in particular when there need to be more than 2, sometimes even 1


.. code-block:: php
   
   <?php
   
   $a[1  = 3;
   
   ?>


See also https://www.scaler.com/topics/php-tutorial/types-of-errors-in-php/
