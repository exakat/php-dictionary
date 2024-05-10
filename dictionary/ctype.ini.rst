.. _ctype:

Ctype
-----

`ctype` is a set of functions used for character type checking. These functions are primarily designed to determine the type of characters in a string. They are useful for tasks such as input validation, data processing, and character manipulation. The ctype functions are part of PHP's standard library.

.. code-block:: php
   
   <?php
   $strings = array('KjgWZC', 'arf12');
   foreach ($strings as $testcase) {
       if (ctype_alpha($testcase)) {
           echo "The string $testcase consists of all letters.\n";
       } else {
           echo "The string $testcase does not consist of all letters.\n";
       }
   }
   ?>


`Documentation <https://www.php.net/manual/en/book.ctype.php>`__

See also `An Introduction to Ctype Functions <https://www.sitepoint.com/an-introduction-to-ctype-functions/>`_

Related : :ref:`Validation <filter>`
