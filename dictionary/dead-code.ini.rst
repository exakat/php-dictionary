.. _dead-code:
.. _unused-code:

Dead Code
---------

Dead code refers to sections of code that are no longer executed or reachable during the program's execution. It includes any lines or blocks of code that do not contribute to the program's functionality or produce any observable results. Dead code can be the result of code modifications, changes in requirements, or mistakes during development.

Dead code is also known as unused code. It happens to any defined structure. Variables, methods, functions, classes, interfaces, etc..

.. code-block:: php
   
   <?php
   
   // bar is dead code : never executed
   function bar() { echo "World"; }
   
   // foo() is alive code : it is executed
   function foo() { echo "Hello"; }
   
   echo foo();
   ?>


See also `Delete unused code (and how to retrieve it) <https://understandlegacycode.com/blog/delete-unused-code/>`_

Related : :ref:`Zombie Code <zombie-code>`
