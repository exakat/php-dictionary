# Column Database
A column database, or column-oriented, columnar database, stores data by column rather than by row. In a traditional row-oriented database, all the fields of a record are stored together. In a columnar database, each column's values are stored contiguously.

This layout is particularly efficient for analytical queries that read only a few columns across a large number of rows, OLAP workloads, because:

+ Only the columns needed for a query need to be read from disk
+ Columnar storage compresses well, since similar values are adjacent
+ Aggregate functions, such as SUM, AVG, COUNT, etc. operate on contiguous memory

Popular columnar databases used with PHP include ClickHouse, Apache Parquet and its file format, Amazon Redshift, and Google BigQuery.

Row-oriented databases, such as MariaDB, MySQL, PostgreSQL, remain better for OLTP workloads that access full records.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/column-database.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/column-database.html","name":"Column Database","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 14:35:14 +0000","dateModified":"Sat, 08 Aug 2026 14:35:14 +0000","description":"A column database, or column-oriented, columnar database, stores data by column rather than by row","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Column Database.html"]}],"alternateName":["columnar-database","column-oriented-database","column-store"],"keywords":["database","concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/database.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sql-database.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/graph-database.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nosql-database.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parquet.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Column-oriented_DBMS"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"column-database"}]}]}</script>
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

+ [Database](database.html)
+ [SQL Database](sql-database.html)
+ [Graph Database](graph-database.html)
+ [Nosql Database](nosql-database.html)
+ [Parquet](parquet.html)
