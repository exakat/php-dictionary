.. _scope:
.. _context:
.. meta::
	:description:
		Scope: The scope, also called context, is the space in which a certain elements are defined.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Scope
	:twitter:description: Scope: The scope, also called context, is the space in which a certain elements are defined
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Scope
	:og:type: article
	:og:description: The scope, also called context, is the space in which a certain elements are defined
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/scope.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Scope","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"The scope, also called context, is the space in which a certain elements are defined","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Scope.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Scope
-----

The scope, also called context, is the space in which a certain elements are defined. There are function, closure or method scope, for local variables; methods are also defined in a class scope.

A variable scope is usually its host method, or the file in which is used. It also extends to any included files, and skips other method definition.  

Arrow functions are initialised with the same scope than the defining scope, but do not write back in it. Closure with the use keyword also import variables from the defining scope. 

Scopes are generally considered as global or local.

.. code-block:: php
   
   
   <?php
   
   // $a is defined in the file scope
   $a = 1; 
   
   // $a is extended to the included scope
   include 'b.php';
   
   // arrow functions use the same scope than the defining code. 
   // here, $a is also defined there. 
   // $c will not be available in the calling scope.
   $c = fn () => $a + ($c = 2);
   
   function foo() {
   	// $b is only defined in the foo() function
   	echo $b; 
   }
   ?>


`Documentation <https://www.php.net/manual/en/language.variables.scope.php>`__

Related : :ref:`Local Scope <local>`, :ref:`global Scope <global>`
