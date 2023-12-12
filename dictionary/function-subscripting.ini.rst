.. _function-subscripting:

Function Subscripting
---------------------

Function subscripting is the ability to apply operators like ->, ?-> or [<index>] directly on the results of a method call. 

.. code-block:: php
   
   <?php
   
   // displays the third element of the response of 'callMethod', on object 'getObject';
   echo getObject()->callMethod()[3];
   ?>


`Documentation <https://www.php.net/manual/en/functions.user-defined.php>`__

Related : :ref:`Dereferencing <dereferencing>`
