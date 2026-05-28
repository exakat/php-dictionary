.. _sqlite3:
.. _sqlite:
.. meta::
	:description:
		SQLite3: SQLite is a C-language library that implements a small, fast, self-contained, high-reliability, full-featured, SQL database engine.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: SQLite3
	:twitter:description: SQLite3: SQLite is a C-language library that implements a small, fast, self-contained, high-reliability, full-featured, SQL database engine
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: SQLite3
	:og:type: article
	:og:description: SQLite is a C-language library that implements a small, fast, self-contained, high-reliability, full-featured, SQL database engine
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/sqlite3.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"SQLite3","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 28 May 2026 06:09:54 +0000","dateModified":"Thu, 28 May 2026 06:09:54 +0000","description":"SQLite is a C-language library that implements a small, fast, self-contained, high-reliability, full-featured, SQL database engine","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/SQLite3.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


SQLite3
-------

SQLite is a C-language library that implements a small, fast, self-contained, high-reliability, full-featured, SQL database engine.

The related extension is SQLite3. It allows the creation and usage of file-based or memory-based databases.

SQLite3 is also available with PDO (Portable Document File), with the pdo_sqlite engine.

.. code-block:: php
   
   <?php
   $db = new SQLite3('my.sqlite3');
   
   $results = $db->query('SELECT bar FROM foo');
   while ($row = $results->fetchArray()) {
       var_dump($row);
   }
   ?>


`Documentation <https://www.sqlite.org/index.html>`__

See also `SQLite3 in PHP <https://www.php.net/sqlite3>`_ and `How to Store Images in SQLite with PHP <https://www.twilio.com/en-us/blog/developers/tutorials/building-blocks/store-images-sqlite-php>`_.

Related : :ref:`Simple Query Language (SQL) <sql>`, :ref:`SQL Database <sql-database>`, :ref:`PHP Data Objects (PDO) <pdo>`
