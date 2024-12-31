.. _define:
.. meta::
	:description:
		define(): define() is a PHP function, that introduces constant definitions.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: define()
	:twitter:description: define(): define() is a PHP function, that introduces constant definitions
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: define()
	:og:type: article
	:og:description: define() is a PHP function, that introduces constant definitions
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/define.ini.html
	:og:locale: en


define()
--------

define() is a PHP function, that introduces constant definitions. 

define() is a function, and may be called anywhere. It is slower than `const`, as it is only executed at runtime. define() doesn't allow class constants creation.

define() used to create case-insensitive constant, but this was abandoned in PHP 7.3.



.. code-block:: php
   
   
   <?php
       define('HELLO', 'Hello');
       
       print HELLO . " world\n";
   ?>
   


`Documentation <https://www.php.net/manual/en/control-structures.alternative-syntax.php>`__
