---
type: "concept"
title: "Column Database"
description: "A column database, or column-oriented database, columnar database, or column-store, stores data by column rather than by row."
resource: "https://en.wikipedia.org/wiki/Column-oriented_DBMS"
tags: ["database", "concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Column Database

A column database, or column-oriented database, columnar database, or column-store, stores data by column rather than by row. In a traditional row-oriented database, all the fields of a record are stored together. In a columnar database, each column's values are stored contiguously.

This layout is particularly efficient for analytical queries that read only a few columns across a large number of rows, OLAP workloads, because:

+ Only the columns needed for a query need to be read from disk
+ Columnar storage compresses well, since similar values are adjacent
+ Aggregate functions, such as SUM, AVG, COUNT, etc. operate on contiguous memory

Popular columnar databases used with PHP include ClickHouse, Apache Parquet and its file format, Amazon Redshift, and Google BigQuery.

Row-oriented databases, such as MariaDB, MySQL, PostgreSQL, remain better for OLTP workloads that access full records.

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

## Documentation
- [https://en.wikipedia.org/wiki/Column-oriented_DBMS](https://en.wikipedia.org/wiki/Column-oriented_DBMS)

## See Also
- [ClickHouse Documentation](https://clickhouse.com/docs)
- [Apache Parquet](https://parquet.apache.org/)

## Related
- [Database](/features/database.md)
- [SQL Database](/features/sql-database.md)
- [Graph Database](/features/graph-database.md)
- [Nosql Database](/features/nosql-database.md)
- [Parquet](/features/parquet.md)

