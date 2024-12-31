.. _global-space:
.. meta::
	:description:
		Global Space: The term "global space" refers to the global namespace "\" or the top-level scope in the PHP language.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Global Space
	:twitter:description: Global Space: The term "global space" refers to the global namespace "\" or the top-level scope in the PHP language
	:twitter:creator: @exakat
	:og:title: Global Space
	:og:type: article
	:og:description: The term "global space" refers to the global namespace "\" or the top-level scope in the PHP language
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/global-space.ini.html
	:og:locale: en


Global Space
------------

The term "global space" refers to the global namespace "\" or the top-level scope in the PHP language. The global space is where global variables, functions, and constants reside. When you define a variable, function, or constant without specifying a namespace, it belongs to the global space.

It is recommended to avoid using the global space for any definition: they should be stored in a custom namespace.


.. code-block:: php
   
   <?php
   
   // This is the global space
   namespace {} 
   
   ?>


`Documentation <https://www.php.net/manual/en/language.namespaces.global.php>`__
