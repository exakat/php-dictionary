.. _type-juggling:

Type Juggling
-------------

Type juggling is the emblematic PHP feature, where data has no specific type definition, and its type may change depending on the situation.

For example, integers are translated into string when displayed, or kept as integers to be used with math operations. 

Type juggling is usually done automatically, without user intervention. Explicit type juggling is achieved with the cast operators.


.. code-block:: php
   
   <?php
   
   $a = "35";
   echo $a + 4; // display 39
   
   echo substr($a, -1); // display 5
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.type-juggling.php>`__

See also `Type Juggling and Loose Comparison <https://cheatsheet.haax.fr/web-pentest/php-vulnerabilities/type_juggling/>`_

Related : :ref:`Cast Operator <cast>`
