.. _defined:
.. meta::
	:description:
		defined(): defined() is a PHP function, that checks if a constant or a class constant is defined in the current context of execution.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: defined()
	:twitter:description: defined(): defined() is a PHP function, that checks if a constant or a class constant is defined in the current context of execution
	:twitter:creator: @exakat
	:og:title: defined()
	:og:type: article
	:og:description: defined() is a PHP function, that checks if a constant or a class constant is defined in the current context of execution
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/defined.ini.html
	:og:locale: en


defined()
---------

defined() is a PHP function, that checks if a constant or a class constant is defined in the current context of execution.

defined() is a function, and may be called on any piece of string. true is returned when the string is a valid name of a constant, and a value for it was found. Otherwise, it returns false, without error.

defined() doesn't take into account the 'use const' expressions: it should be a fully qualified constant name, or a relative one.


.. code-block:: php
   
   
   <?php
       var_dump(defined('UNKNOWN'));         // false
       var_dump(defined('Not a constant'));  // false
       var_dump(defined('E_ALL'));           // true
       var_dump(defined('\E_ALL'));          // truet
       
       // use expression are not handled
       use const E_ALL as E;
       var_dump(defined('\E'));               // false
   
       // with class constants
       class E { const E = 1; }
       var_dump(defined('E'));                // false
       var_dump(defined('E::E'));             // true
   
       // do not confuse the constant and its value
       const F = 'E';
       var_dump(defined(F));                  // false
   ?>
   


`Documentation <https://www.php.net/manual/en/control-structures.alternative-syntax.php>`__
