.. _disable-functions:

Disable Functions
-----------------

This PHP directive is used to prevent specific functions from being called in PHP scripts. It helps mitigate potential security vulnerabilities or enforce practices by forbidding usage of specific functions.

This directive requires a list of PHP functions, separated by a comma, and set in the PHP.ini file : this is read at startup time and cannot be changed later. 

disable_functions only works on PHP native functions. It is not possible to preemptively disable a custom function. 

Disabled functions appear as undefined : in fact, they can also be redefined, with a custom code and then used. 


.. code-block:: php
   
   // in php.ini
   
   disable_functions="print_r,phpinfo,var_dump" 
   
   


`Documentation <https://www.php.net/manual/en/ini.core.php#ini.disable-functions>`__

Related : :ref:`Functions <function>`
