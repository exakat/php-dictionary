.. _eval:

Eval()
------

The eval() function executes a string as a PHP code.

eval() has been used originally to obtain features that PHP did not offer. Nowadays, those features are rare enough that it is recommended to find a safe alternative, before relying on it.



.. code-block:: php
   
   <?php
   
   $name = 'v';
   $value = 'vvvv';
   
   // Set a variable with a dynamic name
   eval('$'.$name.' = "'.$value.'"');
   // equivalent to $$name = $value;
   
   ?>


`Documentation <https://www.php.net/manual/en/function.eval.php>`__

See also `Eval function in PHP <https://www.tutorialspoint.com/eval-function-in-php>`_, `The Land where PHP uses eval() <https://www.exakat.io/en/land-where-php-uses-eval/>`_
