.. _semantics:

Semantics
---------

Semantics is related with the meaning of things. In particular, when naming structures, such as variables, classes, methods, properties, goto labels, use alias, functions or constants, the name should be meaningful. 

While naming doesn't impact the code itself, as names are free, they do have a serious impact on human understanding of the code. 

It is also possible to find inconsistencies between the name and its usage. For example, when a name is used for an unexpected type. 



.. code-block:: php
   
   <?php
   
   function foo(User $commenter) { }
   
   // Inconsistence between the parameter name and its type
   function bar(array $string) { }
   
   ?>

