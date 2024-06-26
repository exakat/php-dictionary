.. _mysqli:

mysqli
------

The mysqli extension provide access to MySQL database server, with version 4.1 and above. The mysqli extension has replaced the previous mysql extension: the ``i`` means improved. 

mysqli offers support to OOP and functional API, prepared statement, multiple queries and more. 

mysqli is included in PHP core distribution since PHP 5. 


.. code-block:: php
   
   <?php
   
   $mysqli = new mysqli(localhost, my_user, my_password, world);
   
   /* Create table doesn't return a resultset */
   $result = $mysqli->query(SELECT * FROM my_table);
   
   ?>


`Documentation <https://www.php.net/manual/en/book.mysqli.php>`__
