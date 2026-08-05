# Column Database
A column database, or column-oriented, columnar database, stores data by column rather than by row. In a traditional row-oriented database, all the fields of a record are stored together. In a columnar database, each column's values are stored contiguously.

This layout is particularly efficient for analytical queries that read only a few columns across a large number of rows, OLAP workloads, because:

+ Only the columns needed for a query need to be read from disk
+ Columnar storage compresses well, since similar values are adjacent
+ Aggregate functions, such as SUM, AVG, COUNT, etc. operate on contiguous memory

Popular columnar databases used with PHP include ClickHouse, Apache Parquet and its file format, Amazon Redshift, and Google BigQuery.

Row-oriented databases, such as MariaDB, Mysql, PostgreSQL, remain better for OLTP workloads that access full records.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/column-database.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/column-database.ini.html","name":"Column Database","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 17 Jul 2026 09:08:33 +0000","dateModified":"Fri, 17 Jul 2026 09:08:33 +0000","description":"A column database, or column-oriented, columnar database, stores data by column rather than by row","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Column Database.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // Example: querying ClickHouse (columnar DB) via HTTP
    $ch = curl_init('http://localhost:8123/?query=SELECT+sum(price)+FROM+orders+FORMAT+JSON');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    
    $data = json_decode($result, true);
    echo $data['data'][0]['sum(price)'];

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Column-oriented_DBMS)**
## Related

+ [Database](database.ini.html)
+ [SQL Database](sql-database.ini.html)
+ [Graph Database](graph-database.ini.html)
+ [Nosql Database](nosql-database.ini.html)
+ [Parquet](parquet.ini.html)
