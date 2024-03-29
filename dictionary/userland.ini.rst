.. _userland:

Userland
--------

A `userland` feature, or definition, is a piece of code defined with PHP code, by one of the PHP developer. `userland` features are opposed to `native` features, which are available within PHP itself.

Functions, classes, enums, traits, constants, etc. may be userland. Loaded component with composer from packagist are also userland structures. 

The main difference between userland and native features are tenuous. Though, some very specific feature may be reserved to native features. For example, magic methods are case-insensitive (and magic), while userland constant cannot be case-insensitive. This is never critical.

There are some specific guidelines for userland naming. 


.. code-block:: php
   
   <?php
   
   // foo is a userland function
   function foo() {}
   
   ?>


`Documentation <https://www.php.net/manual/en/userlandnaming.php>`__
