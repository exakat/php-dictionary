.. _global-space:

Global Space
------------

The term "global space" refers to the global namespace "\" or the top-level scope in the PHP language. The global space is where global variables, functions, and constants reside. When you define a variable, function, or constant without specifying a namespace, it belongs to the global space.

It is recommended to avoid using the global space for any definition: they should be stored in a custom namespace.


.. code-block:: php
   
   <?php
   
   // This is the global space
   namespace {} 
   
   ?>


`Documentation <https://www.php.net/manual/en/language.namespaces.global.php>`__
