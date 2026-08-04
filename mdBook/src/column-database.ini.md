# Column Database
A column database, or column-oriented, columnar database, stores data by column rather than by row. In a traditional row-oriented database, all the fields of a record are stored together. In a columnar database, each column's values are stored contiguously.

This layout is particularly efficient for analytical queries that read only a few columns across a large number of rows, OLAP workloads, because:

+ Only the columns needed for a query need to be read from disk
+ Columnar storage compresses well, since similar values are adjacent
+ Aggregate functions, such as SUM, AVG, COUNT, etc. operate on contiguous memory

Popular columnar databases used with PHP include ClickHouse, Apache Parquet and its file format, Amazon Redshift, and Google BigQuery.

Row-oriented databases, such as MariaDB, Mysql, PostgreSQL, remain better for OLTP workloads that access full records.

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

Related : [Database](Database), [SQL Database](SQL Database), [Graph Database](Graph Database), [Nosql Database](Nosql Database), [Parquet](Parquet)
