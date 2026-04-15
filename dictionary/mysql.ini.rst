.. _mysql:
.. meta::
	:description:
		MySQL: ``mysql`` is both the name of a PHP extension that provides the interface to interact with the MySQL database, and the database itself.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: MySQL
	:twitter:description: MySQL: ``mysql`` is both the name of a PHP extension that provides the interface to interact with the MySQL database, and the database itself
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: MySQL
	:og:type: article
	:og:description: ``mysql`` is both the name of a PHP extension that provides the interface to interact with the MySQL database, and the database itself
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/mysql.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"MySQL","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Apr 2026 09:35:21 +0000","dateModified":"Mon, 13 Apr 2026 09:35:21 +0000","description":"``mysql`` is both the name of a PHP extension that provides the interface to interact with the MySQL database, and the database itself","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/MySQL.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


MySQL
-----

``mysql`` is both the name of a PHP extension that provides the interface to interact with the MySQL database, and the database itself. ``mysql`` is also known as ``mysqli``, as the original PHP extension has been improved, over the years. All three names may be interchangeable, depending on the context.

``mysqli`` defines functions, constants and classes. It has been upgraded to use objects instead of resources.

``mysql`` also applies to ``MariaDB``, which is a drop-in replacement of ``MySQL``.


.. code-block:: php
   
   <?php
   
   // Connecting, selecting database
   $link = mysql_connect('mysql_host', 'mysql_user', 'mysql_password')
       or die('Could not connect: ' . mysql_error());
   echo 'Connected successfully';
   mysql_select_db('my_database') or die('Could not select database');
   
   // Performing SQL query
   $query = 'SELECT * FROM my_table';
   $result = mysql_query($query) or die('Query failed: ' . mysql_error());
   
   // Printing results in HTML
   echo <table>\n;
   while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
       echo \t<tr>\n;
       foreach ($line as $col_value) {
           echo \t\t<td>$col_value</td>\n;
       }
       echo \t</tr>\n;
   }
   echo </table>\n;
   
   // Free resultset
   mysql_free_result($result);
   
   // Closing connection
   mysql_close($link);
   
   ?>


`Documentation <https://www.php.net/manual/en/book.mysql.php>`__

See also https://www.mysql.org/, https://mariadb.org/, https://medium.com/@barbiedisemyworld/an-introduction-to-php-and-mysql-inserting-and-fetching-from-mysql-fe16261f3228

Related : :ref:`mysqli <mysqli>`
