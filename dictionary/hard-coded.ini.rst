.. _hard-coded:
.. _hardcoded:
.. meta::
	:description:
		Hard Coded: Hard coded data in code happens when a value is set as a literal in the code, and can't be change through any directives or parameters.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Hard Coded
	:twitter:description: Hard Coded: Hard coded data in code happens when a value is set as a literal in the code, and can't be change through any directives or parameters
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Hard Coded
	:og:type: article
	:og:description: Hard coded data in code happens when a value is set as a literal in the code, and can't be change through any directives or parameters
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/hard-coded.ini.html
	:og:locale: en


Hard Coded
----------

Hard coded data in code happens when a value is set as a literal in the code, and can't be change through any directives or parameters.

Hard-code becomes a security problem, when the hard-coded value is a password or a hash of it. This secret is now readable in the code.


.. code-block:: php
   
   <?php 
   
   // This is hard-coded
   $a = 1;
   
   // $b has a default value, but may also be changed at execution time
   function foo($b = 2) {
       echo $b;
   }
   
    ?>
   


`Documentation <https://en.wikipedia.org/wiki/Hard_coding>`__
