# Data Lake
A data lake is a storage repository that keeps large volumes of data in its raw, original format until it is needed. Files such as JSON logs, CSV exports, images or Parquet files are written as they are produced, in object storage or a distributed file system, without being cleaned or reshaped first.

The schema is applied when the data is read, not when it is written. This schema-on-read approach lets teams collect data cheaply and decide later how to use it, but it also means nothing stops a lake from filling with duplicated, undocumented or contradictory files. A lake without naming conventions, ownership and cataloguing quickly becomes what is often called a data swamp.

Data lakes are usually paired with a processing engine that queries the files in place, and with a curated layer, such as a data warehouse, for the cleaned data that reports depend on. A PHP application mostly writes to a lake: it stores events or exports as files, and leaves the analysis to other tools.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/data-lake.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/data-lake.html","name":"Data Lake","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 10 Nov 2026 11:48:16 +0000","dateModified":"Tue, 10 Nov 2026 11:48:16 +0000","description":"A data lake is a storage repository that keeps large volumes of data in its raw, original format until it is needed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/data-lake.html"]}],"alternateName":["datalake"],"keywords":["concept","architecture","data"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/data-warehouse.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/data-lakehouse.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/etl.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parquet.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/storage-system.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cloud.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/database.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Data_lake"},{"@type":"CreativeWork","name":"Natively Connect to Azure Data Lake Storage Data in PHP","url":"https:\/\/www.cdata.com\/kb\/tech\/azuredatalake-odbc-php.rst"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.41","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"data-lake"}]}]}</script>
```php
<?php

    // Store the raw event as it is, without a fixed schema
    $event = [
        'type' => 'order.placed',
        'at' => date('c'),
        'payload' => $order->toArray(),
    ];

    // One file per event, in object storage, to be read later by any tool
    $storage->write('events/orders/' . uniqid() . '.json', json_encode($event));

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Data_lake)**
## See Also

+ [Natively Connect to Azure Data Lake Storage Data in PHP](https://www.cdata.com/kb/tech/azuredatalake-odbc-php.rst)

## Related

+ [Data Warehouse](data-warehouse.html)
+ [Data Lakehouse](data-lakehouse.html)
+ [Extract, Transform, Load (ETL)](etl.html)
+ [Parquet](parquet.html)
+ [Storage Systems](storage-system.html)
+ [Cloud](cloud.html)
+ [Database](database.html)
