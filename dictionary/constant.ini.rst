.. _constant:
.. _global-constant:

Constants
---------

Constants are named values, that never change.  

Constants may be created with the const keyword or the define() function. They may be tested for existence with the defined() function.

There are global constants, which are accessible with their name and their namespaces. There are also constants in classes, interfaces, enums and traits. Those are called class constant.

Constants are namespace dependant. They can be imported using the ``use`` command. 

Constants are usually written in uppercase. 

Global constants used to be case insensitive, when created with define. This feature was removed in PHP 8. Nowadays, both ``const`` and ``define`` create case insensitive values.


.. code-block:: php
   
   <?php
   
   const A = 1;
   define('B', 2);
   
   // displays 1
   echo A;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.constants.php>`__

Related : :ref:`Static Constant <class-constant>`
