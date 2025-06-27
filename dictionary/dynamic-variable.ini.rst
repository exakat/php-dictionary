.. _dynamic-variable:
.. meta::
	:description:
		Dynamic Variable: A dynamic variable is a variable whose name stored in a variable or an expression.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Dynamic Variable
	:twitter:description: Dynamic Variable: A dynamic variable is a variable whose name stored in a variable or an expression
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Dynamic Variable
	:og:type: article
	:og:description: A dynamic variable is a variable whose name stored in a variable or an expression
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/dynamic-variable.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Dynamic Variable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 26 Jun 2025 04:48:23 +0000","dateModified":"Thu, 26 Jun 2025 04:48:23 +0000","description":"A dynamic variable is a variable whose name stored in a variable or an expression","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Dynamic Variable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Dynamic Variable
----------------

A dynamic variable is a variable whose name stored in a variable or an expression. 

They are identified by a double $ sign, though the same operator may be used multiple times. 

They are also called variable variable. 

.. code-block:: php
   
   
   <?php
   
   $a = 'b';
   $b = 'c';
   $c = 'd';
   
   echo $$$a; 
   echo $$b; 
   echo $c; 
   
   ?>
   


`Documentation <https://www.php.net/manual/en/language.variables.variable.php>`__

See also `The Dangers of PHP's $$ <https://andy-carter.com/blog/the-dangers-of-php-variable-variables>`_

Related : :ref:`Variables <variable>`
