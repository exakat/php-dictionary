.. _reserved-name:
.. _reserved-word:
.. meta::
	:description:
		Reserved Names: PHP shares several namespaces with the users, and has reserved some names for its own usage.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Reserved Names
	:twitter:description: Reserved Names: PHP shares several namespaces with the users, and has reserved some names for its own usage
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Reserved Names
	:og:type: article
	:og:description: PHP shares several namespaces with the users, and has reserved some names for its own usage
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/reserved-name.ini.html
	:og:locale: en


Reserved Names
--------------

PHP shares several namespaces with the users, and has reserved some names for its own usage. 

+ Namespaces : the global namespace, also known as ``\`` is reserved for PHP.
+ Keywords : ``fn``, ``finally``, ``insteadof``, ``null``, ``void``, ...
+ classes, constants, functions, interfaces
+ variables : ``$GLOBALS``, ``$_GET``,...



.. code-block:: php
   
   <?php
   
   // function void() would not compile
   function theVoid() : bool { }
   
   ?>


`Documentation <https://www.php.net/manual/en/reserved.php>`__

See also `Predefined Variables <https://www.php.net/manual/en/language.variables.predefined.php>`_
