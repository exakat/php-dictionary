.. _label:

Goto Labels
-----------

Labels are the receiving end of a goto call. They must be in the same context than the goto they relate to : there, they must be unique. There might be several goto for a single label.



.. code-block:: php
   
   
   <?php
   goto a;
   echo 'Foo';
    
   a:
   echo 'Bar';
   ?>
   


`Documentation <https://www.php.net/manual/en/control-structures.goto.php>`__

Related : :ref:`Goto <goto>`
