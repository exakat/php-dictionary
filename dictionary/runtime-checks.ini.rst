.. _runtime-checks:

Runtime Checks
--------------

Runtime checks refer to the process of verifying certain conditions or constraints during the execution of a script. These checks are performed dynamically while the script is running, as opposed to static checks which are done before the script is executed. Runtime checks help ensure that the program behaves as expected and can catch potential issues during execution.

.. code-block:: php
   
   <?php
   
   // string $string is a static check : it can be checked before running
   function foo(string $string, $argument) {
   	// This is a runtime check : it needs to run
   	if (is_string($argument)) {
   		// 
   	}
   }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Runtime_verification>`__
