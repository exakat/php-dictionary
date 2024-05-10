.. _dynamic-class:

Dynamic Class
-------------

A dynamic class is a class whose fully qualified name is defined at execution time. 

This is convenient for module systems, where the actual class is named from an external configuration.


.. code-block:: php
   
   <?php
   
   class AB {}
   
   class AC {}
   
   $name = '\A'.(rand(0, 1) ? 'B' : 'C');
   
   $object = new $name;
   
   ?>


Related : :ref:`new <new>`
