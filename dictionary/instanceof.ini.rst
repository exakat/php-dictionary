.. _instanceof:
.. meta::
	:description:
		instanceof: `instanceof` is used to determine whether a PHP variable is an instantiated object of a certain class.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: instanceof
	:twitter:description: instanceof: `instanceof` is used to determine whether a PHP variable is an instantiated object of a certain class
	:twitter:creator: @exakat
	:og:title: instanceof
	:og:type: article
	:og:description: `instanceof` is used to determine whether a PHP variable is an instantiated object of a certain class
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/instanceof.ini.html
	:og:locale: en


instanceof
----------

`instanceof` is used to determine whether a PHP variable is an instantiated object of a certain class. It is related to the function is_a().

`instanceof` has a higher precedence than `!` operator, so it is applied before the latter.  In case of confusion, use parenthesis.



.. code-block:: php
   
   <?php
   
   if ($user instanceof Administrator) {
       $user->admin();
   }
   
   // If The user is not of class User...
   if ( !$user instanceof User ) {
   //if ( !($user instanceof User) ) {
       $user->admin();
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.type.php#language.operators.type>`__
