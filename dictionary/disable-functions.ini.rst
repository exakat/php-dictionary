.. _disable-functions:
.. meta::
	:description:
		Disable Functions: This PHP directive is used to prevent specific functions from being called in PHP scripts.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Disable Functions
	:twitter:description: Disable Functions: This PHP directive is used to prevent specific functions from being called in PHP scripts
	:twitter:creator: @exakat
	:og:title: Disable Functions
	:og:type: article
	:og:description: This PHP directive is used to prevent specific functions from being called in PHP scripts
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/disable-functions.ini.html
	:og:locale: en


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
