.. _directoryiterator:

DirectoryIterator
-----------------

 The DirectoryIterator class provides a simple interface for viewing the contents of filesystem directories. 

.. code-block:: php
   
   <?php
   $iterator = new DirectoryIterator(__DIR__);
   while($iterator->valid()) {
       $file = $iterator->current();
       echo $iterator->key() . " => " . $file->getFilename() . "\n";
       $iterator->next();
   }
   ?>


`Documentation <https://www.php.net/manual/en/class.directoryiterator.php>`__

Related : :ref:`Iterator <iterator>`, :ref:`Standard PHP Library (SPL) <spl>`
