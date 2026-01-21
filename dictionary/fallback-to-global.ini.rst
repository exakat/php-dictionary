.. _fallback-to-global:
.. _fallback:
.. meta::
	:description:
		Fallback To Global: The fallback to global mechanism is a PHP feature, which search for functions and global constants, first in the current namespace, then in the global namespace, before failing.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Fallback To Global
	:twitter:description: Fallback To Global: The fallback to global mechanism is a PHP feature, which search for functions and global constants, first in the current namespace, then in the global namespace, before failing
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Fallback To Global
	:og:type: article
	:og:description: The fallback to global mechanism is a PHP feature, which search for functions and global constants, first in the current namespace, then in the global namespace, before failing
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/fallback-to-global.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Fallback To Global","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 17 Jan 2026 06:56:36 +0000","dateModified":"Sat, 17 Jan 2026 06:56:36 +0000","description":"The fallback to global mechanism is a PHP feature, which search for functions and global constants, first in the current namespace, then in the global namespace, before failing","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Fallback To Global.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Fallback To Global
------------------

The fallback to global mechanism is a PHP feature, which search for functions and global constants, first in the current namespace, then in the global namespace, before failing. 

This feature was introduced as a transition mechanism, when namespaces were introduced. Adding a namespace to a file does not make all the function and constants invalid, but rather still working. This does not apply to classes, interfaces, traits and enumeration, which have to be in the current namespace, or imported with the ``use`` expression.

The fallback mechanism applies to global constants and functions. 

This mechanism is usually transparent to users: PHP behaves with little friction. It introduces the possibility of a man in the middle attack: adding a local definition to a global function or constant will overwrite this function.

There is a penalty cost to use the fallback mechanism, as PHP has to search for the function locally, then globally, before finding it. Using the fully qualified name, or an import expression ``use`` speeds up the process.

.. code-block:: php
   
   <?php
   
   function goo() { echo __FUNCTION__;}
   function hoo() { echo __FUNCTION__;}
   
   namespace A {
   	use function hoo as ioo;
   	
   	function foo() { echo __FUNCTION__;}
   	function hoo() { echo __FUNCTION__;}
   	
   	foo(); // A\foo;
   	goo(); // goo;
   	hoo(); // A\hoo;
   	\hoo(); // hoo
   	ioo(); // A\hoo;
   
   	// this replaces the native PHP strtolower with another function, 
   	// in the A namespace
   	function strtolower($string) { return \strtoupper($string);}
   	
   	echo strtolower('aB');  // AB
   	echo \strtolower('aB'); // ab
   }
   
   
   ?>


`Documentation <https://www.php.net/manual/en/language.namespaces.fallback.php>`__
