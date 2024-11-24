.. _shared-memory:

Shared Memory
-------------

Shared memory is a powerful feature in PHP that allows multiple processes to access and store data in a shared memory segment. 

.. code-block:: php
   
   <?php
      
   // adapted from the PHP manual : https://www.php.net/manual/en/shmop.examples-basic.php
   // Create 100 byte shared memory block with system id of 0xff3
   $shm_id = shmop_open(0xff3, "c", 0644, 100);
   if (!$shm_id) {
       echo "Couldn't create shared memory segment\n";
   }
   
   // Lets write a test string into shared memory
   $shm_bytes_written = shmop_write($shm_id, "my shared memory block", 0);
   if ($shm_bytes_written != strlen("my shared memory block")) {
       echo "Couldn't write the entire length of data\n";
   }
   
   // Now lets read the string back
   // 
   $my_string = shmop_read($shm_id, 0, $shm_size);
   if (!$my_string) {
       echo "Couldn't read from shared memory block\n";
   }
   echo "The data inside shared memory was: " . $my_string . "\n";
   
   ?>
   


`Documentation <https://www.php.net/manual/en/shmop.examples-basic.php>`__

See also `A Guide to the PHP SHMOP Library for Shared Memory Operations <https://reintech.io/blog/a-guide-to-php-shmop-library-for-shared-memory-operations>`_
