.. _variable-argument:
.. meta::
	:description:
		Variable Arguments: Variable arguments refers to a methodcall where the list of argument is depends on the call, rather than the signature of the method.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Variable Arguments
	:twitter:description: Variable Arguments: Variable arguments refers to a methodcall where the list of argument is depends on the call, rather than the signature of the method
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Variable Arguments
	:og:type: article
	:og:description: Variable arguments refers to a methodcall where the list of argument is depends on the call, rather than the signature of the method
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/variable-argument.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Variable Arguments","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"Variable arguments refers to a methodcall where the list of argument is depends on the call, rather than the signature of the method","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Variable Arguments.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Variable Arguments
------------------

Variable arguments refers to a methodcall where the list of argument is depends on the call, rather than the signature of the method.

Variable arguments are achieved with the variadic operator, or with the func_get_args() functions. Variadic operator covers most of the cases, and func_get_args() covers the remaining edge cases. 

Variable arguments may be static or dynamic. It is static when the list of arguments varies from call to call, and are hard-coded. Dynamic argument list depends on variadic operator, or call_user_func_array() functions.


.. code-block:: php
   
   <?php
   
   // No arguments in the signature.
   function foo() {
   	// displays the list of arguments
   	print_r(func_get_args());
   }
   
   // static arguments
   foo(1, 2);
   foo(4, 5, 6);
   
   // dynamic variable arguments
   $args = range(5, rand(9, 11)) ; 
   foo(...$args);
   
   ?>


`Documentation <https://www.php.net/manual/en/functions.arguments.php#functions.variable-arg-list>`__

See also `Variable-length argument lists <https://riptutorial.com/php/example/18652/variable-length-argument-lists>`_

Related : :ref:`Functions <function>`
