.. _custom:

Custom
------

A feature is called 'custom' when it is not part of the standard installation of PHP, any PHP extension or a publish library. For example, the function foo() is generally a custom function.

Any declaration object may be custom : constants, variables, classes, interfaces, enums, traits. 

A custom asset is usually the last to be defined, and, as such, has to use a distinct name. For example, declaring a function called ``wp_header`` is possible as long as the code is not part of Wordpress, which does declare it as a common set of features.


.. code-block:: php
   
   <?php
   
   // This is a custom function
   function foo() {}
   
   ?>


Related : :ref:`Native <built-in>`
