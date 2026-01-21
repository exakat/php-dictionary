.. _postgresql:
.. _pgsql:
.. meta::
	:description:
		PostgreSQL: ``pgsql`` is the name of the PHP extension that provides the interface to interact with the PostgreSQL database.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: PostgreSQL
	:twitter:description: PostgreSQL: ``pgsql`` is the name of the PHP extension that provides the interface to interact with the PostgreSQL database
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: PostgreSQL
	:og:type: article
	:og:description: ``pgsql`` is the name of the PHP extension that provides the interface to interact with the PostgreSQL database
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/postgresql.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"PostgreSQL","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 21 Jan 2026 08:53:06 +0000","dateModified":"Wed, 21 Jan 2026 08:53:06 +0000","description":"``pgsql`` is the name of the PHP extension that provides the interface to interact with the PostgreSQL database","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/PostgreSQL.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


PostgreSQL
----------

``pgsql`` is the name of the PHP extension that provides the interface to interact with the PostgreSQL database.

``pgsql`` defines functions, constants and classes. It has been upgraded to use objects instead of resources.

.. code-block:: php
   
   <?php
   
   // example from the PHP manual : https://www.php.net/manual/en/pgsql.examples-basic.php
   
   // Connecting, selecting database
   $dbconn = pg_connect('host=localhost dbname=publishing user=www password=foo')
       or die('Could not connect: ' . pg_last_error());
   
   // Performing SQL query
   $query = 'SELECT * FROM authors';
   $result = pg_query($dbconn, $query) or die('Query failed: ' . pg_last_error());
   
   ?>


`Documentation <https://www.php.net/manual/en/book.pgsql.php>`__

See also https://www.postgresql.org/, https://dev.to/officialozioma/how-to-build-an-application-with-php-and-postgresql-4iad
