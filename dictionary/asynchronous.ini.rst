.. _asynchronous:
.. _asynch:

Asynchronous
------------

Asynchronous PHP, often abbreviated as async PHP, refers to the capability of executing PHP code asynchronously, meaning that tasks can run concurrently without waiting for each other to complete. Traditional PHP scripts execute code synchronously, where each task must finish before the next one starts. Asynchronous PHP allows tasks to start and run independently, improving efficiency and performance, especially for tasks like handling multiple HTTP requests, database operations, or file I/O.

There are various libraries and frameworks available for implementing asynchronous PHP, such as Fiber, ReactPHP, Amp, and Swoole. 

.. code-block:: php
   
   <?php
   
   function async_task($data) {
       // Simulate some asynchronous task, like fetching data from an API
       usleep(1000000); // Sleep for 1 second to mimic a time-consuming task
       return Processed data: $data;
   }
   
   $fiber = new Fiber(function () {
       $data = Some data to process;
       $result = async_task($data);
       Fiber::suspend($result); // Suspend the fiber and yield the result
   });
   
   // Start the fiber
   $fiber->start();
   
   // Main program can continue execution while the fiber runs asynchronously
   echo Main program continues...\n;
   
   // Resume the fiber and get the result
   $result = $fiber->resume();
   echo Fiber result: $result\n;
   
   ?>


See also `Exploring Async PHP <https://dev.to/jackmarchant/exploring-async-php-5b68>`_

Related : :ref:`Synchronous <synchronous>`
