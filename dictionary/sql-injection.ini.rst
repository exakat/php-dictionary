.. _sql-injection:
.. meta::
	:description:
		SQL Injection: A SQL injection is a vulnerability, where external data are used to change the behavior of a SQL query.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: SQL Injection
	:twitter:description: SQL Injection: A SQL injection is a vulnerability, where external data are used to change the behavior of a SQL query
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: SQL Injection
	:og:type: article
	:og:description: A SQL injection is a vulnerability, where external data are used to change the behavior of a SQL query
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/sql-injection.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"SQL Injection","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 18 Feb 2026 20:55:12 +0000","dateModified":"Wed, 18 Feb 2026 20:55:12 +0000","description":"A SQL injection is a vulnerability, where external data are used to change the behavior of a SQL query","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/SQL Injection.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


SQL Injection
-------------

A SQL injection is a vulnerability, where external data are used to change the behavior of a SQL query. 

In the example below, ``$_GET`` are directly used inside the query. By using a clever string (shown in comment), it is possible to bypass the whole condition and get access to any user. 

Among the solutions to mitigate this problem : filter adequately the incoming data; use prepared statements.

.. code-block:: php
   
   <?php
   
       // $_GET['name'] = ' OR 1 = 1 OR ';
       $SQL_query = "SELECT * FROM users WHERE name=" . $_GET['name'] . " AND password=" . $_GET['pass'] . "";
   
       $connexion->query($SQL_query);
   
   ?>


`Documentation <https://www.php.net/manual/en/security.database.sql-injection.php>`__

See also https://brightsec.com/blog/php-sql-injection/, https://docs.php.earth/security/sql-injection/

Related : :ref:`Semicolon <semicolon>`, :ref:`Prepared Query <prepared-query>`, :ref:`Injection <injection>`
