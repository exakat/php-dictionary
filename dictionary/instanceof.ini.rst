.. _instanceof:

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
