.. _mysqli:
.. meta::
	:description:
		mysqli: The mysqli extension provide access to MySQL database server, with version 4.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: mysqli
	:twitter:description: mysqli: The mysqli extension provide access to MySQL database server, with version 4
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: mysqli
	:og:type: article
	:og:description: The mysqli extension provide access to MySQL database server, with version 4
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/mysqli.ini.html
	:og:locale: en


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
