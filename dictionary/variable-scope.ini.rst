.. _variable-scope:
.. meta::
	:description:
		Variable Scope: Variable scope is the context in which the variable is available.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Variable Scope
	:twitter:description: Variable Scope: Variable scope is the context in which the variable is available
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Variable Scope
	:og:type: article
	:og:description: Variable scope is the context in which the variable is available
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/variable-scope.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Variable Scope","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 22 Jun 2025 20:15:25 +0000","dateModified":"Sun, 22 Jun 2025 20:15:25 +0000","description":"Variable scope is the context in which the variable is available","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Variable Scope.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Variable Scope
--------------

Variable scope is the context in which the variable is available. The context is often one method or function. 

``global`` keywords allows variables from other contexts to be available in the current one. 

Local variables are only available in one method or function, not counting the local or bind closures or arrow functions. 


.. code-block:: php
   
   <?php
   
   function foo() {
   	// $a is only available in foo
   	$a = 1;
   }
   
   function bar() {
   	// $a is only available in bar, and is distinct from the one in foo()
   	$a = 2;
   
   	// $bar is only available in bar, the followring closure and the arrow function
   	$b = 1;
   	
   	$c = function() use ($b) { return $b;}
   	$d = function() use ($b) { return $b;}
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.variables.scope.php>`__

See also https://www.geeksforgeeks.org/php/what-are-the-different-scopes-of-variables-in-php/
