.. _include:
.. _include_once:
.. _require_once:
.. _require:
.. meta::
	:description:
		include: Inclusion, often represented by the ``include`` keyword, is the process to read an external file, and evaluate with the current application for execution.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: include
	:twitter:description: include: Inclusion, often represented by the ``include`` keyword, is the process to read an external file, and evaluate with the current application for execution
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: include
	:og:type: article
	:og:description: Inclusion, often represented by the ``include`` keyword, is the process to read an external file, and evaluate with the current application for execution
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/include.ini.html
	:og:locale: en


include
-------

Inclusion, often represented by the ``include`` keyword, is the process to read an external file, and evaluate with the current application for execution. It may define new structures, and execute code. 

Inclusion relies on four language structures : include, require, include_once, require_once. 

Inclusion is often hidden in autoload() functions : the code is included class per class, upon request. 



.. code-block:: php
   
    vars.php
   <?php
   
   $color = 'green';
   $fruit = 'apple';
   
   ?>
   
   test.php
   <?php
   
   echo "A $color $fruit"; // A
   
   include 'vars.php';
   
   echo "A $color $fruit"; // A green apple
   
   ?>
   


`Documentation <https://www.php.net/manual/en/function.include.php>`__
