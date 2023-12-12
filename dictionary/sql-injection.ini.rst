.. _sql-injection:

SQL injection
-------------

A SQL injection is a vulnerability, where external data are used to change the behavior of a SQL query. 

In the example below, `$_GET` are directly used inside the query. By using a clever string (shown in comment), it is possible to bypass the whole condition and get access to any user. 

Among the solutions to mitigate this problem : filter adequately the incoming data; use prepared statements. 



.. code-block:: php
   
   
   <?php
   
   // $_GET['name'] = '" OR 1 = 1 OR "';
   $SQL_query = "SELECT * FROM users WHERE name=\\".$_GET['name']."\\" AND password=\".$_GET['pass']."\"";
   
   $connexion->query($SQL_query);
   
   ?>
   


`Documentation <https://www.php.net/manual/en/security.database.sql-injection.php>`__

See also `SQL Injection in PHP Web Applications <https://brightsec.com/blog/php-sql-injection/>`_

Related : :ref:`Semicolon <semicolon>`, :ref:`Prepared Query <prepared-query>`, :ref:`Injection <injection>`
