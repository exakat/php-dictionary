.. _query-string:

Query String
------------

The query string is a part of a URL that contains data and parameters to be passed to a web server. It is typically located at the end of a URL and starts with a question mark (?), followed by key-value pairs separated by ampersands (&). 

The values passed in the query string are available in the $_GET superglobal array. The keys of this array correspond to the names of the parameters in the query string, and the values are the corresponding values passed.

.. code-block:: php
   
   <?php
   
   // https://www.example.com/index.php?x=1
   
   print_r($_GET);
   Array(
   	[x] => 1
   )
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Query_string>`__

Related : :ref:`Universal Resource Locator (URL) <url>`, :ref:`$_GET <$_get>`
