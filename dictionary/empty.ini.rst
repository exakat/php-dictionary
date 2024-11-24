.. _empty:

Empty
-----

Empty is a language structure, which determines whether a variable is empty. 

A variable is considered empty if it does not exist or if its value equals false. This may overlap with the usage of isset().

``empty()`` has an error suppression feature, that masks various errors, such as undefined offset or undefined variables. Some other errors, like an invalid type as offset, are still reported.



.. code-block:: php
   
   <?php
   
   // True
   var_dump(empty($a));
   
   $b = [];
   // True
   var_dump(empty($b));
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.static.php#language.oop5.static.properties>`__

See also `PHP isset() vs. empty() vs. is_null() <https://code.tutsplus.com/php-isset-vs-empty-vs-is_null--cms-37162t>`_, `Avoiding empty() in PHP <https://localheinz.com/articles/2023/05/10/avoiding-empty-in-php/>`_

Related : :ref:`Language Construct <language-construct>`, :ref:`Isset <isset>`, :ref:`Null <null>`
