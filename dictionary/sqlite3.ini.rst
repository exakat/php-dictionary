.. _sqlite:
.. _sqlite3:
.. meta::
	:description:
		Sqlite3: SQLite is a C-language library that implements a small, fast, self-contained, high-reliability, full-featured, SQL database engine.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Sqlite3
	:twitter:description: Sqlite3: SQLite is a C-language library that implements a small, fast, self-contained, high-reliability, full-featured, SQL database engine
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Sqlite3
	:og:type: article
	:og:description: SQLite is a C-language library that implements a small, fast, self-contained, high-reliability, full-featured, SQL database engine
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/sqlite.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Sqlite3","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 09 Nov 2025 18:04:18 +0000","dateModified":"Sun, 09 Nov 2025 18:04:18 +0000","description":"SQLite is a C-language library that implements a small, fast, self-contained, high-reliability, full-featured, SQL database engine","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Sqlite3.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Sqlite3
-------

SQLite is a C-language library that implements a small, fast, self-contained, high-reliability, full-featured, SQL database engine.

The related extension is Sqlite3. It allows the creation and usage of file-based or memory-based databases.

Sqlite3 is also available with PDO (Portable Document File), with the pdo_sqlite engine.


.. code-block:: php
   
   <?php
   $db = new SQLite3('my.sqlite3');
   
   $results = $db->query('SELECT bar FROM foo');
   while ($row = $results->fetchArray()) {
       var_dump($row);
   }
   ?>
   


`Documentation <https://www.sqlite.org/index.html>`__

See also `SQLite3 in PHP <https://www.php.net/sqlite3>`_

Related : :ref:`Simple Query Language (SQL) <sql>`, :ref:`PHP Data Objects (PDO) <pdo>`
