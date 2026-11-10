# Data Lakehouse
A data lakehouse combines the low-cost, open storage of a data lake with the management features of a data warehouse. Data stays in files in object storage, but it is organised into tables with a metadata layer that records the schema, the file list and the change history, so the same files can be queried with ACID guarantees, and updated or deleted safely.

The aim is to avoid keeping two copies of the data: one raw copy in a lake for data science and one curated copy in a warehouse for reports. In a lakehouse, both workloads read the same tables, and the table format, such as Apache Iceberg, Delta Lake or Apache Hudi, provides the structure that a plain lake lacks.

The trade-off is that a lakehouse is only as tidy as its table definitions. Schema changes, retention and access control still need an owner, and query performance depends on file layout and partitioning, just as it does in a warehouse.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/data-lakehouse.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/data-lakehouse.html","name":"Data Lakehouse","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 10 Nov 2026 11:37:54 +0000","dateModified":"Tue, 10 Nov 2026 11:37:54 +0000","description":"A data lakehouse combines the low-cost, open storage of a data lake with the management features of a data warehouse","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/data-lakehouse.html"]}],"alternateName":["datalakehouse","lakehouse"],"keywords":["concept","architecture","data"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/data-lake.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/data-warehouse.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parquet.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/schema.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/etl.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mpp-database.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Data_lake#Data_lakehouse"},{"@type":"CreativeWork","name":"Data lakehouse - Wikipedia","url":"https:\/\/en.wikipedia.org\/wiki\/Data_lake#Data_lakehouse"},{"@type":"CreativeWork","name":"Apache Iceberg","url":"https:\/\/iceberg.apache.org\/"},{"@type":"CreativeWork","name":"Delta Lake","url":"https:\/\/delta.io\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.41","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"data-lakehouse"}]}]}</script>
```php
<?php

    // Write an order batch as a table in the lakehouse, not as loose files
    // The table format records the schema, the files, and every change
    $lakehouse->table('sales.orders')->append($orders);

    // Reporting and data science both query the same table
    $rows = $lakehouse->query(
        'SELECT customer_region, SUM(total) FROM sales.orders GROUP BY customer_region'
    );

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Data_lake#Data_lakehouse)**
## See Also

+ [Data lakehouse - Wikipedia](https://en.wikipedia.org/wiki/Data_lake#Data_lakehouse)
+ [Apache Iceberg](https://iceberg.apache.org/)
+ [Delta Lake](https://delta.io/)

## Related

+ [Data Lake](data-lake.html)
+ [Data Warehouse](data-warehouse.html)
+ [Parquet](parquet.html)
+ [Schema](schema.html)
+ [Extract, Transform, Load (ETL)](etl.html)
+ [Massively Parallel Processing Database (MPP)](mpp-database.html)
