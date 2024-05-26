.. _synchronous:

Synchronous
-----------

Synchronous PHP refers to the traditional way PHP applications execute code: synchronously, or in a blocking manner. In synchronous PHP, tasks are executed sequentially, meaning that each task must finish before the next one starts.

When a PHP script encounters a blocking operation, such as a file I/O operation, a database query, or a network request, it waits until that operation completes before proceeding to the next line of code. This sequential execution model can lead to inefficiencies, especially when dealing with tasks that can be performed concurrently.

Synchronous is the default way of working for PHP.


See also `Asynchronous and concurrent HTTP requests in PHP <https://gorannikolovski.com/blog/asynchronous-and-concurrent-http-requests-in-php>`_

Related : :ref:`Asynchronous <asynchronous>`
