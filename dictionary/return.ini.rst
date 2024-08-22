.. _return:

Return
------

`return` ends the current method, and sends back a produced value to the calling module. Execution resumes at the expression following the called module's invocation. 

.. code-block:: php
   
   <?php
   
   function foo() {
       if (rand(0, 1)) {
           return 'tail';
       }
       
       return 'face';
   }
   
   echo foo();
   
   ?>


`Documentation <https://www.php.net/manual/en/function.return.php>`__

Related : :ref:`Functions <function>`, :ref:`Method <method>`, :ref:`Closure <closure>`
