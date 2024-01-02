.. _segmentation-fault:

Segmentation Fault
------------------

``Segmentation fault`` is the laconic error message that is displayed when PHP crashes. It signals an error occurred during the execution of the PHP code, and it was not handled by any part of the engine. 

Segmentation fault are notoriously hard to fix. They are often linked to a bug, and there are some rare PHP syntax that leads to them. PHP 8.3 addresses them with a sensor that stops the problem before going out of hand.


.. code-block:: php
   
   <?php
   
   // start the file by including itself immediately.
   // What do you expect? 
   include __FILE__; 
   
   // Segmentation fault
   
   ?>


`Documentation <https://www.zend.com/blog/debugging-php-segmentation-faults>`__

See also `Find Segfaults in PHP like a boss <https://jolicode.com/blog/find-segfaults-in-php-like-a-boss>`_
