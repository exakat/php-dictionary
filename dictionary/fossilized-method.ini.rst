.. _fossilized-method:

Fossilized Methods
------------------

A method become fossilized when it is overwritten many times, leading to the difficulty to update the method signature, without impacting many parts of the code. 


.. code-block:: php
   
   <?php
   
   class x {
       function foo(A $a) : array {}
   }
   
   class y1 extends x {
       function foo(A $a) : array {}
   }
   
   class y2 extends x {
       function foo(A $a) : array {}
   }
   
   // Updating this method means updating y2, y1, x... 
   class yN extends x {
       function foo(A $a) : array {}
   }
   
   ?>


See also `Method fossilisation <https://www.exakat.io/en/method-fossilisation/>`_

Related : :ref:`Method <method>`
