.. _local:
.. _local-scope:
.. meta::
	:description:
		Local Scope: The local scope is the scope inside a function or method.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Local Scope
	:twitter:description: Local Scope: The local scope is the scope inside a function or method
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Local Scope
	:og:type: article
	:og:description: The local scope is the scope inside a function or method
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/local.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Undefined Variable %s.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Undefined Variable %s.html","name":"Local Scope","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"The local scope is the scope inside a function or method","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Local Scope.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Local Scope
-----------

The local scope is the scope inside a function or method. The variables are contained within that scope, and are not available beyond it. 

The opposite of local scope is the global scope. 



.. code-block:: php
   
   
   <?php
   
   function foo() {
   	// $foo variable is only available in the foo scope
   	$foo = 1; 
   	
   	$closure = function () {
   		// this scope is different from foo()
   		// its definition is nested in the foo() function
   		// but those are 2 distinct scopes
   	};
   }
   
   function goo() {
   	// $goo variable is only available in the goo scope
   	$goo = 1; 
   }
   ?>
   


`Documentation <https://www.php.net/manual/en/language.variables.scope.php>`__

Related : :ref:`Scope <scope>`, :ref:`global Scope <global>`
