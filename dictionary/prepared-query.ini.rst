.. _prepared-query:

Prepared Query
--------------

A prepared query is a compiled query, where data are provided as parameters.

Instead of executing the query at once, the query is compiled first, and placeholders are filled later with the actual data. This prevents injections, as the data and the query are separated.

Most PHP DB extensions support prepared statements. Prepared statement may also be available with other systems than SQL databases, such as Gremlin server. 


.. code-block:: php
   
   <?php
   // Example from PHP manual
   /* Execute a prepared statement by passing an array of values */
   $sth = $dbh->prepare('SELECT name, colour, calories
       FROM fruit
       WHERE calories < ? AND colour = ?');
   $sth->execute(array(150, 'red'));
   $red = $sth->fetchAll();
   $sth->execute(array(175, 'yellow'));
   $yellow = $sth->fetchAll();
   ?>


`Documentation <https://en.wikipedia.org/wiki/Prepared_statement>`__

Related : :ref:`Simple Query Language (SQL) <sql>`

Added in PHP 5.0+
