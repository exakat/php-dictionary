.. _empty:

Empty
-----

Empty is a language structure, which determines whether a variable is empty. 

A variable is considered empty if it does not exist or if its value equals false. This may overlap with the usage of isset().


.. code-block:: php
   
   <?php
   
   // True
   var_dump(empty($a));
   
   $b = [];
   // True
   var_dump(empty($b));
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.static.php#language.oop5.static.properties>`__

Related : :ref:`Language construct <language-construct>`, :ref:`Isset <isset>`
