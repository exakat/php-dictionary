.. _dynamic-call:
.. meta::
	:description:
		Dynamic Call: A dynamic call happens when part of the syntax comes from a variable, and is not known at code writing time.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Dynamic Call
	:twitter:description: Dynamic Call: A dynamic call happens when part of the syntax comes from a variable, and is not known at code writing time
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Dynamic Call
	:og:type: article
	:og:description: A dynamic call happens when part of the syntax comes from a variable, and is not known at code writing time
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/dynamic-call.ini.html
	:og:locale: en


Dynamic Call
------------

A dynamic call happens when part of the syntax comes from a variable, and is not known at code writing time.

In PHP, every syntax may use a dynamic call.



.. code-block:: php
   
   
   <?php
   
   $constant = "Name";
   echo constant($constant); 
   echo constant("someClass::$constant"); 
   
   $variable = 'a';
   $a = 'b';
   echo $$variable; // b
   
   $function = 'mine';
   $function($arg);
   
   $className = '\stdclass';
   new $className;
   
   $method = 'method';
   $object->$method();
   
   echo $object::CONSTANT;
   
   ?>
   


`Documentation <https://www.php.net/manual/en/language.generators.syntax.php#control-structures.yield.from>`__

See also `All the Dynamic Syntaxes in PHP <https://www.exakat.io/en/all-the-dynamic-syntaxes-in-php/>`_
