.. _column-database:
.. _columnar-database:
.. _column-oriented-database:
.. _column-store:
.. meta::
	:description:
		Column Database: A column database, or column-oriented, columnar database, stores data by column rather than by row.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Column Database
	:twitter:description: Column Database: A column database, or column-oriented, columnar database, stores data by column rather than by row
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Column Database
	:og:type: article
	:og:description: A column database, or column-oriented, columnar database, stores data by column rather than by row
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/column-database.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/column-database.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/column-database.ini.html","name":"Column Database","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 17 Jul 2026 09:08:33 +0000","dateModified":"Fri, 17 Jul 2026 09:08:33 +0000","description":"A column database, or column-oriented, columnar database, stores data by column rather than by row","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Column Database.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Column Database
---------------

A column database, or column-oriented, columnar database, stores data by column rather than by row. In a traditional row-oriented database, all the fields of a record are stored together. In a columnar database, each column's values are stored contiguously.

This layout is particularly efficient for analytical queries that read only a few columns across a large number of rows, OLAP workloads, because:

+ Only the columns needed for a query need to be read from disk
+ Columnar storage compresses well, since similar values are adjacent
+ Aggregate functions, such as SUM, AVG, COUNT, etc. operate on contiguous memory

Popular columnar databases used with PHP include ClickHouse, Apache Parquet and its file format, Amazon Redshift, and Google BigQuery.

Row-oriented databases, such as MariaDB, Mysql, PostgreSQL, remain better for OLTP workloads that access full records.


.. code-block:: php
   
   <?php
   
       // Example: querying ClickHouse (columnar DB) via HTTP
       $ch = curl_init('http://localhost:8123/?query=SELECT+sum(price)+FROM+orders+FORMAT+JSON');
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
       $result = curl_exec($ch);
       curl_close($ch);
       
       $data = json_decode($result, true);
       echo $data['data'][0]['sum(price)'];
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Column-oriented_DBMS>`__

Related : :ref:`Database <database>`, :ref:`SQL Database <sql-database>`, :ref:`Graph Database <graph-database>`, :ref:`Nosql Database <nosql-database>`, :ref:`Parquet <parquet>`
