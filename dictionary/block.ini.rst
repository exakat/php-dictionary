.. _block:
.. meta::
	:description:
		Block: Blocks are none, one or more instructions, grouped together with or without curly brackets.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Block
	:twitter:description: Block: Blocks are none, one or more instructions, grouped together with or without curly brackets
	:twitter:creator: @exakat
	:og:title: Block
	:og:type: article
	:og:description: Blocks are none, one or more instructions, grouped together with or without curly brackets
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/block.ini.html
	:og:locale: en


Block
-----

Blocks are none, one or more instructions, grouped together with or without curly brackets.

Blocks may require brackets, like for ``class``, ``switch()``, ``function bodies``; they may be optional, like with ``case``, ``arrow-functions`` or loops. 


.. code-block:: php
   
   <?php
   
   function foo($a) {
   	if ($a) {
   		$b = 1;
   	} else 
   		$b = 2;
   		
   	return $b;
   }
   ?>


Related : :ref:`Body <body>`
