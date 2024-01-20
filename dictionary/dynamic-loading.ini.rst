.. _dynamic-loading:

Dynamic Loading
---------------

Dynamic Loading is related to the loading of PHP extensions, at execution time. 

Most of the time, the extensions are compiled with PHP, and loaded at startup. For development purposes, or for distribution purposes, some libraries may be loaded at execution time, with the dl() function.

Dl() calls are considered bad for performances and for security. 



.. code-block:: php
   
   <?php
       // add extra features to PHP
       dl('ldap.so');
   ?>
   


`Documentation <https://www.php.net/manual/en/function.dl.php>`__
