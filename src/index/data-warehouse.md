# Data Warehouse
A data warehouse is a database built for analysis rather than for running an application. Data is extracted from operational systems, cleaned, reshaped into a stable schema, and loaded in a form suited to reporting, such as fact tables for orders and dimension tables for customers or dates.

Unlike a transactional database, which handles many small reads and writes, a warehouse is optimised for queries that scan large amounts of history to compute totals, trends and aggregates. Storage is usually columnar and the data is often partitioned across nodes, which is why many warehouses are MPP databases.

Data warehouses are fed by ETL or ELT pipelines. Because the data is structured and curated before it is used, reports built on a warehouse agree with each other, while the raw, unmodelled data stays in the data lake.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/data-warehouse.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/data-warehouse.html","name":"Data Warehouse","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 10 Nov 2026 11:37:54 +0000","dateModified":"Tue, 10 Nov 2026 11:37:54 +0000","description":"A data warehouse is a database built for analysis rather than for running an application","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/data-warehouse.html"]}],"alternateName":["datawarehouse"],"keywords":["concept","architecture","data"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/data-lake.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/data-lakehouse.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mpp-database.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/etl.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sql-database.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/column-database.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/schema.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Data_warehouse"},{"@type":"CreativeWork","name":"Data warehouse - Wikipedia","url":"https:\/\/en.wikipedia.org\/wiki\/Data_warehouse"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.41","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"data-warehouse"}]}]}</script>
```php
<?php

    // The application writes to its transactional database
    $orders->insert($order);

    // The warehouse, built by a nightly ETL job, answers reporting questions
    $statement = $warehouse->prepare(
        'SELECT customer_region, SUM(total) AS revenue
           FROM fact_orders
          WHERE order_date >= :since
          GROUP BY customer_region'
    );
    $statement->execute(['since' => '2026-01-01']);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Data_warehouse)**
## See Also

+ [Data warehouse - Wikipedia](https://en.wikipedia.org/wiki/Data_warehouse)

## Related

+ [Data Lake](data-lake.html)
+ [Data Lakehouse](data-lakehouse.html)
+ [Massively Parallel Processing Database (MPP)](mpp-database.html)
+ [Extract, Transform, Load (ETL)](etl.html)
+ [SQL Database](sql-database.html)
+ [Column Database](column-database.html)
+ [Schema](schema.html)
